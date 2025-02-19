<?php

/**
 * @type     article
 * @title    Flexbox avancé
 * @icon     images/icon.webp
 * @abstract flex-wrap, align-content, flex, flex-flow
 */

?>

<grostitre>Allons d'abord un peu dans Figma...</grostitre>
<p>Demo en classe</p>
<!-- https://www.figma.com/design/34nTCDdlsWcFr8GDjVDQXk/CSS-Flexbox---Demo-Figma?node-id=0-1&p=f&t=qdcS4kdkpY0HKK1N-0 
 -->


<dots></dots>
<grostitre>flex-wrap</grostitre>

<p>Par défaut, flex essaie de tout afficher sur une même ligne.</p>

<p>Cependant, il est possible de lui spécifier d'afficher sur plus d'une ligne au besoin grâce à la propriété <incode>flex-wrap</incode>.</p>

<p>Valeurs possibles:</p>

<ul>
    <li>
        <p>nowrap <em>(Par défault)</em><br>
            🟩 🟦 🟥
        </p>
    </li>

    <li>
        <p>wrap<br>
            🟩 🟦<br>
            🟥
        </p>
    </li>

    <li>
        <p>wrap-reverse<br>
            🟥<br>
            🟦 🟩
        </p>
    </li>
</ul>

<h3>flex-wrap: nowrap vs wrap</h3>

<p>Par exemple, si un parent est en <incode>display: flex;</incode> et possède trois enfants ayant une largeur de 50%, il est impossible à la base qu'ils puissent tous s'afficher sur une même ligne.</p>

<p>Cependant, puisqu'un élément en <incode>display: flex;</incode> est en <incode>flex-wrap: nowrap;</incode> par défaut, ses enfants sont obligés de s'afficher sur une même ligne. La largeur des enfants est donc réajustée automatiquement à 33,33% afin de les garder juxtaposés.</p>

<p>Néanmoins, grâce à <incode>flex-wrap: wrap;</incode>, il est possible de spécifier à un élément en <incode>display: flex;</incode> d'afficher ses enfants sur plusieurs lignes si l'espace alloué n'est pas suffisant afin de les garder juxtaposés sans avoir à les redimensionner.</p>

<codepen id="zYXrjzo" tab="result"></codepen>

<span class="remark">
    <br>À gauche, <incode>flex-wrap: nowrap;</incode><br>
    À droite, <incode>flex-wrap: wrap;</incode><br>
</span><br>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/flex-wrap">flex-wrap</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_flex-wrap.php">flex-wrap</doclink>

<exercice href="./exercices/flexbox-zombie-chapitre-9/"></exercice>

<dots></dots>

<grostitre>align-content</grostitre>

<p>Dans la même lignée que <a href="../flexbox/">align-items</a>, mais au lieu d'aligner les éléments directement, cette propriété aligne les différentes lignes générées par <incode>flex-wrap</incode>. Autrement dit, pour avoir un effet, cette propriété dépend de la présence de <a href="flex-wrap">flex-wrap</a>.</p>

<p>Possibilités:</p>

<ul>
    <li>
        <incode>stretch</incode><em>(Par défaut)</em>
    </li>
    <li>
        <incode>flex-start</incode>
    </li>
    <li>
        <incode>flex-end</incode>
    </li>
    <li>
        <incode>center</incode>
    </li>
    <li>
        <incode>space-between</incode>
    </li>
    <li>
        <incode>space-around</incode>
    </li>
    <li>
        <incode>space-evenly</incode>
    </li>
    <li>etc.</li>
</ul>

<h3>Sans align-content vs align-content: center</h3>

<codepen id="yLrejvY" tab="result"></codepen>

<span class="remark">
    <br>À gauche, aucun align-content.<br>
    À droite, <incode>align-content: center;</incode>.<br>
</span><br>

<h3>align-items: center vs align-content: center</h3>

<p>La propriété <incode>align-items: center;</incode> centre les éléments en plein centre de leur ligne respective, tandis que <incode>align-content: center;</incode> centre les lignes en plein centre de leur parent.</p>

<codepen id="RwOryMY" tab="result"></codepen>

<span class="remark">
    <br>À gauche, <incode>align-items: center;</incode>,<br>
    À droite, <incode>align-content: center;</incode>.<br>
</span><br>


<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/align-content">align-content</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_align-content.php">align-content</doclink>

<exercice href="./exercices/flexbox-zombie-chapitre-10/"></exercice>

<dots></dots>

<grostitre>flex</grostitre>

<p>Cette propriété permet de définir le <incode>flex-grow</incode>, <incode>flex-shrink</incode> et <incode>flex-basis</incode> d'un élément en une seule propriété. Il s'agit en fait d'une propriété raccourcis.</p>

<p>Par exemple, si un élément à les propriétés:</p>

<highlight lang="css">flex-grow: 1;
    flex-shrink: 0;
    flex-basis: 25%;</highlight>

<p>Il est possible de faire l'équivalent simplement via:</p>

<highlight lang="css">flex: 1 0 25%;</highlight>

<codepen id="qBwbKog" tab="result"></codepen>

<span class="remark">
    <br>À gauche, <incode>flex-grow: 1;</incode>
    <incode>flex-shrink: 0;</incode>
    <incode>flex-basis: 25%;,</incode>,<br>
    À droite, <incode>flex: 1 0 25%;</incode><br>
</span><br>

<warning>Si la dernière valeur <incode>(flex-basis)</incode> n’est pas spécifiée, par exemple: <incode>flex: 1 0;</incode>, le navigateur assumera que l’élément doit avoir <incode>flex-basis: 0;</incode> et non <incode>flex-basis: auto;</incode> qui est la valeur par défaut en temps normal.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/flex">flex</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_flex.php">flex</doclink>

<dots></dots>

<grostitre>flex-flow</grostitre>

<p>Cette propriété permet de définir le <incode>flex-direction</incode>et <incode>flex-wrap</incode>en une seule propriété. Il s'agit d'une propriété raccourcis.</p>

<p>Par exemple:</p>

<highlight lang="css">flex-direction: row-reverse;
    flex-wrap: wrap;</highlight>

<p>est équivalent à</p>

<highlight lang="css">flex-flow: row-reverse wrap;</highlight>

<codepen id="jORWKpw" tab="result"></codepen>

<span class="remark">
    <br>À gauche, <incode>flex-direction:</incode>
    <incode>row-reverse;</incode>
    <incode>flex-wrap: wrap;</incode>,<br>
    À droite, <incode>flex-flow:</incode>
    <incode>row-reverse wrap;</incode>.<br>
</span><br>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/flex-flow">flex-flow</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_flex-flow.php">flex-flow</doclink>

<exercice href="./exercices/flexbox-zombie-chapitre-11/"></exercice><br>



<dots></dots>
<tool href="./tools/css-tricks-guide-flexbox/"></tool>

<doclink href='https://www.joshwcomeau.com/css/interactive-guide-to-flexbox/'>Autre guide intéressant de flexbox</doclink>


<dots></dots>
<exercice href="./exercices/flexbox-froggy-niveau-18-a-24/"></exercice><br>
<exercice href="./exercices/flexbox-zombie-chapitre-12/"></exercice><br>