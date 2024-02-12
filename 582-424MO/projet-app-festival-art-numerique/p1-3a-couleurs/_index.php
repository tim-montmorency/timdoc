 <?php

  /**
   * @type     article
   * @title    P1.3a Équipe - Couleurs
   * @icon     images/icon.svg
   * @abstract Personnalisation des couleurs de Bootstrap
   */
  ?>


<grostitre>Générez la palette selon les variables de couleur Bootstrap</grostitre>
<checklist>
Regénérez vous une palette de couleur: <a href="https://huemint.com/bootstrap-basic/" target="_blank" onclick="event.stopPropagation()">HueMint</a>
Cliquez sur la 3e pastille ronde en entête et y ajouter le code hexadécimal de votre couleur principale. Ensuite cliquez sur lock. Ensuite générez jusqu'à obtention d'un résultat qui vous inspire. 
Descendez en bas de la page et copier le code SCSS.
</checklist>
<dots></dots>
<grostitre>Créez votre SCSS pour ré-écrire la valeur de couleurs des variables Bootstrap.</grostitre>
<warning>Ajoutetz le dossiers <em>vendors/</em> à votre fichier <em>.gitignore</em></warning>
<checklist>
Si les dossiers sont disparus car git efface les dossier vides, recréez à la racine de votre projet, un dossier <em>vendors</em> et un dossier <em>scss</em>.
Téléchargez les fichiers source de Bootstrap pour avoir accès aux fichiers SASS : <a href="https://getbootstrap.com/docs/5.3/getting-started/download/#source-files" target="_blank" onclick="event.stopPropagation()">Fichiers sources Bootstrap</a>.
Veuillez le télécharger directement dans le dossier <em>vendors</em> de votre projet. Le dézipper.
Installer l’extension de VS Code nommée <em>Live SASS Compiler</em> de l’auteur "Glenn Marks"
Cliquez sur <em>Watch Sass</em> dans le bas de votre fenêtre pour déparer le compilateur de <em>Live Sass Compiler</em> 
Créez-vous un fichier <em>custom_bootstrap.scss</em> dans le dossier <em>scss</em>. Dans ce fichier, vous allez importer le fichier <em>scss/bootstrap.scss</em> qui se trouve dans le dossier <em>bootstrap</em> que vous avez téléchargé précédemment. 
Avant la ligne d'importation, vous pouvez ré-écrire les variables Bootstrap comme bon vous semble. (Vous pouvez copier le SCSS que vous aviez généré dans HueMint). Par contre, veuillez l'écrire dans les deux formats comme montré ci-après les requis.
Dans vos 3 fichiers HTML, vous allez changer le lien vers le CSS de Bootstrap que vous aviez préalablement créé via le CDN et vous allez maintenant pointer vers le fichier <em>scss/custom_bootstrap.css</em>  nouvellement généré. Le JS lui demeure inchangé.
</checklist>

<highlight lang="scss">
dans ce format: 
$light:        #bfe5df;
$dark:         #201d40;
$primary:      #f36b62;
$secondary:    #5f5f71;
$info:         #20b4a8;
$success :     #63af0e;
$warning :     #ffc377;
$danger :      #f60568;

et dans ce format:
$theme-colors: (
    "light":      #bfe5df,
    "dark":       #201d40,
    "primary":    #f36b62,
    "secondary":  #5f5f71,
    "info":       #20b4a8,
    "success":    #63af0e,
    "warning":    #ffc377,
    "danger":     #f60568,
);
</highlight>

<!--


Anciennement #5 dans els requis

Dans Vs Code / Préférences / Paramètres, dans la section Extentsion cliquez sur Live Sass Compiler, ensuite sur Modifier dans settings.json, et ajoutez au json la valeur suivante (voir le bloc de code ci-bas après la checklist), à la suite des autres valeurs, à l’intérieur des {} jaunes. 


------
<h3>Code pour le #5</h3>
<p>Où savePath = le chemin d'accès vers votre dossier où sont vos feuilles de styles du projet</p>
<highlight lang="json">"liveSassCompile.settings.formats": [ 
  {   

    "extensionName": ".css", 
    "savePath": "/css", 
  } 
], 
</highlight> -->




<h3>Notes de cours 📚</h3>
<intlink href="../../bootstrap/personnalisation-couleurs"></intlink> 

