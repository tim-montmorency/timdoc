<?php
/**
 * @type     article
 * @title    Overflow
 * @icon     images/icon.png
 * @abstract visible, hidden, auto, scroll
 */
?>

<p class="spacer">La propriété <incode>overflow</incode> pourrait se traduire en québécois par <em>"ce qui dépasse"</em>. Cette propriété permet de spécifier comment un élément devrait se comporter lorsqu'un enfant dépasse son cadre.</p>

<p>Examinons les valeurs les plus courantes:</p>

<ul>
    <li><incode>visible</incode> <em>(valeur par défaut)</em> même si un enfant dépasse, celui-ci reste entièrement visible.</li>
    <li><incode>hidden</incode> si une partie d'un enfant dépasse, celle-ci est masquée.</li>
    <li><incode>auto</incode> si une partie d'un enfant dépasse, le parent la masquera, mais affiche des barres de défilement permettant de le voir en entier.</li>
    <li><incode>scroll</incode> est identique à <incode>auto</incode>, mais affiche toujours les barres de défilement, peu importe si un enfant dépasse ou non.</li>
</ul>

<p>Comparons l'impact de cette propriété lorsqu'un enfant, le carré bleu, dépasse verticalement de son parent, le carré vert.</p>

<codepen id="wvxxjWg" tab="result" height="340"></codepen>

<warning>La propriété <incode>overflow</incode> ne fonctionne que sur les parents aillant une position autre que static.</warning>

<alert><h5>ERREUR FRÉQUENTE</h5>La propriété <incode>overflow</incode> doit être appliquée sur l’élément contenant l’élément dépassant et NON sur l’élément dépassant directement.</alert>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/overflow">overflow</doclink>
<doclink href="https://www.w3schools.com/css/css_overflow.asp">overflow</doclink>

<dots></dots>


<grostitre>overflow-x & overflow-y</grostitre>

<p>Ces propriétés fonctionnent de façon identique à <incode>overflow</incode>. Cependant, elles n'affectent qu'un seul axe, x ou y, comme leur nom l'indique.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/overflow-x">overflow-x</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_overflow-x.asp">overflow-x</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/overflow-y">overflow-y</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_overflow-y.asp">overflow-y</doclink>

<dots></dots>

<exercice href="exercices/eclipses/"></exercice>

<dots></dots>