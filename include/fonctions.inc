<?php
	// ======================
	// fonctions.inc
	// Biblioth�que de fonctions
	// ======================

// function executer_requete ($rq, $fichierbase)
// function date_format_AAAA_MM_JJ($ladate)
// function date_format_JJ_MM_AAAA($ladate)
// function ecart_date_now($madate)
// function remplacer_apostrophes($tableau)
// function  nom_page($nom_complet)
// function message($msg)

// =================================
// FONCTION EXECUTION DE REQUETE
// =================================

function executer_requete ($rq, $fichierbase)
	 {
	$fichierbasecomplet = "definitions/".$fichierbase.".txt.php";
		// Inclusion de la d�finition de la base de donn�es
	include($fichierbasecomplet);

		// Connection au serveur de bases de donn�es
	$connection=mysql_connect($dbhost,$dbuser,$dbpasse)
		or die("Connection au serveur impossible");

		// Connection � la base
	$db=mysql_select_db($base,$connection)
		or die("S�lection de la base de donn�es impossible");

		// Ex�cution de la requ�te select
	$rq = trim(stripSlashes($rq));		// on enl�ve les / d'escape s'il y en a
	$resultat = mysql_query($rq);		// ex�cution de la requ�te

		// Fermeture de la base
	mysql_close($connection);

		// Retour de la fonction
	return $resultat;
	}
	
// =================================
// FONCTIONS  DIVERSES
// =================================

// ===================================
// Remplace dans un tableau associatif les apostrophes �ventuels dans les valeurs par le caract�re �
// Tr�s utile pour nettoyer des valeurs provenant d'un formulaire � ins�rer dans une table de BD
//	Sortie : tableau
// ---------------------------------------------------------

function remplacer_apostrophes($tableau)		
	{
	foreach ($tableau as $cleduchamp => $valduchamp)
		{
		$tableau[$cleduchamp] = str_replace("'","�",$valduchamp);
		}
	return $tableau;
	}

// ==================================
// Extrait le nom de page du nom complet
// Utile pour extraire le nom de la page d'une variable serveur
// ---------------------------------------------------------

function  nom_page($nom_complet)
	{
	$nom_pg = trim($nom_complet);
	$pos = strpos($nom_pg, "?");
	if ($pos > 0)  $nom_pg = substr($nom_pg, 0, $pos);
	$len = strlen($nom_pg);
	$pos = strrpos($nom_pg, "/");
	if ($pos > 0)  $nom_pg = substr($nom_pg, $pos + 1, $len - $pos);
	return $nom_pg;
	}


// =================================
// Message dans une boite d'alert javascript
// --------------------------------------------------------

function message($msg)
	 {
	echo "<script language='javascript'>
	alert(\"".$msg."\");</script>\n";
	}


?>