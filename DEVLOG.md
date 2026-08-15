```markdown
# 📓 Journal de Développement (DEVLOG)
**Nom & Prénom** : Fatmata Ndiaye  
**Projet** : StoreManager Pro (ERP PHP/POO)  

---

## 1. Suivi Chronologique des Phases

### 🌃 [Vendredi - Phase 1] : Conception & BDD Fallback

- **18h-22h** : 
- **Ce qui a été fait** : Diagramme de classe,Diagramme de Usecase
- **Difficultés / Obstacles** : Probleme d'analyse des ecrans coté coherence et comment sortir les usescases 

- **22h-01h** : 
- ** Ce qui a été fait** : Scripts schema.sql (PostgreSQL) et schema_sqlite.sql.
- ** Difficultés / Obstacles** :Difference entre Postgres et sqlite,Pourquoi utiliser les deux en meme temps

 **08h-10h** : 
- ** Ce qui a été fait** : Singleton Database & Fallback Automatique
- ** Difficultés / Obstacles** :Erreur de  syntax sur la declaration de la variable à l'interieur de la methode getConnexion() 
                               Comment essayer de connecter les deux dans une seule methode
                               Echec Connexion postgres faute mot de passe incorect
                               Absence du driver PHP-SQLite (php-sqlite3)