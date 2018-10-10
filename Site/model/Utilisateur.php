<?php

class Utilisateur {
    private $pseudo;
    private $motDePasse;
    private $nom;
    private $prenom;
    private $email;
    private $dateNaissance;
    private $dateInscription;

    public function __construct() {
        $this->pseudo = $pseudo;
        $this->motDePasse = $motDePasse;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->dateNaissance = $dateNaissance;
        $this->dateInscription = $dateInscription;
    }

    public function __destruct() {

    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

}