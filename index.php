<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<!-- Include the jQuery library -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include the jQuery Mobile library -->
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<title>Tax Tree</title>
</head>
<body>
<div data-role="page">
<center>
<form data-ajax="false" action="rech.php" method="post">
<?php echo '<h3>Wie viele 19% Artikel?</h3><br />(Max: 100)<br />'; ?>
<input name="tax19" type="tel" onkeyup="value=this.value.replace(/\D+/g,'')"><br /><br />
<?php echo '<h3>Wie viele 7% Artikel?</h3> <br/>(Max: 100)<br />'; ?>
<input name="tax7" type="tel" onkeyup="value=this.value.replace(/\D+/g,'')"><br/>
<br /><input type="submit" value="Ok">
</form>
</center>
</div
</body>
</html>
