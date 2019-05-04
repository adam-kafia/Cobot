<?PHP
 session_start();

include "C:/xampp/htdocs/Projet/front/core/CommandeC.php";


if (isset($_POST['livraison']) and isset($_POST['Payment']) ){

	$liv=$_POST['livraison'];
	$pay=$_POST['Payment'];
	$prix_t= $_SESSION['total'];
		
	$Cmd1=new Commande(18,6,$prix_t,"f",$liv,$pay);
	$Cmd1C=new CommandeC();
	$Cmd1C->ajouterCommande($Cmd1);
		
		$to ="ahmed.midassi@esprit.tn";
		$subject ="Hafood: Commande";
		$message="Votre commande est en cours de traitement, Merci";
		$headers ="From: ahmed001s456@gmail.com";

		mail($to, $subject, $message,$headers);
		
	header("Location: thankyou.php");
	
	
	
}
	
?>