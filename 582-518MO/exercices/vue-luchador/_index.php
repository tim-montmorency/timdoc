<?php
/**
 * @type     exercice
 * @title    Vue - Luchador
 * @icon     images/pink-palette-resultat.png
 * @abstract Vous devrez rendre dynamique à l’aide de Vue le tableau indicateur d’un match de la NBA
 */
?>

<p>Pour cet exercice, vous allez créer une petite démo permettant de déterminer votre nom de <a href="https://fr.wikipedia.org/wiki/Lucha_libre" target="_blank">luchador</a> en fonction de votre jour et mois de&nbsp;naissance.</p>

<p>Aperçu du résultat 👇</p>
<clipasset src='images/vue-luchador-resultat.mp4'></clipasset>

   

<dots></dots>
<grostitre>Matériel</grostitre>
<doclink href='https://codepen.io/tim-momo/pen/rNPKzJo'>Pen de départ</doclink>
 



<p>Le CSS est déjà réalisé et le cadriciel Vue est déjà installé pour vous dans le pen de départ.</p>


<dots></dots>
<grostitre>Requis</grostitre>

<checklist>À l'intérieur de l'élément <code>.menu</code>, créez un menu déroulant permettant de choisir la journée de sa naissance allant de 1 à 31. Ce menu doit se populer à partir du tableau <code>daysArr</code> en utilisant une boucle.
Toujours à l'intérieur de l'élément <code>.menu</code>, créez cette fois un nouveau menu déroulant permettant de choisir son mois de naissance. Ce menu doit se populer à partir du tableau <code>monthsArr</code> en utilisant aussi une boucle.
Lorsque les menus déroulants changent, les données day et month doivent se mettre à jour.
Créez une propriété calculée intitulée <code>name</code>. La valeur de cette propriété devra être le résultat de la concaténation de la valeur associée au mois et au jour sélectionnés.</checklist>

<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<?php intlink("../../javascript/vue-js/introduction") ?>
<?php intlink("../../javascript/vue-js/creation-app-bases") ?>
<?php intlink("../../javascript/vue-js/elements-de-formulaire") ?>
<?php intlink("../../javascript/vue-js/proprietes-calculees") ?>