/*!
 * App
 *
 * Copyright (c) 2013-2015 Atelier Disko - All rights reserved.
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
  'domready!'
], function(
  $
) {
  var $imprint = $('.imprint');

  $('.imprint-toggle').on('click', function(ev) {
    ev.preventDefault();
    $imprint.toggleClass('invis');
  });
  $('.imprint-close').on('click', function(ev) {
    ev.preventDefault();
    $imprint.removeClass('invis');
  });
});
