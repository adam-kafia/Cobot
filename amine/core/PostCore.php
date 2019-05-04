<?php	

class PostCore {

	function afficher($forum){
		
		$sql="SElECT * From post  where forum = :forum";
		$db = config::getConnexion();
		try{
		 $req =$db->prepare($sql);
		$req->bindValue(':forum',$forum);
		 $req->execute();
		 $liste = $req->fetchAll(PDO::FETCH_NAMED);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

		function supprimer($id){
		$sql="DELETE FROM post where id= :id";
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

}
	 ?>