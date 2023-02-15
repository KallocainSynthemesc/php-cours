<!doctype html>
<html>
<head>
<title>Request method</title>
</head>
<body>
<p>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	echo "Vous avez utilisé une requête get, vous utilisez probablement un navigateur.";
}
else {
	echo "Vous avez probablement essayé d'obtenir du contenu en utilisant la méthode POST. Essayez d'utiliser GET";
}?>
</p>
</body>
</html>