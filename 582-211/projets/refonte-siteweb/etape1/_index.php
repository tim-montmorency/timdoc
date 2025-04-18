<?php
/**
 * @type     article
 * @title    Projet final: Étape 1.
 * @icon     images/icon-web.jpg
 * @abstract Choix de design, préparation et partage du fichier Figma, scafolding du projet, création du répertoire git.
 */
?>
<grostitre>Étape 1</grostitre>
<p>À compléter et remettre dans Teams/Devoirs avant le 2 mai 23h59.</p>

<dots></dots>
<grostitre>1-Choix</grostitre>
<checklist>
  Si vous êtes deux personnes et que chacun a créé un design différent dans le cours de design graphique, vous devez choisir l’un des deux.<br>S’il n’y a qu’un seul design disponible, utilisez simplement celui-là.
  Ensuite, retournez dans le <a href="https://cmontmorency365-my.sharepoint.com/:x:/g/personal/mariem_ouellet_cmontmorency_qc_ca/ETQTI_JDyl5JjuUQxMafVhQBtIO3CRK3_p6J_S6EiNuZEw?e=KrHKeP" target="_blank" rel="noopener noreferrer">document Excel</a> et, dans la colonne D, inscrivez l’URL du site original que vous avez choisi.
  Dans la colonne E, inscrivez les noms des étudiants qui ont fait le design de ce site dans le cadre du cours de design graphique.
</checklist>

<dots></dots>
<grostitre>2-Préparation et partage du fichier Figma</grostitre>
<alert>Très important : <span class="red-label">ne travaillez pas</span> directement sur la version que vous avez remise dans le cours de design graphique.</alert>
<checklist>
  Pour le Web2, vous devez <em>dupliquer</em> le fichier Figma correspondant à votre design final.
  <em>Renomme</em> le fichier Figma dupliqué en suivant cette nomenclature: <incode>Web2_Prenom1_Prenom2_582-211</incode>.
  <em>Activez le lien de partage</em> qui permettra à tous les membres de votre équipe d’éditer le fichier. (Voir la capsule vidéo plus bas. Utilisez le même mot de passe que celui montré dans la vidéo.)
  <em>Copiez le lien éditable</em> (comme démontré dans la capsule vidéo) et <em>envoyez-le dans le devoir sur Teams</em>, pour que je puisse y accéder et avoir les <em>droits d’édition</em>.
</checklist>
 <a href="https://cmontmorency365-my.sharepoint.com/:v:/g/personal/mariem_ouellet_cmontmorency_qc_ca/EaEtGjyub2lNsl1smdi03M8BmlAuBF7gUfUjTV6_Ed99Wg?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=org79I" target="_blank" rel="noopener noreferrer">▶️ Capsule vidéo explicative</a> sur le partage du fichier Figma pour le projet actuel.



<dots></dots>
<grostitre>3-Échafaudage du projet</grostitre>

