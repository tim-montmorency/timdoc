<?php

/**
 * @type     exercice
 * @title    Timeline-The incredible machine
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous allez devoir animer le premier niveau du jeu The Incredible Machine, aussi surnommé TIM ;)
 */
?>

<p>Pour cet exercice, vous allez devoir animer le premier niveau du jeu The Incredible Machine, aussi surnommé TIM 😉</p>

<p>Classique de 1992, ce jeu consiste à positionner des éléments afin de générer des réactions en chaine permettant d’arriver à un résultat précis, dans ce cas, lancer le ballon de basket dans le panier.
</p>
   
<p>Aperçu du résultat 👇</p>
<clipasset src='images/the-incredible-machine.mp4'></clipasset>


<grostitre>Matériel</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/qBMGYJx">Pen de départ</doclink>

<warning>Vous n’avez qu’à ajouter du JavaScript <em>(nul besoin de modifier le&nbsp;HTML ou le CSS)</em>.</warning>   

<p>La librairie GSAP a aussi été ajoutée afin de vous laisser vous concentrer sur l'animation. Celle-ci n'aura pas à être 100% identique à celle de l'exemple ci-dessus, puisqu'une animation se conçoit beaucoup en se fiant à son instinct. L'important est que l'animation produite recrée le fonctionnement logique de la&nbsp;machine.</p>

<p>Puisque tous les éléments sont positionnés avec l'<a target="_blank" rel="noopener noreferrer" href="../../../../582-215MO/css/unites-de-mesure-avancees/">unité vmin</a>, il vous sera nécessaire d'utiliser cette unité à chaque fois que vous désirerez déplacer un&nbsp;élément.</p>

<p>Puisque le but de l'exercice est d'expérimenter la&nbsp;<a target="_blank" rel="noopener noreferrer" href="../../timeline">Timeline GSAP</a>, il est interdit d'utiliser la propriété&nbsp;<code>delay</code>. Utilisez plutôt&nbsp;les paramètres de position de la&nbsp;timeline.</p>

<grostitre>Requis</grostitre>



<checklist>
Par défaut, faites en sorte que votre animation soit sur pause tant que le bouton&nbsp;<em>"Démarrer"</em>&nbsp;n'est pas&nbsp;appuyé.
Faites chuter la boule de quilles 🎳 sur la cage de la souris&nbsp;🐁. Faites attention à choisir&nbsp;<a href="https://greensock.com/ease-visualizer" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation()">le ease adéquat</a>&nbsp;afin de créer l'effet de rebondissement&nbsp;souhaité.
Démarrez l'animation de la souris&nbsp;<em>(</em><code>.mouse</code><em>)</em>&nbsp;qui court à l'infini un peu avant la fin de l'animation de la boule de&nbsp;quilles.
En même temps que l'animation de la souris, faites tourner le roue&nbsp;<em>(</em><code>.wheel</code><em>)</em>&nbsp;à&nbsp;l'infini.
En même temps que l'animation précédente, faites tourner la roue&nbsp;<em>(</em><code>.wheel</code><em>)</em>&nbsp;du premier tapis roulant&nbsp;<em>(</em><code>.treadmill</code><em>)</em>&nbsp;à&nbsp;l'infini.
Déclenchez en même temps l'animation de la 2<sup>e</sup>&nbsp;boule de quilles. Celle-ci doit:<br> - Se déplacer pour aller frapper sur la 2<sup>e</sup>&nbsp;cage à&nbsp;souris.<br >- Tourner à&nbsp;l'infini.
Assurez-vous de bien peaufiner les étapes 3 à 6 de votre&nbsp;animation.
Récupérez les animations des étapes 3 à 6 et appliquez-les aux cages à souris, tapis roulants et boule de quilles&nbsp;restants.
Combinez différentes animations afin de faire:<br> - Rouler le ballon de&nbsp;basket 🏀<br> - Le déplacer dans le&nbsp;panier.<br> - Le faire rebondir au&nbsp;sol.<br> - L'amené dans le coin inférieur droit de la&nbsp;scène ↘️
</checklist>

<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../timeline") ?>

