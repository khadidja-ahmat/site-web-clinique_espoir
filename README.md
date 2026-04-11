# Site Web Clinique Espoir

Application web de gestion pour la **Clinique Espoir**, développée avec **Laravel 9**.  
Le projet centralise les principales opérations d'une structure médicale: gestion des patients, médecins, rendez-vous, consultations, ordonnances, employés et historiques médicaux.

L'objectif est simple: proposer une interface claire pour organiser les informations médicales et administratives d'une clinique, avec des modules faciles à utiliser et une structure Laravel propre à faire évoluer.

---

## Sommaire

- [Aperçu du projet](#apercu-du-projet)
- [Fonctionnalités principales](#fonctionnalites-principales)
- [Technologies utilisées](#technologies-utilisees)
- [Structure du projet](#structure-du-projet)
- [Installation locale](#installation-locale)
- [Configuration de la base de données](#configuration-de-la-base-de-donnees)
- [Routes principales](#routes-principales)
- [API disponible](#api-disponible)
- [Commandes utiles](#commandes-utiles)
- [Sécurité et fichiers ignorés](#securite-et-fichiers-ignores)
- [Auteur](#auteur)

---

## Aperçu du projet

**Clinique Espoir** est une application Laravel conçue pour accompagner la gestion quotidienne d'un établissement de santé.

Elle permet de suivre:

- les dossiers des patients;
- les informations des médecins;
- les rendez-vous médicaux;
- les consultations effectuées;
- les ordonnances prescrites;
- les employés de la clinique;
- les historiques médicaux liés aux patients.

Le projet contient aussi des pages publiques comme l'accueil, la page à propos et la page contact.

---

## Fonctionnalités principales

### Gestion des patients

- Ajouter un nouveau patient.
- Afficher la liste des patients.
- Modifier les informations d'un patient.
- Supprimer un patient.
- Enregistrer les informations importantes: nom, date de naissance, genre, adresse, téléphone, ACO et AFTO.

### Gestion des médecins

- Ajouter un médecin.
- Afficher la liste des médecins.
- Modifier les informations d'un médecin.
- Supprimer un médecin.
- Gérer les informations comme le nom, le genre, la spécialité, l'adresse, le téléphone, l'email et l'image.

### Gestion des rendez-vous

- Créer un rendez-vous entre un patient et un médecin.
- Afficher les rendez-vous avec les informations liées au patient et au médecin.
- Modifier la date, le type ou le statut du rendez-vous.
- Supprimer un rendez-vous.

### Gestion des consultations

- Enregistrer une consultation.
- Associer une consultation à un patient et à un médecin.
- Suivre le type de consultation et le résultat.
- Modifier ou supprimer une consultation.

### Gestion des ordonnances

- Ajouter une ordonnance pour un patient.
- Renseigner le médicament, le dosage, la fréquence d'utilisation, la durée de prescription et les dates importantes.
- Modifier ou supprimer une ordonnance.

### Gestion des employés

- Ajouter les employés de la clinique.
- Gérer leur poste, contact, email, adresse et image.
- Modifier ou supprimer une fiche employé.

### Gestion des historiques médicaux

- Enregistrer les antécédents d'un patient.
- Suivre les résultats, prescriptions et tests médicaux.
- Modifier ou supprimer un historique.

---

## Technologies utilisées

- **Laravel 9**: framework PHP principal.
- **PHP 8.0+**: langage côté serveur.
- **MySQL**: base de données relationnelle.
- **Blade**: moteur de templates Laravel.
- **Bootstrap / CSS / JavaScript**: interface utilisateur.
- **Vite**: compilation des assets front-end.
- **Composer**: gestion des dépendances PHP.
- **npm**: gestion des dépendances JavaScript.
- **Git & GitHub**: versionnement et hébergement du code.

---

## Structure du projet

```text
clinique/
├── app/
│   ├── Http/Controllers/    # Contrôleurs web et API
│   └── Models/              # Modèles Laravel
├── config/                  # Configuration Laravel
├── database/                # Migrations et seeders
├── public/                  # Fichiers publics, images, CSS, JS
├── resources/
│   ├── css/                 # Styles de l'application
│   ├── js/                  # JavaScript source
│   └── views/               # Pages Blade
├── routes/
│   ├── web.php              # Routes web
│   └── api.php              # Routes API
├── storage/                 # Cache, sessions, logs
├── tests/                   # Tests Laravel
├── .env.example             # Exemple de configuration
├── composer.json            # Dépendances PHP
├── package.json             # Dépendances JavaScript
└── README.md                # Documentation du projet
```

---

## Installation locale

### 1. Cloner le projet

```bash
git clone https://github.com/khadidja-ahmat/site-web-clinique_espoir.git
cd site-web-clinique_espoir
```

### 2. Installer les dépendances PHP

```bash
composer install
```

### 3. Installer les dépendances JavaScript

```bash
npm install
```

### 4. Créer le fichier d'environnement

```bash
cp .env.example .env
```

Sur Windows PowerShell, utiliser plutôt:

```powershell
Copy-Item .env.example .env
```

### 5. Générer la clé Laravel

```bash
php artisan key:generate
```

### 6. Configurer la base de données

Dans le fichier `.env`, adapter les informations MySQL:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=clinique
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Lancer les migrations disponibles

```bash
php artisan migrate
```

### 8. Lancer le serveur Laravel

```bash
php artisan serve
```

L'application sera disponible sur:

```text
http://127.0.0.1:8000
```

### 9. Compiler les assets front-end

Pour le développement:

```bash
npm run dev
```

Pour générer les fichiers optimisés:

```bash
npm run build
```

---

## Configuration de la base de données

Les modèles du projet utilisent les tables suivantes:

| Module | Table utilisée |
| --- | --- |
| Patients | `patient` |
| Médecins | `medecin` |
| Rendez-vous | `rendezvous` |
| Consultations | `consultation` |
| Ordonnances | `ordonnance` |
| Employés | `employe` |
| Historiques | `historique` |

> Note importante: le dépôt contient les modèles et contrôleurs de ces modules, mais les migrations personnalisées des tables métier ne sont pas encore incluses. Pour installer le projet sur un nouvel ordinateur, il faudra créer ces tables avec des migrations Laravel ou importer une base de données existante.

---

## Routes principales

### Pages publiques

| Page | URL |
| --- | --- |
| Accueil | `/home` |
| À propos | `/about` |
| Contact | `/contact` |

### Modules de gestion

| Module | Liste | Création |
| --- | --- | --- |
| Patients | `/patient` | `/create_p` |
| Médecins | `/medecin` | `/create_m` |
| Rendez-vous | `/rendezvous` | `/create_r` |
| Consultations | `/consultation` | `/create_c` |
| Ordonnances | `/ordonnance` | `/create_o` |
| Employés | `/employe` | `/create_e` |
| Historiques | `/historique` | `/create_h` |

Chaque module possède aussi des routes pour modifier, mettre à jour et supprimer les données.

---

## API disponible

Le projet contient quelques routes API dans `routes/api.php`.

| Méthode | Endpoint | Description |
| --- | --- | --- |
| GET | `/api/patients` | Liste des patients |
| POST | `/api/patient` | Création d'un patient |
| PUT | `/api/patient/{id}` | Modification d'un patient |
| DELETE | `/api/patient/{id}` | Suppression d'un patient |
| GET | `/api/consultations` | Liste des consultations |
| POST | `/api/consultation` | Création d'une consultation |

---

## Commandes utiles

Vérifier l'état Git:

```bash
git status
```

Ajouter les modifications:

```bash
git add .
```

Créer un commit:

```bash
git commit -m "Description de la modification"
```

Envoyer sur GitHub:

```bash
git push
```

Vider les caches Laravel:

```bash
php artisan optimize:clear
```

Lancer les tests:

```bash
php artisan test
```

---

## Sécurité et fichiers ignorés

Certains fichiers ne doivent pas être envoyés sur GitHub:

- `.env`: contient les informations sensibles du projet.
- `vendor/`: dépendances PHP installées par Composer.
- `node_modules/`: dépendances JavaScript.
- `storage/logs/`: logs locaux de Laravel.
- `.idea/`: configuration locale de l'éditeur.

Ces fichiers sont protégés par `.gitignore`.

---

## Améliorations possibles

- Ajouter les migrations pour toutes les tables métier.
- Ajouter une authentification pour protéger l'espace d'administration.
- Améliorer la validation des formulaires.
- Ajouter une recherche et des filtres dans les listes.
- Ajouter des tableaux de bord statistiques.
- Ajouter des tests pour les modules principaux.
- Finaliser et sécuriser les routes API.

---

## Auteur

Projet réalisé par **Khadidja Ahmat Hassan**.

Repository GitHub:

```text
https://github.com/khadidja-ahmat/site-web-clinique_espoir
```
