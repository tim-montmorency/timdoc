<?php

/**
 * @type     article
 * @title    Git ignore
 * @icon     images/icon.svg
 * @abstract Indiquer à Git d'ignorer les fichiers qui n'appartiennt pas au projet
 */
?>


<div class="bard wysiwyg" data-module="Bard">
          <p>Parfois un projet ne contient pas uniquement que du code écrit par son ou ses développeurs, mais aussi des fichiers ou dossiers générés par des outils, tels que: des éditeurs de textes, des compilateurs, etc. Ces fichiers, bien qu'utiles pour la personne les ayant générés, ne sont malheureusement pas utiles pour les autres membres de son équipe. Pire, ils peuvent ralentir Git et même créer des conflits inutiles à répétition. Afin d'éviter ces désagréments, il est nécessaire de pouvoir indiquer à Git de ne pas monitorer certains fichiers 📄 ou dossiers 📁.</p>




<dots></dots>
<grostitre>Création</grostitre>
<p>Lorsque vous créez un répertoire sur GitHub, celui-ci vous propose de créer un fichier <code>.gitignore</code> pour vous. Si vous avez sauté cette étape, il est possible de manuellement créer un fichier nommé <code>.gitignore</code> à la racine de votre projet.</p>






<dots></dots>
<grostitre>Ignorer un fichier 📄</grostitre>


          <p>Pour ignorer un fichier par nom, il suffit d'inscrire le nom du fichier en question dans le fichier <code>.gitignore</code>.</p><p>Par exemple, pour ignorer le fichier "<em>demo.txt"</em>:</p><pre><code class="hljs">demo.txt</code></pre><p>Pour ignorer tous les fichiers avec une extension en particulier, il suffit de spécifier le nom de l'extension en question et de la préfixer par le symbole <code>*</code> indiquant que tout nom est accepté.</p><p>Par exemple, pour ignorer tous les fichiers "<em>.txt"</em>:</p><pre><code class="hljs">*.txt</code></pre>








<dots></dots>
<grostitre>Ignorer un dossier 📁</grostitre>


          <p>Pour ignorer un dossier, il suffit de nommer le dossier en question dans le fichier <code>.gitignore</code> et de lui ajouter en suffixe le symbole <code>/</code> indiquant qu'il s'agit d'un dossier.</p><p>Par exemple pour ignorer le dossier <em>"node_modules"</em>:</p><pre><code class="hljs">node_modules/</code></pre>











<dots></dots>
<grostitre>Commentaires</grostitre>


          <p>Tout texte préfixé par le symbole <code>#</code> est considéré comme étant commentaire à l'intérieur d'un fichier <code>.gitignore</code>. Il est de bonne coutume de spécifier avec un commentaire ce que fait une ligne dans un fichier <code>.gitignore</code>.</p><p>Par exemple:</p><pre><code class="hljs php"><span class="hljs-comment"># Ignore all NPM dependencies</span>
node_modules/</code></pre>



<br>
<br>






          <aside class="tool-card">
  <div class="tool-card__content">
    <em class="tool-card__tagline">🛠 Outil</em><br class="tool-card__break">
    <a href="https://github.com/github/gitignore" target="_blank" rel="noopener noreferrer" class="tool-card__title">
      <strong>Une collection de&nbsp;.gitignore</strong>
    </a>

        <p class="tool-card__description">Collection de fichiers .gitignore sur GitHub en fonction des langages et logiciels&nbsp;utilisés.</p>
      </div>

 
    </aside>

    
    </div>
