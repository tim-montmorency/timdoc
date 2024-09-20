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
