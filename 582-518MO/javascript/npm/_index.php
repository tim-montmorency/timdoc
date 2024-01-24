<?php 
/**
 * @type     article
 * @title    NPM
 * @icon     images/icon.png
 * @abstract Gestionnaire de paquets JS
 * @index    30
 * @ref      web/javascript
 */
?>

<p>npm ou, <em>Node Package Manager</em>, est de loin le plus gros gestionnaire de paquets JavaScript en ligne avec plus d’un million de paquets disponibles. À la base, son rôle consistait à télécharger et gérer les dépendances d’un projet <em>Node.js</em>. Cependant, avec le temps il est aussi devenu un outil permettant de gérer ses dépendances JavaScript du côté client.</p>
<p>Il est probable que vous, vous soyez déjà dit:</p>

<blockquote>Je ne suis sûrement pas le premier à vouloir faire X en JavaScript?</blockquote>

<p>Et vous aviez probablement raison! C’est exactement la problématique que tente de régler npm en permettant d’inclure des scripts déjà réalisés par d’autres développeurs à même son propre code. Cesdits scripts sont alors appelés paquets et permettent d’éviter de réinventer la roue à chaque fois qu’une fonctionnalité doit-être ajoutée.</p><p>Pour presque tous vos besoins en JavaScript, vous pouvez trouver une solution sur npm!</p>



<dots></dots>
<grostitre>Installation de Node.js</grostitre>
<p>D'abord installez node.js.</p>
<p>Pour vérifier son installation sur un poste ou simplement pour voir son numéro de version, il est possible de taper dans un terminal la commande:</p>
<highlight lang='cmd'>node -v</highlight>
<p><incode>-v</incode> comme dans <em>"version"</em>.</p>

<p>S'il n'est pas installé, il est conseillé de l'installer via un <a href="https://docs.npmjs.com/downloading-and-installing-node-js-and-npm#using-a-node-version-manager-to-install-nodejs-and-npm" target="_blank" rel="noopener noreferrer">Node Version Manager</a>. </p>

<!-- https://docs.npmjs.com/downloading-and-installing-node-js-and-npm -->
<dots></dots>
<grostitre>Installation de NPM</grostitre>
<p>npm est automatiquement installé avec Node.js. Il n’est donc pas nécessaire de l’installer.</p>

<p>Pour vérifier son installation sur un poste ou simplement pour voir son numéro de version, il est possible de taper dans un terminal la commande:</p>

<highlight lang='cmd'>npm -v</highlight>

<p><incode>-v</incode> comme dans <em>"version"</em>.</p>

<doclink href='https://docs.npmjs.com/cli/v7/commands/npm-version'>Version NPM</doclink>



<dots></dots>
<grostitre>Package.json</grostitre>
<p>Pour utiliser npm, il faut premièrement créer un fichier <em>package.json</em> à la racine dudit projet. Ce fichier permet de stocker des informations relatives au projet. Notamment: son nom, son auteur, son numéro de version, etc. mais surtout les dépendances JavaScript nécessaires à son fonctionnement.</p>
<p>Pour créer ce fichier, il faut ouvrir le dossier du projet dans un terminal.</p>

<info>La façon la plus simple d’ouvrir un terminal à même le dossier d’un projet est d’ouvrir le dossier du projet dans Visual Studio Code et d’ouvrir un terminal à partir de VsCode. Le terminal sera alors ouvert par défaut dans le dossier du&nbsp;projet.</info>
         
<p>Lancer ensuite la commande:</p>
<highlight lang='cmd'>npm init</highlight>

<p>Et répondez aux diverses questions posées.</p>

<p>Si vous n’êtes pas certains des réponses à offrir ou désirez accélérer ce processus, il est possible de créer un fichier <em>package.json</em> avec les valeurs par défaut en utilisant la commande:</p>

<highlight lang='cmd'>npm init -y</highlight>

<info>Il sera toujours possible de modifier ces valeurs plus tard directement dans le fichier&nbsp;<em>package.json</em>.</info>

<doclink href='https://docs.npmjs.com/cli/v7/commands/npm-init'>Init NPM</doclink>





<dots></dots>
<grostitre>Trouver des paquets</grostitre>
<p>Afin de trouver des paquets pouvant s'avérer utiles, le mieux est de se rendre sur le site <a target="_blank" rel="noopener noreferrer" href="https://www.npmjs.com/">npmjs.com</a> contenant un registre de tous les paquets disponibles.</p>

<p>Par exemple, tenter de trouver le paquet correspondant à la librairie <a target="_blank" rel="noopener noreferrer" href="https://lodash.com/">lodash</a>.</p>

<p>Vous devriez alors trouver une page séparée en deux colonnes vous présentant le paquet trouvé. Dans la colonne de gauche ◀️ une description du paquet est normalement présente tandis que dans la colonne de droite ▶️ se trouve: </p>

