
<?php
include('menu.php');
require('config.php');
?>
<!DOCTYPE html> <html><head>

    <meta charset="UTF-8">

    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">

    <title>WebRock - </title>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="description" content="">

    <meta name="keywords" content="">


    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">



    <link rel="icon" id="favicon" type="image/x-icon" href="favicon.ico">



    <link href="scss/font-awesome.css" rel="stylesheet" type="text/css">

    <link href="scss/animate.css" rel="stylesheet" type="text/css">

    <link href="scss/bootstrap.css" rel="stylesheet" type="text/css">

    <link href="scss/theme.css" rel="stylesheet" type="text/css">


<link href="http://localhost:82/webrock_html/inputs/wysiwyg/skins/light/skin.min.css" rel="stylesheet"></head>

<body class="">


<div style="display: block;" class="webrock-sandbox webrock-edit ui-sortable">

    <div data-animate="callout.shake" class="margin-left:20px;">
        <h1 class="heading heading-lg  text-heading-bold">Teorie WEB</h1></div>
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


    $id_tema = filter_input(INPUT_GET,'id',FILTER_DEFAULT);



    $sql = "select * from `teme` where id_tema =  '". $id_tema . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-12">
                <div class="blog-post">
                    <div class="blog-post-body"><h3 class="blog-post-title">'.$row['title'].'</h3>
                        <p class="well">'.$row['continut'].'</p>
                        <div class="blog-post-excerpt text-sm"></div>
                    </div>
                    <div class="blog-post-footer"><a href="test.php"><i class="fa fa-chevron-right pull-right"></i>
                            Test</a></div>


                </div>
            </div>';
        }
    }


    mysqli_close($conn);
    ?>
</div>


<script src="js/jquery.js" type="text/javascript">

</script>

<script src="js/bootstrap.js" type="text/javascript">

</script>


<script src="js/theme.js" data-src="js/theme.js" type="text/javascript">

</script>

<script src="js/theme.plugins.js" data-src="js/theme.plugins.js" type="text/javascript">

</script>


<script id="themeScript" type="text/javascript">jQuery(document).ready(function(){

});</script></body></html>