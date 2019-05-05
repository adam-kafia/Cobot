<?PHP
 session_start();

include "C:/xampp/htdocs/Projet/core/CommandeC.php";

if (isset($_POST['IDC'])){

	if(isset($_POST['rech']))
	{
		$id=$_POST['IDC'];

		header("Location: HisCmd.php?id=".$id);


	}

	if(isset($_POST['Tri']))
		 {
		 	if($_SESSION['trie']==0)
		 	{
				$_SESSION['trie']=1;
		 	}
		 	else {
					$_SESSION['trie']=0;
		 			}
		 	



			header("Location: HisCmd.php");

		 }

	
}
	
	
?>