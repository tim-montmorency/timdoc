<?php
/**
 * @type     article
 * @title    Emmet
 * @icon     images/icon.png
 * @abstract Accélérateur de code
 */
?>

<p class="spacer">Écrire du HTML est relativement facile. Cependant, cette tâche peut rapidement devenir longue et répétitive. Heureusement, l’extension Emmet permet d’éviter une partie de cette redondance, tout en accélérant le processus.</p>

<p>De plus, cette extension est disponible sur la majorité des éditeurs de texte et vient même préinstallée sur <a target="_blank" href="https://codepen.io/">CodePen</a> et <a target="_blank" href="https://code.visualstudio.com/">VS Code</a>.</p>

<dots></dots>


<grostitre>Gabarit HTML</grostitre>


<p>Une page HTML est toujours constituée d'un doctype, des balises <incode>html</incode>, <incode>head</incode>, <incode>body</incode>, etc. Plutôt que de mémoriser ce gabarit <em>(boilerplate)</em>, Emmet propose l'abréviation <incode>! + tab</incode> afin d'obtenir un gabarit de base prêt à être utilisé.</p>

<clipasset src="videos/emmet-boilerplate.mp4"></clipasset>

<dots></dots>


<grostitre>Balise</grostitre>

<p>Par exemple, plutôt que de taper au long:</p>

<clipasset src="videos/emmet-strong-1.mp4"></clipasset>

<p>Il est possible de simplement taper le nom de la balise désirée, suivi de la touche <incode>tab</incode>. Dans ce cas <incode>strong + tab</incode></p>

<clipasset src="videos/emmet-strong-2.mp4"></clipasset>

<dots></dots>


<grostitre>ID</grostitre>

<p>Il est aussi possible d'écrire une balise avec un id en préfixant ce dernier par un <incode>#</incode>, comme en CSS, suivi de la touche <incode>tab</incode>.</p>

<clipasset src="videos/emmet-id.mp4"></clipasset>

<dots></dots>


<grostitre>Sans balise</grostitre>

<p>Il est possible d'allez encore plus rapidement en omettant de spécifier une balise. Dans ce scénario, Emmet se basera sur le contexte pour déterminer le type de balise le plus approprié.</p>

<clipasset src="videos/emmet-sans-balise.mp4"></clipasset>

<dots></dots>


<grostitre>Texte</grostitre>

<p>Il est possible de spécifier le contenu texte d'une balise en l'incluant entre <incode>{}</incode>.</p>

<clipasset src="videos/emmet-texte.mp4"></clipasset>

<dots></dots>


<grostitre>Balise enfant</grostitre>

<p>Il est possible d'ajouter une balise enfant à une balise parent en les séparant par le caractère <incode>></incode>.</p>

<clipasset src="videos/emmet-children.mp4"></clipasset>

<bravo>Emmet se charge même de l’indentation!</bravo>

<dots></dots>


<grostitre>Multiplicateur</grostitre>

<p>Pourquoi copier/coller plusieurs lignes, quand Emmet offre d'utiliser le symbole <incode>*</incode> suivi d'un chiffre pour indiquer le nombre de lignes souhaitées.</p>

<p>Par exemple, pour avoir trois <incode>li</incode> dans un <incode>ul</incode></p>

<clipasset src="videos/emmet-multiplicateur.mp4"></clipasset>

<dots></dots>


<grostitre>Index</grostitre>

<p>Le symbole dollar <incode>$</incode> représente l'index courant. Lorsqu'il est combiné avec le symbole multiplicateur <incode>*</incode>, il est remplacé par l'index de l'élément généré.</p>

<p>Par exemple, si nous avons trois <incode>li</incode>.</p>

<clipasset src="videos/emmet-dollar.mp4"></clipasset>

<p>Il est aussi possible de l'utiliser dans le texte d'une balise.</p>

<clipasset src="videos/emmet-dollar-texte.mp4"></clipasset>

<dots></dots>

<tool href="tools/cheat-sheet-emmet/"></tool>

<dots></dots>