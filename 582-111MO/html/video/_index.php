<?php
/**
 * @type     article
 * @title    Video
 * @icon     images/icon.png
 * @abstract q, blockquote, cite
 */
?>

<p> La balise <incode>&lt;video&gt;</incode> permet d'intégrer un contenu vidéo dans une page.</p>

<grostitre>Src & Source</grostitre>

<p>Afficher une vidéo peut se faire en une seule ligne, comme suit:</p>

<highlight lang="html">&lt;video src=&quot;video.mp4&quot;&gt;&lt;/video&gt;</highlight>

<p>Telle une image 🖼️</p>

<p>Il est aussi possible, de l’afficher avec une ou des balises enfants de type <incode>source</incode>, de la sorte:</p>

<highlight lang="html">&lt;video&gt;
  &lt;source src=”video.mp4”&gt;
&lt;/video&gt;</highlight>

<p>Cette méthode offre l'avantage de définir plusieurs sources. Ainsi, si le navigateur est incapable de lire le premier format, il tentera de lire le deuxième et ainsi de suite. Par exemple:</p>

<highlight lang="html">&lt;video&gt;
  &lt;source src=”video.mp4”&gt;
  &lt;source src=”video.webm”&gt;
&lt;/video&gt;</highlight>

<info>Si vous ne désirez pas avoir à fournir plusieurs sources, les mp4 sont maintenant supportés sur tous les navigateurs majeurs. caniuse.com/mp4</info>

<dots></dots>

<grostitre>Poster</grostitre>

<p>Par défaut, une balise vidéo affichera le premier frame de sa source. Néanmoins, il est possible d’ajouter un attribut <incode>poster</incode> pour définir une image à utiliser à la place.</p>

<highlight lang="html">&lt;video src=&quot;video.mp4&quot; poster=”image.jpg”&gt;&lt;/video&gt;</highlight>

<dots></dots>

<grostitre>Controls</grostitre>
<p>Si présent, cet attribut indique au navigateur d’afficher les contrôles de base de la vidéo.</p>
<ul>
    <li>play/pause</li>
    <li>volume</li>
    <li>etc.</li>
</ul>

<p>À moins de définir ses propres boutons, il est préférable dans la majorité des cas d'ajouter cet attribut.</p>

<highlight lang="html">&lt;video src=&quot;video.mp4&quot; controls&gt;&lt;/video&gt;</highlight>

<dots></dots>

<grostitre>Loop</grostitre>

<p>Indique au navigateur de jouer la vidéo en boucle 🔁</p>

<highlight lang="html">&lt;video src=&quot;video.mp4&quot; loop&gt;&lt;/video&gt;</highlight>

<dots></dots>

<grostitre>Muted</grostitre>

<p>Indique au navigateur de jouer la vidéo en mode silencieux 🔇</p>

<highlight lang="html">&lt;video src=&quot;video.mp4&quot; muted&gt;&lt;/video&gt;</highlight>

<dots></dots>

<grostitre>Autoplay</grostitre>

<p>Indique au navigateur de démarrer la vidéo si possible dès le chargement de la page.</p>

<highlight lang="html">&lt;video src=&quot;video.mp4&quot; autoplay&gt;&lt;/video&gt;</highlight>

<warning>Les navigateurs bloquent presque tous cette option si la vidéo n’est pas en sourdine aka muted. Si l’utilisateur a déjà déclenché manuellement d’autres vidéos avec de l’audio sur le site, le navigateur peut choisir d’honorer l’autoplay.</warning>

<img src="images/video-autoplay.jpeg">

<dots></dots>

<grostitre>Playsinline</grostitre>

<p>Certains appareils, notamment plusieurs mobiles 📱, démarrent automatiquement les vidéos en plein écran. Pour contrer ce comportement, il est possible de spécifier de jouer la vidéo dans son cadre d’origine avec <incode>playsinline</incode>.</p>

<highlight lang="html">&lt;video src=&quot;video.mp4&quot; playsinline&gt;&lt;/video&gt;</highlight>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/video">video</doclink>
<doclink href="https://www.w3schools.com/tags/tag_video.asp">video</doclink>

<dots></dots>