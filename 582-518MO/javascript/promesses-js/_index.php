<?php 
/**
 * @type     article
 * @title    Promesses JavaScript
 * @icon     images/ico-promesse-js.png
 * @abstract Représentant complétion ou échec d'une opération asyncrone
 * @index 99
 */
?>
<grostitre>La métaphore d'une promesse</grostitre>
<p>Une promesse (en anglais promise), consiste en un <strong><em>engagement</em></strong> à faire quelque chose. Par exemple, un camarade de classe peut vous promettre de remettre sa partie d’un travail d'équipe d’ici la fin de la&nbsp;semaine.</p>

<p>Le résultat d’une telle promesse n’est pas immédiatement disponible. Il faut se montrer patient et <em>attendre que la promesse soit complétée</em>. Par exemple, attendre que votre camarade remette sa partie, soit: jeudi, vendredi, samedi ou encore&nbsp;dimanche.</p>

<p><em>Une promesse est faite dans le but d’être respectée</em>. Donc si votre camarade promet de remettre sa partie pour une date X, c’est qu’il est confiant de pouvoir respecter son engagement et lorsque ce sera chose faite, vous pourrez alors jumeler vos&nbsp;parties de travail d'équipe.</p>

<p>Dans de <em>rares occasions, une promesse peut être brisée</em>. Un contretemps pourrait par exemple empêcher votre camarade de remettre sa partie. Vous, vous tournerez alors vers un plan&nbsp;B.</p>



<dots></dots>
<grostitre>Promesse JavaScript</grostitre>

<p>Les&nbsp;<incode>Promises</incode>&nbsp;en JavaScript fonctionnent sur le même principe. À défaut de pouvoir répondre immédiatement une fonction peut retourner une promesse. Cette approche est particulièrement utile lorsque la fonction en question contacte un serveur externe, puisque son délai de réponse peut&nbsp;varier.</p><p>Si la promesse est respectée, la méthode&nbsp;<incode>.then()</incode>&nbsp;est ensuite appelée et la valeur de la réponse lui est passée en&nbsp;paramètre.</p>


<p>Si la promesse est brisée et qu’une méthode&nbsp;<incode>.catch()</incode>&nbsp;est présente, elle est appelée et un message d’erreur lui est&nbsp;envoyé.</p>

<dots></dots>
<grostitre>Mise-en-contexte pour le cours</grostitre>

<p>Bien qu’il soit possible de : <br><br>
- <em>faire ou construire une promesse</em> en JavaScript (<span style="color:#000; font-weight: 900; background-color: #5FF6F6;">create</span>)<br>
- <em>recevoir une promesse</em> en JavaScript (<span style="color:#000; font-weight: 900; background-color: #F97DF8">consume</span>), <br><br>
il est plus fréquent d’en&nbsp;recevoir (consume).</p>
<br>
<p>D'abord, on apprendra comment faire, comment CONSTRUIRE UNE PROMESSE en JavaScript. </p>

<p>Par la suite, on apprendra plutôt à RECEVOIR CETTE PROMESSE. Donc, comprendre la façon dont une promesse est construite vous aidera à gérer la réception d'une telle promesse.</p>

<p>Dans l'exemple de l'image ci-dessous, on simule l'appel chez Uber pour demander un service. Uber fera donc la promesse d'une course en voiture (ride). Après un cerytain temps, on recevra une notification soit: <br>"✅ votre condcuteur est arrivé (driver arrived) ✅"<br>ou :<br>"🚫 votre conducteur a annulé votre requête (driver bailed) 🚫".</p>
<img src="images/create-consume-promise-js.png" alt="2 fene^tre de code une à coté de l'autre: àa gauche: la création d'une promesse et à droite: la réception de cette promesse.">



<dots></dots>
<grostitre>FAIRE (CONSTRUIRE) UNE PROMESSE</grostitre>
<grostitre>- new Promise</grostitre>
<p>Le code new Promise() permet de créer une promesse. Cette promesse est en fait un <em>objet&nbsp;JavaScript</em> contenant une fonction acceptant deux&nbsp;paramètres.</p>


<ol start="1">
    <li>Le <em>1er paramètre</em> correspond au nom d'une fonction à appeler lorsque la promesse est&nbsp;<em>respectée</em>.</li>

    <li>Le <em>2e paramètre</em> correspond au nom de la fonction à appeler lorsqu'elle est&nbsp;<em>brisée</em>.</li>
 </ol>
 <br>
 <br>