<ol start="1">
    <li>Un bouton permettant de copier la commande d'installation du paquet</li>
    <li>L'URL du répertoire GitHub <em>(si existant)</em></li>
    <li>Le site web du paquet <em>(si existant)</em></li>
    <li>Son nombre de téléchargements par semaine</li>
    <li>Son numéro de version</li>
    <li>Sa date de mise à jour</li>
    <li>etc.</li>
</ol>




<dots></dots>
<grostitre>Ajouter des paquets</grostitre>
<p>Pour ajouter un paquet dans un projet, il suffit de lancer la commande <incode>npm i</incode>, suivie du nom du paquet désiré.</p>
<p>Par exemple, afin d'installer lodash dans un projet, il suffit de taper la commande:</p>

<highlight lang='html'>npm i lodash</highlight>
<p><incode>i</incode> comme dans <em>"install"</em>.</p><p>Remarquez l'ajout d'un dossier intitulé <em>"nodes_modules"</em> à la racine de votre projet. Ce dossier contient les paquets que vous avez téléchargés.</p>

<p>Vous remarquerez aussi que dans votre fichier package.json qu'un objet <em>"dependencies"</em> fut ajouté et que celui-ci contient maintenant une référence à lodash et a son numéro de version.</p>

<doclink href='https://docs.npmjs.com/cli/v7/commands/npm-install'>Install packages</doclink>




<dots></dots>
<grostitre>Retirer un paquet</grostitre>
<p>Si un paquet n'est pas utilisé ou si vous l'avez ajouté par erreur, il est possible de le retirer en lançant la commande <incode>npm r</incode>, suivi du nom du paquet désiré.</p>

<p>Par exemple, afin de désinstaller lodash dans un projet, la commande à lancer est:</p><pre><code class="hljs">npm r lodash</code></pre>

<p><incode>r</incode> comme dans <em>"remove"</em>.</p><p>Le paquet est alors retiré du dossier <em>"node_modules"</em> et sa référence dans le fichier package.json est retirée.</p>

          <div class="tags-list">
  <div class="tags-list__wrapper">
    <ul class="tags-list__list">
                  <li class="tags-list__item">
                    <a href="https://docs.npmjs.com/cli/v7/commands/npm-uninstall" target="_blank" rel="noopener noreferrer" class="tags-list__link tags-list__link--auto">unistall</a>
                  </li>
          
    </ul>
  </div>
</div>

          <h2 class="heading heading--h2" id="Voir les paquets installés">Voir les paquets installés<a href="#Voir les paquets installés" aria-hidden="true" class="heading__anchor" data-module="CopyToClipboard" data-text="https://smnarnold.com/cours/javascript/npm#Voir les paquets installés" data-snackbar="Lien copié.">
    <span class="heading__anchor__wrapper">
      <svg viewBox="0 0 24 24">
        <path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"></path>
      </svg>
    </span>
  </a>
  </h2>

          <p>Afin de voir quels paquets sont installés dans un projet, il est possible d'aller jeter un coup d'oeil 👁 dans le fichier <em>package.json</em> ou encore de lancer la commande:</p><pre><code class="hljs">npm ls</code></pre><p><incode>ls</incode> comme dans <em>"list"</em>.</p>
          <div class="tags-list">
  <div class="tags-list__wrapper">
    <ul class="tags-list__list">
                  <li class="tags-list__item">
                    <a href="https://docs.npmjs.com/cli/v7/commands/npm-ls" target="_blank" rel="noopener noreferrer" class="tags-list__link tags-list__link--auto">ls</a>
                  </li>
          
    </ul>
  </div>
</div>

          <h2 class="heading heading--h2" id="Mettre à jour ses paquets">Mettre à jour ses paquets<a href="#Mettre à jour ses paquets" aria-hidden="true" class="heading__anchor" data-module="CopyToClipboard" data-text="https://smnarnold.com/cours/javascript/npm#Mettre à jour ses paquets" data-snackbar="Lien copié.">
    <span class="heading__anchor__wrapper">
      <svg viewBox="0 0 24 24">
        <path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"></path>
      </svg>
    </span>
  </a>
  </h2>

          <p>.npm mentionne toujours dans le fichier package.json la version du paquet installé. Ainsi, il est possible voir si la version installée est la plus récente. Ce détail peut sembler anodin, mais il est parfois important, puisqu'il permet de savoir si certaines fonctionnalités ou bugs sont présents dans notre projet. </p><p>Pour mettre à jour tous les paquets d'un projet, la commande à effectuer est:</p><pre><code class="hljs">npm update</code></pre><p>Pour mettre à jour un paquet spécifiquement, il faut simplement ajouter le nom de ce paquet à notre commande.</p><p>Par exemple, pour mettre à jour lodash:</p><pre><code class="hljs">npm update lodash</code></pre>
          <div class="tags-list">
  <div class="tags-list__wrapper">
    <ul class="tags-list__list">
                  <li class="tags-list__item">
                    <a href="https://docs.npmjs.com/cli/v7/commands/npm-update" target="_blank" rel="noopener noreferrer" class="tags-list__link tags-list__link--auto">update</a>
                  </li>
          
    </ul>
  </div>
