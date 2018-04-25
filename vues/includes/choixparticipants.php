<?php 
$choixpotes = "style='display:none'";
if ($_POST['droit'] == "pote") {
	$choixpotes = "style='display:block'";
} elseif ($_POST['droit'] != "pote") {
	$choixpotes = "style='display:none'";
}
return $choixpotes;
?> 