<?php
/**
 * @type     exercice
 * @title    GSAP Parallax - Ballons dans le ciel
 * @icon     images/thumb-parallax.jpg
 * @abstract Pour cet exercice, nous allons utiliser scrollTrigger pour faire un effet parallax de 3 couches avec les nuages et les ballons.
 */
?>

<p>Pour cet exercice, nous allons utiliser scrollTrigger pour faire un effet parallax de 3 couches avec les nuages et les ballons.</p>
   
<p>Aperçu du résultat 👇</p>
<clipasset src='images/ballons-parallax.mp4'></clipasset>

<grostitre>Matériel</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/qBJjmOe">Pen de départ</doclink>

<warning>Vous n’avez qu’à ajouter JavaScript <em>(de pas modifier le&nbsp;HTML ou le CSS)</em>. Par contre, il est fortement conseillé de jeter un oeil au CSS et HTML pour comprendre la structure.</warning>  

<p>Les librairies GSAP et ScrollTrigger sont déjà inclues dans le Pen, vous laissant ainsi vous concentrer sur l'animation GSAP à réaliser.</p>

<grostitre>Requis</grostitre>

<checklist>
Pour chaque élément ayant la classe <em>.parallax-bg</em>, récupérez leur valeur de l'attribut de donnée <incode>data-vitesse</incode> et stockez les, chacune dans une variable.
Au défilement de la page, faites en sorte que les 3 couches ayant chacune la classe <em>.parallax-bg</em> se déplacent sur l'axe vertical vers le haut, à des vitesses différentes (utilisez vos variables de l'étape 1), afin de simuler l'effet de profondeur.
Faites en sorte que l'animation reviennne en arrière si on remonte, qu'elle soit syncronisée avec la position de la barre de défilement de la page.

</checklist>


<grostitre>Notes de cours 📚</grostitre>
<intlink href="../../parallaxe/"></intlink>
<intlink href="../../scrolltrigger/"></intlink>
<intlink href="../../scrolltrigger-intermediaire/"></intlink>
<br>
<doclink href='https://smnarnold.com/cours/javascript/gestions-des-attributs#getAttribute()'>Récupérer la valeur d'un attribut d'une balise HTML</doclink>
<doclink href='https://smnarnold.com/cours/css/parallax'>Qu'est-ce que le parallaxe</doclink>





