<?PHP
	if (!function_exists('json_encode')){
		function json_encode($a=false){
			if (is_null($a)) return 'null';
			if ($a === false) return 'false';
			if ($a === true) return 'true';
			if (is_scalar($a)){
				if (is_float($a)){
					// Always use "." for floats.
					return floatval(str_replace(",", ".", strval($a)));
				}

				if (is_string($a)){
					static $jsonReplaces = array(array("\\", "/", "\n", "\t", "\r", "\b", "\f", '"'), array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"'));
					return '"' . str_replace($jsonReplaces[0], $jsonReplaces[1], $a) . '"';
				}else return $a;

			}
			$isList = true;
			for ($i = 0, reset($a); $i < count($a); $i++, next($a)){
				if (key($a) !== $i){
				$isList = false;
				break;
				}
			}
			$result = array();
			if ($isList){
				foreach ($a as $v) $result[] = json_encode($v);
				return '[' . join(',', $result) . ']';
			}else{
				foreach ($a as $k => $v) $result[] = json_encode($k).':'.json_encode($v);
				return '{' . join(',', $result) . '}';
			}
		}
	}


	if(isset($_REQUEST['action'])) {
		switch($_REQUEST['action']) {
		
		case 'plus' :
					$nb_objet = trim($_REQUEST['nb_objet']);
					$total_salle = trim($_REQUEST['total_salle']);
					$total = trim($_REQUEST['total']);
					$id = trim($_REQUEST['id']);
					$volume = trim($_REQUEST['volume']);
					$salle = trim($_REQUEST['salle']);
					$resultat_objet = $nb_objet + 1;
					$resultat_salle = $total_salle + $volume;
					$resultat_total = $total + $volume;
					$resultat = array('resultat_objet' => $resultat_objet,
										'resultat_salle' => $resultat_salle,
										'resultat_total' => $resultat_total);
					print(json_encode($resultat));
			break;
			
		case 'moins' :
					$nb_objet = trim($_REQUEST['nb_objet']);
					$total_salle = trim($_REQUEST['total_salle']);
					$total = trim($_REQUEST['total']);
					$id = trim($_REQUEST['id']);
					$volume = trim($_REQUEST['volume']);
					$salle = trim($_REQUEST['salle']);
					$resultat_objet = $nb_objet - 1;
					$resultat_salle = $total_salle - $volume;
					$resultat_total = $total - $volume;
					if ($resultat_objet < 0) {
					$resultat_objet = 0;
					$resultat_salle = $total_salle;
					$resultat_total = $total;
					}
					$resultat = array('resultat_objet' => $resultat_objet,
										'resultat_salle' => $resultat_salle,
										'resultat_total' => $resultat_total);
					print(json_encode($resultat));
			break;
		}
		
	}
?>