const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.postCss('./theme-style.css', './tailwind-style.css',
  tailwindcss('./tailwind.config.js')
);