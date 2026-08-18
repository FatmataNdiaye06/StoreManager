<?php

class Fournisseur{
   private int $idFournisseur;
   private string $nomEntreprise;
   private string $telephone;
   private string $email;
   private string $adresse;
   private Utilisateur $utilisateur;


  public function getIdFournisseur():int{
      return $this->idFournisseur;
   }
   public function getNomEntreprise():string{
      return $this->nomEntreprise;
   }
   public function getTelephone():string{
      return $this->telephone;
   }
   public function getEmail():string{
      return $this->email;
   }
   public function getAdresse():string{
      return $this->adresse;
   }
   
    public function getUtilisateur():Utilisateur{
      return $this->utilisateur;
   }
   public function setNomEntreprise(string $nomEntreprise):void{
      if (empty($nomEntreprise)) {
         throw new Exception("Le nom de l'entreprise est obligatoire");
      }
      $this->nomEntreprise=$nomEntreprise;
   }
  
   public function setTelephone(string $telephone):void{
      if (empty($telephone)) {
         throw new Exception("Le Telephone est obligatoire");
      }
      $this->telephone=$telephone;
   }
   public function setAdresse(string $adresse):void{
      if (empty($adresse)) {
         throw new Exception("L'adresse est obligatoire");
      }
      $this->adresse=$adresse;
   }
    public function setEmail(string $email): void {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("L'adresse email n'est pas valide.");
        }
        $this->email = $email;
    }
    public function setUtilisateur(Utilisateur $utilisateur):void{
      $this->utilisateur=$utilisateur;
   }
   

   public function __construct(string $nomEntreprise,string $telephone,
    string $email,string $adresse, Utilisateur $utilisateur)
   {
      $this->setNomEntreprise($nomEntreprise);
      $this->setTelephone($telephone);
      $this->setEmail($email);
      $this->setAdresse($adresse);
      $this->setIdUtilisateur($utilisateur);

   }
}
