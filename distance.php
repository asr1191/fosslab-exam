<html>
<head>
	<title>Result</title>
</head>
<body>
<?php 
if ($_POST['conversion'] == 'tomile') {
 	echo $_POST['distval'] . "km = " . ((float)$_POST['distval']/1.609) . "miles";
} else {
	echo $_POST['distval'] . "miles = " . ((float)$_POST['distval']*1.609) . "km";
} ?>
</body>
</html>