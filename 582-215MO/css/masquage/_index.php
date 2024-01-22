<?php
/**
 * @type     article
 * @title    Masquage
 * @icon     images/icon.png
 * @abstract clip-path, mask-image
 * @ref      web/css
 */
?>

<p class="spacer">Comme dans Photoshop, il est possible d'empêcher une portion d'un élément d'être affichée en définissant une région de rognage. Seule une zone spécifique de l'élément sera affichée. Pour ce faire, il existes deux méthodes: utiliser une fonction ou une image de référence.</p>

<dots></dots>


<grostitre>clip-path</grostitre>

<p>La propriété <incode>clip-path</incode> permet d'utiliser une fonction comme méthode de masquage.</p>

<p>Exemples:</p>


<codepen id="XWxXPyz" tab="result"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/clip-path">clip-path</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_clip-path.php">clip-path</doclink>

<dots></dots>


<grostitre>mask-image</grostitre>

<p>La propriété <incode>mask-image</incode> permet d'utiliser une image <em>SVG</em> comme méthode de masquage.</p>

<p>Exemples:</p>

<codepen id="jOeWeqw" tab="result"></codepen>

<thumbsup>Assurez-vous que votre image et votre masque aient le même <em>aspect ratio</em>.</thumbsup>

<warning>Comme la propriété <incode>mask-image</incode> n'est toujours pas standard, en plus de la propriété, vous devez aussi ajouter sa version <em>Webkit</em>: <incode>-webkit-mask-image</incode>.</warning>

<doclink href="https://developer.mozilla.org/en-US/docs/Web/CSS/mask-image">mask-image</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_mask-image.php">mask-image</doclink>
<doclink href="https://css-tricks.com/almanac/properties/m/mask-image/">mask-image</doclink>

<dots></dots>

<exercice href="./exercices/barbie-selfie/"></exercice>

<dots></dots>