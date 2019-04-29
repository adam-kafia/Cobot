<?php 
/**
 * 
 */

class AvisC
{
	
	function afficherAvis ($id)
		{
			$sql="SElECT * From avis where produit = ".$id;
		$db = config::getConnexion();
		try{
		$avis=$db->query($sql);
		return $avis;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
		echo "User: ".$avis->getUser()."<br>";
		echo "Produit: ".$avis->getProduit()."<br>";
		echo "Commentaire: ".$avis->getCommentaire()."<br>";
		echo "Note: ".$avis->getNote()."<br>";}
			

	//mrigla
	function ajouteravis($avis){
		$sql="insert into avis (user,produit,note,commentaire) values (:user,:produit,:note,:commentaire)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		
        $user=$avis->getUser();
        $produit=$avis->getProduit();
        $commentaire=$avis->getCommentaire();
        $note=$avis->getNote();
		

		
		$req->bindValue(':user',$user);
		$req->bindValue(':produit',$produit);
		$req->bindValue(':commentaire',$commentaire);
		$req->bindValue(':note',$note);

		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLesAvis(){
		
		$sql="SElECT * From avis";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	//mrigla
	function supprimeravis($id){
		$sql="DELETE FROM avis where id=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	//mrigla
	function modifieravis($avis){
		$sql="UPDATE avis SET user=:user, produit=:produit, commentaire=:commentaire, note=:note WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$user=$avis->getUser();
        $produit=$avis->getProduit();
        $commentaire=$avis->getCommentaire();
        $note=$avis->getNote();
        $id=$avis->getId();
      
		$datas = array(':id'=>$id, ':user'=>$user, ':produit'=>$produit,':commentaire'=>$commentaire,':note'=>$note );
		$req->bindValue(':id',$id);
		$req->bindValue(':user',$user);
		$req->bindValue(':produit',$produit);
		$req->bindValue(':commentaire',$commentaire);
		$req->bindValue(':note',$note);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
           // echo " Erreur ! ".$e->getMessage();
   //echo " Les datas : " ;
 // print_r($datas);
        }
		
	}
	function recupereravis($user){
		$sql="SELECT * from avis where user='$user'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>