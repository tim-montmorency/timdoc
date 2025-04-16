<?php 
/**
 * @type     exercice
 * @title    Carte auto-layout et convertie en HTML/CSS
 * @icon     images/thumb.png
 * @abstract Vous devrez configurer la carte est ses éléments en auto-layout dans Figma, explorer le code Flexbox généré via le DevMode et intégrer le tout en HTML+CSS dans VS Code.
 */
?>

<grostitre>🎯Exercice : Créer une carte de produit à partir d’un design Figma.</grostitre>


<grostitre>Matériel</grostitre>
<p><a href="https://www.figma.com/design/7Rzzo8tlV6FEfXH88Ut5fT/Exercice-auto-layout-carte-conference?node-id=0-1&t=3kI6keJV9zCLwN6s-1" target="_blank" rel="noopener noreferrer">Fichier de départ</a> (copiez ou dupliquez le dans votre Figma personnel pour démarrer).</p>

<mediafile src="./images/exercice-carte-conference.jpg">Photo de la salle de conférence</mediafile>


<dots></dots>
<grostitre>Aperçu du résultat 👇</grostitre>
<small>(lorqu'en HTML/CSS, le comportement responsive devrait aussi être le même)</small>
<clipasset src='images/demo-exercice-autolayout-carte.mp4'></clipasset>

<dots></dots>
<grostitre>Requis</grostitre>
<checklist>
  Ouvrir le fichier Figma. File / Save local copy. Importez ensuite ce fichier .fig dans votre compte Figma personnel.
 <strong>Préparer des auto-layouts</strong>: sur la carte et sur les groupes d'éléments pour faire en sorte qu'elle s'adapte en fonction de la démo ci-haut, lorsque redimensionnée. <br> <em>Votre tâche est facilitée puisque que la plupart des éléments sont déjà groupés ensemble. Vous n'aurez qu'à activer l'auto-layout principal et les sous auto-layouts et ajuster les paramètres pour chacun.</em> 
 N'oubliez pas de travailler la mise en place de l'image elle aussi responsive (et pssss🤫, ceci  génèrera sans doute des propriétés <incode>object-fit</incode>  et <incode>object-position</incode>), vous vous reconnaissez?🕵️‍♀️ 
 <strong>Extraire le code via Dev Mode</strong>.
  Dans VS Code, reproduire le HTML de cette carte et de tous les sous-groupes qu'elle contient. Utilisez le CSS généré par Dev&nbsp;Mode pour vous guider, mais en l’optimisant.
  Tester l’adaptabilité avec quelques modifications (ex. ajustement du flex-grow, ajout d’un breakpoint au besoin etc).
</checklist>

<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<intlink href='../../'></intlink>


