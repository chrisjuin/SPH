<?php
session_start();



if(isset($_GET['p'])){
    $p = $_GET['p'];
} else{
    $p = 'connexion';
}
ob_start();
if($p === 'connexion'){
    include('./pages/connexion.php');
}
if($p === 'liste_clients'){
    include('./pages/liste_clients.php');
}

if($p === 'nouveau_client'){
    include('./pages/creation_client.php');
}

if($p === 'fiche_client'){
    include('./pages/fiche_client.php');
}

if($p === 'fiche_chantier'){
    include('./pages/fiche_chantier.php');
}

if($p === 'pdf'){
    include('./pages/pdf.php');
    die;
}

if($p === 'deconnexion'){
	include('./pages/deconnexion.php');
}


$content = ob_get_clean();
include('assets/templates/default.php');
?>

