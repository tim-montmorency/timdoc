<?php 
/**
 * @type     article
 * @title    5-Chargement d'image progressif
 * @icon     ../images/icon.webp
 * @abstract Chargement d'image progressif ou lazy laoding
 * @index    20
 * @ref      web/optimisation
 */
?>


 
<grostitre>Principe du chargement différé "lazy load"</grostitre>

<doclink href="https://developer.mozilla.org/fr/docs/Web/Performance/Lazy_loading">Lazy laoding</doclink>
<p>Le chargement différé (lazy loading en anglais) est une stratégie d'identification des ressources non critiques (comme des images) afin de ne les charger qu'au moment où elles sont utiles. C'est une façon de réduire le temps de chargemen de la page et de faire en sorte qu'on ne charge pas des images inutilement.</p>
<p>L'attribut <span class='inline-code'>loading</span> utilisé sur un élément <span class='inline-code'>&lt;img&gt;</span> peut être utilisé pour demander au navigateur de différer le chargement des images  qui se situent en dehors de la zone affichée à l'écran, jusqu'à ce que la personne visitant le site ne les affiche en faisant défiler la page.
</p>
<highlight lang='html'>&lt;img src=&quot;image.jpg&quot; alt=&quot;...&quot; loading=&quot;lazy&quot;&gt;</highlight>



<dots></dots>
<grostitre>Librarie "Progressive image"</grostitre>

<p>Librarie JavaScript pour implémenter le chargement d'image progressif (à mesure qu'on y arrive en défilant la page).</p>
<p><a href="https://codepen.io/craigbuckler/full/yPqLXW" target="_blank" rel="noopener noreferrer">Démo</a></p>

<doclink href="https://github.com/craigbuckler/progressive-image.js/">Librairie Progressive image</doclink>


