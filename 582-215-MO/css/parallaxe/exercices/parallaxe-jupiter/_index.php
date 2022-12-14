<?php 
/**
 * @type     exercice
 * @title    Parallaxe - Jupiter
 * @icon     images/thumb.jpg
 * @abstract Reconstituer un effet parallaxe dans l’espace de sorte que les éléments derrière la planète Jupiter.
 */
?>

<p>Pour cet exercice, vous devrez reconstituer un effet parallaxe dans l’espace de sorte que les éléments derrière la planète Jupiter se déplaçant moins rapidement que celle-ci, mais que ceux devant se déplacent plus rapidement.<br><br>Aperçu du résultat 👇</p>

<clip src="videos/parallaxe-jupiter-apercu.mp4"></clip>

<grostitre>Matériel</grostitre>

<doclink spacer="true" href="https://codepen.io/ZmotriN/pen/NWzVNPa?editors=1100">Pen de départ</doclink>
<br><br>

<h2>Médias</h2>
<mediafile src="images/bg.svg">Background</mediafile>
<mediafile src="images/arriere-plan.svg">Arrière-plan</mediafile>
<mediafile src="images/jupiter.svg">Jupiter</mediafile>
<mediafile src="images/avant-plan.svg">Avant-plan</mediafile>

<grostitre>Requis</grostitre>

<checklist>
    Ajoutez l'image bg en arrière-plan à la page.
    Faites en sorte que l'élément <span class="inline-code">.parallax</span> est une hauteur équivalente à celle d'une page entière, qu'il accepte le défilement vertical uniquement ↕️ et qu'il est une perspective équivalente à 100px.
    Faites en sorte que chaque calque <em>(layer)</em> prenne toute la largeur de la page, est une hauteur équivalente à trois hauteurs de page <em>(afin de forcer le défilement)</em>. Qu'ils se superposent un par-dessus l'autre et que leurs images d'arrière-plan soient centrées, affichées en entier <em>(non rognées)</em> et qu'elles ne se répètent pas.
    Attribuez les images d'arrière-plan: <em>Arrière-plan</em>, <em>Jupiter</em> et <em>Avant-plan</em> aux calques qui vous semblent les plus judicieux et ajustez leur distance sur l'axe des Z afin que certains éléments paraissent plus loin. N'oubliez pas d'ajuster leur dimension <em>(scale)</em> afin que malgré la distance les éléments gardent leur taille d'origine. Faites défiler votre page afin de voir l'effet de profondeur et de déterminer si des ajustements sont nécessaires.
    Afficher le titre <em>"Jupiter"</em> en blanc, majuscule, avec une taille de 60px et la police Georgia en plein centre de l'écran de sorte que ce titre reste immobile au défilement de la page.
</checklist>

<dots></dots>

<grostitre>Notes de cours</grostitre>

<doclink spacer="true" href="../../">Parallaxe</doclink>

<dots></dots>