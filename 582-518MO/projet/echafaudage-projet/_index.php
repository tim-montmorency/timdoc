<?php 
/**
 * @type     article
 * @title    Échafaudage du projet
 * @icon     images/icon.svg
 * @abstract Création des fichiers de bases, intégration entête et pied de page
 * @index 53
 */
?>
<p>Cette étape concerne tous les membres de l'équipe.</p>

<p>Jeudi prochain (jeudi semaine 6) est la date de remise pour cette étape. Le client vous rencontrera, équipe par équipe pour une période de 15 min., pour vérifier l'avancement du projet. Vous devrez aussi montrer votre rapport de temps sur Toggl individuellement.</p>

<p>Chaque membre de l'équipe doit participer et démontrer au client ce qu'il a accompli pour cette étape.</p>


<warning>Cette étape du projet ne concerne pas encore WordPress. Vous devez monter vos pages-clé (template) de façon statique, c'est à dire en HTML, SASS et JavaScript. Pour l'instant il n'y a pas de page complète à livrer mais ce qu'il y a dans les requis ci-dessous.</warning>

<alert>Travaillez chacun de votre côté en faisant des commit et des pull/push git très souvent. Le client aura un oeil sur l'historique de votre git.</alert>

<info>Lorsque vous travaillez sur le projet, n'oubliez pas de démarrer Toggl (votre rapport de temps de travail).</info>

<dots></dots>
<grostitre>Requis</grostitre>
<checklist>
    Préparez votre répertoire de base avec un fichier index.html, main.js, style.scss (et lorsque compilé créera un fichier style.css). Tous ces fichiers seront à la racine du répertoire git.
    Ajoutez un dossier partials-scss
    Créez les fichiers partials scss que vous pensez avoir besoin (un partial par composante et possiblement un autre pour les mixins et les variables)
    En SCSS, créez les styles de base pour représenter tout ce qu'il y a dans votre guide de styles (texte et couleur appliqués sur les balises appropriées). Vous pouvez aussi créer des variables en conséquence. 
    Développez "mobile first", c'est à dire que vous codez pour mobile d'abord et faites des <em>media queries</em> pour plus grand.
    Intégrez (en html, css et possiblement js) l'entête de votre site web, y compris la navbar.
    Intégrez (en html, css) le pied de page de votre site web.
    Tout doit être adaptable en desktop, tablette et mobile. 
    Pour la navbar, pensez aux burger menu dans la version mobile.
</checklist>

<dots></dots>
<grostitre>Remise</grostitre>
<p>Avant le prochain cours du jeudi, ayez fait vos derniers "commit & push" et gestion de conflits git au besoin. Vous devrez être prêts, votre rapport Toggl complété. Pendant la séance de cours, vous devrez présenter au client votre livrable complété et expliquer qui a fait quoi.</p>
