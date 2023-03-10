<?php 
/**
 * @type     article
 * @title    Swiper
 * @icon     images/icon.png
 * @abstract Le carousel tactile JavaScript le plus moderne
 */
 ?>


<grostitre>Librarie JavaScript</grostitre>
<h3>Qu’est-ce qu’une bibliothèque JavaScript, exactement? 🤔</h3>

<p>Page Web = Interactivité.<br>Et souvent ce sont le même genre d’interactions de site en site.</p>

<p>Cliquer sur un lien ou un ancre est l’interaction de base d’un site. Mais aussi:</p>
<ul>
    <li>Cliquer pour agrandir une image.</li>
    <li>Cliquer sur un bouton pour ouvrir ou fermer un popup (modal).</li>
    <li>Remplir les champs d’un formulaire.</li>
    <li>Cliquer pour le soumettre.</li>
    <li>Se connecter (login) à un service Web (même principe, c’est aussi un formulaire).</li>
    <li>Naviguer parmi les photos d’un diaporama (suivant-précédent).</li>
    <li>Défiler (scoll) la page.</li>
    <li>Etc.</li>
</ul>

<p>Certaines actions sont natives du navigateur et du HTML (liens, ancres, défiler la page, remplir les champs d’une formulaire) et d’autres requiert l’aide de JavaScript.</p>
<p>Si on prend par exemple les diaporamas, ce type de composant existe sur tellement de sites !<br>

<p><strong>Le site National Geographics:</strong></p>
</p>
<a href="https://www.nationalgeographic.com/"><img src="images/carousel-national-geo.jpg" alt="Carousel Nation Geographic"></a>

<p><strong>Le site du World Press Photo:</strong></p>
<a href="https://www.worldpressphoto.org/collection/photocontest/2022/north-and-central-america"><img src="images/carousel-worldpressphoto.jpg" alt="Carousel Nation Geographic"></a>


<p><strong>Le site de MUTEK</strong></p>
<a href="https://montreal.mutek.org/fr/galerie-virtuelle-2022"><img src="images/carousel-mutek.jpg" alt="Carousel Nation Geographic" style="border: 1px solid #ddd"></a>

<p><strong>Autres exemples:</strong></p>
<ul>
    <li><a href="https://momentfactory.com/news/billie-eilish-2022-world-tour">https://momentfactory.com/news/billie-eilish-2022-world-tour</a></li>
    <li><a href="https://macm.org/collections/oeuvre/le-temple-aux-cent-colonnes/">https://macm.org/collections/oeuvre/le-temple-aux-cent-colonnes/</a></li>
    <li><a href="https://nouveaucinema.ca/fr">https://nouveaucinema.ca/fr</a></li>
    <li><a href="https://www.cinematheque.qc.ca/fr/cinema/">https://www.cinematheque.qc.ca/fr/cinema/</a></li>
</ul>

<p>Il est possible que chacun de ces développeurs Web ait écrit son propre code JavaScript pour réaliser un diaporama, mais beaucoup de développeurs réutilisent le même code. </p>
<info>Pourquoi réinventer la roue quand elle existe déjà ?!</info>
<h3>Une bibliothèque est un fichier JavaScript qui contient un ensemble de fonctions, et ces fonctions exécutent des tâches utiles à votre page Web.</h3>

<info>Une bibliothèque JavaScript est faite pour être partagé et réutilisée.</info>
<br>

<dots></dots>

<grostitre>Swiper</grostitre>
<p>Swiper est une librarie JavaScript. Swiper vous permet de faire différents sliders avec une quantité d'options intéressantes comme la pagination, les sliders verticaux, la scrollbar, la lazy load, effet 3D, effet parallax...</p>
<dots></dots>
<grostitre>Installation</grostitre>

<dots></dots>

<grostitre>Utilisation</grostitre>
<ol>
    <li>Ajouter les fichiers CSS et JavaScript de Swiper.</li>
    <li>Ajouter le HTML de mise en page de Swiper</li>
    <li>Initialiser l'instance de Swiper via JavaScript.</li>
</ol>
<h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" style="width:30px"><rect width="256" height="256" fill="none"/><circle cx="128" cy="128" r="96" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="30"/><polyline points="108 100 132 84 132 176" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="30"/></svg> Ajouter les fichiers CSS et JavaScript de Swiper dans les pages HTML qui requiert l'utilisation de la librairie.</h3>
<p>Vous pouvez </p>
<highlight lang='html'>&lt;link
  rel=&quot;stylesheet&quot;
  href=&quot;https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css&quot;
/&gt;

&lt;script src=&quot;https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js&quot;&gt;&lt;/script&gt;</highlight>

<h3>Ajouter le HTML de mise en page de Swiper.</h3>
<highlight lang='html'>&lt;!-- Slider main container --&gt;
&lt;div class=&quot;swiper&quot;&gt;
  &lt;!-- Additional required wrapper --&gt;
  &lt;div class=&quot;swiper-wrapper&quot;&gt;
    &lt;!-- Slides --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;Slide 1&lt;/div&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;Slide 2&lt;/div&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;Slide 3&lt;/div&gt;
    ...
  &lt;/div&gt;
  &lt;!-- If we need pagination --&gt;
  &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;

  &lt;!-- If we need navigation buttons --&gt;
  &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;

  &lt;!-- If we need scrollbar --&gt;
  &lt;div class=&quot;swiper-scrollbar&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</highlight>

<h3>Initialiser l'instance de Swiper via JavaScript.</h3>





<dots></dots>

<grostitre>Paramètres de Swiper</grostitre>

<dots></dots>
<grostitre>Modules Swiper et leurs paramètres</grostitre>

<dots></dots>

<br><br>
<exercice href='exercices/swiper-carousels/'></exercice>
 