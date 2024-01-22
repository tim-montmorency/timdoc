<?php
/**
 * @type     article
 * @title    Microdonnées
 * @icon     images/icon.png
 * @abstract itemscope, itemtype, itemprop
 * @ref      web/html
 */
?>

<p>En tant qu'humains🧍, lorsque nous parcourons une page web il nous est possible d'effectuer des corrélations entre différentes informations afin de mieux les comprendre et les interpréter dans leur contexte. Cependant, les moteurs de recherche 🤖 n'ont pas encore atteint ce niveau de sophistication. Il est donc important de les aider avec des balises et attributs supplémentaires.</p>

<p>Par exemple, si un article est intitulé <em>"Avatar"</em>, est-ce un article à propos des <a target="_blank" href="https://fr.wikipedia.org/wiki/Avatar_(informatique)">icônes utilisées afin de représenter une personne</a> ou encore du <a target="_blank" href="https://fr.wikipedia.org/wiki/Avatar_(film,_2009)">film de James Cameron<a>?</p>

<clipasset src="videos/travolta-avatar.mp4"></clipasset>

<p>Sans même y réfléchir, une image répondra probablement à notre question, mais pour le moteur de recherche qui n'est pas en mesure d'analyser l'image, la question restera entière.</p>

<p>D'où l'importance de pouvoir lui spécifier qu'une information est à propos d'un film 🎥, un lieu, une personne, etc. Ainsi, le moteur de recherche pourra déterminer avec plus de précision quand afficher notre page, comment gérer son aperçu sur la page de résultats, comment l'utiliser avec des assistants vocaux <em>(Alexa, Google Home, Siri, etc.)</em>, gérer son affichage en mode lecture <em>(Reader mode)</em>, etc.</p>

<dots></dots>


<grostitre>Schema.org</grostitre>

<p><a target="_blank" href="https://schema.org/docs/schemas.html">Schema.org</a> est une communauté visant à créer, maintenir et promouvoir les microdonnées. Le site fut originalement fondé par:</p>

<ul>
  <li>Google</li>
  <li>Microsoft</li>
  <li>Yahoo</li>
  <li>Yandex 🇷🇺</li>
</ul>

<p>Il recense les microdonnées disponibles et reconnues par les moteurs de recherche les plus communs.</p>

<p>Reprenons l'exemple du film Avatar. Une partie du code sur notre page pourrait ressembler à ceci:</p>

<highlight lang="html">&lt;div&gt;
  &lt;h1&gt;Avatar&lt;/h1&gt;
  &lt;span&gt;Directeur: James Cameron&lt;/span&gt;
  &lt;span&gt;Science fiction&lt;/span&gt;
  &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-215MO/html/microdonnees/images/avatar.jpg&quot;&gt;	
&lt;/div&gt;</highlight>

<dots></dots>


<grostitre>itemscope</grostitre>

<p>Afin d'indiquer que ces informations ont un lien, il est possible de leur spécifier un contexte commun via <incode>itemscope</incode>:</p>

<highlight lang="html">&lt;div itemscope&gt;
  &lt;h1&gt;Avatar&lt;/h1&gt;
  &lt;span&gt;Directeur: James Cameron&lt;/span&gt;
  &lt;span&gt;Science fiction&lt;/span&gt;
  &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-215MO/html/microdonnees/images/avatar.jpg&quot;&gt;	
&lt;/div&gt;</highlight>

<p>Ainsi, le contenu enfant de la balise ayant l'attribut <incode>itemscope</incode> est à propos d'un item en particulier.</p>

<dots></dots>


<grostitre>itemtype</grostitre>

<p>Afin d'être plus précis, il est possible de spécifier le type d'item abordé en ajoutant l'attribut <incode>itemtype</incode> après <incode>itemscope</incode>.</p>

<highlight lang="html">&lt;div itemscope itemtype=&quot;https://schema.org/Movie&quot;&gt;
  &lt;h1&gt;Avatar&lt;/h1&gt;
  &lt;span&gt;Directeur: James Cameron&lt;/span&gt;
  &lt;span&gt;Science fiction&lt;/span&gt;
  &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-215MO/html/microdonnees/images/avatar.jpg&quot;&gt;	
&lt;/div&gt;</highlight>

<p>Dans ce cas, il s'agit d'un item de type <incode>Movie</incode>.</p>

<p>Le type est spécifié en utilisant une URL pointant vers une définition de <a href="_blank" href="https://schema.org/">schema.org</a>.</p>

<knowmore href="https://schema.org/docs/full.html">Liste incluant tous les types de schema.org.</knowmore>

<dots></dots>


<grostitre>itemprop</grostitre>

<p>Il est ensuite possible de spécifier des propriétés propres à l'item. Ces propriétés sont définies dans la page schema.org correspondant au type d'item en question.</p>

