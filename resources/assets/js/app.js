
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// Vue JS
// window.Vue = require('vue');
// Vue.component('example', require('./components/Example.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

// Plugins
// require("./plugins/isotope.pkgd");
require("./plugins/jquery.appear");
require("./plugins/jquery.backstretch.min");
require("./plugins/modernizr");

require("./custom.js");
require("./template.js");




// CUSTOM JS
$(".alert").hide();
$(document).ready(function() {
  $('.alert').show(100);
});
