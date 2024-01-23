<?php
/**
 * @type     article
 * @title    Google fonts
 * @icon     images/icon.webp
 * @abstract + de 850 polices gratuites
 * @ref      web/css
 */
?>
 <p class="spacer">Depuis 2010, le site <a target="_blank" href="https://fonts.google.com/">Google</a> fonts offre plusieurs centaines de polices <em>(+ de 850)</em> gratuitement, hébergées directement en ligne et prêtes à être utilisées.</p>

<p>Lorsqu'une police intéressante est trouvée, il suffit de cliquer sur le lien bleu <em>"+ Select this style"</em> afin de l'ajouter à la liste des polices qui seront importées. Plusieurs fontes peuvent être ajoutées dans une même liste. Il n'est pas nécessaire d'importer chacune d'entre elles séparément.</p>

<p>Lorsque toutes les polices désirées sont sélectionnées, le bouton  en haut à droite permet d'ouvrir le panneau d'importation.</p>

<dots></dots>


<grostitre>Importation standard</grostitre>

<p>La méthode standard est la méthode la plus performante et celle recommandée. Elle consiste à ajouter une balise <incode>&lt;link&gt;</incode> dans le <incode>&lt;head&gt;</incode> d'un fichier HTML.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;head&gt;
  &lt;link rel="preconnect" href="https://fonts.gstatic.com"&gt;
  &lt;link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"&gt;
  &lt;link rel="stylesheet" href="/styles/main.css"&gt;
&lt;/head&gt;</highlight>

<warning>Les balises de la police Google doivent apparaître avant celle de votre feuille de styles. Ainsi la police sera déjà importée quand vous y ferez référence.</warning>

<dots>Importation @import</dots>


<grostitre>Importation @import</grostitre>

<p>La méthode @import consiste à ajouter une balise <incode>&lt;style&gt;</incode> dans le <incode>&lt;head&gt;</incode> du fichier HTML. Cependant, cette méthode est moins performante que la <a href="#importation-standard">méthode standard</a>.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;style&gt;
  @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
&lt;/style&gt;</highlight>

<dots></dots>


<grostitre>Utilisation</grostitre>

<p>Et voilà, les fontes sont maintenant prêtes à être utilisées comme toute police normale simplement en utilisant leurs noms spécifiés dans le bas du panneau d'importation.</p>

<p>Par exemple:</p>

<highlight lang="css">.title { font-family: 'Roboto', sans-serif; }</highlight>

<dots></dots>


<knowmore href="https://developers.google.com/fonts/docs/getting_started">Billet débuter avec Google Fonts par Google.</knowmore>

<exercice href="exercices/bart/"></exercice>

<dots></dots>