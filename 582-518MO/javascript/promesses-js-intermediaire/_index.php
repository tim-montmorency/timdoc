<?php 
/**
 * @type     article
 * @title    Promesses JS intermédiaire
 * @icon     images/ico-promesse-js.png
 * @abstract promise.all(), promise.any()...
 * @index    98
 * @ref      web/javascript
 */
?>

<grostitre>RECEVOIR UNE PROMESSE (suite)</grostitre>



<p>La relation entre des promesses peut varier. Parfois certaines sont interchangeables, alors qu'à d'autres moments elles sont toutes requises avant de pouvoir passer à l'étape&nbsp;suivante.</p>

<p>Afin de gérer ces relations, l'objet&nbsp;<incode>Promise</incode>&nbsp;est doté de plusieurs méthodes permettant de retourner à son tour des promesses&nbsp;<em>(promise)</em>. Voici deux de ces méthodes les plus&nbsp;communes.</p>


<grostitre>- all()</grostitre>

<p>La méthode&nbsp;<incode>Promise.all()</incode>&nbsp;retourne une promesse respectée lorsque l'ensemble des promesses lui étant passées en paramètres sont respectées. Sa valeur de résultat contient un tableau populé par le résultat de chacune de ses&nbsp;sous-promesses.</p>

<highlight lang="javascript">
const p1 = new Promise(resolve => resolve("Promesse 1"));
const p2 = new Promise(resolve => resolve("Promesse 2"));
const p3 = new Promise(resolve => resolve("Promesse 3"));

Promise.all([p1, p2, p3]).then(values => {
  console.log(values);
});

// ["Promesse 1", "Promesse 2", "Promesse 3"]
</highlight>




<doclink href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Promise/all">all()</doclink>

<dots></dots>

<grostitre>- any()</grostitre>
<p>Contrairement à la méthode&nbsp;<a rel="noopener noreferrer" href="#all">Promise.all()</a>, la méthode&nbsp;<incode>Promise.any()</incode>&nbsp;retourne une promesse respectée dès qu'une promesse lui étant passées en paramètres est respectée. Sa valeur de résultat contient le résultat de la sous-promesses la plus rapide à&nbsp;répondre.</p>

<highlight lang="javascript">
const p1 = new Promise((resolve) => resolve("Promesse 1")); // 🐢 lente
const p2 = new Promise((resolve) => resolve("Promesse 2")); // 🐇 rapide
const p3 = new Promise((resolve) => resolve("Promesse 3")); // 🐕 moyenne

Promise.any([p1, p2, p3]).then((valeur) => {
  console.log(valeur); // "Promesse 2"
});
</highlight>

<doclink href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Promise/any">any()</doclink>


