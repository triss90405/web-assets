<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web-Assets</title>
    <meta charset="utf-8">
    <meta name="description" content="A collection of resources for webdesigners and developers">
    <meta name="author" content="Tristan White">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/ico" href="images/favicon.ico">
    <!-- http://grabicon.com/icon?domain=http://www.google.com/fonts/&size=16-->
</head>
<body>

    <?php
    $msg = $_GET['msg'];
        if(isset($msg)){
            echo '<input id="success" type="checkbox" hidden="hidden" name="success" tab-index="0"> 
            <div class="sceletus-alert success">
                '. $msg .'
                <label for="success" class="close">&#10006</label>
            </div>';
        };
    ?>

    <div class="wrapper">
        <div class="header-buttons">
            <!--Modal Start-->
            <input id="modal" type="checkbox" hidden="hidden" name="modal" tab-index="1">     
            <label for="modal" class="button dark pull-right">Suggest resource</label>
            <div class="modal_overlay">
                <div class="modal_box">
                    <label for="modal">&#10006;</label>
                    <h2>Suggest Resource</h2>
                     <form role="form" method="post" action="mail.php">
                        <input type="email" id="email" name="email" required placeholder="Enter your email address">
                        <input type="text" id="name" name="name" required placeholder="Enter the name of the resource">
                        <textarea name="resource" id="resource" required rows="3" placeholder="Enter a description of the resource and a link to its source"></textarea>
                        <button type="submit" class="button blue center" style="float:left;">Suggest Resource</button> 
                    </form>
                </div>
            </div>
            <!--Modal End-->
            <!--Donation Start-->
            <form class="donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_donations">
                <input type="hidden" name="business" value="oliver.tristan@gmail.com">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="item_name" value="web-assets.net">
                <input type="hidden" name="no_note" value="0">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_SM.gif:NonHostedGuest">
                <input class="button dark pull-right" style="margin-right: 10px;" type="submit" name="submit" value="Donate" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
            <!--Donation End-->
        </div>

        <h1>Web <img src="img/logo.png" width="30px" alt="Logo"> Assets</h1>
        <hr>

        <div class="masonry">

            <!--ICONS-->
            <div class="item" style="padding: 5px">
                <?php include("sections/icons.html"); ?>
            </div>

             <!--FONTS-->
            <div class="item" style="padding: 5px">
                <?php include("sections/fonts.html"); ?>
            </div>

            <!--COLOURS-->
            <div class="item" style="padding: 5px">
                <?php include("sections/colours.html"); ?>
            </div>

            <!--CMS-->
            <div class="item" style="padding: 5px">
                <?php include("sections/cms.html"); ?>
            </div>

            <!--JAVASCRIPT-->
            <div class="item" style="padding: 5px">
                <?php include("sections/js.html"); ?>
            </div>

            <!--CSS-->
            <div class="item" style="padding: 5px">
                <?php include("sections/css.html"); ?>
            </div>

            <!--GFX-->
            <div class="item" style="padding: 5px">
                <?php include("sections/gfx.html"); ?>
            </div>

            <!--FRAMEWORKS-->
            <div class="item" style="padding: 5px">
                <?php include("sections/frameworks.html"); ?>
            </div>

            <!--STOCK PHOTOS-->
            <div class="item" style="padding: 5px">
                <?php include("sections/stock.html"); ?>
            </div>

            <!--MARKETING-->
            <div class="item" style="padding: 5px">
                <?php include("sections/marketing.html"); ?>
            </div>

            <!--TESTING-->
            <div class="item" style="padding: 5px">
                <?php include("sections/testing.html"); ?>
            </div>

            <!--MISC-->
            <div class="item" style="padding: 5px">
                <?php include("sections/misc.html"); ?>
            </div>

        </div>

        <hr>
        <footer>
            <p>Made with
            <svg class="heart" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="92.515px" height="73.161px" viewBox="0 0 92.515 73.161" enable-background="new 0 0 92.515 73.161" xml:space="preserve"><g><path fill="#010101" d="M82.32,7.888c-8.359-7.671-21.91-7.671-30.271,0l-5.676,5.21l-5.678-5.21c-8.357-7.671-21.91-7.671-30.27,0c-9.404,8.631-9.404,22.624,0,31.255l35.947,32.991L82.32,39.144C91.724,30.512,91.724,16.52,82.32,7.888z"></path></g></svg> 
            by <a href="https://github.com/triss90405" target="_target">Tristan White</a></p>
            &copy;Copyright <?php echo date("Y") ?> - <a href="http://d3sign.dk/">d3sign</a>
        </footer>

    </div> 

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-57897852-1', 'auto');
        ga('send', 'pageview');
    </script>

</body>
</html>