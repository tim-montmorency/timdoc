 <?php

  /**
   * @type     article
   * @title    P1.3b Équipe - Couleurs
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
<checklist>
Si les dossiers sont disparus car git efface les dossier vides, recréez à la racine de votre projet, un dossier vendors et un dossier scss.
Téléchargez les fichiers source de Bootstrap pour avoir accès aux fichiers SASS :<a href="https://getbootstrap.com/docs/5.2/getting-started/download/#source-files" target="_blank" onclick="event.stopPropagation()">Fichiers sources Bootstrap</a>.
Veuillez le télécharger directement dans le dossier vendors de votre projet. Le dézipper.
Installer l’extension de VS Code Live SASS compiler de l’auteur "Glenn Marks"
Dans Vs Code / Préférences / Paramètres, dans la section Extentsion cliquez sur Live Sass Compiler, ensuite sur Modifier dans settings.json, et ajoutez au json la valeur suivante (voir le bloc de code ci-bas après la checklist), à la suite des autres valeurs, à l’intérieur des {} jaunes. 
Cliquez sur “Watch Sass” dans le bas de votre fenêtre pour déparer le compilateur de live Sass Compiler 
Créez-vous un fichier custom_bootstrap.scss dans le dossier scss. Dans ce fichier, vous allez importer le fichier /scss/bootstrap.scss qui se trouve dans le dossier bootstrap que vous avez téléchargé précédemment. 
Avant la ligne d'importation, vous pouvez ré-écrire les variable Bootstrap comme bon vous semble. (Vous pouvez simplement coller le SCSS que vous aviez copié dans HueMint).
Dans vos 2 fichiers HTML vous allez changer le lien vers le CSS de Bootstrap que vous aviez préalablement créé via le CDN et vous allez maintenant pointer vers le fichier css/custom_bootstrap.css nouvellement généré. Le JS lui demeure inchangé.
</checklist>

<h3>Code pour le #5</h3>
<p>Où savePath = le chemin d'accès vers votre dossier où sont vos feuilles de styles du projet</p>
<highlight lang='json'>"liveSassCompile.settings.formats": [ 
  {   

    "extensionName": ".css", 
    "savePath": "/css", 
  } 
], 
</highlight>


<h3>Notes de cours 📚</h3>
<intlink href="../../bootstrap/personnalisation-couleurs"></intlink> 

