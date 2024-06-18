# BileMO

## Description
BileMo est une entreprise offrant toute une sélection de téléphones mobiles haut de gamme.

Le business modèle de BileMo n’est pas de vendre directement ses produits sur le site web, mais de fournir à toutes les plateformes qui le souhaitent l’accès au catalogue via une API (Application Programming Interface). Il s’agit donc de vente exclusivement en B2B (business to business).

Donc, On va exposer un certain nombre d’API pour que les applications des autres plateformes web puissent effectuer des opérations.

## Getting started

Le framework symfony et API PLATFORM est utilisé pour la creation de ce projet

## Prérequis

- PHP 8.1 ou supérieur
- Composer
- Symfony 7

## Installation

Suivez ces étapes pour démarrer le projet :

**Cloner le dépôt**

```sh
git https://github.com/bln102/bilemo_api.git
cd bilemo_api
```

## Installer les dépendances :

```sh
composer install
```

**Configurer les variables d'environnement :\***

Créer un fichier `.env` et configurez-le selon votre environnement.

Mettez à jour l'URL de la base de données et d'autres paramètres spécifiques à l'environnement dans `.env.local`.

Créer la base de données :

```sh
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
```

## Lancer le serveur local Symfony :

```sh
symfony server:start --port=8085
```

L'API sera disponible à l'adresse `https://127.0.0.1:8085/api`.

## Utilisation

Pour accéder à l'api, effectuez des requêtes vers l'api `https://127.0.0.1:8085/api`.

Exécuter les migrations de base de données :

```sh
php bin/console doctrine:migrations:migrate
```