<p>Par exemple, la promesse suivante 👇 appelle la fonction&nbsp;<incode>resolve</incode>&nbsp;lorsqu'elle est respectée et&nbsp;<incode>reject</incode>&nbsp;lorsqu'elle est brisée. <br>
La valeur du retour dans les deux cas est passée en&nbsp;paramètre.</p>


<highlight lang="javascript">
const promesse = new Promise((resolve, reject) => {
  const respectPromesse = true;

  if (respectPromesse === true) {
    resolve("Promesse respectée");
  } else {
    reject("Promesse brisée");
  }
});
</highlight>


<p>Dans le cadre de cette démonstration, la promesse sera toujours&nbsp;respectée.</p><p>Cependant, un exemple plus concret serait le cas d'un service tentant de répondre à une demande d'informations. Si les informations sont trouvées, la fonction assignée au respect de la promesse est appelée. Si le délai imparti avant de trouver la réponse est dépassé, la fonction assignée au bris de promesse est&nbsp;appelée.</p>

<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Promise'>Promise</doclink>
<doclink href='https://www.w3schools.com/js/js_promise.asp'>Promise</doclink>

<dots></dots>


<p>Pour obtenir le résultat d'une promesse, il est&nbsp;<strong>impossible d'appeler directement la promesse</strong>. </p>


Par exemple, le code&nbsp;suivant:

<highlight lang="javascript">console.log(promesse); // [objet Promise] {}</highlight>

<p>retournerait un message indiquant qu'il s'agit d'un objet de type&nbsp;<incode>Promise</incode>&nbsp;et non la valeur contenu dans la&nbsp;promesse.</p>









<dots></dots>

<grostitre>RECEVOIR UNE PROMESSE</grostitre>

<grostitre>- then() ✅</grostitre>
        

<p>Si la promesse est respectée, une méthode&nbsp;<incode>.then()</incode>&nbsp;est appelée et la valeur lui est passée en&nbsp;paramètre.</p>

Par exemple:
<highlight lang="javascript">
promesse
  .then(valeur => console.log(valeur));
// "Promesse respectée"
</highlight>

<br><br>

<p>Une méthode&nbsp;<incode>.then()</incode>&nbsp;retourne elle aussi une promesse. Cette promesse peut donc à son tour avoir un&nbsp;<incode>.then()</incode>&nbsp;et ainsi enchainer de multiple&nbsp;<incode>.then()</incode>&nbsp;un à la suite de&nbsp;l'autre.</p>

Par exemple:
<highlight lang="javascript">
promesse
  .then(value => `${value}, oh oui!!!`)
  .then(msg => console.log(msg)); // "Promesse respectée, oh oui!!!"
</highlight>

<br>
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Promise/then'>then()</doclink>


<dots></dots>
<grostitre>- catch() 🚫</grostitre>

<p>Si la promesse est brisée et qu'une méthode&nbsp;<incode>.catch()</incode>&nbsp;est présente, cette dernière est appelée et la valeur lui est passée en&nbsp;paramètre.</p>

Par exemple:
<highlight lang="javascript">
promesse
  .catch(error => console.log(error)); // "Promesse brisée"
</highlight>

<br>
  <doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Promise/catch'>catch()</doclink>




  <dots></dots>
<grostitre>- finally()</grostitre>
<p>Si une méthode&nbsp;<incode>.finally()</incode>&nbsp;est présente, celle-ci est appelée dès que la promesse est complétée, peu importe son statut qu'elle soit respectée ou&nbsp;brisée.</p>



Par exemple:
<highlight lang="javascript">
promesse
  .finally(() => console.log("Promesse complétée"));
</highlight>

<dots></dots>
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Promise/finally'>finally()</doclink>


<br><br><br>

Dans un exemple concret, tout mis ensemble donnerait&nbsp;ceci:

<highlight lang="javascript">
promesse
  .then(value => console.log(value))
  .catch(error => console.log(error))
  .finally(() => console.log("Promesse complétée"));

// "Promesse respectée", "Promesse complétée"
</highlight>
<br><br>




<dots></dots>

<grostitre>Résumé vidéo</grostitre>

<youtube src="RvYYCGs45L4"></youtube>

  
