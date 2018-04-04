let mix = require('laravel-mix');

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

mix.setPublicPath('public/assets/');
mix.setResourceRoot('../');
mix.webpackConfig({
    resolve: {
        alias: {

        }
    },
    output: {
        path: __dirname + "/public/assets"
    }
});



mix.options({
    convertToAbsoluteUrls:false,
    sourceMap: true,
    processCssUrls: true,

    postCss: [
        require('postcss-import'),
        require('postcss-url'),
        require('postcss-cssnext')({
            warnForDuplicates:false
        }),
        require('precss'),
        require('cssnano')({
            reduceIdents: {
                keyframes: false
            },
            discardUnused: {
                keyframes: false
            }
        }),
        require('postcss-clearfix'),
    ],
});

mix.version();

