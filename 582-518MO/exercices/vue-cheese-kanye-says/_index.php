<?php
/**
 * @type     exercice
 * @title    Vue - Cheese Kanye says
 * @icon     images/thumb.webp
 * @abstract Vous devrez mettre à jour la citation de Kanye West via vue.js et un API
 */
?>

<p>Dans le cadre de cet exercice, vous devrez mettre à jour la citation de <a href="https://www.youtube.com/watch?v=PsO6ZnUZI0g">Kanye West</a> affichée à l’écran par une autre célèbre phrase de son&nbsp;registre.</p>

<p>Aperçu du résultat 👇</p>
<clipasset src='images/cheese-kanye-says-resultat.mp4'></clipasset>



<dots></dots>
<grostitre>Matériel</grostitre>
<doclink href='https://codepen.io/tim-momo/pen/JjxOKGo'>Pen de départ</doclink>
 



<dots></dots>
<grostitre>Requis</grostitre>
<checklist>Créez-vous une méthode Vue intitulée <em>"getQuote"</em>. Au clic du bouton <em>"Nouvelle citation fromagée"</em>, appelez cette méthode.
Dans cette méthode, changez le texte de la citation par le texte suivant: <em>"La plus grande douleur de ma vie, c'est que je ne pourrais jamais me voir en live sur scène."</em>
Lorsque l'étape précédente est complétée, effacez le changement de texte dans votre méthode et appelez plutôt l'API Kanye.rest à l'aide de <a target="_blank" href="../../javascript/fetch-api/" onclick="event.stopPropagation()">fetch</a> se trouvant à l'adresse suivante: <a target="_blank"  href="https://api.kanye.rest/"  onclick="event.stopPropagation()">https://api.kanye.rest/</a>. Récupérez la citation aléatoire fournie par ce service et remplacez la citation actuelle par celle-ci.</checklist>




<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<intlink href="../../javascript/vue-js/introduction/"></intlink>
<intlink href="../../javascript/vue-js/creation-app-bases/"></intlink>
<intlink href="../../javascript/fetch-api/"></intlink>