<?php
/**
 * @type     exercice
 * @title    Collection de films 
 * @icon     images/thumb.jpg
 * @abstract Vous devez créer une app vue qui vous permettra de créer et gérer une collections de films.
 */
?>

<p>Vous devez créer une app vue qui vous permettra de créer et gérer une collections de films.</p>


<p>Aperçu du résultat 👇</p>
<small>Pour contrôler la vidéo, clic-droit et "Afficher toute les commandes".</small>
<clipasset src='images/demo-exa316.mp4'></clipasset>

<dots></dots>

<grostitre>Matériel</grostitre>
<a href="images/dossier-depart_exa316.zip" target="_blank" rel="noopener noreferrer" download="" class="starting-files">Dossier de départ 📁</a>



<dots></dots>
<warning>
    <p>Vous devez commenter chaque étape. </p>
    Si c'est en JavaScript, pour l'étape A, instruction 1:
    <highlight lang='javascript'>/* Étape A - 1 */</highlight>
    Si c'est en HTML, pour l'étape A, instruction 1:
    <highlight lang='html'>&lt;!-- Étape A - 1 --&gt;</highlight>
</warning>

<grostitre>Requis Vue.js - Étape A</grostitre>
<info>Vous devez compléter cette étape avant de vous lancer dans les étapes suivantes (B et C).</info>
<checklist>
Dans le fichier <em>index.html</em>, veuillez inscrire votre nom complet dans la balise <span class='inline-code'>title</span>.
Créez une app Vue.js. N’oubliez pas d’inclure le cadriciel via CDN.
Dans les données de votre application Vue, ajoutez une propriété appelée <span class='inline-code'>moviesArr</span>. Cette propriété doit contenir le tableau présenté ci-dessous (sous les consignes).
Affichez la liste des films à l'endroit indiqué dans le fichier <em>index.html</em>: <br>- Utilisez Vue.js pour générer dynamiquement une liste à puces <span class='inline-code'>ul li</span>.<br>- Chaque élément de la liste doit afficher les films du tableau <span class='inline-code'>moviesArr</span> dans le format suivant : <em>Titre&nbsp;(année)</em>
</checklist>

<hr>

<p>Voici le tableau à copier dans votre app :</p>
<highlight lang='javascript'>[
    {
        title: "Dune: Part Two",
        viewed: true,
        year: 2024,
        countryFlagImg: "https://flagsworld.org/img/cflags/USA-flag.png",
        favorite: false,
    },
    {
        title: "The Substance",
        viewed: true,
        year: 2024,
        countryFlagImg: "https://flagsworld.org/img/cflags/USA-flag.png",
        favorite: false,
    },
    {
        title: "Don't Look Up",
        viewed: false,
        year: 2021,
        countryFlagImg: "https://flagsworld.org/img/cflags/USA-flag.png",
        favorite: true,
    },
    {
        title: "Le plongeur",
        viewed: false,
        year: 2023,
        countryFlagImg: "https://assets.codepen.io/9367036/qc.svg",
        favorite: false,
    },
    {
        title: "Simple comme Sylvain",
        viewed: false,
        year: null,
        countryFlagImg: "https://assets.codepen.io/9367036/qc.svg",
        favorite: false,
    },
    {
        title: "Le successeur",
        viewed: false,
        year: 2023,
        countryFlagImg: "https://assets.codepen.io/9367036/qc.svg",
        favorite: true,
    },
    {
        title: "Leave the World Behind",
        viewed: false,
        year: 2023,
        countryFlagImg: "https://flagsworld.org/img/cflags/USA-flag.png",
        favorite: true,
    },
    {
        title: "Ligne de fuite",
        viewed: false,
        year: null,
        countryFlagImg: "https://assets.codepen.io/9367036/qc.svg",
        favorite: false,
    },
    {
        title: "Parasite",
        viewed: true,
        year: 2019,
        countryFlagImg:
        "https://flagsworld.org/img/cflags/south-korea-flag.png",
        favorite: false,
    },
    {
        title: "Everything, Everywhere All at Once",
        viewed: true,
        year: 2023,
        countryFlagImg: "https://flagsworld.org/img/cflags/USA-flag.png",
        favorite: true,
    },
]
</highlight>



<dots></dots>
<warning>
    <p>Vous devez commenter chaque étape. </p>
    Si c'est en JavaScript, pour l'étape B, instruction 1:
    <highlight lang='javascript'>/* Étape B - 1 */</highlight>
    Si c'est en HTML, pour l'étape B, instruction 1:
    <highlight lang='html'>&lt;!-- Étape B - 1 --&gt;</highlight>
</warning>

