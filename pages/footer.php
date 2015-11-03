		<img id="footer" src="img/banner basse.jpg"/>
	</aside>
	<aside class="coloneDroit">
		<div class="contenaire">
				<u><center><h3>Aides financières</h3></center></u>
				<table cellpadding="10px">
					<tr>
						<td style="padding-left:5px;font-size:0.9em;">Découvrez les conditions requises pour bénéficier de la prime de déménagement de la caf en cliquant sur l'image ci-contre.</td>
						<td><a href="http://www.officiel-demenagement.com/conseils-demenagement/aide-financement/prime-demenagement-caf-caisse-allocations-familiales.html" target="_blank"><img src="img/caf.jpg" width="50px" height="50px"/></a></td>
					</tr>
				</table>
		</div>
		<div class="contenaire" style="	-webkit-border-top-left-radius: 0px; -webkit-border-top-right-radius:0px; -moz-border-radius-topleft: 0px; -moz-border-radius-topright: 0px; border-top-left-radius: 0px; border-top-right-radius: 0px;">
			<table cellpadding="10px">
				<tr>
					<td style="padding-left:5px; font-size:0.9em;">Découvrez les conditions requises pour bénéficier de la prime <br>de déménagement de pole emploi en cliquant sur l'image ci-contre.</td>
					<td><a href="http://www.officiel-demenagement.com/conseils-demenagement/aide-financement/prime-demenagement-pole-emploi.html" target="_blank"><img src="img/pe.jpg" width="50px" height="50px"/></a></td>
				</tr>
			</table>
		</div>
		<?php
		if ($_GET['page'] != "aide partielle")
		{
		?>
		<div class="contenaire">
				<u><center><h3>Aide partielle au déménagement</h3></center></u>
				<div  style="font-size:0.9em; padding:5px;">
					Pour les petits volumes ou les budgets serrés, la mise à disposition d'un camion de déménagement de 20m3, avec son conducteur-déménageur et sont équipement (couvertures, sangles d'arrimage et de portage ainsi que des chariots.)
					En effet, ce système... <u><?php echo '<a style="color:blue" href="index.php?page=aide partielle&mobile='.$isMobile.'">lire la suite</a>' ?> </u>
				</div>
		</div>
		
		<?php
		}
		if ($_GET['page'] != "debarras")
		{
		?>
		<div class="contenaire">
				<u><center><h3>Débarras</h3></center></u>
				<div  style="font-size:0.9em; padding:5px;">
					Nous débarrassons les maisons, appartements, caves, greniers, jardins, et dépôts.
					Encombrants, déchets non putrécibles, bois, papiers.... <u><?php echo '<a style="color:blue" href="index.php?page=debarras&mobile='.$isMobile.'">lire la suite</a>' ?></u>
				</div>
		</div>
		<?php
		}
		?>
	</aside>
	<div style="width: 894px; margin: auto; margin-right:450px;">
		<p align="center" style="color: white;">Copyright (&copy;) 2013 Demtop SARL. Tous droits réservés.</p>
		<p align="center"><a style="color:white;" href="?mobile=0" class="visible-phone">Accéder à la version pour ordinateur.</a></p>
	</div>
	</body>
</html>