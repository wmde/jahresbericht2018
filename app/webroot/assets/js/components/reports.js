/*!
 * Wikimedia Jahresbericht 2017
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

define('components/reports', [], function() {
 return class Reports {
    constructor(element) {
      this.element = element;
      this.state = {
        runningTransitions: 0,
        animationState: 1,
        store: this.element.querySelectorAll('.reports--store'),
        unseen: [], // Store indexes of unseen reports.
        lastStoreIndexes: [],
        loading: true,
        backgroundTransition: false
      };

      let background = this.element.querySelector('.reports__background');
      this.element.querySelectorAll('.reports__link').forEach(link => {
        link.addEventListener('mouseenter', () => {
          if (link.dataset.cover) {
            background.classList.add('hidden');
            if (this.backgroundTransition) {
              background.style.backgroundImage = 'url(' + link.dataset.cover + ')';
            } else {
              this.backgroundTransition = true;
              setTimeout(() => {
                this.backgroundTransition = false;
                background.style.backgroundImage = 'url(' + link.dataset.cover + ')';
                background.classList.remove('hidden');
              }, 300);
            }
          }
        });
      });
      this.element.querySelector('.reports__link-wrapper').addEventListener('mouseleave', () => {
          background.classList.add('hidden');
            setTimeout(() => {
              background.style.backgroundImage = 'none';
              background.classList.remove('hidden');
            }, 300);
      });


      let cube1 = this.element.querySelector('.reports__cube--1');
      let cube2 = this.element.querySelector('.reports__cube--2');
      let cube3 = this.element.querySelector('.reports__cube--3');

      /*
      let exampleAnimation = [
        [
          { el: cube2, duration: 1200, timing: this.makeEaseInOut(this.timing.circ), styles: { left: 200, top: 100 }, onEnd:() => { cube2.style.zIndex = 10; } },
          { el: cube3, duration: 'auto', timing: this.makeEaseInOut(this.timing.circ), styles: { left: 200, top: 100 } }
        ],
        [
          { el: cube2, pixelSpeed: 50, timing: this.makeEaseInOut(this.timing.circ), styles: { left: 0, top: 0 }, onEnd:() => { console.log('Ende'); } },
          { el: cube3, timing: this.makeEaseOut(this.timing.circ), styles: { left: 0, top: 0 } }
        ]
      ];
      */

      let hu = cube1.offsetWidth / 2; // Isometric cube horizontal units.
      let vu = cube1.offsetHeight / 4;
      let pps = 80; // Pixel per second to adjust speed of every transition.

      this.shuffleLoop = [
        [
          { el: cube1, styles: { left: 1*hu, top: 2*vu }, pixelSpeed: pps },
          { el: cube2, styles: { left: 0*hu, top: 1*vu }, pixelSpeed: pps },
          { el: cube3, styles: { left: 2*hu, top: 1*vu }, pixelSpeed: pps }
        ],
        [
          { el: cube1, styles: { left: 1*hu, top: 0*vu }, pixelSpeed: pps }
        ],
        [
          { el: cube1, styles: { left: 1*hu, top: 4*vu }, pixelSpeed: pps }
        ],
        [
          { el: cube2, styles: { left: 0*hu, top: 3*vu }, pixelSpeed: pps }
        ],
        [
          { el: cube1, styles: { left: 1*hu, top: 2*vu }, pixelSpeed: pps },
          { el: cube3, styles: { left: 1*hu, top: 0*vu }, pixelSpeed: pps }
        ],
        [
          { el: cube1, styles: { left: 0*hu, top: 1*vu }, pixelSpeed: pps }
        ],
        [
          { el: cube1, styles: { left: 1*hu, top: 2*vu }, pixelSpeed: pps },
          { el: cube3, styles: { left: 2*hu, top: 1*vu }, pixelSpeed: pps }
        ]
      ];

      this.element.querySelector('.reports__button--reload').addEventListener('click', () => {
        if (this.state.runningTransitions == 0) {
          //this.toggleAnimationState(shuffleLoop);
          this.loadNewReports();
          //this.performAnimation(shuffleLoop, () => { console.log(this.state); });
        }
      });

      // init
      this.element.querySelectorAll('.reports__link').forEach(link => {
        this.loadNextUnseen(link);
      });
      this.loadNewReports();
      this.element.querySelectorAll('.reports__button').forEach(button => {
        button.classList.remove('invis');
      });
    }

    loadNextUnseen(el) {
      // Reset unseen storeIndexes.
      if (this.state.unseen.length == 0) {
        this.state.store.forEach((achievement, index) => {
          this.state.unseen.push(index);
        });
        // Remove the last visible storeIndexes from unseen.
        this.state.lastStoreIndexes.forEach((index) => {
          this.state.unseen = this.state.unseen.filter(e => e !== index);
        });
      }
      // Get random unseen storeIndex.
      let storeIndex = this.state.unseen[Math.floor(Math.random() * this.state.unseen.length)];
      // Save the 3 most recent storeIndexes to prevent repetition.
      this.state.lastStoreIndexes.push(storeIndex);
      if (this.state.lastStoreIndexes.length > 3) {
        this.state.lastStoreIndexes.shift();
      }
      this.state.unseen = this.state.unseen.filter(e => e !== storeIndex);

      // Insert data of next unseen achievement.
      let source = this.state.store[storeIndex];
      el.href = source.dataset.url;
      el.querySelector('.reports__link-title').innerHTML = source.innerHTML;
      el.dataset.cover = source.dataset.cover;
    }

    loadNewReports() {
      let el = this.element;
      let links = el.querySelectorAll('.reports__link');

      if (this.state.loading) {
          el.classList.remove('loading');
          this.state.loading = false;
      } else {
        this.toggleAnimationState(this.shuffleLoop);
        el.classList.add('loading');
        this.state.loading = true;
        this.state.runningTasks++;

        setTimeout(() => {
          this.state.runningTasks--;
          links.forEach(link => {
            this.loadNextUnseen(link);
          });
          this.loadNewReports();
        }, 300);
      }
    }

    toggleAnimationState(animation) {
        this.performAnimationState(animation[this.state.animationState],() => {});
        this.state.animationState = ((this.state.animationState + 1) < animation.length) ? this.state.animationState + 1 : 0;
    }

    performAnimationState(animationState, onFinishState) {
      let transition;
      // Execute all transitions of this state.
      Object.entries(animationState).forEach(pair => {
        transition = pair[1];
        this.performTransition(transition, onFinishState);
      });
    }

    performAnimation(animation, onFinishAnimation, state = 0) {
      if (animation[state]) {
        this.performAnimationState(animation[state], () => { this.performAnimation(animation, onFinishAnimation, state+1); });
      } else if (onFinishAnimation) {
        onFinishAnimation();
      }
    }

    performTransition(transition, onFinishState) {
      if(transition.onStart) transition.onStart();

      // Save current state of animated style values.
      let animatedStylesBefore = []
      Object.entries(transition.styles).forEach(pair => {
        // Split value from unit (px/%) example '1px' -> ['1px', '1', 'px'].
        let splitValueUnitRegex = /(-?\d*\.?\d*)(.*)/;
        // Prefer inlinestyle ('px, %, pt etc.') rather than computedstyle (only px).
        let value = (transition.el.style[pair[0]] || window.getComputedStyle(transition.el, null)[pair[0]]).match(splitValueUnitRegex);
        // Set inline style (eg. width = '100%') to animate percentages.
        value[1] = parseInt(value[1]);
        animatedStylesBefore[pair[0]] = value;
      });

      if (transition.pixelSpeed) {
        // Set duration depending on transition.pixelSpeed
        let oldX = (animatedStylesBefore['left'][1] === undefined) ? 0 : animatedStylesBefore['left'][1];
        let oldY = (animatedStylesBefore['top'][1] === undefined) ? 0 : animatedStylesBefore['top'][1];
        let newX = (transition.styles['left'] === undefined) ? 0 : transition.styles['left'];
        let newY = (transition.styles['top'] === undefined) ? 0 : transition.styles['top'];
        let a = newX - oldX;
        let b = newY - oldY;
        let distance = Math.sqrt(a*a + b*b);
        if (distance > 0) {
          transition.duration = (distance / transition.pixelSpeed) * 1000;
        }
      }

      // Run animation in CSS
      transition.el.style.transitionDuration = (transition.duration / 1000) + 's';
      Object.entries(transition.styles).forEach(pair => {
        // Setup css transition.
        // Get style unit saved before the animation.

        // Get target value.
        let valueTarget = transition.styles[pair[0]];
        transition.el.style[pair[0]] = valueTarget + animatedStylesBefore[pair[0]][2];
        this.state.runningTransitions++;
        setTimeout(() => {
          this.state.runningTransitions--;
          if (this.state.runningTransitions == 0) {
            if(onFinishState) {
              onFinishState();
            }
          }
          if (transition.onEnd) {
            transition.onEnd();
          }
        }, transition.duration);
      });
    }

  }
});