<grostitre>Requis Vue.js - Étape B</grostitre>
<info>Si vous avez des difficultés avec cette étape, vous pouvez passer directement à l’Étape C, car celle-ci n’est pas essentielle pour la suite.</info>
<checklist>
Ajoutez quatre propriétés dans les données (data) de votre application Vue.js. Ces propriétés seront liées aux champs du formulaire. 
Donnez-leur des noms explicites qui reflètent leur rôle&nbsp;: <br>-&nbsp;Une donnée pour le titre du film. <br>-&nbsp;Une donnée pour l’année de sortie du film. <br>-&nbsp;Une donnée pour indiquer si le film est parmi les préférés de l’utilisateur. <br>-&nbsp;Une donnée pour le pays d’origine du film.
Liez ces 4 données aux champs de formulaire correspondants.
Créez une méthode <span class='inline-code'>saveMovies</span>. 
Cette méthode sera appelée au clic du bouton <em>Ajouter à la liste</em>.
Cette méthode doit ajouter au tableau <span class='inline-code'>moviesArr</span> le nouveau film en se basant sur les 4 infos entrées via le formulaire. 
Après avoir ajouté le nouveau film, réinitialisez la valeur des 4 données liées au formulaire. Par exemple, si c'est une donnée qui contient une chaines de caractères, vous pouvez lui donner la valeur d'une chaine vide "".
</checklist>





<dots></dots>
<warning>
    <p>Vous devez commenter chaque étape. </p>
    Si c'est en JavaScript, pour l'étape C, instruction 1:
    <highlight lang='javascript'>/* Étape C - 1 */</highlight>
    Si c'est en HTML, pour l'étape C, instruction 1:
    <highlight lang='html'>&lt;!-- Étape C - 1 --&gt;</highlight>
</warning>
<grostitre>Requis Vue.js - Étape C</grostitre>
<checklist> 
Ajoutez la classe CSS statique <span class='inline-code'>.flag</span> à chaque film.
Ajoutez la classe CSS dynamique <span class='inline-code'>.favorite</span> aux films marqués comme favoris (basé sur la valeur de la propriété <span class='inline-code'>isFavorite</span>).
Ajoutez la classe CSS dynamique <span class='inline-code'>.viewed</span>  aux films déjà vus (basé sur la valeur de la propriété <span class='inline-code'>viewed</span>).
Ajoutez un attribut dynamique <span class='inline-code'>style</span> sur les films afin d’y ajouter une image d’arrière-plan dont l’url correspondra à la propriété <span class='inline-code'>countryFlagImg</span> du film.
Si un film n’a pas d’année de sortie (basé sur la valeur de la propriété <span class='inline-code'>year</span>), les parenthèses à côté du titre ne doivent pas apparaître.                                                                              
Permettez à l’utilisateur de cliquer sur un film pour lui ajouter ou lui retirer la classe <span class='inline-code'>.viewed</span>. Donc s'il clique et que le film n’a pas encore été marqué comme vu, ajoutez la classe. Si elle est déjà présente, retirez-la.
Créez une propriété calculée appelée <span class='inline-code'>allMoviesViewed</span>. Cette propriété doit retourner <span class='inline-code'>true</span> si tous les films de la liste ont été marqués comme vus.
Le paragraphe avec l’identifiant <span class='inline-code'>#tout-vus</span> doit s’afficher uniquement si la propriété calculée <span class='inline-code'>allMoviesViewed</span> retourne <span class='inline-code'>true</span>.
</checklist>



<dots></dots>
<warning>
    <p>Vous devez commenter chaque étape. </p>
    Par exemple pour l'instruction 1 de la partie "classe JS"
    <highlight lang='javascript'>/* Classe JS - 1 */</highlight>
</warning>

<grostitre>Requis Classe JavaScript</grostitre>
<h3>Personnages de films</h3>
<checklist>
Définissez une classe <span class='inline-code'>Character</span> avec les propriétés : <br>&nbsp;-<span class='inline-code'>name</span> : nom du personnage, <br>&nbsp;-<span class='inline-code'>type</span> : héros ou vilain <br>&nbsp;-<span class='inline-code'>actor</span> : nom de l'acteur/actrice qui incarne le rôle <br>&nbsp;-<span class='inline-code'>movieTitle</span> : titre du film
Créez une méthode <span class='inline-code'>introduce()</span>. 
Cette méthode <span class='inline-code'>introduce()</span> doit être appelée à partir de l'intérieur de la classe, automatiquement, dès son instanciation.
Dans cette méthode, si la balise <span class='inline-code'>div.characters</span> est vide, créer une balise titre de niveau 2 qui contient le mot <em>Personnages</em> et ajoutez cet élément à l'intérieur du <span class='inline-code'>div.characters</span>.
Toujours dans cette méthode, ajoutez une balise paragraphe à la fin du <span class='inline-code'>div.characters</span>. 
Cette balise paragraphe contiendra une phrase telle que: <em>"Leonardo Dicaprio incarne le rôle de Dominic Cobb (héros) dans le film Inception"</em>.
Dynamisez les valeurs de cette phrase avec les valeurs des propriétés de la classe.
Créez 3 instances de la classe <span class='inline-code'>Character</span>, chacune devra passer en paramètre des informations de cinq personnages différents, ceux que vous préférez. Il n'est pas nécessaire que ces personnages soient ceux des films listé ci-haut.
</checklist>



<dots></dots>
<grostitre>Remise</grostitre>
<checklist>Assurez-vous de nommer le dossier de l'examen complété de cette façon (en changeant nom et prénom pour le votre) et de le compresser en format .zip : <em>nom-prenom_exa316.zip</em>
Remettez le dans Teams > Devoirs > Examen final.
</checklist>
<alert>IMPORTANT: Avant de quitter la classe, venez me voir afin que je valide que j'ai bien reçu votre envoi.</alert>





