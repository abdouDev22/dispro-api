# Dispro API

Bienvenue sur la documentation de l'API Dispro. Cette API permet de gérer les voitures, les utilisateurs, les compteurs, et les maintenances pour l'entreprise Dispro. Vous trouverez ci-dessous les points d'accès (endpoints) disponibles ainsi que leurs descriptions.

## Table des Matières

- [Installation](#installation)
- [Configuration](#configuration)
- [Utilisation](#utilisation)
- [Endpoints](#endpoints)
  - [Cars](#cars)
  - [Users](#users)
  - [Counts](#counts)
  - [Maintenances](#maintenances)
- [Contribuer](#contribuer)
- [Licence](#licence)

## Installation

Pour installer ce projet, suivez ces étapes :

1. Clonez le dépôt sur votre machine locale :
   ```bash
   git clone https://github.com/votre-utilisateur/dispro-api.git
   ```

2. Installez les dépendances du projet via Composer :
   ```bash
   composer install
   ```

3. Configurez votre base de données dans le fichier `.env`.

4. Exécutez les migrations de base de données :
   ```bash
   php artisan migrate
   ```

5. Lancez le serveur de développement :
   ```bash
   php artisan serve
   ```

## Configuration

Assurez-vous que les variables d'environnement nécessaires sont définies dans votre fichier `.env`, notamment les informations de connexion à la base de données.

## Utilisation

L'API Dispro expose plusieurs endpoints pour gérer les différentes entités de l'application (voitures, utilisateurs, compteurs, maintenances). Vous pouvez utiliser ces endpoints pour effectuer des opérations CRUD (Créer, Lire, Mettre à jour, Supprimer).

## Endpoints

### Cars

- **GET** `/api/cars` - Récupérer la liste de toutes les voitures.
- **POST** `/api/cars` - Créer une nouvelle voiture.
- **GET** `/api/cars/{id}` - Récupérer les détails d'une voiture spécifique.
- **PUT/PATCH** `/api/cars/{id}` - Mettre à jour les détails d'une voiture spécifique.
- **DELETE** `/api/cars/{id}` - Supprimer une voiture spécifique du système.

### Users

- **GET** `/api/users` - Récupérer la liste de tous les utilisateurs.
- **POST** `/api/users` - Créer un nouveau compte utilisateur.
- **GET** `/api/users/{id}` - Récupérer les détails d'un utilisateur spécifique.
- **PUT/PATCH** `/api/users/{id}` - Mettre à jour les détails d'un utilisateur spécifique.
- **DELETE** `/api/users/{id}` - Supprimer un utilisateur spécifique du système.

### Counts

- **GET** `/api/counts` - Récupérer la liste de tous les compteurs (e.g., enregistrements de kilométrage).
- **POST** `/api/counts` - Créer un nouvel enregistrement de compteur.
- **GET** `/api/counts/{id}` - Récupérer les détails d'un compteur spécifique.
- **PUT/PATCH** `/api/counts/{id}` - Mettre à jour les détails d'un compteur spécifique.
- **DELETE** `/api/counts/{id}` - Supprimer un compteur spécifique du système.

### Maintenances

- **GET** `/api/maintenances` - Récupérer la liste de tous les enregistrements de maintenance.
- **POST** `/api/maintenances` - Créer un nouvel enregistrement de maintenance.
- **GET** `/api/maintenances/{id}` - Récupérer les détails d'un enregistrement de maintenance spécifique.
- **PUT/PATCH** `/api/maintenances/{id}` - Mettre à jour les détails d'un enregistrement de maintenance spécifique.
- **DELETE** `/api/maintenances/{id}` - Supprimer un enregistrement de maintenance spécifique du système.

## Contribuer

Les contributions sont les bienvenues ! Veuillez consulter le guide de contribution pour plus de détails.

## Licence

Ce projet est sous licence MIT. Consultez le fichier [LICENSE](LICENSE) pour plus de détails.
