<?php
/**
 * @type     article
 * @title    SVG
 * @icon     images/icon.png
 * @abstract Scalable Vector Graphics
 */
?>

<p class="spacer">Il n’y a jamais eu autant de résolutions d’écran différentes qu’en ce moment, ce qui amène son lot de défis. Notamment en termes de gestion des images. D’un côté, tout le monde souhaite avoir des images avec beaucoup de résolution afin qu’elles soient nettes <em>(crisp)</em>, peu importe l’écran sur lequel elles sont affichées. D’un autre, tous veulent des images légères et performantes, capables de se charger rapidement. </p>

<p>Malheureusement, avec des images traditionnelles <em>(matricielles)</em>, ces deux qualités sont difficilement conciliables. Augmenter la résolution d’une image diminue systématiquement sa performance et vice versa. Heureusement, il existe une alternative: les images SVG! Ce format offre une excellente performance et est toujours net, peu importe la résolution d’affichage demandée. Ces qualités font en sorte que le format SVG est un incontournable pour les logos, icônes, illustrations, ainsi que plusieurs autres types d'images sur le web.</p>

<codepen id="PoBdZRb" tab="result" height="340"></codepen>

<span class="remark">
    Glissez votre souris sur les images pour voir la différence.<br>
    À gauche, une image vectorielle <em>(svg)</em><br>
    À droite, une image matricielle <em>(png)</em>
</span>

<dots></dots>


<grostitre>Définition</grostitre>

<p>Le format SVG <em>(Scalable Vector Graphics)</em> est inspiré du format XML. Il contient une balise parent dans laquelle des balises enfants peuvent représenter des formes géométriques de base, de tracés, ou encore tout autre élément créés à même un logiciel de création d’images vectorielles. Cette particularité fait en sorte que le SVG est un format plus proche de la page HTML, avec son concept de balises, que du JPEG traditionnel. </p>

<p>La proximité entre le HTML et le SVG offre aussi un autre grand avantage: soit celui de pouvoir manipuler les composantes d’un SVG sur le web en CSS ou en JavaScript. Rendant ainsi le SVG beaucoup plus puissant que tout autre format d’images!</p>

<dots></dots>


<grostitre>Éléments courants</grostitre>

<p>Un SVG peut-être composé de plusieurs éléments.</p>

<p>Voici les plus courants:</p>

<ul>
    <li><incode>&lt;rect&gt;</incode> permets de définir des formes rectangulaires.</li>
    <li><incode>&lt;circle&gt;</incode> permets de définir des cercles.</li>
    <li><incode>&lt;ellipse&gt;</incode> similaire à circle, mais permet de définir des formes ovales.</li>
    <li><incode>&lt;polygon&gt;</incode> permets de définir toute forme géométrique constituée uniquement de lignes droites.</li>
    <li><incode>&lt;path&gt;</incode> élément générique permettant de définir n'importe quelle forme, incluant les celles comportant des lignes courbes.</li>
    <li><incode>&lt;g&gt;</incode> représente un groupe d'éléments.</li>
</ul>

<doclink href="https://developer.mozilla.org/fr/docs/Web/SVG/Element">Éléments SVG</doclink>

<dots></dots>


<grostitre>Exportation Illustrator</grostitre>

<p>Avant d’exporter un SVG à partir d’Illustrator vers le web, il est important de valider certains points:</p>

<h3>Nommage</h3>

<p>Porter attention aux noms attribués aux groupes et calques dans Illustrator. Ceux-ci seront utilisés à titre d’id sur les éléments constituant votre SVG. Il sera donc plus facile de savoir quelle balise correspond à quel élément si vous avez pris la peine de les nommer correctement.</p>

<p>Il est possible de remplacer les noms plus tard directement sur le SVG, mais afin d’éviter toute confusion, il est préférable de le faire adéquatement dès le départ.</p>

<h3>Polices</h3>

<p>Il est préférable de vectoriser tous les textes via l’option:</p>

<p><em>Texte</em> ➡️ <em>Vectoriser</em></p>

<p>Afin de convertir le texte en tracé vectoriel, permettant ainsi d’éviter que le navigateur remplace la police par une autre si celle-ci n’est pas disponible.</p>

