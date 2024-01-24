<?php
/**
 * @type     article
 * @title    Flux
 * @icon     images/icon.png
 * @abstract L’affichage de base des éléments dans une page
 * @ref      web/css
 */
?>

<p class="spacer">Le flux ou encore ce que les anglophones appellent le <em>“flow”</em> consiste en l’affichage de base des éléments dans une page avant que des styles ne leur soient appliqués. Par défaut, les éléments sont <em>“respectueux”</em> les uns des autres. C'est-à-dire qu’ils s’affichent les uns à côté ou un en dessous des autres sans jamais se superposer, gardant ainsi l’ensemble du contenu visible, peu importe la dimension dudit contenu ou encore de la page.</p>

<p>Bref, le flux d’une page web est conçu afin de générer une mise en page sur une colonne responsive.</p>

<dots></dots>


<grostitre>Ordre d'affichage</grostitre>

<p>Les éléments s’affichent selon leur ordre d’apparition dans le code HTML. Autrement dit, l’élément apparaissant en premier dans le code sera aussi celui apparaissant en premier dans la page et ainsi de suite pour tous les éléments suivants.</p>

<p>Par exemple, voici 3 éléments numérotés de 1 à 3. Tous les éléments affichés respectent l’ordre établi dans le code:</p>

<codepen id="ZEjxqKe" height="340"></codepen>

<dots></dots>


<grostitre>Ordre d’empilage</grostitre>

<p>Un élément HTML peut contenir d’autres éléments. Lorsqu’un élément est enfant d’un autre, celui-ci s’affiche par-dessus son parent. Ainsi, si plusieurs éléments sont emboîtés, celui à la fin de la chaîne se retrouvera sur le dessus, alors que celui au début se retrouvera en dessous.</p>

<p>Par exemple:</p>

<codepen id="QWBmZqy" height="340"></codepen>

<knowmore href="https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Flow_Layout">Article MDN à propos du flux</knowmore>

<dots></dots>