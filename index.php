<?php
    $vendor     = "vendor/";
    $components = "components/";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>EVE Gate to Google Calendar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- CSS includes -->
        <link rel="stylesheet" href="<?= $components; ?>require.css">
        <link rel="stylesheet" href="<?= $components; ?>html5-boilerplate/css/main.css">
        <link rel="stylesheet" href="<?= $components; ?>normalize.css/normalize.css">        

        <!-- JS includes -->
        <script src="<?= $components; ?>require.js"></script>
        <script src="<?= $components; ?>jquery/jquery.js"></script>
        <script src="<?= $components; ?>modernizr/modernizr.js"></script>
    </head>
    <body>
		<?php include_once("includes/googleAnalytics.php") ?>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <h1>Welcome to EGTGC</h1>
        <h2>3 easy steps and your EVE calendar will be re-produced onto your Google calendar.</h2>
        <h3>Step 1 of 4: EVE API information</h3>

        <h4><a href="http://community.eveonline.com/support/api-key/CreatePredefined?accessMask=1048580/null/false" target="_new">Click here</a> to get a new EVE API key specific to EGTGC.</h4>
        <ul>
            <li class="alert">CHECK THE 'NO EXPIRE' BOX!.</li>
            <li>Name it EGTGC for easy identification.</li>
        </ul>

        <h4>Paste the related information into the boxes below.</h4>


        <form id="eveApiData">
            <lable>EVE API Key ID</lable>
            <input type="text" name="keyID">

            <lable>EVE API Verification Code</lable>
            <input type="text" name="vCode">

            <input type="button" value="Proceed to Step Two &#61&#62" name="processStepOne" />
        </form>



        <!-- jQ and other end page scripting-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>