<p>Dans cet exemple, toutes les propriétés disponibles afin de décrire un film se trouvent à l'adresse suivante: <a target="_blank" href="https://schema.org/Movie">schema.org/Movie</a>.</p>

<highlight lang="html">&lt;div itemscope itemtype=&quot;https://schema.org/Movie&quot;&gt;
  &lt;h1 itemprop=&quot;name&quot;&gt;Avatar&lt;/h1&gt;
  &lt;span&gt;Directeur: &lt;span itemprop=&quot;director&quot;&gt;James Cameron&lt;/span&gt;&lt;/span&gt;
  &lt;span itemprop=&quot;genre&quot;&gt;Science fiction&lt;/span&gt;
  &lt;img itemprop=&quot;image&quot; src=&quot;https://tim-montmorency.com/timdoc/582-215MO/html/microdonnees/images/avatar.jpg&quot;&gt;	
&lt;/div&gt;</highlight>

<p>Ainsi, les moteurs de recherches comprendront qu'un film de science-fiction, appelé Avatar et dirigé par James Cameron est mentionné sur cette page.</p>

<p>Une image de référence du film est même fournie au cas où le moteur de recherche déciderait d'afficher un aperçu sur sa page de résultats.</p>

<dots></dots>


<grostitre>meta</grostitre>

<p>Il est possible que certaines informations soient pertinentes pour un moteur de recherche, mais non désirables pour le lecteur. Ainsi, il est possible d'utiliser la balise <incode>&lt;meta&gt;</incode> afin de transmettre l'information de n'importe quelle <incode>itemprop</incode> sans toutefois l'afficher.</p>

<highlight lang="html">&lt;div itemscope itemtype=&quot;https://schema.org/Movie&quot;&gt;
  &lt;h1 itemprop=&quot;name&quot;&gt;Avatar&lt;/h1&gt;
  &lt;span&gt;Directeur: &lt;span itemprop=&quot;director&quot;&gt;James Cameron&lt;/span&gt;&lt;/span&gt;
  &lt;span itemprop=&quot;genre&quot;&gt;Science fiction&lt;/span&gt;
  &lt;img itemprop=&quot;image&quot; src=&quot;https://tim-montmorency.com/timdoc/582-215MO/html/microdonnees/images/avatar.jpg&quot;&gt;
  &lt;meta itemprop=&quot;sameAs&quot; content=&quot;https://www.imdb.com/title/tt0499549/&quot;&gt;
&lt;/div&gt;</highlight>

<p>Dans ce cas 👆, la propriété <incode>sameAs</incode> indique que le sujet de l'item est le même que celui de l'url spécifiée <em>(page IMDb d'Avatar)</em>. Le but de cette propriété est d'offrir une référence connue au moteur de recherche afin qu'il comprenne exactement le sujet traité.</p>

<p>Cependant, pour des raisons esthétiques, il est possible de cacher cette information.</p>

<dots></dots>


<grostitre>Emboitage</grostitre>

<p>Nous avons vu comment définir un item de base. Néanmoins, il est fréquent que des items en contiennent d'autres.</p>

<p>Dans l'exemple précédent, il n'y avait qu'un item de type <incode>Movie</incode>. Cependant, il aurait été possible d'avoir un item enfant de type <incode>Person</incode>, afin de décrire plus amplement James Cameron.</p>

<p>Pour ce faire, un élément <incode>itemprop</incode> doit-être bonifié avec son propre contexte <incode>itemscope</incode> et propre type <incode>itemtype</incode>.</p>



<highlight lang="html">&lt;div itemscope itemtype=&quot;https://schema.org/Movie&quot;&gt;
  &lt;h1 itemprop=&quot;name&quot;&gt;Avatar&lt;/h1&gt;
  &lt;span&gt;Directeur: 
    &lt;span itemprop=&quot;director&quot; itemscope itemtype=&quot;https://schema.org/Person&quot;&gt;
      &lt;span itemprop=&quot;givenName&quot;&gt;James&lt;/span&gt;
      &lt;span itemprop=&quot;familyName&quot;&gt;Cameron&lt;/span&gt;
    &lt;/span&gt;
  &lt;/span&gt;
  &lt;span itemprop=&quot;genre&quot;&gt;Science fiction&lt;/span&gt;
  &lt;img itemprop=&quot;image&quot; src=&quot;https://tim-montmorency.com/timdoc/582-215MO/html/microdonnees/images/avatar.jpg&quot;&gt;	
&lt;/div&gt;</highlight>

<p>Ainsi, il est spécifié aux moteurs de recherche que le directeur du film est une personne, que son prénom <em>(givenName)</em> est James et que son nom de famille <em>(familyName)</em> est Cameron.</p>

<dots></dots>

<tool href="tools/rich-results-test/"></tool>

<exercice href="exercices/cf-montreal/"></exercice>

<dots></dots>