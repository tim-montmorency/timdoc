 <?php

  /**
   * @type     article
   * @title    P1.2a - Échafaudage
   * @icon     images/icon.svg
   * @abstract Échafaudage (scaffolding) du projet et squelette de la page HTML 
   */
  ?>



<grostitre>Squelette de la page HTML</grostitre>
<h3>Requis à réaliser individuellement</h3>
<checklist>
    Chaque membre de l'équipe doit créer sa propre page HTML: index.html pour la landing page, app/index.html pour l'appli (c'est à dire que l'index.html de l'appli se retrouve dans un sous-dossier 📁 nommé app).
    Créez la a structure de base de votre page HTML (head, body etc). 
    Dans chacune de votre page HTML, copiez-collez les balises <em>link</em> et <em>script</em> de Bootstrap disponible dans la section <a href="https://getbootstrap.com/docs/5.3/getting-started/download/#cdn-via-jsdelivr" onclick="event.stopPropagation()" target="_blank">CDN via jsDelivr</a>. Ceci permettra d'inclure les fonctionnalités de Bootstrap dans votre projet via ce qui s'appel un CDN <em>(Content Delivery Network)</em>, soit des fichiers hébergés en ligne afin de permettre de les inclure rapidement et facilement dans un projet et de maximiser la cache des navigateurs. Attention, dans le fichier HTML, rappelez vous à quel endroit je vous conseille d'inscrire ces liens externes vers un fichier CSS et vers un fichier JavaScript.
    Assurez-vous d'avoir les balises HTML nécessaires, tel que je vous l'ai enseigné au <a href="https://tim-montmorency.com/timdoc/582-424MO/bootstrap/introduction/" onclick="event.stopPropagation()" target="_blank">cours 1</a>.
    N’oubliez pas la balise meta qui vous permet d’utiliser l’encodage utf-8 afin que vos accents soient pris en compte. 
    Indentez toujours votre code correctement (HTML ET CSS). Raccourcis VS Code sur Windows : Maj+Alt+F, sur Mac : Maj+Option+F 
</checklist>


 <grostitre>Échafaudage du projet</grostitre>
 <p>L’échafaudage, plus connu sous son nom anglophone <em>“scaffolding”</em>, consiste à créer une arborescence de
     dossiers et de fichiers qui seront utilisés afin de créer un site web. Le terme a été emprunté au domaine de la
     construction, où avant même de poser la première brique, un échafaudage est monté afin de simplifier la tâche à
     accomplir.</p>

     <h3>Requis à réaliser en équipe</h3>
 <checklist>
   Créez à la racine de votre projet les dossiers suivant 📁: <em>assets</em>, <em>css</em>, <em>js</em>, <em>scss</em>, <em>vendors</em>
   À l'intérieur de votre dossier css, ajoutez un fichier nommé <em>main.css</em>. Importez cette feuille de style sur chacune des pages HTML, après celle de Bootstrap.
   À l'intérieur de votre dossier js, ajoutez un fichier nommé <em>script.js</em>. Importez ce fichier JavaScript sur chacune des pages HTML, après celle de Bootstrap.
   À l'intérieur de votre dossier assets, créez un sous-dossier <em>artists</em> et un autre nommé <em>artworks</em>. Ces sous-dossiers contiendront les photos des artistes et les photos des oeuvres de votre site web. Toutes les autres images seront logés directement dans assets. C'est une bonne pratique de classer les images par catégorie lorsqu'on fait un site web et qu'on a des centaines d'images à gérer.
   Ouvrez votre fichier main.css, ce sera le fichier qui contiendra tous les styles communs au 2 pages (landing page et app).
   Créez vos variables qui représentent chacune des couleurs de votre palette.
   Liez vos fichiers fonts via la balise link dans le head du fichier HTML ou via @import dans le ficheir CSS.
   Créez des variablez pour le nom de vos différente fontes.
   Stylisez vos 6 niveaux de titre (headings) en utilisant le sélecteur de la balise et en créant aussi une classe avec le nom de la balise, par exemple : <span class="inline-code">h1, .h1{ font-size: 40px; font-weight: 900; color: var(--ma-couleur-primaire); }</span>
   Préparez des groupes de commentaires CSS qui vont séparer les sections de vos styles. Par exemple, tous les styles généraux vont se trouver sous le commentaire <span class="inline-code">/*-- Styles Généraux --*/</span> et les styles de la section Hero, se retrouveront sous les commenatires <span class="inline-code">/*-- Section Hero --*/</span>
   Copier-collez le fichier main.css 2 fois et renommez ces nouveaux fichiers <em>styles-app.css</em> et <em>styles-lp.css</em>. Ces fichiers contiendront les styles spécifiques à chacune des pages. Allez enlever tous les styles déjà écrits dans ces deux nouvelles feuilles de style pour partir de zéro (vous pouvez conserver les bloc de commentaires, ils vous serviront). Importez ces feuilles de styles dans les pages HTML respectives, après main.css.
 </checklist>

 <h4>Concernant l'étape #10 - Les commentaires</h4><br>
 <highlight  lang="css">/*--------------------------------------------------------- 
# Styles Généraux 
---------------------------------------------------------*/ 
header{
  ...
}
h1{
  ...
}
footer{
  ...
}

/*---------------------------------------------------------- 
# Section Hero  
----------------------------------------------------------*/ 
section.hero{
  ...
}
</highlight>
<br>
<h4>Concernant l'étape #9 - Les styles de headings (h1 à h6)</h4>
<info>
<p>Règle HTML et SEO: Une balise Hn ne peut être suivie que par une balise H(n+1) dans l'ordre du code source : on ne saute pas de niveau. </p>
<p>Par exemple, après une H1, il ne peut y avoir qu'une H2. <br>
Après une H3, il ne peut y avoir qu'une H4. </p>
 
 <p>Mais parfois on veut visuellement donner le style de h5 à un h3. Donc ça nous permet d’utiliser la bonne balise mais avec le style d’une autre, donc on aurait par exemple:</p> <span class="inline-code">&lt;h3 class=&quot;h5&quot;&gt;Titre de section&lt;/h3&gt;</span></info>



 <br> <br> <br> <br> <br>