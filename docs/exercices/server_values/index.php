<!doctype html>
<html>
<head>
<title>Server Variables</title>
</head>
<body>
<p>
Ici, nous pouvons jouer un peu avec les valeurs du serveur:<br />
<p style="color:blue">PHP_SELF: </p><?php echo $_SERVER["PHP_SELF"]; ?><br />
<p style="color:blue">SERVER_SOFTWARE: </p><?php echo $_SERVER["SERVER_SOFTWARE"]; ?><br />
<p style="color:blue">REQUEST_METHOD: </p><?php echo $_SERVER["REQUEST_METHOD"]; ?><br />
<p style="color:blue">SERVER_PORT: </p><?php echo $_SERVER["SERVER_PORT"]; ?><br />
<p>Pouvez-vous afficher sur le site le nom du serveur ? <b>Que signifie le résultat ?</b></p>
</p>
</body>
</html>