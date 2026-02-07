<?php 
/**
 * @type     article
 * @title    Intégration de l'accueil
 * @icon     images/icon.svg
 * @abstract Intégration de la page d'accueil statique (HTML, SASS, CSS, JS)
 * @index 51
 */
?>

<p>Cette étape concerne TOUS les membres de l'équipe.</p>



<warning>Cette étape du projet ne concerne pas encore WordPress. Vous devez monter vos pages-clé (template) de façon statique, c'est à dire en HTML, SASS et <br><br> 
Pour ce livrable, il n'y aura que l'<em>accueil complète</em> à intégrer. La page devra respecter le guide de style, les maquettes de l'accueil de votre équipe. Elle doit s'afficher correctement sur les 3 formats prévus: mobile, tablette et grand écran.</warning>

<alert>Travaillez chacun de votre côté en faisant des <em>commit</em> et des <em>pull/push</em> git très souvent. Le client aura un oeil sur l'historique de votre git.</alert>

<info>Lorsque vous travaillez sur le projet, n'oubliez pas de démarrer Toggl (votre rapport de temps de travail).</info>

<warning>À PROPOS DE BOOTSTRAP. <br> Notez bien ceci: Je vous permets d'utiliser Bootstrap mais QUE POUR LA NAVBAR. <br><br>
Pour le reste du site, il sera interdit d'utiliser toute classe provenant de Bootstrap, il faut que vous développez vos compétences en matière de la mise en page purement HTML/CSS (via le SCSS). Vous devrez travailler notamment avec CSS Grid mais il est possible d'utiliser aussi CSS Flexbox.</warning>


<dots></dots>
<grostitre>Requis</grostitre>
N'oubliez pas de vous fier AUSSI aux requis client:
<intlink href='../requis-client/'></intlink>
<warning><small>À cette étape, il n'est pas requis d'avoir complété l'animation GSAP du bloc de don, ni l'animation parallax avec GSAP et ScrollTrigger. Vous pouvez donc vous concentrer sur l'intégration statique du contenu de la page et vous assurer que le tout soit adaptable sur les différents appareils (mobile, tablette et desktop).</small></warning>
<checklist>
    Appliquez les corrections nécessaires (concernant l'échaffaudage du projet, l'entête et le pied de passe) après avoir reçu les commentaires du client lors de la rencontre aujourd'hui.
    Intégrez chaque section du contenu principal <em>main</em> de l'accueil.
    Découpez vos styles SCSS en partials, par composante. Voici des examples de ce qu'on peut appeler une composante: une carte "card", une section "hero", un accordéon, un article textuel, un appel à l'action, une liste de fonctionnalités, un pied de page, des carte témoignages etc. À ce propos, notez qu'il est possible d'écrire des styles plus généraux (non lié à aucune composante) dans votre fichier scss principal style.scss.
    Vous devez suivre votre guide de styles.
    Vous devez respecter la maquettes de l'accueil de votre équipe.
    Tout doit être adaptable en desktop, tablette et mobile tel que prévu sur les 3 versions de l'accueil sur la maquette graphique.
    La personne responsable du QA devra vérifier le travail de l'ensemble de l'équipe demander des ajustments au besoin.
    Vous devez bien faire vos commits git personnels et, lors que la rencontre client, vous deverez m'expliquer ce que vous avez fait personnellement dans l'intégration de l'accueil.
</checklist>

<dots></dots>
<grostitre>Remise</grostitre>
<p>Avant le prochain cours du jeudi, ayez fait vos derniers "commit & push" et gestion de conflits git au besoin. Vous devrez être prêts, votre rapport Toggl complété. Pendant la séance de cours, vous devrez présenter au client votre livrable complété et lui expliquer qui a fait quoi. Ayez en main une façon de prendre des notes des commentaires du client.</p>
