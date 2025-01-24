const path = require('path');

module.exports = {
  mode: 'development', // Set to 'production' when deploying
  entry: './src/index.js', // Entry file for your theme's scripts
  output: {
    path: path.resolve(__dirname, 'dist'), // Output directory
    filename: 'bundle.js', // Output file
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: 'babel-loader',
      },
      {
        test: /\.scss$/,
        use: [
          'style-loader', // Inject styles into the DOM
          'css-loader', // Translate CSS into CommonJS
          'sass-loader', // Compile SCSS into CSS
        ],
      },
    ],
  },
  resolve: {
    modules: ['node_modules'],
  },
  watch: true, // Enable watch mode
};
