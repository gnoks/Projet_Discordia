<?php
namespace App\Classes;

class Utilisateur {
    /**
     * id
     *
     * @var string
     */
     private $id;
    /**
     * Nom
     *
     * @var string
     */
    private $nom;
    /**
     * Prénom
     *
     * @var string
     */
    private $prenom;
    /**
     * Email
     *
     * @var string
     */
    private $email;
    /**
     * Mot de passe
     *
     * @var string
     */
    private $mdp;
    /**
     * Pseudo
     *
     * @var string
     */
    private $pseudo;

    /**
     * Date Inscription
     *
     * @var string
     */
    private $dateInscription;
    /**
     * Hero utilisateur
     *
     * @var hero
     */
    private $hero;

    /** ________________________________________________________________________________________________  */

    /** _____________________________________CONSTRUCT__________________________________________________  */

    public function __construct(array $data) {
        $this->hydrate($data);   
      }
    
      public function __destruct() {
       
      }

      


    /** ________________________________________________________________________________________________  */
    
    /** _________________________________GETTERS & SETTERS______________________________________________  */
    
    /**
      * Get nom
      *
      * @return  string
      */ 
     public function getId()
     {
          return $this->id;
     }

     /**
      * Set nom
      *
      * @param  string  $id  Nom
      *
      * @return  self
      */ 
     public function setId(string $id)
     {
          $this->id = $id;

          return $this;
     }

    /**
     * Get nom
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * Set nom
     *
     * @param  string  $nom  Nom
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get prénom
     *
     * @return  string
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set prénom
     *
     * @param  string  $prenom  Prénom
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param  string  $email  Email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get mot de passe
     *
     * @return  string
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set mot de passe
     *
     * @param  string  $_mdp  Mot de passe
     *
     * @return  self
     */ 
    public function setMdp(string $mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return  string
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set pseudo
     *
     * @param  string  $pseudo  Pseudo
     *
     * @return  self
     */ 
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }


    /**
     * Get date Inscription
     *
     * @return  string
     */ 
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set date Inscription
     *
     * @param  string  $_dateInscription  Date Inscription
     *
     * @return  self
     */ 
    public function setDateInscription(string $dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get hero utilisateur
     *
     * @return  hero
     */ 
    public function getHero()
    {
        return $this->hero;
    }

    /**
     * Set hero utilisateur
     *
     * @param  hero  $_hero  Hero utilisateur
     *
     * @return  self
     */ 
    public function setHero(hero $hero)
    {
        $this->hero = $hero;

        return $this;
    }

      /**
   * Hydratation
   *
   * @param array $data
   * @return void
   */
  public function hydrate(array $data) {
    foreach( $data as $key=>$value ) {
        $key = substr($key,4);
        $key =ucfirst($key);
        $methodName = 'set' . $key;
        if(method_exists($this, $methodName)) {
        $this->$methodName($value);
      }
    }
  }

}