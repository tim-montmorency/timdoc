 <?php

   /**
    * @type     article
    * @title    P2.2a Scaffoling+Spritesheet
    * @icon     images/icon.svg
    * @abstract Scaffoling du projet et animation spritesheet sur défilement de la page
   * @index    20
    */
   ?>



<info>À partir de maintenant, vous devez travailler INDIVIDUELLEMENT. Vous devez donc avoir chacun un dossier de projet. Aucun plagiat ne sera toléré. Vous pourrez même décider de personnaliser l’histoire et d’adapter le scénario de votre côté. Je m’attends à voir des différences dans les animations réalisées même si vous travaillez 2 personnes sur la même histoire avec les mêmes éléments graphiques. Le reste du projet, je vous le répète est un projet individuel. Il sera crucial de le faire par vous-même pour atteindre toutes les compétences du cours.</info>



 <dots></dots>
<grostitre>Aperçu du résultat 👇</grostitre>
<clipasset src="videos/demo_p2-2a.mp4"></clipasset>
<p><small>Cette démo démontre un exemple d'un écran d'intro et 2 chapitres, vous devrez de votre côté en avoir 6 à 8 en plus de l'écran d'intro. Le tout doit être responsive. Pour le momoment, ignorez l'animation du bonhomme dans le 1er chapitre de cette démo: vous n'avez pas à déplacer ou animer votre "sprite sheet" dans le fichier index.html, vous pouvez animer la "sprite sheet" dans un fichier HTML séparé (bref suivre les instructions ci-bas).</small></p>

