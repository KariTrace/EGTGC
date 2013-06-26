<?php
    include_once('/vendor/autoload.php');

    //auto load here, need to get use to autoloading and using libs
    $vendor     = "vendor/";
    $components = "components/";
?>
<!DOCTYPE html>

    <?php include_once("includes/header.php"); ?>

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

        <form id="eveAPIForm" method="post">
            <lable>EVE API Key ID</lable>
            <input type="text" name="keyID" value="123456">

            <lable>EVE API Verification Code</lable>
            <input type="text" name="vCode" value="asdf123456789012345678901234567890123456789012345678901234567890">

            <!--// Indicate to the core what form we are-->
            <input type="hidden" name="form_name" value="eveAPI">

            <input type="button" value="Clear" id="clearStepOne" class="resetForm" />
            <input type="submit" value="Proceed to Step Two &#61&#62" id="processEVEAPI" />
        </form>

        <?php include_once('includes/footer.php'); ?>
    </body>
</html>
