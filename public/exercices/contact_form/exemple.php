<?php 
$nom = $_POST["lname"];
$prenom = $_POST["fname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$phone = $_POST["phone"];
$pays = $_POST["pays"];
$missingValues = False;
$invalidValues = False;

function clean_data($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(empty($nom) || empty($prenom) || empty($email) || empty(subject) || empty(phone) || empty(pays)){
	$missingValues = True;
}

$nom = clean_data($nom);
$prenom = clean_data($prenom);
$email = clean_data($email);
$phone = clean_data($phone);
$subject = clean_data($subject);
$selectedCountry = $pays[0];

$invalidValues = !preg_match("/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/", $phone);

$invalidValues = !filter_var($email, FILTER_VALIDATE_EMAIL);

if($invalidValues || $missingValues){
	echo "Les valeurs que vous avez fournies étaient incorrectes ou manquantes";
}
else{
	echo "nom: {$nom} <br />\n";
	echo "prenom: {$prenom} <br />\n";
	echo "email: {$email} <br />\n";
	echo "subject: {$subject} <br />\n";
	echo "phone: {$phone} <br />\n";
	echo "selectedCountry: {$selectedCountry} <br />\n";
}
?>