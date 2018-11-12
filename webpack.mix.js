const mix = require('laravel-mix');
const tailwindcss = require("tailwindcss");

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [tailwindcss('./tailwind.js')]);

   mix.browserSync('fitnesstracker.code');
