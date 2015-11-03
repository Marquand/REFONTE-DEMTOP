<script language="javascript">
function validation(formulaire) 
{

var sErreurs = "" ; 
var filter=/^[0-9]{5}$/;
var filter2=/^[0-9]{10}$/;
var filter3=/^[0-9]/;
if (!filter.test(formulaire.code_postal_départ.value))  sErreurs = "- Code postal départ non valide\n" ;
if (!filter.test(formulaire.code_postal_arrivée.value))  sErreurs += "- Code postal arrivée non valide\n" ;
if (!filter.test(formulaire.code_postal.value))  sErreurs += "- Code postal non valide\n" ;
if ( formulaire.mail.value =='' ) sErreurs += "- Email obligatoire\n" ;
if ( formulaire.condition_general.checked == false) sErreurs += "- Vous devez accepter les conditions générales de vente\n" ;
if ( formulaire.volume.value =='' ) sErreurs += "- Volume obligatoire\n" ;
if (!filter2.test(formulaire.telephone1.value))  sErreurs += "- Téléphone 1 non valide\n" ;
if (!filter3.test(formulaire.volume.value))  sErreurs += "- Volume non valide\n" ;

for (m = 1; m < x+1; m++) {
	val = document.getElementById("valeurobjet"+m).value;
	if (!filter3.test(val))  sErreurs += "- La valeur du mobilier n°" + m + " n'est pas valide\n" ;
}

if ( sErreurs != "" ) 
		{ 
		alert(sErreurs) ; 
		return false ; 
		} 
	else 
		{ 
		return true ;
		} 
}

 
function afficher(id) {
 
	var d = document.getElementById(id);
	nom = d.name;

	if(nom == 'menu_carte') {
		if (document.getElementById('aff_menu_carte').style.display == 'none') {
			document.getElementById('aff_menu_carte').style.display='block';
		}
		else
		{
			document.getElementById('aff_menu_carte').style.display='none';
		}
	}
}

