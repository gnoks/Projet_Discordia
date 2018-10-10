<?php
/**
* Model User
* Copyright :  Tous droits réservés.
* Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
* Version 0.1
*/
class User{
    /**
     * Nom
     *
     * @var string
     */
     private $_id;
    /**
     * Nom
     *
     * @var string
     */
    private $_nom;
    /**
     * Prénom
     *
     * @var string
     */
    private $_prenom;
    /**
     * Email
     *
     * @var string
     */
    private $_email;
    /**
     * Mot de passe
     *
     * @var string
     */
    private $_mdp;
    /**
     * Pseudo
     *
     * @var string
     */
    private $_pseudo;

    /**
     * Date Naissance
     *
     * @var string
     */
    private $_dateNaissance;
    /**
     * Date Inscription
     *
     * @var string
     */
    private $_dateInscription;
    /**
     * Hero utilisateur
     *
     * @var hero
     */
    private $_hero;

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
     public function get_id()
     {
          return $this->_id;
     }

     /**
      * Set nom
      *
      * @param  string  $_id  Nom
      *
      * @return  self
      */ 
     public function set_id(string $_id)
     {
          $this->_id = $_id;

          return $this;
     }

    /**
     * Get nom
     *
     * @return  string
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set nom
     *
     * @param  string  $_nom  Nom
     *
     * @return  self
     */ 
    public function set_nom(string $_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get prénom
     *
     * @return  string
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set prénom
     *
     * @param  string  $_prenom  Prénom
     *
     * @return  self
     */ 
    public function set_prenom(string $_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get email
     *
     * @return  string
     */ 
    public function get_email()
    {
        return $this->_email;
    }

    /**
     * Set email
     *
     * @param  string  $_email  Email
     *
     * @return  self
     */ 
    public function set_email(string $_email)
    {
        $this->_email = $_email;

        return $this;
    }

    /**
     * Get mot de passe
     *
     * @return  string
     */ 
    public function get_mdp()
    {
        return $this->_mdp;
    }

    /**
     * Set mot de passe
     *
     * @param  string  $_mdp  Mot de passe
     *
     * @return  self
     */ 
    public function set_mdp(string $_mdp)
    {
        $this->_mdp = $_mdp;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return  string
     */ 
    public function get_pseudo()
    {
        return $this->_pseudo;
    }

    /**
     * Set pseudo
     *
     * @param  string  $_pseudo  Pseudo
     *
     * @return  self
     */ 
    public function set_pseudo(string $_pseudo)
    {
        $this->_pseudo = $_pseudo;

        return $this;
    }

    /**
     * Get date Naissance
     *
     * @return  string
     */ 
    public function get_dateNaissance()
    {
        return $this->_dateNaissance;
    }

    /**
     * Set date Naissance
     *
     * @param  string  $_dateNaissance  Date Naissance
     *
     * @return  self
     */ 
    public function set_dateNaissance(string $_dateNaissance)
    {
        $this->_dateNaissance = $_dateNaissance;

        return $this;
    }

    /**
     * Get date Inscription
     *
     * @return  string
     */ 
    public function get_dateInscription()
    {
        return $this->_dateInscription;
    }

    /**
     * Set date Inscription
     *
     * @param  string  $_dateInscription  Date Inscription
     *
     * @return  self
     */ 
    public function set_dateInscription(string $_dateInscription)
    {
        $this->_dateInscription = $_dateInscription;

        return $this;
    }

    /**
     * Get hero utilisateur
     *
     * @return  hero
     */ 
    public function get_hero()
    {
        return $this->_hero;
    }

    /**
     * Set hero utilisateur
     *
     * @param  hero  $_hero  Hero utilisateur
     *
     * @return  self
     */ 
    public function set_hero(hero $_hero)
    {
        $this->_hero = $_hero;

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
      $methodName = 'set_' . $key;
      if(method_exists($this, $methodName)) {
        $this->$methodName($value);
      }
    }
  }

 
}
