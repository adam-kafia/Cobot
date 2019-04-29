
<?PHP
 session_start();


include "C:/xampp/htdocs/final/core/panierC.php";


if (isset($_POST['qte']) & isset($_POST['id_pro']) ){
	$qte= $_POST['qte'];
	$id_pro= $_POST['id_pro'];
	if($qte > 0)
	{
		
		
	$idpanier=0;
	$panier1=new Panier($id_pro,$qte,$idpanier);
	$panier1C=new PanierC();
	if($panier1C->ajouterPanier($panier1)== true) 
	{
		

	}
	else {echo"<script> alert('Produit est deja dans votre panier')</script> " ;}

		if($ss==1 and $cart==0 )
		{$link="Location: shop-list.php";}
		else { $link="Location: shop-list.php"; }
		
		header($link);
	}
	else { echo "Check Quantity";}
	
	
}
	
?>