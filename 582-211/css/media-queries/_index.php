<?php

/**
 * @type     article
 * @title    Media queries
 * @icon     images/icon.webp
 * @abstract Requête @media
 * @ref      web/css
 */
?>

<p>Les <em>medias queries</em> permettent d'adapter le contenu d'une page aux caractéristiques de l'appareil de l'utilisateur.</p>

<p>Par exemple, pour distinguer l'écran d'un cellulaire versus l'écran plus large d'un ordinateur, on pourrait utiliser la media query suivante:</p>

<highlight lang="css">@media screen and (min-width: 1000px) { ... }</highlight>

<p>Dans ce cas j'ai:</p>

<ul>
  <li>Une déclaration de media query <incode>@media</incode>
  </li>
  <li>Un type de média screen <incode>screen</incode>
  </li>
  <li>Un opérateur logique <incode>and</incode>
  </li>
  <li>Une caractéristique <incode>(min-width: 1000px)</incode>
  </li>
</ul>

<p>Nous pourrions donc définir la couleur rouge comme couleur de fond de notre page:</p>

<highlight lang="css">body { background: red; }</highlight>

<p>Et si notre media query est respectée, être un écran et avoir une largeur minimale de 1000px, redéfinir cette couleur à bleu:</p>

<highlight lang="css">@media screen and (min-width: 1000px) {
  body { background: blue; }
}</highlight>

<clipasset src="videos/media-query.mp4"></clipasset>

<dots></dots>


<grostitre>Types de média</grostitre>

<p>Le type de média est optionnel. Il correspond au contexte utilisé pour consulter à la page.</p>

<ul>
  <li>
    <incode>all</incode> couvre tous les types de médias de cette liste <em>(par défaut)</em>.
  </li>
  <li>
    <incode>screen</incode> Si quelqu'un consulte la page via un écran 📱/💻.
  </li>
  <li>
    <incode>print</incode> Si quelqu'un décide d'imprimer la page.
  </li>
  <li>
    <incode>speech</incode> Si quelqu'un utilise un outil de synthèse vocale 🔊.
  </li>
</ul>

<warning>Si le type est omis, les règles s’appliqueront à tous les types d’appareils. Autrement dit, <incode>@media all and (min-width: 1000px) { ... }</incode> et <incode>@media (min-width: 1000px) { ... }</incode> sont équivalent.</warning>

<dots></dots>


<grostitre>Caractéristiques de média (conditions)</grostitre>

<p>Les caractéristiques média s'écrivent <u>toujours entre parenthèses</u> et testent si une condition spécifique est respectée.</p>

<ul>
  <li><strong>min-width/max-width</strong> Basé sur la largeur du viewport <em>(de la fenêtre)</em>.<br>Ex: <incode>(min-width: 1000px)</incode>
  </li>
  <li><strong>min-height/max-height</strong> Basé sur la hauteur du viewport <em>(de la fenêtre)</em>.<br>Ex: <incode>(max-height: 600px)</incode>
  </li>
  <li><strong>min-aspect-ratio/max-aspect-ratio</strong> Le rapport largeur/hauteur du viewport <em>(de la fenêtre)</em>. Ex: <incode>(min-aspect-ratio: 16/9)</incode>
  </li>
  <li><strong>orientation</strong>
    <incode>portrait</incode> ou <incode>landscape</incode>
  </li>
  <li><strong>prefers-reduced-motion</strong>
    <incode>no-preference</incode> ou <incode>reduce</incode>. Certaines personnes sont sensibles aux animations. D'où pourquoi de plus en plus d'appareils laissent indiquer à l'utilisateur s'il préfère un niveau d'animation normal ou réduit. Ex: <incode>(prefers-reduced-motion: reduce)</incode>
  </li>
  <li><strong>prefers-color-scheme</strong>
    <incode>light</incode> ou <incode>dark</incode> ◻️/◼️. Ex: <incode>(prefers-color-scheme: dark)</incode>
  </li>
</ul>

<clipasset src="videos/prefer-color-scheme.mp4"></clipasset>

<info><a target="_blank" href="https://www.apple.com/ca/fr/apple-music/">Apple Music</a> se base sur une media query afin d’ajuster son thème en fonction de la préférence de l’usager.</info>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/Media_Queries/Using_media_queries">@media</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_mediaquery.asp">@media</doclink>

<dots></dots>


<grostitre>Opérateurs logiques</grostitre>

<p>Permettent d'indiquer le lien entre différentes parties de notre média query.</p>

<p>
  <incode>and</incode> Permet de combiner plusieurs requêtes média en une seule. Pour que la requête soit respectée, il faut que chacune des sous-requêtes soit vraie. ex: <incode>screen and (min-width: 1000px)</incode> s'appliquera sur tous les écrans de minimum 1000px de large.
</p>

