const purify = require('purify-css');

var content = [
    '**/posts/*.php',
    '**/template/*.php',
    '**/index.php'
];

var css = [
    '**/css/bundle.css'
];

var options = {
    // Will write purified CSS to this file.
    output: './css/bundle.min.css',
    // Will minify CSS code in addition to purify.
    minify: true,
    // Logs out removed selectors.
    rejected: true
};

purify(content, css, options, function (purifiedAndMinifiedResult) {
    console.log(purifiedAndMinifiedResult);
});