<?php

class Evenement {
    protected $titre;
    protected $date;
    protected $lieu;
    protected $capaciteMax;
    protected $nombreParticipants;

    public function __construct($titre, $date, $lieu, $capaciteMax) {
        $this->titre = $titre;
        $this->date = $date;
        $this->lieu = $lieu;
        $this->capaciteMax = $capaciteMax;
        $this->nombreParticipants = 0;
    }


    public function getTitre() {
        return $this->titre;
    }

    public function getDate() {
        return $this->date;
    }

    public function getLieu() {
        return $this->lieu;
    }

    public function getCapaciteMax() {
        return $this->capaciteMax;
    }

    public function getNombreParticipants() {
        return $this->nombreParticipants;
    }


    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setLieu($lieu) {
        $this->lieu = $lieu;
    }

    public function setCapaciteMax($capaciteMax) {
        $this->capaciteMax = $capaciteMax;
    }


    public function estComplet() {
        return $this->nombreParticipants >= $this->capaciteMax;
    }


    public function ajouterParticipant() {
        if (!$this->estComplet()) {
            $this->nombreParticipants++;
            return true;
        }
        return false;
    }


    public function getPlacesRestantes() {
        return $this->capaciteMax - $this->nombreParticipants;
    }


    public function afficherDetails() {
        echo "=== Détails de l'événement ===<br>";
        echo "Titre: " . $this->titre . "<br>";
        echo "Date: " . $this->date . "<br>";
        echo "Lieu: " . $this->lieu . "<br>";
        echo "Capacité maximale: " . $this->capaciteMax . "<br>";
        echo "Nombre de participants: " . $this->nombreParticipants . "<br>";
        echo "Places restantes: " . $this->getPlacesRestantes() . "<br>";
        echo "Complet: " . ($this->estComplet() ? "Oui" : "Non") . "<br>";
    }
}

?>
