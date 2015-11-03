<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<?php
	$civilité = $_POST["civilité"];
	$nom = $_POST["nom"];
	$prenom=$_POST["prenom"];
	$telephone1 = $_POST["telephone1"];
	if (isset($_POST["telephone2"])) {
		$telephone2 = $_POST["telephone2"];
	}
	else
	{
		$telephone2 = "";
	}
	$mail = $_POST["mail"];
	$Date = $_POST["Date"];
	$Date2 = $_POST["Date2"];
	$Date3 = $_POST["Date3"];
	$adresse_départ = $_POST["adresse_départ"];
	$adresse_arrivée = $_POST["adresse_arrivée"];
	$ville_départ = $_POST["ville_départ"];
	$ville_arrivée = $_POST["ville_arrivée"];
	$code_postal_départ = $_POST["code_postal_départ"];
	$code_postal_arrivée = $_POST["code_postal_arrivée"];
	$type_logement_départ = $_POST["type_logement_départ"];
	$type_logement_arrivée = $_POST["type_logement_arrivée"];
	$etage_départ = $_POST["etage_départ"];
	$etage_arrivée = $_POST["etage_arrivée"];
	$ascenceur_départ = $_POST["ascenceur_départ"];
	$ascenceur_arrivée = $_POST["ascenceur_arrivée"];
	$stationnement_arrivée = $_POST["stationnement_arrivée"];
	$stationnement_départ = $_POST["stationnement_départ"];
	$msg = $_POST["msg"];
	$msg2 = $_POST["msg2"];
	$msg3 = $_POST["msg3"];
	$adresse = $_POST["adresse"];
	$code_postal= $_POST["code_postal"];
	$ville= $_POST["ville"];
	$accès_départ= $_POST["accès_départ"];
	$accès_arrivée= $_POST["accès_arrivée"];
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
?>
<form action="../index.php?page=telechargement pdf" method="post" id="formvalide">
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
</form>
<?php
	$mail = $_POST["mail"];
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$civilité = $_POST["civilité"];

	
	require_once(dirname(__FILE__).'/../html2pdf.class.php');
	require_once(dirname(__FILE__).'/../pjmail.class.php');
	ob_start();

	include('./test.php');
	
	$content = ob_get_clean();
	$pdf = new HTML2PDF('P', 'A4', 'fr');
	$pdf->WriteHTML($content);
	$content_pdf = $pdf->Output('document.pdf', true);
	
	$mail = new PJmail();
	$mail->setAllFrom('noreply@demtop.com', "$civilité $nom $prenom");
	$mail->addrecipient('m.revy@demtop.com');
	$mail->addsubject("Devis de $nom $prenom");
	$mail->text = "Vous avez recu un devis.";
	$mail->addbinattachement("Devis $nom $prenom.pdf", $content_pdf);
	echo $mail->sendmail(); 
?>	
<script>setTimeout('document.getElementById(\'formvalide\').submit();', 0);</script>



