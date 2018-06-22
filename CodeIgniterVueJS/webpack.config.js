const path              = require('path');
const {VueLoaderPlugin} = require('vue-loader');
module.exports          = {
    entry  : {
        grid: './public/src/gridComponent.js',

    },
    mode   : 'production',
    output : {
        filename: '[name].js',
        path    : path.resolve(__dirname, 'public/dist/js')
    },
    watch  : true,
    module : {
        rules: [{
            test  : /\.vue$/,
            loader: "vue-loader"
        }]
    },
    plugins: [
        // make sure to include the plugin for the magic
        new VueLoaderPlugin()
    ]
};
