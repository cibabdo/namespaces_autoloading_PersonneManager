<?php
require_once __DIR__.'/vendor/autoload.php'; // Charger les librairies
use ISL\Entity\Personne;
use ISL\Manager\PersonneManager;

$connex = new POO ('mysql:host=localhost;dbname=personne_poo', 'root', 'password'); //connection à la bb via PDO
$personne = new PersonneManager($connex);

$faker=  Faker\Factory::create('fr_BE');
$personnes = [];
/* Ajout */ /*A partir d'ici je suis un peu perdu ! Faut il un switch une boucle ?*/
/* Moi je ferai un switch sur action ajout affichage update delete */
/* Création Personnes dans tableau*/
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
$personne->create()

/* Affiche par id */
$personne->retrieve($id));

/* Affiche tout */
$personne->retrieveAll();

/* Update */
for ($c=0;$c<sizeof($personne);$c++){
  $personne->update(array (
    'id'=>$c,
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

/* Efface */
$personne->delete($id));
?>
