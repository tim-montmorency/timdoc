<?php

/**
 * @type     article
 * @title    GitHub
 * @icon     images/icon.svg
 * @abstract  GitHub, un hébergeur de code source
 * @index 80
 */
?>

<!-- acces au contenu complet via https://web.archive.org/web/20231209053244/https://smnarnold.com/cours/git/github  -->

<p>Comme&nbsp;<a target="_blank" rel="noopener noreferrer"
        href="../intro/">mentionné précédemment</a>, lorsqu'un
    développeur utilise la commande Git&nbsp;<em>push</em>, il envoie une sauvegarde de son projet en ligne. Cependant,
    pour fonctionner cette approche nécessite un&nbsp;<strong>espace en&nbsp;ligne</strong>.</p>
<p>C'est ici que&nbsp;<a href="https://github.com/">GitHub</a>&nbsp;entre
    en&nbsp;jeu!</p>



<img src="./images/octocat.png" width="241" height="200" alt="" loading="lazy" class="image__image">

<warning>Sans GitHub, il serait possible de faire des commits avec Git. Cependant, la portabilité et l’aspect
    collaboratif serait limité, puisqu’il serait impossible de faire des push sans avoir un espace sur un serveur pour
    les&nbsp;stocker.</warning>


<dots></dots>
<grostitre>Esprit de collaboration</grostitre>

<p>Par défaut, héberger un projet sur GitHub est gratuit et beaucoup de projets sont publics afin de pouvoir être
    consultés/modifiés au besoin. Parmi ces projets, on retrouve plusieurs librairies connues, telles&nbsp;que:</p>

    <ul>
        <li><a href="https://github.com/twbs/bootstrap">Bootstrap</a></li>
        <li><a href="https://github.com/jquery/jquery">jQuery</a></li>
        <li><a href="https://github.com/facebook/react">React</a></li>
        <li>Etc.</li>
    </ul>
    <p>Et d'organisations d'envergures.</p>
    <ul>
        <li><a href="https://github.com/nasa">La NASA 👨‍🚀</a></li>
        <li><a href="https://github.com/microsoft">Microsoft</a></li>
        <li><a href="https://github.com/google">Google</a></li>
        <li>Etc.</li>
    </ul>
<p>L'aspect public peut à priori peut sembler étrange, mais il favorise grandement la collaboration entre développeurs,
    puisqu'il permet de:</p>
<ul>
    <li>
        Faire une copie d'un&nbsp;projet.
    </li>
    <li>
       D'y apporter des&nbsp;modifications.
    </li>
</ul>


<dots></dots>
<grostitre>Création d'un répertoire</grostitre>


<p>Pour créer un répertoire, il suffit d'être connecté à GitHub et de se rendre sur la&nbsp;<a
        href="https://github.com/">page d'accueil</a>. En haut à gauche de
    l'interface, un bouton&nbsp;<em>New</em>&nbsp;permet d'accéder à la page d'initialisation d'un nouveau&nbsp;repo.
</p>

<img src="./images/github-create-repo.png" width="326" height="97" alt="" loading="lazy" class="image__image">

<p>Sur cette page, il suffit d'entrer le nom désiré du&nbsp;<em>repo</em>, une brève description et son
    statut&nbsp;<em>(privé ou&nbsp;public)</em>.</p>
<p>De plus, il est possible de spécifier si un fichier&nbsp;<a
        href="#readme">README</a>&nbsp;devrait
    être créé, de spécifier si l'on souhaite utiliser un&nbsp;<a
        href="#gitignore">.gitignore</a>&nbsp;et
    si une licence devrait être attribuée au&nbsp;projet.</p>

<img src="./images/github-create-repository.png" width="732" height="643" alt="" loading="lazy" class="image__image">




<dots></dots>
<grostitre>README</grostitre>
<p>Le README sert à présenter un projet. Lorsque vous êtes sur la page d'accueil d'un répertoire, vous pouvez voir
    l'arborescence des fichiers le constituant suivis du README. Voici&nbsp;<a
        href="https://github.com/Tim-Momo/wordpress-theme-de-base" target="_blank">un exemple
        minimaliste</a>.</p>
<p>Par défaut, si vous avez coché&nbsp;<code>Initialize this repository with a README</code>, un README sera créé avec
    le titre du&nbsp;<em>repo</em>&nbsp;et la description que vous avez entrée au moment de sa création. Il est possible
    de modifier ce fichier ultérieurement afin d'y incorporer plus d'informations si&nbsp;désirées.</p>
<p>Ce fichier indique généralement la raison d'être du projet et souvent comment l'utiliser. Sans lui, un projet ne
    ressemble qu'à une collection de fichiers pour quiconque n'ayant pas travaillé sur le&nbsp;projet.</p>

<warning>Afin de simplifier/standardiser son affichage, son écriture ne se fait pas en HTML/CSS, mais en&nbsp;<a
                href="https://www.markdownguide.org/" target="_blank">Markdown</a>.</warning>





<dots></dots>
<grostitre>Gitignore</grostitre>

<p>Le fichier&nbsp;<em>.gitignore</em>&nbsp;permet de spécifier à Git des fichiers ou dossiers à l'intérieur
    du&nbsp;<em>repo</em>&nbsp;qu'il ne devrait pas surveiller et pousser vers le serveur&nbsp;<em>(GitHub)</em>.</p>
