<?php 
/**
 * @type     article
 * @title    MAMP
 * @icon     images/icon.webp
 * @abstract Environnement de serveur local pour exécuter WordPress
 * @index    100
 * @ref      web/outils
 */
?>
<p>MAMP est un environnement de serveur local gratuit fournissant le nécessaire afin d'exécuter WordPress à des fins de développement. Son acronyme provient des mots:<br>

<em>Macintosh, Apache,  MySQL et [PHP, Pearl ou Python]</em></p>

<p>Bien que ce logiciel est initialement été conçu pour macOS, il est maintenant disponible en version Windows depuis plusieurs années.</p>

<p>MAMP n'est pas intimement lié à Wordpress, le CMS que nous allons explorer aujourd'hui. MAMP correspond à un ensemble d'outils qui contient notamment un serveur virtuel, afin de nous permettre d'exécuter du code serveur tel que du PHP et de faire des requêtes à une base de données. Il vous permet donc d'avoir un environnement serveur simulé localement, sur vos postes de travail.</p>

<dots></dots>
<grostitre>Téléchargement</grostitre>
<p><a href="https://www.mamp.info/en/mamp/" target="_blank">https://www.mamp.info/en/mamp/</a></p>
<p>Le site de MAMP devrait reconnaitre automatiquement votre système d'exploitation et vous rediriger vers la page relative à votre OS. En cas contraire, sélectionnez votre système d'exploitation dans la liste déroulante de <em>Free Download</em> en cliquant sur la petite flèche à droite du bouton. Lorsque votre système d'exploitaion est bien sélectionné, cliquez sur le bouton <em>Free Download</em>.</p>

<alert>Il est possible qu'une affiche popup "NANO DNS App", si tel est le cas, vous devez simplement ignorer ce popup, ce n'est pas ce qu'on veux installer aujourd'hui. </alert>

<p>Une seconde plus tard, une fenêtre de votre système d'expoitation devrait apparaitre afin de sélectionner l'endroit où sauvegarder l'installeur MAMP.</p>


<dots></dots>
<grostitre>Démarrage</grostitre>
<p>Pour commencer, ouvrir le logiciel nommé MAMP (et non la version MAMP PRO même si les deux sont installés).</p>
<p>Pour démarrer le système, il suffit de cliquer sur le bouton <em>"Start"</em>. Les indicateurs <em>“Apache Server”</em> et <em>“MySQL Server”</em> devraient tourner au vert 🟢 afin d’indiquer que les serveurs locaux sont actifs. La page d’accueil de MAMP devrait aussi s’ouvrir dans votre navigateur.&nbsp;</p>

<img src="images/mamp-start.jpg" alt="Start en haut à droite">





<dots></dots>
<grostitre>Création d'un projet</grostitre>
<p>Les projets utilisant MAMP doivent se trouver à l'intérieur du dossier <em>"htdocs"</em> 📁 de MAMP afin de bénéficier des serveurs de MAMP. Sous Windows, ce dossier ce trouve généralement à cet emplacement <em>“C:\MAMP\htdocs”</em> et sous Mac dans <em>“/Applications/MAMP/htdocs”</em>. Je vous conseille de créer un raccourci vers <em>"htdocs"</em> dans votre navigateur de fichiers.</p>

<clipasset src='images/htdocs-raccourci.mp4'></clipasset>






<dots></dots>
<grostitre>Trouver ses projets</grostitre>
<p>Pour trouver ses projets, il suffit d'aller sur la page d’accueil de MAMP. Si cette dernière ne s’ouvre pas automatiquement au démarrage de MAMP ou si vous l’avez fermé par erreur, vous pouvez l’ouvrir manuellement via le bouton <em>“Open WebStart page”</em> de l’interface MAMP.</p>


<p>À partir de cette page, repérer l’option <em>“My Website”</em> du menu principal. Ce lien vous mènera vers la liste des projets MAMP sur votre poste.</p>

<h3 class="heading heading--h3" id="L'onglet My Website est non disponible">L'onglet My Website est non disponible</h3>
<p>Si l'option <em>"My Website"</em> n'est pas disponible dans votre version de MAMP, vous pouvez toujours accéder manuellement à l'URL d'un projet. Pour ce faire, il faut connaitre le nom du dossier du projet en question 📁 et allez voir dans les préférences de MAMP le port utilisé <em>(généralement 80 ou 8888)</em>. Tapez ensuite dans la barre d'URL de votre navigateur une adresse au format suivant:</p>

<highlight lang='html'>http://localhost:[numéro du port]/[nom du dossier du projet]</highlight>



<p>Par exemple, pour un projet contenu dans un dossier nommé <em>"demo" </em>et utilisant le port 80:</p>


<highlight lang='html'>http://localhost:80/demo</highlight>


<img src="images/chemin-vers-mamp-site.jpg" alt="">



<dots></dots>
<grostitre>MySQL refuse de s'allumer</grostitre>
<p>Ce problème provient d'une configuration propre au collège<em> (vous ne devriez pas rencontrer ce problème chez vous)</em>. Pour le contourner, il faut supprimer le fichier <incode>mysql-bin.index</incode> dans le dossier <incode>MAMP &gt; db &gt; mysql</incode>.</p>
<br>

<img src="images/mamp-mysql.png" alt="">




<dots></dots>
<grostitre>Alternatives</grostitre>


  <ul>
      <li><a target="_blank" rel="noopener noreferrer" href="https://www.wampserver.com/">WampServer</a></li>
      <li><a target="_blank" rel="noopener noreferrer" href="https://www.apachefriends.org/fr/index.html">XAMPP</a></li>
      <li><a target="_blank" rel="noopener noreferrer" href="https://laragon.org/">Laragon</a></li>
      <li>Etc.</li>
  </ul>

 