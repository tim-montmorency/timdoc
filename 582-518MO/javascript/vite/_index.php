<?php

/**
 * @type     article
 * @title    Vite
 * @icon     images/Vitejs-logo.svg
 * @abstract Outil qui améliore l'expérience de développement front-end.
 * @index    30
 * @ref      web/outils
 */
?>

<p><a target="_blank" rel="noopener noreferrer" href="https://vitejs.dev/">Vite</a> est un outil qui améliore l'expérience de développement front-end. Il permet de configurer un environnement avec un serveur de développement, un "<em>builder"</em> et un "<em>hot-reload"</em>.  Autrement dit, le navigateur se rafraîchit dès que vous modifiez votre code, de façon similaire à ce que CodePen fait.</p>


<dots></dots>
<grostitre>Installation</grostitre>
<warning>Node et NPM sont nécessaire à l’installation de&nbsp;Vite. <intlink href='../npm/'></intlink>
</warning>

<ol start="1">
  <li>Choisissez le dossier où vous désirez créer votre projet. <br> <br> 
  
  Vous avez maintenant trois options:
  <ul>
    <li><p>Sur le dossier du projet, effectuez un clic droit en tenant la touche <incode>Shift</incode> enfoncée. Le menu contextuel devrait afficher l'option <em>"Open Windows Terminal Here"</em>.</p></li>
    
    <li><p>Ouvrir directement le terminal, inscrire <incode>cd</incode> pour <em>Change directory</em>, y glisser-déposer votre dossier et appuyer sur la touche <incode>↵</incode>.</p></li>

    <li><p><strong><em>RECOMMANDÉ:</em></strong> Ouvrir le dossier ou vous souhaitez créer votre projet dans Visual Studio Code et ensuite ouvrir le Terminal de Visual studio Code.</p></li>
  </ul>
  </li>
  <li><p>Maintenant que votre terminal se trouve dans votre dossier, vous pouvez lancer l'installation de Vite via la commande suivante:</p></li>
</ol>
<highlight lang='js'>npm init vite</highlight>


