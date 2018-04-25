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
        animationState: 1
      };
      // Timing Functions
      this.timing = {
        linear(timeFraction) {
          return timeFraction;
        },
        quad(timeFraction) {
            return Math.pow(timeFraction, 2)
        },
        circ(timeFraction) {
            return 1 - Math.sin(Math.acos(timeFraction));
        },
        bounce(timeFraction) {
          for (let a = 0, b = 1, result; 1; a += b, b /= 2) {
            if (timeFraction >= (7 - 4 * a) / 11) {
              return -Math.pow((11 - 6 * a - 11 * timeFraction) / 4, 2) + Math.pow(b, 2)
            }
          }
        },
        bow(timeFraction) {
          let x = 20; // Pull in opposite direction first.
          return Math.pow(timeFraction, 2) * ((x + 1) * timeFraction - x)
        },
        elastic(timeFraction) {
          let x = 5; // Hit and shake.
          return Math.pow(2, 10 * (timeFraction - 1)) * Math.cos(20 * Math.PI * x / 3 * timeFraction)
        }
      };

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

      let hu = 80; // isometric cube horizontal units
      let vu = 46; // isometric cube vertical units
      let t = 1000; // duration
      let pps = 80; // pixel per second
      let tf = this.makeEaseInOut(this.timing.quad);

      let shuffleLoop = [
        [
          { el: cube1, styles: { left: 1*hu, top: 2*vu }, pixelSpeed: pps, timing: tf },
          { el: cube2, styles: { left: 0*hu, top: 1*vu }, pixelSpeed: pps, timing: tf },
          { el: cube3, styles: { left: 2*hu, top: 1*vu }, pixelSpeed: pps, timing: tf }
        ],
        [
          { el: cube1, styles: { left: 1*hu, top: 0*vu }, pixelSpeed: pps, timing: tf }
        ],
        [
          { el: cube1, styles: { left: 1*hu, top: 4*vu }, pixelSpeed: pps, timing: tf }
        ],
        [
          { el: cube2, styles: { left: 0*hu, top: 3*vu }, pixelSpeed: pps, timing: tf }
        ],
        [
          { el: cube1, styles: { left: 1*hu, top: 2*vu }, pixelSpeed: pps, timing: tf },
          { el: cube3, styles: { left: 1*hu, top: 0*vu }, pixelSpeed: pps, timing: tf }
        ],
        [
          { el: cube1, styles: { left: 0*hu, top: 1*vu }, pixelSpeed: pps, timing: tf }
        ],
        [
          { el: cube1, styles: { left: 1*hu, top: 2*vu }, pixelSpeed: pps, timing: tf },
          { el: cube3, styles: { left: 2*hu, top: 1*vu }, pixelSpeed: pps, timing: tf }
        ]
      ];

      //this.executeAnimation(shuffleLoop, () => { console.log("animation end"); });

      this.element.querySelector('.reports__canvas').addEventListener('click', () => {
        this.toggleAnimationState(shuffleLoop);
      });
    }

    toggleAnimationState(animation) {
        this.performAnimationState(animation[this.state.animationState], () => {});
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
      } else {
        onFinishAnimation();
      }
    }

    draw(transition, animatedStylesBefore, progress) {
      let el = transition.el;
      Object.entries(transition.styles).forEach(pair => {
        // Get style value saved before the animation.
        let valueBefore = animatedStylesBefore[pair[0]][1] || 0;
        let unit = animatedStylesBefore[pair[0]][2] || '';
        // Get target value.
        let valueTarget = transition.styles[pair[0]];
        transition.el.style[pair[0]] = (valueBefore + ((valueTarget - valueBefore) * progress)) + unit;
      });
    }

    performTransition(transition, onFinishState) {
      if(transition.onStart) transition.onStart();

      // Save current state of animated style values.
      let animatedStylesBefore = []
      Object.entries(transition.styles).forEach(pair => {
        let computedStyle = window.getComputedStyle(transition.el, null)[pair[0]];
        // Split value from unit (px/%) example '1px' -> ['1px', '1', 'px'].
        let inlineStyle = transition.el.style[pair[0]];
        let value;
        // Set inline style (eg. width = '100%') to animate percentages.
        // The unit is otherwise px taken from computedStyle.
        let splitValueUnitRegex = /(-?\d*\.?\d*)(.*)/;
        if (inlineStyle) {
          value = inlineStyle.match(splitValueUnitRegex);
        } else {
          value = computedStyle.match(splitValueUnitRegex);
        }
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
        let unit = animatedStylesBefore[pair[0]][2] || '';
        // Get target value.
        let valueTarget = transition.styles[pair[0]];
        transition.el.style[pair[0]] = valueTarget + unit;
      });

      // Run animation.
      /*
      this.state.runningTransitions++;
      this.animate(transition.duration,
        transition.timing, () => {
          this.state.runningTransitions--;
          if (this.state.runningTransitions == 0) {
            if(onFinishState) onFinishState();
          }
          if (transition.onEnd) {
            transition.onEnd();
          }
      }, (progress) => {
        this.draw(transition, animatedStylesBefore, progress);
      });
      */
    }

    // This is the animation core.
    animate(duration = 500, timing, onFinish, draw) {
      let startTime;
      requestAnimationFrame(function animate(time) {
        startTime = startTime || time;
        // Get the Fraction of already passed Time.
        // timeFraction goes from 0 to 1.
        let timeFraction = (time - startTime) / duration;
        if (timeFraction > 1) timeFraction = 1;

        // Calculate the progress.
        let progress = timing(timeFraction);

        draw(progress);

        if (timeFraction < 1) {
          requestAnimationFrame(animate);
        } else if (onFinish) {
          onFinish();
        }
      });
    }

    // Reverse timing function (example fast beginning will be a fast end).
    makeEaseOut(timing) {
      return function(timeFraction) {
        return 1 - timing(1 - timeFraction);
      }
    }

    // Reverse timing function at 0.5.
    makeEaseInOut(timing) {
      return function(timeFraction) {
        if (timeFraction < .5)
          return timing(2 * timeFraction) / 2;
        else
          return (2 - timing(2 * (1 - timeFraction))) / 2;
      }
    }

  }
});
