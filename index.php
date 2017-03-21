<?php
require_once __DIR__.'/vendor/autoload.php'; // Charger les librairies
use ISL\Entity\Personne;
use ISL\Manager\PersonneManager;

$connex = new POO ('mysql:host=localhost;dbname=personne_poo', 'root', 'password'); //connection à la bb via PDO
$personne = new PersonneManager($connex);

/*
Definir $_GET
*/


switch ($action) {
  case 'add': /*ajout/*
    $faker=  Faker\Factory::create('fr_BE');
    $personnes = []; /*créer tableau personnes*/
    for ($cpt=0; $cpt<10; $cpt++){
      $personnes = new Personne (array(
        'id'=>'',
        'nom' => $faker->firstName,
        'prenom' => $faker->lastName
        'rue'=> $faker->streetName,
        'numero'=> $faker->numberBetween,
        'cp' => $faker->postcode,
        'ville' => $faker->city,
        'pays' => $faker->country,
        'societe' => $faker->company)
      );
    }
    for ($cpt=0; cpt<sizeof($personnes); $cpt++){
        $personne->create($personnes);
    }
    break;

  case 'affiche_by_id':/* Affiche par id */
    $id = 1; /*definir $_GET['id'] ??? */
    $affiche_id = $personne->retrieve($id));
    echo $affiche_id;
    break;

  case 'affiche_all':/* Affiche tout */
    $affiche_tout = $personne->retrieveAll();
    echo $affiche_tout;
    break;

  case 'update':/* Update */
    for ($cpt=0;$cpt<sizeof($personne);$cpt++){
    $personne->update(array (
    'id'=>$cpt,
    'nom' => $faker->firstName,
    'prenom' => $faker->lastName
    'rue'=> $faker->streetName,
    'numero'=> $faker->numberBetween,
    'cp' => $faker->postcode,
    'ville' => $faker->city,
    'pays' => $faker->country,
    'societe' => $faker->company)
    );
    }
    break;

  case 'delete':/* Efface */
    $id = 1; /*definir $_GET['id'] ??? */
    $personne->delete($id));
    break;
}

?>
