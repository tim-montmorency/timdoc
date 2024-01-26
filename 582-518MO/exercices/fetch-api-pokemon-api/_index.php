<?php
/**
 * @type     exercice
 * @title    Fetch API - Poké API
 * @icon     images/poke.jpg
 * @abstract Créer une interface sélecteur de type Pokémon afin d'afficher aléatoirement un pokiémon de du type choisi.
 */
?>

<p>Pour cet exercice nous allons créez un microsite permettant de déterminer quel Pokémon parmi 1118 choisirait l’usager de façon ludique. Pour ce faire nous aurons recours à fetch au service de&nbsp;<a href="https://pokeapi.co/" target="_blank">PokéAPI</a>.</p>


<p>Aperçu du résultat 👇</p>
<clipasset src='images/fetch-pokeapi.mp4'></clipasset>


<dots></dots>
<grostitre>Matériel</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/PoXYBqx">Pen de départ</doclink>
<br>

<warning>Vous n’avez qu’à écrire du JavaScript <em>(nul besoin de modifier le HTML ou le&nbsp;CSS)</em>.</warning>


<alert>Pour les consignes qui commencent par <em>(*⚠️*)</em>, vous aurez probablement besoin de précisions de votre enseignante. En classe, faites-lui signe si vous voulez avoir une aide supplémentaire pour ces dites consignes.</alert>


<dots></dots>
<grostitre>Requis</grostitre>
<checklist>Créez-vous une fonction gérant l'affichage du Pokémon.
Lorsque le menu déroulant change de valeur, appelez votre fonction. Trouvez un moyen d'envoyer à votre fonction la valeur sélectionnée dans le menu déroulant. Par exemple:&nbsp;<em>"grass"</em>.
Dans votre fonction, retirez la classe&nbsp;<incode>.reveal</incode>&nbsp;du <incode>body</incode>, effacez le texte à l'intérieur de la balise&nbsp;<incode>.name</incode>.
<em>(*⚠️*)</em>&nbsp;Toujours dans votre fonction à la suite du point précédent, <a target="_blank" rel="noopener noreferrer" href="https://pokeapi.co/docs/v2#types" onclick="event.stopPropagation()">appelez PokéAPI</a> afin d'obtenir la liste des Pokémons correspondant au <strong>type&nbsp;</strong>reçu du menu déroulant.
<em>(*⚠️*)</em>&nbsp;Faites un console log du résultat reçu afin de vous assurer qu'il retourne bien un objet contenant des propriétés relatives au type de Pokémon&nbsp;sélectionné.
<em>(*⚠️*)</em>&nbsp;Si le résultat de l'état précédent est bon, plutôt que d'effectuer un console log dans l'étape précédente, déterminez le nombre de Pokémons reçus. Basez-vous sur ce nombre afin d'en piger un&nbsp;aléatoirement.
Faites un console log du Pokémon pigé afin de voir les propriétés que contient son&nbsp;objet.
À partir du Pokémon sélectionné, appelez à nouveau PokéAPI, mais cette fois utilisez l'URL fournie dans l'objet du Pokémon sélectionné lors de l'étape&nbsp;précédente.
Faites un console log du résultat. Vous devriez obtenir un objet JavaScript décrivant en détail le Pokémon&nbsp;sélectionné.
Ajoutez la classe&nbsp;<incode>.reveal</incode>&nbsp;au <incode>body</incode>&nbsp;<em>(déclenche l'ouverture de la pokéball)</em>. Insérez le nom de votre Pokémon dans la balise avec la classe&nbsp;<incode>.name</incode>
Insérez l'image de son sprite par défaut dans l'élément avec la classe&nbsp;<incode>.media</incode> 🌄.</checklist>

 


<dots></dots>
<grostitre>Bonus</grostitre>

<checklist>Ajoutez un menu déroulant supplémentaire laissant le choix du genre à l'usager&nbsp;<em>(masculin/féminin)</em>. Basez-vous ensuite sur cette information afin d'afficher le bon&nbsp;sprite.
Ajoutez un troisième menu déroulant supplémentaire permettant le choix entre les options&nbsp;<em>"Par défaut"</em>&nbsp;et&nbsp;<em>"Shiny"</em>. Combinez ce choix à celui du genre afin d'afficher le sprite correspondant du&nbsp;Pokémon.</checklist>








<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<intlink href="../../javascript/fetch-api/"></intlink>
<doclink href="https://smnarnold.com/cours/javascript/addeventlistener-intermediaire">AddEventListener() intermédiaire</doclink><br>
<doclink href="https://smnarnold.com/cours/javascript/classlist">ClassList</doclink><br>
<doclink href="https://smnarnold.com/cours/javascript/manipulation-des-contenus">Manipulation des contenus du DOM (éléments HTML)</doclink><br>
<doclink href='https://smnarnold.com/cours/javascript/objet-math'>L'objet Math</doclink>Permet de faire une pige aléatoire
