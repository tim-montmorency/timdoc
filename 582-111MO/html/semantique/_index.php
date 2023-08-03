<?php

/**
 * @type     article
 * @title    Sémantique
 * @icon     images/icon.png
 * @abstract header, footer, nav, main, section, aside
 */
?>

<p>Lors de la création d'une page, plusieurs balises HTML sont utilisées. Certaines de ces balises ont une valeur sémantique, tandis que d'autres non. On dit d'une balise qu'elle a une valeur sémantique lorsqu'elle permet de mieux comprendre son contenu ou encore son contexte.</p>

<p>Par exemple, les balises <incode>&lt;div&gt;</incode> et <incode>&lt;span&gt;</incode> sont des balises non sémantiques. En les apercevant, il est impossible de deviner la nature de leur contenu ou encore leur rôle dans la page. Cependant, si une balise <incode>&lt;header&gt;</incode> est utilisée à la place d'une balise <incode>&lt;div&gt;</incode>, il devient soudainement plus évident que l'intention derrière cette balise est de regrouper les éléments constituant un entête.</p>

<grostitre>Pourquoi?</grostitre>

<h3>Bonification des fonctionnalités</h3>

<p>Une bonne sémantique permet d'améliorer l'expérience de ses usagers de plusieurs façons.</p>


