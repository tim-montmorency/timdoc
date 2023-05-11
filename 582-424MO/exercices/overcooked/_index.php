<?php

/**
 * @type     exercice
 * @title    Overcooked
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice nous allons animer une inspiration du jeu Overcooked! - Édition Hamburger 🍔 
 */
?>

<p>Pour cet exercice nous allons animer une inspiration du jeu <a href="https://fr.wikipedia.org/wiki/Overcooked">Overcooked!</a> - Édition&nbsp;Hamburger 🍔</p>
   
<p>Aperçu du résultat 👇</p>
<clipasset src='fichiers/demo_generale.mp4'></clipasset>


<grostitre>Matériel</grostitre>
<doclink href="fichiers/nom_prenom_overcooked.zip" >Dossier de départ 📁</doclink>

<warning>Vous n’avez qu’à écrire du HTML et du JavaScript <em>(nul besoin de modifier le CSS)</em>. La librairie GSAP est aussi déjà incorporée pour&nbsp;vous.</warning>

<dots></dots>

<grostitre>Bouton "Instructions"</grostitre>

<checklist>
Importez Bootstrap dans votre&nbsp;projet.<br>Le bouton&nbsp;<em>Instructions</em>&nbsp;devrait alors changer&nbsp;d'apparence, vous reconnaitrez le style de base de bouton Bootstrap.
Ajoutez la classe Bootstrap nécessaire afin de centrer le bouton&nbsp;<em>Instructions</em>&nbsp;horizontalement ↔️
Faites en sorte que ce bouton déclenche un modal Bootstrap avec le titre&nbsp;<code>Instructions</code>&nbsp;et contenant le texte&nbsp;suivant:<br><em>Pour débuter une partie, appuyez sur le bouton "Go!". Cliquez ensuite sur chacun des ingrédients afin d'assembler le hamburger commandé.</em>
Faites en sorte que le modal soit étroit, s'affiche au centre de la page&nbsp;<em>(autant horizontalement que verticalement)</em>&nbsp;et apparaisse en&nbsp;fondu.
</checklist>

<clipasset src='fichiers/demo_modal.mp4'></clipasset>

<dots></dots>

<grostitre>Chef</grostitre>

<checklist>
Importez GSAP dans votre&nbsp;projet.
Créez une animation GSAP utilisant une timeline afin de déplacer le chef de 375px vers la droite en l'espace de 3&nbsp;secondes.
Lorsque cette animation est terminée, ajoutez la classe&nbsp;<code>.flip</code>&nbsp;au chef afin de le faire changer de&nbsp;direction ⬅️.
Faites revenir le chef à sa position initiale en l'espace de 3&nbsp;secondes.
Lorsque cette animation est terminée, retirez la classe&nbsp;<code>.flip</code>&nbsp;au chef afin de le faire changer de direction à&nbsp;nouveau ➡️.
Répétez cette animation à&nbsp;l'infini.<br>Votre chef devrait se déplacer de droite à gauche à l'infini au travers de la cuisine à ce&nbsp;stade.
Mettez votre animation sur pause par défaut et déclenchez là lorsque l'usager appuie sur le bouton&nbsp;<em>GO! (le&nbsp;four)</em>.
</checklist>




<dots></dots>

<grostitre>Logo "Mini Overcooked - Édition Hamburger"</grostitre>

<checklist>
Importez le plugiciel scrollTrigger dans votre projet. 
Synchronisé avec le défilement de la page (scroll), le logo (<code>.logo</code>) doit faire un effet parallax par rapport au reste de la scene. Utilisez GSAP pour réaliser ce mouvement. 
</checklist>

<clipasset src='fichiers/demo_logo_parallax.mp4'></clipasset>




<dots></dots>

<grostitre>Ingrédients</grostitre>

<checklist>
Créez une (et une seule) animation GSAP faisant apparaître et déplacer les ingrédients <code>.ingredients</code> un après l'autre SANS utiliser la timeline cette fois. Leur opacité doit se rendre à 100% et ils doivent se déplacer sur l’axe des Y sur 200px vers le bas en 1 seconde, un après l’autre, à intervalle de 0,5 seconde. 
Lorsque tous les ingrédients ont terminé d’apparaitre, appelez la fonction existante <code>bindClickEventOnIngredients</code>.
</checklist>





<dots></dots>

<grostitre>Service du burger</grostitre>
<p>Trouvez dans le code où ajouter les prochaines instructions. </p>
<checklist>
Si les 5 ingrédients ont été cliqués, arrêter l’animation d’aller-retour du chef que vous avez préalablement créé. 
</checklist>

<dots></dots>
<p>Trouvez dans le code où ajouter les prochaines instructions. </p>
<checklist>
Animez avec GSAP le hamburger complet qui a été créé dans la fonction <code>bindClickEventOnIngredients</code> (le code de la création du hamburger est déjà là). 
Cette animation devra se déclencher une demi-seconde après la création du dit hamburger ⏱. 
Faites monter votre hamburger de 270px en l'espace de 4 secondes et demi à vitesse constante ⬆️. 
Par la suite, faites-le disparaitre en fondu en l'espace d'une demi-seconde. 
Lorsque cette animation est terminée, faites une boucle sur tous les ingrédients. 
Dans cette boucle, vous devrez enlever la classe <code>.pret</code> sur l’ingrédient en cours dans la boucle. 
</checklist>

<dots></dots>

<grostitre>Remise</grostitre>
<p>Pas de remise. C'est un exercice.</p>

