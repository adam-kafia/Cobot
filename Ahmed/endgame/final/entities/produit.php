<?PHP

class Produit{
	private $id_pro;
	private $nom_pro;
	private $prix;
	
	/*function __construct($id_pro,$nom_pro,$prix){
		$this->id_pro=$id_pro;
		$this->nom_pro=$nom_pro;
		$this->prix=$prix;
	}*/
	function __construct(){}
	
	function getId_pro(){
		return $this->id_pro;
	}
	function getNom_pro(){
		return $this->nom_pro;
	}
	function getPrix(){
		return $this->prix;
	}
	

	function setId_pro($id_pro){
		$this->id_pro=$id_pro;
	}
	function setNom_pro($nom_pro){
		$this->nom_pro;
	}
	function setprix($prix){
		$this->prix=$prix;
	}

	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	
    }

    function afficherProd($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$db = config::getConnexion();
		try{
		$req=$db->prepare("SElECT * From produits where ID_PRO =:id");
		$req->bindValue(':id',$id);
		$req->execute();	
		$liste=$req->fetchAll();

		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	
    }

}

?>