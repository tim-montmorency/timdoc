<?php

/**
 * @type     exercice
 * @title    GSAP Timeline - Excitebike
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, nous allons créer une animation inspirée du jeu Nintendo Excitebike sorti en 1984! 🏍
 */
?>

<p>Pour cet exercice, nous allons créer une animation inspirée du <a href="https://fr.wikipedia.org/wiki/Excitebike" target="_blank" rel="noopener noreferrer">jeu Nintendo Excitebike</a> sorti en 1984!&nbsp;🏍</p>
   
<p>Aperçu du résultat 👇</p>
<clipasset src='images/excitebike.mp4'></clipasset>


<grostitre>Matériel</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/XWPwYjZ" >Pen de départ</doclink>

<h3>Médias</h3>
<mediafile src="images/bike-2.png">Moto mauve</mediafile>
<mediafile src="images/bike-3.png">Moto turquoise</mediafile>
<br>

<grostitre>Requis</grostitre>



<checklist>
Importez la librairie&nbsp;GSAP
Incorporez et installez le&nbsp;<a href="../../timeline#gsdevtools" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation()">plugiciel (plugin) GSDevTools</a>
Déplacez sur les X la piste de course de 3300px en l'espace de 5 secondes. Faites en sorte que l'animation commence plus doucement et s'accélère par la suite afin de créer une illusion de prise de&nbsp;vitesse.
Utilisez le GSDevTools afin de repérer quand le motocycliste doit s'animer et utiliser des&nbsp;<a target="_blank" rel="noopener noreferrer" href="../../timeline/#position-absolue"  onclick="event.stopPropagation()">positions absolues de temps</a>&nbsp;afin de déclencher l'animation au moment&nbsp;propice.
1<sup>re</sup>&nbsp;animation, faites monter le motocycliste de sorte qu'il se faufile entre les deux flaques d'huile au sol en l'espace d'une&nbsp;demi-seconde.
2<sup>e</sup>&nbsp;animation, faites en sorte que le motocycliste évite le gazon en le faisant descendre d'un corridor sur la piste en l'espace d'un quart de&nbsp;seconde.
3<sup>e</sup>&nbsp;animation, faites une rotation sur le motocycliste afin de lui faire entamer un&nbsp;<em>"wheeler"</em>&nbsp;en un quart de&nbsp;seconde.
4<sup>e</sup>&nbsp;animation, annulez la rotation afin que le motocycliste retrouve sa position normale à la fin de la&nbsp;piste.
</checklist>


<dots></dots>
<grostitre>Bonus</grostitre>

<checklist>Étoffez votre animation en ajoutant les motocyclistes mauve et turquoise à votre animation.</checklist>

<dots></dots>

<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../timeline") ?>

