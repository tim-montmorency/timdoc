 <?php

  /**
   * @type     article
   * @title    P1.3b App - Accordion+Modal
   * @icon     images/icon.svg
   * @abstract Page de l'oeuvre
   */
  ?>
<grostitre>Ajustement de vos couleurs dans vos CSS et vos class HTML</grostitre>

<checklist>
  Si ce n'est pas déjà fait, maintenant que vous avez personnalisé les classes de couleurs Bootstrap telles que <br> <code>--bs-primary, --bs-secondary, --bs-info, --bs-warning</code> etc., <br>veuillez aller changer partout où c'est possible dans votre CSS, afin d'utiliser ces variables.
  Vous pouvez aussi utiliser les classes Bootstrap dans certain cas, par exemple sur un bouton avec la classe <code>.btn-primary</code> ou <code>.btn-outline-primary</code> ou encore sur un div, ajuster la couleur du texte avec la classe <code>.text-primary</code> ou l'arrière-plan avec la classe <code>.bg-primary</code>
</checklist>

<dots></dots>


<grostitre>Page oeuvre (artwork.html)</grostitre>
<p>Aperçu du résultat 👇</p>

<clipasset src="video/demo_app_accordion_modal.mp4" mobile="true"></clipasset>

<p><small>Pour faire <em>pause</em> et <em>play</em> sur la vidéo de la démo, si vous êtes dans Chrome, vous n'avez qu'à faire "clic-droit" au dessus de la démo et cliquer sur "<em>Afficher les commandes</em>".</small></p>


<!--<div style="max-width: 640px"><div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;"><iframe width="640" height="360" src="https://web.microsoftstream.com/embed/video/3aa31356-edd4-4fd9-bf63-0d01f895fdba?autoplay=false&showinfo=true" allowfullscreen style="border:none; position: absolute; top: 0; left: 0; right: 0; bottom: 0; height: 100%; max-width: 100%;"></iframe></div></div>-->


<dots></dots>

<checklist>
Dupliquez votre index.html et renommez le artwork.html 
Éditez artwork.html, conservez le <em>header</em> et sa <em>navbar</em> ainsi que le <em>footer</em> mais supprimez tout le reste sur contenu dans <em>main</em> (tout en conservant la balise <em>main</em>, bien entendu). 
Faites en sorte que l’arrière-plan de la <em>navbar</em> est transparent, que pour cette page. 
Changez le <em>burger menu</em> par un bouton retour de même format qui contient un chevron qui pointe vers la gauche (qui mènera vers la page précédente, c’est à dire l’accueil).Vous pouvez utiliser une des icônes Bootstrap pour le chevron.
Changez l’icône de l’utilisateur à droite par un bouton “J’aime”.  
Enlevez le logo du festival dans la navbar. 
Insérez l’image de l’œuvre à environ 33% de hauteur du viewport. 
Créez une nouvelle section en dessous, ou vous insérerez le nom de l’œuvre en titre principal (h1).  
Essayez de recréer l’illusion que le haut du contenu avec l’arrière-plan blanc déborde sur l’image (voir démo ci-haut). 
Sous le titre, créez une section qui contient une icône de carte (map) et inscrivez le lieu de l’expo. Suivi d’une icône de calendrier et les dates d’exposition/présentation. 
Ensuite une ou des cartes pour présenter le ou les artistes de l’œuvre. Ces cartes doivent avoir un bouton “En savoir plus”.  Le texte dans la carte pour le présenter doit être très bref (quelques lignes). 
Ensuite on a la description de l’œuvre. 
Juste avant le <em>footer</em>, on a un accordéon Bootstrap avec un seul item : “Réservez votre place”. Le contenu de l’item sera un formulaire Bootstrap contenant Courriel, Prénom, Nom, Date et bouton <em>Submit</em>. 
Attention, pour l’accordéon, si vous faites un copier-coller des notes de cours ou du site Bootstrap, il ne faut pas conserver les ID par défaut de l’accordéons, des <em>headers</em> et des <em>collapses</em>. Pour votre compréhension je tiens à ce que vous appliquiez des IDs qui font référence au contenu sur lequel vous travaillez. 
Finalement, prenez le temps d’ajouter des classes utilitaires Bootstrap pour créer des marges entre chaque section de la page pour bien les définir. 
</checklist>

<h3>Notes de cours 📚</h3>
<intlink href="../../bootstrap/cartes"></intlink> 
<intlink href="../../bootstrap/utilitaires"></intlink> 
<intlink href="../../bootstrap/accordeon"></intlink> 
<dots></dots>

<grostitre>Fenêtre modale </grostitre>

<checklist>
Créez une fenêtre modale cachée par défaut. 
Placez la bien au bon endroit dans le HTML, selon ce que vous avez appris.
Cette modal sera déclenchée par le bouton dans la carte de l’artiste “En savoir plus”. 
L'entête de cette modal contiendra comme titre le nom de l’artiste et sera accompagné par le bouton X pour fermer la modal. 
Le corps de la fenêtre modal contiendra une bio longue de l’artiste. Vous devez vous même trouver un texte qui décrit l'artiste sélectionné, pas de lorem ipsum!.
La modal devra être centrée verticalement dans la page et avoir un format petit.  
Il devra y avoir une transition lorsqu’on ouvre et ferme la modal (elle ne doit pas apparaitre d’un seul coup sec). 
</checklist>

<h3>Notes de cours 📚</h3>
<intlink href="../../bootstrap/modale"></intlink> 