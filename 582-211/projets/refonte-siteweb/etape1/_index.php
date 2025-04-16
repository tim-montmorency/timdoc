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
    Si vous êtes 2 personnes qui ont chacun un design différent créé cette session dans le cours de design graphique, vous devez faire un choix parmis les 2. Si vous n'avez pas de choix à faire, alors allez-y avec la seule option qui s'offre à vous.
    Retournez sur le <a href="https://cmontmorency365-my.sharepoint.com/:x:/g/personal/mariem_ouellet_cmontmorency_qc_ca/ETQTI_JDyl5JjuUQxMafVhQBtIO3CRK3_p6J_S6EiNuZEw?e=KrHKeP" target="_blank" rel="noopener noreferrer">document Excel</a> pour  inscrire dans la colonne D le URL du site original que vous avez sélectionné.
    Dans la colonne E, inscrivez les noms des étudiants qui ont fait le design de ce site dans le cadre du cours de design graphique.
</checklist>

<dots></dots>
<grostitre>2-Préparation et partage du fichier Figma</grostitre>
<checklist>
    Si vous êtes 2 personnes qui ont chacun un design différent créé cette session dans le cours de design graphique, vous devez faire un choix parmis les 2. Si vous n'avez pas de choix à faire, alors allez-y avec la seule option qui s'offre à vous.
    Retournez sur le <a href="https://cmontmorency365-my.sharepoint.com/:x:/g/personal/mariem_ouellet_cmontmorency_qc_ca/ETQTI_JDyl5JjuUQxMafVhQBtIO3CRK3_p6J_S6EiNuZEw?e=KrHKeP" target="_blank" rel="noopener noreferrer">document Excel</a> pour  inscrire dans la colonne D le URL du site original que vous avez sélectionné.
    Dans la colonne E, inscrivez les noms des étudiants qui ont fait le design de ce site dans le cadre du cours de design graphique.
    Très important, ne pas travailler sur la version que vous avez remis en design graphique. Dans le cadre du cours Web actuel, vous devez dupliquer le fichier <em>Figma</em> du design final. 
    Renommez le nouveau fichier dupliqué avec cette nomenclature: <incode>Web2_Prenom1_Prenom2_582-211</incode>.
    Activez et partagez-vous le lien qui permettra à tous les membres de votre équipe d'éditer le fichier (voir capsule vidéo ci-bas, utilisez le même mot de passe que celui démontré dans la capsule).
    Copiez le lien éditable (voir capsule vidéo ci-bas, utilisez le même mot de passe que celui démontré dans la capsule) et l'envoyer dans Devoir afin que je (Marie-Michelle) puisse y avoir accès et que je puisse avoir les droits d'édition.
</checklist>
 <a href="https://cmontmorency365-my.sharepoint.com/:v:/g/personal/mariem_ouellet_cmontmorency_qc_ca/EaEtGjyub2lNsl1smdi03M8BmlAuBF7gUfUjTV6_Ed99Wg?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=org79I" target="_blank" rel="noopener noreferrer">▶️ Capsule vidéo explicative</a> sur le partage du fichier Figma pour le projet actuel.



<dots></dots>
<grostitre>3-Échafaudage du projet</grostitre>

<info>L’échafaudage, plus connu sous son nom anglophone <em>“scaffolding”</em>, consiste à créer une arborescence de dossiers et de fichiers qui seront utilisés afin de créer un site web. Le terme a été emprunté au domaine de la construction, où avant même de poser la première brique, un échafaudage est monté afin de simplifier la tâche à accomplir.</info>


<br>
<h3>Concernant les commentaires exigés en CSS voici un excellent exemple:</h3>
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

 <h3>Requis échafaudage (à faire en équipe)</h3>

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



<dots></dots>
<grostitre>4-Requis Git</grostitre>
<h3>Création du repo GitHub (à faire en équipe)</h3>
<checklist>
    Vous devez <a target="_blank" href="https://smnarnold.com/cours/git/github">créer un répertoire GitHub</a>&nbsp;intitulé&nbsp;<incode>Prenom1_Prenom2_Web2-final_582-211</incode>.<br><br>Par exemple, si Bob et moi sommes coéquipiers, notre répertoire GitHub s'intitulera:&nbsp;<incode>Bob_MarieMichelle_Web2-final_582-211</incode><br><br>Attention, celui-ci devra être en mode public et non privé 🚫. De plus, n'oubliez pas de cocher pour créer fichier README.
    La personne ayant créé le répertoire avec son propre compte GitHub doit inviter son coéquipier afin que celui-ci puisse y avoir accès.
    Vous devez ensuite cloner localement le répertoire du projet et y déposer les fichiers créés lors de votre devoir <a href="../p1-2a/" target="_blank" onclick="event.stopPropagation()">P1.2a</a>.
    Puisque vous travaillez dans le local Mac, que le système d'exploitation MacOS crée des fichiers cachés <em>.DS_Store</em> et que ces fichiers ne devraient pas être inclus dans votre répertoire git, créez un fichier nommé <em>.gitignore</em> dans lequel vous allez simplement inscrire:<br><incode>#ignore ALL .DS_Store files created by MacOS<br>**/.DS_Store<br>.DS_Store</incode> <br><br>Ce fichier .gitignore devra être placé à la racine du dossier de votre projet.
    Éditez le fichier README à la racine de votre dossier de projet. Utilisez que le langage MARKDOWN.<br> -Affichez le nom de votre choix de festival en tant de titre principal du markdown (heading niveau 1)<br> -Ajoutez ensuite le nom de ce cours suivi du nom du projet et d'un lien vers la page des instructions du projet. Exemple: <a href="https://tim-montmorency.com/timdoc/582-424MO/projet-app-festival-art-numerique/" target="_blank" onclick="event.stopPropagation()">Optimisation Web - Projet app d'un festival d'art numérique</a><br>- Ajoutez un sous-titre nommé "Équipe", ainsi qu'une liste à puce avec chacun des membres de l'équipe.
    Faites un commit (bien nommé) et push vers GitHub.
    Le 2e coéquipier, devra à son tour faire un clone du répertoire git sur son ordinateur.
    Vous êtes maintenant prêts à faire un pull à nouveau, chacun de votre côté et vous assurer que vous partez tous du même pied.
</checklist>
