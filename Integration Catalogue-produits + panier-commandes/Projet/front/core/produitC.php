<?PHP
include_once "config.php";
class ProduitC {
	
	function ajouterProduit($produit){
		$sql="insert into produit (nom , image , prix , description, categorie_id) 
		values (:nom,:image,:prix, :description, :categorie_id)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $nom=$produit->getNom();
        $image=$produit->getImage();
        $prix=$produit->getPrix();
        $description=$produit->getDescription();
		$categorie_id=$produit->getCategorie_id();
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':image',$image);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':description',$description);
		$req->bindValue(':categorie_id',$categorie_id);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduit(){
		$sql="select * From produit";
		$db = config::getConnexion();
		try{
			$sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetchAll();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProduit($id){
		$sql="DELETE FROM produit where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierProduit($produit,$id){
		$sql="UPDATE produit SET nom=:nom, image=:image, Prix=:prix , description=:description, categorie_id=:categorie_id WHERE id=:id";
		$db = config::getConnexion();
	try{		
        $req=$db->prepare($sql);
		
	    $nom=$produit->getNom();
        $image=$produit->getImage();
        $prix=$produit->getPrix();
        $description=$produit->getDescription();
		$categorie_id=$produit->getCategorie_id();
		
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':image',$image);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':description',$description);
		$req->bindValue(':categorie_id',$categorie_id);
	
    	$s=$req->execute();
	
    }
    catch (Exception $e){
            echo "Erreur ! ".$e->getMessage();
    }
		
	}
	function recupererProduit($id){
		$sql="SELECT * from produit where id=$id";
		$db = config::getConnexion();
		try{
		    $sth = $db->prepare($sql);
			$sth->execute();
			return $sth;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($nom){
		$sql="SELECT * from produit where nom ='$nom'";
		$db = config::getConnexion();
		try{
		 $sth = $db->prepare($sql);
			$sth->execute();
			return $sth;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeEmployesParCat($cat){
		$sql="SELECT * from produit,categorie where produit.categorie_id=categorie.id_c and categorie.nom_c='$cat'";
		$db = config::getConnexion();
		try{
		 $sth = $db->prepare($sql);
			$sth->execute();
			return $sth;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function getIDS()
	{
		$sql="SELECT * From produit ";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e)
		{
			die('me erreur: '.$e->getMessage());
		}
	}
	

function afficherProduitParNom(){
	$sql="select * From produit order by nom";
	$db = config::getConnexion();
	try{
		$sth = $db->prepare($sql);
		$sth->execute();
		$liste = $sth->fetchAll();
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
function afficherProduitParPrix(){
	$sql="select * From produit order by prix";
	$db = config::getConnexion();
	try{
		$sth = $db->prepare($sql);
		$sth->execute();
		$liste = $sth->fetchAll();
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
function afficherProduitParPrix_d(){
	$sql="select * From produit order by prix DESC";
	$db = config::getConnexion();
	try{
		$sth = $db->prepare($sql);
		$sth->execute();
		$liste = $sth->fetchAll();
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
function nbProdParCat($cat)
{
	$query = "select count(*) From produit where categorie_id=$cat";
	$db = config::getConnexion();
	try{
		$result = $db->query($query);
		$l=$result->fetch(0);
		return $l[0];
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}
}
?>