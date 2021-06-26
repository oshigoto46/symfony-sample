const path = require('path');
const webpack = require('webpack');
//const CopyPlugin = require('copy-webpack-plugin');
const Encore = require('@symfony/webpack-encore');
const DEV_PORT = process.env.PORT || 3000;

module.exports = {
  entry: './src/js/src/index.js',
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
        options: { presets: ['@babel/env'] },
      },
      {
        test: /\.css$/,
        use: ['style-loader', 'css-loader'],
      },
    ],
  },
  output: {
    path: path.resolve(__dirname, 'build/'),
    filename: 'bundle.js',
  },
  devServer: {
    contentBase: path.join(__dirname, 'build/'),
    port: DEV_PORT,
    hot: true,
  },
  plugins: [
    new webpack.HotModuleReplacementPlugin(),
    //new CopyPlugin([{ from: './public', to: '.' }]),
  ],
};
