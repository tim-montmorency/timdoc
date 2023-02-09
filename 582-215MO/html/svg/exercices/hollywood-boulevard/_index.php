<?php 
/**
 * @type     exercice
 * @title    SVG - Hollywood Boulevard
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devrez vous créer votre propre étoile ⭐️ sur le Hollywood Boulevard grace au pour de SVG.
 */
?>

<p class="spacer">Pour cet exercice, vous devrez vous créer votre propre étoile ⭐️ sur le <a target="_blank" href="https://fr.wikipedia.org/wiki/Hollywood_Boulevard">Hollywood Boulevard</a> grace au pour de SVG!</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="videos/svg-hollywood-boulevard-resultat.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="https://codepen.io/tim-momo/pen/YzjOWqv?editors=1100">Pen de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#e96ea7</color>
<color>#f7b32b</color>

<dots></dots>


<grostitre>Requis Illustrator</grostitre>

<checklist>
    Créez un fichier Illustrator d’une dimension de 100x100px.
    Utilisez l’outil de forme afin de tracer une étoile jaune 🟡 avec une bordure noire couvrant l’ensemble de votre canevas.
    Choisissez une typographie et inscrivez votre nom par-dessus l’étoile. Une fois terminé, vectoriser votre texte.
    Ajoutez un cercle noir au centre de l’étoile, sous votre nom.
    Pensez à renommer adéquatement chaque calque de votre fichier <em>(cette étape vous simplifiera grandement la vie pour la suite)</em>.
    Ajustez la dimension de votre canevas à son contenu afin de retirer l’espace vide superflu.
    Exportez votre SVG en fichier ou en code, selon votre préférence, et optimisez-le via <a onclick="event.stopPropagation()" target="_blank" href="https://jakearchibald.github.io/svgomg/">SVGOMG</a> afin de simplifier son contenu.
</checklist>

<img src="images/svg-hollywood-boulevard-illustrator.png">

<span class="remark">À ce stade-ci, votre étoile devrait ressembler à ceci.</span>

<dots></dots>


<grostitre>Requis web</grostitre>

<checklist>
    Collez dans la section HTML du Pen de départ le code fourni par SVGOMG.
    Si vous avez une balise <span class="inline-code">style</span>, copiez son contenu dans la section CSS de votre Pen et effacez cette balise.
    Remarquez comment votre SVG prend toute la largeur de l’aperçu tout en restant toujours parfaitement net. Faites en sorte que votre étoile ait une largeur correspondant à  50% de celle de la page et qu’elle s’affiche à 50px du haut de celle-ci.
    Déterminer quels éléments correspondent à quoi dans le code HTML en fonction des noms que vous avez donnés dans Illustrator. Au besoin, vous pouvez modifier les ids ou même ajouter des classes.
    Ciblez l’étoile ⭐️ en CSS et changez sa couleur de fond afin qu’elle devienne rose et que sa bordure devienne jaune, comme les étoiles du Hollywood Boulevard.
    Changez ensuite la couleur de fond du texte, ainsi que du cercle afin qu’ils deviennent jaunes eux aussi.
    Au survole de l’étoile, changez la couleur de sa bordure afin qu’elle devienne blanche et faites en sorte que l’opacité du cercle soit réduite à 75% seulement.
</checklist>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../../svg/"); ?>

<dots></dots>