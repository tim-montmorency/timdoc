<?php

/**
 * @type     article
 * @title    Couleurs et personnalisation
 * @icon     images/icon.png
 * @abstract Personnalisation des couleurs de base de Bootstrap
 */
?>


<grostitre>Intro</grostitre>


<doclink href='https://getbootstrap.com/docs/5.2/customize/color/'>Colors</doclink>

<dots></dots>

<grostitre>Utilisation de la palette de couleurs de base de Bootstrap</grostitre>

<p>En bref, vous pouvez utiliser les classes de couleur Bootstrap mais aussi les variables CSS de la palette de couleur de base Bootstrap. Pour les classes, voici un exemple d'utilisation:
</p>

<p class="codepen" data-height="510" data-theme-id="44168" data-default-tab="html,result" data-slug-hash="BaOzyrm" data-user="tim-momo" style="height: 510px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/BaOzyrm">
  Bootstrap - Couleurs de base</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<br>
<doclink href='https://getbootstrap.com/docs/5.2/customize/color/'>Colors</doclink>

<p> Pour les variables CSS, il vous suffit d'utiliser les noms de variables existantes. Ceci vous permettra de sauver beaucoup de temps à styliser dans un fichier CSS personnalisé.</p>
<p>Voici une liste de plusieurs variables que vous pouvez utiliser (couleurs et plus encore):</p>
<p class="codepen" data-height="500" data-theme-id="44168" data-default-tab="css" data-slug-hash="zYJBGYG" data-user="tim-momo" style="height: 500px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/zYJBGYG">
  Bootstrap - Couleurs de base</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<br>
<doclink href='https://getbootstrap.com/docs/5.2/customize/css-variables/'>CSS Variables</doclink>



<dots></dots>
<grostitre>🤔 Mais si je veux personnaliser ces couleurs?</grostitre>
<p>Il est possible de faire réécrire automatiquement tout le CSS de Bootstrap à partir de quelques personnalisations. Par exemple, si on veut changer la couleur <span style="color: #0d6efd;">primary</span> et la couleur  <span style="color: #6c757d;">secondary</span> qui sont utilisées et appliquées sur de multiples composantes de base de Bootstrap, comme les boutons, les liens, les éléments de formulaires, les accordéons etc.</p>

<p>Comment? Bien vous pouvez, dans votre fichier .css personnel réécrire par exemple:</p>

<highlight lang='css'>.btn-primary{
  background-color: #f36b62 !important;
  color: #fff8f0 !important;
}
.btn-secondary{
  background-color: #66d7d1 !important;
}</highlight>

<p>...mais l'utilisation du <code>!important</code> un peu partout n'est vraiment pas optimal et vous devez réécrire les styles pour chaque élément qui utilise la couleur primary ou secondary, c'est super fastidieux comme technique.</p>

<h3>Utilisation de <em>SASS (Syntactically Awesome Style Sheets)</em> à des fin de personnalisation de Bootstrap</h3>

<p>Vous pourriez simplement réécrire la valeur de certaines variables Bootstrap en format <em>SASS</em> et ensuite recompiler le <em>SASS</em> complet de Bootstrap dans le format CSS. Ainsi, cela vous donne la possibilité de personnaliser plusieurs aspects dont les couleurs. Par la suite vous continuez simplement d'utiliser les mêmes classes ou les même variables CSS que Bootstrap utilise et dorénavant tout sera changé avec votre palette de couleurs personnalisée!</p>

<info>À noter que Sass comprends 2 syntaxes différentes, soient <em>SCSS</em> et <em>SASS</em>, les deux sont en fait le même langage. Dans le cadre du cours, allons utiliser le format <em>SCSS</em>, il se peut que parfois je mentionne Sass ou <em>SCSS</em> mais considérez que c'est un peu la même chose.</info>

<h3>Les étapes</h3>
<ol>
  <li>Télécharger les <a href="https://getbootstrap.com/docs/5.2/getting-started/download/#source-files">fichiers sources</a> de Bootstrap pour avoir accès aux fichiers <em>Sass</em>. Ajoutez le dossier des fichiers source de Bootstrap dans votre dossier de projet (je vous propose de le déposer dans un dossier nommé <em>vendors</em>)
</li>
  <li>Créer un fichier .scss dans lequel vous allez réécrivez la valeur de certaines variables Bootstrap existantes.
    <highlight lang='scss'>$blue:         #3b7e9d;
$border-radius:0.4rem;
$primary:      #f36b62
$secondary:    #5f5f71

ou dans ce format:
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

  </li>
  <li>Importez ensuite la le <em>SCSS</em> de Bootstrap dans votre fichier <em>SCSS</em> (ajustez le chemin d'accès) selon votre configuration de projet: 
    <highlight lang='scss'>@import 'vendors/bootstrap-5.2.3/scss/bootstrap.scss'</highlight>
  </li>
  <li>Compilez votre fichier <em>SCSS</em> en format <em>css</em> (j'utilise personnellement l'extension de VSCode <a href="https://marketplace.visualstudio.com/items?itemName=glenn2223.live-sass">Live Sass Compiler</a> de Glenn Marks). Ça créera un nouveau fichier .css dans votre projet.
  </li>
  <li>Changez le lien <link> du Bootstrap.css dans vos fichier HTML pour pointer dorénavant vers votre nouveau fichier .css (celui qui vient d'être compilé à l'aide du fichier scss.</li>
</ol>

<warning>Si vous utilisez une extension VS Code pour compiler le <em>SCSS</em> en CSS, il est possible que vous ayez à modifier les paramètres de l'extension pour lui mentionner l'endroit où vous souhaitez sauvegarder le fichier .css compilé (son "savePath"), pour ce faire il suffit d'aller modifier les paramètres de l'extension en éditant le settings.json, en ajoutant le code suivant, ou la valeur de savePath sera le chemin d'accès absolu ou vous souhaitez enregistrer le fichier css compilé.
</warning>
<highlight lang='json'>"liveSassCompile.settings.formats": [ 
  {  
    "extensionName": ".css", 
    "savePath": "/css"
  } 
]</highlight>



<h3>Outil sympathique pour générer une palette de couleur sur les variables de bases de Bootstrap</h3>
<tool href="../tools/huemint/"></tool>




<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

