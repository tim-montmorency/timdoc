<?php 
/**
 * @type     article
 * @title    Types de pages
 * @icon     images/icon.webp
 * @abstract Liste, article, exercice, outil
 */
?>

<p class="spacer"><strong><em>Timdoc</em></strong> contient quatre types de pages: list, article, exercice et tool. Le type d'une page est déterminé par la valeur de la propriété <em>@type</em> dans le DOCBLOCK de l'entête du template.</p>



<grostitre>list</grostitre>

<p>Le type <em>list</em> est utilisé pour créer une liste à deux colones. Il est généralement utilisé pour lister les pages enfants.<br><br>Exemple:</p>

<highlight lang="php">&lt;?php
/**
 * @type     list
 * @title    Manuel
 * @icon     images/icon.png
 * @abstract Installation et développement
 */
?>

&lt;children&gt;&lt;/children&gt;</highlight>

 <dots></dots>

 <grostitre>article</grostitre>

 <p>Le type <em>article</em> est le type le plus utilisé. Il sert à créer des articles (no shit) avec une table des matières automatiquement liée au composantes <span class="inline-code">&lt;grostitre&gt;&lt;/grostitre&gt;</span>.<br><br>Exemple:</p>

 <highlight lang="php">&lt;?php 
/**
 * @type     article
 * @title    Types de pages
 * @icon     images/icon.png
 * @abstract Liste, article, exercice, outil
 */
?&gt;

&lt;grostitre&gt;Type&lt;/grostitre&gt;</highlight>

<dots></dots>

 <grostitre>exercice</grostitre>

 <p>Un peu comme le type <em>article</em>, le type <em>exercice</em> est présenté avec une table des matières. Lors du rendu, un fichier <em>exercice.json</em> est aussi créé avec les informations de page. Ce fichier permet d'obtenir les infos à partir d'une page afin de l'embeder avec la composante <span class="inline-code">&lt;exercice&gt;&lt;/exercice&gt;</span>.<br><br>Exemple:</p>

 <highlight lang="php">&lt;?php 
/**
 * @type     exercice
 * @title    Flexbox - Scrabble Potter
 * @icon     images/thumb.jpg
 * @abstract Déplacer les lettres d’un jeu de Scrabble
 */
?&gt;

&lt;grostitre&gt;Exercice&lt;/grostitre&gt;</highlight>

<p>Une propriété supplémentaire <em>@url</em> peut aussi être ajoutée si l'exercice est un lien externe. Exemple:</p>


<highlight lang="php">&lt;?php 
/**
 * @type     exercice
 * @title    Flexbox Zombie - Chapitre 1
 * @icon     images/thumb.jpg
 * @url      https://mastery.games/flexboxzombies/chapter/1/level/1
 * @abstract Les rudiments de l'arbaliète. 
 */
?&gt;

&lt;script&gt;location.href = '&lt;?php echo $PAGE-&gt;url; ?&gt;';&lt;/script&gt;</highlight>

<dots></dots>

<grostitre>tool</grostitre>

<p>Le type de page <em>tool</em> est identique au type <em>exercice</em> à la différence que le fichier généré est nommé <em>tool.json</em> et le monde de présentation est différent avec la composante <span class="inline-code">&lt;tool&gt;&lt;/tool&gt;</span>.<br><br>Exemple:</p>

<highlight lang="php">&lt;?php 
/**
 * @type     tool
 * @title    CSS Gradient
 * @icon     images/thumb.jpg
 * @url      https://cssgradient.io/
 * @abstract Générateur de dégradés.
 */
?&gt;

&lt;script&gt;location.href = '&lt;?php echo $PAGE-&gt;url; ?&gt;';&lt;/script&gt;</highlight>

<dots></dots>

<grostitre>wiki</grostitre>

<p>Le wiki permet de créer un endroit pour regrouper l'information de votre cours.<br><br>Exemple:</p>

<highlight lang="php">&lt;?php 
/**
 * @type     wiki
 * @title    wiki - nom du cours
 * @icon     images/icon.png
 * @abstract Nom du cours
 */
?&gt;

&lt;wiki-page name="Cours 01"&gt;

 
&lt;/wiki-page&gt;</highlight>

<p>L'ajout de la date permet de dévoiler les pages à des moments précis. Avant la date, les informations contenues dans ce bloc ne seront pas accessibles:</p>
<highlight lang="html">&lt;wiki-page name="Cours 01" date="2023-02-22"&gt;

&lt;/wiki-page&gt;</highlight>

<h2>Composantes utiles</h2>
<p>Lien vers un document pdf ou source url:</p>
<highlight lang="html">&lt;doclink href="lien web ou lien one drive"&gt;Nom du lien&lt;/doclink&gt;</highlight>

<p>Lien vers une page de timdoc:</p>
<highlight lang="html">&lt;intlink href="../dossier contenant les pages/sous-dossier de la page/"&gt;&lt;/intlink&gt;</highlight>

<dots></dots>

