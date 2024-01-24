<?php

/**
 * @type     article
 * @title    NavBar
 * @icon     ../images/icon.webp
 * @abstract La barre de navigation Bootstrap
 * @ref      web/quadriciels/bootstrap
 */
?>
<grostitre>Introduction</grostitre>
<p>La navbar de Bootstrap permet de simplifier la navigation d'un site en offrant plusieurs options de&nbsp;configurations.</p>
<p>Pour définir une navbar, il faut ajouter la classe Bootstrap&nbsp;<incode>.navbar</incode>&nbsp;à une balise HTML. Idéalement une balise&nbsp;<incode>&lt;nav&gt;</incode>, afin de maximiser l'aspect sémantique de cette&nbsp;composante.</p>
<p>Par exemple:</p>
<highlight lang="html">&lt;nav class=&quot;navbar&quot;&gt;...&lt;/nav&gt;</highlight>


<warning>Pour fonctionner, cette composante a besoin AUSSI du fichier JS de Bootstrap et non seulement sa feuille de styles css.</warning>

<dots></dots>
<grostitre>Thème de couleur</grostitre>
<p>L'une de ces configurations consiste à sélectionner le thème de couleur de la navbar en fonction de la couleur de fond attribuée en CSS&nbsp;<em>(si une couleur a été&nbsp;attribuée)</em>.</p>
<p>Si par exemple la couleur de fond est pâle, la classe&nbsp;<incode>.navbar-light</incode>&nbsp;doit être utilisée. À l'opposée,&nbsp;<incode>.navbar-dark</incode>&nbsp;sera la meilleure option si cette couleur est&nbsp;foncée.</p>
<p>Cette classe change la couleur des éléments de la navbar afin de maximiser leur contraste avec la couleur de&nbsp;fond. Si aucune couleur n'a été attribuée, la meilleure option est&nbsp;<incode>.navbar-light</incode>&nbsp;afin de contraster avec le fond de page blanc par&nbsp;défaut.</p>

<p>Par exemple:</p>
<highlight lang="html">&lt;nav class=&quot;navbar navbar-light&quot;&gt;...&lt;/nav&gt;</highlight>


<warning>Si la couleur de fond de la navbar est blanche et que la classe <incode>.navbar-dark</incode> est utilisée, le contenu de la navbar sera invisible, puisqu’il sera blanc sur fond&nbsp;blanc.</warning>

<doclink href="https://getbootstrap.com/docs/5.3/components/navbar/#color-schemes">Color schemes</doclink>

<dots></dots>

<grostitre>Changement d'affichage</grostitre>

<p>Une autre des configurations importantes consiste à spécifier à quel breakpoint la navbar doit passer de son affichage compact, en menu hamburger&nbsp;☰, à l'affichage étendu, en barre de navigation&nbsp;complète.</p>

<p>Ce changement d'affichage est spécifier grâce à une classe ayant le format suivant&nbsp;<incode>.navbar-expand-[breakpoint]</incode>. Bref, l'affichage étendu deviendra actif lorsque ce breakpoint sera&nbsp;atteint.</p>


<p>Par exemple, pour afficher une barre de navigation complète à partir de&nbsp;<incode>lg</incode>:</p>

<highlight lang="html">&lt;nav class=&quot;navbar navbar-light navbar-expand-lg&quot;&gt;...&lt;/nav&gt;</highlight>

<dots></dots>

<grostitre>Conteneur</grostitre>

<p>Afin de gérer adéquatement la position des éléments dans la navbar, il faut ajouter un&nbsp;<a target="_blank" href="../grille">conteneur Bootstrap</a>&nbsp;dans celle-ci, soit&nbsp;<incode>container</incode>&nbsp;ou&nbsp;<incode>container-fluid</incode>, selon la largeur&nbsp;désirée.</p>

<highlight lang="html">&lt;nav class=&quot;navbar navbar-light navbar-expand-lg&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
    ...
    &lt;/div&gt;
&lt;/nav&gt;</highlight>

