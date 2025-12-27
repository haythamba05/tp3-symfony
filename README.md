Objectif Principal
Implémenter un formulaire Symfony complet pour un site e-commerce de casques audio, en transformant un code HTML statique en application Symfony dynamique.

Objectifs Spécifiques
Transformation : Convertir du HTML/Bootstrap en composants Symfony

Architecture : Appliquer les principes SOLID

Validation : Implémenter la validation côté client et serveur

Expérience utilisateur : Créer une interface responsive et intuitive

1. Single Responsibility Principle (SRP) ✓
Principe : Une classe, une responsabilité

Application :

CartItem : Représente uniquement un article du panier

CartItemType : Définit uniquement la structure du formulaire

CartService : Gère uniquement les opérations du panier

ProductRepository : Accède uniquement aux données produits
2. Open/Closed Principle (OCP) ✓
Principe : Ouvert à l'extension, fermé à la modification

Application :

Formulaires extensibles via AbstractType

Services remplaçables via interfaces

Configuration externalisée dans YAML
3. Liskov Substitution Principle (LSP) ✓
Principe : Les sous-classes doivent pouvoir remplacer leurs classes mères

Application :

ProductRepository implémente complètement ProductRepositoryInterface

Tous les Form Types peuvent remplacer AbstractType

Les services suivent leurs contrats d'interface
4. Interface Segregation Principle (ISP) ✓
Principe : Préférer plusieurs interfaces spécifiques à une interface générale

Application :

Interface dédiée pour le repository produit

Pas d'interfaces "génériques" avec méthodes inutilisées

Chaque interface a un rôle précis

Page Produit (/appareil)

Affichage détaillé du produit

Formulaire interactif avec validation

Gallery d'images responsives

Informations techniques structurées

