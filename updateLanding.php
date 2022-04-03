<?php
    session_start();

    $_SESSION['dinerName'] = $_POST['dinerName'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['phone'] = $_POST['phone'];

    $_SESSION['bStart'] = $_POST['bStart'];
    $_SESSION['bAMPM1'] = $_POST['bAMPM1'];
    $_SESSION['bEnd'] = $_POST['bEnd'];
    $_SESSION['bAMPM2'] = $_POST['bAMPM2'];
    $_SESSION['lStart'] = $_POST['lStart'];
    $_SESSION['lAMPM1'] = $_POST['lAMPM1'];
    $_SESSION['lEnd'] = $_POST['lEnd'];
    $_SESSION['lAMPM2'] = $_POST['lAMPM2'];
    $_SESSION['dStart'] = $_POST['dStart'];
    $_SESSION['dAMPM1'] = $_POST['dAMPM1'];
    $_SESSION['dEnd'] = $_POST['dEnd'];
    $_SESSION['dAMPM2'] = $_POST['dAMPM2'];
    $_SESSION['wStart'] = $_POST['wStart'];
    $_SESSION['wAMPM1'] = $_POST['wAMPM1'];
    $_SESSION['wEnd'] = $_POST['wEnd'];
    $_SESSION['wAMPM2'] = $_POST['wAMPM2'];
    $_SESSION['barStart'] = $_POST['barStart'];
    $_SESSION['barAMPM1'] = $_POST['barAMPM1'];
    $_SESSION['barEnd'] = $_POST['barEnd'];
    $_SESSION['barAMPM2'] = $_POST['barAMPM2'];
    
header("Location: createLanding.php");
exit;
?>
