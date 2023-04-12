 <?php

   /**
    * @type     article
    * @title    P2.2a Scaffoling et animation sprite sheet
    * @icon     images/icon.svg
    * @abstract Scaffoling du projet et animation spritesheet sur défilement de la page
   * @index    20
    */
   ?>





 <p>À partir de maintenant, vous devez travailler INDIVIDUELLEMENT.
     Vous devez donc avoir chacun un dossier de projet. Aucun plagiat ne sera toléré.
     Vous pourrez même décider de personnaliser l’histoire et d’adapter le scénario
     de votre côté. Je m’attends à voir des différences dans les animations réalisées
     même si vous travaillez 2 personnes sur la même histoire avec les mêmes
     éléments graphiques. Le reste du projet, je vous le répète est un projet
     individuel. Il sera crucial de le faire
     par vous-même pour atteindre toutes les compétences du cours.</p>

 <dots></dots>
 <grostitre>Scaffolding du projet</grostitre>




 <p>Créez les dossiers et fichiers selon le modèle traditionnel qu'on a toujours utilisé jusqu'à présent&nbsp;:</p>


 <img src="images/structure_dossiers_fichiers.png" alt="Structure des fichiers et dossiers du projet"
     style="max-width: 200px;">



 <p>NOTEZ BIEN&nbsp;: </p>

 <ul>
     <li>Toujours mettre index.html à la racine du projet.</li>
     <li>Dans votre projet, toujours utiliser des liens et chemin d’accès <strong>relatifs</strong> et non absolus.</li>
 </ul>

 <dots></dots>


 <grostitre>Requis de base index.html</grostitre>

<checklist> Créez les balises de bases de votre fichier HTML. 
N’oubliez pas les balises <em>meta</em> <em>charset</em> et <em>viewport</em>.
Ajoutez votre/vos police(s) de caractères.
Liez votre feuille de styles.
Spécifiez le titre de l’histoire dans la balise <code>title</code>.
Créez et ajoutez un <em>favicon</em> dans le dossier images (64px X 64px). Dans votre fichier HTML, ajoutez le lien favicon vers ce fichier.
Ajoutez la librairie <em>GSAP</em> et son plugiciel <em>ScrollTrigger</em> à l’endroit le plus pertinent dans votre fichier HTML.
Ajoutez aussi votre fichier script.js.</checklist>







<h3>Balise <code>&lt;header&gt;</code> (HTML)</h3>
 <p>La balise <code>&lt;header&gt;</code> du fichier HTML doit contenir:</p>

 <checklist>un titre de niveau 1,
 un paragraphe descriptif du projet et des auteurs,
 un appel à l’action qui permettra d’inviter le visiteur à défiler la page vers le bas ou vers la droite.

 </checklist>

 
 <h3>Balise <code>&lt;main&gt;</code> (HTML)</h3>
<checklist>La balise <code>main</code> du fichier HTML doit contenir plusieurs sections qui correspondent à chaque chapitre. 
Créez toutes ces section et identifiez chacunes d'elles avec un id pertinent.</checklist>



 <dots></dots>




<grostitre>Requis CSS</grostitre>
<checklist>Préparez des variables CSS pour toutes les couleurs de votre palette.
Ajoutez un <code>overflow-x: hidden</code> à votre balise <code>body</code> pour éviter une barre de défilement horizontale (OU <code>overflow-y: hidden</code> si vous prévoyez plutôt une histoire défilable à l’horizontale).
</checklist>

<h3>Balise <code>&lt;header&gt;</code> (CSS)</h3>

