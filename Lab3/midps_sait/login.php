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

</head>

<body style="cursor: default;" class="">


<div class="webrock-sandbox webrock-edit ui-sortable">
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


    if (!isset($_GET['actiune'])) $_GET['actiune'] = '';

    switch ($_GET['actiune']) {
        case '':
            echo '<form class="" id="form-kJP93xU8" style="margin: 0px 150px 0px 150px;" action="login.php?actiune=validare" method="post" name="Default Text">
                     <div class="form-group">
                         <label for="sampleemail">Email</label>
                              <input id="sampleemail" name="email" placeholder="Email" class=" form-control" type="email">
                         </div>
                         <div style="position: relative; left: 0px; top: 0px;" class="form-group">
                             <label for="password">Parola</label>
                              <input id="password" name="password" placeholder="Parola" class=" form-control" type="password">
                         </div>
                          <button type="submit" class="btn btn-lg btn-primary btn-block">Logare</button>
                     </form>';

            break;

        case 'validare':

            $_SESSION['email'] = $_POST['email'];
            $email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
            $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

            if (($email == '') || ($password == '')) {
                echo 'Completeaza casutele.';

            } else {

                $sql = "SELECT * FROM `studenti` WHERE email='" . $email . "' AND parola='" . $password . "'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=grupe.php">';
                    }
                } else {
                    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=eroare.php">';
                }
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


<script id="themeScript" type="text/javascript">jQuery(document).ready(function () {

    });</script>
</body>
</html>
