<?php
/**
 * @type     article
 * @title    Pseudo-classes d'état
 * @icon     images/icon.webp
 * @abstract :hover, :active, :visited, :focus
 * @ref      web/css
 */
?>

<p class="spacer">Les pseudo-classes sont matière courantes sur le web, il est probable que vous en ayez déjà utilisé sans même le savoir. L'un des exemples les plus fréquents est <incode>:hover</incode>.</p>

<p>Leur utilité principale est de permettre d'ajouter ou de redéfinir des styles à un élément lorsqu'il respecte une condition particulière.</p>

<p>Par exemple, si un élément est survolé par la souris, sa condition est <incode>:hover</incode>.</p>

<codepen id="rNrKbRX" tab="css,result" height="340"></codepen>

<info>Remarquez comment les deux points <incode>:</incode> servent à séparer le sélecteur de base de la pseudo-classe.</info>
<dots></dots>


<grostitre>Liens</grostitre>

<p>Les pseudo-classes sont particulièrement utiles pour gérer l'apparence des liens en fonction de leur état.</p>

<codepen id="gbYqWwp" tab="css,result" height="340"></codepen>





<dots></dots>
<h3>Autre exemple le site <a target="_blank" href="https://fr.wikipedia.org/wiki/(274301)_Wikip%C3%A9dia">Wikipedia</a>, voici les états d'un lien sur ce site web. </h3>

<info><small>Vous pouvez tester par vous même sur le site Wikipedia. Survolez, appuyez sur tabulation ⇥ pour tester le changement de focus, cliquez sur le lien, revenez à la page précédente, constatez les différents états.</small></info>


<h4>:link</h4>

<p>Lorsque le lien n'a pas encore été visité: <img src="images/pseudo-link.png"></p>



<h4>:hover</h4>

<p>Lorsqu'il est survolé: <img src="images/pseudo-hover.png"></p>



<h4>:active</h4>

<p>Lorsque le bouton de la souris est enfoncé: <img src="images/pseudo-active.png"></p>



<h4>:visited</h4>

<p>Lorsqu'il a déjà été visité: <img src="images/pseudo-visited.png"></p>



<h4>:focus</h4>

<p>Lorsque le lien reçoit le focus (appuyez sur tabulation ⇥ pour tester le changement de focus): <img src="images/pseudo-focus.png"></p>




<doclink href='https://developer.mozilla.org/fr/docs/Web/CSS/Pseudo-classes'>Les pseudo-classes: en savoir plus sur le site MDN.</doclink>


<dots></dots>
<exercice href="exercices/cercles/"></exercice>
<exercice href="exercices/bouton/"></exercice>







