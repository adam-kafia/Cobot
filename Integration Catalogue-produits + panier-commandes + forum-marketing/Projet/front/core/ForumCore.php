<?php	

class ForumCore {


	function afficher(){
		$sql="SElECT * From forum";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function ajouterForum($element){
        $sql="insert into forum (titre,des, image) values (:titre , :des, :image)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $titre=$element->getTitre();
            $des=$element->getDes();
            
            $image=$element->getImage();
            $req->bindValue(':titre',$titre);
            $req->bindValue(':des',$des);
            $req->bindValue(':image',$image);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }

    function recherche($id){
        $sql="SElECT * From forum where id = ".$id;
		$db = config::getConnexion();
		try{
            $stmt   = $db->prepare($sql);
            $result = $stmt->execute();
            $user   = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function modifier($id,$titre,$des,$image){
        $sql="UPDATE forum SET titre=:titre,  des=:des,image=:image WHERE id=:id";

        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{
            $req=$db->prepare($sql);

            $req->bindValue(':id',$id);
            $req->bindValue(':titre',$titre);
            $req->bindValue(':des',$des);
            $req->bindValue(':image',$image);


            $s=$req->execute();

            // header('Location: index.php');
        }
        catch (Exception $e){
            // echo " Erreur ! ".$e->getMessage();
            //echo " Les datas : " ;
            // print_r($datas);
        }

    }


		function supprimer($id){
		$sql="DELETE FROM forum where id= :id";
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