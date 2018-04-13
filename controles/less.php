	
<?php 
require 'lessc.inc.php';
try {
	lessc::ccompile('../vues/styles/style.less', '../vues/styles/style.css');
}
catch (exception $ex) {
	exit('lessc fatal error:<br />'.$ex->getMessage());
}
?>