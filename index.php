<?php
	$repjs = "systeme/donnees/slogan.json";
	$json = file_get_contents($repjs);
	$slogan = json_decode($json, true);
	$indice = rand(1,12);
	$repperso = "systeme/donnees/code_perso.json";
	$affpg = "";
	$json1 = file_get_contents($repperso);
	$aff_per = json_decode($json1, true);
	$aftitre = "";
	if(isset($_GET['pg'])){
		$affpg = $affpg . $aff_per[$_GET['pg']];
		if($_GET['pg']=="Ma"){
			$afflien = "In";
			$aftitre = $aff_per["int"];
		}
		else{
			$afflien = "Ma";
			$aftitre = $aff_per["mat"];
		}
		if(isset($_GET['ext']) and ($_GET['ext'])=="p"){
				$affpg = $affpg .".php";
			}
		else{
			$affpg = $affpg .".html";
		}
	}
	else{
		$affpg = "systeme/donnees/afficheur.html";
		$afflien = "Ma";
		$aftitre = $aff_per["int"];
	}
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<meta name="description" content="Web ART! Ce code est la forme symbolique du nombre 11880 vu d'un afficheur alphanumérique au travers d'un site internet.">
		<meta name="publisher" content="ProjetX"/>
		<meta property="og:title" content="Matricule 11880">
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://matricule.collectif11880.org/index.php">
		<meta property="og:image" content="http://matricule.collectif11880.org/systeme/images/matricule.png">
		<meta property="og:description" content="Web ART! Ce code est la forme symbolique du nombre 11880 vu d'un afficheur alphanumérique au travers d'un site internet.">
		<meta property="og:locale" content="fr_FR">
		<meta property="og:ProjetX" content="Balise META">
		<title>Matricule</title>
		<link href="systeme/css/matricule.css" rel="stylesheet">
	</head>
	<body>
		<div class="bloc100">
			<header>
				<nav> 	
					<a class="manisfete" href="index.php?pg=<?php echo $afflien; ?>">
						<svg viewBox="0 0 16 16" class="bouton-nav" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M14 7H2a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM2 6a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2H2z"/>
							<path fill-rule="evenodd" d="M15 11H1v-1h14v1zM2 12.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0h-13zm1 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm9.927.427l.396.396a.25.25 0 0 0 .354 0l.396-.396A.25.25 0 0 0 13.396 2h-.792a.25.25 0 0 0-.177.427z"/>
						</svg>	
						<span class="bt-titre"><?php echo $aftitre; ?></span>
					</a>
				</nav>
			</header>
			<main>
				<?php include($affpg); ?>
			</main>
			<footer>
				<p>
					<a href="http://www.collectif11880.org"><img src="systeme/images/collectif_pt.png"></a>
					<?php echo " / ".$aff_per["coprght"]." / version du site ".$aff_per["version"]." au ".$aff_per["date"]." / version du programme ". $aff_per["ver_diff"]."."; ?>
				</p>
			</footer>
		</div>

		<script src="http://collectif11880.org/systeme/js/jquery-3.6.0.min.js"></script>
		<script src="systeme/js/afficheur.js"></script>
	</body>
</html>