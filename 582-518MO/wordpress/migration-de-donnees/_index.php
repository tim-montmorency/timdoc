<?php 
/**
 * @type     article
 * @title    Migration de données
 * @icon     ../medias/icon.webp
 * @abstract Migrer les données d'un site WordPress vers un autre
 * @index    13
 * @ref      web/wordpress
 */
?>


<p>WordPress permet nativement de migrer les données d'un site WordPress vers un autre. Cependant, cet outil ne fait que transférer les données stockées dans une base de données vers une autre. </p>

<p>Autrement dit, si une extension stocke des informations ailleurs que dans la base de données associée au projet, par exemple dans un fichier JSON, ces informations ne seront pas transférées lors de la migration, donc perdues. </p>

<p>Qui plus est, même si les données sont migrées dans la nouvelle base de données, WordPress nécessitera quand même une structure lui indiquant le lien entre ces données et le site lui-même. Pour ce faire, plusieurs extensions offrent une option d'importation/exportation. Cette option permet de récupérer la structure créée par l'extension et de la copier d'une instance WordPress vers une autre. </p>

<p>Avant d'utiliser l'outil de migration de WordPress, il est primordial: </p>

<ol start="1">
    <li><p>D'installer la version la plus récente du thème.</p></li>
    <li><p>D'installer les extensions utilisées sur la première instance de WordPress sur la deuxième. </p></li>
    <li><p>De valider si ces extensions ont une option d'importation/exportation. Si tel est le cas, d'importer les structures de ces extensions sur la nouvelle instance de WordPress. Cette étape peut être facultative si la structure a déjà été recopiée auparavant et que celle-ci n'a pas changé depuis. </p></li>
</ol>

<dots></dots>
<grostitre>Exportation</grostitre>
<p>Pour avoir accès à l'outil d'exportation de WordPress, il faut aller dans l'onglet <incode>Outils</incode> et sélectionner l'option <incode>Exporter</incode>. Une liste de boutons radio permet alors de choisir si l'ensemble du site ou seulement certaines parties doivent être exportés. Cliquer sur le bouton <em>Télécharger le fichier d'export</em> permet alors d'obtenir un fichier XML contenant les données du site.</p>
<doclink href="https://wordpress.org/support/article/tools-export-screen">Export</doclink>



<dots></dots>
<grostitre>Importation</grostitre>
<p>Pour avoir accès à l'outil d'importation de WordPress, il faut aller dans l'onglet <incode>Outils</incode> et sélectionner l'option <incode>Importer</incode>. Différentes options permettent alors de choisir la provenance des données à importer <em>(Blogger, Tumblr, etc.)</em>. Si la migration provient d'une autre instance de WordPress, il faut alors choisir l'option <em>WordPress</em>. Dès lors, un champ permettant de charger un fichier XML devrait apparaitre. En important le fichier XML du site désiré, les données de celui-ci devraient alors être recopiées vers le nouveau site.</p>
<warning>Portez attention aux messages affichés lors de l’importation. WordPress tentera de vous aviser si certaines structures semblent&nbsp;manquantes.</warning>

<doclink href="https://wordpress.org/support/article/tools-import-screen/">Import</doclink>

<br><br>
<!-- 
              <aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="../../exercices/wp-query-les-bagnoles/" target="_blank" class="exercice-card__title">
        WP Query - Les&nbsp;Bagnoles
      </a>

            <p class="exercice-card__description">Pour cet exercice vous et votre coéquipier devez créer un microsite permettant de présenter les protagonistes du film les&nbsp;Bagnoles.
Votre...</p>
          </div>

      </aside>
  -->

<exercice href="../../exercices/wp-query-les-bagnoles/"></exercice>