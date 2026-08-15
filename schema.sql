CREATE TABLE Utilisateur (
    id_utilisateur SERIAL PRIMARY KEY,
    nom VARCHAR NOT NULL,
    prenom VARCHAR NOT NULL,
    password VARCHAR NOT NULL,
    email VARCHAR UNIQUE NOT NULL,
    role VARCHAR NOT NULL
);

CREATE TABLE client (
    id_client SERIAL PRIMARY KEY,
    nom VARCHAR NOT NULL,
    prenom VARCHAR NOT NULL,
    telephone VARCHAR,
    limit_credit NUMERIC(12, 2) CHECK (limit_credit >= 0),
    id_utilisateur INT NOT NULL REFERENCES Utilisateur(id_utilisateur) 
);

CREATE TABLE fournisseur (
    id_fournisseur SERIAL PRIMARY KEY,
    nom_entreprise VARCHAR NOT NULL,
    telephone VARCHAR,
    adresse_depot VARCHAR, 
    email VARCHAR,
    id_utilisateur INT NOT NULL REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE produit (
    id_produit SERIAL PRIMARY KEY,
    libelle VARCHAR NOT NULL,
    qte_stock INT NOT NULL CHECK (qte_stock >= 0), 
    prix NUMERIC(12, 2) NOT NULL CHECK (prix > 0), 
    id_utilisateur INT NOT NULL REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE vente (
    id_vente SERIAL PRIMARY KEY, 
    prix_vente NUMERIC(12, 2) NOT NULL CHECK (prix_vente >= 0),
    montant_verser NUMERIC(12, 2) NOT NULL CHECK (montant_verser >= 0), 
    id_client INT NOT NULL REFERENCES client(id_client)
);

CREATE TABLE dette (
    id_dette SERIAL PRIMARY KEY,
    date_creation DATE DEFAULT CURRENT_DATE,
    statut VARCHAR NOT NULL,
    id_vente INT UNIQUE NOT NULL REFERENCES vente(id_vente) 
);

CREATE TABLE mode_paiement (
    id_mode_paiement SERIAL PRIMARY KEY, 
    libelle VARCHAR NOT NULL
);

CREATE TABLE paiement (
    id_paiement SERIAL PRIMARY KEY,
    montant_payer NUMERIC(12, 2) NOT NULL CHECK (montant_payer > 0),
    id_vente INT NOT NULL REFERENCES vente(id_vente),
    id_mode_paiement INT NOT NULL REFERENCES mode_paiement(id_mode_paiement)
);

CREATE TABLE ligne_vente (
    id_ligne_vente SERIAL PRIMARY KEY,
    qte_vendue INT NOT NULL CHECK (qte_vendue > 0), 
    prix_vente NUMERIC(12, 2) NOT NULL CHECK (prix_vente > 0), 
    sous_total NUMERIC(12, 2) NOT NULL CHECK (sous_total >= 0), 
    id_vente INT NOT NULL REFERENCES vente(id_vente),
    id_produit INT NOT NULL REFERENCES produit(id_produit)
);

CREATE TABLE approvisionnement (
    id_approvisionnement SERIAL PRIMARY KEY,
    ref_bl VARCHAR(100) NOT NULL,
    valeur_lot NUMERIC(12, 2) NOT NULL CHECK (valeur_lot >= 0), 
    statut VARCHAR NOT NULL,
    id_fournisseur INT NOT NULL REFERENCES fournisseur(id_fournisseur) 
);

CREATE TABLE ligne_appro (
    id_ligne_appro SERIAL PRIMARY KEY,
    qte_appro INT NOT NULL CHECK (qte_appro > 0), 
    qte_recu INT NOT NULL CHECK (qte_recu >= 0), 
    prix_achat NUMERIC(12, 2) NOT NULL CHECK (prix_achat > 0), 
    sous_total NUMERIC(12, 2) NOT NULL CHECK (sous_total >= 0), 
    id_approvisionnement INT NOT NULL REFERENCES approvisionnement(id_approvisionnement),
    id_produit INT NOT NULL REFERENCES produit(id_produit) 
);
