<?php
/**
 * @type     article
 * @title    Unités de couleur
 * @icon     images/icon.webp
 * @abstract hex, rgb, hsl, etc.
 */
?>

<p class="spacer">L'un des éléments de base d'une mise en page CSS réussie est la sélection de couleurs. Pour notre convenance, le langage CSS met à notre disposition plusieurs façons d'exprimer les couleurs désirées.</p>

<p>En voici quelques unes.</p>

<dots></dots>


<grostitre>Mot-clé</grostitre>

<p>Il est possible de spécifier certaines couleurs en CSS en utilisant leur nom <em>(en anglais)</em> directement.</p>

<p>Par exemple, <incode>yellow</incode> pour du jaune 🟨, <incode>orange</incode> pour du orange 🟧 et ainsi de suite. Malheureusement, il est difficile de retenir la majorité de ces noms et de se limiter à 147 couleurs. L'usage des mots-clés est donc peu fréquent à l'exception de classiques tels que: <incode>black</incode>, <incode>white</incode>, etc.</p>

<tool href="tools/147-colors/"></tool>

<info>En 2014, <a target="_blank" href="https://codepen.io/trezy/post/honoring-a-great-man">une 148e couleur CSS fut été ajoutée</a> afin de rendre un hommage à Eric Meyer.</info>

<dots></dots>


<grostitre>Hexadécimal</grostitre>

<p>Un code hexadécimal est constitué d'un dièse <incode>#</incode> suivi de 6 caractères compris entre 0 et F. Les chiffres couvrent les valeurs de 0 à 9 et les lettres de 10 à 15 <em>(a=10, b=11 … f=15)</em>.</p>

<ul>
    <li>Les 2 premiers caractères représentent le rouge</li>
    <li>Les 2 du milieu le vert</li>
    <li>Les 2 derniers le bleu</li>
</ul>

<p>Plus une valeur est élevée, plus la couleur est présente. À l'opposée, plus une valeur est basse, plus la couleur est absente.</p>

<p>Par exemple, le code suivant <incode>#ff0000</incode> indique un maximum de rouge 💯🟥 et une absence totale de vert 🚫🟩 et de bleu 🚫🟦, donnant ainsi un rouge pur.</p>

<h3>Hex 3 caractères</h3>

<p>Lorsque chaque couleur d'un code hexadécimal est constituée de deux caractères identiques, il est possible d'inscrire chaque caractère de façon unique.</p>

<p>Dans l'exemple précédent <incode>#ff0000</incode> se déconstruit ainsi:</p>

<ul>
    <li>Rouge = <incode>ff</incode></li>
    <li>Vert = <incode>00</incode></li>
    <li>Bleu = <incode>00</incode></li>
</ul>

<p>Puisque chaque valeur est un doublé, il est possible d'abréger le code <incode>#f00</incode>.</p>

<h3>Hex 8 caractères</h3>

<p>Il est possible d'ajouter deux caractères supplémentaires à la fin d'un code hexadécimal régulier afin de spécifier son alpha.</p>

<ul>
    <li><incode>00</incode> = complètement transparent.</li>
    <li><incode>ff</incode> = complètement opaque.</li>
    <li>Toute valeur comprise entre ces deux extrêmes représente un niveau d'alpha allant de faible à fort.</li>
</ul>

<warning>Puisque calculer une valeur d’alpha avec une unité constituée de chiffres et de lettres n’est pas évident, cette approche n’est pas particulièrement répandue.</warning>

<dots></dots>


<grostitre>rgb et rgba</grostitre>

<p>RGB est l'acronyme des couleurs <em>red</em>, <em>green</em> et <em>blue</em>. Pour définir une couleur <incode>rgb()</incode> il suffit de spécifier ces 3 couleurs avec une valeur comprise entre 0 et 255. Plus la valeur est élevée plus la couleur est présente.</p>

<p>Par exemple, le rouge pur de l'exemple précédent s'écrirait ainsi <incode>rgb(255, 0, 0)</incode> dans ce format.</p>

<p>Les couleurs <incode>rgba()</incode> fonctionnent sur le même principe, mais une 4e valeur comprise entre 0 et 1 permet de spécifier l'alpha de la couleur.</p>

<p>Par exemple, pour obtenir un rouge pur semi-transparent, il est possible d'écrire <incode>rgba(255, 0, 0, 0.5)</incode>.</p>

<dots></dots>


<grostitre>hsl et hsla</grostitre>

<p>HSL est l'acronyme de <incode>hue</incode>, <incode>saturation</incode> et <incode>lightness</incode> <em>(teinte, saturation et luminosité)</em>. Pour définir une couleur <incode>hsl()</incode> il faut spécifier:</p>

<ul>
    <li>
        Une teinte entre 0 et 360
        <ul>
            <li>0 = Rouge</li>
            <li>360 = Rouge</li>
        </ul>
    </li>
    <li>
        Une saturation entre 0% et 100%
        <ul>
            <li>0% = La couleur est désaturée comme sur une photo noir et blanc.</li>
            <li>100% = Couleur pure</li>
        </ul>
    </li>
    <li>
        Une luminosité entre 0 et 100%
        <ul>
            <li>0% = Absence de lumière, tout est noir.</li>
            <li>50% = Lumière normale.</li>
            <li>100% = Lumière au maximum, tout est blanc./li>
        </ul>
    </li>
</ul>

<p>Par exemple, le rouge pur de l'exemple précédent s'écrirait ainsi <incode>hsl(0, 100%, 50%)</incode> dans ce format.</p>

<p>Les couleurs <incode>hsla()</incode> fonctionnent sur le même principe, mais une 4e valeur comprise entre 0 et 1 permet de spécifier l'alpha de la couleur.</p>

<p>Par exemple, pour obtenir un rouge pur semi-transparent, il est possible d'écrire <incode>hsla(0, 100%, 50%, 0.5)</incode>.</p>

<tool href="tools/convert-a-color/"></tool>

<knowmore href="https://developer.mozilla.org/fr/docs/Web/CSS/color_value">Article MDN à propos des unités de couleurs</knowmore>

<dots></dots>



