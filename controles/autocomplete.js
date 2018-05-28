$(function() {
	$("#recherche").on('input', function() {
		$("#recherche").autocomplete({
			source: '../controles/autocomplete.php?term='+$("#recherche").val()
		});
	});
});

$(function() {
	$("#rechercheUser").on('input', function() {
		$("#rechercheUser").autocomplete({
			source: '../controles/autocompleteUser.php?term='+$("#rechercheUser").val()
		});
	});
});
$(function() {
	$("#rechercheencours").on('input', function() {
		$("#rechercheencours").autocomplete({
			source: '../controles/autocompleteEnCours.php?term='+$("#rechercheencours").val()
		});
	});
});