<checklist>La balise <code>header</code> s'afficher sur toute la largeur et la hauteur de la fenêtre.
La balise <code>header</code> doit contenir une image d’arrière-plan de votre choix. (Une image qui représente bien votre histoire. Ne pas utiliser la même image d'arrière plan que le chapitre 1).</checklist>

 <h4>Le titre de niveau 1 doit&nbsp;:</h4>

 <checklist>se positionner en haut du header,
 être décollé des bords de page,
 être aligné à droite ou à gauche ou au centre (assurez-vous de sa lisibilité au-dessus de votre image d'arrière-plan),
 sa taille doit être relative à la taille de la fenêtre,
 sa couleur doit permettre une bonne lisibilité au-dessus de l’image d’arrière-plan, peu importe la taille de la fenêtre (vous pouvez ajouter des <em>media-queries</em> au besoin).
 </checklist>


 <h4>Le paragraphe doit&nbsp;:</h4>

 <p style="font-size: 67%">«&nbsp;Projet créé dans le cadre du cours Optimisation Web - Intégration multimédia&nbsp;- Collège Montmorency. <br>©&nbsp;2023&nbsp;- Conception : Marie-Michelle Ouellet et Deuxième Nom| Développement Web&nbsp;: Marie-Michelle Ouellet.&nbsp;»</p>
 
 <checklist>contenir le texte du paragraphe ci-haut,
 s’afficher en petits caractères (10-11px environ dépendant de votre police et de sa lisibilité sur le texte en petit taille),
 se positionner en bas à gauche, au centre ou à droite,
 sa couleur doit permettre une bonne lisibilité au-dessus de l’image d’arrière-plan, peu importe la taille de la fenêtre (vous pouvez ajouter des <em>media-queries</em> au besoin).
 </checklist>


 <h4>L’appel-à-l’action(CTA&nbsp;: call-to-action).</h4>
 <p>Allez voir les <a
         href="https://tim-montmorency.com/timdoc/582-424MO/projet-scrollytelling/scrollytelling-presentation/#exemples-et-inspirations"
         target="_blank" rel="noopener noreferrer">exemples d’histoires «&nbsp;<em>scrollytelling</em>&nbsp;»</a>
     que je vous ai présentées, elles ont presque toujours un <strong>appel-à-l’action</strong>
     «&nbsp;<em>scroll down</em>&nbsp;», afin de bien identifier à l’utilisateur l’action à porter
     pour consulter la suite.</p>


 <p>Dans votre cas, le CTA sera une icône de votre
     choix (soyez clair dans votre choix d'icône afin de bien communiquer ce qu’on
     propose comme action)</p>

     <p>Voici quelques exemples pour vous inspirer:</p>
     <clipasset src="images/scrolldown-icons-examples.mp4" mobile="true"></clipasset>

 <p>Vous pouvez accompagner aussi cette icône par un
     libellé textuel tel que «&nbsp;Défilez » ou «&nbsp;Défilez la page&nbsp;»</p>


     <checklist>Créez l'élément qui doit contenir l'icône de l'appel-à-l'action.
     Animez cette icône en boucle afin d’attirer l’attention sur celle-ci. Vous devez utiliser GSAP pour réaliser cette animation. Inscrivez le code de l'animation GSAP dans votre fichier script.js
     Positionnez l'appel-à-l'action dans le bas du <code>header</code> centré horizontalement OU à droite du <code>header</code> centré verticalement.
     </checklist>


     <h3>Balise <code>&lt;main&gt;</code> (CSS)</h3>

     <p>Stylisez toutes les sections de la balise main.</p>

     <checklist>Chaque section doit s'afficher sur toute la largeur et la hauteur de la fenêtre.
     Histoire défilable à la verticale&nbsp;: toutes les sections s’affichent une en dessous de l’autre sans marge.<br>OU<br>Histoire défilable à l’horizontale: toutes les sections doivent s’afficher une à côté de l’autre sans marge.
     Chacune des sections individuelles doit avoir sa propre image d’arrière-plan qui s’ajuste avec la taille de la fenêtre, peu importe sa dimension, sans être étirée ou écrasée.
     </checklist>


<dots></dots>


<grostitre>Page distince pour tester l'animation de "Sprite Sheet"</grostitre>


 <p>Créez une page HTML distincte pour tester vos <em>Sprite Sheets</em>. Commencez par une seule <em>Sprite Sheet</em>.</p>


 <h3>Requis HTML pour animation Sprite Sheet</h3>
<checklist>Ajoutez les balises de base du HTML.
Liez à cette page HTML votre fichier CSS  et votre fichier script.js existants.
Créez un élément HTML (div) qui contiendra <em>Sprite Sheet</em> en image d'arrière-plan.
</checklist>



<h3>Requis CSS pour animation Sprite Sheet</h3>
<p>Important, ne PAS créer un fichier CSS distinct, travaillez dans le fichier CSS que vous avez déjà créé.</p>

<checklist>Appliquez une hauteur considérable au <code>body</code> ou autre balise dans votre <code>body</code> afin que votre page soit <em>scrollable</em> et que vous puissiez tester le défilement de la page et l'animation qui s'active.
Ajoutez la spritesheet en image d'arrière-plan sur l'élément HTML (div) que vous avez précédemment créé afin qu'on puisse n'y voir que la première image-clé.
Animez la <em>Sprite Sheet</em> et assurez vous qu'elle boucle à l'infini.
Lorsque vous êtes satisfait de l’animation, changez l’état de l’animation de la <em>Sprite Sheet</em> (<a
href="https://developer.mozilla.org/en-US/docs/Web/CSS/animation-play-state" target="_blank" onclick="event.stopPropagation()">animation-play-state</a>) afin que l’animation ne s’active pas par défaut.</checklist>


 <h3>Requis JavaScript pour animation Sprite Sheet</h3>
<checklist>Ajoutez un écouteur d’événement <code>scroll</code> sur la fenêtre (<code>window</code>).</checklist>
 <h4>Sur cet événement: </h4>
 <checklist>ajoutez à la balise <code>body</code> la classe <code>.is-scrolling</code>,
 créez une variable et storez-y un minuteur ayant un délai de 100ms,
 lorsque ce délai est atteint, on enlève la classe <code>.is-scrolling</code> de la balise <code>body</code>,
 avant de déclarer ce minuteur, vous devez annuler ce minuteur afin de le réinitialiser tant que l’utilisateur défile la page.
</checklist>

 <h3>De retour dans le CSS pour animation Sprite Sheet</h3>
<checklist>Utilisez les <a href="../../../582-215MO/css/selecteurs/#descendants" target="_blank" onclick="event.stopPropagation()">sélecteurs CSS de descendance</a> afin que l'état de l’animation de la <em>Sprite Sheet</em>  (<a
href="https://developer.mozilla.org/en-US/docs/Web/CSS/animation-play-state" target="_blank" onclick="event.stopPropagation()">animation-play-state</a>) doive contenir la valeur <code>running</code> seulement lors que la balise <code>body</code> contient la classe <code>.is-scrolling</code>.
Assurez-vous que votre élément animé via la technique <em>Sprite Sheet</em> soit <em>responsive</em>, donc adaptable à la largeur de l'écran.
Lorsque tout fonctionne comme vous le souhaitez, faites le même exercice pour votre 2<sup>e</sup> sprite sheet (soit dans la même page HTML ou dans 2<sup>e</sup> fichier séparé, à votre guise).</checklist>


 <dots></dots>

 <grostitre>Répertoire GIT de votre projet</grostitre>
 <checklist>Vous devez <a target="_blank" href="https://smnarnold.com/cours/git/github"
         onclick="event.stopPropagation()">créer un répertoire GitHub</a> intitulé <code>[prenom1]-[prenom2]-scrollytelling</code>.<br>Attention, celui-ci devra être en mode public et non privé 🚫.
     N'oubliez pas de cocher pour créer fichier README.
     Vous devez ensuite cloner localement le répertoire du projet et y déposer les fichiers que vous avez créés dans ce devoir. Rappel: le fichier index.html doit se trouver à la racine du répertoire et non dans un sous-dossier.
     <strong>Éditez le fichier README, utilisez le MARKDOWN:</strong>
     - Inscrivez "Projet scrollytelling: Titre de votre histoire" en tant de titre principal du markdown (heading niveau 1). Évidemment changez "Titre de votre histoire" pour le titre de votre histoire (il n'a pas à être identique à celui de votre co-équipier éphémère de la partie P2.1).
     -Ajoutez un sous-titre "Projet scolaire dans le cadre du cours:" suivi d'un paragraphe contenant le nom de ce cours suivi du nom du projet avec un lien vers la page des instructions, ex: <a href="https://tim-montmorency.com/timdoc/582-424MO/projet-scrollytelling/" target="_blank" onclick="event.stopPropagation()">Optimisation Web - Projet Scrollytelling</a>
     - Ajoutez un sous-titre nommé "Conception", ainsi qu'une liste à puce avec chacun des membres de l'équipe de la partie P2.1 (création des médias).
     - Ajoutez un sous-titre nommé "Développement Web", ainsi qu'une liste à puce contenant seul votre nom.
     - Ajoutez un sous-titre nommé "Technologies", ainsi qu'une liste à puce contenant HTML, CSS, JavaScript, Librairie d'animation GSAP (ajoutez le lien vers la page principale de GSAP sur le site de Greensock), Plugiciel ScrollTrigger (ajoutez le lien vers la page de scrollTrigger du site de Greensock).
     Faites un <em>commit</em> et poussez vos fichiers sur GitHub.
     Remettez le lien de votre GitHub dans Devoir.

 </checklist>