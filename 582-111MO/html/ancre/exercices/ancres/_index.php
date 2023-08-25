<?php 
/**
 * @type     exercice
 * @title    Exercice sur les balises
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez recréer un site web.
 */
?>

<p>Utiliser les balises sémantiques pour structurer le contenu, appliquer le formatage HTML pour styliser le texte et créer des ancres <incode>&lt;a&gt;</incode> pour la navigation interne.</p>

<img src="./images/ancres.webp">

<grostitre>Intructions</grostitre>

<p>Considérez le texte suivant et suivez les instructions pour appliquer les balises sémantiques, de formatage HTML et les ancres <incode>&lt;a&gt; </incode>de manière appropriée.</p>

<grostitre>Texte</grostitre>

<em>
  <p>Bienvenue sur le site de notre musée virtuel consacré à l'histoire de l'art.</p>
  <p> Découvrez des œuvres d'artistes célèbres et plongez dans les différentes époques artistiques qui ont façonné notre culture.</p>
  
  <p>**Table des matières**</p>
  
  <p>1. Introduction</p>
  <p>2. L'Art de la Renaissance</p>
  <p>3. Impressionnisme et Post-Impressionnisme</p>
  <p>4. Mouvements du 20e siècle</p>
  <p>5. Artistes Contemporains</p>
  
  <p>Visitez notre page sur **L'Art de la Renaissance** pour en savoir plus sur les œuvres de léonard de Vinci et de Michel-Ange.</p>
  
  <p>Pour en apprendre davantage sur les peintres impressionnistes tels que Monet et Renoir, rendez-vous à la section sur **Impressionnisme et Post-Impressionnisme**.</p>
  
  <p>Si vous êtes intéressé par les mouvements artistiques du 20e siècle comme le surréalisme et l'expressionnisme, explorez la page dédiée aux **Mouvements du 20e siècle**.</p>
  
  <p>Enfin, ne manquez pas notre sélection d'œuvres contemporaines et les profils d'**Artistes Contemporains**.</p>
  
  <p>N'hésitez pas à nous contacter pour toute question ou pour planifier une visite guidée virtuelle.</p>
</em>

<dots></dots>

<grostitre>Lien pour CSS</grostitre>

<p>Copier et ajouter ce lien à l'intérieur de la balise <incode>&lt;head&gt;</incode></p>

 <incode>&lt; link href=&quot;./style.css&quot; rel=&quot;stylesheet &quot;&gt;</incode>
 
 <dots></dots>

 <grostitre>Code CSS</grostitre>

 <highlight lang="css">* {
  box-sizing: border-box;
  margin: 0;
}

header {
  padding-left: 40px;
  background-color: rgb(13, 67, 149);
  color: white;
}

nav {
  margin-top: 0;
  padding-bottom: 20px;
  padding-top: 20px;
  padding-left: 40px;
  background-color: rgb(196, 217, 248);
}

nav a {
  display: block;
  margin-bottom: 5px;
  text-decoration: none;
  color: blue;
}

body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
}

section {
  padding-left: 40px;
  padding-top: 20px;
  padding-bottom: 20px;
}

footer {
  background-color: black;
  color: white;
  padding: 40px;
}

h2 {
  font-weight: bold;
}
</highlight>

<dots></dots>

<grostitre>Tâches</grostitre>

<em>
  <h3>Création de la structure de base du document HTML</h3>
</em>

<checklist>
Commencez par créer un fichier HTML et CSS en ouvrant VS Code et en enregistrant le fichier index avec l'extension ".html" et le fichier style avec l'extension ".css". 
À l'intérieur du fichier, écrivez la déclaration <em>!DOCTYPE</em>  pour indiquer que vous créez un document HTML5. 
Ensuite, ouvrez la balise <em>html</em>. 
Dans la balise <em>head</em>, ajoutez le titre de la page entre les balises. 
Ajjouter le lien vers le fichier CSS dans <em>head</em>.
Enfin, ouvrez la balise <em>body</em> pour le contenu de la page.
</checklist>
<em>
  
  <h3>Ajout du contenu principal</h3>
</em>

<checklist>
Dans la section <em>body</em>, commencez par ajouter un en-tête avec un titre principal en utilisant la balise. 
Écrivez votre titre principal entre les balises <em>h1</em>. 
Ensuite, ajoutez une section pour la navigation, qui servira de table des matières. 
Dans cette section, vous pouvez écrire un titre de navigation entre les balises <em>h2</em>
</checklist>

<em>
  <h3>Ajout des liens de navigation interne</h3>
</em>

<checklist>
À l'intérieur de la balise <em>nav</em>, écrivez des liens <em>a</em> pour chaque section du contenu. 
Utilisez l'attribut <em>href</em> à l'aide du préfixe #. Par exemple : <em>href="#intro"</em>.
</checklist>

<em>
  <h3>Ajout des sections de contenu avec des ancres</h3>
</em>

<checklist>
À l'intérieur de la balise <em>article</em>, utiliser des sections individuelles. 
Dans chaque section, utilisez des balises <em>h2</em> pour les titres des sections et des paragraphes <em>p</em> pour le contenu. 
Pour créer des liens vers des sections spécifiques, utilisez la balise <em>a</em> avec l'attribut <em>href</em> (par exemple, <em>href="#intro"</em>).
</checklist>

<em>
  <h3>Footer</h3>
</em>
<checkliist>N'oubliez pas d'ajouter votre <em>footer</em>.</checkliist>

<dots></dots>



