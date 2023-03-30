<?php

/**
 * @type     exercice
 * @title    GSAP Timeline - The incredible machine
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

<p>Puisque tous les éléments sont positionnés avec l'<a target="_blank" rel="noopener noreferrer" href="../../../582-215MO/css/unites-de-mesure-avancees/">unité vmin</a>, il vous sera nécessaire d'utiliser cette unité à chaque fois que vous désirerez déplacer un&nbsp;élément.</p>

<p>Puisque le but de l'exercice est d'expérimenter la&nbsp;<a target="_blank" rel="noopener noreferrer" href="../../timeline">Timeline GSAP</a>, il est interdit d'utiliser la propriété&nbsp;<code>delay</code>. Utilisez plutôt&nbsp;les paramètres de position de la&nbsp;timeline.</p>

<grostitre>Requis</grostitre>



<checklist>
Par défaut, faites en sorte que votre animation soit sur pause tant que le bouton&nbsp;<em>"Démarrer"</em>&nbsp;n'est pas&nbsp;appuyé.
</checklist>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../timeline") ?>

