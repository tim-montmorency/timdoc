<?php
/**
 * @type     exercice
 * @title    Vue - Luchador
 * @icon     images/thumb.webp
 * @abstract Vous devrez rendre dynamique à l’aide de Vue le tableau indicateur d’un match de la NBA
 */
?>

<p>Pour cet exercice, vous allez créer une petite démo permettant de déterminer votre nom de <a href="https://fr.wikipedia.org/wiki/Lucha_libre" target="_blank">luchador</a> en fonction de votre jour et mois de&nbsp;naissance.</p>

<p>Aperçu du résultat 👇</p>
<clipasset src="images/vue-luchador-resultat.mp4"></clipasset>

   

<dots></dots>
<grostitre>Matériel</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/rNPKzJo">Pen de départ</doclink>
 



<p>Le CSS est déjà réalisé et le cadriciel Vue est déjà installé pour vous dans le pen de départ.</p>


<dots></dots>
<grostitre>Requis</grostitre>

<checklist>À l'intérieur de l'élément <incode>.menu</incode>, créez un menu déroulant permettant de choisir la *journée de sa naissance* allant de 1 à 31. Ce menu doit se populer à partir du tableau <incode>daysArr</incode> en utilisant une boucle.
Toujours à l'intérieur de l'élément <incode>.menu</incode>, créez un nouveau menu déroulant permettant de choisir son *mois de naissance*. Ce menu doit se populer à partir du tableau <incode>monthsArr</incode> en utilisant aussi une boucle.
Lorsque les menus déroulants changent, les données <incode>day</incode> et <incode>month</incode> doivent se mettre à jour.
Créez une *propriété calculée* intitulée <incode>name</incode>. La valeur de cette propriété devra être le résultat de la concaténation de la valeur associée au mois et au jour sélectionnés.</checklist>

<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<intlink href="../../javascript/vue-js/introduction"></intlink>

<intlink href="../../javascript/vue-js/creation-app/"></intlink>
<intlink href="../../javascript/vue-js/donnees/"></intlink>
<intlink href="../../javascript/vue-js/methodes-et-evenements/"></intlink>
<intlink href="../../javascript/vue-js/condition-v-if/"></intlink>
<intlink href="../../javascript/vue-js/boucle/"></intlink>

<intlink href="../../javascript/vue-js/elements-de-formulaire"></intlink>
<intlink href="../../javascript/vue-js/proprietes-calculees"></intlink>