<p>Par exemple, il est possible d'avoir un fichier contenant ses identifications&nbsp;<em>(nom d'usager et mot de
        passe)</em>&nbsp;à la racine du projet. Cependant, ces informations ne devraient pas être disponibles à tous sur
    GitHub. Il est donc possible de spécifier d'ignorer ce fichier en ajoutant son nom et son extension dans
    le&nbsp;<code>.gitignore</code>, ex:&nbsp;<code>identifiants.doc</code>.</p>
<p>Parfois certains fichiers ne sont simplement pas pertinents au projet en soi. Par exemple, lors de la création d'un
    site WordPress, seul le thème développé compte réellement. Il est donc préférable de télécharger WordPress sur
    le&nbsp;<a href="https://wordpress.org/download/"  target="_blank">site officiel de
        WordPress</a>, afin d'avoir la version la récente et à l'intérieur de celui-ci, de télécharger
    le&nbsp;<em>repo</em>&nbsp;Git contenant le thème seul. Ainsi les mises à jour fréquentes de WordPress ne
    nécessitent pas de&nbsp;<code>commits</code>,&nbsp;<code>push</code>&nbsp;et&nbsp;<code>pull</code>&nbsp;pour
    l'équipe de&nbsp;développement.</p>


<doclink href='https://github.com/github/gitignore'>Collection de&nbsp;.gitignore</doclink>


<dots></dots>
<grostitre>Licenses</grostitre>

<p>Si un&nbsp;<em>repo</em>&nbsp;n'a aucune licence, il est possible d'utiliser son contenu librement. Cependant,
    certaines licences vont&nbsp;spécifier:</p>

<ul>
    <li>de créditer l'auteur.</li>
    <li>que son usage est réservé aux projets à but non&nbsp;lucratif.</li>
    <li>de ne pas modifier le&nbsp;contenu.</li>
    <li>etc.</li>
</ul>

<doclink href='https://choosealicense.com/'>Choose an open source&nbsp;license: Conseils sans jugement sur le choix d’une licence pour votre projet open&nbsp;source</doclink>



<dots></dots>
<grostitre>Clone</grostitre>
<p>Si vous avez créé votre&nbsp;<em>repo</em>&nbsp;en ligne, il est probable que vous désirez éventuellement le modifier
    sur votre ordinateur. Pour ce faire, il faut repérer le bouton vert ⬇️ <em>Code</em>&nbsp;en haut à droite de votre
    page de&nbsp;répertoire.</p>
<img src="./images/github-code-button.png" width="109" height="32" alt="" loading="lazy" class="image__image">
<p>En cliquant sur celui-ci, vous aurez les options&nbsp;de:</p>
<ul>
    <li>
        <p>Copier l'url du répertoire, ce qui peut-être requis par certains logiciels concurrents à GitHub&nbsp;Desktop.
        </p>
    </li>
    <li>
        <p>Cliquer sur&nbsp;<em>Open with GitHub Desktop</em>, l'option la plus facile si vous avez ce
            logiciel&nbsp;d'installé sur votre&nbsp;ordinateur.</p>
    </li>
    <li>
        <p>Cliquer sur&nbsp;<em>Download ZIP</em>. Cependant, cette option ne gardera aucun lien entre votre version en
            ligne GitHub et la version que vous venez de télécharger. Il est donc préférable d'éviter cette option, dans
            la majorité des&nbsp;cas.</p>
    </li>
</ul>





<dots></dots>
<grostitre>Fork</grostitre>
<p>Comme mentionné précédemment, pour modifier un&nbsp;<em>repo</em>&nbsp;en ligne, il faut en être l'auteur ou en avoir
    obtenu la permission. Néanmoins, il est possible d'être intéressé par un projet et de vouloir s'en servir comme
    point de départ pour créer son propre&nbsp;projet.</p>
<p>Pour ce faire, il est possible d'effectuer un&nbsp;<em>fork</em>. Cette commande copie
    le&nbsp;<em>repo</em>&nbsp;GitHub en question vers votre compte GitHub. Puisque cette copie
    du&nbsp;<em>repo</em>&nbsp;vous appartient, vous pouvez effectuer des modifications et
    &nbsp;<em>push</em>&nbsp;sur&nbsp;celle-ci sans problème.</p>
<p>Pour ce faire, il faut cliquer sur le bouton&nbsp;<em>Fork</em>&nbsp;en au à droite du répertoire que l'on
    désire&nbsp;copier.</p>


<img src="./images/github-fork-button.png" width="104" height="28" alt="" loading="lazy" class="image__image">



<warning>Tout l’historique du projet, jusqu’au moment du <em>fork</em>, sera copié sur votre <em>repo</em>. De plus,
    tous les changements effectués après le <em>fork</em> sur le <em>repo d’origine</em> seront ignorés sur votre copie
    du&nbsp;<em>repo</em>.</warning>


<dots></dots>
<grostitre>Alternatives à GitHub</grostitre>

<p>Il existe plusieurs alternatives à GitHub, notamment:</p>
<ul>
    <li>
        <p><a href="https://bitbucket.org/" target="_blank">Bitbucket</a> 🪣</p>
    </li>
    <li>
        <p><a href="https://about.gitlab.com/" target="_blank">GitLab</a> 🥼</p>
    </li>
      <li>
        <p><a href="https://codeberg.org/" target="_blank">Codeberg</a> 🪨</p>
    </li>
</ul>
<p>Néanmoins, GitHub étant le plus grand hébergeur de code source au monde&nbsp;(<a
        href="https://fr.wikipedia.org/wiki/GitHub" target="_blank">50&nbsp;millions
        d'utilisateurs, + de 100&nbsp;millions de projets</a>), sera l'hébergeur enseigné dans le cadre de
    ce&nbsp;cours.</p>
<p></p>