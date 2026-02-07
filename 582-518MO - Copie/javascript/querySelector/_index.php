<?php 
/**
 * @type     article
 * @title    querySelector
 * @icon     images/icon.svg
 * @abstract Recherche un élément correspondant au sélecteur et retourne le premier élément trouvé.
 * @index    80
 * @ref      web/javascript
 */
?>

<p><incode>querySelector()</incode> permet d'effectuer une recherche dans un élément du DOM et retourne le premier élément correspondant au sélecteur lui étant passé. Si aucun élément n'est trouvé, il retourne alors <incode>null</incode>.</p><p>Par exemple dans le code HTML suivant:</p>

<highlight lang='html'><div class="game">Halo</div>
<div class="game">Resident Evil</div>
<div class="game">Hitman</div>
</highlight>



<p>Si une requête est effectué afin de trouver le premier élément possédant la classe <incode>.game</incode></p>
<highlight lang='javascript'>let game = document.querySelector('.game');</highlight>

<p>L'élément suivant est retourné:</p>
<highlight lang='html'><div class="game">Halo</div></highlight>



<dots></dots>
<grostitre>Anatomie</grostitre>


<p>Décortiquons les parties composant cette requête.</p>
<h3 class="heading heading--h3" id="let game">let game</h3>

<p>Le résultat de la requête est stocké dans une variable afin de pouvoir y accéder plus tard.</p>
<h3 class="heading heading--h3" id="document">document</h3>

<p>Correspond à l'élément dans laquelle la recherche doit être effectuée. </p><p>Dans cet exemple, la recherche s'effectue dans le document en entier. Il aurait possible d'être plus précis en partant d'un noeud moins global. Par exemple, effectuer un recherche à l'intérieur de l'élément contenu dans la variable <incode>game</incode>.</p>

<highlight lang='javascript'>game.querySelector('.name');</highlight>


<h3 id="querySelector(game)">querySelector('.game')</h3>

<p>Indique qu'un élément ayant la classe <incode>.game</incode> doit-être trouvé à l'intérieur de l'élément précédent <em>(</em><incode>document</incode><em>)</em>. </p>

<p>Heureusement, tous les <a rel="noopener noreferrer" href="https://tim-montmorency.com/timdoc/582-111MO/css/selecteurs/">sélecteurs CSS</a> sont supportés par <incode>querySelector()</incode>. Il est donc possible d'utiliser les mêmes sélecteurs en CSS qu'en JavaScript ✨.</p>

<alert> 
  <h4>Erreur fréquente</h4>
  <p>Si <incode>querySelector()</incode> ne retourne rien et que vous êtes certain qu’un élément devrait-être retourné, validez que votre <incode>&lt;script&gt;</incode> se trouve bien après votre code HTML et non avant celui-ci. Par exemple, dans le&nbsp;<incode>&lt;head&gt;</incode>.
  </p>
</alert>

<doclink href='https://developer.mozilla.org/fr/docs/Web/API/Document/querySelector'>querySelector()</doclink>
<doclink href='https://www.w3schools.com/jsref/met_document_queryselector.asp'>querySelector()</doclink>

<!-- 
<aside class="exercice-card">
<div class="exercice-card__content">
  <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
  <a href="/web/20231209062046/https://smnarnold.com/exercices/javascript/queryselector-queen" target="_blank" class="exercice-card__title">
    QuerySelector() -&nbsp;Queen
  </a>

 <p class="exercice-card__description">Pour cet exercice, vous devez sélectionner à l’aide de querySelector() l’élément correspondant au groupe de musique Queen. Attention de&nbsp;n...</p>
    </div>

  <picture class="exercice-card__preview">
<source srcset="/web/20231209062046im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlTZWxlY3Rvci1xdWVlbi5qcGc=?w=620&amp;s=8d137de86f92631d6cf7a2883dabd523" media="(max-width: 575px) and (min-resolution: 2dppx)">
<source srcset="/web/20231209062046im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlTZWxlY3Rvci1xdWVlbi5qcGc=?w=310&amp;s=d3236a019615f6c3d73c4231e1136b04" media="(max-width: 575px)">
<source srcset="/web/20231209062046im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlTZWxlY3Rvci1xdWVlbi5qcGc=?w=370&amp;s=5bcbf0df37f7aced5f2da1067e70f5fe" media="(min-resolution: 2dppx)">
<img src="/web/20231209062046im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlTZWxlY3Rvci1xdWVlbi5qcGc=?w=185&amp;s=39b26d01e1e87cc5441020b7fbcd7b9d" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
</picture>
</aside>
   -->

<dots></dots>
<grostitre>Console</grostitre>

<p>Il est possible directement dans la console du navigateur d'effectuer une requête <incode>querySelector()</incode> afin de voir  en direct son résultat. Cette approche permet de tester rapidement sa requête avant de la copier dans son fichier de travail.</p>
<video src="images/queryselector-console.mp4" autoplay="" muted="" loop="" class="image__gifv"></video>


<h3 class="heading heading--h3" id="Raccourcis $0">Raccourcis $0</h3>
<p>Lorsqu'un élément a testé dépend d'une requête <incode>querySelector()</incode>, il est possible d'utiliser le raccourcis <incode>$0</incode> de la console afin de gagner du temps. Tout élément inspecté se fait ajouter la marque <incode>== $0</incode> dans le DOM. Ceci signifie que l'équivalent d'une requête <incode>querySelector()</incode> a été effectuée sur cet élément et que le résultat est accessible dans une variable temporaire nommée <incode>$0</incode>.</p>

<video src="images/dollars-sign-selector-console.mp4" autoplay="" muted="" loop="" class="image__gifv"></video>

