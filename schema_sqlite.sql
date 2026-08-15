CREATE TABLE Utilisateur (
    id_utilisateur INTEGER PRIMARY KEY,
    nom TEXT NOT NULL,
    prenom TEXT NOT NULL,
    password TEXT NOT NULL,
    email TEXT UNIQUE NOT NULL,
    role TEXT NOT NULL
);

CREATE TABLE client (
    id_client INTEGER PRIMARY KEY ,
    nom TEXT NOT NULL,
    prenom TEXT NOT NULL,
    telephone TEXT,
    email TEXT,
    limit_credit NUMERIC CHECK (limit_credit >= 0),
    id_utilisateur INTEGER NOT NULL,
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE role(
     id_role SERIAL PRIMARY KEY ,
     etat TEXT NOT NULL
);

CREATE TABLE fournisseur (
    id_fournisseur INTEGER PRIMARY KEY ,
    nom_entreprise TEXT NOT NULL,
    telephone TEXT,
    adresse_depot TEXT, 
    email TEXT,
    id_utilisateur INTEGER NOT NULL,
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE produit (
    id_produit INTEGER PRIMARY KEY ,
    libelle TEXT NOT NULL,
    qte_stock INTEGER NOT NULL CHECK (qte_stock >= 0),
    prix NUMERIC NOT NULL CHECK (prix > 0),
    id_utilisateur INTEGER NOT NULL,
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE vente (
    id_vente INTEGER PRIMARY KEY , 
    montant_total NUMERIC NOT NULL CHECK (prix_vente >= 0),
    montant_verser NUMERIC NOT NULL CHECK (montant_verser >= 0),
    id_client INTEGER NOT NULL,
    FOREIGN KEY (id_client) REFERENCES client(id_client)
);

CREATE TABLE dette (
    id_dette INTEGER PRIMARY KEY ,
    date_creation TEXT DEFAULT CURRENT_TIMESTAMP,
    montant_initiale NUMERIC(12, 2) NOT NULL CHECK (montant_initiale >= 0), 
    id_vente INTEGER UNIQUE NOT NULL,
    FOREIGN KEY (id_vente) REFERENCES vente(id_vente)
);

CREATE TABLE mode_paiement (
    id_mode_paiement INTEGER PRIMARY KEY , 
    libelle TEXT NOT NULL
);

CREATE TABLE paiement (
    id_paiement INTEGER PRIMARY KEY ,
    montant_payer NUMERIC NOT NULL CHECK (montant_payer > 0),
    id_vente INTEGER NOT NULL,
    id_mode_paiement INTEGER NOT NULL,
    FOREIGN KEY (id_vente) REFERENCES vente(id_vente),
    FOREIGN KEY (id_mode_paiement) REFERENCES mode_paiement(id_mode_paiement)
);

CREATE TABLE ligne_vente (
    id_ligne_vente INTEGER PRIMARY KEY ,
    qte_vendue INTEGER NOT NULL CHECK (qte_vendue > 0),
    prix_vente NUMERIC NOT NULL CHECK (prix_vente > 0),
    sous_total NUMERIC NOT NULL CHECK (sous_total >= 0),
    id_vente INTEGER NOT NULL,
    id_produit INTEGER NOT NULL,
    FOREIGN KEY (id_vente) REFERENCES vente(id_vente),
    FOREIGN KEY (id_produit) REFERENCES produit(id_produit)
);

CREATE TABLE approvisionnement (
    id_approvisionnement INTEGER PRIMARY KEY,
    ref_bl TEXT NOT NULL,
    valeur_lot NUMERIC NOT NULL CHECK (valeur_lot >= 0),
    statut TEXT NOT NULL,
    id_fournisseur INTEGER NOT NULL,
    FOREIGN KEY (id_fournisseur) REFERENCES fournisseur(id_fournisseur)
);

CREATE TABLE ligne_appro (
    id_ligne_appro INTEGER PRIMARY KEY,
    qte_appro INTEGER NOT NULL CHECK (qte_appro > 0),
    qte_recu INTEGER NOT NULL CHECK (qte_recu >= 0),
    prix_achat NUMERIC NOT NULL CHECK (prix_achat > 0),
    sous_total NUMERIC NOT NULL CHECK (sous_total >= 0),
    id_approvisionnement INTEGER NOT NULL,
    id_produit INTEGER NOT NULL,
    FOREIGN KEY (id_approvisionnement) REFERENCES approvisionnement(id_approvisionnement),
    FOREIGN KEY (id_produit) REFERENCES produit(id_produit)
);