<dots></dots>

<grostitre>Hamburger 🍔</grostitre>

<p>Pour que la navbar puisse masquer les éléments de navigation lorsque le menu hamburger ☰ est affiché, il faut regrouper ces éléments dans une balise avec les classes&nbsp;<incode>.collapse.navbar-collapse</incode>&nbsp;comme&nbsp;suit:</p>


<highlight lang="html">&lt;nav class=&quot;navbar navbar-light navbar-expand-lg&quot;&gt;
    &lt;div class=&quot;container-fluid&quot;&gt;
        &lt;div id=&quot;mainNav&quot; class=&quot;collapse navbar-collapse&quot;&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/nav&gt;</highlight>


<warning>Remarquez l’identifiant unique <incode>#mainNav</incode> sur la balise. Il permettra de contrôler l’affichage de cet&nbsp;élément.</warning>


<p>Évidemment pour être en mesure d'ouvrir/masquer la navigation, un bouton est nécessaire, le fameux&nbsp;<em>hamburger button</em> ☰.</p>
<p>Bootstrap nomme cet élément le:&nbsp;<em>"Toggler"</em>. Il faut donc insérer un&nbsp;<em>toggler</em>&nbsp;dans la navbar et lui spécifier, via ses attributs, la navigation qu'il doit&nbsp;ouvrir/masquer.</p>
<p>Dans l'exemple ci-dessous, les attributs&nbsp;<incode>data-bs-target</incode>&nbsp;et&nbsp;<incode>aria-controls</incode>&nbsp;indiquent à Bootstrap que ce bouton contrôle l'élément avec le id&nbsp;<incode>mainNav</incode>.</p>

<highlight lang="html">&lt;button class=&quot;navbar-toggler&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#mainNav&quot; aria-controls=&quot;mainNav&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Affichage/masquage de la navigation&quot;&gt;

    &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;

&lt;/button&gt;</highlight>

<info>
    Le span <incode>.navbar-toggler-icon</incode> ne sert qu’à afficher l’icône ☰. Si vous le désirez, vous pouvez le remplacer par autre&nbsp;chose.</info>

<dots></dots>

<grostitre>Navigation</grostitre>

<p>Il faut maintenant ajouter la liste de liens constituant la navigation en&nbsp;soi.</p>
<p>Pour ce faire, il faut&nbsp;créer:</p>
<ol start="1">
    <li>
        <p>Une liste&nbsp;<incode>&lt;ul&gt;</incode>&nbsp;avec la classe&nbsp;<incode>.navbar-nav</incode>&nbsp;dans la balise&nbsp;<incode>.collapse.navbar-collapse</incode>.</p>
    </li>
    <li>
        <p>Des items de liste&nbsp;<incode>&lt;li&gt;</incode>&nbsp;avec la classe&nbsp;<incode>.nav-item</incode>.</p>
    </li>
    <li>
        <p>Des liens&nbsp;<incode>&lt;a&gt;</incode>&nbsp;dans chaque item avec la classe&nbsp;<incode>.nav-link</incode>.</p>
    </li>
</ol>
<p>Par exemple:</p>

<highlight lang="html">&lt;nav class=&quot;navbar navbar-light navbar-expand-lg&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;!-- Hamburger button --&gt;
        &lt;button class=&quot;navbar-toggler&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#mainNav&quot; aria-controls=&quot;mainNav&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Affichage/masquage de la navigation&quot;&gt;
            &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;

        &lt;!-- Navigation --&gt;
        &lt;div id=&quot;mainNav&quot; class=&quot;collapse navbar-collapse&quot;&gt;
            &lt;ul class=&quot;navbar-nav&quot;&gt;
                &lt;li class=&quot;nav-item&quot;&gt;
                    &lt;a href=&quot;page-1.html&quot; class=&quot;nav-link&quot;&gt;Page 1&lt;/a&gt;
                &lt;/li&gt;
                &lt;li class=&quot;nav-item&quot;&gt;
                    &lt;a href=&quot;page-2.html&quot; class=&quot;nav-link&quot;&gt;Page 2&lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/nav&gt;</highlight>


