$(function() {
	$("#recherche").on('input', function() {
		$("#recherche").autocomplete({
			source: '../controles/autocompletes/autocomplete.php?term='+$("#recherche").val()
		});
	});
});

$(function() {
	$("#rechercheUser").on('input', function() {
		$("#rechercheUser").autocomplete({
			source: '../controles/autocompletes/autocompleteUser.php?term='+$("#rechercheUser").val()
		});
	});
});
$(function() {
	$("#rechercheencours").on('input', function() {
		$("#rechercheencours").autocomplete({
			source: '../controles/autocompletes/autocompleteEnCours.php?term='+$("#rechercheencours").val()
		});
	});
});