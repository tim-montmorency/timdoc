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

<grostitre>Listes de description</grostitre>

<p>Ce dernier type de liste permet de donner une information descriptive et complémentaire sur un élément précis.</p>

<p>Vous pouvez créer une liste de description (ou définition) en utilisant les balises HTML <incode>&lt;dl&gt;</incode>
    <incode>&lt;/dl&gt;</incode>.
</p>

<warning>Contrairement aux autres précédentes listes, les éléments de celle-ci ne sera pas définissable par l’élément HTML <incode>&lt;li&gt;</incode>
    <incode>&lt;/li&gt;</incode>.
</warning>

<p>Pour commencer, 2 éléments différents peuvent être ajoutés à cette liste:</p>

<ul>
    <li>Le mot ou expression à définir ou décrire. On va utiliser les balises <incode>&lt;dt&gt;</incode>
        <incode>&lt;/dt&gt;</incode> pour créer cet élément.
    </li>
    <li>La définition (ou description) du mot précédemment ajouté. Les balises <incode>&lt;dd&gt;</incode>
        <incode>&lt;/dd&gt;</incode> seront à utiliser pour cet élément.
    </li>
</ul>

<p>Exemple de liste de description:</p>

<h3>Exemple 1</h3>

<highlight lang="html">
    &lt;dl&gt;
    &lt;dt&gt;Expression&lt;/dt&gt;
    &lt;dd&gt;Description&lt;/dd&gt;
    &lt;/dl&gt;</highlight>

<h3>Exemple avec une description d’un événement:</h3>

<highlight lang="html">
    &lt;h2&gt;Conférence sur l&#39;accessibilité web&lt;/h2&gt;
    &lt;dl&gt;
    &lt;dt&gt;Lieu&lt;/dt&gt;
    &lt;dd&gt;Paris&lt;/dd&gt;
    &lt;dt&gt;Dates&lt;/dt&gt;
    &lt;dd&gt;Samedi 7 septembre&lt;/dd&gt;
    &lt;dd&gt;Mercredi 14 octobre&lt;/dd&gt;
    &lt;dt&gt;Heure&lt;/dt&gt;
    &lt;dd&gt;À partir de 10 heures&lt;/dd&gt;
    &lt;/dl&gt;</highlight>

<h3>Exemple avec un glossaire:</h3>

<highlight lang="html">
    &lt;dl&gt;
    &lt;dt&gt;&lt;dfn&gt;ARIA&lt;/dfn&gt;&lt;/dt&gt;
    &lt;dd lang=&quot;en&quot;&gt;Accessible Rich Internet Application&lt;/dd&gt;
    […]
    &lt;dt&gt;&lt;dfn&gt;RGAA&lt;/dfn&gt;&lt;/dt&gt;
    &lt;dd&gt;Référentiel Général d&#39;Amélioration de l&#39;Accessibilité&lt;/dd&gt;
    […]
    &lt;/dl&gt;</highlight>

<h3>Quels bénéfices?</h3>

<p>La structuration des listes est essentielle pour les <em>personnes utilisant un lecteur d’écran (personnes aveugles et malvoyantes)</em>. Cette structuration leur permet ainsi, à la rencontre d’une liste de:</p>

<ul>
    <li>Naviguer de liste en liste au sein d’une page</li>
    <li>Connaître dès le départ le nombre d’éléments dans celle-ci</li>
    <li>Naviguer plus facilement dans la liste:</li>
    <ol>
        <li>Passer directement à la fin de la liste si ce contenu ne les intéresse pas</li>
        <li>Revenir facilement au début de la liste</li>
    </ol>
</ul>

<dots></dots>

<grostitre>Modifier le style des listes</grostitre>

<p>L’apparence et la mise en forme des listes sont paramétrables à travers des paramètres (attributs HTML ou propriétés CSS) propres aux éléments de liste.</p>

<h4>Changer l’apparence des puces d’une liste non-ordonnée ul</h4>

<p>Si les disques noirs ne sont pas à votre goût, vous pouvez changer l’apparence des puces d’une liste non-ordonnée. Rien de plus simple, ajoutez la propriété « list-style-type » à l’élément HTML « ul » et définissez la valeur qui représentera le style que vous souhaitez donner aux puces de votre liste.</p>

