$(function() {
	$("#recherche").on('input', function() {
		$("#recherche").autocomplete({
			source: '../controleurs/autocomplete/autocomplete.php?term='+$("#recherche").val()
		});
	});
});

$(function() {
	$("#rechercheUser").on('input', function() {
		$("#rechercheUser").autocomplete({
			source: '../controleurs/autocomplete/autocompleteUser.php?term='+$("#rechercheUser").val()
		});
	});
});
$(function() {
	$("#rechercheBD").on('input', function() {
		$("#rechercheBD").autocomplete({
			source: '../controleurs/autocomplete/autocompleteBD.php?term='+$("#rechercheBD").val()
		});
	});
});