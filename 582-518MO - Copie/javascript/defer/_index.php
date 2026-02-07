<?php 
/**
 * @type     article
 * @title    script defer
 * @icon     images/classe-js3.png
 * @abstract defer permet de différer l'exécution du script à la fin du chargement du document.
 * @index    80
 * @ref      web/javascript
 */
?>

<grostitre>Defer</grostitre>

<p>L'attribut <incode>defer</incode> de la balise <incode>&lt;script&gt;</incode> dans le code HTML indique au navigateur de <em>charger un script en parallèle</em> avec le traitement du reste de la page, mais d'exécuter le script uniquement <em>après que l'analyse du code HTML</em> soit entièrement terminée et que le DOM soit construit. Cela évite de bloquer le rendu de la page, améliorant ainsi les performances de chargement. </p>

<p>Contrairement à <incode>async</incode>, <incode>defer</incode> <em>garantit que les scripts s'exécutent dans l'ordre où ils apparaissent dans le code HTML</em>. </p>

<p>
<incode>async</incode> : charger/exécuter les scripts de façon asynchrone. <br>
<incode>defer</incode> : différer l'exécution à la fin du chargement du document.
</p>

<highlight lang='html'>
<script src="./assets/script1.js" defer></script>
<script src="./assets/script2.js" defer></script>
</highlight>



<dots></dots>

<grostitre>Avec Vue.js</grostitre>

<p>Je vous ai toujours enseigné à ajouter les balises <incode>&lt;script&gt;</incode> avant la fermeture de la balise <incode>&lt;/body&gt;</incode>, apr;es avoir chargé le reste du HTML. Ceci permet un meilleure performance de chargement puisqu'on priorise le chargement contenu visible avant l'interactivité.</p>

<p>Cependant, lorsqu'on travaille avec <em>Vue.js</em>, étant donné que le HTML contient des instructions Vue qui ne font pas partie du vrai HTML <incode>v-if</incode>,  <incode>v-for</incode>, <incode>v-show</incode>, <incode>v-model</incode> etc, il faut charger la livrarie avant. Donc, l'idéal dans ce cas est de ramener vos balises <incode>&lt;script&gt;</incode> dans le <incode>&lt;head&gt;</incode> tout en prenant soin d'ajouter l'attribut <incode>defer</incode> sur la balise scr<incode>&lt;script&gt;</incode> ipt qui installe Vue.js et sur la balise <incode>&lt;script&gt;</incode>  qui lie le fichier javascript de votre site web.</p>


<highlight lang='html'>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Démo pour script à chargement différé</title>
    <!-- Toujours ajouter les librairies externes AVANT les scripts internes du site -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js" defer></script>

    <!-- Liste des scripts internes (seront exécutés dans le même ordre que présenté ici) -->
    <script src="./assets/script1.js" defer></script>
    <script src="./assets/script2.js" defer></script>
</head>
<body>
    
</body>
</html>
</highlight>

