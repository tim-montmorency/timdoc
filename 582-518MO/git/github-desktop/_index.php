<?php

/**
 * @type     article
 * @title    GitHub Desktop
 * @icon     images/icon.svg
 * @abstract Logiciel de gestion git pour les débutants avec github
 * @index 70
 */
?>

<!-- acces au contenu complet via https://web.archive.org/web/20231209055613/https://smnarnold.com/cours/git/github-desktop  -->

<p>L'interface en ligne de commande&nbsp;<em>(CLI)</em>&nbsp;de Git est très réussie! Elle permet aux développeurs de
    travailler sans interface graphique en tapant des lignes de commandes directement dans un terminal. Cette technique
    est puissante 💪, efficace et ne présente aucun inconvénient, outre qu'elle peut paraître intimidante de
    prime&nbsp;abord.</p>


<p>Pour cette raison,&nbsp;<a href="../github/">GitHub</a>&nbsp;a créé
    l'application gratuite&nbsp;<a href="https://desktop.github.com/">GitHub Desktop</a>&nbsp;offrant une interface graphique, permettant d'utiliser des boutons plutôt que d'entrer des
    lignes de commande sous forme de&nbsp;texte.</p>





<dots></dots>
<grostitre>Rôle</grostitre>


<p>Bien qu'il soit possible de modifier un fichier directement sur GitHub, il est préférable d'effectuer la modification
    en local et de passer par GitHub&nbsp;Desktop ensuite pour pousser le changement sur&nbsp;GitHub.</p>
<p>Ainsi, il est possible de visualiser les changements apportés dans un navigateur et de s'assurer qu'ils correspondent
    aux résultats attendus avant de les&nbsp;<em>"sauvegarder"</em>&nbsp;en&nbsp;ligne.</p>





<dots></dots>  
<grostitre>Prérequis</grostitre>


<ul>
    <li>
        Un compte&nbsp;<a href="https://github.com/">GitHub</a>.
    </li>
    <li>
        Avoir l'application&nbsp;<a
                href="https://desktop.github.com/">GitHub Desktop</a>.
    </li>
</ul>




<dots></dots>
<grostitre>Authentification</grostitre>


<ol start="1">
    <li>
        Dans le coin en supérieur gauche de GitHub Desktop, choisissez l'onglet&nbsp;<em>File</em>.
    </li>
    <li>
        Sélectionnez ensuite&nbsp;<em>Options</em>&nbsp;et son onglet&nbsp;<em>Accounts</em>.
    </li>
    <li>
        Sur la ligne intitulée GitHub.com, cliquer sur le bouton&nbsp;<em>Sign in</em>&nbsp;et entrer les
            informations de votre&nbsp;compte.
    </li>
</ol>
<p>Voilà, maintenant votre application GitHub Desktop connectée à votre compte&nbsp;GitHub!✨</p>




<dots></dots>
<grostitre>Création d'un répertoire</grostitre>

<p>Pour créer un répertoire, il suffit d'être connecté à GitHub et de cliquer sur le bouton&nbsp;<code>add</code>, situé
    dans le coin supérieur gauche de l'application. Un menu contextuel offrira
    l'option&nbsp;<code>Create New Repository...</code>. En cliquant sur celui-ci, une fenêtre d'initialisation
    de&nbsp;<em>repo</em>&nbsp;devrait&nbsp;s'afficher.</p>


<img src="images/github-desktop-add-repository.png" width="261"
            height="107" alt="" loading="lazy" class="image__image">


<p>Dans cette fenêtre, il suffit d'entrer le nom désiré du&nbsp;<em>repo</em>, une brève description et l'emplacement
    sur votre ordinateur où vous désirez que le dossier du projet 📁 soit&nbsp;créé.</p>
<p>De plus, il est possible de spécifier si un fichier&nbsp;<a
        href="../github#readme">README</a>&nbsp;devrait
    être créé, de spécifier si l'on souhaite utiliser un&nbsp;<a
        href="../github#gitignore">.gitignore</a>&nbsp;et
    si une&nbsp;<a
        href="../github#licences">licence</a>&nbsp;devrait
    être attribuée au&nbsp;projet.</p>


 <img src="images/github-dektop-create-repo.png" width="394"
            height="451" alt="" loading="lazy" class="image__image">



<dots></dots>
<grostitre>Clone</grostitre>


