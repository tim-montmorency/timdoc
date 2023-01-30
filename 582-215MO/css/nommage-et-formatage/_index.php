<?php
/**
 * @type     article
 * @title    Nommage et formatage
 * @icon     images/icon.png
 * @abstract À priori, nommer des éléments peut sembler facile.
 */
?>

<p class="spacer">À priori, nommer des éléments peut sembler facile. Par exemple, voici trois noms de classes: <incode>.truc</incode>, <incode>.patente</incode> et <incode>.chose</incode>. Pourquoi ces noms?</p>

<p>Théoriquement, nous pouvons donner n'importe quel nom à nos classes sans affecter le fonctionnement de notre code.</p>

<p>Cependant, imaginez si vous deviez embarquer sur un projet. <em>(Écrit par quelqu'un d'autre ou par vous-même il y a longtemps.)</em> Vous fait un survole du CSS et vous voyez ces classes <incode>.truc</incode>, <incode>.patente</incode>, <incode>.chose</incode>…</p>

<clipasset src="videos/what-happened.mp4"></clipasset>

<br>

<p>Bonne chance pour comprendre!</p>

<p>Si à l'opposé ces classes étaient nommées: <incode>.grille</incode>, <incode>.carte</incode> et <incode>.titre</incode> leurs rôles et relation, serait soudainement plus évident. D'où l'importance de donner des noms représentatifs.</p>

<quote author="Phil Karlton" title="Développeur chez Netscape et solide moustachu" photo="images/phil-karlton.jpg">
  There are only two hard things in Computer Science: cache invalidation and naming things
</quote>


<dots></dots>


<grostitre>Cohérence</grostitre>

<p>Il existe plusieurs façons de nommer ses classes.</p>

<p>Par exemple:</p>

<ul>
  <li><incode>.MaClasse { ... }</incode></li>
  <li><incode>.maClasse { ... }</incode></li>
  <li><incode>.ma-classe { ... }</incode></li>
  <li><incode>.ma_classe { ... }</incode></li>
  <li>Etc.</li>
</ul>

<p>Le tout devient rapidement mélangeant si l'on se met à jongler avec ces différentes possibilités. Il est donc fortement encouragé de s'en tenir à une seule approche.</p>

<info>Au moment d’écrire ces lignes, le modèle le plus répandu est celui en miniature où les espaces sont remplacés par des tirets. ex: <incode>.ma-classe { ... }</incode></info>

<dots></dots>


<grostitre>Formatage</grostitre>

<p>Un code bien formaté est un code facile à lire et surtout facile à déboguer!</p>

<p>Voici quelques règles de base.</p>

<h3>Accolades</h3>

<p>Un espace entre le sélecteur et l'accolade ouvrante devrait toujours être présent et elle devrait être suivi d'un retour de chariot Enter ↵ afin de simplifier la lisibilité du code.</p>

<p>Quant à elle, l'accolade fermante devrait être seule sur la ligne suivant la dernière propriété et sont indentation devrait correspondre à celle de son sélecteur. Une ligne vide devrait ensuite la suivre afin de délimiter proprement chaque bloc.</p>

<p>👌</p>

<highlight lang="css">.carte {
  display: block;
  width: 100%;
}</highlight>

<p>🚫</p>

<highlight lang="css">.carte{display: block;
  width: 100%;}</highlight>

<dots></dots>


<grostitre>Espaces</grostitre>

<p>Lorsque vous écrivez vos propriétés, elles devraient normalement être indentées à l'intérieur de vos accolades</p>

<p>👌</p>

<highlight lang="css">sélecteur {
  propriété: valeur;
}</highlight>

<p>🚫</p>

<highlight lang="css">sélecteur {
propriété: valeur;
}</highlight>

<info>Actuellement, deux espaces est l’indentation la plus courante en CSS.</info>

<p>L'important est de garder une indentation cohérente d'une ligne à l'autre.</p>

<p>👌</p>

<highlight lang="css">.carte {
  display: block;
  width: 100%;
  padding: 20px;
}</highlight>

<p>🚫</p>

<highlight lang="css">.carte {
  display: block;
width: 100%;
    padding: 20px;
}</highlight>

<dots></dots>


<grostitre>Formatage automatique</grostitre>

<h3>VS Code</h3>

<p>Lorsqu'un code est sélectionné, VS Code permet de le formater automatiquement à l'aide d'un raccourcis clavier:</p>

<ul>
  <li>Windows: <incode>Shift</incode> + <incode>Alt</incode> + <incode>F</incode></li>
  <li>Mac: <incode>Shift</incode> + <incode>Options</incode> + <incode>F</incode></li>
</ul>

<h3>CodePen</h3>

<p>Dans l'entête de chacune des fenêtres <em>(HTML, CSS, JavaScript)</em> se trouve un chevron pointant vers le bas ⌄. Cette icône donne accès aux différentes options de la fenêtre. Parmi elles se trouve <em>"Format"</em> permettant de formater votre code automatiquement.</p>

<dots></dots>

<tool href="tools/css-beautifier/"></tool>

<dots></dots>