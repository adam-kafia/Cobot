<?PHP
class Newsletter{
	
	private $id;
	private $des;
	private $destinataire ;


	function __construct($des , $destinataire){
		//$this->id=$id;
		$this->des=$des;
		$this->destinataire=$destinataire;
	}


	//Getters
	function getId(){
		return $this->id;
	}

	function getDes(){
		return $this->des;
	}

	function getDestinataire(){
		return $this->destinataire;
	}



	//Setters
	function setId($id){
		$this->id=$id;
	}

	function setDes($des){
		$this->des=$des;
	}


		function ajouterNewsletter($element){
		$sql="insert into newsletter (des,destinataire) values (:des , :destinataire)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $des=$element->getDes();
        $destinataire = $element->getDestinataire();
		$req->bindValue(':des',$des);
		$req->bindValue(':destinataire',$destinataire);
        $req->execute();  
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
}

?>