<?php

class Client{
   private int $idClient;
   private string $nom;
   private string $prenom;
   private string $telephone;
   private string $email;
   private float $limitCredit;
   private Utilisateur $idUtilisateur;


   public function getIdClient():int{
      return $this->idClient;
   }
   public function getNom():string{
      return $this->nom;
   }
   public function getPrenom():string{
      return $this->prenom;
   }
   public function getTelephone():string{
      return $this->telephone;
   }
   public function getEmail():string{
      return $this->email;
   }
   public function getLimitCredit():float{
      return $this->limitCredit;
   }
    public function getIdUtilisateur():Utilisateur{
      return $this->IdUtilisateur;
   }
   public function setNom(string $nom):void{
      if (empty($nom)) {
         throw new Exception("Le nom est obligatoire");
      }
      $this->nom=$nom;
   }
   public function setPrenom(string $prenom):void{
      if (empty($prenom)) {
         throw new Exception("Le Prenom est obligatoire");
      }
      $this->prenom=$prenom;
   }
   public function setTelephone(string $telephone):void{
      if (empty($telephone)) {
         throw new Exception("Le Telephone est obligatoire");
      }
      $this->telephone=$telephone;
   }
    public function setEmail(string $email): void {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("L'adresse email n'est pas valide.");
        }
        $this->email = $email;
    }
     public function setIdUtilisateur(Utilisateur $IdUtilisateur):void{
      $this->IdUtilisateur=$IdUtilisateur;
   }
   public function setLimiteCredit(float $limitCredit):void{
      if ($limitCredit<0) {
         throw new Exception("Limite Credit doit etre positif");
      }
      $this->limitCredit=$limitCredit;
   }

   public function __construct(int $idClient,string $nom,string $prenom,string $telephone,
    string $email,float $limitCredit, Utilisateur $IdUtilisateur)
   {
      $this->setNom($nom);
      $this->setPrenom($prenom);
      $this->setTelephone($telephone);
      $this->setEmail($email);
      $this->setLimiteCredit($limitCredit);
      $this->setIdUtilisateur($IdUtilisateur);

   }

}


