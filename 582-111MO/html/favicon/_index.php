<?php
/**
 * @type     article
 * @title    Favicon
 * @icon     images/icon.png
 * @abstract icônes de navigateur
 * @ref      web/html
 */
?>

<p class="spacer">Prenez un instant pour regarder les onglets ouverts dans votre navigateur, vous en avez minimalement un <em>(ce site)</em>, mais probablement aussi quelques autres. Remarquez les petits logos dans ceux-ci vous permettant d'identifier rapidement quels sites sont ouverts dans votre navigateur.</p>

<img src="images/favicons-tabs.png">

<p>Ces icônes sont utilisées à plusieurs sauces afin d’aider à identifier rapidement certains sites dans différents contextes. Par exemple, plusieurs navigateurs proposent une page d’accueil présentant nos sites préférés ou régulièrement visités avec leur icône bien visible.</p>

<img src="images/favicons-browser-home.png">

<p>Les appareils mobiles les utilisent lorsqu'un site est ajouté à l’écran d’accueil.</p>

<img src="images/favicons-mobile.png">

<p>Les favoris <em>(bookmarks)</em> d’un navigateur les affichent afin d’aider à trouver rapidement le site recherché.</p>

<img src="images/favicons-bookmark.png">

<info>À l’origine le nom <em>"favicon"</em> provient de la contraction des mots <em>"Favourite"</em> et <em>"Icon"</em> puisqu’ils étaient initialement utilisés uniquement pour les favoris.</info>

<dots></dots>


<grostitre>Création</grostitre>

<h3>Taille</h3>

<p>À la base, les favicons avaient une dimension de 16x16px. Avec l’évolution de leur usage et des appareils, plusieurs formats sont maintenant nécessaires afin d’afficher correctement sur tous les types d'appareils. Il est donc préférable de concevoir un favicon le plus grand possible et de créer des versions de tailles inférieures à partir de celui-ci.</p>

<h3>Format</h3>

<p>Historiquement les favicons étaient des fichiers .ico puisque ce format était utilisé par Windows afin d’afficher toutes les icônes de son système d’exploitation. Avec le temps, il est maintenant possible d’utiliser tous les formats d’image, sans restrictions. Incluant même le format <a href="../svg/">SVG</a>!</p>

<a name="generateurs"></a><h3>Générateurs</h3>

<p>Puisque les tailles optimales de favicon tendent à changer avec l’évolution des appareils, il est préférable d’utiliser un outil de générateur de favicons afin de s’assurer de produire toutes les résolutions de favicons courantes.</p>

<p>Par exemple:</p>

<ul>
  <li><a target="_blank" href="https://realfavicongenerator.net/">RealFaviconGenerator.net</a></li>
  <li><a target="_blank" href="https://www.favicon.cc/">Favicon.cc</a></li>
</ul>

<h3>Affichage</h3>

<p>Afin de lier un favicon à une page web, il faut ajouter un extrait de code dans sa balise <incode>&lt;head&gt;</incode> indiquant où se trouve le fichier favicon à utiliser.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;link rel=&quot;shortcut icon&quot; href=&quot;http://example.com/favicon.ico&quot; /&gt;</highlight>

<warning>Ce code ne permet d’afficher qu’une version du favicon. Pour obtenir toutes les variantes, il est suggéré d’utiliser un <a href="#generateurs">générateur de favicons</a>.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Glossary/Favicon">favicon</doclink>
<doclink href="https://www.w3schools.com/html/html_favicon.asp">favicon</doclink>

<dots></dots>

<exercice href="exercices/mega-man/"></exercice>

<dots></dots>