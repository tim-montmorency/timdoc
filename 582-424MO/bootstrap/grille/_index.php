<?php

/**
 * @type     article
 * @title    Grille
 * @icon     images/icon.png
 * @abstract Système de grille Bootstrap pour un mise en page facile et réactive
 */
?>


<p>La grande force de Bootstrap est sans contre dit sa grille. Cette dernière est constituée de 12 colonnes. Ce nombre peut paraître arbitraire&nbsp;<em>(pourquoi pas 10?)</em>, mais il est parfaitement logique puisqu'il est facilement divisible.</p>

CODEPEN
<p>Lors de la phase de design d'un site web, plusieurs types de divisions peuvent être utilisées. Par exemple, séparer un écran en deux parties égales. Dans ce cas, une grille de 12 ou de 10 colonnes fonctionne tout aussi bien, puisque le résultat donne 2x 6 colonnes ou 2x 5&nbsp;colonnes.</p>

CODEPEN

<p>Cependant, la majorité des divisions populaires ne sont pas compatibles avec 10&nbsp;colonnes.</p>
<p>Par exemple, dans le cas où le contenu principal doit prendre 75% de la largeur et laisser 25% à une barre latérale. Ce ratio est impossible à réaliser avec 10 colonnes puisqu'il faudrait avoir recours à des fractions de colonnes 🤢. Cependant, avec 12 colonnes il suffit d'allouer les 9 premières au contenu principal et les 3 dernières à la barre&nbsp;latérale.</p>
<p>Un ratio deux tiers, un tiers? Aucun problème, il suffit d'allouer les 8 premières colonnes au contenu et les 4 dernières à la barre&nbsp;latérale.</p>
CODEPEN

TOOL Gabarits XD BOOTSTAP

TOOL Gabarits FIGMA BOOTSTAP
<dots></dots>

<grostitre>Conteneurs</grostitre>

<p>Les conteneurs ou en anglais,&nbsp;<em>containers</em>, sont en fait des balises HTML de bases auxquelles une classe CSS définie par Bootstrap est ajoutée. Cette classe se charge de définir une largeur maximale aux&nbsp;<a rel="noopener noreferrer" href="#rangees">rangées</a>&nbsp;qui se retrouveront à l'intérieur de&nbsp;celle-ci.</p>
<p>Bien qu'il existe <strong>trois types de conteneurs</strong> Bootstrap, nous, nous concentrerons uniquement sur les deux plus&nbsp;fréquents.</p>

<h3 id="container">container</h3>

<p>Pour définir un conteneur Bootstrap, il suffit d'ajouter la classe&nbsp;<code>.container</code>&nbsp;à une balise comme&nbsp;suit:</p>

<highlight lang="html">&lt;div class=&quot;container&quot;&gt;...&lt;/div&gt;</highlight>

<p>Cette balise sera maintenant centrée horizontalement dans la page et aura une largeur différente en fonction de la dimension de l'écran et des différents&nbsp;<a target="_blank" rel="noopener noreferrer" href="/cours/bootstrap/breakpoints">breakpoints Bootstrap</a>. Créant ainsi une&nbsp;<a target="_blank" rel="noopener noreferrer" href="/cours/css/responsive">mise en page adaptive</a>.</p>

<p>Par exemple:</p>
<table>
    <thead>
        <tr>
            <th>
                LARGEUR D'ÉCRAN
            </th>
            <th>
                BREAKPOINT
            </th>
            <th>
                LARGEUR DE .CONTAINER
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                - de&nbsp;576px
            </td>
            <td>
                -
            </td>
            <td>
                100%
            </td>
        </tr>
        <tr>
            <td>
                576px et&nbsp;+
            </td>
            <td>
                sm
            </td>
            <td>
                540px
            </td>
        </tr>
        <tr>
            <td>
                768px et&nbsp;+
            </td>
            <td>
                md
            </td>
            <td>
                720px
            </td>
        </tr>
        <tr>
            <td>
                992px et&nbsp;+
            </td>
            <td>
                lg
            </td>
            <td>
                960px
            </td>
        </tr>
        <tr>
            <td>
                1200px et&nbsp;+
            </td>
            <td>
                xl
            </td>
            <td>
                1140px
            </td>
        </tr>
        <tr>
            <td>
                1400px et&nbsp;+
            </td>
            <td>
                xxl
            </td>
            <td>
                1320px
            </td>
        </tr>
    </tbody>
