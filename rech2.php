<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <title>Tax Tree</title>
</head>
<body>
<center>


<?php
$ganz_total_19 = 0;
$ganz_total_7 = 0;
$rueck19 = 0;
$rueck7 = 0;
$total_rueck = 0;
$rech19 = $_POST['tax19'];
$rech7 = $_POST['tax7'];
foreach((array)$rech19 as $key => $value){
    $ganz_total_19 += $value;
}
foreach((array)$rech7 as $key => $value){
    $ganz_total_7 += $value;
}
$ganz_total = $ganz_total_19 + $ganz_total_7;


/*19% Tax Free */
switch($ganz_total_19){
    case $ganz_total_19 < 25:
        $rueck19 = 0;
        break;
    case $ganz_total_19 < 30:
        $rueck19 = 2;
        break;
    case $ganz_total_19 < 50:
        $rueck19 = 3;
        break;
    case $ganz_total_19 < 75:
        $rueck19 = 5;
        break;
    case $ganz_total_19 < 100:
        $rueck19 = 7;
        break;
    case $ganz_total_19 < 125:
        $rueck19 = 10;
        break;
    case $ganz_total_19 < 150:
        $rueck19 = 13;
        break;
    case $ganz_total_19 < 175:
        $rueck19 = 16;
        break;
    case $ganz_total_19 < 200:
        $rueck19 = 19;
        break;
    case $ganz_total_19 < 225:
        $rueck19 = 22;
        break;
    case $ganz_total_19 < 250:
        $rueck19 = 25;
        break;
    case $ganz_total_19 < 275:
        $rueck19 = 28;
        break;
    case $ganz_total_19 < 300:
        $rueck19 = 31;
        break;
    case $ganz_total_19 < 325:
        $rueck19 = 34;
        break;
    case $ganz_total_19 < 350:
        $rueck19 = 36;
        break;
    case $ganz_total_19 < 375:
        $rueck19 = 39;
        break;
    case $ganz_total_19 < 400:
        $rueck19 = 42;
        break;
    case $ganz_total_19 < 425:
        $rueck19 = 45;
        break;
    case $ganz_total_19 < 450:
        $rueck19 = 48;
        break;
    case $ganz_total_19 < 475:
        $rueck19 = 51;
        break;
    case $ganz_total_19 < 500:
        $rueck19 = 54;
        break;
    case $ganz_total_19 < 525:
        $rueck19 = 57;
        break;
    case $ganz_total_19 < 550:
        $rueck19 = 59;
        break;
    case $ganz_total_19 < 575:
        $rueck19 = 62;
        break;
    case $ganz_total_19 < 600:
        $rueck19 = 65;
        break;
    case $ganz_total_19 < 625:
        $rueck19 = 68;
        break;
    case $ganz_total_19 < 650:
        $rueck19 = 71;
        break;
    case $ganz_total_19 < 675:
        $rueck19 = 74;
        break;
    case $ganz_total_19 < 700:
        $rueck19 = 76;
        break;
    case $ganz_total_19 < 725:
        $rueck19 = 79;
        break;
    case $ganz_total_19 < 750:
        $rueck19 = 82;
        break;
    case $ganz_total_19 < 775:
        $rueck19 = 85;
        break;
    /*2*/
    case $ganz_total_19 < 800:
        $rueck19 = 88;
        break;
    case $ganz_total_19 < 825:
        $rueck19 = 91;
        break;
    case $ganz_total_19 < 850:
        $rueck19 = 93;
        break;
    case $ganz_total_19 < 875:
        $rueck19 = 96;
        break;
    case $ganz_total_19 < 900:
        $rueck19 = 99;
        break;
    case $ganz_total_19 < 925:
        $rueck19 = 102;
        break;
    case $ganz_total_19 < 950:
        $rueck19 = 105;
        break;
    case $ganz_total_19 < 975:
        $rueck19 = 108;
        break;
    case $ganz_total_19 < 1000:
        $rueck19 = 111;
        break;
    case $ganz_total_19 < 1025:
        $rueck19 = 114;
        break;
    case $ganz_total_19 < 1050:
        $rueck19 = 117;
        break;
    case $ganz_total_19 < 1075:
        $rueck19 = 120;
        break;
    case $ganz_total_19 < 1100:
        $rueck19 = 123;
        break;
    case $ganz_total_19 < 1125:
        $rueck19 = 126;
        break;
    case $ganz_total_19 < 1150:
        $rueck19 = 129;
        break;
    case $ganz_total_19 < 1175:
        $rueck19 = 132;
        break;
    case $ganz_total_19 < 1200:
        $rueck19 = 135;
        break;
    case $ganz_total_19 < 1225:
        $rueck19 = 138;
        break;
    case $ganz_total_19 < 1250:
        $rueck19 = 141;
        break;
    case $ganz_total_19 < 1275:
        $rueck19 = 144;
        break;
    case $ganz_total_19 < 1300:
        $rueck19 = 147;
        break;
    case $ganz_total_19 < 1325:
        $rueck19 = 150;
        break;
    case $ganz_total_19 < 1350:
        $rueck19 = 153;
        break;
    case $ganz_total_19 < 1375:
        $rueck19 = 156;
        break;
    case $ganz_total_19 < 1400:
        $rueck19 = 159;
        break;
    case $ganz_total_19 < 1425:
        $rueck19 = 162;
        break;
    case $ganz_total_19 < 1450:
        $rueck19 = 165;
        break;
    case $ganz_total_19 < 1475:
        $rueck19 = 168;
        break;
    case $ganz_total_19 < 1500:
        $rueck19 = 172;
        break;
    case $ganz_total_19 < 1550:
        $rueck19 = 177;
        break;
    case $ganz_total_19 < 1600:
        $rueck19 = 183;
        break;
    case $ganz_total_19 < 1650:
        $rueck19 = 189;
        break;
    /*3*/
    case $ganz_total_19 < 1700:
        $rueck19 = 195;
        break;
    case $ganz_total_19 < 1750:
        $rueck19 = 202;
        break;
    case $ganz_total_19 < 1800:
        $rueck19 = 209;
        break;
    case $ganz_total_19 < 1850:
        $rueck19 = 215;
        break;
    case $ganz_total_19 < 1900:
        $rueck19 = 222;
        break;
    case $ganz_total_19 < 1950:
        $rueck19 = 228;
        break;
    case $ganz_total_19 < 2000:
        $rueck19 = 235;
        break;
    case $ganz_total_19 < 2050:
        $rueck19 = 242;
        break;
    case $ganz_total_19 < 2100:
        $rueck19 = 249;
        break;
    case $ganz_total_19 < 2150:
        $rueck19 = 256;
        break;
    case $ganz_total_19 < 2200:
        $rueck19 = 263;
        break;
    case $ganz_total_19 < 2250:
        $rueck19 = 270;
        break;
    case $ganz_total_19 < 2300:
        $rueck19 = 278;
        break;
    case $ganz_total_19 < 2350:
        $rueck19 = 285;
        break;
    case $ganz_total_19 < 2400:
        $rueck19 = 292;
        break;
    case $ganz_total_19 < 2450:
        $rueck19 = 299;
        break;
    case $ganz_total_19 < 2500:
        $rueck19 = 306;
        break;
    case $ganz_total_19 < 2550:
        $rueck19 = 313;
        break;
    case $ganz_total_19 < 2600:
        $rueck19 = 321;
        break;
    case $ganz_total_19 < 2650:
        $rueck19 = 328;
        break;
    case $ganz_total_19 < 2700:
        $rueck19 = 336;
        break;
    case $ganz_total_19 < 2750:
        $rueck19 = 344;
        break;
    case $ganz_total_19 < 2800:
        $rueck19 = 351;
        break;
    case $ganz_total_19 < 2850:
        $rueck19 = 358;
        break;
    case $ganz_total_19 < 2900:
        $rueck19 = 366;
        break;
    case $ganz_total_19 < 2950:
        $rueck19 = 373;
        break;
    case $ganz_total_19 < 3000:
        $rueck19 = 379;
        break;
    case $ganz_total_19 < 3100:
        $rueck19 = 390;
        break;
    case $ganz_total_19 < 3200:
        $rueck19 = 404;
        break;
    case $ganz_total_19 < 3300:
        $rueck19 = 418;
        break;
    case $ganz_total_19 < 3400:
        $rueck19 = 431;
        break;
    case $ganz_total_19 < 3500:
        $rueck19 = 445;
        break;
    /*4*/
    case $ganz_total_19 < 3600:
        $rueck19 = 460;
        break;
    case $ganz_total_19 < 3700:
        $rueck19 = 474;
        break;
    case $ganz_total_19 < 3800:
        $rueck19 = 488;
        break;
    case $ganz_total_19 < 3900:
        $rueck19 = 502;
        break;
    case $ganz_total_19 < 4000:
        $rueck19 = 516;
        break;
    case $ganz_total_19 < 4100:
        $rueck19 = 530;
        break;
    case $ganz_total_19 < 4200:
        $rueck19 = 544;
        break;
    case $ganz_total_19 < 4300:
        $rueck19 = 560;
        break;
    case $ganz_total_19 < 4400:
        $rueck19 = 575;
        break;
    case $ganz_total_19 < 4500:
        $rueck19 = 590;
        break;
    case $ganz_total_19 < 4600:
        $rueck19 = 604;
        break;
    case $ganz_total_19 < 4700:
        $rueck19 = 619;
        break;
    case $ganz_total_19 < 4800:
        $rueck19 = 635;
        break;
    case $ganz_total_19 < 4900:
        $rueck19 = 650;
        break;
    case $ganz_total_19 < 5000:
        $rueck19 = 665;
        break;
    case $ganz_total_19 < 5100:
        $rueck19 = 680;
        break;
    case $ganz_total_19 < 5200:
        $rueck19 = 694;
        break;
    case $ganz_total_19 < 5300:
        $rueck19 = 708;
        break;
    case $ganz_total_19 < 5400:
        $rueck19 = 722;
        break;
    case $ganz_total_19 < 5500:
        $rueck19 = 736;
        break;
    case $ganz_total_19 < 5600:
        $rueck19 = 750;
        break;
    case $ganz_total_19 < 5700:
        $rueck19 = 764;
        break;
    case $ganz_total_19 < 5800:
        $rueck19 = 779;
        break;
    case $ganz_total_19 < 5900:
        $rueck19 = 793;
        break;
    case $ganz_total_19 < 6000:
        $rueck19 = 808;
        break;
    case $ganz_total_19 < 6200:
        $rueck19 = 830;
        break;
    case $ganz_total_19 < 6400:
        $rueck19 = 860;
        break;
    case $ganz_total_19 < 6600:
        $rueck19 = 890;
        break;
    case $ganz_total_19 < 6800:
        $rueck19 = 920;
        break;
    case $ganz_total_19 < 7000:
        $rueck19 = 950;
        break;
    case $ganz_total_19 >= 7000:
        $rueck19 = $ganz_total_19 * 0.145;
        break;
    default:
        echo '<br />Error<br />';
        break;
}

