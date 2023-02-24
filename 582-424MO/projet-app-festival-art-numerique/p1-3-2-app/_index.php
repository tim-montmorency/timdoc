 <?php

  /**
   * @type     article
   * @title    P1.3.2 App - Accordion+Modal
   * @icon     images/icon.svg
   * @abstract Page de l'oeuvre
   */
  ?>


<p>Aperçu du résultat 👇</p>

<div style='max-width: 640px'><div style='position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;'><iframe width="640" height="360" src="https://web.microsoftstream.com/embed/video/3aa31356-edd4-4fd9-bf63-0d01f895fdba?autoplay=false&showinfo=true" allowfullscreen style="border:none; position: absolute; top: 0; left: 0; right: 0; bottom: 0; height: 100%; max-width: 100%;"></iframe></div></div>


<grostitre>Page oeuvre (artwork.html)</grostitre>

<checklist>
Avant de créer une nouvelle page, remontez la navbar dans header, c’était une erreur de ma part lors des instructions précédentes. 
Ensuite, dupliquez votre index.html et renommez le artwork.html 
Éditez artwork.html, conservez le header et sa navbar ainsi que le footer mais supprimez tout le reste sur contenu dans main (tout en conservant la balise main, bien entendu). 
Faites en sorte que l’arrière-plan de la navbar est maintenant transparent. 
Changez le burger menu par un bouton retour de même format qui contient un chevron qui pointe vers la gauche (qui mènera vers la page précédente, c’est à dire l’accueil).  
Changez l’icône de l’utilisateur à droite par un bouton “J’aime”.  
Enlevez le logo du festival dans la navbar. 
Insérez l’image de l’œuvre à environ 33% de hauteur du viewport. 
Créez une nouvelle section en dessous, ou vous insérerez le nom de l’œuvre en titre principal (h1).  
Essayez de recréer l’illusion que le haut du contenu avec l’arrière-plan blanc déborde sur l’image (voir démo ci-haut). 
Sous le titre, créez une section qui contient une icône de carte (map) et inscrivez le lieu de l’expo. Suivi d’une icône de calendrier et les dates d’exposition/présentation. 
Ensuite une ou des cartes pour présenter le ou les artistes de l’œuvre. Ces cartes doivent avoir un bouton “En savoir plus”.  Le texte dans la carte pour le présenter doit être très bref (quelques lignes). 
Ensuite on a la description de l’œuvre. 
Juste avant le footer, on a un accordéon Bootstrap avec un seul item : “Réservez votre place”. Le contenu de l’item sera un formulaire Bootstrap contenant Courriel, Prénom, Nom, Date et bouton Submit. 
Attention, pour l’accordéon, si vous faite un copier-coller des notes de cours ou du site Bootstrap, il ne faut pas conserver les ID par défaut de l’accordéons, des headers et des collapses. Pour votre compréhension je tiens à ce que vous appliquiez des IDs qui font référence au contenu sur lequel vous travaillez. 
Finalement, prenez le temps d’ajouter des classe utilitaire Bootstrap pour créer des marges entre chaque section de la page pour bien les définir. 
</checklist>

<h3>Notes de cours 📚</h3>
<?php intlink("../../bootstrap/cartes") ?> 
<?php intlink("../../bootstrap/utilitaires") ?> 
<?php intlink("../../bootstrap/accordeon") ?> 
<dots></dots>

<grostitre>Fenêtre modale </grostitre>

<checklist>
Créez une fenêtre modale cachée par défaut. 
Placez la bien au bon endroit dans le HTML, selon ce que vous avez appris.
Ce modal sera déclenché par le bouton dans la carte de l’artiste “En savoir plus”. 
L'entête de ce modal contiendra comme titre le nom de l’artiste et sera accompagné par le bouton X pour fermer le modal. 
Le corps de la fenêtre modal contiendra une bio longue de l’artiste. 
La modal devra être centré verticalement dans la page et avoir un format petit.  
Il devra y avoir une transition lorsqu’on ouvre et ferme la modal (elle ne doit pas apparaitre d’un seul coup sec). 
</checklist>

<h3>Notes de cours 📚</h3>
<?php intlink("../../bootstrap/modale") ?> 