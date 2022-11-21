ProjectCar est un petit projet symfony avec les systèmes et mécanique de base du framework Symfony.

## Installation

### Prérequis

- Installer [PHP](https://www.php.net/)
- Installer [Composer](https://getcomposer.org/)
- Installer [Symfony CLI](https://symfony.com/download)
- Avoir une base de données [MySQL](https://www.mysql.com/fr/) ou [PostgreSQL](https://www.postgresql.org/)

### Installation du projet

- Cloner le projet
- Installer les dépendances avec la commande`composer install`
- Configurer la connexion à votre base de données dans le fichier `.env`
- Créer la base de données avec la commande `php bin/console doctrine:database:create`
- Créer les tables avec la commande `php bin/console doctrine:migrations:migrate`
- Charger les fixtures avec la commande `php bin/console doctrine:fixtures:load`
- Lancer le serveur avec la commande `symfony server:start`
- Rendez-vous sur [http://localhost:8000](http://localhost:8000)

## Utilisation

### Visualiser les voitures
- Rendez-vous sur [Home](http://localhost:8000)

### Création d'un utilisateur
- Rendez-vous sur [Register](http://localhost:8000/register)

### Accéder au CRUD des voitures et des marques (en étant connecté)
- CRUD des [voitures](http://localhost:8000/car)
- CRUD des [marques](http://localhost:8000/brand)