<?php
/**
 * @type     article
 * @title    Pseudo-classes avancées
 * @icon     images/icon.png
 * @abstract :first-of-type, :only-of-type, :empty, :not, :has
 */
?>

<grostitre>:first-of-type & :last-of-type</grostitre>

<p>Comme leurs noms l'indiquent, <incode>:first-of-type</incode> et <incode>:last-of-type</incode> permettent de sélectionner le premier et dernier élément dans un groupe correspondant au sélecteur passé avant le <incode>:</incode>.</p>

<p>Contrairement à <a href="../pseudo-classes-intermediaires/#first-child-last-child">first-child et last-child</a> qui ne sélectionnent uniquement un élément que s'il correspond au sélecteur ET qu'il est au premier ou dernier index de son groupe, <incode>:first-of-type</incode> et <incode>:last-of-type</incode> sélectionnent le premier élément correspondant au sélecteur à partir du début et à partir de la fin, même s'il n'est pas exactement au premier ou dernier index.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">span:first-of-type { ... }</highlight>

<p>Recherche dans un groupe le premier élément de type <incode>span</incode>. Si un élément est trouvé, il est sélectionné.</p>

<p>Dans les exemples ci-dessous, tous les carrés ont la classe <incode>.element</incode>. Cependant, seuls les carrés 3, 4 et 5 sont des <incode>&lt;span&gt;</incode>, les autres étant des <incode>&lt;div&gt;</incode>. Donc à gauche <incode>span:first-of-type</incode> sélectionne le carré #3 et le rend bleu 🟦, tandis qu'à droite <incode>span:last-of-type</incode> sélectionne le carré #5.</p>

<codepen id="JjBByZj" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/:first-of-type">:first-of-type</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_first-of-type.asp">:first-of-type</doclink>

<br>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/:last-of-type">:last-of-type</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_last-of-type.asp">:last-of-type</doclink>

<dots></dots>


<grostitre>:only-of-type</grostitre>

<p>Sélectionne un élément lorsqu'il est le seul de son type dans un groupe. Bref, lorsque l'élément est à la fois le <incode>:first-of-type</incode> et le <incode>:last-of-type</incode> de son groupe.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">span.element:only-of-type { ... }</highlight>

<p>Valide à l'intérieur de chaque groupe d'éléments si un seul enfant à la classe <incode>.element</incode> et est de type <incode>span</incode>. Si tel est le cas, l'élément est sélectionné.</p>

<p>Dans l'exemple ci-dessous, tous les carrés ont la classe <incode>.element</incode>. Cependant, à gauche, plusieurs enfants <em>(3, 4 et 5)</em> sont des <incode>&lt;span&gt;</incode>, donc aucun d'entre eux n'est sélectionné. Tandis qu'à droite, un seul enfant <em>(4)</em> est un <incode>&lt;span&gt;</incode>, donc <incode>:only-of-type</incode> le sélectionne et le rend bleu.</p>

<codepen id="vYaaJvy" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/:only-of-type">:only-of-type</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_only-of-type.asp">:only-of-type</doclink>

<dots></dots>


<grostitre>:nth-of-type() & :nth-last-of-type()</grostitre>

<p>Ces pseudo-classe fonctionnent sur le même principe que <a href="../pseudo-classes-intermediaires/#nth-child">nth-child et nth-last-child</a> à la différence que les sélections sont basées sur l'index des éléments correspondant au sélecteur et non à l'index réel de l'élément dans son groupe.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">span.element:nth-of-type(2) { ... }</highlight>

<p>Sélectionne le carré #4 puisqu''il est le 2e élément de type <incode>span</incode> à avoir la classe <incode>.element</incode>.</p>

<codepen id="BaPPdbJ" tab="result" height="340"></codepen>

<p>Les mots-clés <incode>even</incode> et <incode>odd</incode>, les occurrences <incode>n</incode> et les décalages <incode>-/+</incode> sont tous aussi disponibles avec ces pseudo-classes.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/:nth-of-type">:nth-of-type()</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_nth-of-type.asp">:nth-of-type()</doclink>

<br>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/:nth-last-of-type">:nth-last-of-type()</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_nth-last-of-type.asp">:nth-last-of-type()</doclink>

<dots></dots>


<grostitre>:empty</grostitre>

<p>Comme son nom l'indique, <incode>:empty</incode> permet de sélectionner les éléments vides s'ils correspondent au sélecteur passé avant le <incode>:</incode>.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">.element:empty { ... }</highlight>

<p>Valide si un ou plusieurs éléments avec la classe <incode>.element</incode> sont vides.</p>

<warning>Dès qu’un enfant est présent à l’intérieur de la balise, l’élément n’est plus vide. <strong>Un simple espace compte comme un enfant</strong>, même si rien n’est visible à l’écran.</warning>

<p>Dans l'exemple ci-dessous, les carrés #2 et #5 n'ont plus de contenu. Cependant, le carré #2 contient toujours un espace. Il n'est donc pas sélectionné puisqu'il n'est pas à proprement parler vide. Le carré #5 ne contient absolument rien, ce dernier est donc sélectionné.</p>

<codepen id="PoBBKMO" tab="css,result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/:empty">:empty</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_empty.asp">:empty</doclink>

<dots></dots>


<grostitre>:not</grostitre>

<p>La pseudo-classe <incode>:not()</incode> permet de sélectionner tous les éléments ne correspondant pas au sélecteur passé entre parenthèses.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">:not(span)</highlight>

<p>Sélectionne tous les éléments qui ne sont pas des <incode>&lt;span&gt;</incode>.</p>

<p>Il est aussi possible de raffiner un sélecteur de base en lui ajoutant la pseudo-classe <incode>:not()</incode> pour ainsi ne garder que les éléments qui correspondent au premier sélecteur et non au deuxième.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">.element:not(span) { ... }</highlight>

<p>Sélectionne tous les éléments <incode>.element</incode> à l'exception des carrés 3, 4 et 5, puisqu'ils sont de type <incode>span</incode>.</p>

<codepen id="JjBBroG" tab="css,result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/:not">:not</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_not.asp">:not</doclink>

<dots></dots>


<grostitre>:has</grostitre>

<p>La pseudo-classe <span class="inline-code">:has()</span> permet de cibler un élément si au moins un des sélecteurs passés en paramètre correspond à l'élément.</p>

<p>Étant donné qu'il n'existe pas de sélecteur de voisin précédent, <span class="inline-code">:has()</span> peut devenir assez pratique dans certaines situations.</p>

<p>Dans l'exemple suivant, un parent sera sélectionné si son ou un de ses enfants est survolé.</p>

<highlight lang="css">.parent:has(.child:hover)</highlight>

<p>Ainsi, on peut changer les propriétés d'éléments voisins en passant par le parent et la pseudo-classe <span class="inline-code">:has()</span>.</p>

<codepen id="poOXXeL" tab="css,result" height="340"></codepen>

<warning>Au moment d'écrire ces lignes, le navigateur <a target="_blank" href="https://caniuse.com/?search=%3Ahas()">Firefox ne supporte toujours pas</a> la pseudo-classe <span class="inline-code">:has</span> par défaut.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/:has">:has</doclink>
<doclink href="https://css-tricks.com/the-css-has-selector/">:has</doclink>

<dots></dots>


<exercice href="exercices/css-diner/"></exercice>

<dots></dots>


<grostitre>Résumé vidéo</grostitre>

<clip src="videos/css-pseudo-classes-in-100-seconds.mp4"></clip>

<dots></dots>




