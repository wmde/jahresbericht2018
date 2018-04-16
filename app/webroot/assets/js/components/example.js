/*!
 * Wikimedia Jahresbericht 2017
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

define('components/example', ['underscore'], function(_) {
 return class Example {
    constructor(element) {
      this.element = element;
    }

    startAnimation() {
      this.element.classList.add('blink');
    }
  }
});