jQuery(document).ready(function(){
	/*$$('input.DatePicker').each( function(el){
		new DatePicker(el);
	});*/
	var el = document.getElementById('date');
	new DatePicker(el,{
		pickerClass: 'datepicker_vista',
		days:['Dimanche','Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
		months:['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
		format: 'd-m-Y',
		allowEmpty: true
	});
	// alert(el);
});
jQuery(document).ready(function(){
	/*$$('input.DatePicker').each( function(el){
		new DatePicker(el);
	});*/
	var el = document.getElementById('date2');
	new DatePicker(el,{
		pickerClass: 'datepicker_vista',
		days:['Dimanche','Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
		months:['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
		format: 'd-m-Y',
		allowEmpty: true
	});
	// alert(el);
});
jQuery(document).ready(function(){
	/*$$('input.DatePicker').each( function(el){
		new DatePicker(el);
	});*/
	var el = document.getElementById('date3');
	new DatePicker(el,{
		pickerClass: 'datepicker_vista',
		days:['Dimanche','Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
		months:['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
		format: 'd-m-Y',
		allowEmpty: true
	});
	// alert(el);
});
    var x=0;
    function addinput()
    {
        x++;/*
        document.getElementById("frm" ).innerHTML += "<br /><input name='txt"+i+"' type='text' value='' />";*/
         
        var frm = document.getElementById("frm"); //le noeud parent
         
        // creation d'un champ
        var inpt = document.createElement('input');
        inpt.setAttribute('name','vetuste'+x);
        inpt.setAttribute('type','text');
		inpt.setAttribute('placeholder','Exemple: 3');
        frm.appendChild(inpt);
		
		var inpt = document.createElement('input');
        inpt.setAttribute('name','objet'+x);
        inpt.setAttribute('type','text');
		inpt.setAttribute('placeholder','Exemple: Télévision');
        frm.appendChild(inpt);
		
		var inpt = document.createElement('input');
        inpt.setAttribute('name','valeurobjet'+x);
        inpt.setAttribute('type','text');
		inpt.setAttribute('id','valeurobjet'+x);
		inpt.setAttribute('placeholder','Exemple: 880');
        frm.appendChild(inpt);

        // retour a la ligne aprés l'ajout
        var br = document.createElement('br');
        frm.appendChild(br);
         
        //Incrementation du compteur i (nombre de champ)
        document.getElementById("cmpvetuste" ).value=x;
		document.getElementById("cmpobjet" ).value=x;
		document.getElementById("cmpvaleur" ).value=x;
		
		
	}

</script>
<p align="center">Pour un devis adapté à votre déménagement, veuillez remplir avec attention le questionnaire ci-dessous.
</p>
<form id='aff_demenagement' method = "post" name="Devis" action ="index.php?page=creat devis">
<div style="padding-left:30px; padding-right:30px;">
		<fieldset>
			<table>
				<legend><h2>Vos coordonnées</h2><legend>
				<td>Civilité*: </td><td><SELECT name="civilité" id ="civilité">
					<OPTION  value="Mr">Mr</OPTION>
					<OPTION  value="Mlle">Mlle</OPTION>
					<OPTION  value="Mme">Mme</OPTION>
				</SELECT></td>
				<tr>
				</tr>
				<td>Nom *:</td><td> <input type="nom" id="nom" name="nom" size="25" maxlength="30" placeholder="Nom"></td><td></td>
				<tr>
				</tr>
				<td>Prénom*: </td><td><input type="prenom" id="prenom" name="prenom" size="25" maxlength="30" placeholder="prénom"></td>
				<tr>
				</tr>
				<td>Adresse*: </td><td><input type="adresse" id="adresse" name="adresse" size="25" placeholder="Adresse"></td>
				<tr>
				</tr>
				<td>Code postal*: </td><td><input type="Code postal" id="code_postal" name="code_postal" size="25" maxlength="5" placeholder="Code postal"></td>
				<tr>
				</tr>
				<td>Ville*: </td><td><input type="Ville" id="ville" name="ville" size="25" maxlength="30" placeholder="Ville"></td>
				<tr>
				</tr>
				<td>Téléphone 1*: </td><td><input type="telephone1" id="telephone1" name="telephone1" size="25" maxlength="10" placeholder="Exemple:0478453324"></td>
				<tr>
				</tr>
				<td>Téléphone 2: </td><td><input type="telephone2" id="telephone2" name="telephone2" size="25" maxlength="10" placeholder="Exemple:0478453324"></td>
				<tr>
				</tr>
				<td>Mail*: </td><td><input value="" type="email" id="mail" name="mail" size="25" maxlength="30" placeholder="Mail"></td>
				<tr>
				</tr>
			</table>
		</fieldset><fieldset>
			<table>
				<legend><h2>Date de la prestation</h2></legend>
				<tr>
				<td colspan="3" style="font-weight : bold;">Spéciale<a href="#" class="popup-light" data-popup-class="popup-block11" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a></td>
				<td colspan="2" style="font-weight : bold;">Organisée<a href="#" class="popup-light" data-popup-class="popup-block10" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a></td>
				</tr>
				<tr>
				<td>Le:</td>
				<td><input type="text" id="date" name="Date" size="15" maxlength="30" placeholder="Date" class="DatePicker"></td>
				<td style="padding:6px 60px;"></td>
				<td> ou / entre: </td>
				<td><input type="text" id="date2" name="Date2" size="20" maxlength="30" placeholder="Date" class="DatePicker"></td>
				<td> et: </td>
				<td><input type="text" id="date3" name="Date3" size="20" maxlength="30" placeholder="Date" class="DatePicker"></td>
				</tr>
			</table>
		</fieldset><fieldset>
			<table>
				<legend><h2>Adresse de la prestation</h2></legend>
				<tr>
				<td collspan=2 style="font-weight : bold;">Adresse départ :</td><td></td>
				<td collspan=2 style="font-weight : bold;">Adresse Arrivée :</td><td></td>
				</tr>
				<tr>
				<td>Adresse*: </td><td><input type="adresse_départ" id="adresse_départ" name="adresse_départ" size="25" placeholder="Adresse"></td> <td>Adresse*: </td><td><input type="adresse_arrivée" id="adresse_arrivée" name="adresse_arrivée" size="25" placeholder="Adresse"></td>
				<tr>
				</tr>
				<td>Code postal*: </td><td><input type="code_postal_départ" id="code_postal_départ" name="code_postal_départ" size="25" maxlength="5" placeholder="Code Postal"></td><td>Code postal*: </td><td><input type="code_postal_arrivée" id="code_postal_arrivée" name="code_postal_arrivée" size="25" maxlength="5" placeholder="Code postal"></td>
				<tr>
				</tr>
				<td>Ville*: </td><td><input type="ville_départ" id="ville_départ" name="ville_départ" size="25" maxlength="30" placeholder="Ville"></td><td> Ville*: </td><td><input type="ville_arrivée" id="ville_arrivée" name="ville_arrivée" size="25" maxlength="30" placeholder="ville"></td>
				<tr>
				</tr>
				<td>Type logement*<a href="#" class="popup-light" data-popup-class="popup-block6" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a>: </td><td><input type="type_logement_départ" id="type_logement_départ" name="type_logement_départ" size="25" maxlength="30" placeholder="Type logement"></td><td>Type logement*<a href="#" class="popup-light" data-popup-class="popup-block6" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a>: </td><td><input type="type_logement_arrivée" id="type_logement_arrivée" name="type_logement_arrivée" size="25" maxlength="30" placeholder="Type logement"></td>
				<tr>
				</tr>
				<td>Etage*<a href="#" class="popup-light" data-popup-class="popup-block7" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a>: </td><td><input type="etage_départ" id="etage_départ" name="etage_départ" size="25" maxlength="30" placeholder="Etage"></td><td>Etage*<a href="#" class="popup-light" data-popup-class="popup-block7" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a>: </td><td><input type="etage_arrivée" id="etage_arrivée" name="etage_arrivée" size="25" maxlength="30" placeholder="Etage"></td>
				<tr>
				</tr>
				<td>Ascenseur*<a href="#" class="popup-light" data-popup-class="popup-block8" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a>: </td><td><SELECT name="ascenceur_départ" id ="ascenceur_départ"><OPTION style="padding-right:48px;" value="Pas d'ascenseur">Pas d'ascenseur</OPTION><OPTION value="1 - 2 personnes">1 - 2 personnes</OPTION><OPTION  value="3 - 4 personnes">3 - 4 personnes</OPTION><OPTION  value="5 - 8 personnes">5 - 8 personnes</OPTION><OPTION  value="+ de 8 personnes">+ de 8 personnes</OPTION></SELECT></td><td>Ascenseur*<a href="#" class="popup-light" data-popup-class="popup-block8" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a>: </td><td><SELECT name="ascenceur_arrivée" id ="ascenceur_arrivée"><OPTION  style="padding-right:49px;" value="Pas d'ascenseur">Pas d'ascenseur</OPTION><OPTION  value="1 - 2 personnes">1 - 2 personnes</OPTION><OPTION  value="3 - 4 personnes">3 - 4 personnes</OPTION><OPTION  value="5 - 8 personnes">5 - 8 personnes</OPTION><OPTION  value="+ de 8 personnes">+ de 8 personnes</OPTION></SELECT></td>
				<tr>
				</tr>
				<td>Stationnement*<a href="#" class="popup-light" data-popup-class="popup-block9" data-popup-top="5%" ><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a>: </td><td><input type="stationnement_départ" id="stationnement_départ" name="stationnement_départ" size="25" maxlength="30" placeholder="Stationnement"></td><td>Stationnement*<a href="#" class="popup-light" data-popup-class="popup-block9" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a>: </td><td><input type="stationnement_arrivée" id="stationnement_arrivée" name="stationnement_arrivée" size="25" maxlength="30" placeholder="Stationnement"></td>
				<tr>
				</tr>
				<td>Accès*<a href="#" class="popup-light" data-popup-class="popup-block12" data-popup-top="5%" ><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a>: </td><td><input type="accès_départ" id="accès_départ" name="accès_départ" size="25" maxlength="30" placeholder="Accès"></td><td>Accés*<a href="#" class="popup-light" data-popup-class="popup-block12" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a>: </td><td><input type="accès_arrivée" id="accès_arrivée" name="accès_arrivée" size="25" maxlength="30" placeholder="Accès"></td>
				<tr>
				</tr>
			</table>
			<br>
			<div id="info2">
				Merci de renseigner la fenêtre ci dessous en cas de livraisons multiples ou pour tout renseignement supplémentaire. 
			</div>
			<textarea type="text" name="msg2" id="msg2" COLS="65" ROWS="5" placeholder="Entrez ici votre commentaire:"></textarea>
		</fieldset><fieldset>
			<table>
				<legend><h2>Formule choisie</h2></legend>
				<p>Vous pouvez voir le détail de chaque prestations en cliquant sur les points d'interrogations.</p>
				<tr>
				<td colspan="3" style="font-weight : bold;">Déménagement:</td><td style="padding: 0px 150px;"></td>
				<td colspan="2" style="font-weight : bold;">Débarras:</td><td></td>
				</tr>
				<tr>
				<td><input type="checkbox" id="meuble_vides" name="meuble_vides" value="Meuble vides"></td><td>Meubles vides<a href="#" class="popup-light" data-popup-class="popup-block" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a></td>
				<td></td><td></td><td><input type="checkbox" id="debarras" name="debarras" value="Débarras">Débarras<a href="#" class="popup-light" data-popup-class="popup-block13" data-popup-width="750px" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a></td>
				</tr>
				<tr>
				</tr>
				<td><input type="checkbox" id="tout_emballe" name="tout_emballe" value="Tout emballé"></td><td>Tout emballé<a href="#" class="popup-light" data-popup-class="popup-block2" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a></td>
				<tr>
				</tr>
				<td><input type="checkbox" id="classique" name="classique" value="Classique"></td><td>Classique<a href="#" class="popup-light" data-popup-class="popup-block3" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a></td>
				<tr>
				</tr>
				<td><input type="checkbox" id="Top" name="Top" value="Top"></td><td>Top<a href="#" class="popup-light" data-popup-class="popup-block4" data-popup-top="5%"><img src="img/boutonaide.png" alt="Bouton aide"  style="width: 15px"></a></td>
				<tr>
				</tr>
				<!--<td><input type="checkbox" name="menu_carte" id="menu_carte" onclick="javascript:afficher(this.id);" ><td colspan=2><h3>A la carte</h3></td></input></td>
				<tr>
				</tr>-->
				<table id='aff_menu_carte' style='display:none;'><td><input type="checkbox" id="location" name="location" value="Location camion capitonné(20m3) avec chauffeur (équipé de chariots et sangle d'arrimage)(8h-12h/13h-17h)"></td><td>Location camion capitonné(20m3) avec chauffeur (équipé de chariots et sangle d'arrimage)(8h-12h/13h-17h)</td>
					<tr>
					</tr>
					<td><input type="checkbox" id="personnel_manutention" name="personnel_manutention" value="Mise à disposition de personnel pour la manutention ou l'emballage (8h-12h/13h-17h)"></td><td>Mise à disposition de personnel pour la manutention ou l'emballage (8h-12h/13h-17h)</td>
					<tr>
					</tr>
					<td><input type="checkbox" id="emballage_mobilier" name="emballage_mobilier" value="Emballage de votre mobilier"></td><td>Emballage de votre mobilier</td>
					<tr>
					</tr>
					<td><input type="checkbox" id="demontage_et_remontage" name="demontage_et_remontage" value="Démontage et remontage de votre mobilier"></td><td>Démontage et remontage de votre mobilier</td>
					<tr>
					</tr>
					<td><input type="checkbox" id="emballage_vaisselle" name="emballage_vaisselle" value="Emballage de la vaisselle et bibeblots"></td><td>Emballage de la vaisselle et et bibeblots</td>
					<tr>
					</tr>
					<td><input type="checkbox" id="emballage_tableaux" name="emballage_tableaux" value="Emballage des tableaux, miroirs et glaces"></td><td>Emballage des tableaux, miroirs et glaces</td>
					<tr>
					</tr>
					<td><input type="checkbox" id="protection" name="protection" value="Protection de votre literie sous housses"></td><td>Protection de votre literie sous housses</td>
					<tr>
					</tr>
				</table></fieldset><fieldset>
				<table>
					<legend><h2>Vente de materiel</h2></legend>
					<table>
						<td>Type materiel</td>
						<td>Etat (Neuf/Occasion)</td>
						<td>Quantité</td>
						<tr>
						</tr>
							<td>Cartons standards 55x35x30</td>
							<td><SELECT name="cartons_standard_neuf_occas" id ="cartons_standard_neuf_occas">
								<OPTION  value="">Sélectionner neuf ou d'occasion</OPTION>
								<OPTION  value="Neuf">Neuf</OPTION>
								<OPTION  value="Occasion">Occasion</OPTION></SELECT></td>
							<td><input type="text" name="cartons_standard_nombre" size="5" maxlength="5"></td>
						<tr>
						</tr>
							<td>Penderies carton (50cm large)</td>
							<td><SELECT name="penderie_neuf_occas" id ="penderie_neuf_occas">
								<OPTION  value="">Sélectionner neuf ou d'occasion</OPTION>
								<OPTION  value="Neuf">Neuf</OPTION>
								<OPTION  value="Occasion">Occasion</OPTION></SELECT></td>
							<td><input type="text" name="penderie_nombre" size="5" maxlength="5"></td>
						<tr>
						</tr>
							<td>Housses 90x200</td>
							<td><SELECT name="housse_neuf_occas" id ="housse_neuf_occas">
								<OPTION  value="">Sélectionner neuf ou d'occasion</OPTION>
								<OPTION  value="Neuf">Neuf</OPTION>
								<OPTION  value="Occasion">Occasion</OPTION></SELECT></td>
							<td><input type="text" name="housse_nombre" size="5" maxlength="5"></td>
						<tr>
						</tr>
							<td>Housses 180x200</td>
							<td><SELECT name="housse_180_neuf_occas" id ="housse_180_neuf_occas">
								<OPTION  value="">Sélectionner neuf ou d'occasion</OPTION>
								<OPTION  value="Neuf">Neuf</OPTION>
								<OPTION  value="Occasion">Occasion</OPTION></SELECT></td>
							<td><input type="text" name="housse_180_nombre" size="5" maxlength="5"></td>
						<tr>
						</tr>
							<td>Cartons à verres (100 verres)</td>
							<td><SELECT name="cartons_verre_neuf_occas" id ="cartons_verre_neuf_occas">
								<OPTION  value="">Sélectionner neuf ou d'occasion</OPTION>
								<OPTION  value="Neuf">Neuf</OPTION>
								<OPTION  value="Occasion">Occasion</OPTION></SELECT></td>
							<td><input type="text" name="cartons_verre_nombre" size="5" maxlength="5"></td>
						<tr>
						</tr>
							<td>Cartons à assiettes (24 assiettes)</td>
							<td><SELECT name="cartons_assiette_neuf_occas" id ="cartons_assiette_neuf_occas">
								<OPTION  value="">Sélectionner neuf ou d'occasion</OPTION>
								<OPTION  value="Neuf">Neuf</OPTION>
								<OPTION  value="Occasion">Occasion</OPTION></SELECT></td>
							<td><input type="text" name="cartons_assiette_nombre" size="5" maxlength="5"></td>
						<tr>
						</tr>
							<td>Rouleau de scotch (15 cartons environ)</td>
							<td>Neuf</td>
							<td><input type="text" name="rouleau_scotch_nombre" size="5" maxlength="5"></td>
						<tr>
						</tr>
							<td>Film étirable (500m)</td>
							<td><SELECT name="film_neuf_occas" id ="film_neuf_occas">
								<OPTION  value="">Sélectionner neuf ou d'occasion</OPTION>
								<OPTION  value="Neuf">Neuf</OPTION>
								<OPTION  value="Occasion">Occasion</OPTION></SELECT></td>
							<td><input type="text" name="film_nombre" size="5" maxlength="5"></td>
						<tr>
						</tr>
							<td>Papier bulles (100m)</td>
							<td>Neuf</td>
							<td><input type="text" name="papier_nombre" size="5" maxlength="5"></td>
					</table>
				</table>
			</table>
		</fieldset><fieldset>
			<table>
				<legend><h2>Votre volume</h2></legend>
				<p>Connaissez-vous le volume total de votre mobilier ?</p>
				<td>Oui, le volume de mon déménagement est de: </td><td><input type="volume" id="volume" name="volume" size="12" maxlength="10" placeholder="Exemple: 25.5">m&#179;</td>
				<tr>
				</tr>
				<td>Non, vous pouvez donc utiliser notre</td><td><a href="#" class="popup-light" data-popup-class="popup-block5" data-popup-width="900px" data-popup-top="5%"><input type="button" id="cubeur" name="cubeur" size="25" maxlength="30" value="Cubeur"></a></td>
			</table>
		</fieldset>
		<fieldset>
			<table>
				<div id="info">
					Objets particuliers en poids, taille, valeur, ou nécessitant un démontage.
				</div>
				<legend><h2>Objet particulier</h2></legend>
				<textarea type="text" name="msg" id="msg" COLS="65" ROWS="5" placeholder="Entrez ici votre commentaire:"></textarea>
			</table>
		</fieldset>
		<fieldset>
			<table>
				<legend><h2>Déclaration de valeur du mobilier</h2></legend>
				<p>Sélectionner la valeur globale de votre mobilier.</p>
				<tr>
				<td><input type="radio" id="valeur" name="valeur" value="Inferieur à 10000€"></td><td>Inferieure à 10000€</td><td><input type="radio" id="valeur" name="valeur"value="Inferieur à 20000€"></td><td>Inferieure à 20000€</td><td><input type="radio" id="valeur" name="valeur" value="Inferieur à 30000€"></td><td>Inferieure à 30000€</td><td><input type="radio" id="valeur" name="valeur"value="supérieur à 40000€"></td><td>Inferieure à 40000€</td><td><input type="radio" id="valeur" name="valeur" value="Supérieur à 10000€"></td><td>Supérieure à 40000€</td>
				</tr>
			</table>
			<br></br>
			<table>
				<div id="info">
					Avez-vous des objets dont la valeur individuelle est supérieure à 1500€
				</div>
				<tr>
					<td colspan="3" style="font-weight : bold;"><span style="margin-right:82px;">Vétusté:</span><span style="margin-right:33px;"> Nom de l'objet:</span> Valeur de l'objet:</td>
				</tr>
				<tr>
					<td colspan="3"><div id="frm" ></div></td>
					<td><input  type="hidden" value="javascript:i;" name="cmpvetuste" id="cmpvetuste" size="15"></td>
					<td><input  type="hidden" value="javascript:i;" name="cmpobjet" id="cmpobjet" size="15"></td>
					<td><input  type="hidden" value="javascript:i;" name="cmpvaleur" id="cmpvaleur" size="15"></td>
				</tr>
				<tr>
					<td><input type='button' id='ajIn' value=' ajouter ' onClick='addinput()' /></td>
				</tr>
			</table>
		</fieldset>
		<br>
		<table>
			<tr>
				<td><input type="checkbox" id="condition_general" name="condition_general" value="condition_general">J'accepte les</td><td><a href="./index.php?page=condition_general" target="_blank"><u>Condition générale de vente.</u></a></td>
			</tr>
		</table>
		<center><a id="input_pro" href="#"><input id="input_pro2" type="submit" name="Submit" value="Terminer" onclick="javascript: return validation(this.form)"></a></center>
		<tr>
		</tr>
</div>
</form>

	<section class="popup-block">
		<div id="scroller">
			<h2 align="center" style="border:3px solid black;">Meuble vide</h2>
			<table style="border:3px solid black;border-collapse: collapse;">
				<td style="border-right:3px solid black;"><h3>Notre service</h3></td>
				<td><h3>Travaux à votre charge</h3></td>
				<tr>
					<td style="border-right:3px solid black;"><p>-Protection du mobilier sous couvertures et sous bulless pour les plus fragiles</p></td>
					<td><p>-Emballage complet effectué et transporté par vous-même</p></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Démontage et remontage du mobilier non fixé au mur</p></td>
					<td><p>-Décrochage des objets fixés aux murs, planchers et plafonds</p></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Protection de la literie sous housses</p></td>
					<td><p>-Débranchement et calage des appareils électroménagers et électriques le nécessitant</p></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Manutention et transport de vos meubles dans camion capitonné</p></td>
					<td></td>
				</tr>
			</table>
		</div>
   </section>
	<section class="popup-block2">
		<div id="scroller">
			<h2 align="center" style="border:3px solid black;">Tout emballé</h2>
			<table style="border:3px solid black;border-collapse: collapse;">
				<td style="border-right:3px solid black;"><h3>Notre service</h3></td>
				<td><h3>Travaux à votre charge</h3></td>
				<tr>
					<td style="border-right:3px solid black;"> <p>-Protection de la literie sous housses</p></td>
					<td><p>-Emballage complet effectué et transporté par vous-même</p></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Protection du mobilier sous couvertures et sous bulless pour les plus fragiles</p></td>
					<td><p>-Décrochage des objets fixés aux murs, planchers et plafonds</p></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Démontage et remontage du mobilier non fixé au mur</p></td>
					<td><p>-Débranchement et calage des appareils électroménagers et électriques le nécessitant</p></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Manutention et transport de vos meubles et carton dans camion capitonné</p></td>
					<td></td>
				</tr>
			</table>
		</div>
    </section>
	<section class="popup-block3">
		<div id="scroller">
			<h2 align="center" style="border:3px solid black;">Classique</h2>
			<table style="border:3px solid black;border-collapse: collapse;">
				<td style="border-right:3px solid black;"><h3>Notre service</h3></td>
				<td><h3>Travaux à votre charge</h3></td>
				<tr>
					<td style="border-right:3px solid black;"><p>-Emballage des verres dans cartons spéciaux</p></td>
					<td><p>-Emballage et déballage du linge et objets non fragiles dans des cartons mis à votre disposition</p></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Emballage des assiettes dans cartons spéciaux</p></td>
					<td><p>-Décrochage des objets fixés aux murs, planchers et plafonds</p></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Emballage du reste de la vaisselle et des bibelots sous caisses de protections</p></td>
					<td><p>-Débranchement et calage des appareils électroménagers et électriques le nécessitant</p></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Mise en penderies portables des vêtements sur cintres</p></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Emballage des tableaux et miroirs sous cartons spéciaux</p></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"> <p>-Protection du mobilier sous couvertures et sous bulless pour les plus fragiles</p></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Démontage et remontage du mobilier non fixé au mur</p></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Protection de la literie sous housses</p></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Manutention et transport de vos meubles dans camion capitonné</p></td>
					<td></td>
				</tr>
			</table>
		</div>
    </section>
	<section class="popup-block4">
		<div id="scroller">
			<h2 align="center" style="border:3px solid black;">Top</h2>
			<table style="border:3px solid black;border-collapse: collapse;">
				<td style="border-right:3px solid black;"><h3>Notre service</h3></td>
				<td><h3>Travaux à votre charge</h3></td>
				<tr>
					<td style="border-right:3px solid black;"><p>Emballage du linge et divers non fragile en cartons</p></td>
					<td><p>-Décrochage des objets fixés aux murs, planchers et plafonds</p></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Emballage des verres dans cartons spéciaux</p></td>
					<td><p>-Débranchement et calage des appareils électroménagers et électriques le nécessitant</p></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Emballage des assiettes dans cartons spéciaux</p></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Emballage du reste de la vaisselle et des bibelots sous caisses de protections</p></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Mise en penderies portables des vêtements sur cintres</p></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Emballage des tableaux et miroirs sous cartons spéciaux</p></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"> <p>-Protection du mobilier sous couvertures et sous bulles pour les plus fragiles</p></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Démontage et remontage du mobilier non fixé au mur</p></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Protection de la literie sous housses</p></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right:3px solid black;"><p>-Manutention et transport de vos meubles dans camion capitonné</p></td>
					<td></td>
				</tr>
			</table>
		</div>
    </section>
	<section class="popup-block6">
			<h3>Type de logement arrivée/départ</h3>
			<p>Il est important de savoir s'il s'agit d'une maison, appartement, péniche etc</p>
	</section>
	<section class="popup-block7">
			<h3>Etage arrivée/départ</h3>
			<p>Nombre d'étages entre le stationnement du camion et l'Entreze de votre logement.</p>
	</section>
	<section class="popup-block8">
			<h3>Ascenceur arrivée/départ</h3>
			<p>Préciser la taille de l'ascenceur, afin d'évaluer le besoin d'un monte meubles.</p>
   </section>
	<section class="popup-block9">
			<h3>Stationnement arrivée/départ</h3>
			<p>Le dépôt d'une demande d'autorisation pour stationner nos vehicules <u>sur la voie publique</u> est nécessaire auprès de votre commissariat de quartier, ou mairie.<br>
				En cas de copropriété, il serait très utile de prévenir votre gardien d'immeuble et le voisinage de la date de votre déménagement et surtout de réserver une place de stationnement dans l'axe de votre accès principal.</p>
	</section>
	<section class="popup-block10">
			<h3>Organisée</h3>
			<p>à sélectionner si les dates sont flexibles</p>
   </section>
	<section class="popup-block11">
			<h3>Spéciale</h3>
			<p>à sélectionner si les dates sont déjà bloquées au jour près.</p>
	</section>
	<section class="popup-block12">
			<h3>Accès</h3>
			<p>L'accès est primordial pour nos camions, en cas de dificulté d'accès inscrire "non" dans le champ correspondant.</p>
	</section>
	<section class="popup-block13">
		<div id="scroller">
			<p><?php include 'pages/debarras.php';?></p>
		</div>
    </section>
	<section class="popup-block5">
		<div id="scroller">
			<p><?php include 'pages/cubeur.php'; ?></p>
		</div>
    </section>
	<p style="margin-bottom:0px;">*Champs obligatoires.</p><br>