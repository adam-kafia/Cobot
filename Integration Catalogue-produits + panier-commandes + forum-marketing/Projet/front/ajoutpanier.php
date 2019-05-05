
<?PHP
 session_start();


include "C:/xampp/htdocs/Projet/front/core/panierC.php";


if (isset($_POST['qte']) & isset($_POST['id']) ){
	$qte= $_POST['qte'];
	$id= $_POST['id'];
	if($qte > 0)
	{
		
		
	$idpanier=0;
	$panier1=new Panier($id,$qte,$idpanier);
	$panier1C=new PanierC();
	if($panier1C->ajouterPanier($panier1)== true) 
	{
		

	}
	else {echo"<script> alert('Produit est deja dans votre panier')</script> " ;}

		if( $ss=1 and $cart==0 )
		{$link="Location: shop-list.php";}
		else { $link="Location: shop-list.php"; }
		
		header("Location: shop-list.php");
	}
	else { echo "Check Quantity";}
	
	
}
	
?>