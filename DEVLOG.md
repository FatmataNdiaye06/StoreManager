```markdown
# 📓 Journal de Développement (DEVLOG)
**Nom & Prénom** : Fatmata Ndiaye  
**Projet** : StoreManager Pro (ERP PHP/POO)  

---

## 1. Suivi Chronologique des Phases

### 🌃 [Vendredi - Phase 1] : Conception & BDD Fallback

- **18h-22h** : Conception UM
- **Ce qui a été fait** : Diagramme de classe,Diagramme de Usecase
- **Difficultés / Obstacles** : Probleme d'analyse des ecrans coté coherence et comment sortir les usescases 

- **22h-01h** : Schéma BDD
- ** Ce qui a été fait** : Scripts schema.sql (PostgreSQL) et schema_sqlite.sql.
- ** Difficultés / Obstacles** :Difference entre Postgres et sqlite,Pourquoi utiliser les deux en meme temps

Installation sqlite
sudo apt install sqlite3
sudo apt update && sudo apt install php-sqlite3
Lorsque je met id_utilisateur INTEGER PRIMARY KEY AUTOINCREMENT,il me souligne un erreur causé par le AUTOINCREMENT



Coté github , j'avais pas remarquer que le projet devrait etre sur une branche main,
j'ai supprimer les branches que j'avais creer ce qui ma fait perdre mes premiers commits.

 **08h-10h** : Database Fallback
- ** Ce qui a été fait** : Singleton Database & Fallback Automatique
- ** Difficultés / Obstacles** :Erreur de  syntax sur la declaration de la variable à l'interieur de la methode getConnexion() 
                               Comment essayer de connecter les deux dans une seule methode
                               Echec Connexion postgres faute mot de passe incorect
                               Absence du driver PHP-SQLite (php-sqlite3)



### ☀️ [Samedi - Phase 2] : POO, Repositories & Ventes POS
- **10h-19h** : Entités POO Pure
            - **Ce qui a été fait** : Changement apporter et ajout des informations dans les fichiers tels que schema.sql,schema.sqlite.sql et le DiagrammeDeClasse.puml 
            pour :
            ----Vente
            ajout attribut montantTotal

            -----Dette
            ajout attribut montant_initiale 

            -----Client
            ajout attribut email 
            Recherche sur encapsulation,geter,setter
            creation des entites POO avec encapsulation et methodes metier

- **Difficultés / Obstacles** :
Donnees manquante dans mes tables et mes diagramme j'etais oblige de migrer dans chaque ficher pour apportes des modifications
J'avais aussi un probleme par rapport a ce que retourne exactement la fonction 
 <!-- public function getIdVente():Vente{
      return $this->idVente;
    } -->  qui est dans dette;   (par rapport au get des clés étrangère)

