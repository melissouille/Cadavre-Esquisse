<?php
	/* Dimensions W H:
		1: 709x989px / 6x8,37cm 300 dpi
		2: 1113x989px / 9,42x8,37cm 300 dpi
		3: 2306x989px / 19,52x8,37cm 300 dpi 
		4: 1505x989px / 12,74x8,37cm 300 dpi
		5: 1113x2055px / 9,42x17,4cm 300 dpi
	*/
	$case1 = 709px 989px;
	$case2 = 1113px 989px;
	$case3 = 2306px 989px; 
	$case4 = 1505px 989px; 
	$case5 = 1113px 2055px;
	// Templates src :
	$template1; 
	$template2;
	$template3;
	$template4;
	$template5;
	// Dimension autre :
	$pageH = 3508px; //format A4
	$pageW = 2480px; // format A4

	$nbpage; // récupérer le nombre de page dans la bdd

	if ($case5) {
		$ligne = 2306px 2055px;
	} else {
		$ligne = 2306px 989px;
	}

	$i=0; // numéro de la case précédente ; récup numéro case
	$cases = array();
	
	for ($i=0; $i <= count($cases); $i++) { 
		// si la premiere case est vie
		if (empty($cases[0])) {
			// on attribut le template 1
			$cases[0] = $template1;
		} 
		if ($cases[$i] == $case1) {
			if ($cases[$i-1] == $case1) {
				$cases[$i+1] = $template1;
			} else {
				$cases[$i+1] = $template4;
			}
		}
		if ($cases[$i] == $case2 || $cases[$i] == $case5) {
			$cases[$i+1] = $template2;
		}
		if ($cases[$i] == $case3 || $cases[$i] == $case4) {
			# changement de ligne
		}
	} 
?>