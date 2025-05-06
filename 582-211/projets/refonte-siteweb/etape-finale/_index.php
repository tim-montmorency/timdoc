<?php
/**
 * @type     article
 * @title    Étape finale
 * @icon     images/icon-web.jpg
 * @abstract Intégration du site complet (4 pages), doit être fonctionnel et responsive. 
 */
?>
<grostitre>Remise finale</grostitre>

<ul>
  <li>Groupe 1 et 2: dimanche le <strong>18 mai avant 23h59</strong> </li>
  <li>Groupe 3: vendredi le <strong>23 mai avant 13h30</strong></li>
</ul>
<dots></dots>
<grostitre>Corrigez, ajustez le projet</grostitre>
<p>Corrigez, ajustez en fonction de la rencontre avec l'enseignante aux cours 14 et au cours 15.</p>
<p>Consultez le wiki cours 14 et 15 pour les corrections et ajustement généraux en plus des conseils individuels que vous aurez reçus.</p>

<dots></dots>
<grostitre>Intégration de vos pages respectives</grostitre>
<p>Vous pouvez vous aider pour la finition mais le plus gros de l'intégration des pages attitrées doit avoir été fait individuellement d'abord.</p>

<thumbsup>
  N'oubliez pas de styliser <strong>mobile first</strong>. Par la suite, ajouter les styles pour plus grands écrans via des <strong>@media queries.</strong>
</thumbsup>

<alert>N'oubliez pas de faire un <em>commit</em> et un <em>push</em> vers GitHub après chaque modification importante. Vous devez aussi faire un <em>pull</em> avant de commencer à travailler sur votre projet à chaque jour, afin d'être certain d'avoir la version la plus récente du projet.</alert>

<dots></dots>
<grostitre>Ajout d'une animation</grostitre>
<p>Ajoutez une <em>animation CSS</em> à un élément de votre choix (ou vous pouvez ajouter un élément qui n'était pas inclu dans votre design de base). L'animation doit être effectuée en minimum 4 étapes. Elle doit s’intègrer harmonieusement au design, sans détourner l’attention de l’utilisateur. Elle doit fonctionner aussi bien sur mobile que sur ordinateur (desktop).</p>



<dots></dots>
<grostitre>Transitions</grostitre>
<p>Les effets de survol des éléments interactifs (liens, boutons etc) doivent tous inclure une <em>transition CSS</em> fluide, aussi bien à l’entrée qu’à la sortie du survol.</p>

<dots></dots>
<grostitre>Les commentaires CSS </grostitre>

<ol>
  <li>Vous devez <strong>commenter l’ensemble de votre code CSS</strong> afin de démontrer votre compréhension.</li>
  <li>Ajoutez également des <strong>séparateurs visuels</strong> (sous forme de commentaires) pour organiser vos styles en sections claires et structurées.</li>
</ol>


<alert>IMPORTANT: Les commentaires sont rédigés vous même et non pas par un outil tierce d'intelligence articifielle. Il est possible que je vous pose des questions sur votre code, vous devez être à même de me répondre clairement et sur le champ.</alert>

<p>Exemple d'un niveau commentaires CSS auquel je m'attends: </p>

<highlight  lang="css">/*--------------------------------------------------------- 
# SECTION : Styles généraux
---------------------------------------------------------*/ 
body{
  ...
}
/* Conteneur en flex permettant d'aligner le contenu sur une ligne (row) et donc l'espace restant sera divisé entre chaque élément enfant du .container */
.container {
  display: flex;
  justify-content: space-between;
}
/* Titre principal de la page avec une transition d'agrandissement d'échelle au survol */
h1 {
  font-size: 1.3rem;
  transition: transform 0.3s ease;
}
h1:hover {
  transform: scale(1.1);
}

/*---------------------------------------------------------- 
# SECTION : En-tête (nav, log etc)
----------------------------------------------------------*/ 
header{
  ...
}

/*---------------------------------------------------------- 
# SECTION : Héros
----------------------------------------------------------*/ 
section.hero{
  ...
}

/*---------------------------------------------------------------- 
# ADAPTATION PAR MEDIA QUERIES (Responsiveness) pour grands écrans

Car ce qui précède les media queries est stylisé pour mobile
en premier (mobile first).
----------------------------------------------------------------*/ 

/* Styles d'exception pour les écrans d'une largeur de minimum 778px et plus */
@media screen and (min-width: 778px) {
  /* Adapter la taille fixe du titre principal qui était de 1.3rem et le changer pour 4vw qui équivaut à 4% de la largeur du viewport (de la fenêtre) . */
  h1{
    font-size: 4vw;
  }
}
</highlight>





<dots></dots>
<grostitre>Critères</grostitre>
<ul>
  <li>Respects des consignes et échéanciers à toutes les étapes du projet.</li>
  <li>Le site respecte la maquette Figma, à l’exception de certaines améliorations que vous avez choisies d’apporter. Celles-ci doivent être clairement commentées et expliquées dans le code.</li>
  <li>Des améliorations et des corrections ont été apportées à la suite de nos rencontres en classe lors des cours 14 et 15. Vous devez aussi avoir consulté le wiki cours 14 et 15 pour ajuster et corriger votre travail en fonction des <strong>Conseils pour tous</strong>.</li>
  <li>Les <em>commits</em> Git sont fréquents et bien nommés. Les deux étudiants font des <em>commits</em> individuellement et c'est visibile sur l'historique de Github.</li>
  <li>Unité visuelle et structurelle : les quatre pages suivent une même logique de mise en page, assurant une navigation fluide et une apparence uniforme.</li>
  <li>Le site est <em>responsive</em>. Il s’adapte à tous les formats d’écran : mobile et bureau (desktop).</li>
  <li>Le site est entièrement fonctionnel et permet une navigation fluide d’une page à l’autre.</li>
  <li>L’animation est bien réalisée, comportant au minimum quatre étapes. Elle s’intègre harmonieusement au design, sans détourner l’attention de l’utilisateur. Elle fonctionne aussi bien sur mobile que sur ordinateur (desktop).</li>
  <li>Les effets de survol des éléments interactifs (liens, boutons, etc.) incluent une transition CSS fluide, aussi bien à l’entrée qu’à la sortie du survol.</li>
  <li>Le code est bien commenté (HTML et CSS) mais, en particulier le CSS, conformément aux consignes. Les commentaires démontrent la compréhension des techniques utilisées et sont rédigés par l’étudiant lui-même, sans l’aide d’un outil d’intelligence artificielle tiers.</li>


</ul>


<dots></dots>
<grostitre>Remise</grostitre>
<ul>
  <li>Groupe 1 et 2: dimanche le <strong>18 mai avant 23h59</strong> </li>
  <li>Groupe 3: vendredi le <strong>23 mai avant 13h30</strong></li>
</ul>
<p>Détails de la remise finale à venir.</p>