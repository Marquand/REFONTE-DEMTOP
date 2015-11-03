<?php
	$civilité = $_POST["civilité"];
	$nom = htmlentities($_POST['nom']);
	$prenom = htmlentities($_POST['prenom']);
	$telephone1 = $_POST["telephone1"];
	if (isset($_POST["telephone2"])) {
		$telephone2 = $_POST["telephone2"];
	}
	else
	{
		$telephone2 = "";
	}
	$mail = htmlentities($_POST['mail']);
	$Date = $_POST["Date"];
	$Date2 = $_POST["Date2"];
	$Date3 = $_POST["Date3"];
	$adresse_départ = htmlentities($_POST['adresse_départ']);
	$adresse_arrivée = htmlentities($_POST['adresse_arrivée']);
	$ville_départ = htmlentities($_POST['ville_départ']);
	$ville_arrivée = htmlentities($_POST['ville_arrivée']);
	$code_postal_départ = $_POST["code_postal_départ"];
	$code_postal_arrivée = $_POST["code_postal_arrivée"];
	$type_logement_départ = htmlentities($_POST['type_logement_départ']);
	$type_logement_arrivée = htmlentities($_POST['type_logement_arrivée']);
	$etage_départ = htmlentities($_POST['etage_départ']);
	$etage_arrivée = htmlentities($_POST['etage_arrivée']);
	$ascenceur_départ = $_POST["ascenceur_départ"];
	$ascenceur_arrivée = $_POST["ascenceur_arrivée"];
	$stationnement_arrivée = htmlentities($_POST['stationnement_arrivée']);
	$stationnement_départ = htmlentities($_POST['stationnement_départ']);
	$msg = htmlentities($_POST['msg']);
	$msg2 = htmlentities($_POST['msg2']);
	$adresse = htmlentities($_POST['adresse']);
	$code_postal= $_POST["code_postal"];
	$ville = htmlentities($_POST['ville']);	
	$accès_départ = htmlentities($_POST['accès_départ']);
	$accès_arrivée = htmlentities($_POST['accès_arrivée']);	
if (isset($_POST["meuble_vides"])) {
	$meuble_vides = $_POST["meuble_vides"];
}
else
{
	$meuble_vides = "";
}
if (isset($_POST["tout_emballe"])) {
	$tout_emballe = $_POST["tout_emballe"];
}
else
{
	$tout_emballe = "";
}
if (isset($_POST["classique"])) {
	$classique = $_POST["classique"];
}	
else
{
	$classique = "";
}
if (isset($_POST["Top"])) {
	$Top = $_POST["Top"];
}	
else
if (isset($_POST["Top"])) {
	$Top = $_POST["Top"];
}	
else
{
	$Top = "";
}
if (isset($_POST["debarras"])) {
	$debarras = $_POST["debarras"];
}	
else
{
	$debarras = "";
}
if (isset($_POST["location"])) {
	$location = $_POST["location"];
}	
if (isset($_POST["personnel_manutention"])) {
	$personnel_manutention = $_POST["personnel_manutention"];
}	
if (isset($_POST["emballage_mobilier"])) {
	$emballage_mobilier = $_POST["emballage_mobilier"];
}	
if (isset($_POST["demontage_et_remontage"])) {
	$demontage_et_remontage = $_POST["demontage_et_remontage"];
}
if (isset($_POST["emballage_vaisselle"])) {
	$emballage_vaisselle = $_POST["emballage_vaisselle"];
}	
if (isset($_POST["emballage_tableaux"])) {
	$emballage_tableaux = $_POST["emballage_tableaux"];
}	
if (isset($_POST["protection"])) {
	$protection = $_POST["protection"];
}	
if (isset($_POST["vente_housse"])) {
	$vente_housse = $_POST["vente_housse"];
}	
if (isset($_POST["vente_carton"])) {
	$vente_carton = $_POST["vente_carton"];
}	
if (isset($_POST["vente_penderie"])) {
	$vente_penderie = $_POST["vente_penderie"];
}	
if (isset($_POST["vente_carton_verres"])) {
	$vente_carton_verres = $_POST["vente_carton_verres"];
}	
if (isset($_POST["vente_carton_assiettes"])) {
	$vente_carton_assiettes = $_POST["vente_carton_assiettes"];
}	
if (isset($_POST["vente_carton_tableaux"])) {
	$vente_carton_tableaux = $_POST["vente_carton_tableaux"];
}	
	$volume = $_POST["volume"];
