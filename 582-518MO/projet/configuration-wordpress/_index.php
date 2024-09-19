<?php 
/**
 * @type     article
 * @title    Configuration Wordpress-DevOps
 * @icon     images/icon.svg
 * @abstract  Configurer WordPress en local et sur serveur
 * @index 50
 */
?>
 <p>Cette étape concerne le DevOps de votre équipe. Vous devrez dans celle-ci configurer WordPress sur votre environnement local ainsi que sur votre serveur en&nbsp;ligne.</p>


 <info>Lorsque vous travaillez sur le projet, n'oubliez pas de démarrer Toggl (votre rapport de temps de travail).</info>
 
<grostitre>Local</grostitre>
<checklist>Installez WordPress à l’intérieur de votre dossier de projet. Attention de ne pas installer WordPress dans un autre sous-dossier. Il doit être directement dans le dossier de premier niveau de votre répertoire git.
Ajoutez un fichier <a href="https://tim-montmorency.com/timdoc/582-518MO/git/gitignore/"> .gitignore</a> dans le dossier de projet au premier niveau. Ce fichier devra ignorer tous les fichiers et dossiers à l’exception du dossier <em>“wp-content”</em> et de son contenu. <br><br> <strong>N'oubliez surtout pas d'ignorez aussi le fichier wp-config.php qui contiendra les informations de connexion à la base de données et qui doit absolument rester privé</strong>. <br><br>De la sorte, les fichiers de base de WordPress ne seront pas sauvegardés sur votre répertoire GitHub et donc ne pourront pas générer de conflits dans l’éventualité d’une mise à jour de WordPress.
Continuez l'installation de Wordpress en créant la base de données et en complétant les configurations de base.
Installez le <a target="_blank" rel="noopener noreferrer" href="https://tim-montmorency.com/timdoc/582-518MO/wordpress/medias/theme-de-base.zip">thème de base Montmorency</a> et supprimez les autres thèmes préinstallés avec WordPress. Vous devrez partir de ce thème afin de développer le thème de votre client. <br><br>Prenez un instant afin d'ajuster les informations du thème afin que son nom soit celui de votre client, que votre équipe soit créditée de sa réalisation, d’ajouter une description et une image d’aperçu présentant votre site.
Installez ensuite les extensions suivantes: Advanced Custom Fields et WP Multilang
Créez les modèles suivants à partir de <incode>about.php</incode>: <br> -home.php<br> -news-hub.php<br> -news-article.php<br> -services-hub.php<br> -service.php<br> -team.php<br> -about.php <em>(déjà présent)</em><br> -contact-us.php<br> -faq<br> -404.php <em>(déjà présent)</em>
Pour installer le projet en local, les autres membres de votre équipe devront télécharger WordPress, copier son code en entier dans le dossier du projet, à l’exception du dossier <em>“wp-content”</em> qu'ils auront <em>pull</em> de votre répertoire github et compléter l’installation de base WordPress.<br><br>Assistez vos coéquipiers afin de vous assurer que tous les membres de votre équipe réussissent cette étape.</checklist>



<dots></dots>
<grostitre>En ligne</grostitre>
<checklist>Via le cPanel de votre hébergeur web, installez Wordpress en explorant le <em>WP Toolkit</em>.
Créez la base de données via le WP ToolKit et assurez vous que le nom d'utilisateur et mot de passe pour la base de données sont confidentiels, complexes et non seulement <em>root</em> comme vous l'avez fait en local (n'oubliez pas de les noter quelque part).
Installez le même thème et les mêmes extensions sur votre hébergeur en ligne. Tentez idéalement de reproduire la même arborescence de dossiers/fichiers en ligne qu'en local.
Créez un compte administrateur dans Wordpress pour votre client (moi) avec l'identifiant <em>mariemichelle</em> et avec l’adresse courriel de l'enseignante que vous pouvez trouver dans le plan de cours
Envoyez un message teams à votre client afin de lui indiquer que son compte a été créé et l’informer de son mot de passe.
Créez une tâche Trello afin que chaque membre de votre équipe se crée un compte sur votre site en ligne. Ainsi chaque membre de l'équipe pourra contribuer à l'entrée de contenu en simultané plus tard.</checklist>

      


<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<intlink href="../../git/gitignore/"></intlink>
<intlink href="../../wordpress/mamp/"></intlink>
<intlink href="../../wordpress/installation-en-local/"></intlink>
<intlink href="../../wordpress/themes-et-extensions/"></intlink>
<intlink href="../../wordpress/styles-css/"></intlink>
<intlink href="../../wordpress/modeles/"></intlink>
