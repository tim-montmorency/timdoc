 <?php

  /**
   * @type     article
   * @title    P1.3c App - Swiper
   * @icon     images/icon.svg
   * @abstract Ajout Swiper sur filtres et oeuvres en vedette
   */
  ?>

<grostitre>Finition de votre projet</grostitre>

<checklist>
Corrigez le mieux possible votre projet suite à l'évaluation de P1.2 et suite à l'évaluation formative de P1.3
Assurez-vous de n’avoir aucun lien ou chemin d’accès absolu (qui commence par un slash&nbsp;/)
Ajoutez un favicon
Éditez la balise title de votre page
App : faites en sorte que le bouton like sur la page artwork soit cliquable et qu’au clic, il change de couleur pour confirmer que l’œuvre est ajoutées aux favoris. Vous pouvez utiliser du JavaScript pour le faire, utilisez le fichier scripts.js</checklist>

<grostitre>Swiper installation</grostitre>
<checklist>Installez la librairie dans la page app/index.html (artwork.html n'en aura pas besoin alors on ne chargera pas la librarie pour rien dans cette page.)</checklist>
<warning>Toujours intégrer les fichiers de librairies externes (Bootstrap, Swiper etc) AVANT vos propres fichiers de projet (script.js ou styles.css). Car il faut initialiser l’objet JavaScript Swiper qui se trouve dans le fichier swiper.js AVANT de pouvoir en créer une instance dans votre fichier script.js. L’inverse ne fonctionnerait pas.</warning>

<h3>Notes de cours 📚</h3>
<intlink href="../../swiper/#installation"></intlink> 
<doclink href="https://swiperjs.com/get-started#use-swiper-from-cdn">Install Swiper</doclink>

<dots></dots>
<grostitre>Swiper sur les filtres et les oeuvres en vedette</grostitre>
<p>Aperçu du résultat 👇</p>
<clipasset src="video/swiper-app.mp4" mobile="true"></clipasset>

<h3>Filtres</h3>
<checklist>Assurez-vous que votre liste de boutons se trouve seule dans sa section (balise section).
Si vous aviez précédemment ajouté un overflow:hidden sur cette section ou un élément de cette section, vous pouvez l’enlever.
Ajoutez le HTML de mise en page swiper avant ou après la liste de bouton. 
Requis du swiper : pas de bouton précédent ou suivant, pas de pagination, pas de scrollbar.
Ajoutez la classe <em>.swiper-filters</em> sur le swiper que vous venez d’ajouter. Cette classe servira à cibler que ce swiper là lors de l’initialisation puisque vous allez en avoir plusieurs sur la page et chaque swiper aura sa propre configuration.
Supprimez la liste ul>li que vous aviez mais conservez les boutons. 
Répartissez chaque bouton dans sa propre slide de swiper, il y en a 7 en tout :<br>- Toutes<br>- Installations interactives<br>- Concert<br>- Performances<br>- AR / VR<br>- Projections / Immersion
Ajoutez du CSS pour vous assurer que la largeur des slides de ce swiper là soit automatique, bref par plus ou moins large que la largeur du bouton. À ce stade, vous devriez voir vos boutons tous collés les uns les autres sur la même ligne.
Dans votre script.js, initialisez ce Swiper là en le ciblant avec sa classe <em>.swiper-filters</em>.
Toujours dans l’initialisation de swiper dans votre fichier script.js, ajoutez les quelques paramètres de swiper pour que les boutons s’affichent tous un à côté de l’autre comme sur la démo et qu’il y ait une petite distance entre chaque slide.
</checklist>
<doclink href="https://swiperjs.com/swiper-api#parameters">Paramètres Swiper</doclink>
<dots></dots>

<h3>Oeuvres en vedette</h3>
<checklist>Enlevez le style width : 140% que vous avez appliqué sur votre section et ajoutez-lui un <em>overflow : hidden</em>.
Avant ou après la <em>.row</em> qui contient vos <em>.col</em> et <em>.card</em>, ajoutez le HTML de mise en page Swiper.
Requis du swiper : pas de bouton précédent ou suivant, pas de pagination, pas de scrollbar.
Ajoutez la classe <em>.swiper-featured-artworks</em> sur ce swiper.
<em>Sortez les cards de votre grille Bootstrap et amenez les dans les slides swiper, un par slide.</em>
Supprimez les balises restantes de la grille Bootstrap qui contenait vos cards avant de les migrer dans le Swiper.
Vous devriez avoir 3 slides, dupliquez les pour en avoir 6 (les mêmes œuvres reviendront 2 fois, ce n’est pas grave pour l’exercice).
Dans votre script.js, initialisez ce Swiper à cet endroit, en le ciblant avec sa classe <em>.swiper-featured-artworks</em>.
Toujours dans l’initialisation de swiper dans votre fichier script.js, ajoutez les quelques paramètres de swiper afin de voir 2 cartes et un petit bout de la 3e (voir la demo) et qu’il y ait une petite distance entre chaque slide.
</checklist>
<doclink href="https://swiperjs.com/swiper-api#parameters">Paramètres Swiper</doclink>


<h3>Notes de cours 📚</h3>
<intlink href="../../swiper/#swiper"></intlink> 

<dots></dots>

<grostitre>Mise en ligne de votre projet</grostitre>
<p>Via github pages, publiez votre projet en ligne et remettez moi le url final de votre site!</p>