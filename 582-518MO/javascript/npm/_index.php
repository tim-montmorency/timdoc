<?php

/**
 * @type     article
 * @title    NPM
 * @icon     images/icon.webp
 * @abstract Gestionnaire de paquets JS
 * @index    30
 * @ref      web/outils
 */
?>

<p>npm ou, <em>Node Package Manager</em>, est de loin le plus gros gestionnaire de paquets JavaScript en ligne avec plus d’un million de paquets disponibles. À la base, son rôle consistait à télécharger et gérer les dépendances d’un projet <em>Node.js</em>. Cependant, avec le temps il est aussi devenu un outil permettant de gérer ses dépendances JavaScript du côté client.</p>
<p>Il est probable que vous, vous soyez déjà dit: <br>

<em>« Je ne suis sûrement pas le premier à vouloir faire X en JavaScript?&nbsp;»</em></p>

<p>Et vous aviez probablement raison! C’est exactement la problématique que tente de régler npm en permettant d’inclure des scripts déjà réalisés par d’autres développeurs à même son propre code. Ces dits scripts sont alors appelés paquets et permettent d’éviter de réinventer la roue à chaque fois qu’une fonctionnalité doit-être ajoutée.</p>

<p>Pour presque tous vos besoins en JavaScript, vous pouvez trouver une solution sur npm!</p>

<dots></dots>
<grostitre>Distinction</grostitre>

<p>Vous vous questionnez sans doute: <br> 🤔 <em>«  Mais ce n'est pas exactement la définition de que qu'est une librairie JavaScript comme on a parlé à la dernière session? Quelle est donc la différence?&nbsp;»</em> </p>

<intlink href='../../../582-424MO/swiper/librairie-javascript/'></intlink>
<br> <br>
<p>En effet! Voici quelques définitions librement traduites de l'article cité plus ba:.</p>
<ul>
  <li>Un <em>module JavaScript</em> est simplement un fichier JavaScript isolé exécutant une fonctionnalité spécifique.</li>
  <li>Une <em>librairie JavaScript</em> est un code réutilisable qui fournit une fonctionnalité bien testée par le biais d'une interface bien définie. Elle peut contenir un ou plusieurs modules.</li>
  <li>Un <em>paquet JavaScript</em> est la forme compilée de la librairie prête à être distribuée. Un paquet contient principalement le code source, le code de distribution, la documentation, des exemples, des exécutables, une suite de tests, des métadonnées (comme le numéro de version), etc. </li>
  <li>Un <em>gestionnaire de paquets</em> stocke toutes les versions de paquets sous une forme compressée dans un registre en ligne. Pour JavaScript, <em>npm</em> est le gestionnaire de paquets et le registre par défaut.</li>
</ul>
<doclink href='https://www.techighness.com/post/javascript-difference-between-module-library-package-api-sdk-framework-app/'>JavaScript: Difference Between Module, Library, Package</doclink>



<dots></dots>
<grostitre>Installation de Node.js</grostitre>
<p>D'abord installez node.js.</p>
<p>Pour vérifier son installation sur un poste ou simplement pour voir son numéro de version, il est possible de taper dans un terminal la commande:</p>
<highlight lang="console">> node -v</highlight>
<p>
  <incode>-v</incode> comme dans <em>"version"</em>.
</p>

<p>S'il n'est pas installé, il est conseillé de l'installer via un <a href="https://docs.npmjs.com/downloading-and-installing-node-js-and-npm#using-a-node-version-manager-to-install-nodejs-and-npm" target="_blank" rel="noopener noreferrer">Node Version Manager</a>. </p>

<!-- https://docs.npmjs.com/downloading-and-installing-node-js-and-npm -->
<dots></dots>
<grostitre>Installation de NPM</grostitre>
<p>npm est automatiquement installé avec Node.js. Il n’est donc pas nécessaire de l’installer.</p>

<p>Pour vérifier son installation sur un poste ou simplement pour voir son numéro de version, il est possible de taper dans un terminal la commande:</p>

<highlight lang="console">> npm -v</highlight>

<p>
  <incode>-v</incode> comme dans <em>"version"</em>.
</p>

<doclink href="https://docs.npmjs.com/cli/v7/commands/npm-version">Version NPM</doclink>



<dots></dots>
<grostitre>Package.json</grostitre>
<p>Pour utiliser npm, il faut premièrement créer un fichier <em>package.json</em> à la racine dudit projet. Ce fichier permet de stocker des informations relatives au projet. Notamment: son nom, son auteur, son numéro de version, etc. mais surtout les dépendances JavaScript nécessaires à son fonctionnement.</p>
<p>Pour créer ce fichier, il faut ouvrir le dossier du projet dans un terminal.</p>

<info>La façon la plus simple d’ouvrir un terminal à même le dossier d’un projet est d’ouvrir le dossier du projet dans Visual Studio Code et d’ouvrir un terminal à partir de VsCode. Le terminal sera alors ouvert par défaut dans le dossier du&nbsp;projet.</info>

<p>Lancer ensuite la commande:</p>
<highlight lang="console">> npm init</highlight>

<p>Et répondez aux diverses questions posées.</p>

<p>Si vous n’êtes pas certains des réponses à offrir ou désirez accélérer ce processus, il est possible de créer un fichier <em>package.json</em> avec les valeurs par défaut en utilisant la commande:</p>

<highlight lang="console">> npm init -y</highlight>

<info>Il sera toujours possible de modifier ces valeurs plus tard directement dans le fichier&nbsp;<em>package.json</em>.</info>

<doclink href="https://docs.npmjs.com/cli/v7/commands/npm-init">Init NPM</doclink>





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

<highlight lang="console">> npm i lodash</highlight>
<p>
  <incode>i</incode> comme dans <em>"install"</em>.
