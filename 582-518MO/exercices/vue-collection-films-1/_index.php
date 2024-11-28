<?php
/**
 * @type     exercice
 * @title    Vue - Collection de films:Part 1
 * @icon     images/thumb.png
 * @abstract [Classes dynamiques] Vous devez créer une petite application web vous permettant de classer votre collection de films, à voir ou déjà vu.
 */
?>

<p>Dans le cadre de cet exercice,  vous devez créer une petite application web vous permettant de classer votre collection de films, à voir ou déjà vu. Dans cette partie particulière de l'exercice, vous devez créer des méthodes Vue.js et utiliser les classes CSS dynamiques de Vue.js.</p>

<dots></dots>
<p>Aperçu du résultat 👇</p>
<clipasset src="images/apercu-part1.mov"></clipasset>



<dots></dots>
<grostitre>Matériel</grostitre>
<p>Faites toujours un fork du Pen de départ</p>
<doclink href="https://codepen.io/tim-momo/pen/wBwvOMg">Pen de départ</doclink>
 


<dots></dots>
<grostitre>Requis de base et des boutons [-] et [+]</grostitre>
<checklist>
    Créez une app Vue.js
    Créez une donnée Vue <span class='inline-code'>year</span> qui sera initialisée à l'année 2022.
    Cette donnée devra être affichée entre les deux boutons [-] et [+] dans la section <em>Quelle&nbsp;année&nbsp;de&nbsp;sortie?</em>
    Créez des méthodes pour incrémenter et décrémenter l'année dans la section <em>Quelle&nbsp;année&nbsp;de&nbsp;sortie?</em> afin de changer cette données dynamiquement en cliquant sur les boutons [+] ou [-] correspondants.
</checklist>

<grostitre>Requis classes dynamiques</grostitre>
<checklist>
    Créez une autre donnée Vue <span class='inline-code'>currentYear</span> qui stockera l'année courante. Recherchez sur le web pour savoir comment récupérer la donnée de l'année en cours.
    Créez une donnée booléenne <span class='inline-code'>isCurrentYear</span> initialisée à <span class='inline-code'>false</span> puisque l'année de départ <span class='inline-code'>2022</span> n'est pas égale à l'année courante <span class='inline-code'>currentYear</span> qui est <?php echo date('Y'); ?>.
    Finalement, à l'aide de classe dynamique sur les <span class='inline-code'>li</span>, ajoutez ou supprimez la classe <span class='inline-code'>.selectedYear</span> en fonction de l'année présentée dans la section <em>Quelle&nbsp;année&nbsp;de&nbsp;sortie?</em>
    Faites attention de conserver la <span class='inline-code'>.classe-static</span> qui s'y trouve déjà.
    
</checklist>




<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<intlink href="../../javascript/vue-js/creation-app/"></intlink>
<intlink href="../../javascript/vue-js/donnees/"></intlink>
<intlink href="../../javascript/vue-js/methodes-et-evenements/"></intlink>
<intlink href="../../javascript/vue-js/classes-css-dynamiques/"></intlink>