if (isset($_POST["valeur"])) {
	$valeur = $_POST["valeur"];
}
if (isset($_POST["cartons_standard_neuf_occas"])) {
	$cartons_standard_neuf_occas = $_POST["cartons_standard_neuf_occas"];
}
if (isset($_POST["cartons_standard_nombre"])) {
	$cartons_standard_nombre = $_POST["cartons_standard_nombre"];
}
if (isset($_POST["penderie_neuf_occas"])) {
	$penderie_neuf_occas = $_POST["penderie_neuf_occas"];
}
if (isset($_POST["penderie_nombre"])) {
	$penderie_nombre = $_POST["penderie_nombre"];
}
if (isset($_POST["housse_neuf_occas"])) {
	$housse_neuf_occas = $_POST["housse_neuf_occas"];
}
if (isset($_POST["housse_nombre"])) {
	$housse_nombre = $_POST["housse_nombre"];
}		
if (isset($_POST["housse_180_neuf_occas"])) {
	$housse_180_neuf_occas = $_POST["housse_180_neuf_occas"];
}
if (isset($_POST["housse_180_nombre"])) {
	$housse_180_nombre = $_POST["housse_180_nombre"];
}
if (isset($_POST["cartons_verre_neuf_occas"])) {
	$cartons_verre_neuf_occas = $_POST["cartons_verre_neuf_occas"];
}
if (isset($_POST["cartons_verre_nombre"])) {
	$cartons_verre_nombre = $_POST["cartons_verre_nombre"];
}
if (isset($_POST["cartons_assiette_neuf_occas"])) {
	$cartons_assiette_neuf_occas = $_POST["cartons_assiette_neuf_occas"];
}
if (isset($_POST["cartons_assiette_nombre"])) {
	$cartons_assiette_nombre = $_POST["cartons_assiette_nombre"];
}
if (isset($_POST["rouleau_scotch_nombre"])) {
	$rouleau_scotch_nombre = $_POST["rouleau_scotch_nombre"];
}
if (isset($_POST["film_neuf_occas"])) {
	$film_neuf_occas = $_POST["film_neuf_occas"];
}
if (isset($_POST["film_nombre"])) {
	$film_nombre = $_POST["film_nombre"];
}
if (isset($_POST["papier_nombre"])) {
	$papier_nombre = $_POST["papier_nombre"];
}

	
	
	if (empty($civilité))
	{
		echo 'veuillez completer le champs Civilité
		<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
	}else
		if (empty($nom))
		{
			echo 'veuillez completer le champs Nom
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($prenom))
		{
			echo 'veuillez completer le champs Prénom
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($telephone1))
		{
			echo 'veuillez completer le champs Téléphone 1
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($mail))
		{
			echo 'veuillez completer le champs Mail
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($adresse_départ))
		{
			echo 'veuillez completer le champs Adresse de départ
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($adresse_arrivée))
		{
			echo 'veuillez completer le champs Adresse arrivée
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($ville_départ))
		{
			echo 'veuillez completer le champs Ville de départ
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($ville_arrivée))
		{
			echo 'veuillez completer le champs Ville arrivée
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($code_postal_départ))
		{
			echo 'veuillez completer le champs Code postal de départ
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($code_postal_arrivée))
		{
			echo 'veuillez completer le champs Code postal arrivée
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($type_logement_départ))
		{
			echo 'veuillez completer le champs Type logement départ
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($etage_départ))
		{
			echo 'veuillez completer le champs Etage départ
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($ascenceur_départ))
		{
			echo 'veuillez completer le champs Ascenceur départ
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($stationnement_départ))
		{
			echo 'veuillez completer le champs Stationnement départ
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($type_logement_arrivée))
		{
			echo 'veuillez completer le champs Type logement arrivée
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($etage_arrivée))
		{
			echo 'veuillez completer le champs Etage arrivée
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($ascenceur_arrivée))
		{
			echo 'veuillez completer le champs Ascenceur arrivée
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($stationnement_arrivée))
		{
			echo 'veuillez completer le champs Stationnement arrivée
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if ((empty($Date2) or empty($Date3)) && empty($Date))
		{
			echo 'veuillez completer un champs Date
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php	
		
	}else
		if (empty($meuble_vides) && empty($tout_emballe) && empty($classique)&& empty($Top)&& empty($location)&& empty($personnel_manutention)&& empty($emballage_mobilier)&& empty($demontage_et_remontage)&& empty($emballage_vaisselle)&& empty($emballage_tableaux)&& empty($protection)&& empty($vente_housse)&& empty($vente_carton)&& empty($vente_penderie)&& empty($vente_carton_verres)&& empty($vente_carton_assiettes)&& empty($vente_carton_tableaux)&& empty($debarras))
		{
			echo 'veuillez choisir une formule
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty($volume)){
			echo 'veuillez completer un volume
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty ($valeur)){
			echo 'veuillez choisir une valeur de votre mobilier
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty ($ville)){
			echo 'veuillez completer le champ ville
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
		
	}else
		if (empty ($code_postal)){
			echo 'veuillez completer le champ code postal
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
	}else
		if (empty ($accès_arrivée)){
			echo 'veuillez completer le champ accès arrivée
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
	}else
		if (empty ($accès_départ)){
			echo 'veuillez completer le champ accès au départ
			<a href="/index.php?page=devis">Réessayer</a>';?><br><?php
	}else{
		
		setlocale (LC_TIME, 'fr_FR.utf8','fra');
	if ($_POST["Date"] != ""){
		$Date=(strftime("%A %d %B %Y", $Date));
	}
	if ($_POST["Date2"]!= ""){
		$Date2=(strftime("%A %d %B %Y", $Date2));
	}
	if ($_POST["Date3"] != ""){
		$Date3=(strftime("%A %d %B %Y", $Date3)); 
	}
?>
<style>
	dd{
	padding-left:50px; 	
	}
	#client{
		margin-left:500px;
		margin-top:-150px;
		border:1px black solid;

	}
	#cadreclient{
		border-bottom:1px black solid;
	}
	#date{
		border:1px black solid;
		margin-left:500px;
		margin-right:70px;
	}
	#devis{
		margin-bottom:-40px;
	}
	#chargement{
		border:1px black solid;
	}
	#date2{
		border-right:1px black solid;
		border-bottom:1px black solid;
		margin-top:20px;
	}
	#cadrechargement{
		border-bottom:1px black solid;
		padding:0px 54px;
	}
	#cadrelivraison{
		border-bottom:1px black solid;
		border-left:1px black solid;
		padding:0px 53px;
	}
	#livraison{
		border-right:1px black solid;
		border-top:1px black solid;
		border-bottom:1px black solid;
		margin-left:312px;
	}