</p>
<p>Remarquez l'ajout d'un dossier intitulé <em>"nodes_modules"</em> à la racine de votre projet. Ce dossier contient les paquets que vous avez téléchargés.</p>

<p>Vous remarquerez aussi que dans votre fichier package.json qu'un objet <em>"dependencies"</em> fut ajouté et que celui-ci contient maintenant une référence à lodash et a son numéro de version.</p>

<doclink href="https://docs.npmjs.com/cli/v7/commands/npm-install">Install packages</doclink>




<dots></dots>
<grostitre>Retirer un paquet</grostitre>
<p>Si un paquet n'est pas utilisé ou si vous l'avez ajouté par erreur, il est possible de le retirer en lançant la commande <incode>npm r</incode>, suivi du nom du paquet désiré.</p>

<p>Par exemple, afin de désinstaller lodash dans un projet, la commande à lancer est:</p>

<highlight lang="console">> npm r lodash</highlight>

<p>
  <incode>r</incode> comme dans <em>"remove"</em>.
</p>
<p>Le paquet est alors retiré du dossier <em>"node_modules"</em> et sa référence dans le fichier package.json est retirée.</p>

<doclink href="https://docs.npmjs.com/cli/v7/commands/npm-uninstall">Uninstall packages</doclink>

<dots></dots>

<grostitre>Voir les paquets installés</grostitre>

<p>Afin de voir quels paquets sont installés dans un projet, il est possible d'aller jeter un coup d'oeil 👁 dans le fichier <em>package.json</em> ou encore de lancer la commande:</p>

<highlight lang="console">> npm ls</highlight>

<p>
  <incode>ls</incode> comme dans <em>"list"</em>.
</p>

<doclink href="https://docs.npmjs.com/cli/v7/commands/npm-ls">List packages</doclink>

<dots></dots>

<grostitre>Mettre à jour ses paquets</grostitre>

<p>.npm mentionne toujours dans le fichier package.json la version du paquet installé. Ainsi, il est possible voir si la version installée est la plus récente. Ce détail peut sembler anodin, mais il est parfois important, puisqu'il permet de savoir si certaines fonctionnalités ou bugs sont présents dans notre projet. </p>

<p>Pour mettre à jour tous les paquets d'un projet, la commande à effectuer est:</p>

<highlight lang="console">> npm update</highlight>

<p>Pour mettre à jour un paquet spécifiquement, il faut simplement ajouter le nom de ce paquet à notre commande.</p>

<p>Par exemple, pour mettre à jour lodash:</p>

<highlight lang="console">> npm update lodash</highlight>

<doclink href="https://docs.npmjs.com/cli/v7/commands/npm-update">Update packages</doclink>

<dots></dots>

<grostitre>Travail d'équipe sur GitHub</grostitre>


<p>Dans le cadre d'un travail d'équipe, il est courant de partager un fichier <em>package.json</em> sur son répertoire GitHub. Cependant, le dossier <em>"node_modules"</em> n'est normalement pas inclus sur celui-ci afin d'éviter de ralentir Git et de créer des conflits inutiles.</p>

<info>Le <a href="../../git/gitignore/" target="_blank" rel="noopener noreferrer">fichier .gitignore </a>à la racine du projet se charge d’éviter que des fichiers se retrouvent sur son répertoire Git. Le dossier <em>"node_modules"</em> est systématiquement listé dans ce&nbsp;fichier.</info>

<h3>Si un coéquipier ajoute un paquet?</h3>
<p>Votre fichier <em>package.json</em> se mettra à jour dès que vous ferez un pull. Malheureusement, les fichiers du paquet n'apparaitront pas magiquement dans votre dossier <em>"node_modules". </em>Pour les ajouter, il faudra alors rouler la commande <incode>npm i</incode>.</p>
<p>Normalement, le membre de l'équipe ayant ajouté un ou des paquets le fait savoir à ses coéquipiers en inscrivant en majuscules dans son commit la commande à rouler <em>"NPM I"</em> et averti ses coéquipiers.</p>


<h3>Si un coéquipier retire un paquet?</h3>

<p>Encore une fois, votre fichier <em>package.json</em> se mettra à jour dès que vous ferez un pull. Cependant les fichiers resteront dans votre dossier <em>"node_modules". </em>Heureusement, npm à prévue la commande prune qui permet de comparer les paquets listés dans le fichier <em>package.json</em> et ceux dans le dossier <em>"node_modules" </em>et tout paquet non présent dans le fichier <em>package.json</em> est alors retiré.</p>
<p>Normalement, le membre d'équipe ayant retiré un ou des paquets le fait savoir à ses coéquipiers en inscrivant en majuscules dans son commit la commande à rouler <em>"NPM PRUNE"</em> et averti ses coéquipiers.</p>

<doclink href="https://docs.npmjs.com/cli/v7/commands/npm-prune">Prune packages</doclink>


<h3>Si un coéquipier met un paquet à jour?</h3>

<p>Votre fichier <em>package.json</em> se mettra à jour dès que vous ferez un pull. Cependant, la copie téléchargée dans votre dossier <em>"node_modules"</em> restera la même, puisque ce dossier est ignoré par Git. Il faut donc lancer la commande de mise à jour <incode>npm update</incode>.</p>
<p>Normalement, le membre d'équipe ayant mis à jour un ou des paquets le fait savoir à ses coéquipiers en inscrivant en majuscules dans son commit la commande à rouler <em>"NPM UPDATE"</em> et averti ses coéquipiers.</p>

<dots></dots>


<grostitre>Alternatives</grostitre>

<tool href="./alternatives/yarn/"></tool>
<tool href="./alternatives/pnpm/"></tool>
<tool href="./alternatives/bower/"></tool>

<dots></dots>