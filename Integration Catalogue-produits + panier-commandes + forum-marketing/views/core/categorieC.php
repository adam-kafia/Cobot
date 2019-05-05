<?PHP
include_once "config.php";
class CategorieC {
	
	function ajouterCategorie($nom_c){
		$sql="insert into categorie (nom_c) values(:nom)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql); 
		$req->bindValue(':nom',$nom_c);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategorie(){
		$sql="select * From categorie";
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
	function supprimerCategorie($id){
		$sql="DELETE FROM categorie where id= :id";
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
	function modifierCategorie($nom_c,$id){
		$sql="UPDATE categorie SET nom_c=:nom where id=:id";
		$db = config::getConnexion();
	try{		
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom_c);
		$req->bindValue(':id',$id);
    	$s=$req->execute();
	
    }
    catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
    }
		
	}
	function recupererCategorie($id){
		$sql="SELECT * from categorie where id= $id";
		$db = config::getConnexion();
		try{
		    $sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetch();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}

?>