<p>Remarquez, si vous importez déjà la police dans vos styles CSS, via <a href="../../css/google-fonts/">Google Fonts</a> ou encore <a href="../../css/font-face/">@font-face</a>, il n’est pas nécessaire de vectoriser vos textes. Cependant, si la police n’est pas déjà importée dans votre projet, il est probablement plus performant de vectoriser vos textes que d’importer une police supplémentaire.</p>

<h3>Bordures</h3>

<p>À moins de prévoir de manipuler les bordures d’un élément, il est préférable de les vectoriser afin de simplifier leur gestion. Pour ce faire, il suffit d’utiliser l’option:</p>

<p><em>Objet</em> ➡️ <em>Tracé</em> ➡️ <em>Vectoriser le contour</em></p>

<h3>Dimension</h3>

<p>Afin d’éviter d’exporter un espace vide superflu autour d’une Illustration, il est préférable de sélection l’option:</p>

<p><em>Objet</em> ➡️ <em>Plans de travail</em> ➡️ <em>Ajuster aux limites de l’illustration</em></p>

<h3>Exportation</h3>

<p>Pour exporter un SVG accéder à partir du menu à:</p>

<p><em>Fichier</em> ➡️ <em>Enregistrer Sous</em></p>

<p>Choisissez ensuite le format <em>“SVG (svg)”</em> et cliquez sur <em>“Enregistrer”</em>. Une fenêtre d’options sera alors affichée. Selon votre besoin, deux options seront alors disponibles:</p>

<ul>
    <li><em>“Ok”</em> pour sauvegarder le fichier SVG sur votre ordinateur.</li>
    <li><em>“Code SVG…”</em> afin d’obtenir le code directement.</li>
</ul>

<dots></dots>


<grostitre>Optimisation SVGOMG</grostitre>

<p>Par défaut les fichiers SVG exportés par Illustrator sont complexes. Les rendant ainsi moins performants et plus complexes à manipuler. Il est donc suggéré de les optimiser via <a target="_blank" href="https://jakearchibald.github.io/svgomg/">SVGOMG</a> afin de retirer le code superflu. Cet outil réussit souvent à retirer plus de la moitié du code constituant un SVG fraîchement sorti d’Illustrator.</p>

<p>Pour l’utiliser, vous pouvez télécharger votre fichier via l’option <em>“Open SVG”</em> ou simplement le glisser-déposer sur la page de <a target="_blank" href="https://jakearchibald.github.io/svgomg/">SVGOMG</a> afin de le charger.</p>

<p>Si vous avez choisi l’option <em>“Code SVG…”</em> afin d’obtenir le code directement, vous pouvez cliquer sur <em>“Paste markup”</em> et coller le code à cet endroit simplement.</p>

<h3>Options suggérés</h3>

<p>Certaines <em>“Features”</em> permettent d’améliorer grandement la qualité du fichier retourné par <a target="_blank" href="https://jakearchibald.github.io/svgomg/">SVGOMG</a>. Il est donc conseillé de les activées.</p>

<ul>
    <li><em>Round/rewrite paths</em> afin de retirer tous les points superflus dans vos formes.</li>
    <li><em>Shapes to (smaller) paths</em> afin de convertir les formes en path lorsque cette alternative est plus performante.</li>
    <li><em>Prefer viewBox to width/height</em> indique à votre SVG un ratio à garder plutôt qu'une largeur et une hauteur fixe. </li>
</ul>

<warning>Attention, <a target="_blank" href="https://jakearchibald.github.io/svgomg/">SVGOMG</a> peut parfois suroptimiser un SVG.</warning>

<p>Un aperçu du résultat est alors disponible. Il est possible de télécharger la nouvelle version du fichier SVG via la flèche bleue pointant vers le bas ou encore de récupérer le code optimisé dans le presse-papier via l’icône de copie au-dessus de ladite flèche.</p>

<tool href="tools/svgomg/"></tool>

<dots></dots>


<grostitre>Utilisation</grostitre>

