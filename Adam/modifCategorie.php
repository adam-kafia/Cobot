<?PHP
include "core/categorieC.php";
include "entities/categorie.php";

$categorieC=new CategorieC();

if (isset($_POST['modifier'])){
	$nom = $_POST['nom'];
	$categorie=new Categorie($nom);	
    $categorieC->modifierCategorie($categorie, (int)$_POST["id"]);
	header('Location: affichercat.php');
}

?>