<p>
  <incode>not</incode> Retourne le résultat opposé d'une requête média. S'il est utilisé dans une liste de requêtes séparées par des virgules, il ne nie que la requête sur laquelle il est appliqué. ex: <incode>not (orientation: landscape)</incode> s'appliquera sur tous les écrans dont l'orientation est portrait.
</p>

<p>
  <incode>,</incode> <em>(virgule)</em> Permet de combiner plusieurs requêtes. Chaque requête est traitée séparément. Il suffit qu'une seule de ces requêtes soit respectée pour que les styles s'appliquent. ex: <incode>(orientation: landscape), (min-width: 600px)</incode> s'appliquera sur les appareils dont l'orientation est landscape <strong>et/ou</strong> la largeur minimale est de 600px. Donc une tablette en mode portrait serait quand même affectée par les styles même si son orientation ne correspond pas.
</p>

<warning>
  <h3>Combinaison des requêtes média <incode>min-width</incode> et <incode>max-width</incode> </h3>
  <p>Les requêtes média  <incode>min-width</incode> et <incode>max-width</incode> peuvent être utilisées conjointement pour cibler une plage spécifique de tailles de fenêtre. Voici un exemple d'utilisation de la largeur minimale et maximale dans une requête média:</p>
  <highlight lang='css'>@media only screen and (max-width: 600px) and (min-width: 400px) {
  ...
}</highlight>
<p>Remarquer le <incode>only</incode> qui suit le <incode>@media</incode>, c'est ce terme qui fait en sorte que les 2 conditions doivent être remplies pour entrer dans ce bloc de media query.</p>
</warning>


<dots></dots>
<grostitre>Breakpoints</grostitre>

<p>Même si notre site est parfaitement responsive, il est parfois souhaitable de faire un changement d'affichage dans certains contextes, afin d'éviter que la dimension de certains éléments devienne un enjeu.</p>

<p>Par exemple, deux sections juxtaposées sur un écran large font du sens. Cependant sur l'écran plus restreint d'un mobile, elles risquent d'être ridiculement coincées. D'où l'utilité à un certain point <em>(Breakpoint)</em> de changer les règles d'affichage via une media query.</p>

<clipasset src="videos/breakpoints.mp4"></clipasset>

<p>Ainsi, les sections pourraient passées de demis:</p>

<highlight lang="css">.section { width: 50%; }</highlight>

<p>À pleines lorsque la largeur de l'écran est inférieur à 600px:</p>

<highlight lang="css">@media (max-width: 600px) {
  .section { width: 100%; }
}</highlight>

<dots></dots>


<grostitre>Où les utiliser?</grostitre>

<p>Les médias queries peuvent être utilisés à différents endroits:</p>

<ul>
  <li>Le plus souvent, directement dans les <strong>feuilles de styles</strong> css.</li>
  <li>Parfois aussi, sur une balise <incode>&lt;link&gt;</incode>. ex: les styles contenu dans le fichier <incode>print.css</incode> ne devraient s'appliquer que lorsque l'utilisateur imprime la page et non lorsque celle-ci est affichée à l'écran:</li>
</ul>

<highlight lang="html">&lt;link href="print.css" rel="stylesheet" media="print"&gt;</highlight>


<dots></dots>
<grostitre>Développement mobile-first</grostitre>
<p>Comment appliquer les <em>media queries</em> lorsqu'on développe en <em>mobile-first</em>&nbsp;? C'est tout simple&nbsp;! </p>

<p>1 - D'abors, vous codez dans votre feuille de style, sans <em>media queries</em>, le placement de vos élément sur petits écrans (téléphone mobile par exemple). </p>

<p>2 - Par la suite, vous appliquez des exeptions pour les écrans plus larges à l'aide de <em>media queries</em>. Par exemple: à partir de 768px pour les tablettes et à partir de 1000pxpour les écrans de type desktop.</p>
<highlight lang='html'>
<div class="container">
  <div class="col">Contenu 1</div>
  <div class="col">Contenu 2</div>
  <div class="col">Contenu 3</div>
  <div class="col">Contenu 4</div>
  <div class="col">Contenu 5</div>
  <div class="col">Contenu 6</div>
</div>
</highlight>


<highlight lang='css'>div.container{
  display:block;
}

/* 1 colonne sur petits écrans, plaçant chaque contenu un en dessous de l'autre */
div.col{
  width: 100%;
}

@media screen and (min-width: 768px){
  div.container{
    display:flex;
    justify-content: space-between;
    align-items: flex-start;
  }

  /* 2 colonnes sur écrans moyens */
  div.col{
    width: 49%;
  }
}

@media screen and (min-width: 1000px){
  div.container{
    /* nul besoin d'appliquer flexbox ici puisque ceux de 768px et plus sont déjà pris en compte. */
  }

  /* 3 colonnes sur grand écrans */
  div.col{
    width: 30%;
  }
}
</highlight>



<dots></dots>
<exercice href="exercices/modok/"></exercice>
<!-- <exercice href="exercices/minions/"></exercice> -->
<exercice href="exercices/ou-est-charlie/"></exercice>

