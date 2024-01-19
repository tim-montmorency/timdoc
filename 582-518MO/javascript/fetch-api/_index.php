<?php 
/**
 * @type     article
 * @title    Fetch API
 * @icon     images/ico-fetch.png
 * @abstract L'API Fetch: interface pour récupération de ressources à travers le réseau
 * @index 97
 */
?>
<p>Le Fetch API va chercher une ressource se trouvant sur un serveur et la ramène afin de pouvoir la manipuler.</p>

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
  

          <aside class="tool-card">
  <div class="tool-card__content">
    <em class="tool-card__tagline">🛠 Outil</em><br class="tool-card__break">
    <a href="https://github.com/public-apis/public-apis" target="_blank" rel="noopener noreferrer" class="tool-card__title">
      <strong>Public&nbsp;API</strong>
    </a>

        <p class="tool-card__description">Collection d’API public pour récupérer des informations sur divers&nbsp;sujets.</p>
      </div>

     
    </aside>
          <aside class="tool-card">
  <div class="tool-card__content">
    <em class="tool-card__tagline">🛠 Outil</em><br class="tool-card__break">
    <a href="https://jsonplaceholder.typicode.com/" target="_blank" rel="noopener noreferrer" class="tool-card__title">
      <strong>{JSON}&nbsp;Placeholder</strong>
    </a>

        <p class="tool-card__description">Outils offrant un API gratuit en ligne à des fins de tests et de&nbsp;prototypes.</p>
      </div>

     
    </aside>
       