<info>L’échafaudage, plus connu sous son nom anglophone <em>“scaffolding”</em>, consiste à créer une arborescence de dossiers et de fichiers qui seront utilisés afin de créer un site web. Le terme a été emprunté au domaine de la construction, où avant même de poser la première brique, un échafaudage est monté afin de simplifier la tâche à accomplir.</info>

 <checklist>
  Créez un dossier de projet commun (ce dossier sera poussé sur github à la prochaine étape).
  À la racine du dossier de projet, ajoutez le fichier <em>index.html</em> qui correspond à la <em>page d'accueil</em> du site.
  Dans le fichier de l'accueil <em>index.html</em>, ajoutez les balises de base d'une page HTML et n'oubliez pas d'inscrire le nom du site dans la balise <incode>title</incode> et de changer la langue pour <em>fr</em>.
  Dans le <incode>head</incode> d'<em>index.html</em>, ajoutez la balise meta suivante: <incode>meta name=&quot;robots&quot; content=&quot;noindex, nofollow&quot;</incode> en ajoutant les symbole < et > au début et à la fin de la balise. Ceci est important pour que Google ne référence pas votre site web puisque c'est un projet scolaire et non un véritable site promotionnel.
  Copier le fichier <em>index.html</em> trois fois pour les trois autres pages, en les nommant de façon appropriée (sans espace, sans accent et avec l'extension de fichier .html).
  Créez à la racine du dossier de votre projet les sous-dossiers suivant 📁: <em>assets</em>, <em>css</em>, <em>js</em>.
  À l'intérieur de votre dossier <em>css</em>, ajoutez un fichier nommé <em>main.css</em>. 
  Liez la feuille de style <em>main.css</em> à chacune des pages HTML.
  À l'intérieur de votre dossier <em>assets</em>, créez ces sous-dossiers: <em>images</em>, <em>videos</em>, <em>polices</em>. Ces sous-dossiers contiendront les fichiers images, vidéos et polices de caractères (si applicable) de votre site web. 
  
</checklist>

<dots></dots>
<grostitre>4-Requis Git</grostitre>
<h3>Création du repo GitHub (à faire en équipe)</h3>
<checklist>
    Avec un de vos compte GitHub, vous devez <a target="_blank" href="https://smnarnold.com/cours/git/github">créer un répertoire GitHub</a>&nbsp;intitulé&nbsp;<incode>Prenom1_Prenom2_Web2final_582-211</incode>.<br><br>Par exemple, si Bob et moi sommes coéquipiers, notre répertoire GitHub s'intitulera:&nbsp;<incode>Bob_MarieMichelle_Web2final_582-211</incode><br><br>Attention, celui-ci devra être en mode public et non privé 🚫. De plus, n'oubliez pas de cocher pour créer fichier README.
    La personne ayant créé le répertoire avec son propre compte GitHub doit inviter son coéquipier afin que celui-ci puisse y avoir accès.
    Vous devez ensuite <em>cloner localement</em> (sur son ordinateur) le répertoire du projet (clonez sur votre disque dur externe ou sur votre OneDrive et assurez-vous de toujours travailler au même endroit, peu importe l'ordi sur lequel vous travaillez). Via l'explorateur de Windows, vous devez déposer dans ce répertoire les fichiers créés lors du requis précédent <a href="#3-echafaudage-du-projet" target="_blank">#3-echafaudage-du-projet</a>. On devrait voir notamment les 4 fichiers .html à la racine du répertoire (pas dans un sous-dossier).
    Éditez le fichier README à la racine de votre dossier de projet. N'utilisez que le langage MARKDOWN.<br> - Affichez le nom de votre site web (heading niveau 1)<br>- Ajoutez un sous-titre nommé "Projet scolaire".<br>- Sur la ligne suivante, nom de ce cours suivi de <em>- Projet Final</em> et d'un lien vers la page des instructions du projet. <br>Exemple: <a href="https://tim-montmorency.com/timdoc/582-211/projets/refonte-siteweb/" target="_blank">Web 2 - Projet final</a><br>- Sur la ligne suivante, inscrivez le nom du collège<br>- Ajoutez un sous-titre nommé "Équipe". <br>- Le sous titre "Équipe" sera suivi d'une liste à puce avec chacun des membres de l'équipe.
    Faites un <em>commit</em> (bien nommé), un <em>pull</em> et <em>push</em> vers GitHub.
    Le 2e coéquipier, devra à son tour faire un <em>clone</em> du répertoire <em>giy</em> sur son ordinateur (clonez sur votre disque dur externe ou sur votre OneDrive et assurez-vous de toujours travailler au même endroit, peu importe l'ordi sur lequel vous travaillez).
    Vous êtes maintenant prêts à faire un <em>pull</em> à nouveau, chacun de votre côté et vous assurer que vous partez tous du même pied.
</checklist>




<dots></dots>
<grostitre>5.1-Requis CSS+HTML en équipe</grostitre>

<warning>
  <h3>Les commentaires CSS </h3>
  <ol>
    <li>Vous devez <strong>commenter l’ensemble de votre code CSS</strong> afin de démontrer votre compréhension.</li>
    <li>Ajoutez également des <strong>séparateurs visuels</strong> (sous forme de commentaires) pour organiser vos styles en sections claires et structurées.</li>
  </ol>
</warning>

<p>Exemple de commentaires CSS auquel je m'attends: </p>
<highlight  lang="css">/*--------------------------------------------------------- 
# SECTION : Styles généraux
---------------------------------------------------------*/ 
body{
  ...
}
/* Conteneur en flex permettant d'aligner le contenu sur une ligne (row) et donc l'espace restant sera divisé entre chaque élément enfant du .container */
.container {
  display: flex;
  justify-content: space-between;
}
/* Titre principal de la page avec une transition d'agrandissement d'échelle au survol */
h1 {
  font-size: 1.3rem;
  transition: transform 0.3s ease;
}
h1:hover {
  transform: scale(1.1);
}

/*---------------------------------------------------------- 
# SECTION : En-tête (nav, log etc)
----------------------------------------------------------*/ 
header{
  ...
}

/*---------------------------------------------------------- 
# SECTION : Héros
----------------------------------------------------------*/ 
section.hero{
  ...
}

/*---------------------------------------------------------------- 
# ADAPTATION PAR MEDIA QUERIES (Responsiveness) pour grands écrans

Car ce qui précède les media queries est stylisé pour mobile
en premier (mobile first).
----------------------------------------------------------------*/ 

/* Styles d'exception pour les écrans d'une largeur de minimum 778px et plus */
@media screen and (min-width: 778px) {
  /* Adapter la taille fixe du titre principal qui était de 1.3rem et le changer pour 4vw qui équivaut à 4% de la largeur du viewport (de la fenêtre) . */
  h1{
    font-size: 4vw;
  }
}
</highlight>


<thumbsup>
  N'oubliez pas de styliser <strong>mobile first</strong>. Par la suite, ajouter les styles pour plus grands écrans via des <strong>@media queries.</strong>
</thumbsup>

<alert>N'oubliez pas de faire un <em>commit</em> et un <em>push</em> vers GitHub après chaque modification importante. Vous devez aussi faire un <em>pull</em> avant de commencer à travailler sur votre projet, afin d'être certain d'avoir la version la plus récente du projet.</alert>

<h3>En équipe</h3>


<checklist>
  Ouvrez votre fichier <em>main.css</em>, ce sera le fichier qui contiendra tous les styles communs aux 4 pages (les styles pour l'entête et le pied de page notamment).
  Créez des variables CSS qui représentent chacunes des couleurs de votre palette de couleur.
  Ajoutez vos polices de caractères avec la techniques appropriées (dépendemment si c'est sur une police Google Font ou un fichier à ajouter dans vos assets avec @font-face).
  Créez des variables pour le nom de vos différentes polices de caractères.
  Comme mentionné juste avant cette liste de requis, préparez des groupes de commentaires CSS qui vont séparer les sections de vos styles. Par exemple, tous les styles généraux vont se trouver sous le commentaire <br><span class="inline-code">/*----- Styles Généraux -----*/</span><br> et les styles de la section Hero, se retrouveront sous le commentaire <br><span class="inline-code">/*------ Section Hero ------*/</span>
  Copiez-collez le fichier <em>main.css</em> 2 fois et renommez ces nouveaux fichiers <em>styles-initialesEtudiant1.css</em> et <em>styles-initialesEtudiant2.css</em> (changez <em>initialesEtudiant</em> pour vos initiales). Ces fichiers contiendront les styles spécifiques à chacune des pages qui vous sont attribué (2 chacunes). Importez ces feuilles de styles dans les pages HTML respectives, après <em>main.css</em>.
  N'oubliez pas de lier les 2 nouvelles feuilles de styles aux pages HTML appropriées.
  Retournez maintenant dans <em>main.css</em>, les étapes suivantes devront être faites dans ce fichier.
  Appliquez la ou les polices de caractères si applicable. Ces styles seront appliqués sur les 4 pages.
  Stylisez vos niveaux de titre (headings), minimalement h1, h2 et h3. Vous pouvez aussi styliser les autres niveaux de titres si vous en avez besoin. Ces styles seront appliqués sur les 4 pages.
  Stylisez tout ce qui vous semble être commun à toutes les pages de votre site: les ancres (liens), les styles de boutons, les listes à puce s'il y a lieu etc. Ces styles seront appliqués sur les 4 pages.
</checklist>

<alert>N'oubliez pas de faire un <em>commit</em> et un <em>push</em> vers GitHub après chaque modification importante. Vous devez aussi faire un <em>pull</em> avant de commencer à travailler sur votre projet, afin d'être certain d'avoir la version la plus récente du projet.</alert>

<grostitre>5.2-Requis HTML+CSS individuel</grostitre>

<warning>Vous éviter des conflits git, comme vous travaillez sur les même fichiers pour cette étape, vous pouvez considérer travailler avec l'extension de VS Code nommée: <a href="https://marketplace.visualstudio.com/items?itemName=MS-vsliveshare.vsliveshare" target="_blank" rel="noopener noreferrer">Live Share</a>. Voici <a href="https://docs.google.com/presentation/d/14TRk-8ykuT7yRakUvIh36GiIq9b9-9GS9Hi9Gk3JbTE/edit?usp=sharing" target="_blank" rel="noopener noreferrer">quelques diapositives</a>  qui peuvent vous être utiles pour utiliser Live Share.</warning> 


<checklist>
  Vous devriez avoir fait un <em>push</em> vesr gitHub après avoir terminé les requis précédents.
  Faites un choix entre vous: qui fait l'entête et qui fait le pied de page?
  Chacun sur vos ordis faites un <em>pull</em> de gitHub pour récupérer la dernière version du projet. 
</checklist>

<h3>Pour celui qui fait l'entête</h3>
<checklist>
  Dans <em>index.html</em>, ajoutez les balises et le contenu pour l'entête <incode>header</incode>. L'entête contient probablement le logo, la navigation principale, etc, selon votre design.
  N'oubliez pas de regrouper certains éléments ensemble avec des <incode>div</incode> si vous avez à placer les éléments avec flexbox les uns par rapports au autres.
  Dans le fichier css <em>main.css</em>, ajoutez les styles pour l'entête afin de les rendre conformes au design de votre site.
  Lorsque vous serez satisfait du résultat pour l'entête, et ce en mobile et en desktop, vous pourrez dupliquer la structure de ces sections dans les autres pages HTML. Vous n'avez pas besoin de dupliquer le code CSS, car il est déjà dans <em>main.css</em>.
</checklist>

<h3>Pour celui qui fait le pied de page</h3>
<checklist>
  Dans <em>index.html</em>, ajoutez les balises et le contenu pour le pied de page <incode>footer</incode>. 
  N'oubliez pas de regrouper certains éléments ensemble avec des <incode>div</incode> si vous avez à placer les éléments avec flexbox les uns par rapports au autres.
  Dans le fichier css <em>main.css</em>, ajoutez les styles pour le pied de page afin de les rendre conformes au design de votre site.
  Lorsque vous serez satisfait du résultat le pied de page, et ce en mobile et en desktop, vous pourrez dupliquer la structure de ces sections dans les autres pages HTML. Vous n'avez pas besoin de dupliquer le code CSS, car il est déjà dans <em>main.css</em>.
</checklist>

<alert>N'oubliez pas de faire un <em>commit</em> et un <em>push</em> vers GitHub après chaque modification importante. Vous devez aussi faire un <em>pull</em> avant de commencer à travailler sur votre projet, afin d'être certain d'avoir la version la plus récente du projet.</alert>




<dots></dots>
<grostitre>Remise: étape 1</grostitre>
<p>D'ici le 2 mai à 23h59, vous devez déposer ceci dans Teams/Devoirs:</p>
<ul>
  <li>Le lien vers votre Figma (je dois avoir les droits d'éditions).</li>
  <li>Le lien vers votre répertoire publique sur gitHub (tous les fichiers complétés devront y être poussés).</li>
  <li>Un document Word dans lequel il est spécifié qui fait quoi? <br>- Qui a fait l'entête et qui a fait le pied de page? <br> - Qui intégrera quelle page parmis les 4 pages à intégrer?</li>
</ul>

