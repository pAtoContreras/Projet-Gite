# Projet-Gite
Projet Fil Rouge PROGICA

"Madame Eva Khance, directrice de l'association des propriétaires de gîtes campagnards (PROGICA) désire mettre en place une plate-forme de réservation, en ligne afin de faciliter et fiabiliser la gestion des réservations.

Afin de tester votre réactivité et votre professionnalisme, elle décide avant d'aller plus loin, de vous confier la conception d'un outil à usage interne afin de recenser l'ensemble des biens mis à la location, ainsi que les outils de recherche. La réservation se faisant dans un premier temps directement auprès du propriétaire du bien."

## Gites
Pour chaque gîte, outre celles de son propriétaire, on aura également les coordonnées de la personne à contacter ainsi que ses horaires de disponibilité.

On devra impérativement connaître sa localisation, sa surface habitable, le nombre de chambres et le nombre de couchages, ses équipements.

Si le gîte accepte l'accueil des animaux, il faut en indiquer le tarif.

Il faudra également avoir accès au tarif de location hebdomadaire en fonction de la période de l'année.

Si des services ou équipements sont payants, il faudra en indiquer le coût.

## Recherche
La recherche d'un gîte pourra se faire par différents critères, dont :

Des critères géographiques : région, département, ville. Lorsque le critère est une ville, il faut pouvoir élargir le rayon en indiquant jusqu'à quelle distance à vol d'oiseau, l'on veut chercher.

Des critères d'équipement :

Intérieur : lave-vaisselle, lave-linge, climatisation, télévision

Extérieurs : terrasse, barbecue, piscine privée ou partagée, tennis, ping-pong.

Des critères de service : location de linge, ménage en fin de séjour, accès internet

# Installation

1) Dans le fichier ".env", renseignez vos informations de connexion à mySQL

2) Lancez les commandes suivantes dans le terminal:
(vous pouvez remplacer les "symfony console" par "php bin/console" si vous n'avez pas installé symfony CLI)

Composer update
(charge les dépendances)

symfony console doctrine:database:create
(crée la base de donnée)

symfony console doctrine:migrations:migrate
(Crée les tables de la base de donnée)
 
symfony console doctrine:fixtures:load
(Intègre de fausses données de test dans les tables)

3) "symfony serve" ou "symfony server:start"
puis rendez vous sur la page et le port correspondant dans votre navigateur

