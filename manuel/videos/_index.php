<?php 
/**
 * @type     article
 * @title    Vidéos
 * @icon     images/icon.webp
 * @index    0
 * @abstract Utiliser Github, Youtube et Vimeo
 */
?>

<p class="spacer">Il est possible d'inclure des vidéos dans vos articles assez facilement. Il est fortement encouragé d'utiliser le lecteur maison afin de ne pas avoir de publicités. Pour ce faire, il suffit de placer dans un sous-dossier <em>videos/</em> de votre article et d'utiliser la composante <span class="inline-code">&lt;clip&gt;</span>.</p>

<dots></dots>

<grostitre>Youtube</grostitre>

<p>Afin d'accélérer le chargement des pages contenant des vidéos, il est fortement conseillé d'utiliser la composante <incode>&lt;youtube src="id"&gt;&lt;/youtube&gt;</incode>.</p>

<highlight lang="html">&lt;youtube src="KVJBHSOx9jI"&gt;&lt;/youtube&gt;</highlight>

<youtube src="KVJBHSOx9jI"></youtube>

<dots></dots>


<grostitre>Vimeo</grostitre>

<highlight lang="html"><vimeo src="874986396"></vimeo></highlight>

<vimeo src="874986396"></vimeo>

<dots></dots>


<grostitre>Clipinfo</grostitre>

<p>Pour que fonctionne la composante <span class="inline-code">&lt;clip&gt;</span>, en plus du fichier <em>.mp4</em>, vous aurez besoin d'un fichier <em>.jpg</em> pour la couverture et d'un fichier <em>.json</em> contenant les informations relative au fichier vidéo. Pour ce faire, dans le dossier <em>_bin/</em> se trouve un batchfile nommé <em>clipinfo.bat</em>. Il suffit de l'appeller suivi du chemin de votre fichier <em>.mp4</em> ou encore glisser votre fichier <em>.mp4</em> sur le fichier <em>clipinfo.bat</em>.</p>

<highlight lang="dos">clipinfo.bat videos/le-boson-de-higgs.mp4</highlight>

<img class="full" src="images/drag-and-drop.webp">

<dots></dots>


<grostitre>Exemple</grostitre>

<highlight lang="html"><clip src="../components/videos/le-boson-de-higgs.mp4" title="Qu'est-ce que le boson de Higs?"></clip></highlight>
<clip src="../components/videos/le-boson-de-higgs.mp4" title="Qu'est-ce que le boson de Higs?"></clip>

<dots></dots>


<grostitre>Outils</grostitre>

<!-- <tool href="tools/youtube-dl"></tool>
<tool href="tools/jdownloader2"></tool> -->
<tool href="tools/losslesscut"></tool>

<dots></dots>