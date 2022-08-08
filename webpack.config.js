// webpack.config.js
var webpack = require('webpack');
module.exports = {
    entry: {
        entry: __dirname + '/js/index.js'
    },
    output: {
        filename: '[name].bundle.js'
    }
}