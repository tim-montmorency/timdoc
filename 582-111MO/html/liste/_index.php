<?php

/**
 * @type     article
 * @title    Les listes
 * @icon     images/icon.png
 * @abstract ul, ol, li, dl, dt,dd
 */
?>

<grostitre>Les listes</grostitre>

<p>En HTML, une liste est constituée de plusieurs éléments de liste. Visuellement, une liste est affichée de la manière suivante:</p>

<ul>
    <li>Premier élément de ma liste</li>
    <li>Deuxième élément de ma liste</li>
    <li>Troisième élément de ma liste</li>
</ul>

<p>Les listes nous permettent de regrouper plusieurs éléments sous une même catégorie, créant ainsi une relation entre eux que les navigateurs et les moteurs de recherche peuvent reconnaître.</p>

<p>Les listes sont très utiles pour apporter de la clarté et de l'organisation à nos documents. En plus de cela, nous pouvons également utiliser les listes HTML pour créer des menus de navigation.</p>

<h3>Les différents types de liste</h3>

<p>Actuellement au nombre de 3, les différents types de listes vont vous servir pour lister différentes catégories d’informations. Nous retrouverons donc des listes non-ordonnées, des listes ordonnées et des listes de description (ou de définition).</p>

<dots></dots>

<grostitre>Les listes non-ordonnées</grostitre>

<p>Les listes non-ordonnées pourront vous servir à énumérer une suite d’informations ne nécessitant pas forcément de classement alphabétique ou numérique.</p>

<p>Pour créer une liste en HTML, on utilise les balises HTML <incode>&lt;ul&gt;</incode>
    <incode>&lt;/ul&gt;</incode> et pour remplir cette liste d’éléments on utilise les balises <incode>&lt;li&gt;</incode>
    <incode>&lt;/li&gt;</incode> pour définir un élément de la liste.
</p>

<p>Exemple de liste non-ordonnée:</p>

<highlight lang="html">
    &lt;ul&gt;
        &lt;li&gt;Élément&lt;/li&gt;
        &lt;li&gt;Élément&lt;/li&gt;
        &lt;li&gt;Élément&lt;/li&gt;
    &lt;/ul&gt;</highlight>

<dots></dots>

<grostitre>Les listes ordonnées</grostitre>

<p>Les listes ordonnées servent à classer des informations pour les lister dans un ordre précis qui ne peut pas être changé.</p>

<p>Une liste ordonnée en HTML se crée par l’utilisation des balises
<ol></ol> et tout comme pour les listes non-ordonnées vous pouvez remplir les listes ordonnées d’éléments par l’utilisation des balises <incode>&lt;li&gt;</incode>
<incode>&lt;/li&gt;</incode>.</p>

<p>Exemple de liste ordonnée:</p>

<highlight lang="html">
    &lt;ol&gt;
        &lt;li&gt;Élément 1&lt;/li&gt;
        &lt;li&gt;Élément 2&lt;/li&gt;
        &lt;li&gt;Élément 3&lt;/li&gt;
    &lt;/ol&gt;</highlight>

<dots></dots>

<grostitre>Créer une liste imbriquée</grostitre>

<p>Une liste imbriquée est simplement une liste dans une liste, le concept est simple et son utilisation aussi. Que ce soit une liste ordonnée ou une liste non-ordonnée il suffit d’ajouter un nouvel élément HTML « ul » ou « ol » dans un précédent élément de liste.</p>

<p>Voici un exemple d’une liste imbriquée d’une liste ordonnée imbriquée dans une liste non-ordonnée:</p>

<highlight lang="html">
    &lt;ul&gt;
        &lt;li&gt;Élément&lt;/li&gt;
        &lt;li&gt;Élément&lt;/li&gt;
        &lt;ol&gt;
            &lt;li&gt;Élément 1&lt;/li&gt;
            &lt;li&gt;Élément 2&lt;/li&gt;
            &lt;li&gt;Élément 3&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/ul&gt;
</highlight>

<p>Vous pouvez donc imbriquer une liste ordonnée dans une liste non-ordonnée et inversement. Mais vous pouvez aussi sans souci imbriquer une ou plusieurs listes dans une autre liste du même genre.</p>

<dots></dots>