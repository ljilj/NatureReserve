'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
const example = require('./site/example');
const MediaCenterTab = require("./site/MediaCenterTab");
const FeatherLight = require("./site/featherlight");

jQuery( function(){

  /**
   * Initialize site navigation
   */
  Navigation.init();

  /**
   * Initialize sample module
   */
  example.init();

  /**
   * Initialize directors module
   */
  MediaCenterTab.init();

  /**
   * Initialize directors module
   */
  FeatherLight.init();

});