<p>Il existe plusieurs styles possibles aux puces d’une liste non-ordonnée, voici quelques possibilités:</p>

<ul>
    <li>Disque noir : <incode>list-style-type: disc;</incode>
    </li>
    <li>Cercle : <incode>list-style-type: circle;</incode>
    </li>
    <li>Chiffres (ce qui revient à créer une liste ordonnée) : <incode>list-style-type: decimal;</incode>
    </li>
    <li>Caractère: <incode>list-style-type: '@';</incode>
    </li>
    <li>Aucune puce : <incode>list-style-type: none;</incode>
    </li>
</ul>

<info>Vous pouvez utiliser n’importe quel caractère ASCII comme puce pour votre liste, cela offre donc un large panel de possibilités pour styliser vos listes!</info>

<p>Si les types disponibles ne vous conviennent pas il existe aussi une possibilité d’ajouter une image à la place des puces d’une liste. Grâce à la propriété « list-style-image » vous allez pouvoir créer des listes à puces très personnalisées en indiquant simplement l’<em>url d’une image</em>.</p>

<grostitre>Liste ordonnée à un nombre défini</grostitre>

<p>Si vous ne souhaitez pas commencer votre liste ordonnée par la valeur initiale par défaut (1 pour les valeurs décimales ou « a » pour l’alphabet latin par exemple) vous pouvez définir l’attribut « start » d’une liste ordonnée et indiquer à partir de quelle valeur vous souhaitez débuter avec une valeur numérique entière.</p>

<p>Exemple d’une liste ordonnée alphabétique (latin) commençant par la lettre « D »:</p>

<highlight lang="html">
    &lt;ol start=4 style=&quot;list-style-type:upper-alpha&quot;&gt;
    &lt;li&gt;Élément&lt;/li&gt;
    &lt;li&gt;Élément&lt;/li&gt;
    &lt;li&gt;Élément&lt;/li&gt;
    &lt;/ol&gt;
</highlight>

<dots></dots>

<grostitre>Inverser l’ordre d’une liste</grostitre>

<p>L’attribut « reversed » d’une liste ordonnée va vous permettre d’inverser l’ordre d’une liste. Une liste décimale commencera donc par la valeur la plus élevée et liste alphabétique débutera par la dernière lettre de l’alphabet utilisé.</p>

<p>Découvrez sans plus attendre un exemple d’une liste décimale inversée:</p>

<highlight lang="html">
    &lt;ol reversed style=&quot;list-style-type:upper-alpha&quot;&gt;
    &lt;li&gt;Élément&lt;/li&gt;
    &lt;li&gt;Élément&lt;/li&gt;
    &lt;li&gt;Élément&lt;/li&gt;
    &lt;/ol&gt;
</highlight>

<dots></dots>

<grostitre>Créer une liste imbriquée</grostitre>

<p>Une liste imbriquée est simplement une liste dans une liste, le concept est simple et son utilisation aussi. Que ce soit une liste ordonnée ou une liste non-ordonnée il suffit d’ajouter un nouvel élément HTML « ul » ou « ol » dans un précédent élément de liste.</p>

<p>Voici un exemple d’une liste imbriquée d’une liste ordonnée imbriquée dans une liste non-ordonnée:</p>

<highlight lang="html">
    &lt;ul&gt;
    &lt;li&gt;Élément&lt;/li&gt;
    &lt;li&gt;Élément&lt;/li&gt;
    &lt;ol style=&quot;list-style-type:lower-alpha&quot;&gt;
    &lt;li&gt;Élément 1&lt;/li&gt;
    &lt;li&gt;Élément 2&lt;/li&gt;
    &lt;li&gt;Élément 3&lt;/li&gt;
    &lt;/ol&gt;
    &lt;/ul&gt;
</highlight>

<p>Vous pouvez donc imbriquer une liste ordonnée dans une liste non-ordonnée et inversement. Mais vous pouvez aussi sans souci imbriquer une ou plusieurs listes dans une autre liste du même genre.</p>

<dots></dots>