<ol start="3">
  <li><p>Vite vous demandera alors quelques questions de configuration afin de s'adapter à votre projet:</p>
      
    <ol start="1">
      <li><p>Installer le nécessaire: <incode>y</incode> pour yes.</p></li>
      <li><p>Nom donné au projet <incode>Demo</incode> ou tout autre nom pertinent (sans accent, ni espace, vous pouvez utiliser les tirets -.</p></li>
      <li><p>Nom du fichier package <incode>demo</incode> <em>(généralement similaire au projet, d'où pourquoi j'accepte la suggestion dans la vidéo)</em></p></li>
      <li><p>Si on compte utiliser un cadriciel JavaScript <em>(Vue, React, Svelte, etc.)</em> ou <em>Vanilla</em> si ce n'est pas le cas.</p></li
      ><li><p>Si Vanilla a été choisi, Vanilla pur ou Vanilla avec TypeScript?</p></li>
      <li><p>Vite télécharge et génère les fichiers de base à partir de nos réponses.</p></li>
    </ol>
  </li>
</ol>

<figure>
  <video src="images/vite-terminal-installation.mp4" autoplay="" muted="" loop="" style="display: block; margin: 0 auto;"></video>

  <figcaption class="caption caption--image">
    <p>Le terminal est généralement noir et blanc sur Windows et blanc et noir sur Mac, mais vous pouvez lui donner un thème de votre choix comme dans cet exemple.</p>
  </figcaption> 
</figure>


<info>Dans l’explorateur de fichiers, le dossier du projet devrait maintenant être visible et contenir quleques fichiers notamment <em>index.html</em>, <em>main.js</em> et&nbsp;<em>style.css</em>, <em>package.json</em> et même le dossier <em>node_modules</em>.</info>

<ol start="4">
  <li><p>Vite nous propose de nous déplacer dans notre nouveau dossier avec <incode>cd [nom de votre projet]</incode> et d'installer les dépendances NPM via <incode>npm install</incode>. En effectuant ces commandes, un nouveau dossier <em>node_modules</em> devrait apparaitre dans votre projet qui est maintenant prêt à l'utilisation.</p></li></ol>

<alert>
Si vous utilisez <em>git</em> et que vous avez un dossier <em>node_modules</em>, il sera impératif que vous ne le poussiez pas dans votre répertoire git public. Il faudra alors ajouter <em>node_modules</em> à <a href="../../git/gitignore/index.html#ignorer-un-dossier">votre fichier <em>.gitignore</em></a>

</alert>


<dots></dots>
<grostitre>Développement</grostitre>
<p>Pour commencer à développer (bref <em>entrer dans le mode développement</em>), vous devez dans votre terminal vous déplacer dans le dossier de votre projet. À partir de cet endroit, lancer la commande suivante:</p>


<highlight lang='bash'>npm run dev</highlight>



<p>Cette commande vous retournera l'adresse de votre site en développement. </p>

<p>Par exemple: <incode>http://localhost:3000/</incode></p>

<p>Ça y est, si vous changez quoi que ce soit dans vos fichiers, les changements apparaitront directement dans le navigateur!</p>

<img src="images/hello-vite.png" alt="">

<warning>Pour sortir du mode de développement, simplement tapper <span class='inline-code'>q</span> dans votre terminal et ensuite appuyer sur la touche <incode>↵</incode>.</warning>


<h3>Bref (pour le mode de développement)</h3>

Pour entrer dans ce mode:
<highlight lang='bash'>npm run dev</highlight>
Pour sortir de ce mode :
<highlight lang='bash'>
  q
  ↵
</highlight> Bref <incode>q</incode> suivi de <incode>↵</incode> Enter




<dots></dots>
<grostitre>Build</grostitre>
<p>La commande build de Vite permet de générer des fichiers optimisés dans le but d'accroitre leurs performances lorsque vous êtes prêt à déployer en production. Autrement dit, tous les éléments inutiles à un ordinateur <em>(sauts de ligne, espaces, etc.)</em> sont retirés, réduisant ainsi le poids de ces fichiers et donc leur vitesse de chargement.</p>

<p>Ces fichiers sont ensuite déposés dans un dossier <em>dist</em> à l'intérieur de votre projet que vous pouvez ensuite déposer sur votre serveur.</p>

<p>Pour exécuter cette commande, il suffit d'inscrire la commande suivante dans le terminal:</p>

<highlight lang='js'>npm run build</highlight>


<p>Les fichiers créés ont une clé ajoutée à leur nom dans le but d'éviter que les navigateurs de vos internautes leur servent une ancienne version de votre fichier se trouvant dans leur cache.</p>

<p>Ces noms sont automatiquement ajustés pour vous dans votre fichier <em>index.html</em>.</p>



<dots></dots>
<grostitre>SASS (ne pas en prendre compte pour Web 5)</grostitre>


<p>Par défaut, Vite ne supporte pas la syntaxe SASS. Si le fichier <em>style.css</em> est renommé <em>style.sass</em> ou <em>style.scss</em> une erreur sera retournée:</p>


<highlight lang='javascript'>Preprocessor dependancy "sass" not found. Did you install it?</highlight>


<p>Heureusement, il suffit d'installer la dépendance demandée via la commande suivante pour régler le problème:</p>


<highlight lang='js'>npm i sass --save-dev</highlight>

<p>Puisque le fichier <em>main.js</em> fait référence au fichier <em>style.css</em>, il faut changer dans celui-ci le nom.</p>


<highlight lang='js'>import './style.css' </highlight>
<p>par</p>
<highlight lang='js'>import './style.scss'</highlight>

<p>Dès que ce changement est effectué et que l'installation est complétée, il est possible de relancer le développement <incode>npm run dev</incode>. Vite supportera maintenant les fichiers <em>.sass</em> et <em>.scss</em>.</p>

<doclink href='https://vitejs.dev/guide/#scaffolding-your-first-vite-project'>Vite scaffolding</doclink>



<dots></dots>
<grostitre>Multipage</grostitre>
<p>Par défaut, Vite est prévu pour de ne supporter qu'une seule page <em>(index.html)</em>. Afin d'obtenir un site multipage, il faut créez à la racine de son projet un fichier de configurations <em>vite.config.js</em> définissant de nouveaux points d'entrée.</p>

<p>Par exemple, afin d'obtenir une 2e page intitulée <em>"about"</em>, il faut créer un dossier nommé <em>"about"</em>, y insérer une page <em>"index.html" </em>et finalement spécifier une nouvelle configuration à Vite lui indiquant l'existence de cette nouvelle page:</p>


<highlight lang='js'>const { resolve } = require('path')
const { defineConfig } = require('vite')

module.exports = defineConfig({
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        about: resolve(__dirname, 'about/index.html')
      }
    }
  }
})</highlight>


<p>Pour accéder à cette nouvelle page, il suffit de spécifier le nom du dossier dans l'URL. Par exemple: <incode>http://localhost:3000/about/</incode></p>


<alert> <em>Erreur fréquente</em> <br>
N’oubliez pas le <incode>/</incode> à la fin de l’URL, sinon la page par défaut&nbsp;affichera.</alert>


<doclink href='https://vitejs.dev/guide/build.html#multi-page-app'>Multipage</doclink>



<dots></dots>
<grostitre>Alternatives</grostitre>
<ul>
  <li><a target="_blank" rel="noopener noreferrer" href="https://www.snowpack.dev/">Snowpack</a></li>
  <li><a target="_blank" rel="noopener noreferrer" href="https://webpack.js.org/">Webpack</a></li>
  <li><a target="_blank" rel="noopener noreferrer" href="https://gulpjs.com/">Gulp</a></li>
  <li><a target="_blank" rel="noopener noreferrer" href="https://rollupjs.org/guide/en/">Rollup</a></li>
  <li>etc.</li>
</ul>
    