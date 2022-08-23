<?php
    class Article{
        /*---------------------------------------------
                        Attributs
        -----------------------------------------------*/
        private ?int $id_article;
        private ?string $nom_article;
        private ?float $prix_article;
        /*---------------------------------------------
                        Constructeur
        -----------------------------------------------*/
        public function __construct(?string $nom, ?float $prix){
            $this->nom_article = $nom;
            $this->prix_article = $prix;
        }
        /*---------------------------------------------
                        Getter et Setter
        -----------------------------------------------*/
        public function getIdArt():?int{
            return $this->id_article;
        }
        public function getNomArt():?string{
            return $this->nom_article;
        }
        public function getPrixArt():?float{
            return $this->prix_article;
        }
        public function setIdArt(?int $id):void{
            $this->id_article = $id;
        }
        public function setNomArt(?string $nom):void{
            $this->nom_article = $nom;
        }
        public function setPrixArt(?float $prix):void{
            $this->prix_article = $prix;
        }
    }
?>