<?php 
/**
 * @type     article
 * @title    Fetch API
 * @icon     images/ico-fetch.png
 * @abstract L'API Fetch: interface pour récupération de ressources à travers le réseau
 * @index    97
 */
?>
<p>Le Fetch API va chercher une ressource se trouvant sur un serveur et la ramène afin de pouvoir la manipuler.</p>


<dots></dots>
<grostitre>Quelques utilisations classiques</grostitre>

<h3>Un formulaire web qui envoie des données</h3>
<p>Envoyer des données d'un formulaire qu'un utilisateur vient de remplir à l'écran via un Fetch avec requête POST, sans recharger la page en cours. </p>

<h3>Une composante d'une interface</h3>
Via un Fetch, une requête à un serveur externe peut-être faite de manière asyncrore et le contenu correspondant appraitra dans l'interface déjà présente lorsque le serveur distant aura eu le temps de répondre.</p>

<p>Par exemple, on peut penser à une application qui affiche la météo. Celle-ci utilisera un Fetch pour appeler une API comme OpenWeatherMap.</p>


<h3>Dans une application web: Simple Page Application (SPA)</h3>
<small>Source du graphique: <a href="https://tech-stack.com/blog/modern-application-development/" target="_blank" rel="noopener noreferrer">Tech-Stack</a></small>
<img src="images/simgle-page-app-API.png" alt="Single File App" style="box-shadow: 0 0 10px rgba(0,0,0,0.2);">

<p>Quelques exemples d'applications web SPA, les interfaces de: Gmail, Google Maps, Facebook, GitHub.</p>





<dots></dots>
<grostitre>La métaphore d'un Fetch API</grostitre>

<p>Imaginez un assistant que vous envoyez récupérer une commande&nbsp;📦. Vous lui donnez l’adresse&nbsp;🏭 où se trouve le colis et vous devez ensuite attendre qu’il revienne avec celui-ci . À son retour, vous lui dites qu’il s’agit de fleurs&nbsp;🌺🌹. Votre assistant entreprend donc d’ouvrir le colis&nbsp;📦 et de les mettre dans l’eau pour vous&nbsp;💐. Dès qu’il termine, vous obtenez votre bouquet et vous pouvez en faire ce que bon vous semble.</p>



<dots></dots>
<grostitre>Fetch API</grostitre>
<p>Fetch fonctionne sur le même principe. 
<br>-&nbsp;Vous lui donnez : l’<em>adresse URL</em> où se trouve
<br>-&nbsp;et ce que vous désirez (<em>quoi</em>)
<br>-&nbsp;vous devez ensuite <em>attendre</em> qu’il revienne avec les données trouvées. </p>

<p>À son retour, vous lui spécifiez le <em>type de fichier</em> qu’il est allé chercher afin qu’il les convertisse dans le <em>format désiré</em> <em>(JSON, image, etc.)</em>. Dès qu’il termine, vous obtenez votre fichier et vous pouvez en faire ce que bon vous semble.</p>

<dots></dots>

<p>Examinons la structure de base d'une requête au fetch API:</p>

<highlight lang="javascript">
fetch(url) // L'adresse URL des données à aller chercher
  .then(data => { // Attendre que les données soient reçues
    // Convertir les données au format désiré
  })
  .then(result => { // Attendre que les données soient converties
    // Faire du résultat ce que bon vous semble
  });
</highlight>

  
<br>
<p>Par défaut, le fetch API utilise la méthode GET, ce qui nous permet de simplement déclarer l'url de la ressource que nous désirons obtenir.</p>
  
  
Par exemple:
<highlight lang="javascript">
fetch("https://ex.smnarnold.com/json/acteurs/ryan-reynolds.json") 
  .then(data => data.json()) 
  .then(actor => { 
    console.log(actor);
  }); 
</highlight>




<dots></dots>
<grostitre>Anatomie</grostitre>
<p>Dans l'exemple précédente ☝️, nous avons:</p>


<ul>
    <li><p><incode>fetch(...)</incode>&nbsp;déclarant que <incode>fetch</incode> doit aller chercher le fichier à l'adresse fournie entre parenthèses et nous&nbsp;<a target="_blank" rel="noopener noreferrer" href="../promesses-js/">retourner une&nbsp;promesse</a>.</p></li>
    <li><p><incode>.then()</incode>&nbsp;ou en français&nbsp;<em>"ensuite"</em>&nbsp;attend que le serveur tienne sa promesse et nous&nbsp;réponde.</p></li>
    <li><p><incode>data</incode>&nbsp;nom donné à l'objet retourné par fetch&nbsp;<em>(ce nom est&nbsp;arbitraire, donc vous le nommez comme vous le souhaitez, dépendant de la valeur que vous allez chercher)</em>.</p></li>
    <li><p><incode>.json()</incode>&nbsp;indique que nous souhaitons appeler la méthode&nbsp;<incode>.json()</incode>&nbsp;de l'objet&nbsp;<incode>response</incode>, afin de convertir les données en&nbsp;JSON.</p></li>
    <li><p><incode>.then()</incode>&nbsp;attend que la promesse de conversion des données soit&nbsp;respectée.</p></li>
    <li><p><incode>actor</incode>&nbsp;correspond au nom donné au JSON reçu.&nbsp;<em>(Encore une fois, ce nom est&nbsp;arbitraire, donc vous le nommez comme vous le souhaitez, dépendant de la valeur que vous allez chercher)</em>.</p></li>
 </ul>






<h3 class="heading heading--h3" id="Exemple">Exemple</h3>

<p class="codepen" data-height="700" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="OJrYEop" data-user="tim-momo" style="height: 700px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/OJrYEop">
   Grid - grid-template-area</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>











<dots></dots>
<grostitre>Conversion de réponses</grostitre>
<p><incode>.blob()</incode>&nbsp;converti la réponse en blob&nbsp;<em>(utile pour les&nbsp;images)</em><br><incode>.text()</incode>&nbsp;converti la réponse en texte&nbsp;<em>(utile pour le&nbsp;XML)</em><br><incode>.json()</incode>&nbsp;converti la réponse en&nbsp;JSON</p>

<info>Dans la majorité des cas, nous utiliserons la méthode&nbsp;<incode>.json()</incode></info>



<p>>> EXERCICE 1 FOURNI EN CLASSE.</p>



<dots></dots>
<grostitre>Catch</grostitre>
<p>La méthode <incode>.catch</incode> permet d'indiquer quoi faire si le serveur ne répond pas ou s'il prend trop de temps à répondre.</p><p>Par exemple:</p>

<highlight lang="javascript">
fetch(url) // L'url de la ressource à aller chercher
  .then(() => { // Attendre que la ressource soit reçue, et ensuite (then)
    // Traiter la ressource
  })
  .catch(() => { // Oh, oh le serveur ne répond pas
    // Activer le plan B
  });
</highlight>

<br><br>
<p>>> EXERCICE 2 FOURNI EN CLASSE.</p>
<dots></dots>
<grostitre>Outils utiles</grostitre>
  
<tool href="../../tools/publicapi/"></tool>
<tool href="../../tools/jsonplaceholder/"></tool>
