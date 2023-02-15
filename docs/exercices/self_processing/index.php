<!doctype html>
<html>
<head>
<title>Request method</title>
</head>
<body>
<p>
<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	Température Fahrenheit:
	<input type="text" name="fahrenheit" /><br />
	<input type="submit" value="Convertir en Celsius !" />
	</form>
<?php }
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$fahrenheit = $_POST['fahrenheit'];
	$celsius = ($fahrenheit - 32) * 5 / 9;
	printf("%.2fF is %.2fC", $fahrenheit, $celsius);
}
else {
	die("Ce script ne fonctionne qu'avec les requêtes GET et POST.");
} ?>
</p>
</body>
</html>