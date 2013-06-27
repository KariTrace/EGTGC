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
        <h2>4 easy steps and your EVE calendar will be re-produced onto your Google calendar.</h2>
        <h3>Step 2 of 4: Google API Information</h3>

        <h4><a href="" target="_new">Click here</a> to get a new Google API key pair specific to EGTGC.</h4>
        <ul>
            <li>Recommended: Name your calendar EGTGC for easy identification.</li>
        </ul>

        <h4>Paste the related information into the boxes below.</h4>
        
        <h4>Sign in with an existing Google Account.</h4>
        <img sec="" alt="Google sign-in" />

        <h3>OR</h3>

        <form id="googleAPIForm" method="post">
            <lable>Google API Public Key</lable>
            <input type="text" name="pubKey" value="">

            <lable>Google private Key</lable>
            <input type="text" name="privKey" value="">

            <!--// Indicate to the core what form we are-->
            <input type="hidden" name="form_name" value="googleAPI">

            <input type="button" value="Clear" id="clearStepOne" class="resetForm" />
            <input type="submit" value="Proceed to Step Three &#61&#62" id="processGoogleAPI" />
        </form>

        <?php include_once('includes/footer.php'); ?>
    </body>
</html>
