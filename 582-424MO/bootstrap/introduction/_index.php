<?php 
/**
 * @type     article
 * @title    Introduction
 * @icon     images/icon.png
 * @abstract Le cadriciel de mise en page le plus populaire au monde
 * @index    1000
 */
?>

<grostitre>Intro</grostitre>
<p>Bootstrap est le cadriciel d'interface <em>(UI framework)</em> le plus populaire au monde. Il permet de
    simplifier et d'accélérer la réalisation de sites web&nbsp;responsives.</p>

<dots></dots>
<h3>Qu’est-ce qu’un cadriciel ?</h3>

 
<p>Un cadriciel est un ensemble cohérent de composantes logicielles. Celui-ci permet d’abstraire le niveau le plus technique du codage et d’ainsi multiplier la productivité des développeurs Web.</p>


 <p>Il existe en fait deux types de cadriciel : les cadriciels back-end et les cadriciels d’interface.</p>




<grostitre>Histoire</grostitre>

<p>Ce projet doit son origine à&nbsp;<a href="https://twitter.com/">Twitter 🐦</a>&nbsp;qui, dans le but de simplifier
    la réalisation et l'évolution de ses différents sites, a décidé de créer une base commune de mise en page entre
    celles-ci. Mark Otto, un des deux architectes de ce cadriciel, dit qu’il a transformé Bootstrap en projet à code ouvert pour « help awesome people make awesome shit ». Le résultat fut donc partagé gratuitement avec le reste de la communauté web et rencontra immédiatement un immense&nbsp;succès!</p>

<p>Si vous faites des recherches sur le web, vous trouverez plusieurs informations à propos de Bootstrap. Cependant,
    faites attention de bien valider la version dont l'article traite. Au moment d'écrire ces lignes, la version 5 est
    la plus récente et est celle qui sera enseignée en classe.</p>


<dots></dots>
<grostitre>Installation</grostitre>

<p>Comme pour tout cadriciel&nbsp;<em>(framework)</em>, afin d'avoir accès à ses fonctionnalités, il est nécessaire de
    l'inclure dans son&nbsp;projet. Dans le cas de Bootstrap il s'agit d'un cadriciel axé sur la mise en page, il est
    donc impératif d'importer sa feuille de style afin de bénéficier de ses fonctionnalités de base. Cependant, certains
    modules bonifiés requièrent aussi du JavaScript. L'importation de fichiers JS est donc optionnelle, mais suggérée
    afin de permettre à ces modules de fonctionner&nbsp;adéquatement.</p>
<p>Pour importer Bootstrap, il est possible:</p>
<ul>
    <li>
        De&nbsp;<a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">télécharger
                Bootstrap</a>&nbsp;à partir du site web officiel ou encore via&nbsp;<a
                href="https://github.com/twbs/bootstrap">GitHub</a>. Afin d'avoir une copie locale des fichiers. Cette
            approche offre l'avantage d'avoir accès aux fichiers sources et donc de pouvoir modifier certains paramètres
            de base de Bootstrap si&nbsp;désiré.
    </li>
    <li>
        D'utiliser un service de CDN, permettant simplement de&nbsp;<a
                href="https://getbootstrap.com/docs/5.0/getting-started/introduction/#css">pointer vers une URL</a>.
            Cette approche est probablement la plus simple et plus rapide et offre d'excellentes&nbsp;performances.
    </li>
</ul>

<h3>HTML5 doctype</h3>
<p>Bootstrap exige l'utilisation du doctype HTML5. Sans lui, vous verrez un style incomplet et funky, mais l'inclure ne devrait pas causer de problèmes considérables.</p>
<highlight lang="html">&lt;!doctype html&gt;
&lt;html lang="fr"&gt;
    ...
&lt;/html&gt;
</highlight>

<h3>Balises &lt;meta&gt; pour des pages web réactives</h3>
<p>Bootstrap est développé mobile first, une stratégie dans laquelle nous optimisons d'abord le code pour les appareils mobiles, puis nous mettons à l'échelle les composants si nécessaire en utilisant les media queries CSS. Pour garantir un rendu correct et un zoom tactile pour tous les appareils, ajoutez la métabalise responsive viewport à votre <head>.</p>
<highlight lang="html">&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;</highlight>

<dots></dots>

<grostitre>Particularités</grostitre>


<p>Notez qu'afin de mieux gérer les dimensions en CSS, Bootstrap définit le&nbsp;<code>box-sizing</code>&nbsp;de base
    à&nbsp;<code>border-box</code>&nbsp;ce qui s'appliquera sur l'ensemble de votre&nbsp;projet.</p>
<p>Il inclut aussi un Reboot, une feuille de style permettant de standardiser l'aspect par défaut des balises, afin de
    s'assurer que le résultat obtenu soit le même sur tous les&nbsp;navigateurs. Par exemple, une
    balise&nbsp;<code>&lt;h1&gt;</code>&nbsp;pourrait avoir normalement une taille de 32px sur Chrome et de 30px sur
    Firefox. Afin de standardiser cette taille, le fichier reboot définirait une taille de base pour tous
    les&nbsp;navigateurs.</p>

    <doclink href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap (anglais)</doclink>


