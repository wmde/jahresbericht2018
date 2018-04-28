/*!
 * Wikimedia Jahresbericht 2017
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

define('components/chart', [], function() {
 return class Chart {
    constructor(element) {
      this.element = element;
      this.state = {};
      this.chartHeight = 100;
      this.numberOfDates = 6;

      // Readout and prepare data from JSON chartValues set in HTML.
      this.source = [];
      this.maxValue;
      this.minValue;
      for (let dateString in chartValues) {
        this.source.push({
          'dateString': dateString,
          'days': this.getDateInDays(dateString),
          'value': chartValues[dateString],
          'count': chartValues[dateString]
        });
        this.maxValue = (!this.maxValue) ? chartValues[dateString] : Math.max(this.maxValue, chartValues[dateString]);
        this.minValue = (!this.minValue) ? chartValues[dateString] : Math.min(this.minValue, chartValues[dateString]);
      }
      // Normalize values.
      this.source.map((data) => {
        data.value = (data.value - this.minValue) / (this.maxValue - this.minValue);
        return data;
      });

      this.rangeOfDays = this.source[this.source.length - 1].days - this.source[0].days;

      this.chartCards1 = this.insertCards(this.element.querySelector('.chart__cards--desktop'), 17);
      this.chartCards2 = this.insertCards(this.element.querySelector('.chart__cards--small'), 11);
      this.chartCards3 = this.insertCards(this.element.querySelector('.chart__cards--mobile'), 6);
    }

    init() {
      this.delayedDropClass(this.chartCards1, 50, '.chart__cards--desktop');
      this.delayedDropClass(this.chartCards2, 50, '.chart__cards--small');
      this.delayedDropClass(this.chartCards3, 50, '.chart__cards--mobile');
    }

    delayedDropClass(collection, delay, parentClass, i = undefined) {
      if (i === undefined) { i = collection.length - 1; }
      collection[i].classList.remove('fix');
      if (i > 0) {
        setTimeout(() => {
          this.delayedDropClass(collection, delay, parentClass, (i - 1));
        }, delay + (Math.random() * 30));
      } else {
        setTimeout(() => {
          this.element.querySelector(parentClass).classList.remove('loading');
        }, 1000);
      }
    }

    insertCards(element, number) {
      let card = document.createElement('div');
      card.className = 'chart__card fix';
      let dates = this.element.querySelectorAll('.chart__date');
      let chartButton = this.element.querySelector('.chart__button');

      for (let i = 0; i < number; i++) {
        let node = card.cloneNode();
        node.style.right = (i * 100 / (number - 1)) + '%';
        node.style.bottom = (this.getValue(((number - 1) - i) / (number - 1)) * this.chartHeight) + '%';

        // Add mouseover event to change relating chart__date.
        let index = Math.floor((number - i) / (number / (this.numberOfDates - 1)));
        node.addEventListener('mouseover',() => {
          // Set chart__button on focus while hovering last card.
          if (i == 0) {
            chartButton.focus();
          } else {
            chartButton.blur();
          }
          this.element.querySelectorAll('.chart__date.active').forEach( date => {
            if (date.classList.contains('active')) {
              date.classList.remove('active');
            }
          });
          dates[index].classList.add('active');
        });
        element.appendChild(node);
      }
      // Remove active state of the dates omouseout to prevent date staying active.
      element.addEventListener('mouseout',() => {
        this.element.querySelectorAll('.chart__date.active').forEach( date => {
          date.classList.remove('active');
        });
        // Unfocus chartButton - this is no graphical blur.
        chartButton.blur();
      });
      return element.querySelectorAll('.chart__card');
    }

    insertDates(element, number, cards) {
      let dateDiv = document.createElement('div');
      dateDiv.className = 'chart__date';

      for (let i = 0; i < number; i++) {
        let node = dateDiv.cloneNode();
        // Get the date and value at that fraction of this.source.
        let fraction = i / (number -1);
        let days = this.source[0].days + Math.floor(fraction * this.rangeOfDays);

        let date = new Date ((days + 1) * 60*60*24*1000);
        let day = date.getDate().toString();
        let month = date.getMonth().toString();
        let year = date.getFullYear();
        if (day.length < 2) day = '0' + day;
        if (month.length < 2) month = '0' + month;

        let value = Math.floor(this.getValue(fraction) * (this.maxValue - this.minValue) + this.minValue);
        node.innerHTML = day + '.' + month + '.' + year + '<div class="chart__date-value">' + value.toLocaleString() + '</div>';
        element.appendChild(node);
      }
    }

    // Gets the interpolated value at a specified fraction of the whole table
    getValue(fraction) {
      // Get the number of days.
      let days = this.source[0].days + Math.floor(fraction * this.rangeOfDays);
      // Get data before and data after that day in this.source array.
      let dataBefore;
      let dataAfter;
      for (let i = 0; i < this.source.length; i++) {
        if (!dataAfter && this.source[i].days >= days) {
          dataAfter = this.source[i];
          dataBefore = (i == 0) ? dataAfter : this.source[i - 1];
          // Get linearily interpolated value.
          if (i == 0 ) {
            return dataBefore.value;
          } else {
            return dataBefore.value + ((days - dataBefore.days) * (dataAfter.value - dataBefore.value) / (dataAfter.days - dataBefore.days));
          }
        }
      }
    }

    // Gets 'dd.mm.YYYY' and returns number of days.
    getDateInDays(dateString) {
      let split = dateString.split('.');
      let date = new Date(split[2], split[1], split[0]);
      return Math.floor(date / (24*60*60*1000));
    }

  }
});