</div>

          <h2 class="heading heading--h2" id="Travail d'équipe sur GitHub">Travail d'équipe sur GitHub<a href="#Travail d'équipe sur GitHub" aria-hidden="true" class="heading__anchor" data-module="CopyToClipboard" data-text="https://smnarnold.com/cours/javascript/npm#Travail d'équipe sur GitHub" data-snackbar="Lien copié.">
    <span class="heading__anchor__wrapper">
      <svg viewBox="0 0 24 24">
        <path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"></path>
      </svg>
    </span>
  </a>
  </h2>

          <p>Dans le cadre d'un travail d'équipe, il est courant de partager un fichier <em>package.json</em> sur son répertoire GitHub. Cependant, le dossier <em>"node_modules"</em> n'est normalement pas inclus sur celui-ci afin d'éviter de ralentir Git et de créer des conflits inutiles.</p>
          <aside class="note note--info">
  <div class="note__wrapper">
        <p>Le fichier <incode>.gitignore</incode> à la racine du projet se charge d’éviter que des fichiers se retrouvent sur son répertoire Git. Le dossier <em>"node_modules"</em> est systématiquement listé dans ce&nbsp;fichier.</p>

  </div>
</aside>
          <h3 class="heading heading--h3" id="Si un coéquipier ajoute un paquet?">Si un coéquipier ajoute un paquet?</h3>

          <p>Votre fichier <em>package.json</em> se mettra à jour dès que vous ferez un pull. Malheureusement, les fichiers du paquet n'apparaitront pas magiquement dans votre dossier <em>"node_modules". </em>Pour les ajouter, il faudra alors rouler la commande <incode>npm i</incode>.</p><p>Normalement, le membre de l'équipe ayant ajouté un ou des paquets le fait savoir à ses coéquipiers en inscrivant en majuscules dans son commit la commande à rouler <em>"NPM I"</em> et averti ses coéquipiers.</p>
          <h3 class="heading heading--h3" id="Si un coéquipier retire un paquet?">Si un coéquipier retire un paquet?</h3>

          <p>Encore une fois, votre fichier <em>package.json</em> se mettra à jour dès que vous ferez un pull. Cependant les fichiers resteront dans votre dossier <em>"node_modules". </em>Heureusement, npm à prévue la commande prune qui permet de comparer les paquets listés dans le fichier <em>package.json</em> et ceux dans le dossier <em>"node_modules" </em>et tout paquet non présent dans le fichier <em>package.json</em> est alors retiré.</p><p>Normalement, le membre d'équipe ayant retiré un ou des paquets le fait savoir à ses coéquipiers en inscrivant en majuscules dans son commit la commande à rouler <em>"NPM PRUNE"</em> et averti ses coéquipiers.</p>
          <div class="tags-list">
  <div class="tags-list__wrapper">
    <ul class="tags-list__list">
                  <li class="tags-list__item">
                    <a href="https://docs.npmjs.com/cli/v7/commands/npm-prune" target="_blank" rel="noopener noreferrer" class="tags-list__link tags-list__link--auto">prune</a>
                  </li>
          
    </ul>
  </div>
</div>

          <h3 class="heading heading--h3" id="Si un coéquipier met un paquet à jour?">Si un coéquipier met un paquet à jour?</h3>

          <p>Votre fichier <em>package.json</em> se mettra à jour dès que vous ferez un pull. Cependant, la copie téléchargée dans votre dossier <em>"node_modules"</em> restera la même, puisque ce dossier est ignoré par Git. Il faut donc lancer la commande de mise à jour <incode>npm update</incode>.</p><p>Normalement, le membre d'équipe ayant mis à jour un ou des paquets le fait savoir à ses coéquipiers en inscrivant en majuscules dans son commit la commande à rouler <em>"NPM UPDATE"</em> et averti ses coéquipiers.</p>
          <h2 class="heading heading--h2" id="Alternatives">Alternatives<a href="#Alternatives" aria-hidden="true" class="heading__anchor" data-module="CopyToClipboard" data-text="https://smnarnold.com/cours/javascript/npm#Alternatives" data-snackbar="Lien copié.">
    <span class="heading__anchor__wrapper">
      <svg viewBox="0 0 24 24">
        <path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"></path>
      </svg>
    </span>
  </a>
  </h2>

          <ul><li><p><a target="_blank" rel="noopener noreferrer" href="https://classic.yarnpkg.com/">Yarn</a></p></li><li><p><a target="_blank" rel="noopener noreferrer" href="https://pnpm.io/">pnpm</a></p></li><li><p><a target="_blank" rel="noopener noreferrer" href="https://bower.io/">Bower</a></p></li><li><p>etc.</p></li></ul><p></p>
    
