<?php

class Utilisateur{
    private int $idUtilisateur;
    private string $nom;          
    private string $prenom;        
    private string $password;      
    private string $email;         
    private Role $role ;        
    
    
    public function getIdUtilisateur(): int {
        return $this->idUtilisateur;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getRole(): string {
        return $this->role;
    }


    public function setNom(string $nom): void {
        if (empty($nom)) {
            throw new Exception("Le nom  est obligatoire.");
        }
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom): void {
        if (empty($prenom)) {
            throw new Exception("Le prénom est obligatoire.");
        }
        $this->prenom = $prenom;
    }

    public function setEmail(string $email): void {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("L'adresse email n'est pas valide.");
        }
        $this->email = $email;
    }

    public function setPassword(string $password): void {
        if (empty($password)) {
            throw new Exception("Le mot de passe est obligatoire.");
        }
        $this->password = $password;
    }

    public function setRole(string $role): void {
        if (empty($role)) {
            throw new Exception("Le rôle est obligatoire.");
        }
        $this->role = $role;
    }
}

