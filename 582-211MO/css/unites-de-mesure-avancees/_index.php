<?php
/**
 * @type     article
 * @title    Unités de mesure avancées
 * @icon     images/icon.webp
 * @abstract vw, vh, vmin, vmax, calc, min, max, clamp
 * @ref      web/css
 */
?>

<grostitre>vw & vh</grostitre>

<p>Les unitées <incode>vw</incode> et <incode>vh</incode> sont des unités relatives à la fenêtre <em>(viewport)</em>. Leur nom est en fait un acronyme:</p>

<ul>
    <li><incode>vw</incode>: viewport width <em>(largeur de fenêtre)</em></li>
    <li><incode>vh</incode>: viewport height <em>(hauteur de fenêtre)</em></li>
</ul>

<p>Elles fonctionnent sur le même principe que les pourcentages <em>(%)</em>, mais plutôt que de se baser sur la dimension de leur parent, elles se basent plutôt sur la dimension de la fenêtre.</p>

<p>Par exemple, pour qu'un élément prenne la moitié de la largeur de la fenêtre, il est possible d'utiliser:</p>

<highlight lang="css">.element { width: 50vw; } /* Demi-largeur de fenêtre */</highlight>

<p>À priori, le résultat peut sembler identique à:</p>

<highlight lang="css">.element { width: 50%; } /* Demi-largeur du parent */</highlight>

<p>Car si les deux éléments sont enfants de body <em>(body prenant par défaut toute la largeur de la fenêtre)</em> les deux auront la même dimension.</p>

<p>Afin de bien illustrer la différence. Imaginons que nous avons une fenêtre d'une largeur de 1000px. À l'intérieur de celle-ci, un élément de 200px de large contenant deux enfants.</p>

<ul>
    <li>Un premier avec une largeur de <incode>50vw</incode></li>
    <li>Un deuxième avec une largeur de <incode>50%</incode></li>
</ul>

<p>Le premier se basant sur la dimension de la fenêtre mesurera donc 500px. Tandis que le deuxième se basant sur son parent mesurera 100px.</p>

<img src="images/vw-vh.png">

<dots></dots>


<grostitre>vmin & vmax</grostitre>

<p>Tout comme <a href="#vw-vh">vw et vh</a>, <incode>vmin</incode> et <incode>vmax</incode> sont des unités relatives à la fenêtre <em>(viewport)</em>. Leur nom correspond à:</p>

<ul>
    <li><incode>vmin</incode> viewport minimum <em>(plus petit côté de la fenêtre)</em></li>
    <li><incode>vmax</incode> viewport maximum <em>(plus grand côté de la fenêtre)</em></li>
</ul>

<p>Plutôt que de se baser directement sur un axe spécifique, la largeur ou la hauteur <em>(width/height)</em>, ces unités alternent entre les deux selon le contexte.</p>

<p><incode>vmin</incode> calcule donc l'équivalent du <incode>vw</incode> et <incode>vh</incode> et retourne le plus petit résultat. Tandis que <incode>vmax</incode> fait l'opposé et retourne le plus grand résultat.</p>

<p>Par exemple, pour créer un élément carré couvrant un maximum de la fenêtre, mais ne dépassant pas de celle-ci, il serait possible d'utiliser:</p>

<highlight lang="css">.element {
  width: 100vmin;
  height: 100vmin;
}</highlight>

<img src="images/vmin-vmax.png">

<dots></dots>


<grostitre>calc()</grostitre>

<p>Plutôt que de spécifier une mesure directement, il est possible d'utiliser la fonction CSS <incode>calc()</incode> afin de combiner différentes mesures et d'en retourner le résultat. Cette approche est particulièrement utile pour combiner des mesures relatives <em>(%, vw, etc.)</em> avec des mesures absolues <em>(px)</em>.</p>

<p>Par exemple, si un élément doit couvrir toute la largeur de son parent, moins 50px, il est impossible d'y arriver avec une unité de base. Cependant, il est possible d'y arriver en combinant l'unité relative <incode>100%</incode> et l'unité absolue <incode>50px</incode>.</p>

<codepen id="abjazxe" tab="css,result" height="340"></codepen>

<p>Les opérateurs mathématiques de base <em>(+, -, *, /)</em> sont permis entre les parenthèses de <incode>calc()</incode></p>

<warning>
    Attention de laisser un espace vide avant et après les opérateurs mathématiques afin que le calcul fonctionne.<br>
    ❌ <incode>calc(100%-50px);</incode><br>
    ✅ <incode>calc(100% - 50px);</incode>
</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/calc()">calc()</doclink>
<doclink href="https://www.w3schools.com/cssref/func_calc.asp">calc()</doclink>

<dots></dots>


<grostitre>min() & max()</grostitre>

<p>Les fonctions CSS <incode>min()</incode> et <incode>max()</incode> permettent de retourner le plus petit ou le plus grand résultat parmi différentes valeurs.</p>

<p>Par exemple, pour s'assurer qu'un texte ne soit jamais plus petit que 12px, afin qu'il reste toujours lisible, il est possible d'utiliser:</p>

<highlight lang="css">.element { font-size: max(12px, 0.5em); }</highlight>

<p>La fonction valide donc laquelle de ces 2 untiés retourne le plus grand résultat et ne garde que cette valeur.</p>

<p>Si l'élément est dans un parent ayant un <incode>font-size</incode> de:</p>

<ul>
    <li><incode>50px:</incode> 12px < 0.5em <em>(25px)</em> ➡️ 25px</li>
    <li><incode>20px:</incode> 12px > 0.5em <em>(10px)</em> ➡️ 12px</li>
</ul>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/min()">min()</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/max()">max()</doclink>

<dots></dots>


<grostitre>clamp()</grostitre>

<p>La fonction CSS <incode>clamp()</incode> ressemble aux fonctions <a href="#min-max">min() et max()</a>, mais contrairement à celles-ci, elle offre à la fois une valeur minimale et maximale.</p>

<p>Par exemple, pour qu'un texte ne soit jamais plus petit que 12px, ni plus grand que 20px, il est possible d'utiliser:</p>

<highlight lang="css">.element { font-size: clamp(12px, 0.5em, 20px); }</highlight>

<p>La fonction retourne la valeur centrale <em>(0.5em)</em> jusqu'à concurrence de sa valeur plancher <em>(12px)</em> ou sa valeur plafond <em>(20px)</em>.</p>

<p>Si l'élément est dans un parent ayant un <incode>font-size</incode> de:</p>

<ul>
    <li><incode>50px</incode> 12px < 0.5em <em>(25px)</em> = 25px > 20px ➡️ 20px</li>
    <li><incode>20px</incode> 12px > 0.5em <em>(10px)</em> = 12px < 20px ➡️ 12px</li>
</ul>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/clamp()">clamp()</doclink>

<dots></dots>

<knowmore href="https://web.dev/min-max-clamp/">min(), max() et clamp() plus en détail sur web.dev.</knowmore>

<exercice href="exercices/marylene-gendron/"></exercice>

<dots></dots>

