<?PHP
include "core/produitC.php";
include "entities/produit.php";

$produitC=new ProduitC();

if (isset($_POST['ajouter'])){
	
	$nom = $_POST['nom'];
	$prix = $_POST['prix'];
	$image = $_POST['image'];
	$description = $_POST['description'];
    $categorie_id = $_POST['categorie']; 
	$produit=new Produit($nom,$image,$prix,$description,$categorie_id);	
    $produitC->ajouterProduit($produit);
	header('Location: afficher.php');
}

?>