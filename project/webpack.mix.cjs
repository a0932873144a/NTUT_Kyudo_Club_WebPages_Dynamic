const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/sass/app.css', 'public/css', [
        //
    ]);
