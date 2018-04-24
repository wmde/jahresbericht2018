/*!
 * Wikimedia Jahresbericht 2017
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

define('components/achievements', [], function() {
 return class Achievements {
    constructor(element) {
      this.element = element;
      this.element.classList.add('loading');
      this.state = {}
      this.state.alreadyVisible = false;

      this.state.runningTasks = 0;

      this.state.store = this.element.querySelectorAll('.achievement--store');
      this.state.unseen = []; // store[Indexes] of unseen Achievements
      this.state.lastStoreIndexes = [];

      this.element.querySelector('.achievements__button').addEventListener('click', () => {
        if (this.state.runningTasks == 0) {
          this.toggleAnimation();
        }
      });
      this.element.querySelector('.achievements__cube').addEventListener('click', () => {
        if (this.state.runningTasks == 0) {
          this.toggleAnimation();
        }
      });

    }
    init() {
      if (!this.state.alreadyVisible) {
        this.state.alreadyVisible = true;
        this.toggleAnimation();
        this.element.querySelector('.achievements__button').classList.remove('invis');
      }
    }
    loadNextUnseen(el) {
      // reset unseen storeIndexes
      if (this.state.unseen.length == 0) {
        this.state.store.forEach( (achievement, index) => {
          this.state.unseen.push(index);
        });
        // remove the last visible storeIndexes
        this.state.lastStoreIndexes.forEach((index) => {
          this.state.unseen = this.state.unseen.filter(e => e !== index);
        });
      }
      // get random storeIndex
      let randIndex = Math.floor(Math.random() * this.state.unseen.length);
      let storeIndex = this.state.unseen[randIndex];
      // save the 2 most recent storeIndexes to prevent repetition
      this.state.lastStoreIndexes.push(storeIndex);
      if (this.state.lastStoreIndexes.length > 2) {
        this.state.lastStoreIndexes.shift();
      }
      // remove used storeIndex from unseen array
      this.state.unseen = this.state.unseen.filter(e => e !== storeIndex);

      // set data
      let source = this.state.store[storeIndex];
      el.querySelector('.achievement__number').dataset.number = source.dataset.number;
      el.querySelector('.achievement__number__placeholder').innerHTML = source.dataset.number;
      el.querySelector('.achievement__number__postfix').innerHTML = source.dataset.postfix;
      el.querySelector('.achievement__category').innerHTML = source.dataset.category;
      el.querySelector('.achievement__teaser').innerHTML = source.innerHTML;
    }
    toggleAnimation() {
      let el = this.element;
      let achievements = el.querySelectorAll('.achievement');

      if (el.classList.contains('loading')) {
          achievements.forEach(achievement => {
            this.state.runningTasks++;

            let number = achievement.querySelector('.achievement__number');
            this.countUp(number, () => {
              this.state.runningTasks--;
            });
          });
          el.classList.remove('loading');
      } else {
        el.classList.add('loading');
        this.state.runningTasks++;

        setTimeout(() => {
          this.state.runningTasks--;
          achievements.forEach(achievement => {
            this.loadNextUnseen(achievement);
          });
          this.toggleAnimation();
        }, 800);
      }
    }

    countUp(el, callback, duration = 700, maxRange = 13) {
      let number = el.dataset.number;
      let current = 0;
      maxRange = (maxRange > number) ? number: maxRange;
      let stepTime = Math.abs(Math.floor(duration / maxRange));
      let stepSize = Math.floor(number/maxRange);

      // freeze the size of the placeholder
      let placeholder = el.querySelector('.achievement__number__placeholder');
      placeholder.style.width = 'auto';
      placeholder.innerHTML = number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."); // thousands seperator
      placeholder.style.width = placeholder.offsetWidth + 'px';

      let timer = setInterval(() => {
        // softly decrease stepSize in the end
        if (stepSize > 1 && (current + stepSize) >= number) {
          stepSize = Math.floor(stepSize/4);
        }
        stepSize = (stepSize < 1) ? 1 : stepSize;
        current = current + stepSize;
        current = (current > number) ? number : current;
        placeholder.innerHTML = current.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        if (current == number) {
          clearInterval(timer);
          callback();
        }
      }, stepTime);
    }
  }
});
