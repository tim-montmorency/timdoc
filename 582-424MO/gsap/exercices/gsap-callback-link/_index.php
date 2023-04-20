<?php

/**
 * @type     exercice
 * @title    GSAP Callback - Link
 * @icon     images/thumb-link.jpg
 * @abstract Pour cet exercice, nous allons synchroniser des animations CSS de type sprite sheet de Link, le protagoniste de la franchise Zelda, avec GSAP ScrollTrigger.
 */
?>

<p>Pour cet exercice, nous allons synchroniser des animations CSS de type sprite sheet de <a href="https://fr.wikipedia.org/wiki/Link_(The_Legend_of_Zelda)" target="_blank">Link, le protagoniste de la franchise Zelda</a>, avec GSAP ScrollTrigger&nbsp;⚔️.</p>

<p>Aperçu du résultat 👇</p>
<clipasset src='images/link-scrolltrigger.mp4'></clipasset>


<grostitre>Matériel</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/VwEeVdz">Pen de départ</doclink>


<warning>Vous n’avez qu’à ajouter JavaScript <em>(nul besoin de modifier le&nbsp;HTML ou le CSS)</em>.</warning>  

<p>Les librairies GSAP et ScrollTrigger sont déjà inclues dans le Pen, vous laissant ainsi vous concentrer sur l'animation GSAP à réaliser.</p>

<grostitre>Requis</grostitre>

<checklist>
Créez-vous une animation GSAP sur l'élément correspondant au niveau&nbsp;<em>(</em><code>.level</code><em>)</em>. Cette animation devra être synchronisée avec le défilement de la page. Aussi étrange que cela puisse paraitre, aucune propriété de l'animation ne devra être animée. Cette animation ne servira que de référence afin de synchroniser certains&nbsp;événements.
Lorsque le niveau&nbsp;<em>(</em><code>.level</code><em>) </em>défile, ajoutez la classe&nbsp;<code>.is-scrolling</code>&nbsp;au body de la&nbsp;page.
Après 250ms sans défilement, retirez la classe&nbsp;<code>.is-scrolling</code>&nbsp;du body de la&nbsp;page.
Si le défilement monte ⬆️, ajoutez la classe&nbsp;<code>.direction-up</code>&nbsp;et retirez la classe&nbsp;<code>.direction-down</code>&nbsp;du&nbsp;body.
Si le défilement descend ⬇️, ajoutez la classe&nbsp;<code>.direction-down</code>&nbsp;et retirez la classe&nbsp;<code>.direction-up</code>&nbsp;du&nbsp;body.
</checklist>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../scrolltrigger-intermediaire/") ?>



