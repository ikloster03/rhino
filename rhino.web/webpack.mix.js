let mix = require('laravel-mix');



var mode = process.env.npm_config_mode;

if(mode == 'back' || mode == 'backend'){
    mix.setPublicPath('dashboard/assets');
    mix.setResourceRoot('../');

    mix.js('resources/assets/dashboard/js/dashboard.js', 'js/')

    mix.sass('resources/assets/dashboard/scss/app.scss', 'css/app.css');

    mix.browserSync({
        port: 3000,
        proxy: 'admin.rhino.test'
    });
}else{
    mix.setPublicPath('public/assets');
    mix.setResourceRoot('../');
    mix.js('resources/assets/js/app.js', 'js/')
    mix.browserSync({
        port: 3000,
        proxy: ''
    });

}

mix.options({
    postCss: [
        require('postcss-import'),
        require('postcss-url'),
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


if(mix.inProduction()){

}else{

}