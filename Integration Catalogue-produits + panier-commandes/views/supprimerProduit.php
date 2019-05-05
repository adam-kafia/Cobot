<?PHP
include "core/produitC.php";
$produitC=new ProduitC();
if (isset($_POST["id"])){
	$produitC->supprimerProduit((int)$_POST["id"]);
	header('Location: afficher.php');
}

?>