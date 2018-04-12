	
<?php 
require 'lessc.inc.php';
try {
	lessc::ccompile('../vues/styles/less/style.less', '../vues/styles/css/style.css');
}
catch (exception $ex) {
	exit('lessc fatal error:<br />'.$ex->getMessage());
}
?>