<?php
/**
 * @type     article
 * @title    Transition
 * @icon     images/icon.png
 * @abstract passer d'un état A à un état B
 */
?>

<p class="spacer">Les transitions permettent de passer d'un état A à un état B d'une façon élégante.</p>

<dots></dots>


<grostitre>transition-property</grostitre>

<p>Définis la ou les propriété(s) affectées par une transition.</p>

<p>Il est possible, d'indiquer que toutes les propriétés capables de transitionner doivent transitionner en utilisant la valeur <incode>all</incode>.</p>

<warning>Utiliser la valeur all avec parcimonie afin d’éviter d’impacter négativement les performances de votre transition.</warning>

<p>Il est aussi possible de spécifier un certain nombre de propriétés en les séparant par une virgule.</p>

<p>Par exemple:</p>

<highlight lang="css">transition-property: background-color, transform;</highlight>

<alert>
    <h5>ERREUR FRÉQUENTE</h5>
    Ce ne sont pas toutes les propriétés qui peuvent effectuer une transition. Par exemple, <incode>display</incode> ou <incode>background-image</incode> ne peut pas effectuer de transition. Voir la <a target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS/CSS_animated_properties">liste MDN des propriétés capable d’effectuer une transition</a>.
</alert>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/transition-property">transition-property</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_transition-property.asp">transition-property</doclink>

<tool href="tools/animatable/"></tool>

<dots></dots>


<grostitre>transition-duration</grostitre>

<p>Définis la durée de la transition. Ce nombre peut-être en seconde ou en milliseconde. <incode>1s</incode> = <incode>1000ms</incode>.</p>

<p>Par exemple, au survole nous avons trois fois la même transition, mais avec des durées différentes:</p>

<ol>
    <li>0.5 seconde</li>
    <li>1 seconde</li>
    <li>1.5 secondes</li>
</ol>

<codepen id="ExpMGBW" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/transition-duration">transition-duration</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_transition-duration.asp">transition-duration</doclink>

<exercice href="exercices/spider-man/"></exercice>

<dots></dots>


<grostitre>transition-timing-function</grostitre>

<p>Dicte le rythme de la transition. Par exemple, dans la transition précédente on remarque que chaque carré accélère progressivement avant de ralentir ensuite. Ce rythme est appelé ease et est celui par défaut des transitions.</p>

<p>L'exemple suivant contient six fois la même transition au survole, mais avec des rythmes différents.</p>

<ol>
    <li><incode>linear</incode> n'accélère ou ne ralentis jamais ↗️</li>
    <li><incode>ease</incode> accélère progressivement et ralentis en fin de parcours <em>(Comportement par défaut)</em></li>
    <li><incode>ease-in-out</incode> commence lentement et ralentis en fin de parcours.</li>
    <li><incode>ease-in</incode> commence lentement ⤴️</li>
    <li><incode>ease-out</incode> ralentis en fin de parcours ⤵️</li>
    <li><incode>cubic-bezier</incode> Rythme personnalisable via une courbe de Bézier.</li>
</ol>

<codepen id="XWBGOKR" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/transition-timing-function">transition-timing-function</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_transition-timing-function.asp">transition-timing-function</doclink>

<tool href="tools/cubic-bezier/"></tool>

<dots></dots>


<grostitre>transition-delay</grostitre>

<p>Définis le délais d'attente avant de démarrer une transition. Par défaut, cette propriété est à 0s. Si une valeur négative est attribuée, la transition débutera déjà commencée, comme-ci l'équivalent de la valeur s'était déjà écoulée.</p>

<p>Par exemple au survole:</p>

<ol>
    <li>Aucun délai</li>
    <li>Délais de 0.25s</li>
    <li>Délais de -0.25s <em>(commence au milieu de l'animation)</em></li>
</ol>

<codepen id="wvxONgw" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/transition-delay">transition-delay</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_transition-delay.asp">transition-delay</doclink>

<dots></dots>


<grostitre>Syntaxe courte</grostitre>

<p>Afin de simplifier l'écriture des transitions, il est possible de regrouper toutes les précédentes propriétés en une seule comme le font les propriétés <incode>margin</incode> et <incode>padding</incode> avec <incode>top</incode>, <incode>right</incode>, <incode>bottom</incode> et <incode>left</incode>.</p>

<p>Pour ce faire, il suffit d'appeler la propriété <incode>transition</incode> et de lui passer au minimum deux valeurs:</p>

<ol>
    <li>La ou les propriétés à transitionner</li>
    <li>La durée de la transition</li>
</ol>

<p>Par exemple:</p>

<highlight lang="css">transition-property: transform;
transition-duration: 1s;</highlight>

<p>Pourrait devenir:</p>

<highlight lang="css">transition: transform 1s;</highlight>

<p>Il est aussi possible de spécifier les autres propriétés si désiré en les ajoutant à la suite.</p>

<p>Par exemple, pour avoir un délai de 0.5s et une transition linéaire:</p>

<highlight lang="css">transition: transform 1s 0.5s linear;</highlight>

<exercice href="exercices/bojack-horseman/"></exercice>

<dots></dots>


<grostitre>Où définir sa transition</grostitre>

<p>Si les propriétés d'une transition sont définies sur un état en particulier, par exemple <incode>:hover</incode>, et non à sa base, cette propriété ne s'appliquera que lorsque cet état sera activé. Par exemple, à gauche la durée de la transition est appliquée sur l'élément de base. Le navigateur applique donc le <incode>transition-duration</incode> en tout temps sur l'élément, qu'il soit survolé ou non. Tandis qu'à droite, le <incode>transition-duration</incode> est défini sur le <incode>:hover</incode> uniquement, donc la transition ne s'effectue qu'au survole. Dès que l'élément n'est plus survolé, il retourne abruptement à sa position de départ.</p>

<codepen id="WNKmPLG" tab="result" height="340"></codepen>

<span class="remark">À gauche, transition sur l’élément de base.<br>À droite, transition sur l’élément survolé seulement.</span>

<exercice href="exercices/boutons/"></exercice>
<exercice href="exercices/fantome-mario/"></exercice>

<dots></dots>