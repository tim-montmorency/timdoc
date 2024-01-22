<?php

/**
 * @type     article
 * @title    Grille
 * @icon     images/icon.png
 * @abstract Système de grille Bootstrap pour un mise en page facile et réactive
 * @index 930
 */
?>

<p>La grande force de Bootstrap est sans contre dit sa grille. Cette dernière est constituée de 12 colonnes. Ce nombre peut paraître arbitraire&nbsp;<em>(pourquoi pas 10?)</em>, mais il est parfaitement logique puisqu'il est facilement divisible.</p>

<p class="codepen" data-height="300" data-theme-id="dark" data-slug-hash="WNKyvyN" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/WNKyvyN">
            Bootstrap - Columns</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<br><br>
<p>Lors de la phase de design d'un site web, plusieurs types de divisions peuvent être utilisées. Par exemple, séparer un écran en deux parties égales. Dans ce cas, une grille de 12 ou de 10 colonnes fonctionne tout aussi bien, puisque le résultat donne 2x 6 colonnes ou 2x 5&nbsp;colonnes.</p>

<p class="codepen" data-height="300" data-theme-id="43847" data-slug-hash="WNKyvgb" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/WNKyvgb">
            Bootstrap - Columns equals</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<br><br>


<p>Cependant, la majorité des divisions populaires ne sont pas compatibles avec 10&nbsp;colonnes.</p>
<p>Par exemple, dans le cas où le contenu principal doit prendre 75% de la largeur et laisser 25% à une barre latérale. Ce ratio est impossible à réaliser avec 10 colonnes puisqu'il faudrait avoir recours à des fractions de colonnes 🤢. Cependant, avec 12 colonnes il suffit d'allouer les 9 premières au contenu principal et les 3 dernières à la barre&nbsp;latérale.</p>
<p>Un ratio deux tiers, un tiers? Aucun problème, il suffit d'allouer les 8 premières colonnes au contenu et les 4 dernières à la barre&nbsp;latérale.</p>
<p class="codepen" data-height="300" data-theme-id="43847" data-slug-hash="ExpRjev" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/ExpRjev">
            Bootstrap - Columns equals</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<dots></dots>

<tool href="tools/gabarits-xd-bootstrap/"></tool>

<tool href="tools/gabarits-figma-bootstrap/"></tool>

<dots></dots>

<grostitre>Conteneurs</grostitre>

<p>Les conteneurs ou en anglais,&nbsp;<em>containers</em>, sont en fait des balises HTML de bases auxquelles une classe CSS définie par Bootstrap est ajoutée. Cette classe se charge de définir une largeur maximale aux&nbsp;<a rel="noopener noreferrer" href="#rangees">rangées</a>&nbsp;qui se retrouveront à l'intérieur de&nbsp;celle-ci.</p>
<p>Bien qu'il existe <strong>trois types de conteneurs</strong> Bootstrap, nous, nous concentrerons uniquement sur les deux plus&nbsp;fréquents.</p>

<h3 id="container">container</h3>

<p>Pour définir un conteneur Bootstrap, il suffit d'ajouter la classe&nbsp;<incode>.container</incode>&nbsp;à une balise comme&nbsp;suit:</p>

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


<p>Afin d'illustrer la différence entre&nbsp;<incode>.container</incode>&nbsp;et&nbsp;<incode>.container-fluid</incode>, voici un&nbsp;<a href="https://codepen.io/smnarnold/full/d375c1afaf3bbfb34953a5b85818b552">exemple minimaliste</a>&nbsp;<em>(redimensionner la fenêtre afin de voir la différence de comportement entre les&nbsp;deux)</em>.</p>

<doclink href="https://getbootstrap.com/docs/5.0/layout/containers/">Containers</doclink>


<dots></dots>

<grostitre>Rangées</grostitre>

<p>Les rangées, ou en anglais&nbsp;<em>rows</em>, servent à gérer le positionnement des colonnes se trouvant à l'intérieur de&nbsp;celles-ci.</p>
<p>Pour définir une nouvelle rangée, il suffit d'ajouter la classe&nbsp;<incode>.row</incode>&nbsp;à une balise&nbsp;quelconque.</p>
<p>Par exemple:</p>

<highlight lang="html">&lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;row&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;</highlight>




<h3 id="Alignements">Alignements</h3>

<p>Le fonctionnement des rangées est basé sur&nbsp;<a href="http://smnarnold.com/cours/css/flexbox">flexbox</a>. Ainsi, plusieurs noms de classes utilitaires permettant de gérer l'alignement des colonnes ressemblent aux noms de différentes sous-propriétés de&nbsp;flexbox.</p>
<ul>
    <li>
        <p><incode>justify-content-start</incode>&nbsp;aligne les colonnes à&nbsp;gauche.</p>
    </li>
    <li>
        <p><incode>justify-content-center</incode>&nbsp;aligne les colonnes au&nbsp;centre.</p>
    </li>
    <li>
        <p><incode>justify-content-end</incode>&nbsp;aligne les colonnes à&nbsp;droite.</p>
    </li>
    <li>
        <p><incode>justify-content-between</incode>&nbsp;distribue l'espace également entre les colonnes, mais ignore les&nbsp;extrémités.</p>
    </li>
    <li>
        <p><incode>justify-content-around</incode>&nbsp;distribue l'espace entre les colonnes et les&nbsp;extrémités.</p>
    </li>
    <li>
        <p><incode>justify-content-evenly</incode>&nbsp;distribue l'espace entre les colonnes et les extrémités, mais s'assure que chaque espace soit d'une largeur&nbsp;équivalente.</p>
    </li>
