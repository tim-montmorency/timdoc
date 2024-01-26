 <?php

  /**
   * @type     article
   * @title    P1.3b LP - Accordion+Modal
   * @icon     images/icon.svg
   * @abstract Sections FAQ et infolette
   */
  ?>


<grostitre>Ajustement de vos couleurs dans vos CSS et vos class HTML</grostitre>

<checklist>
  Maintenant que vous avez personnalisé les classes de couleurs telles que bs-primary, bs-secondary, bs-info, bs-warning etc, veuillez aller changer partout où c'est possible dans votre CSS, afin d'utiliser ces variables.
  Vous pouvez utiliser les classes dans certain car, par exemple sur un bouton avec la classe .btn-primary.
</checklist>

<dots></dots>


<grostitre>Section FAQ</grostitre>

<p>Aperçu du résultat pour FAQ et Infolettre 👇</p>
<clipasset src="video/demo_LP_faq_infolettre.mp4"></clipasset>


  <!--<div style='max-width: 640px'><div style='position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;'><iframe width="640" height="360" src="https://web.microsoftstream.com/embed/video/5361a801-a44d-4100-b5a3-db54ef3f783a?autoplay=false&showinfo=true" allowfullscreen style="border:none; position: absolute; top: 0; left: 0; right: 0; bottom: 0; height: 100%; max-width: 100%;"></iframe></div></div>-->




<checklist>
Créez une nouvelle section FAQ à la fin de la balise main sous les autres sections, attribuez-lui un ID. 
Si cette section n’est pas incluse dans un div.container, ajoutez un div.container à l’intérieur de cette section afin que le contenu ne touche pas les bords de page. 
Ajoutez un titre de section “FAQ - Foire aux question”.  
Ajoutez un accordéon Bootstrap qui fera office de toutes les questions et réponses. 
Le header contiendra la question et le panneau collapse contiendra la réponse. 
Par défaut tous les items sont rétractés (aucune réponse n’est visible). 
Attention, si vous faite un copier-coller des notes de cours ou du site Bootstrap, il ne faut pas conserver les ID par défaut de l’accordéons des headers et des collapses. Pour votre compréhension je tiens à ce que vous appliquiez des IDs qui font référence au contenu sur lequel vous travaillez : FAQ, question, réponse etc. Vous devrez appliquer les changements de valeur aux attributs qui font référence à ces différents IDs. 
</checklist>

<h3>Notes de cours 📚</h3>
<intlink href="../../bootstrap/accordeon"></intlink> 

<dots></dots>

<grostitre>Section Infolettre</grostitre>

<checklist>
Créez une nouvelle section “Infolettre” à la fin de la balise main sous les autres sections, attribuez-lui un ID. 
Si cette section n’est pas incluse dans un div.container, ajoutez un div.container à l’intérieur de cette section afin que le contenu ne touche pas les bords de page. 
Créez une rangée et ensuite une colonne.  
Dans cette colonne unique, ajoutez un titre de section “Infolettre”.  
Suivi d’un paragraphe :  “Abonnez-vous à notre infolettre pour recevoir des nouvelles sur les mises-à-jour et nouvelles fonctionnalités de l’appli, en plus de recevoir en primeur les détails des prochaines éditions du festival.” 
Sous le paragraphe ajoutez un bouton Bootstrap “Je m’abonne”, il devra être de la plus grande dimension qui est offert par Bootstrap et utiliser la couleur primaire de votre nouvelle palette de couleur que vous avez réécrite par-dessus les couleurs Bootstrap de base. 
Par défaut : la colonne qui contient ce texte s'affichera sur toute la largeur. Son texte ainsi que le bouton devront être centrés. 
À partir du breakpoint md: la colonne devra s’afficher sur la moitié de la rangée et se placer à droite de la rangée et non pas à gauche. De plus, le texte et le bouton devront être aligné à gauche dans la colonne. 
Allez trouver une image sur unsplash.com qui fonctionnerait bien avec votre palette de couleur. Ajouter du CSS pour ajouter cette image en arrière-plan sur la section.   
Ajouter du CSS pour ajouter une couleur d’arrière-plan à la colonne qui contient le texte, avec une opacité entre 50 et 90%, le texte doit demeurer lisible. 
Dans le HTML, ajoutez une ou des classes utilitaires Bootstrap pour insérer une marge intérieure dans la colonne afin que le texte se décolle des bords de la boite. 
</checklist>

<h3>Notes de cours 📚</h3>
<intlink href="../../bootstrap/utilitaires"></intlink> 
<intlink href="../../bootstrap/breakpoints"></intlink> 
<intlink href="../../bootstrap/grille"></intlink> 


<dots></dots>


<grostitre>Fenêtre modale</grostitre>

<checklist>
Créez une fenêtre modale cachée par défaut. 
Placez la bien au bon endroit dans le HTML, selon ce que vous avez appris.
Faites en sorte que le bouton que vous avez ajouté dans la section Infolettre déclenche la modal. 
Elle doit contenir un titre “Restez informé !”, ainsi qu’un x pour permettre à l’utilisateur de la fermer. 
Dans le corps de la modal, vous devez créer un formulaire qui contiendra un champs courriel.  
Utilisez les composantes Bootstrap pour créer votre formulaire. Le placeholder sera “Votre adresse courriel” 
Vous devrez ajouter une icône d’enveloppe dans le champ formulaire au début. Trouvez un moyen qu’il ne s’affiche pas par-dessus le texte entré dans le champ. 
Dans le pied de la modal, on trouvera 2 boutons, un de couleur primaire qui contient le mot “M’inscrire” et l’autre de couleur secondaire qui contiendra le mon “Annuler” et fermera la modal si on clique dessus. 
La modal devra être centré verticalement dans la page et avoir un format large.  
Il devra y avoir une transition lorsqu’on ouvre et ferme la modal (elle ne doit pas apparaitre d’un seul coup sec). 
</checklist>

<h3>Notes de cours 📚</h3>
<intlink href="../../bootstrap/modale"></intlink> 
