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
  Créez un dossier de projet commun (ce dossier sera poussé sur github à la prochaine étape).
  À la racine du dossier de projet, ajoutez le fichier <em>index.html</em> qui correspond à la <em>page d'accueil</em> du site.
  Ajoutez les 3 autres pages, en les nommant de façon appropriée (sans espace, sans accent et avec l'extension de fichier .html).
  Créez à la racine du dossier de votre projet les sous-dossiers suivant 📁: <em>assets</em>, <em>css</em>, <em>js</em>.
  À l'intérieur de votre dossier <em>css</em>, ajoutez un fichier nommé <em>main.css</em>. Liez cette feuille de style sur chacune des pages HTML.
  À l'intérieur de votre dossier <em>assets</em>, créez ces sous-dossiers: <em>images</em>, <em>videos</em>, <em>videos</em>. Ces sous-dossiers contiendront les fichiers images, vidéos et polices de caractères (si applicable) de votre site web. 
  Ouvrez votre fichier <em>main.css</em>, ce sera le fichier qui contiendra tous les styles communs aux 4 pages (les styles pour l'entête et le pied de page notamment).
  Créez des variables css qui représentent chacune des couleurs de votre palette de couleur.
  Ajoutez vos polices de caractères avec la techniques appropriées (dépendemment si c'est sur une police Google Font ou un fichier à ajouter dans vos assets avec @font-face).
  Créez des variables pour le nom de vos différentes polices de caractères.
  Stylisez vos 2 à 6 niveaux de titre (headings).
  Préparez des groupes de commentaires CSS qui vont séparer les sections de vos styles. Par exemple, tous les styles généraux vont se trouver sous le commentaire <br><span class="inline-code">/*----- Styles Généraux -----*/</span><br> et les styles de la section Hero, se retrouveront sous le commentaire <br><span class="inline-code">/*----- Section Hero -----*/</span>
  Copiez-collez le fichier <em>main.css</em> 2 fois et renommez ces nouveaux fichiers <em>styles-initialesEtudiant1.css</em> et <em>styles-initialesEtudiant2.css</em> (changez <em>initialesEtudiant</em> pour vos initiales). Ces fichiers contiendront les styles spécifiques à chacune des pages qui vous sont attribué (2 chacunes). Allez enlever tous les styles déjà écrits dans ces deux nouvelles feuilles de style pour partir de zéro (vous pouvez conserver les bloc de commentaires, ils vous serviront). Importez ces feuilles de styles dans les pages HTML respectives, après <em>main.css</em>.
  N'oubliez pas de lier les 2 nouvelles feuilles de styles aux pages HTML appropriées.
</checklist>



<dots></dots>
<grostitre>4-Requis Git</grostitre>
<h3>Création du repo GitHub (à faire en équipe)</h3>
<checklist>
    Avez un de vos compte github, vous devez <a target="_blank" href="https://smnarnold.com/cours/git/github">créer un répertoire GitHub</a>&nbsp;intitulé&nbsp;<incode>Prenom1_Prenom2_Web2-final_582-211</incode>.<br><br>Par exemple, si Bob et moi sommes coéquipiers, notre répertoire GitHub s'intitulera:&nbsp;<incode>Bob_MarieMichelle_Web2-final_582-211</incode><br><br>Attention, celui-ci devra être en mode public et non privé 🚫. De plus, n'oubliez pas de cocher pour créer fichier README.
    La personne ayant créé le répertoire avec son propre compte GitHub doit inviter son coéquipier afin que celui-ci puisse y avoir accès.
    Vous devez ensuite cloner localement (sur un ordinateur) le répertoire du projet. Via l'explorateur de Windows, vous devez déposer dans ce répertoire les fichiers créés lors du requis précédent <a href="#3-echafaudage-du-projet" target="_blank">#3-echafaudage-du-projet</a>. On devrait voir les 4 fichiers html à la racine du répertoire (pas dans un sous-dossier).
    Éditez le fichier README à la racine de votre dossier de projet. N'utilisez que le langage MARKDOWN.<br> -Affichez le nom de votre site web (heading niveau 1)<br> -Ajoutez ensuite le nom de ce cours suivi de <em>- - Projet Final</em> et d'un lien vers la page des instructions du projet. Exemple: <a href="https://tim-montmorency.com/timdoc/582-211/projets/refonte-siteweb/" target="_blank">Web 2 - Projet final</a><br>- Ajoutez un sous-titre nommé "Équipe". <br>- Le sous titre "Équipe" sera suivi d'une liste à puce avec chacun des membres de l'équipe.
    Faites un commit (bien nommé) et push vers GitHub.
    Le 2e coéquipier, devra à son tour faire un clone du répertoire git sur son ordinateur.
    Vous êtes maintenant prêts à faire un pull à nouveau, chacun de votre côté et vous assurer que vous partez tous du même pied.
</checklist>

<dots></dots>
<grostitre>5-Requis CSS+HTML entête et pied de page</grostitre>
<warning>N'oubliez pas de styliser <em>mobile first</em> et d'ajouter les styles pour plus grands écrans via des @media queries.</warning>
<h3>En équipe</h3>
<checklist>
  Dans le fichier de l'accueil <em>index.html</em>, ajoutez les balises de base d,une page HTML et n'oubliez pas d'inscrire le nom du site dans la balise <incode>title</incode> et de changer la langue pour <em>fr</em>.
  Ajoutez les balises pour l'entête <incode>header</incode>. L'entête contient probablement le logo, la navigation principale, etcetera, selon votre design.
  Dans le même fichier, ajoutez les balises pour le pied de page <incode>footer</incode>.
  Dans le fichier css <em>main.css</em>, ajoutez les styles pour l'entête et le pied de page afin de les rendre conformes au design de votre site.
</checklist>


<dots></dots>
<grostitre>Remise étape 1</grostitre>
<p>D'ici le 2 mai à 23h59, vous devez déposer ceci dans Teams/Devoirs:</p>
...

