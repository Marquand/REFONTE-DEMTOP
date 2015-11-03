$(document).ready(function() {
		$("form#formulaire_calcul").submit(function() {
		
	for (i=0; i < 30; i++) {
		if (val == "plus_" + salle + "_" + i) {

			$.getJSON("controleur.php",
			{"action" : "plus",
			"total_salle" : $("input#resultat_" + salle).val(),
			"total" : $("input#resultat_total").val(),
			"nb_total" : $("input#nombre_" + salle).val(),
			"nb_objet" : $("input#resultat_" + salle + "_" + i).val(),
			"volume" : $("input#bdd_" + salle + "_Volume_" + i).val(),
			"id" : $("input#bdd_" + salle + "_ID_" + i).val(),
			"salle" : "cuisine"},
			function(data) {
				$("input#resultat_" + salle + "_" + i).val(data['resultat_objet']);
				$("input#resultat_" + salle).val(data['resultat_salle']);
				$("input#resultat_total").val(data['resultat_total']);
			}
			);
			return false;
		}
		if (val == "moins_" + salle + "_" + i) {
			$.getJSON("controleur.php",
			{"action" : "moins",
			"total_salle" : $("input#resultat_" + salle).val(),
			"total" : $("input#resultat_total").val(),
			"nb_total" : $("input#nombre_" + salle).val(),
			"nb_objet" : $("input#resultat_" + salle + "_" + i).val(),
			"volume" : $("input#bdd_" + salle + "_Volume_" + i).val(),
			"id" : $("input#bdd_" + salle + "_ID_" + i).val(),
			"salle" : "cuisine"},
			function(data) {
				$("input#resultat_" + salle + "_" + i).val(data['resultat_objet']);
				$("input#resultat_" + salle).val(data['resultat_salle']);
				$("input#resultat_total").val(data['resultat_total']);
			}
			);
			return false;
		}
	}
		});
	});