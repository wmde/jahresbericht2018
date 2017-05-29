/*!
 * Wikimedia Jahresbericht 2016
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

require([
  'jquery',
  'underscore',
  'scrollTo',
  'modernizr',
  'domready!'
], function(
  $, _, ScrollTo
) {
  var $body = $('body');
  var $imprint = $('.imprint');
  var $close = $('.imprint-close');
  var $toggle = $('.imprint-toggle');

  function visible(element, partial) {
    var $t            = $(element),
        $w            = $(window),
        viewTop       = $w.scrollTop(),
        viewBottom    = viewTop + $w.height(),
        _top          = $t.offset().top,
        _bottom       = _top + $t.height(),
        compareTop    = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;

    return _top + 100 <= viewBottom;
    // return compareBottom <= viewBottom && compareTop >= viewTop;
  }

  $toggle.on('click', function(ev) {
    ev.preventDefault();
    var o = $toggle.offset();

    // When hiding reset scroll position to bottom so, when
    // revealing the section again, we do not jump into the middle
    // of the section.
    if ($imprint.hasClass('invis')) {
      ScrollTo.offsets(o.left, o.top - 40);
    }

    $imprint.toggleClass('invis');
    $close.toggleClass('invis');
  });
  $close.on('click', function(ev) {
    ev.preventDefault();
    $close.addClass('invis');
    $imprint.addClass('invis');
  });

  // Use Skrollr for finance banner animation
  var $fb = $('.finance-banner');
  if ($fb.length && !Modernizr.touchevents) {
    require(['skrollr'], function(Skrollr) {
      var s = Skrollr.init({
        forceHeight: false
      });
    });
  }

  // Animate tiles on report landing page
  // see: https://css-tricks.com/slide-in-as-you-scroll-down-boxes/
  var $rl = $('.report-landing');
  if ($rl.length && !Modernizr.touchevents) {
    var win = $(window);
    var allMods = $(".jb-hsplit");

    // Already visible modules
    allMods.each(function(i, el) {
      var el = $(el);
      if (visible(el, true)) {
        el.addClass("already-visible");
        el.addClass("come-in");
      }
    });

    var throttled = _.throttle(function() {

      allMods.each(function(i, el) {
        var el = $(el);
        if (visible(el, true)) {
           el.addClass("come-in");
        }
      });

    }, 100);

    win.scroll(throttled);
  }
  if ($rl.length && Modernizr.touchevents) {
    var allMods = $(".jb-hsplit");
    allMods.each(function(i, el) {
      var el = $(el);
      el.addClass("visible");
    });
  }

  // Animate bagels on finance sub-pages
  // see: https://css-tricks.com/slide-in-as-you-scroll-down-boxes/
  var $bagel = $('.bagel');
  if ($bagel.length && !Modernizr.touchevents) {
    var win = $(window);
    var allMods = $(".bagel__image img");

    // Already visible modules
    allMods.each(function(i, el) {
      var el = $(el);
      if (visible(el, true)) {
        el.addClass("already-visible");
        el.addClass("turn-in");
      }
    });

    var throttled = _.throttle(function() {

      allMods.each(function(i, el) {
        var el = $(el);
        if (visible(el, true)) {
           el.addClass("turn-in");
        }
      });

    }, 100);

    win.scroll(throttled);
  }
  if ($bagel.length && Modernizr.touchevents) {
    var allMods = $(".bagel__image img");
    allMods.each(function(i, el) {
      var el = $(el);
      el.addClass("turn-in");
    });
  }

  // Animate slider
  var $slider = $('.slider');
  if ($slider.length) {
    require(['swiper'], function(Swiper) {
      $slider.each(function() {
        var $el = $(this);
        var $slides = $el.find('.swiper-slide');
        var trigger = true;
        if ($slides.length <= 1) {
           trigger = false;
        }
        var swiper = new Swiper($el.get(0), {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            centeredSlides: true,
            loop: trigger,
            slidesPerView: 1,
            onImagesReady: function() {
              $el.removeClass('loading');
            }
        });

      });
    });
  }

  // Animate mobile navigation
  var $mnTrigger = $('.mn-trigger');
  var $mncontainer = $('.mn-container');
  var $logo = $('.real-logo');
  var $mnClose = $('.mn-close');

  $mnTrigger.on('click', function(ev) {
    $mncontainer.addClass('mn-inframe');
    $body.addClass('no-scroll');
    $logo.addClass('no-filter');
  });

  $mnClose.on('click', function(ev) {
    $mncontainer.removeClass('mn-inframe');
    $body.removeClass('no-scroll');
    $logo.removeClass('no-filter');
  });
});
