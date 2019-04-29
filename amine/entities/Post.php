<?PHP
class Post{
	
	private $id;
	private $des;
	private $forum ;


	function __construct($des , $forum){
		//$this->id=$id;
		$this->des=$des;
		$this->forum =$forum ; 
	}


	//Getters
	function getId(){
		return $this->id;
	}

	function getDes(){
		return $this->des;
	}

		function getForum(){
		return $this->forum;
	}




	//Setters
	function setId($id){
		$this->id=$id;
	}

	
	function setDes($des){
		$this->des=$des;
	}

	function setForum($forum){
		$this->forum=$forum;
	}

		function ajouterPost($element){
		$sql="insert into post (des,forum) values (:des,:forum)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $des=$element->getDes();
        $forum=$element->getForum();
		$req->bindValue(':des',$des);
		$req->bindValue(':forum',$forum);
        $req->execute();  
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	} 

	


	
	
	
}

?>