const mix = require('laravel-mix'),
    glob = require('glob'),
    path = require('path'),
    HardSourceWebpackPlugin = require('hard-source-webpack-plugin');

// resources directory
const sassDir = 'resources/sass',
    esDir = 'resources/js';

// file ext
const sassExt = '(sass|scss)';

// add webpack config
mix.webpackConfig({
    resolve: {
        alias: {
            '~': path.resolve(__dirname, esDir)
        }
    },
    plugins: [
        new HardSourceWebpackPlugin(),
    ]
});

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
glob.sync(sassDir+'/**/*.*'+sassExt, {
    ignore: [sassDir+'/**/_*.*'+sassExt]
})
.map((file) => {
    mix.sass(file, 'public/css'+file.replace(sassDir, '').replace(new RegExp('\.'+sassExt, 'i'), '.css'), {
        includePaths: [
            'node_modules/materialize-css/sass/',
            sassDir,
        ]
    })
	.options({
		postCss: [
            require('autoprefixer')
		]
	});
});

mix.js('resources/js/app.js', 'public/js')
    .extract(['react']);
