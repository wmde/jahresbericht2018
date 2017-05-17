/*!
 * Media Embed
 *
 * Copyright (c) 2014 Atelier Disko - All rights reserved.
 *
 * Licensed under the AD General Software License v1.
 *
 * This software is proprietary and confidential. Redistribution
 * not permitted. Unless required by applicable law or agreed to
 * in writing, software distributed on an "AS IS" BASIS, WITHOUT-
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *
 * You should have received a copy of the AD General Software
 * License. If not, see http://atelierdisko.de/licenses.
 */
define(['jquery'],
function($) {

  // HTML5 Video
  //
  // Assumes the following markup:
  // ```
  // <div>
  //     <div class="overlay">
  //         <div class="play">▶</div>
  //     </div>
  //     <video> ... </video>
  // </div>
  // ```
  function Video() {
    var _this = this;

    this.element = undefined;

    this.init = function(element) {
      _this.element = $(element);
      _this.bind();

      return _this;
    };

    this.bind = function() {
      var $overlay = _this.element.find('.overlay');
      var $button = $overlay.find('.play');
      var $player = _this.element.find('video');
      var player = $player.get(0);

      $player.on('playing', function(ev) {
        _this.element.addClass('playing');
        _this.element.removeClass('finished paused');
        _this.element.trigger('media:playing');
      });
      $player.on('pause', function(ev) {
        _this.element.addClass('paused');
        _this.element.removeClass('playing');
        _this.element.trigger('media:paused');
      });
      $player.on('ended', function(ev) {
        _this.element.removeClass('playing');
        _this.element.addClass('finished');
        _this.element.trigger('media:finished');
      });
      $player.on('loadstart', function(ev) {
        _this.element.addClass('loading');
        _this.element.trigger('media:loading');
      });
      $player.on('loadeddata', function(ev) {
        _this.element.removeClass('loading');
      });

      _this.element.on('media:pause', function(ev) {
        player.pause();
      });
      $player.on('click', function(ev) {
        ev.preventDefault();
        player.pause();
      });

      $button.on('click', function(ev) {
        ev.preventDefault();
        player.play();
      });

       _this.element.addClass('initialized');
    };
  }

  // Embedded vimeo player.
  //
  // This needs https://f.vimeocdn.com/js/froogaloop2.min.js as "froogaloop". Make sure you
  // are using the latest API.
  //
  // Assumes the following markup:
  // ```
  // <div data-vimeo-id="1234567" >
  //     <div class="overlay">
  //         <div class="play">▶</div>
  //     </div>
  //     <img src="/path/to/poster.jpg" class="poster" />
  //     <!-- iframe will be inserted here -->
  // </div>
  // ```
  function Vimeo() {
    require(['froogaloop']); // Eager load.

    var _this = this;

    this.element = undefined;

    this.init = function(element) {
      _this.element = $(element);
      _this.bind();

      return _this;
    };

    this.bind = function() {
      var $overlay = _this.element.find('.overlay');
      var $button = $overlay.find('.play');
      var $poster = _this.element.find('.poster');
      _this.element.addClass('initialized');

      require(['froogaloop'], function(Froogaloop) {
        // Lazily appends iframe on first click.
        $button.one('click', function(ev) {
          ev.preventDefault();

          var $player = _this.template(_this.element.data('vimeo-id'));
          _this.element.css({
            width: $poster.width(),
            height: $poster.height()
          });
          $(window).resize(function() {
            _this.element.css({
              width: $poster.width(),
              height: $poster.height()
            });
          });
          var player = Froogaloop($player.get(0));

          // Keep poster while loading.
          // Must insert into DOM before attaching events
          // otherwise Vimeo's API wont work with multiple
          // videos on a page.

          // We cannot display: none the iframe as this causes
          // problems with Froogaloop in Firefox.
          $player.css({'visibility': 'hidden', 'width': '0'});

          _this.element.addClass('loading');
          _this.element.trigger('media:loading');

          _this.element.append($player);

          player.addEvent('ready', function() {
            _this.element.removeClass('loading');
            $poster.hide();
            $overlay.hide();

            $player.css({'visibility': 'visible', 'width': $poster.width()});

            // For future clicks bind handler.
            _this.element.find('.overlay, .play').on('click', function(ev) {
              ev.preventDefault();
              player.api('play');

              _this.element.addClass('playing');
              _this.element.removeClass('finished');
              _this.element.trigger('media:playing');
            });
            player.addEvent('play', function() {
              // ...
            });
            player.addEvent('pause', function() {
              _this.element.removeClass('playing');
              _this.element.addClass('paused');
              _this.element.trigger('media:paused');
            });
            player.addEvent('finish', function() {
              _this.element.removeClass('playing');
              _this.element.addClass('finished');
              _this.element.trigger('media:finished');
            });

            _this.element.addClass('playing');
            _this.element.trigger('media:playing');
            player.api('play');
          });

          // Allow us to be controlled from the outside.
          _this.element.on('media:pause', function() {
            player.api('pause');
          });
        });
      });
    };

    this.template = function(id) {
      var rand = Math.floor(Math.random() * 9999);
      var content = '<iframe' +
         ' id="vimeo-player-' + rand + '"' +
         ' src="https://player.vimeo.com/video/' + id +
         '?title=0&byline=0&portrait=0&color=ffffff&autoplay=0&api=1&player_id=vimeo-player-' + rand + '"' +
         ' frameborder="0"' +
         ' webkitAllowFullScreen mozallowfullscreen allowFullScreen' +
         '></iframe>';

      return $(content);
    };
  }

  function YouTube() {
    var _this = this;

    this.element = undefined;

    this.init = function(element) {
      _this.element = $(element);
      _this.bind();

      return _this;
    };

    this.bind = function() {
      var $overlay = _this.element.find('.overlay');
      var $button = $overlay.find('.play');
      var $poster = _this.element.find('.poster');
      _this.element.addClass('initialized');

      // Lazily appends iframe on first click.
      $overlay.one('click', function(ev) {
        ev.preventDefault();
        var $player = _this.template(_this.element.data('youtube-id'));
        $player.css({
          width: $poster.width(),
          height: $poster.height()
        });
        $(window).resize(function() {
          $player.css({
            width: $poster.width(),
            height: $poster.height()
          });
        });

        _this.element.append($player);

          $poster.hide();
          $overlay.hide();
        });
    };

    this.template = function(id) {
      var rand = Math.floor(Math.random() * 9999);
      var content = '<iframe' +
         ' id="ytplayer-' + rand + '"' +
         ' src="https://www.youtube.com/embed/' + id +
         '?autoplay=1&rel=0&showinfo=0&modestbranding=1&iv_load_policy=3&theme=light;"' +
         ' frameborder="0"' +
         ' webkitAllowFullScreen mozallowfullscreen allowFullScreen' +
         '></iframe>';

      return $(content);
    };
  }


  return {
    Video: Video,
    Vimeo: Vimeo,
    YouTube: YouTube
  };
});
