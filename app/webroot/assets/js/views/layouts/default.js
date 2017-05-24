/*!
 * App
 *
 * Copyright (c) 2013 Atelier Disko - All rights reserved.
 *
 * Licensed under the AD App Software License v1.
 *
 * This software is proprietary and confidential. Redistribution
 * not permitted. Unless required by applicable law or agreed to
 * in writing, software distributed on an "AS IS" BASIS, WITHOUT-
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *
 * You should have received a copy of the AD App Software
 * License. If not, see https://atelierdisko.de/licenses.
 */

require([
  'jquery',
  'scrollTo',
  'modernizr',
  'domready!'
], function(
  $, ScrollTo
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

    return _top + 200 <= viewBottom;
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

  var $fb = $('.finance-banner');
  if ($fb.length && !Modernizr.touchevents) {
    require(['skrollr'], function(Skrollr) {
      var s = Skrollr.init({
        forceHeight: false
      });
    });
  }

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

    win.scroll(function(event) {

      allMods.each(function(i, el) {
        var el = $(el);
        if (visible(el, true)) {
           el.addClass("come-in");
        }
      });

    });
  }
  if ($rl.length && Modernizr.touchevents) {
    var allMods = $(".jb-hsplit");
    allMods.each(function(i, el) {
      var el = $(el);
      el.addClass("visible");
    });
  }

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
