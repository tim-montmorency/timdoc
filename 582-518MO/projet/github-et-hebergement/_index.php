<?php 
/**
 * @type     article
 * @title    Github et hébergement-DevOps
 * @icon     images/icon.svg
 * @abstract Créer le répertoire GitHub et déployer une page temporaire en ligne.
 * @index 64
 */
?>


<p>Cette étape concerne le DevOps de votre équipe. Vous devrez dans celle-ci créer le répertoire <a href="https://github.com/">GitHub</a> qui permettra de sauvegarder et partager le code de votre projet en&nbsp;ligne.</p>



<checklist>Créez répertoire <a target="_blank" onclick="event.stopPropagation()" rel="noopener noreferrer" href="https://github.com/">GitHub</a> et nommez le <code>[Nom du client]-[Nom de l'équipe]</code>.<br>ex: <em>craque-bitume-les-casseroles-bruyantes</em>
Donnez accès au repo aux membres de votre équipe.
Donnez accès au client via son courriel personnel. Vous retrouverez cette adresse courriel dans notre équipe Teams.
À la racine du repo, créez un fichier <em>README.md</em> et inscrivez à l'intérieur de celui-ci, en format Markdown :<br>- Le nom de votre client.<br>- Le nom de votre équipe.<br>- Les noms des membres de votre équipe.<br>- Le nom du cours dans lequel ce projet a lieu ainsi qu'un lien vers les requis du projet, soit: <a href="../" onclick="event.stopPropagation()" target="_blank">https://tim-montmorency.com/timdoc/582-518MO/projet/</a><br>- Un lien vers le tableau Trello de votre projet.
À la racine du repo, créez un dossier intitulé <em>"sources"</em>. <br><br>Ce dossier devra contenir pour l'instant <br>- la maquette sélectionnée de la page d'accueil : <em>en PDF + en fichier éditable original (le fichier .XD ou un lien vers votre Figma (qui devra être accessible publiquement - anyone with the link can view)</em>;<br>- le moodboard;<br>- le guide de styles.
Le dossier <em>sources</em> devra aussi éventuellement contenir le copy deck <em>(format doc)</em> et la maquette de la page de détail de nouvelle <em>(PDF + fichier éditable original)</em>. Ces 2 fichiers devront être déposés sur le git d'ici le cours 5, prenez-en bien note à l'agenda, c'est votre responsabilité d'y penser.
Créez un fichier <em>index.html</em>. Celui-ci servira de page temporaire à votre site. Ce fichier devra afficher le nom de votre équipe, le nom de votre client ainsi que le lien vers votre répertoire GitHub. <br><br>Pour les équipes de quatre, <a target="_blank" onclick="event.stopPropagation()" rel="noopener noreferrer" href="../page-temporaire">cette page devra être réalisée par l'agent de promotion</a>.
Procurez-vous un hébergement web de votre choix. Soit avec votre compte <a href="https://www.planethoster.com/fr/World-Lite" onclick="event.stopPropagation()" target="_blank">Planet Hoster - World Lite</a> s'il fonctionne toujours.<br><br><em>BONNE NOUVELLE</em>, cependant, sachez qu'avec le département TIM cette année, vous avez à votre disposition l'hébergement chez <a href="https://www.hostpapa.ca/" onclick="event.stopPropagation()" target="_blank">hostpapa</a> pour déployer votre projet en ligne le temps de la session en cours. Consultez notre équipe Teams pour plus de détails à ce sujet.<br><br>Attention, vous devez choisir un hébergeur qui supporte le langage serveur <a href="https://kinsta.com/fr/base-de-connaissances/qu-est-ce-que-php/" onclick="event.stopPropagation()" target="_blank">PHP</a> et les bases de données <a href="https://kinsta.com/fr/base-de-connaissances/qu-est-ce-que-mysql/" onclick="event.stopPropagation()" target="_blank">mySQL</a>  donc GitHub Pages ne sera pas une option envisageable cette fois. 
Lorsque l'hébergement est configuré, téléversez votre fichier <em>index.html</em> afin de remplacer <em>la page temporaire fournie par défaut par votre hébergeur</em> par la votre.<br>
Ajoutez dans votre fichier README.md sur GitHub, un lien vers votre projet mis-en-ligne.</checklist>

<dots></dots>
<grostitre>Remise</grostitre>
<p>Il n'y a pas de remise formelle. Donner accès git au client, remplir le README.md et mettre la page temporaire en ligne, constituent la remise en soi.</p>
<p>Date : Le tout devra avoir été fait d'ici le prochain cours, soit le <em>cours 4</em>.</p>
<p>Évaluation : L'évaluation de cette portion est individuelle et compte pour 5% de la session (voir plan de cours pour les critères).</p>

<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<doclink href='https://smnarnold.com/cours/git/github'>GitHub</doclink>
<?php intlink("../../../582-424MO/git/collaboration/") ?>
<doclink href='https://smnarnold.com/cours/git/markdown'>Markdown</doclink>



