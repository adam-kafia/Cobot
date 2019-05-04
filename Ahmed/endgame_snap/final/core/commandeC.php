<?php
include "C:/xampp/htdocs/final/entities/commande.php";
include "C:/xampp/htdocs/final/core/panierC.php";


class CommandeC{
	
	function __construct(){
		
	}
	


 function ajouterCommande($commande){
		$sql="insert into commandes (cin,prix_t,livraison,payment,etat) values (:cin, :prix_t,:livraison ,:payment,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
       
        $cin=$commande->getCin();
        $prix=$commande->getprix_t();
        $liv =$commande->getLiv();
        $pay=$commande->getPay();


		$req->bindValue(':cin',$cin);
		$req->bindValue(':prix_t',$prix);
		$req->bindValue(':livraison',$liv);
		$req->bindValue(':payment',$pay);
		$req->bindValue(':etat',"en cours");
		
        $req->execute();

       $sql="SELECT MAX(ID_C) FROM commandes ";
       $i=$db->query($sql);
       $idc=$i->fetch(0);

       $sql="UPDATE paniers SET ID_P =:id where ID_P=0";
       $r=$db->prepare($sql);
       $r->bindValue(':id',$idc[0]);
       $r->execute();







        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }


		
	}

	function afficherCommande(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * from commandes where cin = 18";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	
    }

 	function updateEtat($id,$etat)
{

	
	$sql="update  commandes set etat =:etat where ID_C =:id ";
		
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$req->bindValue(':id',$id);
		$req->bindValue(':etat',$etat);
		
         $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        
    }

}

   function supprimerCmd($id){
		$sql="DELETE FROM commandes where ID_C= :id";
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
	
     $sql="DELETE FROM paniers where ID_P= :id";
     $ps=$db->prepare($sql);
	 $ps->bindValue(':id',$id);
	 try{
            $ps->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}



function afficherCommandeTrie(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * from commandes where cin = 18 order by prix_t desc";
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

 