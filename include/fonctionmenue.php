<?php
	$path = $_GET["page"];
	$file = basename($path);
	if ($file == "accueil") {
?>
	
	<style>
		#tbtna{
			background-color:white;
		}
		#tbtna > a{
			color:#302c30;
		}
	</style>
	
<?php
	}
	else
	{
?>
	
	<style>
		#tbtna{
-webkit-box-shadow: inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
-moz-box-shadow:    inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
box-shadow:         inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
	
		}
	</style>
	
<?php

	}
	if ($file == "demenagement particulier prestation") {
?>
	
	<style>
		#menu_demenagement > li > #btnbtxt > a > #btnb {
			background:white;
		}
		#menu_demenagement > li > #btnbtxt > a {
			color:#302c30;
		}
		#menu_demenagement li li:first-child > a {
			color:#302c30;
		}
		#menu_demenagement li li:first-child {
			background:white;
		}
	</style>

<?php	
	}
	if ($file == "demenagement") {
?>
	
	<style>
		#tbtnc{
			background-color:white;
		}
		#tbtnc > a{
			color:#302c30;
		}
	</style>
	
<?php	
	}
	else
	{
?>
	
	<style>
		#tbtnc{
-webkit-box-shadow: inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
-moz-box-shadow:    inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
box-shadow:         inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
	
		}
	</style>
	
<?php
	}
	if ($file == "contact et mentions") {
?>
	
	<style>
		#tbtng{
			background-color:white;
		}
		#tbtng > a{
			color:#302c30;
		}
	</style>
	
<?php	
	}
	else
	{
?>
	
	<style>
		#tbtng{
-webkit-box-shadow: inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
-moz-box-shadow:    inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
box-shadow:         inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
	
		}
	</style>
	
<?php
	}
	if ($file == "devis") {
?>
	
	<style>
		#tbtne{
			background-color:white;
		}
		#tbtne > a{
			color:#302c30;
		}
	</style>
	
<?php	
	}
	else
	{
?>
	
	<style>
		#tbtne{
-webkit-box-shadow: inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
-moz-box-shadow:    inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
box-shadow:         inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
	
		}
	</style>
	
<?php
	}
	if ($file == "calcul de volume") {
?>
	
	<style>
		#tbtnf{
			background-color:white;
		}
		#tbtnf > a{
			color:#302c30;
		}
	</style>
	
<?php
	}
	else
	{
?>
	
	<style>
		#tbtnf{
-webkit-box-shadow: inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
-moz-box-shadow:    inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
box-shadow:         inset 0px -8px 8px 0px rgba(0, 0, 0, 1);
	
		}
	</style>
	
<?php
}
	if ($file == "aide financiere") {
?>
	
	<style>
		#menu_demenagement2 > li a > #btnd {
			background:white;
		}
		#menu_demenagement2 > li > a {
			color:#302c30;
		}
		#menu_demenagement2 li li:first-child > a {
			color:#302c30;
		}
		#menu_demenagement2 li li:first-child {
			background:white;
		}
	</style>

	<?php
	}
	if ($file == "aide partielle") {
?>
	
	<style>
		#menu_demenagement2 > li a > #btnd {
			background:white;
		}
		#menu_demenagement2 > li > a {
			color:#302c30;
		}
		#menu_demenagement2 li li:nth-child(2) > a {
			color:#302c30;
		}
		#menu_demenagement2 li li:nth-child(2) {
			background:white;
		}
	</style>

	<?php
	}
	if ($file == "monte meuble") {
?>
	
	<style>
		#menu_demenagement2 > li a > #btnd {
			background:white;
		}
		#menu_demenagement2 > li > a {
			color:#302c30;
		}
		#menu_demenagement2 li li:last-child > a {
			color:#302c30;
		}
		#menu_demenagement2 li li:last-child {
			background:white;
		}
	</style>

	<?php } ?>