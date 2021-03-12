# Evaluation Laravel

## Récupérer ce projet
Se mettre dans le dossier souhaité, puis utiliser cette commande :
```bash
git clone https://github.com/Kolphren/eval_laravel.git .
```
Faire une copie du ```.env.example``` et la nommer ```.env```, puis :
```bash
composer install
php artisan migrate --seed
```
## Préparation

- Créez une base de données.
- Modifier les lignes suivantes du fichier ```.env```:
    - DB_DATABASE='nom_de_votre_bdd'
    - DB_PASSWORD='votre_mot_de_passe'

# Utilisation de l'application

## Consultation des personnages et des dessinateurs 

 - Des liens dans le header permettent d'accéder aux tableaux listant les personnage et les dessinateurs enregistrés.

## Ajouter des personnages et des dessinateurs

 - Deux liens dans le header permettent quant à eux d'ajouter des personnages et des dessinateurs.
 - Vous serez redirigé vers le tableau descriptif correspondant à la catégorie dans laquelle vous avez fait un ajout.
  
## Modification des personnages et des dessinateurs

 - Un bouton 'modifier' dans chaque tableau permet de modifier les informations d'un personnage ou d'un dessinateur.
 - Vous serez redirigé vers le tableau descriptif correspondant à la catégorie dans laquelle vous avez fait un ajout.

## Suppression des personnages et des dessinateurs

 - Un bouton 'supprimer' permet d'effacer de ka base de donnée un personnage ou un dessinateur.
 - Vous serez redirigé vers le tableau descriptif correspondant à la catégorie dans laquelle vous avez fait un ajout.