</style>
<form method = "post" name="Devis" action ="pages/mail.php">
	<input type="hidden" name="nom" value="<?php echo$nom;?>"></input>
	<input type="hidden" name="civilité" value="<?php echo$civilité;?>"></input>
	<input type="hidden" name="prenom" value="<?php echo$prenom;?>"></input>
	<input type="hidden" name="telephone1" value="<?php echo$telephone1;?>"></input>
	<input type="hidden" name="telephone2" value="<?php echo$telephone2;?>"></input>
	<input type="hidden" name="mail" value="<?php echo$mail;?>"></input>
	<input type="hidden" name="Date" value="<?php echo$Date;?>"></input>
	<input type="hidden" name="Date2" value="<?php echo$Date2;?>"></input>
	<input type="hidden" name="Date3" value="<?php echo$Date3;?>"></input>
	<input type="hidden" name="adresse_départ" value="<?php echo$adresse_départ;?>"></input>
	<input type="hidden" name="adresse_arrivée" value="<?php echo$adresse_arrivée;?>"></input>
	<input type="hidden" name="ville_départ" value="<?php echo$ville_départ;?>"></input>
	<input type="hidden" name="ville_arrivée" value="<?php echo$ville_arrivée;?>"></input>
	<input type="hidden" name="code_postal_départ" value="<?php echo$code_postal_départ;?>"></input>
	<input type="hidden" name="code_postal_arrivée" value="<?php echo$code_postal_arrivée;?>"></input>
	<input type="hidden" name="type_logement_départ" value="<?php echo$type_logement_départ;?>"></input>
	<input type="hidden" name="type_logement_arrivée" value="<?php echo$type_logement_arrivée;?>"></input>
	<input type="hidden" name="etage_départ" value="<?php echo$etage_départ;?>"></input>
	<input type="hidden" name="etage_arrivée" value="<?php echo$etage_arrivée;?>"></input>
	<input type="hidden" name="ascenceur_départ" value="<?php echo$ascenceur_départ;?>"></input>
	<input type="hidden" name="ascenceur_arrivée" value="<?php echo$ascenceur_arrivée;?>"></input>
	<input type="hidden" name="stationnement_arrivée" value="<?php echo$stationnement_arrivée;?>"></input>
	<input type="hidden" name="stationnement_départ" value="<?php echo$stationnement_départ;?>"></input>
	<input type="hidden" name="msg" value="<?php echo$msg;?>"></input>
	<input type="hidden" name="msg2" value="<?php echo$msg2;?>"></input>
	<input type="hidden" name="msg3" value="<?php echo$msg3;?>"></input>
	<input type="hidden" name="adresse" value="<?php echo$adresse;?>"></input>
	<input type="hidden" name="ville" value="<?php echo$ville;?>"></input>
	<input type="hidden" name="code_postal" value="<?php echo$code_postal;?>"></input>
	<input type="hidden" name="accès_arrivée" value="<?php echo$accès_arrivée;?>"></input>
	<input type="hidden" name="accès_départ" value="<?php echo$accès_départ;?>"></input>
	<input type="hidden" name="cmpvetuste" value="<?php echo$_POST['cmpvetuste'];?>"></input>
	<input type="hidden" name="cmpvaleur" value="<?php echo$_POST['cmpvaleur'];?>"></input>
	<input type="hidden" name="cmpobjet" value="<?php echo$_POST['cmpobjet'];?>"></input>
<?php
    //pour recuperer le contenu des champs envoyés par post
	if (isset($_POST['cmpvetuste'])){
		for($n=1; $n<= intval($_POST['cmpvetuste']) ; $n++)
		{
			if (isset($_POST['vetuste'.$n])){
				?><input type="hidden" name="<?php echo "vetuste".$n;?>" value="<?php echo $_POST['vetuste'.$n];?>" ></input><?php
			}
		}
	}
	if (isset($_POST['cmpobjet'])){
		for($n=1; $n<= intval($_POST['cmpobjet']) ; $n++)
		{
			if (isset($_POST['objet'.$n])){
				?><input type="hidden" name="<?php echo "objet".$n;?>" value="<?php echo $_POST['objet'.$n];?>" ></input><?php
			}
		}
	}
	if (isset($_POST['cmpvaleur'])){
		for($n=1; $n<= intval($_POST['cmpvaleur']) ; $n++)
		{
			if (isset($_POST['valeurobjet'.$n])){
				?><input type="hidden" name="<?php echo "valeurobjet".$n;?>" value="<?php echo $_POST['valeurobjet'.$n];?>" ></input><?php
			}
		}
	}	
		if ($_POST['cmpvaleur'] !=""){
			$total = 0;
			for($n=1; $n<= intval($_POST['cmpvaleur']) ; $n++) {
					$total = $_POST['valeurobjet'.$n] + $total;
			}
		}
	 //var_dump($_POST);
