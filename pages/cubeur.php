<script type="text/javascript">
//<![CDATA[
function nom(id){
	n = document.getElementById(id);
	val = n.name;
}

	salle = "cuisine";
function montre(id) {
 	s = document.getElementById(id);
	salle = s.name;	
	
	if (salle == "cuisine") {
		document.getElementById("cuisine").style.display='block';
		document.getElementById("salon").style.display='none';
		document.getElementById("chambre").style.display='none';
		document.getElementById("bureaux").style.display='none';
		document.getElementById("cartons").style.display='none';
		document.getElementById("bain").style.display='none';
		document.getElementById("manger").style.display='none';
		document.getElementById("garage").style.display='none';
	}
	
	if (salle == "salon") {
		document.getElementById("cuisine").style.display='none';
		document.getElementById("salon").style.display='block';
		document.getElementById("chambre").style.display='none';
		document.getElementById("bureaux").style.display='none';
		document.getElementById("cartons").style.display='none';
		document.getElementById("bain").style.display='none';
		document.getElementById("manger").style.display='none';
		document.getElementById("garage").style.display='none';
	}
	
	if (salle == "chambre") {
		document.getElementById("cuisine").style.display='none';
		document.getElementById("salon").style.display='none';
		document.getElementById("chambre").style.display='block';
		document.getElementById("bureaux").style.display='none';
		document.getElementById("cartons").style.display='none';
		document.getElementById("bain").style.display='none';
		document.getElementById("manger").style.display='none';
		document.getElementById("garage").style.display='none';
	}
	
	if (salle == "bureaux") {
		document.getElementById("cuisine").style.display='none';
		document.getElementById("salon").style.display='none';
		document.getElementById("chambre").style.display='none';
		document.getElementById("bureaux").style.display='block';
		document.getElementById("cartons").style.display='none';
		document.getElementById("bain").style.display='none';
		document.getElementById("manger").style.display='none';
		document.getElementById("garage").style.display='none';
	}
	
	if (salle == "cartons") {
		document.getElementById("cuisine").style.display='none';
		document.getElementById("salon").style.display='none';
		document.getElementById("chambre").style.display='none';
		document.getElementById("bureaux").style.display='none';
		document.getElementById("cartons").style.display='block';
		document.getElementById("bain").style.display='none';
		document.getElementById("manger").style.display='none';
		document.getElementById("garage").style.display='none';
	}
	
	if (salle == "bain") {
		document.getElementById("cuisine").style.display='none';
		document.getElementById("salon").style.display='none';
		document.getElementById("chambre").style.display='none';
		document.getElementById("bureaux").style.display='none';
		document.getElementById("cartons").style.display='none';
		document.getElementById("bain").style.display='block';
		document.getElementById("manger").style.display='none';
		document.getElementById("garage").style.display='none';
	}
	
	if (salle == "manger") {
		document.getElementById("cuisine").style.display='none';
		document.getElementById("salon").style.display='none';
		document.getElementById("chambre").style.display='none';
		document.getElementById("bureaux").style.display='none';
		document.getElementById("cartons").style.display='none';
		document.getElementById("bain").style.display='none';
		document.getElementById("manger").style.display='block';
		document.getElementById("garage").style.display='none';
	}
	
	if (salle == "garage") {
		document.getElementById("cuisine").style.display='none';
		document.getElementById("salon").style.display='none';
		document.getElementById("chambre").style.display='none';
		document.getElementById("bureaux").style.display='none';
		document.getElementById("cartons").style.display='none';
		document.getElementById("bain").style.display='none';
		document.getElementById("manger").style.display='none';
		document.getElementById("garage").style.display='block';
	}
	
}
//]]>
</script>

