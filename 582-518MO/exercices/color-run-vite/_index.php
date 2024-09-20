<?php
/**
 * @type     exercice
 * @title    Color Run
 * @icon     images/thumb.png
 * @abstract Recréer une composante permettant d’afficher le classement final à la Color Run.
 */
?>

<p>Pour cet exercice, vous devrez recréer une composante permettant d’afficher le classement final des participants à la <a href="https://thecolorrun.com/" target="_blank">Color&nbsp;Run</a>.</p>

<p>Aperçu du résultat 👇</p>
<small>Pour contrôler la vidéo, clic-droit et "Afficher toute les commandes".</small>
<clipasset src="medias/color-run-resultat.mp4"></clipasset>
<small>Pour la portion "clic sur image" (requis #17 et #18), ne vous fiez pas à la démo-ci haut. <br>Imaginez plutôt que le cercle s'agrandit de 10%.</small>

<dots></dots>

<info>Cet exercice se réalise dans Visual Studio Code.</info>

<dots></dots>

<grostitre>Matériel</grostitre>
<h3  id="Medias 🖼️">Médias 🖼️</h3>
<mediafile src="https://t.smnarnold.com/color-run/_base.scss">_base.scss</mediafile>
<small>Si vous n'arrivez pas à le télécharger, copiez l'url ci-dessus, ouvrez un nouvel onglet et collez l'url dans la barre d'url du navigateur + ENTER. Copiez ensuite le contenu de la page, ouvrez un nouveau fichier dans Visual Studio Code, collez le contenu. Enregistrer le fichier sous ce nom : <em>_base.scss</em>.</small>



<dots></dots>
<grostitre>Configurations</grostitre>
<checklist>
  Créez un projet <em>Vite</em> et donnez-lui comme nom <em>votreprénom-votrenomdefamille-colorrun</em> tout en minuscules et sans espace. Par exemple: <em>ouellet-mariemichelle-colorrun</em>. Faites aussi en sorte que votre projet supporte SCSS puisque nous l'utiliserons dans les prochaines étapes. 
  Collez le code suivant dans votre fichier HTML:</checklist>
<!-- <br> <br> Si vous êtes incapable de réaliser cette étape, créez vous un dossier de projet dans Visual Studio Code, nommez le correctement, créez un fichier styles.scss et index.html. Utilisez l'extension appropriée pour compiler votre SCSS en CSS. -->
<highlight lang="html">&lt;div class=&quot;results&quot;&gt;
  &lt;div class=&quot;runner runner--blue&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/color-run-vite/medias/1.png&quot; class=&quot;runner__picture&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;runner runner--green runner--active&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/color-run-vite/medias/2.png&quot; class=&quot;runner__picture&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;runner runner--yellow&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/color-run-vite/medias/3.png&quot; class=&quot;runner__picture&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;runner runner--pink&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/color-run-vite/medias/4.png&quot; class=&quot;runner__picture&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;runner runner--orange&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/color-run-vite/medias/5.png&quot; class=&quot;runner__picture&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;runner runner--geraldine&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/color-run-vite/medias/6.png&quot; class=&quot;runner__picture&quot;&gt;
  &lt;/div&gt;
&lt;/div&gt;</highlight>

<warning>Vous n’avez PAS le droit de modifier le code HTML ci-dessus&nbsp;👆</warning>


<dots></dots>
<grostitre>Requis</grostitre>
<checklist>Téléchargez et déposez le fichier _base.scss (voir section matériel au début de cette page) dans votre projet : créez un dossier nommé de façon pertinente pour ce type de fichier et déposez le fichier dans ce dossier 📁.
Utilisez la variable&nbsp;<incode>$bg</incode>&nbsp;du fichier&nbsp;<incode>_base.scss</incode> comme couleur de fond de la page.
Le bloc contenant tous les coureurs sera le conteneur de la grille de mise en page.
Ce bloc contenant tous les coureurs doit prendre toute la largeur de l'écran, jusqu'à concurrence de 1000px de large, être centré horizontalement dans la page ↔️, avoir une marge intérieure de 20px de tous les côtés et une marge extérieure verticale de 50px.<br><br>Attention de faire en sorte que la dimension totale soit bien de 1000px incluant les marges intérieures.
Appliquez la mixin <em>runner</em> à chacun des coureurs.
Faites en sorte que l'image de chaque coureur prenne tous l'espace disponible dans son parent et soit parfaitement ronde. <br><br>Attention, vous devez utiliser l'imbrication et la nomenclature BEM pour sélectionner l'image afin de lui attribuer ses styles CSS.
Créez une boucle <em>for</em> en SCSS afin de sélectionner chacun des coureurs.
À l'intérieur de cette boucle, faites afficher la position de chacun des coureurs dans une bulle de 1 à 6 en noir sur un fond blanc ⚪️ en haut à droite de ceux-ci. La bulle doit avoir une dimension de 40x40px et le texte à l'intérieur doit-être centré horizontalement ↔️ et verticalement ↕️. 
Vous devez aussi utiliser cette boucle afin d'assigner chacun des coureurs à un espace (une zone) dans la grille. Ces espaces (zones) seront nommés no1, no2, no3… jusqu'à no6. 
Utilisez les espaces de grille que vous venez de créer afin de positionner, le coureur en 1<sup>re</sup> position seul sur la première ligne. Les 2 suivants sur la 2<sup>e</sup> ligne, les 3 derniers sur la 3<sup>e</sup> ligne et ajoutez un espace de 20px entre chacun d'eux.
Sur un écran d'une largeur de 375px et plus, faites en sorte que le 2<sup>e</sup> et 3<sup>e</sup> coureur s'affichent à la droite du premier et que les trois derniers s'affichent en dessous d'eux.
Sur un écran d'une largeur de 700px et plus, faites en sorte que tous les coureurs aillent la même taille et s'affichent sur la même ligne.
Utilisez maintenant une boucle SCSS à partir de la variable&nbsp;<incode>$colorsArr</incode>&nbsp;contenue dans le fichier&nbsp;<incode>_base.scss</incode>&nbsp;et sélectionnez chacun des coureurs.<br><br>Pour tester votre boucle, vous pouvez temporairement changer la couleur de fond du coureur par celle à la position courante dans la boucle.
À l'intérieur de cette boucle, créez une variable SCSS. Cette variable devra contenir la couleur courante de la boucle, mais son hue devra être augmenté de 50.
Toujours dans votre boucle SCSS, créez un dégradé de haut en bas à partir de la couleur courante dans la boucle vers celle contenue dans la variable SCSS que vous venez de créer.
Utilisez l'imbrication SASS afin de créer la classe modificateur&nbsp;<incode>runner--active</incode>. Celle-ci doit faire grossir de 10% le coureur l'ayant.
Ajoutez un fichier script.js dans votre projet. En JavaScript, faites en sorte que lorsqu'un coureur se fait cliquer dessus, il reçoive la classe&nbsp;<incode>runner--active</incode>. Attention, il ne peut y avoir qu'un seul coureur actif à la fois. Autrement dit, cette classe ne doit jamais être sur deux coureurs en même temps.</checklist>









<dots></dots>
<grostitre>Remise</grostitre>
<ul>
    
    <li>
        <p>Compressez ensuite votre dossier de travail en <a target="_blank" rel="noopener noreferrer"
                href="https://www.ezyzip.com/">fichier&nbsp;zip 🗜</a></p>
    </li>
    <li>
        <p>Envoyez-moi un <a target="_blank" rel="noopener noreferrer"
                href="https://teams.microsoft.com/l/chat/0/0?users=mariem.ouellet@cmontmorency.qc.ca">message privé
                sur Teams</a> contenant votre fichier&nbsp;zip.</p>
    </li>
</ul>


