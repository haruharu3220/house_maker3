//既存のコード
// const mix = require('laravel-mix');


// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);



const mix = require('laravel-mix');
const { vitePlugin } = require('laravel-mix-vite');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
   ])
   .vite({
       plugins: [vitePlugin()],
   });
