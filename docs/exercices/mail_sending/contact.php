<?php 
$nom = ""; //lname
$prenom = ""; //fname
$email = ""; //email
$subject = ""; //subject
$phone = ""; //phone
$selectedCountry = ""; //pays[]


function clean_data($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (!empty($_POST["lname"])) {
    $nom = clean_data($_POST["lname"]);
}

//pouvez-vous compléter la validation

echo "nom: {$nom} <br />\n";
echo "prenom: {$prenom} <br />\n";
echo "email: {$email} <br />\n";
echo "subject: {$subject} <br />\n";
echo "phone: {$phone} <br />\n";
echo "selectedCountry: {$selectedCountry} <br />\n";
?>