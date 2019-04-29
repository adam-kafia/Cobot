<?PHP
class Commande{
	private $cin;
	private $ID_C;
	private $prix_t;
	private $etat;
	private $liv;
	private $pay;



	function __construct($cin,$ID_C,$prix_t,$etat,$liv,$pay){
		$this->cin=$cin;
		$this->ID_C=$ID_C;
		$this->prix_t=$prix_t;
		$this->etat=$etat;
		$this->liv=$liv;
		$this->pay=$pay;


	}
	
	function getCin(){
		return $this->cin;
	}
	function getID_C(){
		return $this->ID_C;
	}
	function getprix_t(){
		return $this->prix_t;
	}
	function getetat(){
		return $this->etat;
	}

	function getLiv(){
		return $this->liv;
	}

	function getPay(){
		return $this->pay;
	}
	

	function setNom($cin){
		$this->cin=$cin;
	}
	function setID_C($ID_C){
		$this->ID_C=$ID_C;
	}
	function setprix_t($prix_t){
		$this->prix_t=$prix_t;
	}
	function setetat($etat){
		$this->etat=$etat;
	}

	function setLiv($liv){
		$this->liv=$liv;
	}

	function setPay($pay){
		$this->pay=$pay;
	}
	
}

?>