<?PHP
include "core/categorieC.php";
$categorieC=new categorieC();
if (isset($_POST["id"])){
	$categorieC->supprimerCategorie((int)$_POST["id"]);
	header('Location: affichercat.php');
}

?>