<?PHP
class Forum{
	
	private $id;
	private $des;
	


	function __construct($des){
		//$this->id=$id;
		$this->des=$des;
	}


	//Getters
	function getId(){
		return $this->id;
	}

	function getDes(){
		return $this->des;
	}



	//Setters
	function setId($id){
		$this->id=$id;
	}

	
	function setDes($des){
		$this->des=$des;
	}

		function ajouterForum($element){
		$sql="insert into forum (des) values (:des)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $des=$element->getDes();
		$req->bindValue(':des',$des);
        $req->execute();  
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	} 

	


	
	
	
}

?>