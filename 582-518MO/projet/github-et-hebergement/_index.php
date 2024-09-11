<?php 
/**
 * @type     article
 * @title    Github et hébergement-DevOps
 * @icon     images/icon.svg
 * @abstract Répo GitHub et déployer page sur serveur
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

<grostitre>Requis git</grostitre>
<checklist>Créez le répertoire <a target="_blank" onclick="event.stopPropagation()" rel="noopener noreferrer" href="https://github.com/">GitHub</a> et nommez le <incode>[Nom court du client sans accent]--[Nom de l'équipe sans accent]</incode>.<br>ex: <em>federation-des-locataires--les-casseroles-bruyantes</em>. <br>Notez que les noms courts des 3 clients 2024 sont : vivre-en-ville, droits-et-libertes et federation-des-locataires.
Donnez accès au repo aux membres de votre équipe.
Donnez accès au client (prof) via son compte github: <em>kid-synthetique</em>. 
Clonez le répertoire sur votre poste de travail ou encore mieux, sur votre disque dur.
Localement ouvrez le dossier du projet avec Visual Studio Code.
À la racine du repo, créez un fichier <em>README.md</em> et inscrivez à l'intérieur de celui-ci, en format Markdown :<br>- Le nom de votre client.<br>- Le nom de votre équipe.<br>- Les noms des membres de votre équipe. À côté de chaque nom, inscrivez: intégrateur, développeur front-end et <a href="https://tim-montmorency.com/timdoc/582-518MO/projet/mise-en-contexte/#roles-dans-lequipe" target="_blank" rel="noopener noreferrer">son rôle secondaire parmi les 3</a>.<br>- Le nom du cours dans lequel ce projet a lieu ainsi qu'un lien vers la page de présentation du projet, soit: <a href="../" onclick="event.stopPropagation()" target="_blank">https://tim-montmorency.com/timdoc/582-518MO/projet/</a><br>- Un lien vers le tableau Trello de votre projet. <br> - Un lien vers le Figma du design de l'accueil du projet (comme le github est publique, portez attention aux permissions lorsque vous créez le lien, voir procédure au début de cette page. Ce doit être partagé en mode vue seulement et non en mode édition comme vous avez l'habitude de faire pour vos remises scolaires).
À la racine du repo, créez un dossier intitulé <em>"sources"</em>. <br><br>Ce dossier devra contenir pour l'instant <br>- la maquette sélectionnée de la page d'accueil en 3 formats : <em>en PDF</em><br>- le moodboard <em>en PDF</em><br>- le guide de styles <em>en PDF</em><br>- le lien vers votre Figma éditable (un seul fichier qui devra contenir les 3 éléments, soient la maquette, le moodboard et le guide de styles). Pour créer ce fichier-lien, <a href="https://www.linternaute.fr/hightech/guide-high-tech/1413756-comment-creer-un-raccourci-vers-un-site-internet-sur-son-bureau/" target="_blank" rel="noopener noreferrer">suivez la méthode numéro 1 ici</a>.
Faites bien attention de nommer vos fichiers correctement, vous pouez créer des sous-dossier pour classer le tout, au besoin.
Le dossier <em>sources</em> devra aussi éventuellement contenir le copy deck <em>(format doc)</em> et la maquette en 3 format de la page de détail de nouvelle <em>(PDF + lien vers le Figma éditable)</em>. Ces nouveaux fichiers devront être déposés sur le git d'ici le jeudi de la semaine 5, prenez-en bien note à l'agenda, c'est votre responsabilité d'y penser.
N'oubliez pas de faire un commit et un pull et push de votre modifications.
Dites à vos coéquipiers de faire un clone du répertoire git sur leur poste de travail ou encore mieux, sur leur disque dur.
</checklist>


<grostitre>Requis hébergement Web</grostitre>
<checklist>
Créez un fichier <em>index.html</em>. Celui-ci servira de page temporaire à votre site. Ce fichier devra afficher le nom de votre équipe, le nom de votre client, le url du site initial du client, le lien vers votre répertoire GitHub et finalement vos noms et rôle dans l'équipe. Stylisez légèrement.
Procurez-vous un hébergement web. <br><br>Attention, pour supporter WordPress, vous devez choisir un hébergeur qui supporte le langage serveur <a href="https://kinsta.com/fr/base-de-connaissances/qu-est-ce-que-php/" onclick="event.stopPropagation()" target="_blank">PHP</a> et les bases de données <a href="https://kinsta.com/fr/base-de-connaissances/qu-est-ce-que-mysql/" onclick="event.stopPropagation()" target="_blank">mySQL</a>  donc GitHub Pages ne sera pas une option envisageable cette fois. <br><br>Avec le département TIM depuis l'an dernier, vous avez à votre disposition l'hébergement chez <a href="https://www.hostpapa.ca/" onclick="event.stopPropagation()" target="_blank">hostpapa</a> pour déployer votre projet en ligne le temps de la session en cours.
Pour procéder à la création de votre compte chez hostpapa, il faut attendre que William (notre TTP) crée votre compte. Veuillez aller voir dans la colonne i vis-à-vis votre équipe dans <a href="https://cmontmorency365.sharepoint.com/:x:/s/TIM-TTP/ETGlFB3wwT9PmYOb1o-lczUBLlOwKr03B7HgyrdRYQgrqQ?e=cQc90C" target="_blank" rel="noopener noreferrer">le fichier Excel ici</a>. Si c'est écrit <em>oui</em> et que vous avez bien reçu votre mot de passe dans le canal Teams de votre équipe, vous pouvez continuer ce qui suit.
Visionnez cette <a href="https://cmontmorency365-my.sharepoint.com/:v:/g/personal/mariem_ouellet_cmontmorency_qc_ca/EZd7jM8DNIZHndllts3nA0cBtrrGG2NBLBOuO7svWXVjug?e=ycH8Ui&nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJTdHJlYW1XZWJBcHAiLCJyZWZlcnJhbFZpZXciOiJTaGFyZURpYWxvZy1MaW5rIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXcifX0%3D" target="_blank" rel="noopener noreferrer">petite capsule vidéo</a>.
Connectez-vous à votre cPanel et téléversez votre fichier <em>index.html</em> afin de remplacer <em>la page temporaire fournie par défaut par votre hébergeur</em> par la votre.<br>
Ajoutez dans votre fichier README.md sur GitHub, un lien vers votre projet mis-en-ligne (un url qui se termine par tim-momo.com), vous pouvez aller le chercher <a href="https://cmontmorency365.sharepoint.com/:x:/s/TIM-TTP/ETGlFB3wwT9PmYOb1o-lczUBLlOwKr03B7HgyrdRYQgrqQ?e=cQc90C" target="_blank" rel="noopener noreferrer">dans le fichier Excel ici</a> .</checklist>


<alert>Attention de ne pas transférer tout le contenu du répertoire git sur le serveur. À cette étape, tu dois transférer que le fichier index.html. Il faudra s'assurer de transférer que les fichiers qui servent au site web live. Donc NE PAS transférer par exemple le dossier <em>source</em>. Sur l'hébergement, on est limités sur la quantité de données que l'ont peut transférer sur serveur et qui est réside sur le serveur. Donc on ne transfert que l'essentiel pour le fonctionnement du site live. </alert>

<dots></dots>
<grostitre>Remise</grostitre>
<p>Il n'y a pas de remise formelle. Donner accès git au client, remplir le README.md et mettre la page temporaire en ligne, constituent la remise en soi.</p>
<p>Date : Le tout devra avoir été fait d'ici le prochain cours, soit le jeudi le la <em>semaine 4</em>.</p>
<p>Évaluation : L'évaluation de cette portion est individuelle et compte pour 5% de la session (voir plan de cours pour les critères).</p>

<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<doclink href="https://smnarnold.com/cours/git/github">GitHub</doclink>
<intlink href="../../../582-424MO/git/collaboration/"></intlink>
<doclink href="https://smnarnold.com/cours/git/markdown">Markdown</doclink>