<table style="margin-top:0px; margin-bottom:50px;"></table>
<div id="txt" style="margin-left:60px;">
	<form id="formulaire_calcul" action ="#" method="post">
			<table>
				<tr>
					<td colspan="2"><input name="cuisine" type="button" onclick="montre(this.id)" value="cuisine" id="salle_cuisine" /></td>
					<td colspan="2"><input name="salon" type="button" onclick="montre(this.id)" value="salon" id="salle_salon" /></td>
					<td colspan="2"><input name="chambre" type="button" onclick="montre(this.id)" value="chambre" id="salle_chambre" /></td>
					<td colspan="2"><input name="bureaux" type="button" onclick="montre(this.id)" value="bureaux" id="salle_bureaux" /></td>
					<td colspan="2"><input name="garage" type="button" onclick="montre(this.id)" value="garage/extérieur" id="salle_garage" /></td>
					<td colspan="2"><input name="manger" type="button" onclick="montre(this.id)" value="salle à manger" id="salle_manger" /></td>
					<td colspan="2"><input name="bain" type="button" onclick="montre(this.id)" value="salle de bain" id="salle_bain" /></td>
					<td colspan="2"><input name="cartons" type="button" onclick="montre(this.id)" value="cartons" id="salle_cartons" /></td>
				</tr>
				<tr>
					<td colspan="2"><input id="resultat_cuisine" type="text" readonly="readonly" value="0" size="4%" /></td>
					<td colspan="2"><input id="resultat_salon" type="text" readonly="readonly" value="0" size="3%" /></td>
					<td colspan="2"><input id="resultat_chambre" type="text" readonly="readonly" value="0" size="6%" /></td>
					<td colspan="2"><input id="resultat_bureaux" type="text" readonly="readonly" value="0" size="4%" /></td>
					<td colspan="2"><input id="resultat_garage" type="text" readonly="readonly" value="0" size="3%" /></td>
					<td colspan="2"><input id="resultat_manger" type="text" readonly="readonly" value="0" size="6%" /></td>
					<td colspan="2"><input id="resultat_bain" type="text" readonly="readonly" value="0" size="4%" /></td>
					<td colspan="2"><input id="resultat_cartons" type="text" readonly="readonly" value="0" size="3%" /></td>
				</tr>
			</table>
			
<?php		$rq = "SELECT * FROM cuisine;";
			$resultat = executer_requete($rq, "base"); ?>
			
			<table id='cuisine'>
			
				<?php
				while($result = mysql_fetch_array($resultat))
				 { ?>
				<tr>
					<td><label for="nb_<?php echo $result['ID'];?>"><?php echo $result["Objet"];?></label></td>
					<td><input id="plus_cuisine_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="+" name="plus_cuisine_<?php echo $result['ID'];?>" /></td>
					<td><input id="moins_cuisine_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="-" name="moins_cuisine_<?php echo $result['ID'];?>" /> : </td>
					<td><input id="resultat_cuisine_<?php echo $result['ID'];?>" type="text" readonly="readonly" value="0" size="3%" /></td>
					<td><input id="bdd_cuisine_ID_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['ID'];?>" /></td>
					<td><input id="bdd_cuisine_Objet_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['Objet'];?>" /></td>
					<td><input id="bdd_cuisine_Volume_<?php echo $result['ID'];?>" type="hidden" value="<?php echo $result['Volume'];?>" /></td>
				</tr>
				<?php } ?>
			</table>
	
	
<?php		$rq = "SELECT * FROM salon;";
			$resultat = executer_requete($rq, "base"); ?>
			
			<table id='salon' style="display:none;">
			
				<?php
				while($result = mysql_fetch_array($resultat))
				 { ?>
				<tr>
					<td><label for="nb_<?php echo $result['ID'];?>"><?php echo $result["Objet"];?></label></td>
					<td><input id="plus_salon_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="+" name="plus_salon_<?php echo $result['ID'];?>" /></td>
					<td><input id="moins_salon_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="-" name="moins_salon_<?php echo $result['ID'];?>" /> : </td>
					<td><input id="resultat_salon_<?php echo $result['ID'];?>" type="text" readonly="readonly" value="0" size="3%" /></td>
					<td><input id="bdd_salon_ID_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['ID'];?>" /></td>
					<td><input id="bdd_salon_Objet_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['Objet'];?>" /></td>
					<td><input id="bdd_salon_Volume_<?php echo $result['ID'];?>" type="hidden" value="<?php echo $result['Volume'];?>" /></td>
				</tr>
				<?php } ?>
			</table>
			
