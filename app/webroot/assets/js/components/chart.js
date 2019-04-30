/*!
 * Wikimedia Jahresbericht 2018
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
    }
    init() {
      setTimeout(() => {
        document.querySelector('.charts').classList.remove('loading');
      }, 800);
    }
  }
});
