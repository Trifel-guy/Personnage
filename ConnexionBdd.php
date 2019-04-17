<?php

require'Personnage.php';

    try{
     
        $bdd = new PDO("mysql:host=localhost;dbnam=bdd_personnages;charset=utf8",'root','',array(PDO::ATTR_PERSISTENT=> true));
    }
    catch(PDOExeption $e){

        die('Erreur: ' . $e->getMessage());
    
    }

    $bdd->beginTransaction();
    $req = $bdd->query('SELECT * FROM personnage');
    $bdd->commit();

    while($donnees = $req->fetch(PDO::FETCH_ASSOC)){

        $perso = new Personnage($donnees);

        echo $perso->getNom(), ' a ', $perso->getForcePerso(), ' de force, ', $perso->getDegats() . ' de dégâts, ' . $perso->getExperience(), ' d\'expérience et est au niveau '. $perso->getNiveau();
        echo'<br>';
    }

?>