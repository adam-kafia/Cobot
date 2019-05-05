<?PHP
class produit{
	private $id;
	private $nom;
	private $image;
	private $prix;
    private $description;
	private $categorie_id;

	
	function __construct($nom,$image,$prix,$description,$categorie_id){
		$this->nom=$nom;
		$this->image=$image;
		$this->prix=$prix;
		$this->description=$description;
	    $this->categorie_id=$categorie_id;
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getImage(){
		return $this->image;
	}
	function getPrix(){
		return $this->prix;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getDescription(){
		return $this->description;
	}
	function getCategorie_id(){
		return $this->categorie_id;
	}
	
	function setId($id){
		$this->id=$id;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setImage($image){
		$this->image;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setDescription($description){
		$this->description=$description;
	}


}
?>