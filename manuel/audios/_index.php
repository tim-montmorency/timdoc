<?php 
/**
 * @index    10
 * @type     article
 * @title    Audios
 * @icon     images/icon.webp
 * @abstract Utiliser Github et la composante &lt;tune&gt;
 */
?>

<p class="spacer">
    Il est possible d'inclure facilement des pistes audios dans vos articles. Pour ce faire, placez vos pistes audios dans un sous-dossier <em>audios/</em> de votre article et utilisez la composante <incode><tune></incode>. 
    <br><br>
    Formats supportés: <strong>MP3</strong>, <strong>FLAC</strong>, MPEG, OPUS, OGG, OGA, WAV, AAC, CAF, M4A, M4B, MP4, WEBA, WEBM et DOLBY.
</p>

<grostitre>Audioinfo</grostitre>

<p>Pour que fonctionne la composante <incode><tune></incode>, en plus du fichier audio, vous aurez besoin de 2 autres fichiers.</p>

<p>Ces fichiers doivent porter le même nom que le fichier audio mais avec une extension différente.</p>

<ul>
    <li>nom-du-fichier-audio-dark.<strong>png</strong> <em>(waveform darkmode)</em></li>
    <li>nom-du-fichier-audio-light.<strong>png</strong> <em>(waveform lightmode)</em></li>
</ul>

<p>Ne vous inquiétez pas, vous n'avez pas à créer ces fichiers manuellement. Ils sont générés automatiquement. Pour ce faire, dans le dossier <em>_bin/</em> se trouve un batchfile nommé <em>audioinfo.bat</em>. Il suffit de l'appeller suivi du chemin de votre fichier audio ou encore glisser votre fichier audio sur le fichier <em>audioinfo.bat</em>.</p>

<highlight lang="console">> audioinfo.bat audios/careless-whisper.mp3</highlight>

<img class="full" src="images/drag-n-drop.webp">

<dots></dots>

<grostitre>Exemples</grostitre>

<highlight lang="html"><tune src="audios/careless-whisper.mp3"></tune></highlight>
<tune src="audios/careless-whisper.mp3"></tune>

<highlight lang="html"><tune src="audios/pas-tellement.mp3"></tune></highlight>
<tune src="audios/pas-tellement.mp3"></tune>

<dots></dots>

<grostitre>Outils</grostitre>

<tool href="tools/audacity"></tool>

<dots></dots>