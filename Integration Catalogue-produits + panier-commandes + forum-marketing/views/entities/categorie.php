<?php
class Categorie {
	private $id;
	private $nom_c;

	function __construct($nom_c){
		$this->nom_c=$nom_c;
	}
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	
	function setId($id){
		$this->id=$id;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
}

?>
	