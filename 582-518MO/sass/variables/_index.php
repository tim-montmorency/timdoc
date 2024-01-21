<?php 
/**
 * @type     article
 * @title    Variable
 * @icon     images/icon.png
 * @abstract Stocker des informations réutilisables
 * @index    40
 * @ref      web/sass
 */
?>

<grostitre>Intro</grostitre>

<p>Les variables SCSS sont simples. Il suffit d'attribuer un nom et de le préfixer avec le symbole <incode>$</incode> afin
    de créer une variable. Le délimiteur <incode>:</incode> permets ensuite de séparer le nom de la variable de sa valeur.
</p>
<p>Par exemple, pour définir une variable costume contenant la couleur rouge 🔴:</p>
<pre><code class="hljs php"><span class="hljs-variable">$costume</span>: red;</code></pre>




<dots></dots>
<grostitre>Contexte (scope)</grostitre>
<p>Une variable SCSS définie à l'extérieur d'un sélecteur CSS est considérée comme étant <strong>globale</strong>.
    Autrement dit, elle peut être utilisée partout dans son fichier. Tandis que les variables SCSS définies à
    l'intérieur d'un sélecteur CSS sont considérées comme étant <strong>locales</strong> et ne peuvent être accédées
    qu'à l'intérieur des accolades <em>{}</em> les encapsulant.</p>


<p>Par exemple:</p>

<highlight lang='scss'>$costume: red; // Variable globale

.spider-man {
  $logo: blue; // Variable locale
  
  background-color: $costume; // ✅
  color: $logo; // ✅
}

.deadpool {
  background-color: $costume; // ✅
  color: $logo; // ❌
}</highlight>


<h3 class="heading heading--h3" id="Écraser une variable">Écraser une variable</h3>

<p>En donnant un contexte (scope) plus spécifique, il est possible d'écraser la valeur d'une&nbsp;variable.</p>
<p>Par&nbsp;exemple, on pourrait supposer que de base, tous les personnages ont un costume rouge et qu'après on peut gérer les exceptions en écransant la valeur de la variable <incode>$costume</incode> localement pour un personnage spécifique: Green Goblin. </p>
<highlight lang='scss'>$costume: red; // 🔴

.spider-man {
  background-color: $costume; // 🔴
}

.green-goblin {
  $costume: green; // 🟢
  background-color: $costume; // 🟢
}</highlight>

<p>Dans cet exemple, la variable&nbsp;<incode>$costume</incode>&nbsp;à la valeur&nbsp;<incode>red</incode>&nbsp;dans le contexte global. Ainsi, si un personnage n'écrase pas cette variable, son costume sera automatiquement rouge 🔴. Tandis que
    le sélecteur&nbsp;<incode>.green-goblin</incode>&nbsp;redéfinit la valeur de cette variable dans son propre contexte
    à&nbsp;<incode>green</incode> 🟢.</p>

<warning>Même si un personnage est défini après <incode>.green-goblin</incode>, s’il utilise la variable <incode>$costume</incode>, celle-ci retournera <incode>red</incode>, car la valeur <incode>green</incode> n’est retournée qu’à l’intérieur du contexte du sélecteur&nbsp;<incode>.green-goblin</incode>.</warning>





<dots></dots>
<grostitre>Variables CSS</grostitre>
<p>À priori, les variables CSS et les variables SCSS peuvent apparaitre interchangeables. Cependant, elles diffèrent sur
    certains points importants. </p>
<p>Les variables SCSS sont des variables dites compilées. C'est à dire à dire qu'une fois converties en CSS, il n'y a
    plus aucune trace de la variable en soi puisqu'elle est remplacée par sa valeur. Tandis que les variables CSS
    existent en tout temps ce qui permet de modifier une valeur directement dans le navigateur au besoin.</p>
<p>Par exemple, si vous inspectez la balise&nbsp;<incode>&lt;html&gt;</incode>&nbsp;de cette page (clic-droit / Inspecter / Sélectionnez <incode>&lt;html lang="fr-ca"&gt;</incode>). Vous remarquerez que
    plusieurs variables CSS sont définies. Vous pouvez remplacer leurs valeurs et voir les changements
    s'appliquer&nbsp;immédiatement dans la page. Tandis qu'aucune trace de variable SCSS n'est visible. </p>
<h3 class="heading heading--h3" id="Pourquoi avoir inventé les variables SCSS?">Pourquoi avoir inventé les variables
    SCSS?</h3>

<p>Il faut faire un saut dans le passé afin de bien comprendre. Les variables Sass furent inventées en 2006. À cette
    époque, ce fut une grande avancée dans le monde du CSS, car aussi étrange que cela puisse paraître, les variables
    CSS natives n'existaient pas encore. Ces dernières furent inventées quelques années plus tard. Leur implémentation
    dans les différents navigateurs requit aussi quelques années de patience. Si bien que leur utilisation réelle ne
    commença qu'environ 10 ans après les variables Sass.</p>


    <doclink href='https://sass-lang.com/documentation/variables'>Variables SCSS</doclink>
