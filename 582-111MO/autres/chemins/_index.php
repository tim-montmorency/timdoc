<?php
/**
 * @type     article
 * @title    Chemins d'accès
 * @icon     images/icon.png
 * @abstract Absolue, relatif
 * @ref      web/autres
 */
?>

<p class="spacer">Peu importe le langage utilisé <em>(HTML, CSS, JavaScript)</em>, la façon d'écrire un chemin vers un fichier externe <em>(image, police, stylesheet ou JS)</em> reste la même.</p>

<dots></dots>

<grostitre>Absolu</grostitre>

<p>Un chemin est absolu lorsqu'il commence par un protocole <em>(ex: https://)</em>.</p>

<highlight lang="html">&lt;img src="https://site.com/image.png"&gt;</highlight>

<dots></dots>


<grostitre>Relatif</grostitre>

<p>À l'opposé, un chemin est considéré comme étant relatif lorsqu'il <strong>ne commence pas</strong> par un protocol <em>(ex: https://)</em>.</p>

<p>Afin d'illustrer les différentes possibilités de chemin relatif, imaginons que nous sommes actuellement dans le fichier <span class="inline-code">index.html</span> dans l'arborescence ci-dessous 👇</p>

<img src="images/chemin-fichiers.png">

<h3>Même dossier</h3>

<p>Il est possible d'accéder à un fichier au même niveau que le fichier dans lequel nous sommes, simplement en spécifiant son nom.</p>

<p>Par exemple, pour accéder à l'image <span class="inline-code">b.png</span> 🌄 à partir du fichier <span class="inline-code">index.html</span> il est possible de faire:</p>

<highlight lang="html">&lt;img src="b.png"&gt;</highlight>

<h3>Sous-dossier</h3>

<p>Il est possible d'accéder à un fichier dans un sous-dossier en spécifiant le nom du sous-dossier en question suivi du nom du fichier.</p>

<p>Par exemple, pour accéder à l'image <span class="inline-code">c.png</span> 🌄 à partir du fichier <span class="inline-code">index.html</span>, il est possible de faire:</p>

<highlight lang="html">&lt;img src="dossier-1.1/c.png"&gt;</highlight>

<h3>Dossier parent</h3>

<p>Il est possible d'accéder à un fichier dans un dossier parent en indiquant qu'il faut remonter d'un dossier via la mention <span class="inline-code">../</span> suivi du nom du fichier.</p>

<p>Par exemple, pour accéder à l'image <span class="inline-code">a.png</span> 🌄 à partir du fichier <span class="inline-code">index.html</span> il est possible de faire:</p>

<highlight lang="html">&lt;img src="../a.png"&gt;</highlight>

<p>Il est possible de remonter de plusieurs dossiers en enchainant les mentions <span class="inline-code">../</span>.</p>

<p>Par exemple, pour remonter de deux dossiers:</p>

<highlight lang="html">&lt;img src="../../a.png"&gt;</highlight>

<doclink href="https://css-tricks.com/quick-reminder-about-file-paths/">File paths</doclink>

<dots></dots>

<exercice href="exercices/pokemon"></exercice>

<dots></dots>