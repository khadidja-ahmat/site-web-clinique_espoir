# Clinique Espoir – Gestion d'une clinique

Application web de gestion d'une clinique, développée en **Laravel** : un site vitrine public et une partie réservée au personnel (patients, médecins, rendez-vous, consultations, ordonnances, employés, historiques médicaux).

> Ce projet est la version **100 % Laravel**. Une autre version de la même clinique, dont l'administration est écrite en PHP natif avec mon générateur **ChariPHP**, est dans le dépôt [Site-web-clinique-Espoir-ChariPHP](https://github.com/khadidja-ahmat/Site-web-clinique-Espoir-ChariPHP), construit avec mon outil [ChariPHP](https://github.com/khadidja-ahmat/ChariPHP).

## Fonctionnalités

- Site public : accueil, à propos, contact
- Connexion du personnel (session, limitation à 5 tentatives par minute, déconnexion)
- Toutes les pages de gestion sont protégées : sans connexion, on est renvoyé vers `/login`
- Gestion complète (liste, ajout, modification, suppression) des patients, médecins, rendez-vous, consultations, ordonnances, employés et historiques
- Validation des formulaires (types, valeurs autorisées, existence des patients et médecins liés)
- Envoi de photos contrôlé : image valide uniquement (jpg, png, webp), 2 Mo maximum
- API JSON (patients, consultations) protégée par Laravel Sanctum
- Migrations, compte administrateur lu depuis `.env`, jeu de données fictives, tests automatisés

## Technologies

PHP 8.0+, Laravel 9, Eloquent, Blade, Bootstrap, MySQL (SQLite pour les tests), PHPUnit, Sanctum.

## Installation

Prérequis : PHP 8.0+, Composer, MySQL ou MariaDB.

```bash
git clone https://github.com/khadidja-ahmat/site-web-clinique_espoir.git
cd site-web-clinique_espoir
composer install
cp .env.example .env
php artisan key:generate
```

Créez une base **vide** (par exemple `clinique`), puis dans `.env` renseignez `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`, ainsi que `ADMIN_EMAIL` et `ADMIN_PASSWORD` (choisissez un mot de passe long et unique). Ensuite :

```bash
php artisan migrate --seed
php artisan serve
```

Ouvrez <http://127.0.0.1:8000> puis connectez-vous sur `/login` avec l'e-mail et le mot de passe de `.env`.

### Données de démonstration (facultatif)

```bash
php artisan db:seed --class=DemoDataSeeder
```

Ajoute des patients, médecins, rendez-vous… entièrement fictifs.

### Carte Google Maps (facultatif)

Renseignez `GOOGLE_MAPS_KEY` dans `.env`. Sans clé, la carte n'est simplement pas affichée.

## Tests

```bash
php artisan test
```

Les tests vérifient les pages publiques, la protection des pages de gestion et de l'API, la connexion/déconnexion, la validation des formulaires et l'affichage de toutes les listes.

## Remarques

- Supprimer un patient supprime aussi ses rendez-vous, consultations, ordonnances et historiques (suppression en cascade).
- Les photos envoyées sont stockées dans `public/images/articles/` et ne sont pas versionnées.

## Auteur

Projet réalisé par **Khadidja Ahmat Hassan**.