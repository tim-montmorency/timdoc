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


<p>À chaque fois que vous avez besoin de créer un <em>Custom Post Type</em>, un <em>Advanced Custom Field (ACF)</em> ou encore du nouveau contenu (nouvelles pages de différents types) pour tester votre développement en local, vous allez le faire sur la version en ligne, hébergé sur le serveur hostpapa https://nom-equipe.tim-momo.com/wordpress/. Ce sera la copie “maitre” de votre site en développement. Lorsque vous avez terminé votre travail pour ce que vous avez à faire à ce moment, vous allez exporter&nbsp;: </p>

<ol>
    <li style="margin: 0;">CPT UI (copier le code d’export et en faire un fichier .json)  </li>
    <li style="margin: 0;">ACF (fichier .json) </li>
    <li style="margin: 0;">Contenu de Wordpress (fichier .xml) </li>
</ol>

<p>Nommez les fichiers en date d’aujourd’hui (jour de l’export), suivi de vos initiales, donc  </p>
<ol>
    <li style="margin: 0;">cpt-2023-10-30-mmo.json </li>
    <li style="margin: 0;">acf-2023-10-30-mmo.json </li>
    <li style="margin: 0;">wpcontent-2023-10-30-mmo.xml</li>
</ol>

<p>Enregistrez ces fichiers dans le dossier <em>source</em> de votre git, dans un sous-dossier nommé <em>exportations-wp</em>.</p>


<p>Faites un import en local, vérifiez que tout s’est bien passé. Avertissez immédiatement vos coéquipiers que vous avez fait un export et qu’ils doivent mettre leur version WordPress local à jour dès qu’ils peuvent. </p>

