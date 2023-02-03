<?php

/**
 * @type     exercice
 * @title    Bootstrap - Navbar et cartes
 * @icon     images/thumb.png
 * @abstract Pour cet exercice vous devrez recréer une mise en page responsive constituée de composantes Bootstrap.
 */
?>

<p class="spacer">Pour cet exercice vous devrez recréer une mise en page responsive constituée de composantes Bootstrap.</p>

<p>Aperçu du résultat 👇</p>
<img src="images/bootstrap-cartes-navbar.png" alt="Resultat final sur mobile, tablette et grand écran">

<grostitre>Matériel</grostitre>

<doclink href="https://codepen.io/tim-momo/pen/GRBQWgx">Pen de départ</doclink>

<warning>Le CSS et JS de Bootstrap 5 est inclus dans celui-ci et certains éléments visuels sont déjà aussi présents afin de vous faciliter la tâche.</warning>



<grostitre>NavBar</grostitre>

<checklist>
    Ajoutez une navbar pour représenter celle démontrée dans l'exemple ci-haut.
    Ajoutez en CSS la couleur de fond #f08a30 à la navbar.
    Ajustez son thème de couleur pour que le texte devienne blanc et contraste plus avec le fond orange.
    Ajoutez un logo textuel avec la mention <em>"Démo"</em>.
    Ajoutez un menu déroulant intitulé <em>"Sous-menu"</em>.
    À l'intérieur du menu déroulant, ajoutez 6 liens vides <em>(#)</em> Titre 1, Titre 2, …, Titre 6
    Ajoutez les classes nécessaires (avec les breakpoints) pour réaliser les 3 version (mobile, tablette et desktop)
</checklist>

<grostitre>Cartes</grostitre>


<checklist>
Ajoutez en CSS 10px verticalement à l'extérieur des cartes afin d'éviter qu'elles ne se touchent.
Chaque carte doit prendre toute la largeur disponible par défaut.
À partir du breakpoint <code>sm</code>, deux cartes doivent afficher par ligne.
À partir du breakpoint <code>md</code>, les 4 premières cartes doivent afficher sur une ligne et les deux dernières sur une autre.
À partir du breakpoint <code>lg</code>, les 2 dernières cartes doivent afficher en format horizontal.</checklist>

<dots> </dots>

<grostitre>Notes de cours</grostitre>

<div id="listing">
    <div class="list-grid">
        <div class="list-grid__item">
            <div class="list-grid__item__icon" style="background-image: url('../../navbar/images/icon.png');"></div>
            <div class="list-grid__item__description"><span class="list-grid__item__title"><a href="../../navbar/">NavBar</a></span> <span class="list-grid__item__abstract">La barre de navigation Bootstrap</span></div>
        </div>
        <div class="list-grid__item">
            <div class="list-grid__item__icon" style="background-image: url('../../cartes/images/icon.png');"></div>
            <div class="list-grid__item__description"><span class="list-grid__item__title"><a href="../../cartes/">Cartes</a></span> <span class="list-grid__item__abstract">Permettent, comme leur nom l'indique, de générer rapidement et facilement des cartes</span></div>
        </div>
       
    </div>
</div>