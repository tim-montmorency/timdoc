<?php
/**
 * @type     exercice
 * @title    Classe: Space Invaders
 * @icon     images/thumb.png
 * @abstract créer un générateur d’extra-terrestres inspiré d’un des jeux les plus célèbres et influents de l’histoire: Space Invaders
 */
?>




<p>Pour cet exercice nous allons créer un générateur d’extra-terrestres inspiré d’un des jeux les plus célèbres et influents de l’histoire, l’archétype du <em>shoot them up</em>: <a href="https://www.youtube.com/watch?v=Jbn8IRmSq8M">Space&nbsp;Invaders 👾</a>.</p>

thumb
<grostitre>Aperçu du résultat 👇</grostitre>
<clipasset src='images/apercu.mp4'></clipasset>




<dots></dots>
<grostitre>Matériel</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/qBewaLE">Pen de départ</doclink>


<dots></dots>
<p>Le but de cet exercice est de créer des&nbsp;<em>invaders</em>&nbsp;qui partageront les mêmes caractéristiques de base, mais qui auront de légères variations&nbsp;<em>(forme et couleur)</em>&nbsp;en fonction de l'objet JavaScript qui leur sera&nbsp;passé.</p>

<warning>Vous n’avez qu’à écrire du JavaScript <em>(nul besoin de modifier le HTML ou le&nbsp;CSS)</em>.</warning>


<dots></dots>
<grostitre>Requis</grostitre>
<checklist>Créez-vous une nouvelle classe JavaScript intitulée&nbsp;<em>Invader</em>.
Écoutez le clic sur les boutons. Au clic, créez une nouvelle instance de la classe&nbsp;<em>Invader</em>&nbsp;et passez au constructeur l'objet correspondant dans le array&nbsp;<incode>invadersList</incode>. Par exemple, le premier bouton devrait passer le premier objet, le deuxième bouton, le deuxième objet et ainsi de&nbsp;suite.
Dans votre constructeur, sauvegardez dans une propriété l'objet reçu en paramètre afin de pouvoir y accéder plus&nbsp;tard.
Pigez une couleur parmi les couleurs fournies dans l'objet et sauvegardez-la.
Créez un div et attribuez-lui les classes&nbsp;<incode>.invader</incode>&nbsp;pour lui attribuer les styles communs à tous les invaders, ainsi que la classe&nbsp;<incode>.invader-X</incode>&nbsp;où&nbsp;<incode>X</incode>&nbsp;correspond au type dans l'objet&nbsp;reçu.
Ajoutez la couleur sauvegardée comme couleur de fond du div, ainsi l'espace transparent dans l'image prendra la couleur en&nbsp;question.
Faites en sorte d'ajouter la classe&nbsp;<incode>.exploded</incode>&nbsp;aux invaders lorsqu'ils se font cliquer dessus. Ceci déclenchera une animation d'explosion déjà réalisée pour vous en&nbsp;CSS.
</checklist>


<dots></dots>
<grostitre>Notes de cours 📚</grostitre>


<intlink href='../../javascript/classe/'></intlink>
<doclink href='https://smnarnold.com/cours/javascript/queryselector'>querySelector()</doclink> <br>
<doclink href='https://smnarnold.com/cours/javascript/addeventlistener'>addEventListener()</doclink>  <br>
<doclink href='https://smnarnold.com/cours/javascript/classlist'>ClassList</doclink> <br>
<doclink href='https://smnarnold.com/cours/javascript/objet-math'>Objet Math</doclink> <br>
<doclink href='https://smnarnold.com/cours/javascript/manipulation-des-contenus'>Manipulation de contenu du DOM en JS</doclink> <br>


