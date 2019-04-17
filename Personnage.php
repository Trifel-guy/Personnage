<?php
    class Personnage{
        
        private $id;
        private $nom;
        private $forcePerso;
        private $degats;
        private $niveau;
        private $experience;

        //constructor
        public function __construct($id,$nom,$forcePerso,$degats,$niveau,$experience){

        }

        //getters
        public function getId(){
            return $this->id;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getForcePerso(){
            return $this->forcePerso;
        }

        public function getDegats(){
            return $this->degats;
        }

        public function getNiveau(){
            return $this->niveau;
        }

        public function getExperience(){
            return $this->experience;
        }

        //setters
        public function setId($id){
            
            $id = (int)$id;

            if($id >0){
                $this->id = $id;
            }
        }

        public function setNom($nom){
    
            if(is_string($nom)){
                $this->nom = $nom;
            }
        }

        public function setForcePerso($forcePerso){
            
            $forcePerso = (int)$forcePerso;

            if($forcePerso >=1 && $forcePerso <= 100){
                $this->forcePerso = $forcePerso;
            }
        }

        public function setDegats($degats){

            $degats = (int)$degats;

            if($degats>= 0 && $degats<= 100){
                $this->degats = $degats;
            }
        }

        public function setNiveau($niveau){

            $niveau = (int)$niveau;

            if($niveau >= 1 && $niveau <= 100){
                $this->niveau = $niveau;
            }
        }

        public function setExperience($experience){

            $experience = (int)$experience;
            
            if($experience >=1 && $experience <= 100){
                $this->experience = $experience;
            }
        }

        //hydratation
        public function hydrater(array $donnees){
            foreach($donnees as $key=>$value){
                $method = 'set'.ucfirst($key);

                if(method_exists($this,$method)){
                    $this->$method($value);

                }


            }
            
            
            
            
            
            /*if(isset($donnees['id'])){
                $this->setId($donnees['id']);
            }

            if(isset($donnees['nom'])){
                $this->setNom($donnees['nom']);
            }

            if(isset($donnees['forcePerso'])){
                $this->setForcePerso($donnees['forcePerso']);
            }

            if(isset($donnees['degats'])){
                $this->setDegats($donnees['degats']);
            }

            if(isset($donnees['niveau'])){
                $this->setNiveau($donnees['niveau']);
            }

            if(isset($donnees['experience'])){
                $this->setExperience($donnees['experience']);
            }*/


        }



    }
?>