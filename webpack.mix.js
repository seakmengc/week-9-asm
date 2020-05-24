const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);

mix.combine(
    ["resources/js/main.js", "resources/vendor/*/*.js"],
    "public/js/combined.js"
);

mix.combine(
    [
        "resources/vendor/bootstrap/css/bootstrap.min.css",
        "resources/vendor/icofont/icofont.min.css",
        "resources/vendor/boxicons/css/boxicons.min.css",
        "resources/vendor/remixicon/remixicon.css",
        "resources/vendor/owl.carousel/assets/owl.carousel.min.css",
        "resources/vendor/aos/aos.css",
        "resources/css/style.css"
    ],
    "public/css/combined.css"
);
