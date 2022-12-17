<?php 
/**
 * @type     article
 * @title    Audios
 * @icon     images/icon.png
 * @abstract Utiliser Github et Howler.js
 */
?>

<p>
    Il est possible d'inclure facilement des pistes audios dans vos articles. Pour ce faire, placez vos pistes audios dans un sous-dossier <em>audios/</em> de votre article et utilisez la composante <span class="inline-code">&lt;audioplayer&gt;</span>. 
    <br><br>
    Formats supportés: <strong>MP3</strong>, <strong>FLAC</strong>, MPEG, OPUS, OGG, OGA, WAV, AAC, CAF, M4A, M4B, MP4, WEBA, WEBM et DOLBY.
</p>

<grostitre>Audioinfo</grostitre>

<p>Pour que fonctionne la composante <span class="inline-code">&lt;audioplayer&gt;</span>, en plus du fichier audio, vous aurez besoin de 3 autres fichiers.</p>

<p>Ces fichiers doivent porter le même nom que le fichier audio mais avec une extension différente.</p>

<ul>
    <li>nom-du-fichier-audio.<strong>json</strong> <em>(informations)</em></li>
    <li>nom-du-fichier-audio.<strong>webp</strong> <em>(audio fallback)</em></li>
    <li>nom-du-fichier-audio.<strong>png</strong> <em>(waveform)</em></li>
</ul>

<p>Ne vous inquiétez pas, vous n'avez pas à créer ces fichiers manuellement. Ils sont générés automatiquement. Pour ce faire, dans le dossier <em>_bin/</em> se trouve un batchfile nommé <em>audioinfo.bat</em>. Il suffit de l'appeller suivi du chemin de votre fichier audio ou encore glisser votre fichier audio sur le fichier <em>audioinfo.bat</em>.</p>

<highlight lang="dos">audioinfo.bat audios/careless-whisper.mp3</highlight>

<img src="images/drag-n-drop.png">

<dots></dots>

<grostitre>Exemple</grostitre>

<highlight lang="html">&lt;audioplayer src="audios/careless-whisper.mp3"&gt;&lt;/audioplayer&gt;</highlight>

<audioplayer src="audios/careless-whisper.mp3"></audioplayer>

<dots></dots>

<grostitre>Outils</grostitre>

<tool href="tools/audacity"></tool>

<dots></dots>