<p>Il existe plusieurs façons d’afficher une image SVG sur le web avec leurs différents avantages et inconvénients.</p>

<h3>Img</h3>

<p>Comme toute image traditionnelle <em>(jpg, png, etc.)</em>, il est possible d’afficher un SVG via une balise <incode>&lt;img&gt;</incode>. Cependant, cette approche limite grandement les possibilités de manipulation dudit SVG.</p>

<codepen id="GRBXZvy" tab="html,result" height="340"></codepen>

<h3>Background-image</h3>

<p>Il est aussi possible d’afficher un SVG en image d’arrière-plan comme une image traditionnelle. Cependant, cette approche limite grandement les possibilités de manipulation dudit SVG.</p>

<codepen id="OJwoNOZ" tab="css,result" height="340"></codepen>

<h3>Object</h3>

<p>La balise object est la méthode de prédilection afin d’afficher un SVG puisqu’elle permet non seulement de l’afficher, mais aussi de manipuler ses composantes et de la mettre à jour facilement, simplement en remplaçant le fichier SVG.</p>

<codepen id="WNKgwML" tab="html,result" height="340"></codepen>

<a name="inline"></a><h3>Inline</h3>

<p>Coller le code d’un SVG dans une page HTML est la méthode la plus facile d’afficher un SVG tout en gardant ses capacités de manipulation. Cependant, chaque fois que ledit SVG sera modifié, il faudra re-exporter son code et aller le coller dans les pages HTML aux endroits l’affichant.</p>

<codepen id="abjaNGZ" tab="html,result" height="340"></codepen>

<p>Remarquez l'attribut <incode>viewbox</incode>. Les 4 chiffres à l'intérieur définissent les dimensions de base de l'image. Les deux premiers représentent la largeur et la hauteur minimale de l'image <em>(généralement, ces chiffres ont une valeur de 0)</em>. Les deux suivants représentent la largeur et la hauteur de référence utilisée afin de positionnement les éléments de l'image.</p>

<p>Tous les éléments à l'intérieur de la balise <incode>&lt;svg&gt;</incode> sont des formes à afficher dans l'image.</p>

<ol>
    <li>La première est un rectangle rouge de 100 par 100, donc couvrant l'ensemble de la surface de l'image.</li>
    <li>La deuxième est un polygone vert affiché par-dessus le carré rouge. L'attribut <incode>points</incode> correspond à la position des points X et Y constituant la forme à afficher. Par exemple, <incode>0,0</incode> indique que le 1er point est positionné à la position X:0 et Y:0. Le 2e à la position X:50 et Y:0 et ainsi de suite.</li>
    <li>La troisième est aussi un polygone, cette fois-ci bleu, assez similaire au polygone précédent.</li>
</ol>

<dots></dots>

<grostitre>Manipulation CSS et JS</grostitre>

<p>Lorsqu'une image SVG est <a href="#inline">importée en ligne</a>, il est possible de manipuler ses formes en CSS et JavaScript, comme toute autre balise HTML.</p>

<h3>CSS</h3>

<p>Plusieurs propriétés CSS de base sont compatibles avec les formes SVG. Cependant, certaines propriétés leur sont propres:</p>

<ul>
    <li><incode>fill</incode> contrôlant la couleur de fond <em>(équivalent de <incode>background-color</incode>)</em>.</li>
    <li><incode>stroke</incode> contrôlant la bordure <em>(équivalent de <incode>border</incode>)</em>.</li>
</ul>

<p>Par exemple, la propriété <incode>fill</incode> de la forme verte est modifiée lorsque la forme est survolée.</p>

<codepen id="BaPOKXM" tab="css,result" height="340"></codepen>

<span class="remark">Survolez la forme verte du SVG pour voir sa couleur changer au <incode>:hover</incode>.</span>

<doclink href="https://developer.mozilla.org/fr/docs/Web/SVG/Element/svg">svg</doclink>
<doclink href="https://www.w3schools.com/html/html5_svg.asp">svg</doclink>

<dots></dots>

<tool href="tools/glyphs-fyi/"></tool>
<exercice href="exercices/hollywood-boulevard/"></exercice>

<dots></dots>