<p>Afin de différencier la page courante des autres, il est possible d'ajouter la classe&nbsp;<incode>.active</incode>&nbsp;au lien correspondant à cette page.</p>
<p>Par exemple:</p>

<highlight lang="html">&lt;a href=&quot;page-1.html&quot; class=&quot;nav-link active&quot;&gt;Page 1&lt;/a&gt;
</highlight>

<dots></dots>

<grostitre>Menu déroulant</grostitre>

<p>Pour obtenir un menu déroulant, communément appelé&nbsp;<em>"dropdown"</em>, il faut bonifier un&nbsp;<incode>li.nav-item</incode>&nbsp;avec la classe&nbsp;<incode>.dropdown</incode>, ainsi que le&nbsp;<incode>a.nav-link</incode>&nbsp;à l'intérieur de celui-ci avec la classe&nbsp;<incode>.dropdown-toggle</incode>&nbsp;et l'attribut&nbsp;<incode>data-bs-toggle="dropdown"</incode>.</p>

<p>Le lien maintenant converti, il faut ajouter les éléments du menu déroulant grâce à une liste&nbsp;<incode>ul.dropdown-menu</incode>&nbsp;contenant les différents liens souhaités&nbsp;<incode>dropdown-item</incode>.</p>
<p>Par exemple:</p>

<highlight lang="html">&lt;li class=&quot;nav-item dropdown&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot;&gt;Page 1&lt;/a&gt;

    &lt;ul class=&quot;dropdown-menu&quot;&gt;
        &lt;li&gt;
            &lt;a href=&quot;page-1.html&quot; class=&quot;dropdown-item&quot;&gt;Sous-menu1&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;a href=&quot;page-2.html&quot; class=&quot;dropdown-item&quot;&gt;Sous-menu2&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/li&gt;</highlight>

<dots></dots>

<grostitre>Logo</grostitre>

<p>Les navbars offrent la possibilité d'ajouter un logo sous forme de texte ou d'image dans la barre de navigation. Cette option est appelée&nbsp;<incode>Brand</incode>. Pour ce faire, il suffit d'ajouter la classe&nbsp;<incode>.navbar-brand</incode>&nbsp;sur une balise HTML à l'extérieur du&nbsp;<incode>.collapse.navbar-collapse</incode>.</p>
<p>Par exemple:</p>
<highlight lang="html">&lt;a class=&quot;navbar-brand&quot; href=&quot;index.html&quot;&gt;Nom de mon site&lt;/a&gt;</highlight>

<doclink href="https://getbootstrap.com/docs/5.3/components/navbar/#brand">Brand</doclink>

<dots></dots>

<grostitre>Positionnement</grostitre>

<p>Bootstrap offre des utilitaires de positionnement qui ne sont pas limités qu'à la composante de navbar, mais qui peuvent s'avérer très utiles avec celle-ci. Pour les utiliser, il suffit d'ajouter la classe désirée à la&nbsp;navbar.</p>
<ul>
    <li>
        <p><incode>fixed-top</incode>&nbsp;fige la navbar au sommet de la&nbsp;page.</p>
    </li>
    <li>
        <p><incode>fixed-bottom</incode>&nbsp;fige la navbar au bas de la&nbsp;page.</p>
    </li>
    <li>
        <p><incode>sticky-top</incode>&nbsp;laisse la navbar défiler avec la page jusqu'à ce que celle-ci atteigne le sommet de la&nbsp;page.</p>
    </li>
</ul>
<p>Par exemple pour une navbar figée au haut de la&nbsp;page.</p>

<highlight lang="html">&lt;nav class=&quot;navbar navbar-light fixed-top&quot;&gt;...&lt;/nav&gt;</highlight>
<doclink href="https://getbootstrap.com/docs/5.3/components/navbar/#placement">Placement</doclink>


<dots></dots>

<exercice href="../exercices/bootstrap-nav-card"></exercice>

