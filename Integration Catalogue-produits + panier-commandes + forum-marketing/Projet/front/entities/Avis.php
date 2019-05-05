<?php

/**
 * 
 */
class Avis 
{

	private $id;
	private $produit;
	private $user;
	private $commentaire;
	private $note;


	function getId(){
		return $this->id;
	}

	function getProduit(){
		return $this->Produit;
	}

	function getUser(){
		return $this->user;
	}

	function getCommentaire(){
		return $this->Commentaire;
	}

	function getNote(){
		return $this->Note;
	}

	function setId($id){
		$this->id=$id;
	}

	function setProduit($Produit){
		$this->Produit=$Produit;
	}

	function setUser($user){
		$this->user=$user;
	}

	function setCommentaire($Commentaire){
		$this->Commentaire=$Commentaire;
	}

	function setNote($Note){
		$this->Note=$Note;
	}
	
	function __construct($Produit,$user,$Commentaire,$Note)
	{
		$this->Produit=$Produit;
		$this->user=$user;
		$this->Commentaire=$Commentaire;
		$this->Note=$Note;
	}
}