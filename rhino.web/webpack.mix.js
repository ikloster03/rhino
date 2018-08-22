let mix = require('laravel-mix');
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
const webpack = require('webpack');


var mode = process.env.npm_config_mode;

if(mode == 'back' || mode == 'backend'){
    mix.setPublicPath('dashboard/assets');
    mix.setResourceRoot('../');

    mix.js('resources/assets/dashboard/js/apps/dashboard/dashboard.js', 'js/');
    mix.js('resources/assets/dashboard/js/apps/authorization/vue-authorization.js', 'js/');

    mix.sass('resources/assets/dashboard/scss/app.scss', 'css/app.css');

    mix.copyDirectory('resources/assets/dashboard/image','dashboard/assets/image/');

    mix.browserSync({
        port: 3000,
        proxy: 'admin.rhino.test'
    });
}else{
    mix.setPublicPath('public/assets');
    mix.setResourceRoot('../');
    mix.webpackConfig({
        resolve: {
            alias: {
                Api: path.resolve(__dirname, 'resources/assets/frontend/js/api'),
                UI: path.resolve(__dirname, 'resources/assets/frontend/js/ui'),
                Apps: path.resolve(__dirname, 'resources/assets/frontend/js/apps'),
            }
        },
        plugins: [
            new webpack.ContextReplacementPlugin(/moment[/\\]locale$/, /ru/),
            // new BundleAnalyzerPlugin({
            //     analyzerMode:'static',
            //     // analyzerHost: 'activepeople.test',
            //     // analyzerPort: 8890,
            //     // generateStatsFile: true,
            //
            // })
        ],
        devtool: "source-map"
    })
    mix.copyDirectory("resources/assets/frontend/img/", "public/assets/images/")
    mix.sass('resources/assets/frontend/styles/app.scss', 'css/app.css');
    mix.js('resources/assets/frontend/js/app.js', 'js/')
        .extract(["vue", "vuex", "vue-router", "vue-resource"])
    mix.browserSync({
        port: 3001,
        proxy: 'rhino.test'
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
            zindex: false,
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