</table>


<h3 id="container-fluid">container-fluid</h3>

<p>Les conteneurs fluides, comme leur nom l'indique, sont fluides. Autrement dit, peu importe la dimension de l'écran, le conteneur prendra toujours toute la largeur&nbsp;disponible.</p>
<p>Pour définir un conteneur fluide, il suffit d'ajouter une classe, comme suit à une&nbsp;balise:</p>

<highlight lang="html">&lt;div class=&quot;container-fluid&quot;&gt;...&lt;/div&gt;</highlight>


<p>Afin d'illustrer la différence entre&nbsp;<code>.container</code>&nbsp;et&nbsp;<code>.container-fluid</code>, voici un&nbsp;<a href="https://codepen.io/smnarnold/full/d375c1afaf3bbfb34953a5b85818b552">exemple minimaliste</a>&nbsp;<em>(redimensionner la fenêtre afin de voir la différence de comportement entre les&nbsp;deux)</em>.</p>

<doclink href="https://getbootstrap.com/docs/5.0/layout/containers/">Containers</doclink>


<dots></dots>

<grostitre>Rangées</grostitre>

<p>Les rangées, ou en anglais&nbsp;<em>rows</em>, servent à gérer le positionnement des colonnes se trouvant à l'intérieur de&nbsp;celles-ci.</p>
<p>Pour définir une nouvelle rangée, il suffit d'ajouter la classe&nbsp;<code>.row</code>&nbsp;à une balise&nbsp;quelconque.</p>
<p>Par exemple:</p>

<highlight lang="html">&lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;row&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;</highlight>




<h3 id="Alignements">Alignements</h3>

<p>Le fonctionnement des rangées est basé sur&nbsp;<a href="http://smnarnold.com/cours/css/flexbox">flexbox</a>. Ainsi, plusieurs noms de classes utilitaires permettant de gérer l'alignement des colonnes ressemblent aux noms de différentes sous-propriétés de&nbsp;flexbox.</p>
<ul>
    <li>
        <p><code>justify-content-start</code>&nbsp;aligne les colonnes à&nbsp;gauche.</p>
    </li>
    <li>
        <p><code>justify-content-center</code>&nbsp;aligne les colonnes au&nbsp;centre.</p>
    </li>
    <li>
        <p><code>justify-content-end</code>&nbsp;aligne les colonnes à&nbsp;droite.</p>
    </li>
    <li>
        <p><code>justify-content-between</code>&nbsp;distribue l'espace également entre les colonnes, mais ignore les&nbsp;extrémités.</p>
    </li>
    <li>
        <p><code>justify-content-around</code>&nbsp;distribue l'espace entre les colonnes et les&nbsp;extrémités.</p>
    </li>
    <li>
        <p><code>justify-content-evenly</code>&nbsp;distribue l'espace entre les colonnes et les extrémités, mais s'assure que chaque espace soit d'une largeur&nbsp;équivalente.</p>
    </li>
</ul>
<p>Par exemple, pour centrer le contenu d'une rangée, il suffit d'ajouter la classe&nbsp;<code>justify-content-center</code>:</p>
CODEPEN<br><br><br><br>

<doclink href="https://getbootstrap.com/docs/5.0/examples/grid/">Exemples de grille</doclink>

<br>

<exercice href="../exercices/bootstrap-puzzle-colore"></exercice>