<?php
include('menu.php');
require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
    <title>WebRock - </title>

    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="description" content="">

    <meta name="keywords" content="">


    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">


    <link rel="icon" id="favicon" type="image/x-icon" href="favicon.ico">

    <link href="scss/font-awesome.css" rel="stylesheet" type="text/css">

    <link href="scss/animate.css" rel="stylesheet" type="text/css">

    <link href="scss/bootstrap.css" rel="stylesheet" type="text/css">

    <link href="scss/theme.css" rel="stylesheet" type="text/css">

    <link href="http://localhost:82/webrock_html/inputs/wysiwyg/skins/light/skin.min.css" rel="stylesheet">
</head>

<body style="cursor: default;" class="">

<div class="webrock-sandbox webrock-edit ui-sortable">

    <div style="position: relative; left: 0px; top: 0px;" class="container">
        <div class="row margin-top-2x margin-bottom-2x" style="position: relative;">
            <div style="position: relative; left: 0px; top: 0px;" data-animate="callout.tada" class="">
                <h1 class="heading heading-md  text-heading-bold">Grupele</h1>
            </div>

            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "logare";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("NU mam putut conecta: " . mysqli_connect_error());
            }


	

                $sql = "SELECT * FROM `grupa`";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col  col-sm-4 col-md-4">
                <div class="blog-post">
                    <div class="blog-post-body"><h3 class="blog-post-title">'.$row['nume_grupa'].'</h3>

                        <div class="blog-post-excerpt text-sm"></div>
                    </div>
                    <div class="blog-post-footer"><a href="teme.php?grupa='.$row['id_grupa'].'"><i class="fa fa-chevron-right pull-right"></i>
                            Vezi teme</a></div>
                </div>
            </div>';
                    }
                }


            mysqli_close($conn);
            ?>


        </div>
    </div>

</div>


<script src="js/jquery.js" type="text/javascript">

</script>

<script src="js/bootstrap.js" type="text/javascript">

</script>


<script src="js/theme.js" data-src="js/theme.js" type="text/javascript">

</script>

<script src="js/theme.plugins.js" data-src="js/theme.plugins.js" type="text/javascript">

</script>


<script id="themeScript" type="text/javascript">jQuery(document).ready(function () {

    });</script>
</body>
</html>