 <?php

  /**
   * @type     article
   * @title    P1.3c LP - Swiper
   * @icon     images/icon.svg
   * @abstract Section "Voir plus" avec carrousel Swiper
   */
  ?>

<grostitre>Finition de votre projet</grostitre>

<checklist>
Corrigez le mieux possible votre projet suite à l'évaluation de P1.2 et suite à l'évaluation formative de P1.3
Assurez-vous de n’avoir aucun lien ou chemin d’accès absolu (qui commence par un slash&nbsp;/)
Ajoutez un favicon
Éditez la balise title de votre page
Les liens du menu principal doivent pointer vers chaque section avec un anchor. S'ils en manquent, ajoutez les.
Enlevez les références à ScrollSpy à moins que vous ayez réussi à bien l’implanter.
</checklist>

<grostitre>Swiper installation</grostitre>
<checklist>Installez la librairie dans la page app/index.html (artwork.html n'en aura pas besoin alors on ne chargera pas la librarie pour rien dans cette page.)</checklist>
<warning>Toujours intégrer les fichiers de librairies externes (Bootstrap, Swiper etc) AVANT vos propres fichiers de projet (script.js ou styles.css). Car il faut initialiser l’objet JavaScript Swiper qui se trouve dans le fichier swiper.js AVANT de pouvoir en créer une instance dans votre fichier script.js. L’inverse ne fonctionnerait pas.</warning>
<h3>Notes de cours 📚</h3>
<intlink href="../../swiper/#installation"></intlink> 
<doclink href="https://swiperjs.com/get-started#use-swiper-from-cdn">Install Swiper</doclink>


<dots></dots>
<grostitre>Section "voir plus" avec carrousel Swiper</grostitre>
<p>Aperçu du résultat 👇</p>
<clipasset src="videos/swiper-screenshot-requis-base.mp4"></clipasset>

<checklist>Créez une nouvelle section Voir plus (view-more) et insérez la juste après la section fonctionnalité et juste avant celle de témoignages. Ajoutez-lui un id. 
Assurez-vous que le lien « Voir plus » dans la navbar mène vers cette section.
Le tire de cette section sera « Prévisualisez l'interface de l'appli. ». 
Allez prendre quelques impression-écran format mobile de l’appli de votre collègue. Suggestion : - L’accueil de l’appli haut de page<br>- L’accueil de l’appli bas de page<br>- Page artwork haut de page<br>- Page artwork mi -page et/ou avec la modale ouverte<br>- Page artwork avec l’accordéon ouvert contenant le formulaire de réservation.
Ajustez dans Photoshop afin que chaque image de vos impressions-écran aient la même dimension en pixel. Prenez le temps d'optimiser le poids de vos images, exportez-les en jpg et compressez un peu.
De retour dans votre index.html, section view-more, ajoutez le HTML de base pour un Swiper et déposez une image écran par slide.
Requis : pas de pagination, pas de scrollbar. Par contre, on veut les boutons précédent et suivant.
Ajoutez la classe <em>.swiper-screenshots</em> sur le swiper que vous venez d’ajouter. Cette classe servira à cibler que ce swiper là lors de l’initialisation puisqu’il n’est pas le seul swiper du site et chaque swiper a sa propre configuration.
En CSS, stylisez les images de ce Swiper en leur ajoutant une bordure pour simuler un cadre de téléphone.
Dans votre script.js, initialisez ce Swiper là en le ciblant avec sa classe <em>.swiper-screenshots</em>.
Toujours dans l’initialisation de swiper dans votre fichier script.js,ajoutez les propriétés nécessaire pour les requis suivants:<br>- Par défaut (mobile) on veut voir une seule slide à la fois<br>- dès le breakpoint 1200px, on veut voir 3 slides à la fois.<br>- les images dans les slides doivent être centrées dans celles-ci<br>- le carrousel doit être infini, c’est dire que lorsqu’on atteint la dernière slide, on continue à la première.<br>- on doit activer les boutons suivant et précédent.
Finalement, ajoutez des styles afin que les 2 slides de côtés soient semi-transparentes et que celle qui est active au centre, ne soit pas transparente.
Si vous voulez aller plus loin, vous pouvez essayer d’ajouter un cadre comme dans mon 2e exemple ci-haut (facultatif).
</checklist>
<doclink href="https://swiperjs.com/swiper-api#parameters">Paramètres Swiper</doclink>

<p>Ajouts facultatifs 👇</p>
<clipasset src="videos/swiper-screenshot-facultatif.mp4"></clipasset>



<h3>Notes de cours 📚</h3>
<intlink href="../../swiper/#swiper"></intlink> 

<dots></dots> 

<grostitre>Mise en ligne de votre projet</grostitre>
<p>Via github pages, publiez votre projet en ligne et remettez moi le url final de votre site!</p>