?>
	<input type="hidden" name="total" value="<?php echo$total;?>"></input>
	<?php if (isset($_POST["debarras"])) {?>
	<input type="hidden" name="debarras" value="<?php echo$debarras;?>"></input><?php } ?>
	<?php if (isset($_POST["meuble_vides"])) {?>
	<input type="hidden" name="meuble_vides" value="<?php echo$meuble_vides;?>"></input><?php } ?>
	<?php if (isset($_POST["tout_emballe"])) {?>
	<input type="hidden" name="tout_emballe" value="<?php echo$tout_emballe;?>"></input><?php } ?>
	<?php if (isset($_POST["classique"])) {?>
	<input type="hidden" name="classique" value="<?php echo$classique;?>"></input><?php } ?>
	<?php if (isset($_POST["Top"])) {?>
	<input type="hidden" name="Top" value="<?php echo$Top;?>"></input><?php } ?>
	<?php if (isset($_POST["location"])) {?>
	<input type="hidden" name="location" value="<?php echo$location;?>"></input><?php } ?>
	<?php if (isset($_POST["personnel_manutention"])) {?> 
	<input type="hidden" name="personnel_manutention" value="<?php echo$personnel_manutention;?>"></input><?php } ?>
	<?php if (isset($_POST["emballage_mobilier"])) {?>
	<input type="hidden" name="emballage_mobilier" value="<?php echo$emballage_mobilier;?>"></input><?php } ?>
	<?php if (isset($_POST["demontage_et_remontage"])) {?>
	<input type="hidden" name="demontage_et_remontage" value="<?php echo$demontage_et_remontage;?>"></input><?php } ?>
	<?php if (isset($_POST["emballage_vaisselle"])) {?>
	<input type="hidden" name="emballage_vaisselle" value="<?php echo$emballage_vaisselle;?>"></input><?php }?>
	<?php if (isset($_POST["emballage_tableaux"])) {?>
	<input type="hidden" name="emballage_tableaux" value="<?php echo$emballage_tableaux;?>"></input><?php }?>
	<?php if (isset($_POST["protection"])) {?>
	<input type="hidden" name="protection" value="<?php echo$protection;?>"></input><?php }?>
	<?php if (isset($_POST["vente_housse"])) {?>
	<input type="hidden" name="vente_housse" value="<?php echo$vente_housse;?>"></input><?php }?>
	<?php if (isset($_POST["vente_carton"])) {?>
	<input type="hidden" name="vente_carton" value="<?php echo$vente_carton;?>"></input><?php }?>
	<?php if (isset($_POST["vente_penderie"])) {?>
	<input type="hidden" name="vente_penderie" value="<?php echo$vente_penderie;?>"></input><?php }?>
	<?php if (isset($_POST["vente_carton_verres"])) {?>
	<input type="hidden" name="vente_carton_verres" value="<?php echo$vente_carton_verres;?>"></input><?php }?>
	<?php if (isset($_POST["vente_carton_assiettes"])) {?>
	<input type="hidden" name="vente_carton_assiettes" value="<?php echo$vente_carton_assiettes;?>"></input><?php }?>
	<?php if (isset($_POST["vente_carton_tableaux"])) {?>
	<input type="hidden" name="vente_carton_tableaux" value="<?php echo$vente_carton_tableaux;?>"></input><?php }?>
	<input type="hidden" name="volume" value="<?php echo$volume;?>"></input>
	<?php if (isset($_POST["valeur"])) {?>
	<input type="hidden" name="valeur" value="<?php echo$valeur;?>"></input><?php }?>
	<?php if (isset($_POST["cartons_standard_neuf_occas"])) {?>
	<input type="hidden" name="cartons_standard_neuf_occas" value="<?php echo$cartons_standard_neuf_occas;?>"></input><?php } ?>
		<?php if (isset($_POST["cartons_standard_nombre"])) {?>
	<input type="hidden" name="cartons_standard_nombre" value="<?php echo$cartons_standard_nombre;?>"></input><?php } ?>
		<?php if (isset($_POST["penderie_neuf_occas"])) {?>
	<input type="hidden" name="penderie_neuf_occas" value="<?php echo$penderie_neuf_occas;?>"></input><?php } ?>
		<?php if (isset($_POST["penderie_nombre"])) {?>
	<input type="hidden" name="penderie_nombre" value="<?php echo$penderie_nombre;?>"></input><?php } ?>
		<?php if (isset($_POST["housse_neuf_occas"])) {?>
	<input type="hidden" name="housse_neuf_occas" value="<?php echo$housse_neuf_occas;?>"></input><?php } ?>
		<?php if (isset($_POST["housse_nombre"])) {?>
	<input type="hidden" name="housse_nombre" value="<?php echo$housse_nombre;?>"></input><?php } ?>
		<?php if (isset($_POST["housse_180_neuf_occas"])) {?>
	<input type="hidden" name="housse_180_neuf_occas" value="<?php echo$housse_180_neuf_occas;?>"></input><?php } ?>
		<?php if (isset($_POST["housse_180_nombre"])) {?>
	<input type="hidden" name="housse_180_nombre" value="<?php echo$housse_180_nombre;?>"></input><?php } ?>
		<?php if (isset($_POST["cartons_verre_neuf_occas"])) {?>
	<input type="hidden" name="cartons_verre_neuf_occas" value="<?php echo$cartons_verre_neuf_occas;?>"></input><?php } ?>
		<?php if (isset($_POST["cartons_verre_nombre"])) {?>
	<input type="hidden" name="cartons_verre_nombre" value="<?php echo$cartons_verre_nombre;?>"></input><?php } ?>
		<?php if (isset($_POST["cartons_assiette_neuf_occas"])) {?>
	<input type="hidden" name="cartons_assiette_neuf_occas" value="<?php echo$cartons_assiette_neuf_occas;?>"></input><?php } ?>
		<?php if (isset($_POST["cartons_assiette_nombre"])) {?>
	<input type="hidden" name="cartons_assiette_nombre" value="<?php echo$cartons_assiette_nombre;?>"></input><?php } ?>
		<?php if (isset($_POST["rouleau_scotch_nombre"])) {?>
	<input type="hidden" name="rouleau_scotch_nombre" value="<?php echo$rouleau_scotch_nombre;?>"></input><?php } ?>
		<?php if (isset($_POST["film_neuf_occas"])) {?>
	<input type="hidden" name="film_neuf_occas" value="<?php echo$film_neuf_occas;?>"></input><?php } ?>
		<?php if (isset($_POST["film_nombre"])) {?>
	<input type="hidden" name="film_nombre" value="<?php echo$film_nombre;?>"></input><?php } ?>
		<?php if (isset($_POST["papier_nombre"])) {?>
	<input type="hidden" name="papier_nombre" value="<?php echo$papier_nombre;?>"></input><?php } ?>