/*7% Tax Free*/
switch($ganz_total_7){
    case $ganz_total_7 < 25:
        $rueck7 = 0;
        break;
    case $ganz_total_7 < 30:
        $rueck7 = 0.5;
        break;
    case $ganz_total_7 < 50:
        $rueck7 = 0.5;
        break;
    case $ganz_total_7 < 75:
        $rueck7 = 1;
        break;
    case $ganz_total_7 < 100:
        $rueck7 = 2;
        break;
    case $ganz_total_7 < 125:
        $rueck7 = 3;
        break;
    case $ganz_total_7 < 150:
        $rueck7 = 3.5;
        break;
    case $ganz_total_7 < 175:
        $rueck7 = 4.5;
        break;
    case $ganz_total_7 < 200:
        $rueck7 = 5;
        break;
    case $ganz_total_7 < 225:
        $rueck7 = 6;
        break;
    case $ganz_total_7 < 250:
        $rueck7 = 7;
        break;
    /*2*/
    case $ganz_total_7 < 275:
        $rueck7 = 8;
        break;
    case $ganz_total_7 < 300:
        $rueck7 = 8.5;
        break;
    case $ganz_total_7 < 325:
        $rueck7 = 9.5;
        break;
    case $ganz_total_7 < 350:
        $rueck7 = 10.5;
        break;
    case $ganz_total_7 < 375:
        $rueck7 = 11;
        break;
    case $ganz_total_7 < 400:
        $rueck7 = 12;
        break;
    case $ganz_total_7 < 425:
        $rueck7 = 13;
        break;
    case $ganz_total_7 < 450:
        $rueck7 = 14;
        break;
    case $ganz_total_7 < 475:
        $rueck7 = 15;
        break;
    case $ganz_total_7 < 500:
        $rueck7 = 15.5;
        break;
    case $ganz_total_7 < 525:
        $rueck7 = 16;
        break;
    /*3*/
    case $ganz_total_7 < 550:
        $rueck7 = 17;
        break;
    case $ganz_total_7 < 575:
        $rueck7 = 18;
        break;
    case $ganz_total_7 < 600:
        $rueck7 = 19;
        break;
    case $ganz_total_7 < 625:
        $rueck7 = 20;
        break;
    case $ganz_total_7 < 650:
        $rueck7 = 21;
        break;
    case $ganz_total_7 < 675:
        $rueck7 = 21.5;
        break;
    case $ganz_total_7 < 700:
        $rueck7 = 22;
        break;
    case $ganz_total_7 < 725:
        $rueck7 = 23;
        break;
    case $ganz_total_7 < 750:
        $rueck7 = 24;
        break;
    case $ganz_total_7 < 775:
        $rueck7 = 25;
        break;
    case $ganz_total_7 < 800:
        $rueck7 = 26;
        break;
    /*4*/
    case $ganz_total_7 < 825:
        $rueck7 = 27;
        break;
    case $ganz_total_7 < 850:
        $rueck7 = 28;
        break;
    case $ganz_total_7 < 875:
        $rueck7 = 29;
        break;
    case $ganz_total_7 < 900:
        $rueck7 = 29.5;
        break;
    case $ganz_total_7 < 925:
        $rueck7 = 30.5;
        break;
    case $ganz_total_7 < 950:
        $rueck7 = 31.5;
        break;
    case $ganz_total_7 < 975:
        $rueck7 = 32;
        break;
    case $ganz_total_7 < 1000:
        $rueck7 = 33;
        break;
    case $ganz_total_7 >= 1000:
        $rueck7 = $ganz_total_7 * 0.035;
        break;
    default:
        echo '<br />Error<br />';
        break;

}

$total_rueck = $rueck19 + $rueck7;
?>

    <div data-role="page" id="pageone">
        <div data-role="header">
            <h1>Tax Free Form</h1>
        </div>
        <div data-role="main" class="ui-content">
            <table data-role="table" data-mode="" class="ui-responsive ui-shadow" id="myTable">
                <tbody>
                <tr>
                    <td>Ganze Summe:</td>
                    <td><?php echo '€' . $ganz_total; ?></td>
                </tr>
                <tr>
                    <td>Summe von 19%:</td>
                    <td><?php echo '€' . $ganz_total_19; ?></td>
                </tr>
                <tr>
                    <td>Summe von 7%:</td>
                    <td><?php echo '€' . $ganz_total_7; ?></td>
                </tr>
                <tr>
                    <td>Tax Free Rückgeld:</td>
                    <td><?php echo '€' . $total_rueck; ?></td>
                </tr>

                </tbody>
            </table>
        </div>
        <div data-role="footer">
            <a href="index.php" class="ui-btn">Nochmal</a>
        </div>
    </div>
    </center>
</body>
</html>