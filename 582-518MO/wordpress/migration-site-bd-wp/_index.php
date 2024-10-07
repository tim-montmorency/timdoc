<?php 
/**
 * @type     article
 * @title    Migration complète d'une installation WP
 * @icon     ../medias/icon.webp
 * @abstract Migration une installation complète de WP
 * @index    11
 * @ref      web/wordpress
 */
?>
<ol>
  <li>Depuis l'ordinateur initial : Sauvegardez <em>le dossier contenant les fichiers de votre installation WordPress</em> sur votre outil de sauvegarde habituel (cloud, clé USB, disque dur externe). Le contenu du dossier en question devrait ressembler à ceci : <img src="images/installation-wp.jpg" alt="liste de fichiers de base d'une installation WordPress" style="width: 200px;"></li>
  <li>Depuis l'ordinateur initial : Exportez votre base de données via phpMyAdmin. Vous pouvez enregistrer le fichier d'export .sql à côté de votre dossier de projet que vous avez précédemment enregistré. <img src="images/export-phpmyadmin.webp" alt="export bd"></li>
  <li>Sur le nouvel ordinateur : Installez MAMP (si ce n'est pas déjà fait).</li>
  <li>Dans htdocs, dupliquez <em>le dossier contenant les fichiers de votre installation WordPress</em>.</li>
  <li>Depuis votre dossier de projet, supprimez votre fichier <em>wp-config.php</em>.</li>
  <li>Sur le nouvel ordinateur : Allez dans phpMyAdmin et créez une nouvelle base de données toute fraîche, idéalement avec le même nom que votre base de données initiale.</li>
  <li>Toujours dans phpMyAdmin, positionné sur votre nouvelle base de données fraîchement créée, importez votre fichier d'export (le fichier .sql).</li>
  <li>Rendez-vous sur localhost/LeCheminDAccesPourSeRendreAuDossierDeProjet</li>
  <li>Suivez les instructions (nom de BD, root, root, localhost, wp-).</li>
</ol>

<alert>Si l'avant-dernière étape retourne une erreur, c'est que votre configuration MAMP n'est pas identique à celle de l'école. Donc, l'URL est différent. Ainsi, au lieu de <span class='inline-code'>localhost:81/abc</span>, il est souvent possible que votre URL n'affiche que <span class='inline-code'>localhost/abc</span>. Pour remédier à ce problème, vous devez ouvrir phpMyAdmin, accéder à la table <em>wp-options</em> et éditer <em>siteurl</em> avec l'URL de votre installation actuelle. Vous devez aussi faire la même chose pour <em>home</em> (dans la même table).</alert>

<warning>Autre problème possible : votre navigateur vous redirige toujours vers <span class='inline-code'>localhost:81/abc</span> même si vous tapez <span class='inline-code'>localhost/abc</span>. Si tel est le cas, vous devez vider le cache de votre navigateur. Pour développer votre débrouillardise, je vous laisse trouver comment le faire, vous avez les outils pour y parvenir.</warning>

<dots></dots>
<grostitre>White Page of Death</grostitre>
<p>Si vous avez fait tout ce qui a été suggéré ci-haut et que lorsque vous accédez à votre site sur localhost, on vous retourne toujours une page blanche, allez à la racine de votre site, renommez le ficheir <em>wp-config.php</em> vers ce nouveau nom <em>wp-config-old.php</em>. Ceci forcera Wordpress à l'ignorer.</p>  

<p>Retournez maitnenant dans localhost/nom-de-votre-site dans votre navigateur web. Vous devriez maintenant avoir une page d'initiation à l'installation Wordpress suivi d'un bouton <em>C'est parti !</em>, cliquez dessus.</p>

<p>Dans le nouvel écran:</p>


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

<img src="../installation-en-local/images/wp-db-connexion.jpg" alt="">

<p>Suite à quoi, vous devriez voir un message qui ressemble à "Wordpress est déjà installé, voulez vous vous connecter?"</p>

<p>Ensuite connectez-vous <em>et voilà !</em></p>

