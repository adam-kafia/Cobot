<?PHP
include "core/produitC.php";
include "entities/produit.php";

$produitC=new ProduitC();

if (isset($_POST['modifier'])){
	
	$nom = $_POST['nom'];
	$prix = $_POST['prix'];
	$image = $_POST['image'];
	$description = $_POST['description'];
	$categorie_id = $_POST['categorie'];
	$produit=new Produit($nom,$image,$prix,$description, $categorie_id);	
    $produitC->modifierProduit($produit, (int)$_POST['idc']);
	header('Location: afficher.php');
}

?>