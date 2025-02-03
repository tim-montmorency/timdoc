<?php

/**
 * @type     article
 * @title    Flexbox intermédiaire
 * @icon     images/icon.webp
 * @abstract figma dev mode et flexbox, flex-grow, flex-shrink, flex-basis, order
 */

?>



<grostitre>flex-grow</grostitre>

<p>Propriété pouvant être appliquée à un enfant dont le parent est en <incode>display: flex;</incode>.</p>

<p>Cette propriété accepte une valeur sans unité <em>(bref, un chiffre)</em> indiquant à l'élément qu'il peut grandir, quitte à dépasser son <incode>width</incode>, afin de remplir l'espace vacant dans son parent.</p>

<p>Par défaut, cette valeur est à <incode>0</incode>.</p>

<h3>Sans flex-grow vs flex-grow</h3>

<codepen id="rNbxJxG" tab="result"></codepen>

<span class="remark">
    <br>À gauche, tous les éléments ont un width de base sans flex-grow.<br>
    À droite, l’élément #2 a la propriété flex-grow: 1; en plus lui permettant de s’agrandir.<br>

</span><br>

<h3>Multiple flex-grow</h3>

<p>Lorsque plusieurs éléments ont la propriété <incode>flex-grow</incode>, ils se partagent l'espace restant en fonction de la valeur qui leur est attribuée de façon proportionnelle.</p>

<p>Par exemple, s'ils ont tous la même valeur, ils grandiront tous de façon égale, tandis que si un élément à une valeur trois fois plus grande, il prendra trois fois plus d'espace que les autres.</p>

<codepen id="yLrevJb" tab="result"></codepen>

<span class="remark">
    <br>À gauche, tous les éléments ont un flex-grow identique,<incode> flex-grow: 1;</incode><br>
    À droite, l’élément #3 a un <incode>flex-grow: 3;</incode> lui permettant de prendre 3x plus d’espace restant.<br>
</span><br>

<warning>Les unités négatives, ne sont pas permises.</warning><br>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/flex-grow">flex-grow</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_flex-grow.php">flex-grow</doclink>

<exercice href="exercices/flexbox-zombie-chapitre-5/"></exercice>

<exercice href="../exercices/flexbox-poesie-hiver/"></exercice>

<dots></dots>

<grostitre>flex-shrink</grostitre>

<p>Propriété pouvant être appliquée à un enfant dont le parent est en <incode>display: flex;</incode>.</p>

<p>Cette propriété accepte une valeur sans unité <em>(bref, un chiffre)</em> indiquant la proportion avec laquelle l'élément devrait rétrécir en cas de besoin <em>(si l'espace est insuffisant dans le parent). Bref, elle agit à l'inverse de flex-grow;</em></p>

<p>Par défaut, cette valeur est à <incode>1</incode>.</p>

<h3>Avec flex-shrink vs sans flex-shrink</h3>

<p>Si tous les éléments ont la propriété <incode>width: 50%;</incode>, l'espace est théoriquement insuffisant afin que tous les éléments affichent sur une-même ligne. Cependant, lorsque des éléments sont enfants d'un parent en <incode>display: flex;</incode> celui-ci les forces à se compresser afin de rentrer sur une même ligne.</p>

<codepen id="poBgaPP" tab="result"></codepen>

<span class="remark">
    <br>À gauche, tous les éléments ont un <incoode>flex-shrink: 1;</incoode>, donc rétrécissent de façon uniforme.</incode><br>
    À droite, l’élément #2 a la propriété <incode>flex-shrink: 0;</incode> donc refuse de rétrécire et garde son <incode>width: 50%;</incode>.<br>
</span><br>

<warning>Les unités négatives, ne sont pas permises.</warning><br>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/flex-shrink">flex-shrink</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_flex-shrink.php">flex-shrink</doclink>
<br><br>
<exercice href="exercices/flexbox-zombie-chapitre-6/"></exercice>

<dots></dots>

<grostitre>flex-basis</grostitre>

<p>Propriété pouvant être appliquée à un enfant dont le parent est en <incode>display: flex;</incode>.</p>

<p>Cette propriété accepte n'importe quelle <a href="../unites-de-mesure/">unité de mesure</a> CSS afin d'indiquer la dimension idéale d'un élément. La dimension attribuée constitue un point de départ avant qu'un <incode>flex-grow </incode>ou un <incode>flex-shrink</incode> n'intervienne. Dans le contexte d'un parent en <incode>flex-direction: row;</incode>, c'est en quelque sorte l'équivalent de la propriété <incode>width</incode>, tandis qu'en <incode>flex-direction: column;</incode> c'est l'équivalent du <incode>height</incode>.</p>

<warning>La propriété <incode>flex-basis </incode>respecte les limites configurées via les propriétés <incode>min-width</incode>, <incode>max-width</incode>, <incode>min-height</incode> et <incode>max-height</incode>.</warning>

<p>Par défaut, cette valeur est à<incode> auto</incode>.</p>

<codepen id="JjVGppw" tab="css,result"></codepen>

<warning>Les unités négatives, ne sont pas permises.</warning><br>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/flex-basis">flex-basis</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_flex-basis.php">flex-basis</doclink>
<br><br>
<exercice href="exercices/flexbox-zombie-chapitre-7/"></exercice>

<dots></dots>

<grostitre>order</grostitre>

<p>Définis la priorité d'affichage d'un enfant dans un parent ayant la propriété <incode>display: flex;</incode>.</p>

<p>Par défaut, cette valeur est à <incode>0</incode>.</p>

<p>Par défaut tous les éléments ont la même valeur d'ordre, ils s'affichent donc en fonction de leur ordre d'apparition dans le code, puisqu'aucun élément n'est jugé plus prioritaire qu'un autre. Cependant, si un élément à un ordre inférieur à 0 🔽, il se positionnera avant tous ceux ayant la valeur par défaut de 0. À l'inverse, si un élément à un ordre est supérieur à 0 🔼, il se positionnera après tous ceux ayant la valeur par défaut de 0.</p>

<codepen id="LYvGQBv" tab="result"></codepen>

<span class="remark">
    <br>À gauche, l’élément #2 à la propriété <incode>order: -1;</incode> lui donnant un ordre plus petit que les autres éléments.<br>
    À droite, l’élément #2 à la propriété <incode>order: 1;</incode> lui donnant un ordre plus grand que les autres éléments.<br>
</span><br>

<warning>La propriété <incode>order</incode> n’affecte aucunement les pseudo-classes telles que<incode> :nth-child()</incode>.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/order">order</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_order.php">order</doclink>
<br><br>
<exercice href="exercices/flexbox-zombie-chapitre-8/"></exercice>

<dots></dots>

<exercice href="../exercices/flexbox-pony/"></exercice>
<exercice href="../exercices/flexbox-actualite-google/"></exercice>

<dots></dots> 
<exercice href="exercices/flexbox-froggy-niveaux-14-a-17/"></exercice>
<exercice href="exercices/flexbox-defense-niveaux-10-a-12/"></exercice>