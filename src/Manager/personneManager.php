<?php

namespace ISL\Manager;

class PersonneManager{

  private $connexion;

  public function __ construct (POO $connexion){
    $this->connection = $connexion;
  }

  public function create(Personne $v){
    $stmt = $this->connexion->prepare(
      'INSERT INTO personnes
      SET prenom = :prenom,
      nom = :nom,
      adresse = :adresse,
      cp = :cp,
      ville = :ville,
      pays = :pays,
      societe = :societe'
    );

    $stmt->bindValue(':nom', $v->getNom(), PDO::PARAM_STR);
    $stmt->bindValue(':prenom', $v->getPrenom());
    $stmt->bindValue(':adresse', $v->getAdresse());
    $stmt->bindValue(':cp', $v->getCp());
    $stmt->bindValue(':ville', $v->getVille());
    $stmt->bindValue(':pays', $v->getPays());
    $stmt->bindValue(':societe', $v->getSociete());
    $stmt->execute();
  }

  public function retrieve($id){
    $stmt = $this->connexion->prepare(
      'SELECT * FROM personnes
      WHERE id = :id'
    );

    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchObject('Personne');

    //$data = $stmt->fetch(PDO::FETCH_ASSOC);
    //return new Personne($data);
  }

  public function retrieveAll(){
    $stmt = $this->connexion->query(
      'SELECT * FROM personnes'
    );

    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function update(Personne $v){
    $stmt = $this->connexion->prepare(
      'UPDATE personnes
      SET ' . 'prenom = :prenom,' .
      'nom = :nom,'.
      'adresse = :adresse,'.
      'cp = :cp,' .
      'ville = :ville,'.
      'pays = :pays,'.
      'societe = :societe,'.
      'WHERE id= :id'
    );

    $stmt->bindValue(':nom', $v->getNom(), PDO::PARAM_STR);
    $stmt->bindValue(':prenom', $v->getPrenom());
    $stmt->bindValue(':adresse', $v->getAdresse());
    $stmt->bindValue(':cp', $v->getCp());
    $stmt->bindValue(':ville', $v->getVille());
    $stmt->bindValue(':pays', $v->getPays());
    $stmt->bindValue(':societe', $v->getSociete());
    $stmt->execute();
  }

  public function delete(Personne $id){
    $stmt = $this->getConnexion()->prepare(
      'DELETE FROM personnes
      WHERE id = :id'
    );

    $stmt->bindValue(':id', $v->getId());
    $stmt->execute();
    return $stmt->fetchObject('Personne');

    //$data = $stmt->fetch(PDO::FETCH_ASSOC);
    //return new Vehicule($data);
  }

?>
