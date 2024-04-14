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
    Chaque membre de l'équipe doit créer sa propre page HTML nommé dans les 2 cas : <em>index.html</em>. Le fichier index.html de la langing page sera placé à la racine du dossier du projet 📁 alors que le fichier index.html de l'appli sera placé dans un sous-dossier 📁 <em>/app</em>.
    Créez la structure de base de votre page HTML (head, body etc). 
    Dans chacune de votre page HTML, copiez-collez les balises <em>link</em> et <em>script</em> de Bootstrap disponible dans la section <a href="https://getbootstrap.com/docs/5.3/getting-started/download/#cdn-via-jsdelivr" onclick="event.stopPropagation()" target="_blank">CDN via jsDelivr</a>. Ceci permettra d'inclure les fonctionnalités de Bootstrap dans votre projet via ce qui s'appel un CDN <em>(Content Delivery Network)</em>, soit des fichiers hébergés en ligne afin de permettre de les inclure rapidement et facilement dans un projet et de maximiser la cache des navigateurs. Attention, dans le fichier HTML, rappelez-vous à quel endroit je vous conseille d'inscrire ces liens externes vers un fichier CSS et vers un fichier JavaScript.
    Assurez-vous d'avoir les balises HTML nécessaires au bon fonctionnement de Bootstrap, tel que présenté dans  <a href="https://tim-montmorency.com/timdoc/582-424MO/bootstrap/introduction/" onclick="event.stopPropagation()" target="_blank">l'introduction de Bootstrap</a>.
    N’oubliez pas la balise <em>meta</em> qui vous permet d’utiliser l’encodage utf-8 afin que vos accents soient pris en compte. 
    Indentez toujours votre code correctement (HTML ET CSS). Raccourcis VS Code sur Windows : Maj+Alt+F, sur Mac : Maj+Option+F 
</checklist>


<dots></dots>
 <grostitre>Échafaudage du projet</grostitre>



 <p>L’échafaudage, plus connu sous son nom anglophone <em>“scaffolding”</em>, consiste à créer une arborescence de dossiers et de fichiers qui seront utilisés afin de créer un site web. Le terme a été emprunté au domaine de la construction, où avant même de poser la première brique, un échafaudage est monté afin de simplifier la tâche à accomplir.</p>

 <h3>Requis à réaliser en équipe</h3>

<p>D'abord lisez ces précisions concernant l'étape #13 et l'étape #14.</p>

<h4>Concernant l'étape #13 - Les styles de headings (h1 à h6)</h4>
<info>
  <p>Règle HTML et SEO: Une balise <em>&lt;h(n)&gt;</em> ne peut être suivie que par une balise <em>&lt;h(n+1)&gt;</em> dans l'ordre du code source : on ne saute pas de niveau. </p>
  <p>Par exemple, après une balise <em>&lt;h1&gt;</em>, il ne peu y avoir qu'une balise <em>&lt;h2&gt;</em>, pas autre chose. <br>
  Après une balise <em>&lt;h3&gt;</em>, il ne peut y avoir qu'une <em>&lt;h4&gt;</em>. </p>
  
  <p>Mais parfois on veut visuellement donner le style de h5 à un h3. Donc ça nous permet d’utiliser la bonne balise mais avec le style d’une autre, donc on aurait par exemple:</p> <span class="inline-code">&lt;h3 class=&quot;h5&quot;&gt;Titre de section&lt;/h3&gt;</span>
</info>
<info>Notez aussi, toujours selon les règles SEO, qu'il ne devrait y avoir qu'un seul titre de niveau <em>&lt;h1&gt;</em> par page, c'est à dire le titre de la dite page. Ensutie, si vous avez plusieurs sections dans la page, avec des titres de section, il conviendrait d'utiliser la balise <em>&lt;h2&gt;</em>, etc.</info>

 <br>




<h4>Concernant l'étape #14 - Les commentaires</h4><br>
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

 <h3>Requis</h3>

 <checklist>
  Créez un dossier de projet commun (ce dossier sera poussé sur github au prochain cours).
  Ajoutez un sous-dossier nommé <em>app</em>.
  À la racine du dossier de projet, ajoutez le fichier <em>index.html</em> qui correspond à la <em>landing page</em>.
  Dans le sous-dossier <em>app</em>, ajoutez le fichier <em>index.html</em> qui correspond à l'<em>appli</em>.
   Créez à la racine du dossier de votre projet les sous-dossiers suivant 📁: <em>assets</em>, <em>css</em>, <em>js</em>, <em>scss</em>, <em>vendors</em>
   À l'intérieur de votre dossier <em>css</em>, ajoutez un fichier nommé <em>main.css</em>. Importez cette feuille de style sur chacune des pages HTML, après celle de Bootstrap.
   À l'intérieur de votre dossier <em>js</em>, ajoutez un fichier nommé <em>script.js</em>. Importez ce fichier JavaScript sur chacune des pages HTML, après celle de Bootstrap.
   À l'intérieur de votre dossier <em>assets</em>, créez un sous-dossier <em>artists</em> et un autre nommé <em>artworks</em>. Ces sous-dossiers contiendront les photos des artistes et les photos des œuvres de votre site web. Toutes les autres images seront logées directement dans assets. C'est une bonne pratique de classer les images par catégorie lorsqu'on fait un site web et qu'on a des centaines d'images à gérer.
   Ouvrez votre fichier <em>main.css</em>, ce sera le fichier qui contiendra tous les styles communs au 2 pages (landing page et app).
   Créez des variables css qui représentent chacune des couleurs de votre palette.
   Liez vos fichiers de polices de caractère (fontes) via la balise link dans le head du fichier HTML ou via @import dans le fichier CSS.
   Créez des variables pour le nom de vos différentes fontes.
   Stylisez vos 6 niveaux de titre (headings) en utilisant le sélecteur de la balise et en créant aussi une classe avec le nom de la balise, par exemple : <br><span class="inline-code">h1, .h1{ font-size: 40px; font-weight: 900; color: var(--ma-couleur-primaire); }</span><br><span class="inline-code">h2, .h2{ font-size: 34px; font-weight: 700; color: var(--ma-couleur-primaire); }</span>
   Préparez des groupes de commentaires CSS qui vont séparer les sections de vos styles. Par exemple, tous les styles généraux vont se trouver sous le commentaire <br><span class="inline-code">/*----- Styles Généraux -----*/</span><br> et les styles de la section Hero, se retrouveront sous le commentaire <br><span class="inline-code">/*----- Section Hero -----*/</span>
   Copiez-collez le fichier <em>main.css</em> 2 fois et renommez ces nouveaux fichiers <em>styles-app.css</em> et <em>styles-lp.css</em>. Ces fichiers contiendront les styles spécifiques à chacune des pages. Allez enlever tous les styles déjà écrits dans ces deux nouvelles feuilles de style pour partir de zéro (vous pouvez conserver les bloc de commentaires, ils vous serviront). Importez ces feuilles de styles dans les pages HTML respectives, après <em>main.css</em>.
 </checklist>





 <br> <br> <br> <br> <br>