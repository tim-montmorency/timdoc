<?php

/**
 * @type     article
 * @title    Audio
 * @icon     images/icon.png
 * @abstract La balise &lt;audio&gt;
 * @ref      web/html
 */
?>

<p> La balise <incode>&lt;audio&gt;</incode> permet d'intégrer un contenu sonore dans une page.</p>

<grostitre>Src & Source</grostitre>

<p>Afficher un lecteur audio peut se faire en une seule ligne, comme suit:</p>

<highlight lang="html">&lt;audio src=&quot;audio.mp3&quot;&gt;&lt;/audio&gt;</highlight>

<p>Telle une image 🖼️</p>

<p>Il est aussi possible, de l’afficher avec une ou des balises enfants de type source, de la sorte:</p>

<highlight lang="html">&lt;audio&gt;
    &lt;source src=&quot;audio.mp3&quot;&gt;
    &lt;source src=&quot;audio.webm&quot;&gt;
    &lt;/audio&gt;</highlight>

<info>Si vous ne désirez pas avoir à fournir plusieurs sources, les mp3 sont supportés sur tous les navigateurs modernes. caniuse.com/mp3</info>

<dots></dots>

<grostitre>Controls</grostitre>
<p>Si présent, cet attribut indique au navigateur d’afficher les contrôles de base du lecteur audio.</p>
<ul>
    <li>play/pause</li>
    <li>volume</li>
    <li>etc.</li>
</ul>

<p>À moins de définir ses propres boutons, il est préférable dans la majorité des cas d'ajouter cet attribut.</p>

<highlight lang="html">&lt;audio src=&quot;audio.mp3&quot; controls&gt;&lt;/audio&gt;</highlight>

<warning>Sans cet attribut, le lecteur audio sera invisible.</warning>

<dots></dots>

<grostitre>Loop</grostitre>

<p>Indique au navigateur de jouer l'udio en boucle 🔁</p>

<highlight lang="html">&lt;audio src=&quot;audio.mp3&quot; loop&gt;&lt;/audio&gt;</highlight>

<dots></dots>

<grostitre>Autoplay</grostitre>

<p>Indique au navigateur de démarrer l'audio si possible dès le chargement de la page.</p>

<highlight lang="html">&lt;audio src=&quot;audio.mp3&quot; autoplay&gt;&lt;/audio&gt;</highlight>

<p>Les navigateurs bloquent presque tous cette option à moins qu'ils aient détecté un engagement de la part de l'utilisateur. Par exemple: avoir déjà déclenché manuellement un son, etc.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/audio">audio</doclink>
<doclink href="https://www.w3schools.com/tags/tag_audio.asp">audio</doclink>

<dots></dots>