<p>Par exemple, certaines personnes ont recours à un assistant vocal <em>(<a href="https://fr.wikipedia.org/wiki/Siri_(logiciel)">Siri</a>, <a href="href="href="https://fr.wikipedia.org/wiki/Amazon_Alexa">Alexa</a>, <a href="https://fr.wikipedia.org/wiki/Assistant_Google">L'assistant Google</a>, etc.)</em> leur permettant de se faire narrer le contenu des pages sur lesquelles ils naviguent alors qu'ils s'adonnent à d'autres tâches <em>(cuisine, conduite, ménage, etc.)</em>. D'autres, atteints d'une déficience visuelle, utilisent pour leur part un lecteur d'écran (<a href="https://fr.wikipedia.org/wiki/JAWS_(lecteur_d%27%C3%A9cran)">Jaws</a>, <a href="https://fr.wikipedia.org/wiki/VoiceOver">VoiceOver</a>, <a href="https://fr.wikipedia.org/wiki/ESpeak">eSpeak</a>, etc.) afin de leur permettre de naviguer de façon auditive le web 🔊.</p>

<p>Imaginons un instant que nous sommes l'une de ces personnes et que nous consultons tous les matins <a href="https://www.lapresse.ca/">LaPresse.ca</a> 📰. Heureusement pour nous, les assistants vocaux et lecteurs d'écran reconnaissent les balises <incode>&lt;header&gt;</incode> et nous offrent de les sauter. Cette option serait impossible si une balise <incode>div></incode> était utilisée. Il faudrait donc écouter en entier la narration de l'entête de La Presse à chaque fois que nous consultons un article 😩.</p>

<h3>Performance sur les moteurs de recherche</h3>

<p>Une sémantique adéquate permet aux différents moteurs de recherche <em>(<a href="https://www.google.ca/">Google</a>, <a href="https://www.bing.com/?cc=ca">Bing</a>, <a href="https://ca.yahoo.com/">Yahoo</a>, etc.)</em> de mieux comprendre et d'analyser le contenu d'une page afin de mieux l'indexer.</p>

<p>Par exemple, il est possible de modifier l'apparence d'un texte dans un <incode>&lt;div&gt;</incode> avec du CSS afin de l'afficher en plus gros que le texte régulier. Bien que cette approche permette aux lecteurs de comprendre qu'il s'agit d'un titre, il n'en va pas de même pour les moteurs de recherche qui ne seront pas à même de faire cette nuance. Parcontre, si une balise <incode>&lt;h1&gt;</incode> est utilisée à la place d'une balise <incode>&lt;div&gt;</incode>, il devient soudainement plus évident pour ces moteurs que cet extrait de texte devrait être utilisé pour présenter cette page dans un résultat de recherche.</p>

<h3>Simplification du développement</h3>

<p>Une bonne sémantique permet de simplifier le développement pour soi et pour les individus qui pourraient être amenés à interagir avec notre code. Il est plus simple de repérer des ouverture et fermeture de balises lorsquelles correspondent à des éléments tangibles dans une page.</p>

<p>Par exemple, si une dizaine de balises se ferment une à la suite de l'autre, il peut-être ardu au premier regard de déterminer laquelle correspond à la fin de l'entête d'un site si toutes ces balises sont des <incode>&lt;/div&gt;</incode>. Cependant, si dans le lot une fermeture de balise <incode>&lt;/header&gt;</incode> est utilisée, il devient soudainement évident où l'entête se termine.</p>

<figure class="image">
    <div>
        <img src="images/semantic.png" width="900" heigth="484">
    </div>
    <figcaption>
        <p style=" text-align:center; font-size: 12px;">À gauche, sans balises sémantiques.
            <br>
           À droite, avec balises sémantiques. 
        </p>
    </figcaption>
</figure>

<dots></dots>

<grostitre>Header</grostitre>

<p>La balise <incode>&lt;header&gt;</incode> représente un entête dans son contexte.</p>

<p>Par exemple, si elle n'est pas utilisée à l'intérieur d'une autre balise ayant une valeur sémantique, elle représente l'entête du site. Elle pourrait contenir entre autres un logo, un titre, une barre de recherche, etc.</p>

<highlight lang="html">&lt;header&gt;
  &lt;img src=&quot;logo-du-site.png&quot; alt=&quot;Logo&quot;&gt;
  &lt;h1&gt;Nom du site&lt;/h1&gt;
  ...
&lt;/header&gt;</highlight>

<p>Elle pourrait aussi être utilisée pour représenter l'entête d'un article incluant le nom de l'article, son auteur, sa date de publication, etc.</p>

<p>Bref, plusieurs possibilités existent. Il est donc possible d'avoir plusieurs balises <incode>&lt;header&gt;</incode> sur une même page. Puisqu'il s'agit d'une balise de type bloc, elle se comporte exactement comme une balise <incode>&lt;div&gt;</incode>.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/header">header</doclink>
<doclink href="https://www.w3schools.com/tags/tag_header.asp">header</doclink>

<dots></dots>

<grostitre>Footer</grostitre>

<p>La balise <incode>&lt;footer&gt;</incode> représente le pied de page de son contexte.</p>

<p>Par exemple, si elle n'est pas utilisée à l'intérieur d'une autre balise aillant une valeur sémantique, elle représente le pied de page du site. Elle pourrait contenir entre autre les informations de contact, la mention de droits d'auteur, le plan du site, etc.</p>

<highlight lang="html">&lt;footer&gt;
  &lt;div class=&quot;contact&quot;&gt;infos@site.com&lt;/div&gt;
  &lt;span class=&quot;copy&quot;&gt;©2021 Nom du site&lt;/span&gt;
  ...
&lt;/footer&gt;</highlight>

<p>Elle pourrait aussi être utilisée pour représenter le pied de page d'un article incluant des liens de partage sur les réseaux sociaux, un rappel de l'auteur, etc.</p>

<p>Bref, plusieurs possibilités existent. Il est donc possible d'avoir plusieurs balises <incode>&lt;footer&gt;</incode> sur une même page. Puisqu'il s'agit d'une balise de type bloc, elle se comporte exactement comme une balise <incode>&lt;div&gt;</incode>.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/footer">footer</doclink>
<doclink href="https://www.w3schools.com/tags/tag_footer.asp">footer</doclink>

<dots></dots>

<grostitre>Nav</grostitre>

<p>Comme son nom l'indique, la balise <incode>&lt;nav&gt;</incode> représente un élément de navigation. Elle contient donc un groupe de liens permettant de naviguer sur le site ou encore sur la page actuelle.</p>

<ul>
    <li>Un menu</li>
    <li>Une table des matières</li>
    <li>Un fil d'Ariane</li>
    <li>Etc.</li>
</ul>

<highlight lang="html">&lt;nav&gt;
  &lt;ul&gt;
    &lt;li&gt;&lt;a href=&quot;./accueil.html&quot;&gt;Accueil&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;./produits.html&quot;&gt;Produits&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;./contact.html&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</highlight>

<p>Il s'agit aussi d'une balise de type bloc, elle se comporte donc exactement comme une balise <incode>&lt;div&gt;</incode>.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/nav">nav</doclink>
<doclink href="https://www.w3schools.com/tags/tag_nav.asp">nav</doclink>

<dots></dots>

<grostitre>Main</grostitre>

<p>La balise <incode>&lt;main&gt;</incode> représente le contenu principal d'une page. Elle ne doit pas contenir les éléments qui se répètent d'une page à l'autre, par exemple l'entête et le pied de page d'un site.</p>

<p>Il est <u>impossible</u> d'avoir plus d'une balise <incode>&lt;main&gt;</incode> sur une même page, puisqu'il ne peut y avoir qu'un seul contenu principal.</p>

<highlight lang="html">&lt;header&gt;
  &lt;h1&gt;Nom du site&lt;/h1&gt;
  ...
&lt;/header&gt;

&lt;main&gt;
  &lt;h2&gt;Sujet principal du site&lt;/h2&gt;
  &lt;img src=&quot;sujet.png&quot; alt=&quot;Sujet&quot;&gt;
  ...
&lt;/main&gt;

&lt;footer&gt;
  &lt;div class=&quot;contact&quot;&gt;infos@site.com&lt;/div&gt;
  ...
&lt;/footer&gt;</highlight>

<p>Puisqu'il s'agit d'une balise de type bloc, elle se comporte exactement comme une balise <incode>&lt;div&gt;</incode>.</p>

<warning>La balise <incode>&lt;main&gt;</incode> ne devrait pas être enfant des balises sémantique <incode>&lt;article&gt;</incode>, <incode>&lt;aside&gt;</incode>, <incode>&lt;footer&gt;</incode>, <incode>&lt;header&gt;</incode> ou <incode>&lt;nav&gt;</incode>.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/main">main</doclink>
<doclink href="https://www.w3schools.com/tags/tag_main.asp">main</doclink>

<dots></dots>

<grostitre>Section</grostitre>

<p>La balise <incode>&lt;section&gt;</incode> représente un groupe d'éléments étant liés par un thème.</p>

<p>Par exemple, sur la page d'accueil d'un journal, plusieurs aperçus d'articles sont disponibles. Ces articles sont souvent regroupés en thèmes <em>(actualités, international, sports, etc.)</em>. Puisqu'il s'agit d'une balise de type bloc, elle se comporte exactement comme une balise <incode>&lt;div&gt;</incode>.</p>

<p>Une structure comme celle-ci 👇 serait donc possible.</p>

<highlight lang="html">&lt;section&gt;
  &lt;h2&gt;Actualités&lt;/h2&gt;
  &lt;a href=&quot;page-1.html&quot;&gt;Québec se rectifie&lt;/a&gt;
  &lt;a href=&quot;page-2.html&quot;&gt;Deux députés sanctionnés&lt;/a&gt;
  ...
&lt;/section&gt;

&lt;section&gt;
  &lt;h2&gt;Sports&lt;/h2&gt;
  &lt;a href=&quot;page-3.html&quot;&gt;Le Canadien l&#39;emporte&lt;/a&gt;
  &lt;a href=&quot;page-4.html&quot;&gt;Le onze montréalais triomphe&lt;/a&gt;
  ...
&lt;/section&gt;</highlight>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/section">section</doclink>
<doclink href="https://www.w3schools.com/tags/tag_section.asp">section</doclink>

<dots></dots>

<grostitre>Article</grostitre>

<p>La balise <incode>&lt;article&gt;</incode> représente, comme son nom l'indique, un article ou encore un billet de blog. Plus précisément, une entité qui pourrait consommée seule, sans le contexte du reste du site et néanmoins faire du sens.</p>

<p>Par exemple, un billet sur les réseaux sociaux pourrait être un <incode>&lt;article&gt;</incode>, puisqu'il n'est pas nécessaire de lire les autres billets dans un fil d'actualité afin de le comprendre.</p>

<p>Une structure comme celle-ci 👇 serait donc possible.</p>

<highlight lang="html">&lt;article&gt;
  &lt;header&gt;
    &lt;h2&gt;Le Canadien l&#39;emporte&lt;/h2&gt;
  &lt;/header&gt;
  &lt;p&gt;Le CH a remporté une victoire in extrémis hier...&lt;/p&gt;
&lt;/article&gt;</highlight>

<p>Comme les précédentes balises, il s'agit d'une balise de type bloc, elle se comporte donc exactement comme une balise <incode>&lt;div&gt;</incode>.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/article">article</doclink>
<doclink href="https://www.w3schools.com/tags/tag_article.asp">article</doclink>

<dots></dots>

<grostitre>Aside</grostitre>

<p>La balise <incode>&lt;aside&gt;</incode> représente un groupe d'éléments ayant un lien indirect avec le sujet principal de la page.</p>

<ul>
    <li>Des aperçus d'articles similaires</li>
    <li>Un bloc de commentaires</li>
    <li>Des informations supplémentaires</li>
    <li>Etc.</li>
</ul>

<highlight lang="html">&lt;article&gt;
  &lt;header&gt;
    &lt;h2&gt;Le Canadien l&#39;emporte&lt;/h2&gt;
  &lt;/header&gt;
  &lt;p&gt;Le CH a remporté une victoire in extrémis hier...&lt;/p&gt;
  &lt;aside&gt;Le Canadien est une équipe fondée en 1909.&lt;/aside&gt;
&lt;/article&gt;</highlight>

<p>Il s'agit aussi d'une balise de type bloc, elle se comporte donc exactement comme une balise <incode>&lt;div&gt;</incode>.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/aside">aside</doclink>
<doclink href="https://www.w3schools.com/tags/tag_aside.asp">aside</doclink>

<dots></dots>