<?php
/**
 * @type     article
 * @title    Portfolio
 * @icon     images/icon.png
 * @abstract Création d'un portfolio
 */
?>

<p class="spacer">Nous allons créer les portfolio dans GitHub pages. Création du portfolio et Modification du thème sont à suivre si vous voulez créer votre portfolio de zéro. Sinon suivez Partir d'un thème.</p>


<dots></dots>

<grostitre>Création du portfolio</grostitre>
<p>Pour commencer, vous devrez créer un repository et le configurer.</p>
<warning>Il est important de cocher Créer un fichier README.md lors de la création de votre repo.</p></warning>
<p>Suivez les étapes 1 à 8 de la procédure suivante pour créer votre repo:</p>
<doclink href="https://docs.github.com/fr/pages/quickstart">Procédure</doclink>

<grostitre>Modification du thème</grostitre>
<p>Pour pouvoir modifier le thème de votre site, vous devrez créer un fichier se nommant _config.yml </p>
<p>Dans le fichier, inscrivez les trois lignes suivantes:</p>
<highlight lang="markdown">
theme: jekyll-theme-minimal
title: Portfolio de Lora
description: Voici mon portfolio!</highlight>
<p>Vous comprendrez ici que vous pouvez modifier la ligne Title pour changer le titre de votre site et description sa description.</p>
<p>Pour ce qui est du thème, Github offre quelques thèmes par défaut. Je vous suggère fortement de choisir un de ces thèmes:</p>
<doclink href="https://pages.github.com/themes/">Liste des thèmes</doclink>
<p>Une fois votre thème choisi, inscrivez son nom dans la ligne theme de votre fichier _config.yml</p>

<dots></dots>

<grostitre>Partir d'un thème</grostitre>
<p>Si vous n'aimez pas les thèmes par défaut de Github, il est possible d'utiliser d'autres thèmes Jekyll. Vous trouverez sur le site suivant plusieurs modèles existants:</p>
<doclink href="https://jekyllrb.com/resources/">Visitez les pages sous le titre Themes</doclink>
<p>Une fois que vous avez trouvé un thème intéressant, suivez les étapes suivantes:</p>
<checklist>
    Ouvrez le thème sélectionné dans Github
    Assurez-vous d'être connecté à votre compte
    Appuyez sur le bouton Fork en haut à droite du projet contenant le thème voulu
    Nommez votre projet username.github.io. Remplacez username par votre nom d’utilisateur GitHub. Par exemple, si votre nom d’utilisateur est octocat, le nom du dépôt doit être octocat.github.io
    Créez le projet
    Une fois le projet créé, personnalisez les différentes pages en modifiant les pages existantes
</checklist>

<grostitre>Insérer une vidéo Youtube</grostitre>
<p>Insérer une vidéo de vos projets est possible. Pour cela, deux options s'offrent à vous.</p>
<p>Pour la première option, vous allez intégrer votre vidéo directement dans votre page Github. Pour ce faire, allez sur la page Youtube de la vidéo à partager. Cliquez ensuite sur le bouton Partager. Choisissez Intégrer dans les options, puis cliquez sur copier. Collez ensuite le texte dans votre README.md.</p>
<p>La seconde méthode vous permettra de rediriger les gens vers Youtube lorsqu'ils cliqueront sur l'image de votre vidéo.</p>
<highlight lang="markdown">
[![NOM DE VOTRE IMAGE](https://img.youtube.com/vi/ID DE VOTRE VIDEO/0.jpg)](https://www.youtube.com/watch?v=ID DE VOTRE VIDEO)</highlight>
<p>Pour cette méthode, vous devrez écrire les lignes ci-haut et changer NOM DE VOTRE IMAGE par le nom souhaité. Puis ID DE VOTRE VIDEO par l'identification que vous pouvez trouver sur Youtube.</p>