<p>Pour&nbsp;<em>cloner</em>&nbsp;un répertoire précédemment créé sur&nbsp;<a
        href="https://github.com/">GitHub.com</a>&nbsp;ou
    encore&nbsp;<em>cloner</em>&nbsp;le répertoire d'un collègue vous ayant&nbsp;<a
        href="../github#gestion-des-acces-au-repo">donné
        accès à son répertoire</a>, il faut cliquer sur le bouton&nbsp;<em>add</em>&nbsp;dans le coin supérieur gauche
    de l'application. Un menu contextuel offrira alors l'option&nbsp;<em>Clone Repository…</em>.</p>

<img src="images/github-desktop-add-repository-1627102645.png"
            width="261" height="107" alt="" loading="lazy" class="image__image">


<p>En cliquant sur celui-ci, une fenêtre devrait vous offrir de choisir parmi 3&nbsp;onglets:</p>
<ul>
    <li>
        <em>GitHub.com</em>&nbsp;pour vos répertoires existants sur&nbsp;<a
                href="https://github.com/">GitHub.com</a>
    </li>
    <li>
        <em>GitHub Entreprise Server</em>&nbsp;si votre employeur bénéficie de ce type de&nbsp;compte.
    </li>
    <li>
        <em>URL</em>&nbsp;pour entrer l'adresse d'un&nbsp;<em>repo</em>&nbsp;créé par un&nbsp;collègue.
    </li>
</ul>


<dots></dots>
<grostitre>Anatomie</grostitre>


<h3 class="heading heading--h3" id="Accès rapides">Accès rapides</h3>

<ul>
    <li>
        <em>Open in…</em>&nbsp;ouvre le projet courant dans votre éditeur de&nbsp;texte.
    </li>
    <li>
        <em>Show in Finder</em>&nbsp;ouvre le dossier du projet courant dans votre explorateur de&nbsp;fichiers.
    </li>
    <li>
        <em>GitHub</em>&nbsp;ouvre dans votre navigateur la page GitHub du projet&nbsp;courant.
    </li>
</ul>

<img src="images/github-desktop-acces-rapide.png" width="609"
            height="371" alt="" loading="lazy" class="image__image">


<h3 class="heading heading--h3" id="Menu principal">Menu principal</h3>


        <img src="images/github-desktop-nav.png" width="707" height="49"
            alt="" loading="lazy" class="image__image">

<ul>
    <li>
        <em>Current Repository</em>&nbsp;indique le répertoire/projet sur lequel vous, vous trouver. Au clic, il vous
            permet de passer d'un projet à un&nbsp;autre.
    </li>
    <li>
        <em>Current Branch</em>&nbsp;indique la branche courante. Au clic, il est possible de changer
            de&nbsp;branche.
    </li>
    <li>
        <em>Fetch origin </em>🔄 indique quand GitHub Desktop a vérifié pour la dernière fois si de nouveaux
            changements étaient disponibles en ligne. Cliquer sur cet onglet forcera GitHub à effectuer une
            nouvelle&nbsp;vérification.
    </li>
</ul>




<h3 class="heading heading--h3" id="États des fichiers">États des fichiers</h3>

<img src="images/github-desktop-fichiers.png" width="250"
            height="30" alt="" loading="lazy" class="image__image">

<ul>
    <li>
        <em>Changes</em>&nbsp;indique le nombre de fichiers modifiés depuis le dernier commit et les affiches, sous
            forme de&nbsp;liste.
    </li>
    <li>
        <em>History</em>&nbsp;lorsque sélectionné, indique tous les précédents commits, du plus récent aux plus
            anciens, et permet de voir le détail de chaque fichier&nbsp;modifié.
    </li>
</ul>
<h3 class="heading heading--h3" id="Boite de commit">Boite de commit</h3>


<img src="images/github-desktop-commit.png" width="246"
            height="196" alt="" loading="lazy" class="image__image">


<p>Permets d'inscrire le nom et la description du prochain&nbsp;commit</p>




<dots></dots>
<grostitre>Revert</grostitre>


<p>L'option&nbsp;<em>revert</em>&nbsp;permet de revenir à une ancienne version de son&nbsp;code 🔙.</p>
<p>Pour ce faire, il faut allez dans l'onglet&nbsp;<em>History</em>&nbsp;et effectuer un clique droit sur le commit
    désiré. La première option du menu contextuel sera&nbsp;<em>Revert this Commit</em>. En la sélectionnant, votre
    copie locale retournera à cette précédente&nbsp;sauvegarde.</p>



