<?php
/**
 * @type     exercice
 * @title    Classe: Mario Blocks
 * @icon     images/demo-mario.png
 * @abstract Pour cet exercice nous allons créer une “map” de blocs basée sur le premier jeu Super Mario Bros du Nintendo qui popularisa plusieurs principes majeurs du jeux vidéo, tel que le défilement horizontal, les boss et les raccourcis secrets.
 */
?>

<p>Pour cet exercice nous allons créer une “map” de blocs basée sur le premier jeu <a href="https://fr.wikipedia.org/wiki/Super_Mario_Bros.">Super Mario Bros</a> du Nintendo qui popularisa plusieurs principes majeurs du jeux vidéo, tel que le défilement horizontal, les boss et les raccourcis secrets&nbsp;🧱.</p>


<grostitre>Aperçu du résultat 👇</grostitre> 

<clipasset src='images/demo-mario.mp4'></clipasset>

<div class="image image--exercice-result">
    
  <div class="image__wrapper image__wrapper--landscape">
          <video src="/assets/exercices/classe-js-mario-blocks.mp4" autoplay="" muted="" loop="" class="image__gifv"></video>
      </div>
  
</div>


<grostitre>Matériel</grostitre> 
<doclink href="https://codepen.io/tim-momo/pen/zYgXKEy">Pen de départ</doclink>

<info>Plusieurs rafraichissements de page sont visibles dans cet aperçu&nbsp;☝️.</info>


<warning>Vous n’avez qu’à écrire du JavaScript <em>(nul besoin de modifier le HTML ou le&nbsp;CSS)</em>.</warning>




<dots></dots>
<grostitre>Requis</grostitre>
<checklist>
  Créez une classe JavaScript intitulée&nbsp;<em>"Block"</em>. Pour l'instant, n'instancier qu'un seul élément à partir de cette&nbsp;classe.
  Lorsque la classe est appelée, pigez un numéro de 0 à 5 et sauvegardez-le dans l'instance de votre nouvel objet. Ce numéro correspond à la texture attribuée à votre bloc&nbsp;<em>(bloc ciel, bloc brique, bloc&nbsp;?, pièce de monnaie)</em>.
  Créez-vous un div et ajoutez-lui les classes&nbsp;<em>"block"</em>&nbsp;et&nbsp;<em>"noX"</em>&nbsp;<em>(X équivaut au numéro de texture que vous avez pigé précédemment, ex: no3)</em>. L'apparence du div sera gérée en CSS en fonction de ces&nbsp;classes.
  Insérez-le div que vous venez de créer dans l'élément avec la classe&nbsp;<em>.level</em>.
  Lorsque les étapes précédentes fonctionnent comme désiré&nbsp;<em>(un bloc devrait être visible)</em>. 
  À l'extérieur de la définition de la classe, ajoutez un écouteur de l'événement clique sur le document entier.
  À l'intérieur de cet écouteur d'événement, videz le contenu de <span class='inline-code'>div.level</span>
  Créez ensuite une boucle de 0 à 100 créant une nouvelle instance de votre classe à chaque&nbsp;itération.
  Ainsi, lorsque vous cliquerez sur le document, une nouvelle configuration de 100 bloc Mario Bros sera affichée, remplaçant la précédente..


</checklist>
            
  




<warning>La boucle doit vivre <strong>à l’extérieur de la classe</strong> puisqu’elle instancie plusieurs élément basé sur la classe en&nbsp;question.</warning>



<dots></dots>
<grostitre>Notes de cours 📚</grostitre>

<intlink href='../../javascript/classe/'></intlink>
<doclink href='https://smnarnold.com/cours/javascript/classlist'>ClassList</doclink> <br>
<doclink href='https://smnarnold.com/cours/javascript/objet-math'>Objet Math</doclink> <br>
<doclink href='https://smnarnold.com/cours/javascript/manipulation-des-contenus'>Manipulation de contenu du DOM en JS</doclink> <br>
<doclink href='https://smnarnold.com/cours/javascript/boucle-for'>Boucle for</doclink> <br>
