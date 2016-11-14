<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <title>Tax Tree</title>
</head>
<body>
<center>

    <?php

    if($_POST['tax19'] > 100 or $_POST['tax7'] > 100){
        echo '<h1><font color="red">Error, Es ist zu viele<br/> Bitte zurück</font></h1>';
        header("Location:index.php");
    }else{
    ?>
    <form data-ajax="false" action="rech2.php" method="post">
        <?php
        $tax19 = $_POST['tax19'];
        $tax7 = $_POST['tax7'];
        echo '<h3>Die preise des Artikels(19%)</h3><br />';
        for($i = 1; $i <= $tax19 ; $i++){
        ?><input name="tax19[]" type="number" step="any"><br/>
        <?php }
        echo '<h3>Die preise des Artikels(7%)</h3><br />';
        for($y = 1; $y <= $tax7; $y++){
        ?><input name="tax7[]" type="number" step="any"><br/>
            <?php } ?>

<?php } ?>
        <input type="submit" value="Go!"><br />
    </form>
</center>
</body>
</html>
