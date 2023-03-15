const mix = require('laravel-mix');
require('laravel-vue-i18n/mix');

mix.js('resources/js/index.js', 'public/js').postCss('resources/css/index.css', 'public/css');
