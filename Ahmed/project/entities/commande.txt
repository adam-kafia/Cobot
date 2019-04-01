<?PHP
class commande{
	private $id;
	private $nom;
	private $qte;
	private $prix;
	function __construct($id,$nom,$qte,$prix){
		$this->id=$id;
		$this->nom=$nom;
		$this->qte=$qte;
		$this->prix=$prix;
	}
	
	function getid(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getqte(){
		return $this->qte;
	}
	function getprix(){
		return $this->prix;
	}


	function setNom($nom){
		$this->nom=$nom;
	}
	function setqte($qte){
		$this->qte=$qte;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	
}

?>