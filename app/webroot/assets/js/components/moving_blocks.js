/*!
 * Wikimedia Jahresbericht 2017
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

define('components/movingBlocks', ['underscore'], function(_) {
 return class MovingBlocks {
    constructor(element) {
      this.element = element;
    }

    startAnimation() {
      this.element.classList.add('blink');
    }
  }
});

