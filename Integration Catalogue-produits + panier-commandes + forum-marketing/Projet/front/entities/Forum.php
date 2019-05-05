<?PHP
class Forum{
	
	private $id;
	private $des;
	private $titre;
	private $image;



	function __construct($des,$titre,$image){
		//$this->id=$id;
		$this->titre=$titre;
		$this->image=$image;
		$this->des=$des;
	}




	//Getters
	function getId(){
		return $this->id;
	}


    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
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



	


	
	
	
}

?>