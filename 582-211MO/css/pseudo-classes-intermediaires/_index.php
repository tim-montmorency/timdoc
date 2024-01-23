<?php
/**
 * @type     article
 * @title    Pseudo-classes intermédiaires
 * @icon     images/icon.webp
 * @abstract first-child, last-child, only-child, nth
 * @ref      web/css
 */
?>

<grostitre>:first-child & :last-child</grostitre>

<p>Comme leurs noms l'indiquent, <incode>:first-child</incode> et <incode>:last-child</incode> permettent de sélectionner le premier et dernier élément dans un groupe s'ils correspondent au sélecteur passé avant le <incode>:</incode>.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">.element:first-child { ... }</highlight>

<p>Valide à l'intérieur de chaque groupe d'éléments si le premier enfant à la classe <incode>.element</incode>. Si tel est le cas, l'élément est sélectionné.</p>

<p>Ci-dessous à gauche <incode>:first-child</incode> est utilisé afin de rendre bleu 🟦 le premier enfant du groupe, tandis qu'à droite <incode>:last-child</incode> fait la même chose, mais pour le dernier.</p>

<codepen id="rNrKgGe" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/:first-child">:first-child</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_firstchild.asp">:first-child</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/:last-child">:last-child</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_last-child.asp">:last-child</doclink>

<dots></dots>


<grostitre>:only-child</grostitre>

<p>Sélectionne un élément lorsqu'il est enfant unique de son élément parent. Bref, lorsque l'élément est à la fois le <incode>:first-child</incode> et le <incode>:last-child</incode> de son groupe.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">.element:only-child { ... }</highlight>

<p>Valide à l'intérieur de chaque groupe d'éléments si un seul enfant est présent et si celui-ci possède la classe <incode>.element</incode>. Si tel est le cas, l'élément est sélectionné.</p>

<p>Dans l'exemple ci-dessous, tous les carrés ont la classe <incode>.element</incode>. Cependant, à gauche, plusieurs enfants sont présents, donc aucun d'entre eux n'est sélectionné. Tandis qu'à droite, un seul enfant est présent, donc <incode>:only-child</incode> le sélectionne et le rend bleu 🟦.</p>

<codepen id="NWBzVXm" tab="result" height="340"></codepen>

<p>Ce type de pseudo-classe peut être pratique par exemple pour retirer la puce • d'un élément de liste s'il est le seul élément présent dans sa liste.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/:only-child">:only-child</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_only-child.asp">:only-child</doclink>

<dots></dots>


<grostitre>:nth-child()</grostitre>

<p>La pseudo-classe <incode>nth-child</incode> permet de sélectionner un ou plusieurs éléments selon leur index dans un groupe. Afin de spécifier quels éléments devraient être sélectionnés, il faut spécifier une formule entre parenthèses.</p>

<clipasset src="videos/ralph-wiggum-selectionne.mp4"></clipasset>

<h3>:nth-child & index</h3>

<p>L'option la plus simple est de sélectionner un élément à partir de son index tout simplement. Pour ce faire, il suffit de spécifier directement l'index désiré entre parenthèses.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">.element:nth-child(2) { ... }</highlight>

<p>Sélectionne le deuxième élément si celui-ci à la classe <incode>.element</incode>.</p>

<codepen id="MWBXdGa" tab="css,result" height="340"></codepen>

<warning>En JavaScript les index commencent à 0, mais en CSS à 1.</warning>

<h3>:nth-child() pair & impair</h3>

<p>Nth-child permet grâce aux mots-clés <incode>even</incode> et <incode>odd</incode> de sélectionner tous les éléments pairs ou impairs qui correspondent au sélecteur avant le <incode>:</incode>.</p>

<p>Par exemple, à gauche tous les éléments pairs sont sélectionnés grâce à <incode>nth-child(even)</incode>. Tandis qu'à droite tous ceux impairs sont sélectionnés via <incode>nth-child(odd)</incode>.</p>

<codepen id="ExpRzRW" tab="css,result" height="340"></codepen>

<h3>:nth-child() & occurrences</h3>

<p>En ajoutant à un index le suffixe <incode>n</incode>, il est possible d'indiquer que toutes les N occurrences devraient être sélectionnées.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">.element:nth-child(3n) { ... }</highlight>

<p>Spécifie un interval de 3. Si les éléments à ces index ont la classe <incode>.element</incode>, ceux-ci sont alors sélectionnés.</p>

<p>Dans l'exemple suivant, puisque tous les éléments ont la classe <incode>.element</incode>, ceux aux index 3, 6 et 9 sont donc sélectionnés.</p>

<codepen id="vYarwar" tab="css,result" height="340"></codepen>

<warning>Sans le <incode>n</incode>, seulement le 3e élément serait sélectionné.</warning>

<h3>:nth-child() & décalage</h3>

<p>Sélectionner par <em>N occurrences</em> est pratique et puissant, mais il est parfois nécessaire de sélectionner à partir d'un index de départ différent, d'où les options de décalage.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">.element:nth-child(3n-2) { ... }</highlight>

<p>Spécifie un interval de 3, comme dans l'exemple précédent, mais indique de décaler chaque sélection de 2 en amount ⬅.</p>

<codepen id="OJwEYBq" tab="css,result" height="340"></codepen>

<p>L'inverse aurait aussi été possible en utilisant <incode>:nth-child(3n+2)</incode> pour sélectionner en aval ➡ plutôt qu'en amont.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/:nth-child">:nth-child()</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_nth-child.asp">:nth-child()</doclink>

<br><br>

<tool href="tools/nth-child-tester/"></tool>
<exercice href="exercices/grille/"></exercice>

<dots></dots>


<grostitre>:nth-last-child()</grostitre>

<p>Cette pseudo-classe fonctionne sur le même principe que <a href="#nth-child">nth-child</a> à la différence que <strong>les sélections se font à partir de la fin</strong> et non du début.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">.element:nth-last-child(2) { ... }</highlight>

<p>Sélectionne l'avant-dernier élément si celui-ci à la classe <incode>.element</incode>.</p>

<codepen id="MWBXdNj" tab="css,result" height="340"></codepen>

<p>Les mots-clés <incode>even</incode> et <incode>odd</incode>, les occurences <incode>n</incode> et les décalages <incode>-/+</incode> sont tous aussi disponibles avec cette pseudo-classe.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/:nth-last-child">:nth-last-child()</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_nth-last-child.asp">:nth-last-child()</doclink>

<dots></dots>

<exercice href="exercices/css-diner/"></exercice>

<dots></dots>


<grostitre>Résumé vidéo</grostitre>

<clip src="videos/css-pseudo-classes-in-100-seconds.mp4"></clip>

<dots></dots>








