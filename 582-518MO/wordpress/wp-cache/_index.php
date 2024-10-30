<?php 
/**
 * @type     article
 * @title    Mémoire cache
 * @icon     ../medias/icon.webp
 * @abstract À propos de la mémoire cache de WP et la cache locale
 * @index    20
 * @ref      web/wordpress
 */
?>

<p>Lorsqu’on développe un thème WordPress, bien qu’il soit possible de modifier directement les fichiers de modèles PHP (templates), le fichier <em>main.js</em> ou <em>style.css</em>, il arrive parfois que les changements n’apparaissent pas immédiatement sur la page, même après avoir actualisé celle-ci dans le navigateur. Pourquoi ? À cause de la mémoire cache, plus couramment appelée <em>la cache</em>.</p>

<dots></dots>
<grostitre>La cache du navigateur local</grostitre>
<p>La cache du navigateur côté client (local) est une mémoire réservée au stockage des informations, des pages ou des fichiers fréquemment utilisés. Il permet à votre navigateur de ne pas avoir à charger ces derniers à chaque accès, ce qui accélère ainsi leur affichage.</p>
<p>Pour vider votre cache selon le navigateur, vous pouvez consulter la ressource ci-comte:  <doclink href='https://ecom-support.lightspeedhq.com/hc/fr/articles/220320128-Purge-de-la-m%C3%A9moire-cache-de-votre-navigateur'>Bloogue de Lightspeed</doclink></p>


<dots></dots>
<grostitre>La cache WordPress</grostitre>
<p>En bref, la cache est un emplacement de stockage qui permet la collecte de données temporaires de votre site côté serveur dans le but d’accélérer leur chargement lors d’une requête SQL ultérieure. Lorsqu'on développe, si on ne voit pas les modifications effectuées dans le développement du thème, il peut être recommandé de vider la cache du site WordPress côté serveur. Selon l'article suivant, WordPress n'active pas l'option de vider la cache par défaut pour éviter des problèmes de performances à votre site:</p>
<doclink href='https://wordpress.com/fr/support/vider-le-cache-de-votre-site/'>WordPress.com > Vider le cache</doclink>

<p>Cependant, selon ce <a href="https://www.hostinger.com/tutorials/wordpress-changes-not-showing" target="_blank" rel="noopener noreferrer">tutoriel Hostinger</a>, on propose d'installer une extension qui vous permettra d'avoir plus de flexibilité pour gérer la cache côté serveur, donc l'ajout d,un bouton pour <em>Vider la cache</em>. Dans votre cas, je vous conseille <a href="https://wordpress.org/plugins/w3-total-cache/" data-wpel-link="external" target="_blank" rel="nofollow noopener noreferrer">W3 Total Cache</a>.</p>
<p>W3 Total Cache fonctionne automatiquement en arrière-plan dès son installation. Il offre plusieurs façons de vider le cache du site. Il suffit de survoler le menu Performance dans la barre d'outils de WordPress et de cliquer sur Purger tous les caches.</p>

<img src="images/w3cache-purgeallcache.webp" alt="Performance/Purge all caches">


<dots></dots>
<grostitre>Fichiers CSS, JS</grostitre>
<p>Lorsqu'on est en développement d'une thème WordPress voici comment désactiver temporairement la cache du/des fichiers CSS et JS via <em>function.php</em>.</p>
    
<p><strong>Pour le fichier CSS : </strong></p>
<highlight lang='php'>
wp_enqueue_style('default', get_template_directory_uri() . '/style.css');
</highlight>


<p>ajoutez:</p>
<highlight lang='php'>'?v='.time() </highlight>
<p>vous devriez avoir quelques chose comme ceci :</p>
<highlight lang='php'>wp_enqueue_style('default', get_template_directory_uri() . '/style.css?v='.time()); </highlight>

<p><strong>Pour le fichier JS : </strong></p>
<p>Faites de même pour le fichier JS que vous développez et qui est chargé via <em>function.php</em>.</p>

<dots></dots>
<p><strong>Explications</strong></p>
<p>La fonction PHP <span class='inline-code'>time()</span> renvoie l'heure actuelle en nombre de secondes depuis l'époque Unix (1er janvier 1970 00:00:00 GMT). Ainsi, à chaque fois que vous affichez la page, la valeur du paramètre d'URL <span class='inline-code'>v</span> sera toujours différente, forçant à aller chercher la dernière version du fichier style.css, plutôt que de récupérer celui qui se trouve dans la cache.</p>

<warning>Lorsque vous aurez terminé de développer le site, avant de le lancer en production (live), il faudra enlever ce paramètre <span class='inline-code'>?v='.time()</span> afin réactiver la cache à nouveau sur ces fichiers.</warning>


 



