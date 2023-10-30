<?php
/**
 * @type     exercice
 * @title    Fetch API - Zoom UI
 * @icon     images/fetch-zoom.jpg
 * @abstract ecréer l’interface de l’application de vidéoconférence Zoom en mode galrie.
 */
?>


<p>Pour cet exercice, nous allons recréer l’interface de l’application de vidéoconférence <a href="https://zoom.us/" target="_blank>">Zoom</a>. Cette interface sera en mode "galerie", c'est-à-dire qu'on y verra les vignettes des différents participants à la rencontre Zoom.</p>

<p>Aperçu du résultat 👇</p>
<img src="images/fetch-zoom.jpg" alt="aperçu du résultat attendu.">


<dots></dots>
<grostitre>Matériel</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/GRPKBpX">Pen de départ</doclink>
<br>

<info>Les personnes affichées seront différentes dans votre exercice puisqu’elles sont&nbsp;aléatoires.</info>
<warning>Vous n’avez qu’à écrire du JavaScript <em>(nul besoin de modifier le HTML ou le&nbsp;CSS)</em>.</warning>




<dots></dots>
<grostitre>Requis</grostitre>
<checklist>Il faut préalablement récupérer les informations des personnes participant à la réunion. Pour ce faire, il faut utiliser&nbsp;<code>fetch</code>&nbsp;afin d'accéder à l'API de&nbsp;<a href="https://randomuser.me/" target="_blank">randomuser.me</a>&nbsp;à l'adresse&nbsp;suivante: <a href="https://randomuser.me/api?results=9" target="_blank">https://randomuser.me/api?results=9</a>
Une fois le résultat reçu, convertissez-le en&nbsp;JSON.
Faites un&nbsp;<code>console.log()</code>&nbsp;du JSON obtenu afin de voir ce qu'il contient&nbsp;exactement.
Bouclez sur toutes les personnes dans le JSON afin de générer leur aperçu HTML dans l'élément&nbsp;<code>.zoom</code>.
Affichez l'image large, le prénom et le nom de chaque&nbsp;personne.
Basez-vous sur les classes CSS déjà présentes afin de déterminer la structure HTML à&nbsp;reproduire.
</checklist>  










<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<?php intlink("../../javascript/fetch-api/") ?>
<doclink href="https://smnarnold.com/cours/javascript/boucle-foreach">Boucle forEach()</doclink><br>
<doclink href="https://smnarnold.com/cours/javascript/manipulation-des-contenus">Manipulation des contenus</doclink>


