// webpack.config.js
var Encore = require('@symfony/webpack-encore');

Encore
      // for react 
     .enableReactPreset()

    // directory where compiled assets will be stored
    .setOutputPath('public/build/')

    // public path used by the web server to access the output path
    .setPublicPath('/build')
    
    .addEntry('app', './assets/app.js')
    


module.exports = Encore.getWebpackConfig();