<?php 
/**
 * @type     article
 * @title    Migraton données WP en équipe
 * @icon     images/icon.svg
 * @abstract Comment migrer vos données entre co-équipier
 * @index 1
 */
?>

<h2>PROJET DE SESSION: Procédure de migration des données d'une installation WordPress à une autre.</h2>
<p>Rappel:</p>
<intlink href="../../wordpress/migration-de-donnees/"></intlink>
<br>
<h3>Voici comment vous allez procéder pour votre projet de session :</h3>



<p>À chaque fois que vous avez besoin de créer un <br> <em>type de publication personnalisé (custom post type)</em> ou  un <br><em>champs personnalisé (Secure Custom Field (SCF))</em> ou du nouveau contenu pour tester votre développement en local, vous allez le faire sur la version en ligne, hébergé sur le serveur hostpapa <em>https://nom-equipe.tim-momo.com/</em>. Ce sera la copie “maître” de votre site en développement.</p>

<p>Lorsque vous avez terminé votre travail de création de type de publication (post type), de champs personnalisé (secure custom field) ou de contenu quelconque, vous allez exporter&nbsp;: </p>

<ol>
    <li style="margin: 0;">La structure via l'outil d'export de SCF (fichier .json) </li>
    <li style="margin: 0;">Contenu des pages via l'outil d'export de Wordpress (fichier .xml) </li>
</ol>

<p>Nommez les fichiers en date d’aujourd’hui (jour de l’export), suivi de vos initiales, donc  </p>
<ol>
    <li style="margin: 0;">scf-structure-2024-11-15-mmo.json </li>
    <li style="margin: 0;">wp-donnees-2024-11-15-mmo.xml</li>
</ol>

<p>Enregistrez ces fichiers dans le dossier <em>source</em> de votre git, dans un sous-dossier nommé <em>exportations-wp</em>.</p>


<p>Faites un import en local, vérifiez que tout s’est bien passé. Avertissez immédiatement vos coéquipiers que vous avez fait un export et qu’ils doivent mettre leur version WordPress local à jour dès qu’ils peuvent. </p>

