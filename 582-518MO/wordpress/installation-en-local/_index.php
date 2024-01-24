<?php 
/**
 * @type     article
 * @title    Installation en local
 * @icon     images/icon-wp.png
 * @abstract Installer WordPress pour développement en local
 * @index 99
 */
?>


<p>Pour télécharger la plus récente version de WordPress, rendez-vous sur la&nbsp;<a href="https://fr-ca.wordpress.org/download/#download-install" target="_blank">page de téléchargement de WordPress.org</a></p>
<warning>Attention de ne pas confondre avec <strong>WordPress<em>.org</em></strong> et <strong>WordPress<em>.com</em></strong>, ce dernier offre des solutions&nbsp;payantes.</warning>


<dots></dots>
<grostitre>AMP</grostitre>
<ol start="1">
    <li>Décompressez le .zip 🗜️ dans le dossier associé à votre outil Apache, MySQL et PHP <em>(AMP)</em>.</li>
</ol>
<info>Dans le cadre de cet exemple, MAMP sera le logiciel AMP utilisé, mais plusieurs variantes similaires sont aussi disponibles: WampServer, XAMPP,&nbsp;etc.</info>

<p>Par exemple, si vous utilisez&nbsp;<a rel="noopener noreferrer" href="../mamp/"  target="_blank">MAMP</a>, créez un dossier📁 à l'intérieur du dossier&nbsp;<em>htdocs</em>📁 et donnez-lui le nom de votre&nbsp;projet.</p>

<ol start="2">
    <li>Ouvrez votre logiciel AMP et démarrez les serveurs. Assurez-vous que l'<strong>Apache Server</strong>&nbsp;et le&nbsp;<strong>MySQL server</strong>&nbsp;soient bien activés. Un indicateur visuel devrait vous indiquer leur&nbsp;statut.</li>
</ol>

<p>Par exemple, MAMP affiche un point vert 🟢 à leur droite confirmant leur&nbsp;fonctionnement.</p>
<p style="text-align: center;"><small>L'interface MAMP est sujette à changements.</small></p>
<img src="images/mamp-start.jpg" alt="Point verts vis-à-vis MySQL et Apache">




<dots></dots>
<grostitre>Base de données</grostitre>
<ol start="1">
    <li>Cliquez sur le bouton&nbsp;<em>Open WebStart page</em>&nbsp;situé au milieu du logiciel MAMP, vous serez redirigé vers la page d'accueil de MAMP où un lien vous permettra d'accéder à&nbsp;phpMyAdmin (sous le menu Tools).</li>
</ol>
<img src="images/phpmyadmin-link.jpg" alt="">




<ol start="2">
    <li>À partir du menu à gauche de phpMyAdmin, sélectionner l'option&nbsp;<em>New</em>&nbsp;afin de créer une nouvelle base de&nbsp;données.</li>
</ol>
<img src="images/phpmyadmin-new.jpg" alt="">


<ol start="3">
    <li>Donnez ensuite le nom de votre projet à la base de données et appuyez sur le bouton&nbsp;<incode>Create</incode>.</li>
</ol>
<img src="images/phpmyadmin-form.jpg" alt="">



<p>Félicitation! Vous avez maintenant une base de données vide prête à être populée par&nbsp;WordPress.</p>







<dots></dots>
<grostitre>Configuration WordPress</grostitre>
<ol start="1">
<li>
    <p>Retournez sur la page d'accueil de MAMP, via l'option&nbsp;<em>Open WebStart page</em>&nbsp;et sélectionner l'onglet&nbsp;<em>My website</em>. Une liste correspondant aux projets dans le dossier&nbsp;<em>htdocs</em> 📁 devraient&nbsp;s'afficher.</p>
<p>Sélectionner votre&nbsp;projet.</p>

Si le message suivant s'affiche:<br>

<blockquote><p><em>If you can see this page, your new virtual host was set up successfully. Now, web content can be added and this placeholder page<sup>1</sup>&nbsp;should be replaced or deleted.</em></p></blockquote>

<p>Effacez le fichier&nbsp;<em>index.html</em>&nbsp;à la racine du dossier&nbsp;<em>htdocs</em> 📁.</p><br></li>
</ol>


<ol start="2"><li><p>Un message de bienvenue de la part de WordPress devrait s'afficher.</p>
<p>Appuyez sur le bouton&nbsp;<em>C'est parti !</em></p><br></li></ol>



<ol start="3">
    <li>
        <p>Remplissez les informations de connexion à votre base de données.</p>

        <ul>
            <li><incode>Nom la base de données</incode>&nbsp;correspond à celui que vous avez donné lorsque&nbsp;<a rel="noopener noreferrer" href="#base-de-donnees">vous avez créé votre base de données</a>&nbsp;dans&nbsp;phpMyAdmin.</li>
            
            <li><incode>Identifiant</incode>, à moins que vous l'ayez changé, l'identifiant local par défaut est&nbsp;<em>root</em>.</li>
            
            <li><incode>Mot de passe</incode>, à moins que vous l'ayez changé, le mot de passe local par défaut est&nbsp;<em>root</em>.</li>
            
            <li><incode>Adresse de la base de données</incode>&nbsp;laissez&nbsp;<em>localhost</em>.</li>
            
            <li><incode>Préfixe de tables</incode>&nbsp;laissez&nbsp;<em>wp_</em>.</li>
        </ul>

        <p>Et appuyer sur&nbsp;<em>Envoyer</em></p>

</li>
</ol>



<img src="images/wp-db-connexion.jpg" alt="">


<info>Si vous avez une erreur, il est probable que le nom de la base de données entré ne soit pas identique au nom donné dans phpMyAdmin. Revérifiez le nom et&nbsp;recommencez.</info>
    <br>     
<ol start="4">
    <li><p>Entrez ensuite les informations désirées pour votre&nbsp;site.</p>
    <ul>
        <li>Nom du site</li>
        <li>Nom d'usager</li>
        <li>Mot de passe</li>
        <li>Prendre le temps de cocher: "Demander aux moteurs de recherche de ne pas indexer ce site" car c'est un travail d'école.</li>
        <li>etc.</li>
    </ul>


</li>
</ol>

    