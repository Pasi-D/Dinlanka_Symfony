var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where all compiled assets will be stored
    .setOutputPath('web/build/')

    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')

    // will create public/build/index.js and public/build/app.css
    .addEntry('index', './web/js/vendor/modernizr-2.8.1.min.js')
    .addEntry('html5shim', './web/js/vendor/html5shim.js')
    .addEntry('respond.min', './web/js/vendor/respond.min.js')
    .addEntry('bootstrap.min', './web/js/bootstrap.min.js')
    .addEntry('hippo-offcanvas', './web/js/hippo-offcanvas.js')
    .addEntry('jquery.magnific-popup.min', './web/js/jquery.magnific-popup.min.js')
    .addEntry('jquery.stellar', './web/js/jquery.stellar.js')
    .addEntry('jquery.countTo', './web/js/jquery.countTo.js')
    .addEntry('classie', './web/js/classie.js')
    .addEntry('selectFx', './web/js/selectFx.js')
    .addEntry('jquery.sticky-kit.min', './web/js/jquery.sticky-kit.min.js')
    .addEntry('twitterFetcher_min', './web/js/twitterFetcher_min.js')
    .addEntry('scripts', './web/js/scripts.js')






    // allow legacy applications.js')
//      to use $/jQuery as a global variable
   // .autoProvidejQuery()

    // enable source maps during development
    //.enableSourceMaps(!Encore.isProduction())

    // empty the outputPath dir before each build
    //.cleanupOutputBeforeBuild()

    // show OS notifications when builds finish/fail
    //.enableBuildNotifications()

    // create hashed filenames (e.g. app.abc123.csss)
    // .enableVersioning()

    // allow sass/scss files to be processed
    // .enableSassLoader()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();