<?php		$rq = "SELECT * FROM chambre;";
			$resultat = executer_requete($rq, "base"); ?>
			
			<table id='chambre' style="display:none;">
			
				<?php
				while($result = mysql_fetch_array($resultat))
				 { ?>
				<tr>
					<td><label for="nb_<?php echo $result['ID'];?>"><?php echo $result["Objet"];?></label></td>
					<td><input id="plus_chambre_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="+" name="plus_chambre_<?php echo $result['ID'];?>" /></td>
					<td><input id="moins_chambre_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="-" name="moins_chambre_<?php echo $result['ID'];?>" /> : </td>
					<td><input id="resultat_chambre_<?php echo $result['ID'];?>" type="text" readonly="readonly" value="0" size="3%" /></td>
					<td><input id="bdd_chambre_ID_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['ID'];?>" /></td>
					<td><input id="bdd_chambre_Objet_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['Objet'];?>" /></td>
					<td><input id="bdd_chambre_Volume_<?php echo $result['ID'];?>" type="hidden" value="<?php echo $result['Volume'];?>" /></td>
				</tr>
				<?php } ?>
			</table>
			
			<?php		$rq = "SELECT * FROM bureaux;";
			$resultat = executer_requete($rq, "base"); ?>
			
			<table id='bureaux' style="display:none;">
			
				<?php
				while($result = mysql_fetch_array($resultat))
				 { ?>
				<tr>
					<td><label for="nb_<?php echo $result['ID'];?>"><?php echo $result["Objet"];?></label></td>
					<td><input id="plus_bureaux_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="+" name="plus_bureaux_<?php echo $result['ID'];?>" /></td>
					<td><input id="moins_bureaux_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="-" name="moins_bureaux_<?php echo $result['ID'];?>" /> : </td>
					<td><input id="resultat_bureaux_<?php echo $result['ID'];?>" type="text" readonly="readonly" value="0" size="3%" /></td>
					<td><input id="bdd_bureaux_ID_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['ID'];?>" /></td>
					<td><input id="bdd_bureaux_Objet_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['Objet'];?>" /></td>
					<td><input id="bdd_bureaux_Volume_<?php echo $result['ID'];?>" type="hidden" value="<?php echo $result['Volume'];?>" /></td>
				</tr>
				<?php } ?>
			</table>
			
			<?php		$rq = "SELECT * FROM cartons;";
			$resultat = executer_requete($rq, "base"); ?>
			
			<table id='cartons' style="display:none;">
			
				<?php
				while($result = mysql_fetch_array($resultat))
				 { ?>
				<tr>
					<td><label for="nb_<?php echo $result['ID'];?>"><?php echo $result["Objet"];?></label></td>
					<td><input id="plus_cartons_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="+" name="plus_cartons_<?php echo $result['ID'];?>" /></td>
					<td><input id="moins_cartons_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="-" name="moins_cartons_<?php echo $result['ID'];?>" /> : </td>
					<td><input id="resultat_cartons_<?php echo $result['ID'];?>" type="text" readonly="readonly" value="0" size="3%" /></td>
					<td><input id="bdd_cartons_ID_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['ID'];?>" /></td>
					<td><input id="bdd_cartons_Objet_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['Objet'];?>" /></td>
					<td><input id="bdd_cartons_Volume_<?php echo $result['ID'];?>" type="hidden" value="<?php echo $result['Volume'];?>" /></td>
				</tr>
				<?php } ?>
			</table>
			
			<?php		$rq = "SELECT * FROM garage;";
			$resultat = executer_requete($rq, "base"); ?>
			
			<table id='garage' style="display:none;">
			
				<?php
				while($result = mysql_fetch_array($resultat))
				 { ?>
				<tr>
					<td><label for="nb_<?php echo $result['ID'];?>"><?php echo $result["Objet"];?></label></td>
					<td><input id="plus_garage_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="+" name="plus_garage_<?php echo $result['ID'];?>" /></td>
					<td><input id="moins_garage_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="-" name="moins_garage_<?php echo $result['ID'];?>" /> : </td>
					<td><input id="resultat_garage_<?php echo $result['ID'];?>" type="text" readonly="readonly" value="0" size="3%" /></td>
					<td><input id="bdd_garage_ID_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['ID'];?>" /></td>
					<td><input id="bdd_garage_Objet_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['Objet'];?>" /></td>
					<td><input id="bdd_garage_Volume_<?php echo $result['ID'];?>" type="hidden" value="<?php echo $result['Volume'];?>" /></td>
				</tr>
				<?php } ?>
			</table>
			
			<?php		$rq = "SELECT * FROM manger;";
			$resultat = executer_requete($rq, "base"); ?>
			
			<table id='manger' style="display:none;">
			
				<?php
				while($result = mysql_fetch_array($resultat))
				 { ?>
				<tr>
					<td><label for="nb_<?php echo $result['ID'];?>"><?php echo $result["Objet"];?></label></td>
					<td><input id="plus_manger_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="+" name="plus_manger_<?php echo $result['ID'];?>" /></td>
					<td><input id="moins_manger_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="-" name="moins_manger_<?php echo $result['ID'];?>" /> : </td>
					<td><input id="resultat_manger_<?php echo $result['ID'];?>" type="text" readonly="readonly" value="0" size="3%" /></td>
					<td><input id="bdd_manger_ID_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['ID'];?>" /></td>
					<td><input id="bdd_manger_Objet_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['Objet'];?>" /></td>
					<td><input id="bdd_manger_Volume_<?php echo $result['ID'];?>" type="hidden" value="<?php echo $result['Volume'];?>" /></td>
				</tr>
				<?php } ?>
			</table>
			
			<?php		$rq = "SELECT * FROM bain;";
			$resultat = executer_requete($rq, "base"); ?>
			
			<table id='bain' style="display:none;">
			
				<?php
				while($result = mysql_fetch_array($resultat))
				 { ?>
				<tr>
					<td><label for="nb_<?php echo $result['ID'];?>"><?php echo $result["Objet"];?></label></td>
					<td><input id="plus_bain_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="+" name="plus_bain_<?php echo $result['ID'];?>" /></td>
					<td><input id="moins_bain_<?php echo $result['ID'];?>" type="submit" onclick="nom(this.id)" value="-" name="moins_bain_<?php echo $result['ID'];?>" /> : </td>
					<td><input id="resultat_bain_<?php echo $result['ID'];?>" type="text" readonly="readonly" value="0" size="3%" /></td>
					<td><input id="bdd_bain_ID_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['ID'];?>" /></td>
					<td><input id="bdd_bain_Objet_<?php echo $result['ID'];?>" type="hidden"  value="<?php echo $result['Objet'];?>" /></td>
					<td><input id="bdd_bain_Volume_<?php echo $result['ID'];?>" type="hidden" value="<?php echo $result['Volume'];?>" /></td>
				</tr>
				<?php } ?>
			</table>
	
			
			<table>
				<tr>
					<td colspan="3"><label for="Total" style="font-size: 1.5em;"><strong>Total :</strong></label></td>
					<td><input id="resultat_total" type="text" readonly="readonly" value='0'  size="10px" style="font-size: 1.2em;" /></td>
				</tr>
			</table>
					</br><center><a id="input_pro"><input id="input_pro2" type="button" onclick="document.forms.formulaire_calcul.reset()" value="Remise à zero" name="raz" /></a></center>
	</form>
