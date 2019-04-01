<?PHP
include "../core/commandeC.php";
$commandeC=new commandeC();
if (isset($_POST["cin"])){
	$employeC->supprimercommande($_POST["id"]);
	header('Location: affichercommande.php');
}

?>