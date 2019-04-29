/*!
 * Wikimedia Jahresbericht 2018
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
      this.state = {
        alreadyVisible: false,
        runningTasks: 0,
        loading: true, // set in HTML
        store: this.element.querySelectorAll('.achievement--store'),
        unseen: [], // Store indexes of unseen achievements.
        lastStoreIndexes: []
      };

      this.element.querySelector('.achievements__button').addEventListener('click', () => {
        if (this.state.runningTasks == 0) {
          this.toggleAnimation();
        }
      });
      this.element.querySelectorAll('.achievements__cube').forEach(cube => {
        cube.addEventListener('click', () => {
          if (this.state.runningTasks == 0) {
            this.toggleAnimation();
          }
        });
      });

    }

    init() {
      if (!this.state.alreadyVisible) {
        this.state.alreadyVisible = true;
        let achievements = this.element.querySelectorAll('.achievement');
        achievements.forEach(achievement => {
          this.loadNextUnseen(achievement);
        });
        this.toggleAnimation();
        this.element.querySelector('.achievements__button').classList.remove('invis');
      }
    }

    loadNextUnseen(el) {
      // Reset unseen storeIndexes.
      if (this.state.unseen.length == 0) {
        this.state.store.forEach( (achievement, index) => {
          this.state.unseen.push(index);
        });
        // Remove the last visible storeIndexes from unseen.
        this.state.lastStoreIndexes.forEach((index) => {
          this.state.unseen = this.state.unseen.filter(e => e !== index);
        });
      }
      // Get random unseen storeIndex.
      let storeIndex = this.state.unseen[Math.floor(Math.random() * this.state.unseen.length)];
      // Save the 2 most recent storeIndexes to prevent repetition.
      this.state.lastStoreIndexes.push(storeIndex);
      if (this.state.lastStoreIndexes.length > 2) {
        this.state.lastStoreIndexes.shift();
      }
      this.state.unseen = this.state.unseen.filter(e => e !== storeIndex);

      // Insert data of next unseen achievement.
      let source = this.state.store[storeIndex];
      el.querySelector('.achievement__number').dataset.number = source.dataset.number;
      el.querySelector('.achievement__number-placeholder').innerHTML = source.dataset.number;
      el.querySelector('.achievement__number-postfix').innerHTML = source.dataset.postfix;
      el.querySelector('.achievement__category').innerHTML = source.dataset.category;
      el.querySelector('.achievement__teaser').innerHTML = source.innerHTML;
      el.querySelector('.achievement__link').href = source.dataset.url;
    }

    toggleAnimation() {
      let el = this.element;
      let achievements = el.querySelectorAll('.achievement');

      if (this.state.loading) {
          achievements.forEach(achievement => {
            this.state.runningTasks++;

            this.countUp(achievement.querySelector('.achievement__number'), () => {
              this.state.runningTasks--;
            });
          });
          el.classList.remove('loading');
          this.state.loading = false;
      } else {
        el.classList.add('loading');
        this.state.loading = true;
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

    countUp(el, onCountedUp, duration = 700, maxRange = 13) {
      let number = parseInt(el.dataset.number, 10);
      let lang = document.documentElement.getAttribute('lang')

      let current = 0;
      maxRange = Math.min(maxRange, number);
      let stepTime = Math.abs(Math.floor(duration / maxRange));
      let stepSize = Math.floor(number / maxRange);

      // Freeze the size of the placeholder.
      let placeholder = el.querySelector('.achievement__number-placeholder');
      placeholder.style.width = 'auto';
      placeholder.innerHTML = number.toLocaleString(lang);
      placeholder.style.width = placeholder.offsetWidth + 'px';

      let timer = setInterval(() => {
        // Softly decrease stepSize before reaching the number.
        if (stepSize > 1 && (current + stepSize) >= number) {
          stepSize = Math.floor(stepSize / 4);
        }
        stepSize = (stepSize < 1) ? 1 : stepSize;
        current = current + stepSize;
        current = (current > number) ? number : current;
        placeholder.innerHTML = current.toLocaleString(lang);
        if (current == number) {
          clearInterval(timer);
          onCountedUp();
        }
      }, stepTime);
    }
 }
});