</div>

<?php		$rq = "SELECT count(*) AS nb FROM cuisine;";
			$resultat = executer_requete($rq, "base"); 
			$result = mysql_fetch_array($resultat);?>
			<input id="nb_cuisine" type="hidden" value="<?php echo $result['nb'];?>" />
<?php		$rq = "SELECT count(*) AS nb FROM salon;";
			$resultat = executer_requete($rq, "base"); 
			$result = mysql_fetch_array($resultat);?>
			<input id="nb_salon" type="hidden" value="<?php echo $result['nb'];?>" />
<?php		$rq = "SELECT count(*) AS nb FROM chambre;";
			$resultat = executer_requete($rq, "base"); 
			$result = mysql_fetch_array($resultat);?>
			<input id="nb_chambre" type="hidden" value="<?php echo $result['nb'];?>" />
<?php		$rq = "SELECT count(*) AS nb FROM bureaux;";
			$resultat = executer_requete($rq, "base"); 
			$result = mysql_fetch_array($resultat);?>
			<input id="nb_bureaux" type="hidden" value="<?php echo $result['nb'];?>" />
<?php		$rq = "SELECT count(*) AS nb FROM cartons;";
			$resultat = executer_requete($rq, "base"); 
			$result = mysql_fetch_array($resultat);?>
			<input id="nb_cartons" type="hidden" value="<?php echo $result['nb'];?>" />
<?php		$rq = "SELECT count(*) AS nb FROM garage;";
			$resultat = executer_requete($rq, "base"); 
			$result = mysql_fetch_array($resultat);?>
			<input id="nb_garage" type="hidden" value="<?php echo $result['nb'];?>" />
<?php		$rq = "SELECT count(*) AS nb FROM manger;";
			$resultat = executer_requete($rq, "base"); 
			$result = mysql_fetch_array($resultat);?>
			<input id="nb_manger" type="hidden" value="<?php echo $result['nb'];?>" />
<?php		$rq = "SELECT count(*) AS nb FROM bain;";
			$resultat = executer_requete($rq, "base"); 
			$result = mysql_fetch_array($resultat);?>
			<input id="nb_bain" type="hidden" value="<?php echo $result['nb'];?>" />			