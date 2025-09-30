<?php
/**
 * @type     exercice
 * @title    Jeu du défenseur - chevalier
 * @icon     images/thumb.png
 * @abstract Recréer une interface permettant de configurer l’armure d’un chevalier.
 */
?>

<p>Pour cet exercice, vous devez recréer une interface permettant de configurer l’armure d’un chevalier&nbsp;⚔️.</p>

<p>Aperçu du résultat 👇</p>
<clipasset src="images/chevalier-resultat.mp4"></clipasset>


<grostitre>Matériel</grostitre>
<a href="images/prenom-nom.zip" target="_blank" rel="noopener noreferrer" download="" class="starting-files">Dossier de départ 📁</a>



<h3>Couleurs 🎨</h3>
<table class="table-couleurs">
    <tr>
        <td>Brun</td>
        <td>
            <color>#662300</color>
        </td>
    </tr>
</table>



<h3 class="heading heading--h3" id="Médias 🖼️">Médias 🖼️</h3>
   <p>Téléchargez tout d'un coup:</p> 
<mediafile src="images/all.zip">TOUT</mediafile>
<br>
<p>ou à la pièce:</p>

<mediafile src="images/brick.png">Brique</mediafile>
<mediafile src="images/0.png">0</mediafile>
<mediafile src="images/1.png">1</mediafile>
<mediafile src="images/2.png">2</mediafile>
<mediafile src="images//3.png">3</mediafile>
<mediafile src="images/4.png">4</mediafile>
<mediafile src="images/5.png">5</mediafile>
<mediafile src="images/6.png">6</mediafile>
<mediafile src="images/7.png">7</mediafile>
<mediafile src="images/casque.png">casque</mediafile>
<mediafile src="images/plastron.png">plastron</mediafile>
<mediafile src="images/cuissard.png">cuissard</mediafile>



<dots></dots>
<grostitre>Requis CSS</grostitre>

<alert>Dans votre code, vous devez obligatoirement ajouter une ligne de commentaire de début et de fin pour définir à quelle étape des requis le bloc de code correspond. Voici un exemple:</alert>
<highlight lang="css">/*** DÉBUT requis CSS #1 ***/ 
.timeline{
    color: purple;
    border: 1px solid blue;
}
.year{
    font-size: 40px;
    font-weight: 900;
}
/**** FIN requis CSS #1 ****/</highlight>

<checklist>Faites en sorte que l'image de brique se répète en arrière-plan de votre page 🧱.
Ajoutez la police <a target="_blank" rel="noopener noreferrer" href="https://fonts.google.com/specimen/Press+Start+2P">Press Start 2P</a>, seulement de graisse "régulière", à votre page. Utilisez la comme police par défaut pour tous vos textes. Au passage faites en sorte qu'ils soient tous centrés, aille une taille de 10px et qu'ils soient blanc par défaut.
Créez la zone principale de votre interface. Celle-ci devra être centrée horizontalement ↔️ et verticalement ↕️, avoir un fond noir, une marge intérieure de 25px, une bordure de 15px brune et une largeur de 450px <em>(incluant la marge intérieure et la bordure)</em>.
La zone principale de votre interface doit être une grille CSS de 3 colonnes de large par 4 rangées de haut, ayant un espace vide de 20px verticalement ↕️ entre chaque rangée.
Ajoutez un champ texte. Celui-ci devra prendre une largeur équivalente à 3 colonnes.
Affichez les textes <em>"Defense"</em>, <em>"Poids"</em> et <em>"Chevalier"</em> dans les 3 prochaines cellules de votre grille et attribuez la taille 20px à leurs valeurs affichées sous ceux-ci.
Ajoutez l'image 0 du personnage et faites en sorte que celle-ci soit centrée et prenne 3 colonnes de large.
À l'intérieur des 3 avant-dernières cellules, affichez les images du casque, du plastron et du cuissard. Lorsque ces images reçoivent la classe <em>"is-active"</em>, leur opacité doit diminuer de moitié et leur taille doit réduire à un équivalent de 80%.</checklist>



<dots></dots>
<grostitre>Requis Vue</grostitre>

<alert>Dans votre code, vous devez obligatoirement ajouter une ligne de commentaire de début et de fin pour définir à quelle étape des requis le bloc de code correspond. Voici un exemple:</alert>

