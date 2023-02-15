<?php 
if (array_key_exists('attributes', $_POST)) {
  $values = $_POST['attributes'];
  $description = join(' ', $values);
  echo "Vous avez une personnalité {$description}.";
}
else{
	echo "vous n'avez pas sélectionné de traits de personnalité";
}
?>