<img src="images/github-desktop-revert.png" width="311"
            height="100" alt="" loading="lazy" class="image__image">



<dots></dots>

<grostitre>Alternatives</grostitre>

<p>Il existe plusieurs alternatives à GitHub Desktop, notamment:</p>
<ul>
    <li>
        <a href="https://www.sourcetreeapp.com/">Sourcetree</a>
    </li>
    <li>
        <a href="https://www.gitkraken.com/git-client">GitKraken</a> 🦑
    </li>
    <li>
        <a
                href="https://git-scm.com/book/en/v2/Getting-Started-The-Command-Line">Git
                CLI</a>&nbsp;<em>(La ligne de commande)</em>
    </li>
    <li>
        etc.
    </li>
</ul>

<alert>
    <h3>Erreur fréquente</h3>
    <p>Déplacez le dossier d’un projet après sa création risque de briser son lien avec&nbsp;Git.</p>
</alert>

<!-- 

<aside class="exercice-card">
    <div class="exercice-card__content">
        <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
        <a href="/web/20231209055613/https://smnarnold.com/exercices/git/mario-bros" target="_blank"
            class="exercice-card__title">
            Mario&nbsp;Bros
        </a>

        <p class="exercice-card__description">Pour cet exercice vous devrez utiliser quelques-une des commandes de base
            de GIT afin de compléter un projet portant sur Super Mario&nbsp;Bros.</p>
    </div>

    <picture class="exercice-card__preview">
        <source
            srcset="/web/20231209055613im_/https://smnarnold.com/img/asset/YXNzZXRzL2V4ZXJjaWNlcy9naXQtbWFyaW8tYXBlcmN1LnBuZw==?w=620&amp;s=607653c4999ea7654a073565031c8872"
            media="(max-width: 575px) and (min-resolution: 2dppx)">
        <source
            srcset="/web/20231209055613im_/https://smnarnold.com/img/asset/YXNzZXRzL2V4ZXJjaWNlcy9naXQtbWFyaW8tYXBlcmN1LnBuZw==?w=310&amp;s=be4abd6b40d095bfe46c7cb8f9ad31de"
            media="(max-width: 575px)">
        <source
            srcset="/web/20231209055613im_/https://smnarnold.com/img/asset/YXNzZXRzL2V4ZXJjaWNlcy9naXQtbWFyaW8tYXBlcmN1LnBuZw==?w=370&amp;s=2c40e05ed65b79227f1cbb0981125afe"
            media="(min-resolution: 2dppx)">
        <img src="/web/20231209055613im_/https://smnarnold.com/img/asset/YXNzZXRzL2V4ZXJjaWNlcy9naXQtbWFyaW8tYXBlcmN1LnBuZw==?w=185&amp;s=7fa654b1ff768e4f3dbfd6088d5714d8"
            width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
</aside>


<aside class="exercice-card">
    <div class="exercice-card__content">
        <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
        <a href="/web/20231209055613/https://smnarnold.com/exercices/git/branches-radars-vivants" target="_blank"
            class="exercice-card__title">
            Branches - Radars&nbsp;vivants
        </a>

        <p class="exercice-card__description">Pour cet exercice vous devrez réaliser une mise en page présentant la
            campage Et si les radars de vitesse étaient vivants? de&nbsp;LG2.
            Puisqu...</p>
    </div>

    <picture class="exercice-card__preview">
        <source
            srcset="/web/20231209055613im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvYnJhbmNoZXMtcmFkYXJzLXZpdmFudHMuanBn?w=620&amp;s=92639b13ba55391e41420a4a1a3b326e"
            media="(max-width: 575px) and (min-resolution: 2dppx)">
        <source
            srcset="/web/20231209055613im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvYnJhbmNoZXMtcmFkYXJzLXZpdmFudHMuanBn?w=310&amp;s=23d622333557e17f22c91c58b8a2e5b1"
            media="(max-width: 575px)">
        <source
            srcset="/web/20231209055613im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvYnJhbmNoZXMtcmFkYXJzLXZpdmFudHMuanBn?w=370&amp;s=4cf65d6a8e760a46beef4a364404aef9"
            media="(min-resolution: 2dppx)">
        <img src="/web/20231209055613im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvYnJhbmNoZXMtcmFkYXJzLXZpdmFudHMuanBn?w=185&amp;s=e64239c01d68552f4065d2236c27d3c0"
            width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
</aside>

-->
