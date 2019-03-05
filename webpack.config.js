const ExtractTextPlugin = require('extract-text-webpack-plugin');
// when 'mode' set into production, output will be minify,
// when 'mode' set into development, output will be readable,
const MODE = 'development';
const enabledSourceMap = (MODE === 'development');

const path = require('path');

module.exports = {
  // JS file as a main - this should be an entry point
  // - 'src/index.js' will automatically add, if you not specified
  entry: `./src/index.js`,

  // Setting up output environment
  output: {
    // Setting up directry and files for store output

    // where do you wanna place output file
    // 'dist' will be automatically add, if you not specified
    // you can ignore this code below instead of 'dist' will be automatically add
    path: `${__dirname}/`, 

    // what name do you wanna add to the output file
    // 'main.js' will be automatically add, if you not specified
    filename: 'main.js',
  },

  
  mode: MODE, // equals to the variable which you specified above
  module: {
    rules: [

      // load and compile sass
      {
        test: /\.scss/, // suffix for the file which you want to convert
        // loader name
        use: [
          // to output to link tag
          'style-loader',
          // to bundle CSS
          {
            loader: 'css-loader',
            options: {
              // take in url() method in CSS in this options
              url: true,
              // enable or disable sourcemap
              sourceMap: enabledSourceMap,
              // 0 => no loaders (default);
              // 1 => postcss-loader;
              // 2 => postcss-loader, sass-loader
              importLoaders: 2
            },
          },
          // to bundle Sass
          {
            loader: 'sass-loader',
            options: {
              sourceMap: enabledSourceMap,
            }
          }
        ],
      },


      // URL loader
      {
        // target files
        test: /\.(gif|png|jpg|eot|wof|woff|woff2|ttf|svg)$/,
        // capture image as base64
        loader: 'url-loader',
      },
    ],
  },

  // requires plugin to divide css and js when execute bundle
  plugins: [
    new ExtractTextPlugin('style.css'),
  ],

  // to run localhost (normally 8080)
  // this code will open localhost when webpack has been executed
  devServer: {
    contentBase: './',
    compress: true,
    port: 9000,
  }
};