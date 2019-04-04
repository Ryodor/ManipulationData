Présentation du site:

Notre site est un site d’e-commerce permettant de louer les services de super héro ou méchant. Il est disponible pour tout le monde et ne cible personne en particulier, chacun peut donc réaliser ses rêves d’enfant en rencontrant son super héro préféré et passer du temps avec lui.

Base de donnée (Importer creatBase.sql dans phpmyadmin pour importer et importer create_databse.sql dans phpmyadmin pour remplir la database):

Utilisateur: root
Mot de passe: verratti
Nous avons écrit un script créant la base de donnée nécessaire au bon fonctionnement du site. La base de donnée comporte 6 categorie:
-    Hero : Contient les produits et leur informations
-    Team : Contient les differentes equipe et leurs informations
-    Utilisateurs: Contient les differents utilisateurs et leurs imformations
-    Role: tablier relier a utilisateur pour definir les roles admin et utilisateurs
-    Team_Hero: Fait le liant entre les hero et les team auxquel ils appartiennent
-    Location: Table permettant de stocker les informations du panier

Page d’accueil:

Vous pouvez avoir accès à la page d’accueil de n’importe oú sur le site.
La page d’accueil montre une vision d'ensemble du site proposant les articles les plus achetés, les promo ainsi que les nouveauté avec un héro  de chaque catégorie a chaque fois.

Page de Catégories:

Vous pouvez accéder au categorie a n’importe qu’elle moment grâce à un menu déroulant relier a different catégorie à savoir :
-       les avengers
-       la justice league
-       la suicide squad
-       les gardiens de la galaxie
-       les exclusivities

Page tous les produits:

C’est une page accessible de partout sur notre site, regroupant tous les produits ,avec leur prix, de notre site rangés par catégories.

Page de connexion:

C’est une page traditionnelle de connexion, permettant de se connecter grâce à son email et son mot de passe

Page détail produits:

La page détail produits permet de voir le le nom, le groupe, la description, le prix d’un produits, et de l’ajouter au panier.



Page d’inscription:

La page d’inscription n’est accessible que depuis celle de connexion, elle permet de se créer un compte afin de pouvoir effectuer par la suite un achat.

-       Email:  La connexion se faisant par email il est donc impossible de créer 2 compte avec la même adresse mail, (l’adresse doit être conforme à la norme RFC)

-        Login: Il sera votre nom d’utilisateur sur le site, il doit etre superieur a 3 caractere et inférieur à 20 caractere, il ne devra contenir que des lettres, tiret, ou underscore

-       Mot de passe: Le mdp doit être alphanumérique et devra obligatoirement avoir plus de 8 caractère

-       Le nom, le prénom et le pays ne doivent contenir que des caractère alphanumérique

-       Code Postal: Il doit contenir 5 chiffres

-       Date de naissance: La date de naissance doit être écrit sous la forme suivante : AAAA-MM-JJ

-       L’adresse: elle doit contenir un chiffre puis une rue

-       La ville: Le nom de la ville doit être alphabétique mais peut néanmoins contenir des tiret pour les nom composé

Page panier (non fonctionelle):

Le panier stocke les produits qui y ont été ajouté afin de les acheter, calculant le prix en fonction du nombre d’heure choisi pour chaque produits ainsi qu’un prix total.
