<?php
/**
 * @type     article
 * @title    Variables
 * @icon     images/icon.png
 * @abstract ::root, var(--varname)
 */
?>

<p class="spacer">L'arrivée des variables CSS a été une grande avancée permettant d'éviter des répétitions inutiles, de faciliter la lisibilité du code et d'ajouter une couche de flexibilité au CSS.</p>

<p>Voici un exemple de répétitions <em>(red)</em></p>

<highlight lang="css">.spider-man .head { background-color: red; }
.spider-man .eye { background-color: white; }
.spider-man .body { background-color: red; }
.spider-man .leg { background-color: red; }</highlight>

<p>Ce code fonctionne. Cependant, si pour X raisons il est décidé de passer de la version Spider-man Peter Parker vers celle Miles Morales, il faudra modifier chacune des valeurs <incode>red</incode> pour les mettre à <incode>blue</incode>. Ce qui requiert du temps et représentera un risque d'erreurs.</p>

<img src="./images/var-css-spider-man.png">

<dots></dots>


<grostitre>Définition</grostitre>

<p>Pour définir une variable globale à la racine du document <em>(ou en anglais root)</em>, il suffit d'écrire:</p>

<highlight lang="css">:root {
  --nom-de-la-variable: valeur;
}</highlight>

<p>Puisque les variables sont héritées, tous les éléments de la page y ont accès, puisqu'ils sont tous enfants de la racine du document.</p>

<warning>Remarquez-le <incode>:</incode> avant le mot-clé root, ainsi que les <incode>--</incode> avant le nom de la variable.</warning>

<p>Pour accéder à une variable, on écrit:</p>

<highlight lang="css">var(--nom-de-la-variable)</highlight>

<p>Pour reprendre l'exemple de Spider-man, il serait possible d'écrire:</p>

<highlight lang="css">:root { --costume: red; }

.spider-man .head { background-color: var(--costume); }
.spider-man .eye { background-color: white; }
.spider-man .body { background-color: var(--costume); }
.spider-man .leg { background-color: var(--costume); }</highlight>

<p>Ainsi, simplement en changeant la valeur de la variable <incode>--costume</incode> de <incode>:root { --costume: red; }</incode> à <incode>:root { --costume: blue; }</incode> il serait possible de changer la couleur de Spider-man en entier rapidement et sans risque d'erreur.</p>

<p>Notez qu'il est possible de définir plusieurs variables CSS dans le même élément <incode>:root { ... }</incode>.</p>

<p>Par exemple:</p>

<highlight lang="css">:root {
  --costume: red;
  --yeux: white;
}</highlight>

<info>En fait, un seul <incode>:root{ ... }</incode> est normalement défini.</info>

<dots></dots>


<grostitre>Contexte (scope)</grostitre>

<p>Dans l'exemple précédent, notre variable CSS était définie au <incode>root</incode> du document. Cependant, il est possible de définir une variable à l'intérieur d'un sélecteur CSS, de sorte que cette variable ne soit disponible uniquement qu'à l'intérieur du sélecteur et de ses enfants.</p>

<p>Par exemple:</p>

<highlight lang="css">.spider-man { --costume: red; }

.spider-man .head { background-color: var(--costume); }
.spider-man .eye { background-color: white; }
.spider-man .body { background-color: var(--costume); }
.spider-man .leg { background-color: var(--costume); }</highlight>

<p>Ainsi, la variable <incode>--costume</incode> n'existe que dans le contexte du sélecteur <incode>.spider-man</incode>. Si elle était utilisée dans un autre sélecteur, par exemple: <incode>.green-goblin</incode>, elle ne retournerait aucune valeur et donc serait ignorée par le navigateur.</p>

<h3>Écraser une variable</h3>

<p>En donnant un contexte plus spécifique, il est possible d'écraser la valeur d'une variable.</p>

<p>Par exemple:</p>

<highlight lang="css">:root { --costume: red; }

.spider-man .head { background-color: var(--costume); }
.spider-man .eye { background-color: white; }
.spider-man .body { background-color: var(--costume); }
.spider-man .leg { background-color: var(--costume); }

.green-goblin { --costume: green; }
.green-goblin .head { background-color: var(--costume); }
.green-goblin .eye { background-color: white; }
.green-goblin .body { background-color: var(--costume); }
.green-goblin .leg { background-color: var(--costume); }</highlight>

<p>Dans cet exemple, la variable <incode>--costume</incode> à la valeur <incode>red</incode> dans le contexte globale des styles. Ainsi, si un personnage n'écrase pas cette variable, son costume sera automatiquement rouge. Tandis que le sélecteur <incode>.green-goblin</incode> redéfinit la valeur de cette variable dans son propre contexte à <incode>green</incode>.</p>

<warning>Même si un personnage est défini après <incode>.green-goblin</incode>, s’il utilise la variable <incode>--costume</incode>, celle-ci retournera <incode>red</incode>, car la valeur <incode>green</incode> n’est retournée qu’à l’intérieur du contexte du sélecteur <incode>.green-goblin</incode>.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/Using_CSS_custom_properties">var()</doclink>
<doclink href="https://www.w3schools.com/css/css3_variables.asp">var()</doclink>

<img src="./images/css-var-green-goblin.jpg">

<dots></dots>


<grostitre>Résumé vidéo</grostitre>

<clip src="videos/css-variables-in-100-seconds.mp4"></clip>

<dots></dots>

<exercice href="exercices/canadiens/"></exercice>

<dots></dots>