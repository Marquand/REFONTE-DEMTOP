<?php echo "<?xml version=\"1.0\" encoding=\"iso-8859-15\" ?>"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0 plus SVG 1.1//EN"
          "http://www.w3.org/2002/04/xhtml-math-svg/xhtml-math-svg.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" dir="ltr">
<?php
include("include/fonctions.inc");
session_start();
	/* Détermination du nom de la page à charger */
if (isset($_GET['page'])) {
	if ($_GET['page'] == "demenagement") {
		$page = "demenagement.php";
	} else if ($_GET['page'] == "aide au demenagement") {
		$page = "aide_au_demenagement.php";
	} else if ($_GET['page'] == "debarras") {
		$page = "debarras.php";
	} else if ($_GET['page'] == "contact et mentions") {
		$page = "contact_et_mentions.php";
	} else if ($_GET['page'] == "devis") {
		$page = "devis.php";
	} else if ($_GET['page'] == "demenagement particulier prestation") {
		$page = "demenagement_particulier_prestation.php";
	} else if ($_GET['page'] == "calcul de volume") {
		$page = "calcul_de_volume.php";
	} else if ($_GET['page'] == "aide partielle") {
		$page = "aide_partielle.php";
	} else if ($_GET['page'] == "monte meuble") {
		$page = "monte_meuble.php";
	} else if ($_GET['page'] == "aide financiere") {
		$page = "aide_financiere.php";
	} else if ($_GET['page'] == "creat devis") {
		$page = "creat_devis.php";
	} else if ($_GET['page'] == "telechargement pdf") {
		$page = "telechargement_pdf.php";
	} else if ($_GET['page'] == "condition_general") {
		$page = "condition_general.php";
	} else if ($_GET['page'] == "demenagement") {
		$page = "demenagement.php";
		
	}	
	else {
		$page = "accueil.php";
	}
}
else {
	echo '<script> location.href="index.php?page=accueil"</script>';
}
	$rep = "pages/";
	/* Par convention, il peut exister une page de configuration du même nom mais avec un préfixe "config-" */
	$config = $rep."config-".$page;
	@include($config); // l'arobas permet de ne pas afficher d'erreur si le fichier de configuration de la page n'existe pas (par exemple pour page 2)
	?>
<head>
	<title><?php echo $title; ?></title>
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="description" content="<?php echo $description; ?>">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width"/>
	<meta name="viewport" content="width=device-width, initial-scale=0.4"/>
	<link rel="icon" type="image/png" href="img/logo.png" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<?php
		include"js/script.js";
	?>
	<link type="text/css" rel="stylesheet" href="img/style.css" />
	<script type="text/javascript" src="js/calcul.js"></script>
	<?php include("include/fonctionmenue.php");?>
	<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.1/mootools-yui-compressed.js" type="text/javascript"></script>
	<script src="js/date.js" type="text/javascript"></script>
	<link href="img/date.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body>
<?php
require_once ("Mobile_Detect/Mobile_Detect.php");

if(!isset($_GET['mobile']))
{
    $detect = new Mobile_Detect;
	if($detect->isMobile())
	{
		$isMobile = 1;
	} else
	{
		$isMobile = 0;
	}
} else
{
	$isMobile = $_GET['mobile'];
}

if($isMobile == 1){?>

    <meta name="viewport" content="width=device-width, maximum-scale=1"/>

<?php } ?>

	<aside class="site">
		<div class="fixed-side-social-container">
			<a class="social-icon facebook-icon" title="Facebook" target="new" href="https://www.facebook.com/demtopsarl?fref=ts">
				<span></span>
			</a>
			<a class="social-icon mail-icon" title="EMail" target="new"  href="index.php?page=contact et mentions">
				<span></span>
			</a>
		</div>
			<div id="contenudroit">
				<div class="banner">
					<?php include('header/banner.php'); ?>
				<div id="menu">
					<?php include('menu/menu.php'); ?>
				</div>
				</div>
				<a align="center" class="btn btn-navbar" id="btnMenu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div id="page">
				<nav id="MenuDroite">
					<ul class="MenuDepli">
						<li><u style="color:black"><a onClick="aideFinancieres();">Aides_financières</a></u></li>
						<li><u><a onClick="aideParcielle()">Aide_partielle_au_déménagement</a></u></li>
						<li><u><a onClick="debarras()">Débarras</a></u></li>
					</ul>
					<div id="aideFinancieres">
						<table cellpadding="10px">
							<tr>
								<td style="padding-left:5px;font-size:0.9em;">Découvrez les conditions requises pour bénéficier de la prime de déménagement de la caf en cliquant sur l'image ci-contre.</td>
								<td><a href="http://www.officiel-demenagement.com/conseils-demenagement/aide-financement/prime-demenagement-caf-caisse-allocations-familiales.html" target="_blank"><img src="img/caf.jpg" width="50px" height="50px"/></a></td>
							</tr>
						</table>
						<table cellpadding="10px">
							<tr>
								<td style="padding-left:5px; font-size:0.9em;">Découvrez les conditions requises pour bénéficier de la prime <br>de déménagement de pole emploi en cliquant sur l'image ci-contre.</td>
								<td><a href="http://www.officiel-demenagement.com/conseils-demenagement/aide-financement/prime-demenagement-pole-emploi.html" target="_blank"><img src="img/pe.jpg" width="50px" height="50px"/></a></td>
							</tr>
						</table>
					</div>
					<span id="aideParcielle">
						<div  style="font-size:0.9em; padding:5px;">
							Pour les petits volumes ou les budgets serrés, la mise à disposition d'un camion de déménagement de 20m3, avec son conducteur-déménageur et sont équipement (couvertures, sangles d'arrimage et de portage ainsi que des chariots.)
							En effet, ce système... <u><?php echo '<a style="color:blue" href="index.php?page=aide partielle&mobile='.$isMobile.'">lire la suite</a>' ?> </u>
						</div>
					</span>
					<span id="debarras">
						<div  style="font-size:0.9em; padding:5px;">
							Nous débarrassons les maisons, appartements, caves, greniers, jardins, et dépôts.
							Encombrants, déchets non putrécibles, bois, papiers.... <u><?php echo '<a style="color:blue" href="index.php?page=debarras&mobile='.$isMobile.'">lire la suite</a>' ?></u>
						</div>
					</span>
				</nav>
					<?php include($rep.$page); ?>
				</div>
			</div>
			<?php include ('pages/footer.php');?>
