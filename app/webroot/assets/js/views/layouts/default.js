/*!
 * Wikimedia Jahresbericht 2017
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

require([
  'underscore',
  'modernizr',
  'domready!'
], function(
  _, Modernizr
) {
  let $1 = document.querySelector.bind(document);
  let $ = document.querySelectorAll.bind(document);

  let body = $1('body');
  let imprint = $1('.imprint');
  let close = $1('.imprint-close');
  let toggle = $1('.imprint-toggle');

  let allMods, throttled;

  // this function replaces jquery.offset()
  function offset(el) {
      let rect = el.getBoundingClientRect(),
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
  }

  function visible(element, partial) { // returns true if 100px of an element are visible in the view
    let viewTop       = window.pageYOffset || document.documentElement.scrollTop,
        viewBottom    = viewTop + (window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight),
        _top          = offset(element).top
    return _top + 100 <= viewBottom;
  }

  // Imprint toggle
  toggle.addEventListener("click", function(ev) {
    ev.preventDefault();
    let o = offset(toggle);

    imprint.classList.toggle("invis");
    close.classList.toggle("invis");

    if (!imprint.classList.contains("invis")) {
      window.scrollTo(o.left, o.top - 40);
    }

  });
  close.addEventListener("click", function(ev) {
    ev.preventDefault();
    close.classList.add("invis");
    imprint.classList.add("invis");
  });

  // Animate mobile navigation
  let mnTrigger = $1('.mn-trigger');
  let mncontainer = $1('.mn-container');
  let logo = $1('.real-logo');
  let mnClose = $1('.mn-close');

  mnTrigger.addEventListener("click", ev => {
    mncontainer.addClass('mn-inframe');
    body.addClass('no-scroll');
    logo.addClass('no-filter');
  });

  mnClose.addEventListener("click", ev => {
    mncontainer.removeClass('mn-inframe');
    body.removeClass('no-scroll');
    logo.removeClass('no-filter');
  });
});
