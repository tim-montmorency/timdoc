<?php
/**
 * @type     article
 * @title    Introduction à la AR
 * @icon     images/icon.png
 * @abstract Installation, création de compte
 */
?>

<p class="spacer">Ici, nous verrons ce qu'est la réalité augmentée et nous nous créerons un compte pour le portail de développement que nous utiliserons pour notre jeu.</p>


<dots></dots>

<grostitre>Réalité augmentée</grostitre>
<p>La réalité augmentée est en fait la superposition d'éléments numériques sur la réalité. Elle nous permet de faire apparaître des éléments dans notre environnement comme s'ils y étaient. Un exemple connu de réalité augmentée est le jeu Pokémon Go. Dans ce jeu, des pokémons apparaissent dans l'environnement qui nous entoure. </p>

<dots></dots>

<grostitre>Création de compte</grostitre>
<p>Pour faire de la réalité augmentée dans Unity, on doit utiliser des Packages externes pour les outils de détection. Il en existe plusieurs. Unity a créé son propre paquet AR Foundation. Ce dernier est intégré à Unity lorsque vous créez un projet avec le modèle AR.</p>
<p>Pour notre cours, nous ne verrons pas le modèle de Unity, nous utiliserons plutôt Vuforia Engine qui est un développeur externe. Ils ont développé des outils très puissants qui fonctionnent dans Unity.</p>
<p>Rendez-vous sur le site suivant pour créer votre compte:</p>
<doclink href="https://developer.vuforia.com/vui/auth/register">Vuforia Engine Developer Portal</doclink>
<p>Dans le champ Company, entrez: Collège Montmorency.</p>
<p>Une fois votre compte créé, vous devrez aller le confirmer avec un courriel que vous recevrez. Cliquez sur le lien reçu.</p>
<p>Appuyez ensuite sur Login et entrez vos informations de connexion</p>

<dots></dots>

<grostitre>Création d'une license</grostitre>
<p>Pour utiliser Vuforia, vous aurez besoin d'une license. Voici comment la créer.</p>

<checklist>Une fois connecté à votre compte, allez dans la section License Manager dans la barre de menu verte
Appuyez sur le bouton Get Basic à droite de l'écran.
Donnez un nom à votre license et cochez la boîte d'acceptation.
Appuyez sur Confirm. 
Le nom de votre license apparaîtra alors, appuyez sur celui-ci pour voir votre license. La série de caractères dans la boîte grise est votre license. Vous aurez besoin de cette information dans Unity plus tard.   
</checklist>

<dots></dots>

<grostitre>Ajouter Vuforia à un projet</grostitre>
<p>Pour ajouter Vuforia à votre projet, vous devrez ajouter un Asset depuis le Asset Store. Suivez la procédure des notes de cours d'introduction pour importer Vuforia Engine dans votre projet. 
<doclink href="https://assetstore.unity.com/packages/templates/packs/vuforia-engine-163598">Vuforia Engine</doclink> 
<intlink href="../../unity/introduction/#importer-des-assets-du-asset-store"></intlink>