<highlight lang="javascript">/*** DÉBUT requis VUE.JS #1 ***/ 
console.log('Bienvenue VUE.js');
/**** FIN requis VUE.JS #1 ****/</highlight>

<checklist>Importez le cadriciel Vue via CDN dans le projet et connectez votre app Vue au HTML. Attention de bien importer la version 3.
Créez une composante intitulée "equipement". Cette composante devra être utilisée afin de générer l'aperçu de chaque pièce d'armure (casque, plastron et cuissard) disponible via une boucle Vue se basant sur les informations disponibles dans les données fournies.
Lorsque cliqué, l'aperçu d'une pièce d'armure doit se voir ajouter la classe <em>"is-active"</em> changeant ainsi son apparence <em>(voir les requis CSS)</em>. Ceci devra être syncronisé avec la propriété booléenne <em>wearing</em> déjà existante.
Utilisez des propriétés calculées afin d'afficher en temps réel le nombre de points de défense ainsi que le poids total des pièces d'armure lorsqu'elles sont ajoutées/retirées. Attention, seules les pièces ajoutées permettent d'obtenir des points de défense et compte dans le poids total.
Utilisez une propriété calculée se basant sur le nombre de points de défense du joueur afin d'afficher l'image du chevalier appropriée. <br><br>Par exemple, lorsque le joueur à 0 point de défense, l'image <incode>https://ex.smnarnold.com/vue/chevalier/0.png</incode>, où le chevalier n'a aucune pièce d'armure, devrait être affiché. <br><br>À l'opposée, si le chevalier à 7 points de défense, l'image avec l'armure complète <incode>https://ex.smnarnold.com/vue/chevalier/7.png</incode> devrait être affichée.
Faites en sorte que le nom inséré dans le champ texte se synchronise avec la donnée <em>name</em> et s'affiche sous la mention <em>chevalier</em>.</checklist>
<!--
2023
<checklist>Importez le cadriciel Vue via CDN dans le projet et connectez votre app Vue au HTML. Attention de bien importer la version 3.
Générez l'aperçu de chaque pièce d'armure <em>(casque, plastron et cuissard)</em> via une boucle Vue se basant sur les informations disponibles dans les données fournies. 
Lorsque cliqué, l'aperçu d'une pièce d'armure doit se faire ajouter la classe <em>"is-active"</em> changeant ainsi son apparence <em>(voir les requis CSS)</em>. Ceci devra être syncronisé avec la propriété booléenne <em>wearing</em> déjà existante.
Utilisez des propriétés calculées afin d'afficher en temps réel le nombre de points de défense ainsi que le poids total des pièces d'armure lorsqu'elles sont ajoutées/retirées. Attention, seules les pièces ajoutées permettent d'obtenir des points de défense et compte dans le poids total.
Utilisez une propriété calculée se basant sur le nombre de points de défense du joueur afin d'afficher l'image du chevalier appropriée. <br><br>Par exemple, lorsque le joueur à 0 point de défense, l'image <incode>https://ex.smnarnold.com/vue/chevalier/0.png</incode>, où le chevalier n'a aucune pièce d'armure, devrait être affiché. <br><br>À l'opposée, si le chevalier à 7 points de défense, l'image avec l'armure complète <incode>https://ex.smnarnold.com/vue/chevalier/7.png</incode> devrait être affichée.
Faites en sorte que le nom inséré dans le champ texte se synchronise avec la donnée <em>name</em> et s'affiche sous la mention <em>chevalier</em>.</checklist>
-->

<warning>Des noms longs pourraient briser l’affichage. C’est normal. Tenez-vous en a des noms courts, tel que: Steve, Paul, Karl&nbsp;etc.</warning>







<dots></dots>
<grostitre>Remise</grostitre>

<checklist>Renommez votre dossier de travail 📁 au format&nbsp;suivant:<br><incode>[nom de famille]_[prénom]-exa47</incode><br>ex: <em>mariemichelle-ouellet</em>
Compressez ensuite votre dossier de travail en <a href="https://www.ezyzip.com/" target="_blank" rel="noopener noreferrer">fichier&nbsp;zip 🗜</a>
Remettez votre fichier .zip dans le "Devoir" correspndant sur Teams.</checklist>
.
