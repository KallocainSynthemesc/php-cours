<?php
$word = $_POST['word'];
$number = $_POST['number'];
$chunks = ceil(strlen($word) / $number);
echo "Les fragments de {$number}-lettres de '{$word}' sont <br />\n";
for ($i = 0; $i < $chunks; $i++) {
	$chunk = substr($word, $i * $number, $number);
	$num = $i + 1;
	echo "{$num}: {$chunk} <br />\n";
}
?>