<div style="padding-left:70px;">
<table style="margin-top:0px;">
</table>
<p align="center" style="font-size:1.2em;"><strong> Verifier vos informations avant l'envoi.</strong><p>
<table style="font-weight : bold; padding: 40px 50px;">
			<tr>
				<td>DEMTOP SARL</td>
			</tr>
			<tr>
				<td>1254 route d'yzeron</td>
			</tr>
			<tr>
				<td>69670 saint laurent de vaux</td>
			</tr>
			<tr>
				<td>04.78.45.33.24</td>
			</tr>
			<tr>
				<td>06.06.78.76.04</td>
			</tr>
		</table>
		<table style="margin-top:-150px; margin-left: 375px; border:1px black solid;" cellspacing="0px">
			<tr>
				<td style="font-weight : bold; border-bottom:1px black solid; padding: 6px 168px; width:0px;" colspan="2">Client</td>
			</tr>
			<tr>
				<td style="font-weight : bold; padding: 3px 0px; width:20px;"><span style="margin-left:10px;">Nom:</span></td><td style="width:120px;"> <?php if ((isset($_POST["civilité"])) || (isset($_POST["nom"]))) { echo $civilité ," ", $nom; } ?></td>
			</tr>
			<tr>
				<td style="font-weight : bold; padding: 3px 0px;"><span style="margin-left:10px;">Prénom:</span></td><td><?php if (isset($_POST["prenom"])) { echo $prenom; } ?></td>
			</tr>
			<tr>
				<td style="font-weight : bold; padding: 3px 0px;"><span style="margin-left:10px;">Adresse:</span></td><td><?php if (isset($_POST["adresse"])) { echo $adresse; } ?></td>
			</tr>
			<tr>
				<td style="font-weight : bold; padding: 3px 0px;"><span style="margin-left:10px;">Code postal:</span></td><td><?php if (isset($_POST["code_postal"])) { echo $code_postal; } ?></td>
			</tr>
			<tr>
				<td style="font-weight : bold; padding: 3px 0px;"><span style="margin-left:10px;">Ville:</span></td><td><?php if (isset($_POST["ville"])) { echo $ville; } ?></td>
			</tr>
			<tr>
				<td style="font-weight : bold; padding: 3px 0px;"><span style="margin-left:10px;">Téléphone:</span></td><td><?php if (isset($_POST["telephone1"])) { echo $telephone1; } ?></td>
			</tr>
			<?php if ($telephone2 != "") { ?>
			<tr>
				<td style="font-weight : bold; padding: 3px 0px;"><span style="margin-left:10px;">Téléphone 2:</span></td><td><?php if (isset($_POST["telephone2"])) { echo $telephone2; } ?></td>
			</tr>
			<?php } ?>
			<tr>
				<td style="font-weight : bold; padding: 3px 0px;"><span style="margin-left:10px;">Email:</span></td><td><?php if (isset($_POST["mail"])) { echo $mail; } ?></td>
			</tr>
		</table>
		<p style="font-weight : bold; margin-bottom:-20px; margin-left:20px;">DEVIS <?php if ($_POST["Date"] != "") { echo "Spécial"; } if (($_POST["Date2"] != "") && ($_POST["Date3"]) != "") { echo"Organisé"; } ?><br><br></p>
		
		<table cellspacing="0px" style="margin-left:375px; margin-top:-10px; border:1px solid black; padding:5px 54px;">
			<tr>
				<td style="font-weight:bold; padding:0px 135px;"><span style="margin-left:-180px;">Date: <?php echo date("d-m-Y");?></span></td>
			</tr>
		</table>
			<table style="border:2px black solid;margin-top:20px;" cellspacing="0px">
						<tr>
							<td style="font-weight:bold; width:372px; border-bottom:2px solid black; padding:6px 0px;" colspan="2"><span style="margin-left:10px;">Chargement</span></td>
							<td style="font-weight:bold; width:372px; border-bottom:2px solid black; border-left:2px solid black;" colspan="2"><span style="margin-left:10px;">Livraison</span></td>
						</tr>
						<tr>
							<td style="font-weight:bold; border-bottom:2px solid black; border-right:2px solid black; padding:0px -60px;"><span style="margin-left:70px;">Date :<?php if ((isset($_POST["Date"])) ||(isset($_POST["Date2"]))) { echo $Date,$Date2; } ?></span></td>
							<td><span style="font-weight:bold; margin-left:10px;">Adresse :</span></td>
							<td style="font-weight:bold; border-bottom:2px solid black; border-right:2px solid black; border-left:2px solid black; padding:0px -60px;"><span style="margin-left:70px;">Date : <?php if ((isset($_POST["Date"])) ||(isset($_POST["Date3"]))) { echo $Date,$Date3; } ?></span></td>
							<td><span style="font-weight:bold; margin-left:10px;">Adresse :</span></td>
						</tr>
						<tr>
							<td colspan="2"><span style="margin-left:10px;"><?php if (isset($_POST["adresse_départ"])) { echo$adresse_départ; } ?></span></td>
							<td colspan="2" style="border-left:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["adresse_arrivée"])) { echo$adresse_arrivée; } ?></span></td>
						</tr>
						<tr>
							<td colspan="2"><span style="margin-left:10px;"><?php if (isset($_POST["code_postal_départ"])) { echo$code_postal_départ, " "; } ?><?php if (isset($_POST["ville_départ"])) { echo$ville_départ; } ?></span></td>
							<td colspan="2" style="border-left:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["code_postal_arrivée"])) { echo$code_postal_arrivée, " "; } ?><?php if (isset($_POST["ville_arrivée"])) { echo $ville_arrivée; } ?></span></td>
						</tr>
						<tr>
							<td colspan="2" style="border-top:2px solid black;"><span style="margin-left:10px;"><strong>Type logement :</strong> <?php if (isset($_POST["type_logement_départ"])) { echo$type_logement_départ; } ?> </span></td>
							<td colspan="2" style="border-top:2px solid black; border-left:2px solid black;"><span style="margin-left:10px;"><strong>Type logement :</strong><?php if (isset($_POST["type_logement_arrivée"])) { echo$type_logement_arrivée; } ?></span></td>		
						</tr>
						<tr>
							<td colspan="2" style="border-top:2px solid black;"><span style="margin-left:10px;"><strong>Etage :</strong> <?php if (isset($_POST["etage_départ"])) { echo$etage_départ; } ?>  </span></td>
							<td colspan="2" style="border-top:2px solid black; border-left:2px solid black;"><span style="margin-left:10px;"><strong>Etage :</strong><?php if (isset($_POST["etage_arrivée"])) { echo$etage_arrivée; } ?></span></td>		
						</tr>
						<tr>
							<td colspan="2" style="border-top:2px solid black;"><span style="margin-left:10px;"><strong>Ascenceur :</strong> <?php if (isset($_POST["ascenceur_départ"])) { echo$ascenceur_départ; } ?>  </span></td>
							<td colspan="2" style="border-top:2px solid black; border-left:2px solid black;"><span style="margin-left:10px;"><strong>Ascenceur :</strong><?php if (isset($_POST["ascenceur_arrivée"])) { echo$ascenceur_arrivée; } ?></span></td>		
						</tr>
						<tr>
							<td colspan="2" style="border-top:2px solid black;"><span style="margin-left:10px;"><strong>Stationnement :</strong> <?php if (isset($_POST["stationnement_départ"])) { echo$stationnement_départ; } ?> </span></td>
							<td colspan="2" style="border-top:2px solid black; border-left:2px solid black;"><span style="margin-left:10px;"><strong>Stationnement :</strong><?php if (isset($_POST["stationnement_arrivée"])) { echo$stationnement_arrivée; } ?></span></td>		
						</tr>
						<tr>
							<td colspan="2" style="border-top:2px solid black;"><span style="margin-left:10px;"><strong>Accès :</strong> <?php if (isset($_POST["accès_départ"])) { echo$accès_départ; } ?> </span></td>
							<td colspan="2" style="border-top:2px solid black; border-left:2px solid black;"><span style="margin-left:10px;"><strong>Accès :</strong><?php if (isset($_POST["accès_arrivée"])) { echo$accès_arrivée; } ?></span></td>		
						</tr>
						<tr>
							<td colspan="2" style="border-top:2px solid black;"><span style="margin-left:10px;"><strong>Volume :</strong> <?php if (isset($_POST["volume"])) { echo$volume; } ?> m³ </span></td>
							<td colspan="2" style="border-top:2px solid black; border-left:2px solid black;"><span style="margin-left:10px;"><strong>Distante :</strong></span></td>		
						</tr>
						<tr>
							<td colspan="2" style="border-top:2px solid black;"><span style="margin-left:10px;"><strong>Catégorie :</strong></span></td>
							<td colspan="2" style="border-top:2px solid black; border-left:2px solid black;"><span style="margin-left:10px;"><strong>Frais (péage etc...) :</strong></span></td>		
						</tr>
						<?php if ($meuble_vides != "") { ?>
						<tr>
							<td colspan="2"><span style="margin-left:7px;"> <?php if (isset($_POST["meuble_vides"])) { echo $meuble_vides; } ?></span></td>
							<td colspan="2" style="border-left:2px solid black;"></td>
						</tr>
						<?php }
						if ($tout_emballe != "") { ?>
						<tr>
							<td colspan="2"><span style="margin-left:7px;"> <?php if (isset($_POST["tout_emballe"])) { echo $tout_emballe; } ?></span></td>
							<td colspan="2" style="border-left:2px solid black;"></td>
						</tr>
						<?php }
						if ($classique != "") { ?>
						<tr>
							<td colspan="2"><span style="margin-left:7px;"> <?php if (isset($_POST["classique"])) { echo $classique; } ?></span></td>
							<td colspan="2" style="border-left:2px solid black;"></td>
						</tr>
						<?php }
						if ($debarras != "") { ?>
							<tr>
								<td colspan="2"><span style="margin-left:7px;"> <?php if (isset($_POST["debarras"])) { echo $debarras; } ?></span></td>
								<td colspan="2" style="border-left:2px solid black;"></td>
							</tr>
						<?php }
						if ($Top != "") { ?>
						<tr>
							<td colspan="2"><span style="margin-left:7px;"> <?php if (isset($_POST["Top"])) { echo $Top; } ?></span></td>
							<td colspan="2" style="border-left:2px solid black;"></td>
						</tr>
						<?php } ?>
						<tr>
							<td colspan="4" style="border-top:2px solid black;"><strong style="margin-left:10px;">Particularités : </strong></td>
						</tr>
						<tr>
							<td colspan="4" style="width:372px;"><span style="margin-left:10px;"><?php if (isset($_POST["msg2"])) { echo$msg2; } ?></span></td>
						</tr>
			</table>
			<div style=" padding-right:-80px;">
			<table style="border:2px black solid;margin-top:20px;" cellspacing="0px">
				<tr>
					<td style="font-weight:bold; padding: 6px 299px;" colspan="2">Detail de la prestation</td>
				</tr>
				<tr>
					<td align="center" style="border-top:2px solid black; padding: 1px 90px;"><span>A la charge de l'entreprise</span></td>
					<td align="center" style="border-top:2px solid black;padding:0px 100px; border-left:2px solid black;"><span style="margin-left:10px;">A la charge du client</span></td>
				</tr>
				<tr>
					<td style="border-top:2px solid black;padding:5px; border-bottom:1px solid black; background-color:silver;"><?php if ((isset($_POST['meuble_vides'])) || (isset($_POST['tout_emballe'])) || (isset($_POST['Top'])) || (isset($_POST['classique']))) { ?><span style="margin-left:6px;"> Protection du mobilier sous couvertures </span><br><span style="margin-left:10px;">et sous bulle pour les plus fragiles</span> <?php } ?></td>
					<td style="border-left:2px solid black;padding:5px; border-bottom:1px solid black; border-top:2px solid black; background-color:silver;"><?php if((isset($_POST['meuble_vides'])) || (isset($_POST['tout_emballe'])) || (isset($_POST['classique'])) || (isset($_POST['Top']))) { ?><span style="margin-left:10px;">Débranchement et calage des appareils </span><br><span style="margin-left:10px;">électroménagers et électriques le nécessitant</span><?php } ?></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black;padding:5px;"><?php if((isset($_POST['meuble_vides'])) || (isset($_POST['tout_emballe'])) || (isset($_POST['classique'])) || (isset($_POST['Top']))) { ?><span style="margin-left:10px;">Démontage et remontage du mobilier non </span><br><span style="margin-left:10px;">fixé au mur</span><?php } ?></td>
					<td style="border-left:2px solid black; padding:5px; border-bottom:1px solid black; ;"><?php if(isset($_POST['classique'])) { ?><span style="margin-left:10px;">Emballage et déballage du linge et objets non</span><br><span style="margin-left:10px;"> fragiles dans des cartons mis à votre disposition</span><?php } ?></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black;padding:5px; background-color:silver;"><?php if((isset($_POST['meuble_vides'])) || (isset($_POST['tout_emballe'])) || (isset($_POST['classique'])) || (isset($_POST['Top']))) { ?><span style="margin-left:10px;">Protection de la literie sous housses</span><?php } ?></td>
					<td style="border-left:2px solid black; padding:5px; border-bottom:1px solid black; background-color:silver;"><?php if((isset($_POST['meuble_vides'])) || (isset($_POST['tout_emballe']))) { ?><span style="margin-left:10px;">Emballage complet effectué et transporté </span><br><span style="margin-left:10px;">par vous-même</span><?php } ?></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black;padding:5px;"><?php if((isset($_POST['meuble_vides'])) || (isset($_POST['classique'])) || (isset($_POST['Top']))) { ?><span style="margin-left:10px;">Manutention et transport de vos meubles dans  </span><br><span style="margin-left:10px;">camion capitonné</span><?php } ?></td>
					<td style="border-left:2px solid black; padding:5px;border-bottom:1px solid black;"><?php if((isset($_POST['meuble_vides'])) || (isset($_POST['tout_emballe'])) || (isset($_POST['classique'])) || (isset($_POST['Top']))) { ?><span style="margin-left:10px;">Décrochage des objets fixés aux murs,</span><br><span style="margin-left:10px;"> planchers et plafonds</span><?php } ?></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black;padding:5px;"><?php if(isset($_POST['tout_emballe'])) { ?><span style="margin-left:10px;">Manutention et transport de vos meubles </span><br><span style="margin-left:10px;">et carton dans camion capitonné</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black;padding:5px; background-color:silver;"><?php if((isset($_POST['classique'])) || (isset($_POST['Top']))) { ?><span style="margin-left:10px;">Emballage des verres dans cartons spéciaux</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black;padding:5px;"><?php if((isset($_POST['classique'])) || (isset($_POST['Top']))) { ?><span style="margin-left:10px;">Emballage des assiettes dans cartons spéciaux</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black;padding:5px; background-color:silver;"><?php if((isset($_POST['classique'])) || (isset($_POST['Top']))) { ?><span style="margin-left:10px;">Emballage du reste de la vaisselle et des bibelots  </span><br><span style="margin-left:10px;">sous caisses de protections</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black;padding:5px;"><?php if((isset($_POST['classique'])) || (isset($_POST['Top']))) { ?><span style="margin-left:10px;">Mise en penderies portables des vêtements</span><br><span style="margin-left:10px;"> sur cintres</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; padding:5px; background-color:silver;"><?php if((isset($_POST['classique'])) || (isset($_POST['Top']))) { ?><span style="margin-left:10px;">Emballage des tableaux et miroirs </span><br><span style="margin-left:10px;">sous cartons spéciaux</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black;padding:5px;"><?php if(isset($_POST['Top'])) { ?><span style="margin-left:10px;">Emballage du linge et divers non </span><br><span style="margin-left:10px;">fragile en cartons</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<?php /*
					<td style="border-bottom:1px solid black; padding:5px; background-color:silver;"><?php if(isset($_POST['location'])) { ?><span style="margin-left:10px;">Location camion capitonné(20m3) </span><br><span style="margin-left:10px;">avec chauffeur (équipé de chariots et</span><br><span style="margin-left:10px;"> sangle d'arrimage)(8h-12h/13h-17h)</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black;padding:5px;"><?php if(isset($_POST['personnel_manutention'])) { ?><span style="margin-left:10px;">Mise à disposition de personnel pour </span><br><span style="margin-left:10px;">la manutention ou l'emballage (8h-12h/13h-17h)</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; padding:5px; background-color:silver;"><?php if(isset($_POST['emballage_mobilier'])) { ?><span style="margin-left:10px;">Emballage de votre mobilier</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black;padding:5px;"><?php if(isset($_POST['demontage_et_remontage'])) { ?><span style="margin-left:10px;">Démontage et remontage de votre mobilier</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black; padding:5px; background-color:silver;"><?php if(isset($_POST['emballage_vaisselle'])) { ?><span style="margin-left:10px;">Emballage de la vaisselle et bibeblots</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid black;padding:5px;"><?php if(isset($_POST['emballage_tableaux'])) { ?><span style="margin-left:10px;">Emballage des tableaux, miroirs et glaces</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="padding:5px; background-color:silver;"><?php if(isset($_POST['protection'])) { ?><span style="margin-left:10px;">Protection de votre literie sous housses</span><?php } ?></td>
					<td style="border-left:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				*/ ?>
			</table>
			</div>
			<table style="border:2px black solid;margin-top:20px;" cellspacing="0px">
				<tr>
					<td colspan="2" style="padding:0px 375px;"></td>
				</tr>
				<tr>
					<td colspan="2"><strong style="margin-left:10px;">Objet particulier : </strong></td>
				</tr>
				<tr>
					<td colspan="2"><span style="margin-left:10px;"><?php if (isset($_POST["msg"])) { echo$msg; } ?></span></td>
				</tr>
				<tr>
					<td style=" border-top:2px solid black;"><span style="margin-left:10px;">Déclaration de valeur globale du déménagement (max 40K€)</span></td>
					<td style="border-top:2px solid black; border-left:2px solid black; text-align:right;"><span style="margin-left:10px;"><?php if (isset($_POST["valeur"])) { echo$valeur; } ?></span></td>
				</tr>
				<tr>
					<td align="center" <td colspan="2" style="border-top:2px solid black;"><strong style="margin-left:10px;">Déclaration de valeur des objets > 1500 Euros</strong></td>
				</tr>
				<tr>
					<td style="border-top:2px solid black;"><strong></strong><?php	if ((isset($_POST['cmpobjet'])) && (isset($_POST['cmpvetuste']))) { for($n=1; $n<= intval($_POST['cmpobjet']) ; $n++) { if (isset($_POST['objet'.$n])) { echo  $_POST['objet'.$n]." "; if (isset($_POST['vetuste'.$n])) { echo $_POST['vetuste'.$n]."ans <br>"; } } } } ?></td>
					<td style="border-top:2px solid black; border-left:2px solid black; text-align:right;"><?php	if (isset($_POST['cmpvaleur'])){ for($n=1; $n<= intval($_POST['cmpvaleur']) ; $n++) { if (isset($_POST['valeurobjet'.$n])) { echo $_POST['valeurobjet'.$n] ." Euros <br>"; } } } ?></td>
				</tr>
				<tr>
					<td><span style="margin-left:10px;"></span></td>
					<td style="border-left: 2px solid black;margin-left:-250px; border-top:2px solid black;text-align:right;"><strong style="text-align:left; padding-right:20px;">Total:</strong><span style=" text-align:right; margin-left:20px;"><?php echo $total;?></span></td>
				</tr>
			</table>
			<table cellspacing="0px" style="border:2px black solid; margin-top:20px;">
				<tr>
					<td style="padding:0px 123px;"></td>
					<td style="padding:0px 123px;"></td>
					<td style="padding:0px 123px;"></td>
				</tr>
				<tr>
					<td><strong>Vente de materiel </strong></td>
				</tr>
				<tr>
					<td style="border-top:2px solid black;border-right:2px solid black;"><strong>Type materiel</strong></td>
					<td style="border-top:2px solid black;border-right:2px solid black;"><strong>Etat (Neuf/Occasion)</strong></td>
					<td style="border-top:2px solid black;"><strong>Quantité</strong></td>
				</tr>
					<tr>
						<td style="border-top:2px solid black;border-right:2px solid black;">Cartons standard 55x35x30</td>
						<td style="border-top:2px solid black;border-right:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["cartons_standard_neuf_occas"])) { echo$cartons_standard_neuf_occas; } ?></span></td>
						<td style="border-top:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["cartons_standard_nombre"])) { echo$cartons_standard_nombre; } ?></span></td>
					</tr>
					<tr>
						<td style="border-top:2px solid black;border-right:2px solid black;">Penderie carton (50cm large)</td>
						<td style="border-top:2px solid black;border-right:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["penderie_neuf_occas"])) { echo$penderie_neuf_occas; } ?></span></td>
						<td style="border-top:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["penderie_nombre"])) { echo$penderie_nombre; } ?></span></td>
					</tr>
					<tr>
						<td style="border-top:2px solid black;border-right:2px solid black;">Housse 90x200</td>
						<td style="border-top:2px solid black;border-right:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["housse_neuf_occas"])) { echo$housse_neuf_occas; } ?></span></td>
						<td style="border-top:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["housse_nombre"])) { echo$housse_nombre; } ?></span></td>
					</tr>
					<tr>
						<td style="border-top:2px solid black;border-right:2px solid black;">Housse 180x200</td>
						<td style="border-top:2px solid black;border-right:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["housse_180_neuf_occas"])) { echo$housse_180_neuf_occas; } ?></span></td>
						<td style="border-top:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["housse_180_nombre"])) { echo$housse_180_nombre; } ?></span></td>
					</tr>
					<tr>
						<td style="border-top:2px solid black;border-right:2px solid black;">Cartons à verre (100 verres)</td>
						<td style="border-top:2px solid black;border-right:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["cartons_verre_neuf_occas"])) { echo$cartons_verre_neuf_occas; } ?></span></td>
						<td style="border-top:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["cartons_verre_nombre"])) { echo$cartons_verre_nombre; } ?></span></td>
					</tr>
					<tr>
						<td style="border-top:2px solid black;border-right:2px solid black;">Cartons à assiettes (24 assiettes)</td>
						<td style="border-top:2px solid black;border-right:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["cartons_assiette_neuf_occas"])) { echo$cartons_assiette_neuf_occas; } ?></span></td>
						<td style="border-top:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["cartons_assiette_nombre"])) { echo$cartons_assiette_nombre; } ?></span></td>
					</tr>
					<tr>
						<td style="border-top:2px solid black;border-right:2px solid black;">Rouleau de scotch (15 cartons environs)</td>
						<td style="border-top:2px solid black;border-right:2px solid black;"><span style="margin-left:10px;">Neuf</span></td>
						<td style="border-top:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["rouleau_scotch_nombre"])) { echo$rouleau_scotch_nombre; } ?></span></td>
					</tr>
					<tr>
						<td style="border-top:2px solid black;border-right:2px solid black;">Film étirable (500m)</td>
						<td style="border-top:2px solid black;border-right:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["film_neuf_occas"])) { echo$film_neuf_occas; } ?></span></td>
						<td style="border-top:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["film_nombre"])) { echo$film_nombre; } ?></span></td>
					</tr>
					<tr>
						<td style="border-top:2px solid black;border-right:2px solid black;">Papier bulle (100m)</td>
						<td style="border-top:2px solid black;border-right:2px solid black;"><span style="margin-left:10px;">Neuf</span></td>
						<td style="border-top:2px solid black;"><span style="margin-left:10px;"><?php if (isset($_POST["papier_nombre"])) { echo$papier_nombre; } ?></span></td>
					</tr>
			</table>
			<table cellspacing="0px" style="margin-top:40px;">
				<tr>
					<td style="padding: 0px 94px;"></td>
					<td style="padding: 0px 94px;"></td>
					<td style="padding: 0px 95px;"></td>
					<td style="padding: 0px 95px;"></td>
				</tr>
				<tr>
					<td style="border-left:2px solid black;border-bottom:2px solid black;border-top:2px solid black;"><span style="margin-left:10px;">Désignation</span></td>
					<td style="border-left:2px solid black;border-bottom:2px solid black;border-top:2px solid black;"><span style="margin-left:10px;">Prix H.T.</span></td>
					<td style="border-left:2px solid black;border-bottom:2px solid black;border-top:2px solid black;"><span style="margin-left:10px;">T.V.A. 20%</span></td>
					<td style="border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;border-top:2px solid black;"><span style="margin-left:10px;">Prix T.T.C.</span></td>
				</tr>
				<tr>
					<td style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;">Forfait</span></td>
					<td style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;">A l'étude</span></td>
					<td style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
					<td style="border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;">Assurance contractuelle</span></td>
					<td style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;">Incluse</span></td>
					<td style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
					<td style="border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;">Matériel emballage</span></td>
					<td style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;">Inclus</span></td>
					<td style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
					<td style="border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="padding:8px;border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
					<td style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
					<td style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
					<td style="border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;">Frais annexes</span></td>
					<td colspan="2" style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;">T.V.A. non applicable sur les frais</span></td>
					<td style="border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td colspan="4" style=""><span style="margin-left:10px;">Tout retard de paiement de plus de 15 jours entrainera une pénalité au taux légal en vigueur de 8,99%</span></td>
				</tr>
				<tr>
					<td><span style="margin-left:10px;"></span></td>
					<td><span style="margin-left:10px;"></span></td>
					<td style="border-top:2px solid black;border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;">Total T.T.C.</span></td>
					<td style="border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
				<tr>
					<td><span style="margin-left:10px;"></span></td>
					<td><span style="margin-left:10px;"></span></td>
					<td style="border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;">Arrhes</span></td>
					<td style="border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
				</tr>
			</table>
			<table cellspacing="0px" style="margin-top:20px;">
			<tr>
				<td style="padding:0px 189px"></td>
				<td style="padding:0px 189px"></td>
			</tr>
			<tr>
				<td style="border-right:2px solid black;border-top:2px solid black;border-left:2px solid black;"><strong style="margin-left:10px;">Signature précédée de la mention</strong></td>
				<td style="border-top:2px solid black;border-right:2px solid black;"><span style="margin-left:10px;">le client,</span></td>
			</tr>
			<tr>
				<td style="padding:8px;border-right:2px solid black;border-left:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;">"bon pour accord"</span></td>
				<td style="border-right:2px solid black;border-bottom:2px solid black;"><span style="margin-left:10px;"></span></td>
			</tr>
			</table>
</div>
	<table  style="margin-left:375px;">
		<td><p style="margin-bottom:0px;"><a id="input_pro" href="#"/><input id="input_pro2" style="display:block;" type="submit" name="Submit" value="Envoyer"></a></p></td>
	</table>
</form>

<?php
}

?>