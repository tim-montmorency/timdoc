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

<warning>Avant de commencer, il faut savoir que vous allez partager un lien vers le design Figma gagnant de votre équipe. Comme le repo git va être publique, il faut porter attention à ne pas partager les permissions d'édition comme je demande normalement lors des remises scolaires. Pour le lien du Figma que vous allez mettre dans github, il faut seulement accroder les permissions de visualisaiton. Voici les étapes: 
    <br> <img src="images/figma-lien-public-01.jpg" alt="Étape 01 - Clic sur Share"> 
    <br> <img src="images/figma-lien-public-02.jpg" alt="Étape 02 - Clic sur Anyone ou sur can edit pour ouvrir la fenêtre d'édition."> 
    <br> <img src="images/figma-lien-public-03.jpg" alt="Étape 03 - Anyone can view">
    <br> <img src="images/figma-lien-public-04.jpg" alt="Étape 04 - Copy Link">
</warning>

<checklist>Créez le répertoire <a target="_blank" onclick="event.stopPropagation()" rel="noopener noreferrer" href="https://github.com/">GitHub</a> et nommez le <incode>[Nom court du client sans accent]--[Nom de l'équipe sans accent]</incode>.<br>ex: <em>federation-des-locataires--les-casseroles-bruyantes</em>. <br>Notez que les noms courts des 3 clients 2024 sont : vivre-en-ville, droits-et-libertes et federation-des-locataires.
Donnez accès au repo aux membres de votre équipe.
Donnez accès au client (moi) via son compte github: <em>kid-synthetique</em>. 
À la racine du repo, créez un fichier <em>README.md</em> et inscrivez à l'intérieur de celui-ci, en format Markdown :<br>- Le nom de votre client.<br>- Le nom de votre équipe.<br>- Les noms des membres de votre équipe. À côté de chaque nom, inscrivez: intégrateur, développeur front-end et <a href="https://tim-montmorency.com/timdoc/582-518MO/projet/mise-en-contexte/#roles-dans-lequipe" target="_blank" rel="noopener noreferrer">son rôle secondaire parmi les 3</a>.<br>- Le nom du cours dans lequel ce projet a lieu ainsi qu'un lien vers la page de présentation du projet, soit: <a href="../" onclick="event.stopPropagation()" target="_blank">https://tim-montmorency.com/timdoc/582-518MO/projet/</a><br>- Un lien vers le tableau Trello de votre projet. <br> - Un lien vers le Figma du design de l'accueil du projet (comme le github est publique, protez attention lorsque vous créez le lien, voir procédure au début de cette page).
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
<doclink href="https://smnarnold.com/cours/git/github">GitHub</doclink>
<intlink href="../../../582-424MO/git/collaboration/"></intlink>
<doclink href="https://smnarnold.com/cours/git/markdown">Markdown</doclink>



