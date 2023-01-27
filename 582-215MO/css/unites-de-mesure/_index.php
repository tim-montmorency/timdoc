<?php
/**
 * @type     article
 * @title    Unités de mesure
 * @icon     images/icon.png
 * @abstract vw, vh, vmin, vmax, calc, min, max, clamp
 */
?>

<p class="spacer">L'unité CSS permet de dire au navigateur l'échelle à utiliser pour une valeur de taille donnée.</p>

<p>Par exemple, si je souhaite donner une marge à mes paragraphes, je pourrais utiliser le code suivant:</p>

<highlight lang="css">p { margin: 20px; }</highlight>

<p>Dans ce cas, j'ai:</p>

<ul>
    <li>Un sélecteur: <span class="inline-code">p</span></li>
    <li>Une propriété: <span class="inline-code">margin</span></li>
    <li>Une valeur: <span class="inline-code">20px</span></li>
</ul>

<p>Cette valeur est à son tour composé de deux éléments: une taille <span class="inline-code">20</span> et une unité CSS <span class="inline-code">px</span>. Combiné, ce code permet de dire au navigateur d'appliquer une marge de 20px à tous mes paragraphes. Bien que l'unité <span class="inline-code">px</span> soit la plus fréquente, elle n'est pas toujours la mieux adaptée à toutes les situations.</p>

<p>Voyons voir pourquoi ✨</p>

<dots></dots>

<grostitre>Absolues</grostitre>

<p>Les unités absolues gardent leurs dimensions, peu importe leur contexte. Ces unités sont pratiques pour des éléments que l'on souhaite immuables.</p>

<warning>Les unités absolues peuvent causer des enjeux lorsque l’on souhaite créer des sites responsives.</warning>

<p>Les pixels <em>(px)</em> sont l'unité absolue la plus répandue, ce qui fait du sens puisque la majorité des codes CSS sont écrits pour gérer l'affichage sur un écran. Néanmoins, il existe plusieurs autres valeurs absolues:</p>

<ul>
    <li><span class="inline-code">cm</span> - Centimètres</li>
    <li><span class="inline-code">mm</span> - Millimètres</li>
    <li><span class="inline-code">in</span> - Pouces</li>
</ul>

<dots></dots>


<grostitre>Relatives</grostitre>

<p>Contrairement aux unités absolues, les unités relatives se basent sur la dimension d'un parent pour déterminer leur dimension, ce qui les rend particulièrement utiles pour créer un site web responsive.</p>

<p>Ces unités peuvent paraîtres plus complexes de prime abord, mais leur utilisation permet souvent d'éviter de redéfinir des valeurs en fonctions des multiples résolutions d'écrans supportées.</p>

<ul>
    <li><span class="inline-code">%</span> - Relatif au parent</li>
    <li><span class="inline-code">em</span> - Relatif à la taille fonte courante</li>
    <li><span class="inline-code">rem</span> - Relatif à la taille à la racine du document <span class="inline-code">&lt;html&gt;</span></li>
</ul>

<h3>Relatives vs Absolues</h3>

<video src="videos/relatives-vs-absolues.mp4" autoplay="true" muted="true" loop="true" class="video-asset"></video>

<dots></dots>


<grostitre>Quand utiliser quelle unité?</grostitre>

<p>Voici quelques exemples où une unité est préférable à une autre.</p>

<h3>%</h3>

<p>Pour qu'un élément prenne la moitié de la largeur de son parent, peu importe la largeur du parent en question.</p>

<highlight lang="css">.element { width: 50%; }</highlight>

<h3>em</h3>

<p>Pour qu'un texte ayant la classe <span class="inline-code">.small</span> ait une taille équivalente à la moitié du texte courant, peu importe la taille du texte courant.</p>

<highlight lang="css">.small { font-size: 0.5em; }</highlight>

<h3>rem</h3>

<p>Pour que nos éléments de titre affichent toujours de la même taille, soit 2x celle de notre texte de base, peu importe la taille du texte courant.</p>

<highlight lang="css">.title { font-size: 2rem; }</highlight>

<dots></dots>


<grostitre>En résumé</grostitre>

<p>Pour choisir la bonne unité CSS vous devrez vous poser les questions suivantes:</p>

<ul>
    <li>Est-ce que cet élément devrait toujours avoir une taille fixe?</li>
    <li>Si non, quel élément devrait le faire varier? La dimension de son parent, la taille de la fonte courante ou celle à la base du document, etc.</li>
</ul>

<info>0, peu importe l’unité de mesure, reste 0. Il n’est donc pas nécessaire de spécifier l’unité de mesure: 0px, 0em, 0% = 0.</info>

<knowmore href="https://www.digitalocean.com/community/tutorials/css-css-units-explained">CSS Units Explained</knowmore>

<dots></dots>






