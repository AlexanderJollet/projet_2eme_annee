# EMOVE

Emove est un site de location de véhicule électrique.

## Pré requis
docker, docker-compose

## Installation

```bash
git clone https://github.com/AlexanderJollet/projet_2eme_annee.git
```
```bash
cd projet_2eme_annee/
```
```bash
docker-compose up -d
```
Puis importé le fichier emove.sql dans la base de donnée "emove" 

## Adresse Locale pour accéder à la BDD et au site 

http://localhost:8080/ (BDD)
http://localhost:5000/ (Website)


## Running test

```bash
php bin/phpunit --testdox
```
