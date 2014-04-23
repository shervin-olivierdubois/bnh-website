<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bring Nutrition Home</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="shortcut icon" href="flat-ui/images/favicon.ico">
        <link rel="stylesheet" href="flat-ui/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="flat-ui/css/flat-ui.css">
        <!-- Using only with Flat-UI (free)-->
        <link rel="stylesheet" href="common-files/css/icon-font.css">
        <!-- end -->
        <link rel="stylesheet" href="themes/bnh/css/style.css">
        <script type="text/javascript" src="//use.typekit.net/wzw2uko.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    </head>

    <body>
        <div class="page-wrapper">
            <?php print file_get_contents('./themes/bnh/templates/header.html'); ?>
            <section class="header-11-sub bg-midnight-blue">
                <div class="background">
                    &nbsp;
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h3>About <br />Bring Nutrition Home</h3>
                            <p>
                                This is the Bring Nutrition Home homepage. Olto viviribultor la quam, catquam publint rudeferum vissim patius, cus in etra viripio tat, vastumeres ad macchui desilia equis, mei sessena, sulerim moverei inihi, quius in videm, ut que nos fuerum adhui publicam pror ut gravemolii seris, pari publicionst uture, alerum in sed dem maximaio, sene nove, publist ribus.
                            </p>
                        </div>
                        <div class="col-sm-7 col-sm-offset-1 player-wrapper">
                            <div class="player">
                                <img src="http://placehold.it/660x370&text=image+placeholder">
                                <!--<iframe src="http://player.vimeo.com/video/29568236?color=3498db" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                <!--<iframe src="http://www.youtube.com/embed/BCC7rFxo6QA" allowfullscreen></iframe>-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php print file_get_contents('./themes/bnh/templates/preface--companies.html'); ?>

            <?php print file_get_contents('./content/home--main--content.html'); ?>

            <?php print file_get_contents('./content/global--main--contest.html'); ?>

            <?php print file_get_contents('./themes/bnh/templates/postscript--funding.html'); ?>

            <?php print file_get_contents('./themes/bnh/templates/footer.html'); ?>
        </div>

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="common-files/js/jquery-1.10.2.min.js"></script>
        <script src="flat-ui/js/bootstrap.min.js"></script>
        <script src="common-files/js/modernizr.custom.js"></script>
        <script src="common-files/js/startup-kit.js"></script>
        <script src="themes/bnh/js/script.js"></script>
    </body>
</html>