<dots></dots>
 
 <grostitre>Scaffolding du projet</grostitre>




 <p>Créez les dossiers et fichiers selon le modèle traditionnel qu'on a toujours utilisé jusqu'à présent&nbsp;:</p>


 <img src="images/structure_dossiers_fichiers.png" alt="Structure des fichiers et dossiers du projet"
     style="max-width: 200px;">



 <p>NOTEZ BIEN&nbsp;: </p>

 <ul>
     <li>Toujours mettre index.html à la racine du projet.</li>
     <li>Dans votre projet, toujours utiliser des liens et chemin d’accès <strong>relatifs</strong> et non absolus (un chemin d'accès absolu commence par un /).</li>

 </ul>

 <dots></dots>


 <grostitre>Requis de base index.html</grostitre>

<checklist> Créez les balises de bases de votre fichier HTML. 
N’oubliez pas les balises <em>meta</em> <em>charset</em> et <em>viewport</em>.
Ajoutez votre/vos police(s) de caractères.
Liez votre feuille de styles.
Spécifiez le titre de l’histoire dans la balise <incode>title</incode>.
Créez et ajoutez un <em>favicon</em> dans le dossier images (64px X 64px). Dans votre fichier HTML, ajoutez le lien favicon vers ce fichier.
Ajoutez la librairie <em>GSAP</em> et son plugiciel <em>ScrollTrigger</em> à l’endroit le plus pertinent dans votre fichier HTML.
Ajoutez aussi votre fichier <em>script.js</em>.</checklist>







<h3>Balise <incode>&lt;header&gt;</incode> (HTML)</h3>
<p>La balise <incode>&lt;header&gt;</incode> du fichier HTML doit contenir:</p>

<checklist>un titre de niveau 1,
 un paragraphe descriptif du projet et des auteurs,
 un appel à l’action qui permettra d’inviter le visiteur à défiler la page vers le bas ou vers la droite.

 </checklist>

 
<h3>Balise <incode>&lt;main&gt;</incode> (HTML)</h3>
<checklist>La balise <incode>main</incode> du fichier HTML doit contenir plusieurs sections qui correspondent à chaque chapitre. 
Créez toutes ces sections et identifiez chacunes d'elles avec un id pertinent.</checklist>


<h3>Balise <incode>&lt;footer&gt;</incode> (HTML)</h3>
<p>La balise <incode>footer</incode> du fichier HTML devra contenir les crédits du projet :</p>
<checklist>
Ajoutez ce texte: <a href="https://tim-montmorency.com/timdoc/582-424MO/projet-scrollytelling/" target="_blank" rel="noopener noreferrer">Projet scrollytelling</a> créé dans le cadre du cours Optimisation Web - Intégration multimédia - Collège Montmorency.<br>© <?php echo date("Y"); ?> - Conception : <em>Votre nom</em> et <em>Nom de votre coéquipier de la phase concept</em> | Développement Web : <em>Votre nom</em>.
Vous devrez aussi créditer la source de vos images (les artistes et les banques d'images).
Si applicable, vous devez mentionner ce qui a été généré via l'AI et mentionner quel outil AI a été utilisé.</checklist>


 <dots></dots>
<grostitre>Requis CSS</grostitre>
<checklist>Préparez des variables CSS pour toutes les couleurs de votre palette.
Ajoutez un <incode>overflow-x: hidden</incode> à votre balise <incode>body</incode> pour éviter une barre de défilement horizontale (OU <incode>overflow-y: hidden</incode> si vous prévoyez plutôt une histoire défilable à l’horizontale).
</checklist>

<h3>Balise <incode>&lt;header&gt;</incode> (CSS)</h3>

<checklist>La balise <incode>header</incode> doit s'afficher sur toute la largeur et la hauteur de la fenêtre.
La balise <incode>header</incode> doit contenir une image d’arrière-plan de votre choix. (Une image qui représente bien votre histoire. Ne pas utiliser la même image d'arrière plan que le chapitre 1).</checklist>

 <h4>Le titre de niveau 1 doit&nbsp;:</h4>

 <checklist>se positionner en haut du header,
 être décollé des bords de page,
 être aligné à droite ou à gauche ou au centre (assurez-vous de sa lisibilité au-dessus de votre image d'arrière-plan),
 sa taille doit être relative à la taille de la fenêtre,
 sa couleur doit permettre une bonne lisibilité au-dessus de l’image d’arrière-plan, peu importe la taille de la fenêtre (vous pouvez ajouter des <em>media-queries</em> au besoin).
 </checklist>


 <h4>Le paragraphe doit&nbsp;:</h4>

 <p style="font-size: 67%">«&nbsp;<a href="https://tim-montmorency.com/timdoc/582-424MO/projet-scrollytelling/" target="_blank" rel="noopener noreferrer">Projet scrollytelling</a> créé dans le cadre du cours Optimisation Web - Intégration multimédia - Collège Montmorency.<br>© <?php echo date("Y"); ?> - Conception : <em>Votre nom</em> et <em>Nom de votre coéquipier de la phase concept</em> | Développement Web : <em>Votre nom</em>.&nbsp;»</p>
 
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
     Positionnez l'appel-à-l'action dans le bas du <incode>header</incode> centré horizontalement OU à droite du <incode>header</incode> centré verticalement.
     </checklist>


     <h3>Balise <incode>&lt;main&gt;</incode> (CSS)</h3>

     <p>Stylisez toutes les <em>sections</em> de la balise <em>main</em>.</p>

    <checklist>Chaque section doit s'afficher sur toute la largeur et la hauteur de la fenêtre.
        L'histoire sera défilable à la verticale&nbsp; et toutes les sections s’affichent une en dessous de l’autre sans marge.
        Chacune des <em>sections</em> individuelles doit avoir sa propre image d’arrière-plan qui s’ajuste avec la taille de la fenêtre, peu importe sa dimension, sans être étirée ou écrasée.
        Ajoutez une bordure rouge temporaire de 1px sur chaque <em>section</em> afin de vous aider dans le développement des animations.
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

<checklist>Appliquez une hauteur considérable au <incode>body</incode> ou autre balise dans votre <incode>body</incode> afin que votre page soit <em>scrollable</em> et que vous puissiez tester le défilement de la page et l'animation qui s'active.
Ajoutez la spritesheet en image d'arrière-plan sur l'élément HTML (div) que vous avez précédemment créé afin qu'on puisse n'y voir que la première image-clé.
Animez la <em>Sprite Sheet</em> et assurez vous qu'elle boucle à l'infini.
Lorsque vous êtes satisfait de l’animation, changez l’état de l’animation de la <em>Sprite Sheet</em> (<a
href="https://developer.mozilla.org/en-US/docs/Web/CSS/animation-play-state" target="_blank" onclick="event.stopPropagation()">animation-play-state</a>) afin que l’animation ne s’active pas par défaut.</checklist>


 <h3>Requis JavaScript pour animation Sprite Sheet</h3>
<checklist>Ajoutez un écouteur d’événement <incode>scroll</incode> sur la fenêtre (<incode>window</incode>).</checklist>
 <h4>Sur cet événement: </h4>
 <checklist>ajoutez à la balise <incode>body</incode> la classe <incode>.is-scrolling</incode>,
 créez une variable et storez-y un minuteur ayant un délai de 100ms,
 lorsque ce délai est atteint, on enlève la classe <incode>.is-scrolling</incode> de la balise <incode>body</incode>,
 avant de déclarer ce minuteur, vous devez annuler ce minuteur afin de le réinitialiser tant que l’utilisateur défile la page.
</checklist>

 <h3>De retour dans le CSS pour animation Sprite Sheet</h3>
<checklist>Utilisez les <a href="../../../582-215MO/css/selecteurs/#descendants" target="_blank" onclick="event.stopPropagation()">sélecteurs CSS de descendance</a> afin que l'état de l’animation de la <em>Sprite Sheet</em>  (<a
href="https://developer.mozilla.org/en-US/docs/Web/CSS/animation-play-state" target="_blank" onclick="event.stopPropagation()">animation-play-state</a>) doive contenir la valeur <incode>running</incode> seulement lors que la balise <incode>body</incode> contient la classe <incode>.is-scrolling</incode>.
Assurez-vous que votre élément animé via la technique <em>Sprite Sheet</em> soit <em>responsive</em>, donc adaptable à la largeur de l'écran.
Lorsque tout fonctionne comme vous le souhaitez, faites le même exercice pour votre 2<sup>e</sup> sprite sheet (soit dans la même page HTML ou dans 2<sup>e</sup> fichier séparé, à votre guise).</checklist>


 <dots></dots>

 <grostitre>Répertoire GIT de votre projet</grostitre>
 <checklist>Vous devez <a target="_blank" href="https://smnarnold.com/cours/git/github"
         onclick="event.stopPropagation()">créer un répertoire GitHub</a> intitulé <incode>[nom]-[prenom]-scrollytelling</incode>.<br>Attention, celui-ci devra être en mode public et non privé 🚫.
     N'oubliez pas de cocher pour créer fichier README.
     Vous devez ensuite cloner localement le répertoire du projet et y déposer les fichiers que vous avez créés dans ce devoir. Rappel: le fichier index.html doit se trouver à la racine du répertoire et non dans un sous-dossier.
     <strong>Éditez le fichier README, utilisez le MARKDOWN:</strong>
     - Inscrivez "Projet scrollytelling: Titre de votre histoire" en tant de titre principal du markdown (heading niveau 1). Évidemment changez "Titre de votre histoire" pour le titre de votre histoire (il n'a pas à être identique à celui de votre co-équipier éphémère de la partie P2.1).
     -Ajoutez un sous-titre "Projet scolaire dans le cadre du cours:" suivi d'un paragraphe contenant le nom de ce cours suivi du nom du projet avec un lien vers la page des instructions, ex: <a href="https://tim-montmorency.com/timdoc/582-424MO/projet-scrollytelling/" target="_blank" onclick="event.stopPropagation()">Optimisation Web - Projet Scrollytelling</a>
     - Ajoutez un sous-titre nommé "Conception", ainsi qu'une liste à puce avec chacun des membres de l'équipe de la partie P2.1 (création des médias).
     - Ajoutez un sous-titre nommé "Développement/programmation", ainsi qu'une liste à puce contenant seul votre nom.
     - Ajoutez un sous-titre nommé "Technologies", ainsi qu'une liste à puce contenant HTML, CSS, JavaScript, Librairie d'animation GSAP (ajoutez le lien vers la page principale de GSAP sur le site de Greensock), Plugiciel ScrollTrigger (ajoutez le lien vers la page de scrollTrigger du site de Greensock).
     Faites un <em>commit</em> et poussez vos fichiers sur GitHub.
     Remettez le lien de votre GitHub dans Devoir.

 </checklist>