<?PHP
include "core/categorieC.php";
include "entities/categorie.php";

$categorieC=new CategorieC();

if (isset($_POST['ajouter'])){
	$nom = $_POST['nom'];
	$categorie=new Categorie($nom);	
    $categorieC->ajouterCategorie($categorie);
	header('Location: affichercat.php');
}

?>