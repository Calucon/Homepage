// webpack.config.js
var webpack = require('webpack');
module.exports = {
    mode: 'development',
    //mode: 'production',

    // generate js.map file
    devtool: 'source-map',

    // automatic recompile on change
    watch: false,

    // input packages
    entry: {
        index: __dirname + '/js/index.js'
    },

    // output config
    output: {
        filename: '[name].bundle.js',
        clean: true
    }
}