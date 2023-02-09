<?php
/**
 * @type     article
 * @title    Scroll-snap
 * @icon     images/icon.png
 * @abstract scroll-snap-type, scroll-snap-align, scroll-padding
 */
?>

<grostitre>scroll-snap-type</grostitre>

<p>La propriété <incode>scroll-snap-type</incode> permet de définir les règles de défilement affectant les éléments présents dans un conteneur. Autrement dit, une fois le défilement terminé, est-ce que la position des éléments devrait rester telle quelle ou est-ce qu’un effet de magnétisme devrait réajuster leurs positions?</p>

<p>Cette propriété est notamment utile afin de créer des effets de carrousel. L’usager fait défiler librement des photos, mais lorsqu’il s’arrête, un réajustement automatiquement permet d’afficher en entier la photo dominante, masquant du même coup le résidu de la photo précédente ou suivante.</p>

<h3>Direction</h3>

<p>Afin de fonctionner, il faut spécifier à cette propriété la direction désirée de l’effet de magnétisme:</p>

<ul>
    <li><incode>none</incode> aucun magnétisme</li>
    <li><incode>x</incode> magnétisme horizontal seulement ↔️</li>
    <li><incode>y</incode> magnétisme vertical seulement ↕️</li>
    <li><incode>both</incode> magnétisme horizontal et vertical </li>
</ul>

<h3>Comportement</h3>

<p>Cette valeur peut-être ajoutée à celle de direction afin de spécifier la force du magnétisme 🧲:</p>

<ul>
    <li><incode>proximity</incode> l’effet de magnétisme ne sera déclenché au relâchement que si un élément est à proximité des limites de son conteneur.</li>
    <li><incode>mandatory</incode> l’effet de magnétisme sera déclenché au relâchement à toutes les occasions.</li>
</ul>

<codepen id="oNMOBqv" tab="result" height="540"></codepen>

<warning>Attention, cette propriété seule, sans la propriété <incode>scroll-snap-align</incode> sur les éléments enfant du conteneur, n’aura <strong>aucun effet</strong>.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/scroll-snap-type">scroll-snap-type</doclink>

<dots></dots>


<grostitre>scroll-snap-align</grostitre>

<p>Cette propriété permet de spécifier à un élément son alignement idéal lorsque le magnétisme se produit. </p>

<p>Si un élément a la même taille que son conteneur, cette propriété n’aura pas d’effet visible. Cependant, si l’élément est plus petit ou plus grand que son conteneur, cette propriété permettra de spécifier si l’effet de magnétisme doit se faire avec le début, la fin ou le centre de l’élément.</p>

<h3>Valeurs possibles</h3>

<ul>
    <li><incode>none</incode> l’élément ne doit pas avoir d’effet de magnétisme</li>
    <li><incode>start</incode> l’élément doit-être attiré vers le début du conteneur</li>
    <li><incode>end</incode> l’élément doit-être attiré vers la fin du conteneur</li>
    <li><incode>center</incode> l’élément doit-être attiré vers le centre de son conteneur</li>
</ul>

<codepen id="yLqrgxE" tab="result" height="540"></codepen>

<span class="remark">Les éléments sont plus grands que leur conteneur. Ainsi, il est possible de voir où le point de magnétisme a lieu en se fiant au nombre dans l’élément.</span>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/scroll-snap-align">scroll-snap-align</doclink>

<dots></dots>


<grostitre>scroll-padding</grostitre>

<p>Par défaut l'effet de magnétisme <em>"snap"</em> les éléments aux limites du conteneur. Cependant, il est possible de décaler le point d'accroche grâce à la propriété <incode>scroll-padding</incode>.</p>

<p>Cette propriété peut s'avérer particulièrement utile si un élément masque une partie du contenu défilant.</p>

<p>Par exemple un entête:</p>

<codepen id="abjxpRr" tab="result" height="540"></codepen>

<p>Il est possible de définir une marge intérieure de tous les côtés grâce à <incode>scroll-padding</incode> ou encore d'en définir une d'un côté en particulier, via:</p>

<ul>
    <li><incode>scroll-padding-top</incode></li>
    <li><incode>scroll-padding-right</incode></li>
    <li><incode>scroll-padding-bottom</incode></li>
    <li><incode>scroll-padding-left</incode></li>
</ul>

<p>Sur le même principe que la propriété <a href="../padding/">padding</a>.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/scroll-padding">scroll-padding</doclink>

<warning>Au moment d’écrire ces lignes, <strong>Firefox à un bogue</strong> avec <incode>scroll-snap</incode> lorsque la <strong>molette de la souris</strong> est utilisée.</warning>

<dots></dots>


<exercice href="exercices/whatisadam/"></exercice>

<dots></dots>