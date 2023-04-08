<?php

/**
 * @type     exercice
 * @title    GSAP ScrollTrigger - Historique Zelda
 * @icon     images/thumb.jpg
 * @abstract Créer des animations synchronisées avec le défilement de la page
 */
?>

<p>Pour cet exercice nous allons recréer une page démontrant l’évolution de la <a href="https://www.zelda.com/">franchise Zelda au Nintendo</a> et la bonifier d’animations synchronisées avec le défilement de la&nbsp;page.</p>
   
<p>Aperçu du résultat 👇</p>
<clipasset src='images/zelda-historique-scrolltrigger.mp4'></clipasset>


<grostitre>Matériel</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/xxybRWR" >Pen de départ</doclink>

<warning>Vous n’avez qu’à ajouter du JavaScript <em>(nul besoin de modifier le HTML et le&nbsp;CSS)</em>.</warning>

<p>Les librairies GSAP et ScrollTrigger sont déjà incluses dans le Pen de départ.</p>

<grostitre>Requis</grostitre>

<checklist>Vous devez utiliser une boucle <code>forEach</code> sur chacune des bannières afin de déclencher une animation lorsqu'une d'elles devient entièrement visibles dans la&nbsp;fenêtre.
Lorsqu'une bannière devient visible, doublez la taille de son image et animer là de sorte qu'elle retrouve sa taille&nbsp;d'origine.
En même temps que l'animation précédente, faites apparaitre en fondu le titre du jeu et le faites le monter de 100px vers le haut, jusqu'à son point d'origine.
Faites ensuite apparaitre en fondu l'année de sortie.
</checklist>
<dots></dots>

<grostitre>Notes de cours 📚</grostitre>
<doclink href='https://smnarnold.com/cours/javascript/queryselectorall'>QuerySelectorAll()</doclink><br>
<doclink href='https://smnarnold.com/cours/javascript/boucle-foreach'>Boucle forEach()</doclink>
<?php intlink("../../scrolltrigger/") ?>
<?php intlink("../../timeline/") ?>

