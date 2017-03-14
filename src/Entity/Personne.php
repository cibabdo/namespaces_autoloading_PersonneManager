<?php
namespace ISL\Entity;

class Personne{
    private $id;
    private $nom;
    private $prenom;
    private $rue;
    private $numero;
    private $cp;
    private $ville;
    private $pays;
    private $societe;
}

public function getId() {
    return $this->id;
}
public function getNom() {
    return $this->nom;
}
public function getPrenom() {
    return $this->prenom;
}
public function getRue() {
    return $this->rue;
}
public function getNumero() {
    return $this->numero;
}
public function getCp() {
    return $this->cp;
}
public function getVille() {
    return $this->ville;
}
public function getPays() {
    return $this->pays;
}
public function getSociete() {
    return $this->societe;
}


public function setId($id){
    $this->id=$id;
}
public function setNom($nom) {
    return $this->nom;
}
public function setPrenom($prenom) {
    return $this->prenom;
}
public function setRue($rue){
    $this->rue=$rue;
}
public function setNumero($numero){
    $this->numero=$numero;
}
public function setCp($cp) {
    return $this->cp=$cp;
}
public function setVille($ville) {
    return $this->ville=$ville;
}
public function setPays($pays){
    $this->pays=$pays;
}
public function setSociete(){
    $this->societe=$societe;
}
public function afficher(){
  return  ".$this->nom." ".$this->prenom." ".$this->rue." ".$this->numero." ".$this->cp." ".$this->ville." ".$this->pays." ".$this->societe.";
}

 ?>
