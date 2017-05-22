<?php
include('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">


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

<div style="display: block;" class="webrock-sandbox webrock-edit ui-sortable">


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



    switch (filter_input(INPUT_GET, 'actiune', FILTER_DEFAULT)) {
        case '':
            echo '  <form class="" id="form-XPAgIE8V" style="margin: 0px 150px 0px 150px;" action="register.php?actiune=validare" method="post"
          name="Default Text">
        <div class="textbox text-gray-dark"><h1>Inregistrare</h1>
            <p><strong>&nbsp;</strong></p></div>
        <div style="position: relative; left: 0px; top: 0px;" class="form-group"><label for="name">Nume</label><input
                id="name" name="name" placeholder="Numele" class=" form-control" type="text"></div>
        <div style="position: relative; left: 0px; top: 0px;" class="form-group"><label
                for="prenume">Prenume</label><input id="prenume" name="prenume" placeholder="Prenumele"
                                                    class=" form-control" type="text"></div>
        <div style="position: relative; left: 0px; top: 0px;" class="form-group"><label
                for="password">Parola</label><input id="password" name="password" placeholder="Parola"
                                                    class=" form-control" type="password"></div>
        <div class="form-group"><label for="sampleemail">Email</label><input id="sampleemail" name="email"
                                                                             placeholder="Introduceti email"
                                                                             class=" form-control" type="email"></div>
        <button type="submit" class="btn btn-lg btn-success" data-animate="transition.swoopIn">Inregistrare</button>
    </form>';
            break;

        case 'validare':

            $name = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
            $prenume = filter_input(INPUT_POST, 'prenume', FILTER_DEFAULT);
            $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
            $email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);


            if (($name == '') || ($prenume == '')){
                echo 'Nu ai introdus date in formular sau cele introduse nu sunt corecte.';

            } else {


                $cerereSQL = "INSERT INTO `studenti` (`nume`, `prenume`, `email`, `parola`)
	          VALUES ('".$name."', '".$prenume."', '".$email."', '".$password."')";
                mysqli_query($conn,$cerereSQL);

                echo  "Inregistrare cu succes!";
                echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=grupe.php">';

            }

            break;

    }

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


<script id="themeScript" type="text/javascript">jQuery(document).ready(function () {

    });</script>
</body>
</html>

