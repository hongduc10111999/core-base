const mix = require('laravel-mix');
const publicPath = 'public/package/post/src';
const resourcePath = './package/post/src';
mix 
    .sass(resourcePath + '/resources/assets/sass/style.scss', publicPath + '/css')
    .copy(publicPath + '/css/style.css', resourcePath + '/public/css');