</ul>
<p>Par exemple, pour centrer le contenu d'une rangée, il suffit d'ajouter la classe&nbsp;<incode>justify-content-center</incode>:</p>
<p class="codepen" data-height="300" data-theme-id="43847" data-default-tab="html,result" data-slug-hash="BaPVNEB" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/BaPVNEB">
  Bootstrap - centered</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<br><br>

<h3 id="Restrictions">Restrictions</h3>
<ul>
    <li>
        <p>Les rangées doivent toujours être utilisées <strong>à l'intérieur d'un conteneur Bootstrap</strong>, puisque des marges négatives sur celles-ci sont annulées par le&nbsp;conteneur.</p>
    </li>
    <li>
        <p><strong>Seules des colonnes Bootstrap devraient-être enfant direct d'une rangée</strong> afin d'assurer le fonctionnement optimal d'une&nbsp;rangée.</p>
    </li>
</ul>
<warning>Malgré ce que son nom pourrait laisser croire, il est possible d’avoir des colonnes sur plusieurs rangées à l’intérieur d’un élément avec la classe <incode>.row</incode> sans problème.</warning>
<dots></dots>


<grostitre>Colonnes</grostitre>

<p>Les colonnes ou en anglais&nbsp;<em>columns</em>&nbsp;sont les composantes les plus importantes de la grille&nbsp;Bootstrap! Elles permettent de définir la dimension allouée aux différents éléments sur la&nbsp;page.</p>

<p>Pour définir une colonne de base, il suffit d'ajouter la classe&nbsp;<incode>.col</incode>&nbsp;à une balise, comme&nbsp;suit:</p>

<highlight lang="html">
&lt;div class=&quot;container&quot;&gt; 
  &lt;div class=&quot;row&quot;&gt; 
    &lt;div class=&quot;col&quot;&gt;&lt;/div&gt; 
  &lt;/div&gt;
&lt;/div&gt;
</highlight>

<p>Par défaut, si une seule&nbsp;<incode>.col</incode>&nbsp;est définie, elle prendra toute la largeur disponible dans sa rangée. Cependant, si d'autres&nbsp;<incode>.col</incode>sont ajoutées, celles-ci se distribueront l'espace également.</p>

<p>Par exemple, avec 2&nbsp;colonnes:</p>

<p class="codepen" data-height="300" data-theme-id="43847" data-default-tab="html,result" data-slug-hash="RwBJPmd" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/RwBJPmd">
  Bootstrap - 2 col</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<br><br>

<p>Le tout devient encore plus intéressant, lorsque l'on comprend qu'il est possible de spécifier sur 12 la largeur d'une colonne simplement en lui ajoutant un tiret suivi du nombre de colonnes désirées.</p>

<p>Par exemple, pour avoir un élément d'une largeur de 3 colonnes et un de 6 colonnes:</p>

<p class="codepen" data-height="300" data-theme-id="43847" data-default-tab="html,result" data-slug-hash="KKBepjg" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/KKBepjg">
  Bootstrap - col-3</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<br><br>
<p>Toutes les options de largeur de 1 à 12 sont disponibles.</p>
<img src="images/bootstrap-columns.png">

<br><br>

<p>Il est possible de spécifier plusieurs colonnes de largeurs différentes à l'intérieur d'une même rangée sans problème. Si le total de ces colonnes excède 12, un retour à la ligne est simplement&nbsp;effectué.</p>
<p>Par exemple:</p>

<p class="codepen" data-height="300" data-theme-id="43847" data-default-tab="html,result" data-slug-hash="WNKyvVr" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/WNKyvVr">
  Bootstrap - multiple lines</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<br>
<h3 id="Breakpoints">Breakpoints</h3>
<p>La grande force des colonnes Bootstrap est leur aspect responsive. Jusqu'à présent, les colonnes définies gardaient toujours le même ratio, peu importe la dimension de l'écran de l'usager. Cependant, il est possible de définir un ratio à partir d'un&nbsp;<a target="_blank" rel="noopener noreferrer" href="/cours/bootstrap/breakpoints">breakpoints</a>&nbsp;spécifique, en insérant l'abréviation du breakpoint en question avant le nombre de colonnes&nbsp;désirées. Ainsi, la colonne tentera de prendre l'ensemble de la largeur disponible si la dimension de l'écran est inférieure au breakpoint défini et respectera la largeur définie si le breakpoint est&nbsp;atteint.</p>
<p>Par exemple, des colonnes prenant toute la largeur sur mobile pourraient n'avoir qu'une demi-largeur à partir d'une taille d'écran égale ou supérieur à&nbsp;<incode>md</incode>.</p>
<p class="codepen" data-height="300" data-theme-id="43847" data-default-tab="html,result" data-slug-hash="dyjKoxg" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/dyjKoxg">
  Bootstrap - col responsive</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<legend><small>Pour bien visualiser le changement de colonne, ouvrez l’exemple sur CodePen directement.</small></legend>

<br><br>
<doclink href="https://getbootstrap.com/docs/5.0/examples/grid/">Exemples de grille</doclink>

<br>

<exercice href="../exercices/bootstrap-puzzle-colore"></exercice>

<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>