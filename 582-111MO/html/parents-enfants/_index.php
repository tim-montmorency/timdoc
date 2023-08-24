<?php
/**
 * @type     article
 * @title    Relation Parent-Enfant
 * @icon     images/icon.png
 * @abstract Parent, enfant
 */
?>


<p>Imaginez que vous organisez des fichiers sur votre ordinateur pour créer un site web. Vous avez un dossier principal pour votre site, et à l'intérieur de ce dossier, vous avez des sous-dossiers et des fichiers.</p>

<grostitre>Parent-Enfant</grostitre>

<img src="./images/parent-enfant.png">


    <ul>
        <li>
        <em>Parent et Enfant :</em> Pensez aux dossiers comme des « parents » et aux fichiers qu'ils contiennent comme des « enfants ». Par exemple, <em>dans l'image précédente</em>, le dossier "<em>sources</em>" (parent) contient des fichiers "<em>client.doc</em>" et "<em>maquette.psd</em>" (enfants).
        </li>

        <li><em>Hiérarchie :</em> Les dossiers et les fichiers sont organisés en une hiérarchie, où certains dossiers sont au niveau supérieur et d'autres sont à des niveaux inférieurs. Les dossiers supérieurs (parents) contiennent les fichiers et les dossiers inférieurs (enfants).</li>

        <li><em>Relations :</em> Les parents et les enfants sont liés les uns aux autres pour créer la structure du site web. Par exemple, les fichiers "<em>client.doc</em>" et "<em>maquette.psd</em>" sont liés au dossier "<em>sources</em>" parent.</li>

    </ul>

<h2>Exemple</h2>

<p style="font-size: 20px; border-style:solid; border-color:red; border-width:1px; padding:20px">Accueil > <em>Produits</em> > Catégorie A > Sous-catégorie B > Page de produit</p>

<ul>
    <li>Dans cet exemple, <em>"Accueil"</em> est le niveau le plus élevé et peut être considéré comme le <b style="color:red"><u>grand-parent</u></b>.</li>
    <li><em>"Produits"</em> est le parent de <b style="color:red"><u>"Catégorie A"</u></b>.</li>
    <li><em>"Catégorie A"</em> est le parent de <b style="color:red"><u>"Sous-catégorie B"</u></b>.</li>
    <li>Et enfin, <em>"Sous-catégorie B"</em> est le parent de la <b style="color:red"><u>"Page de produit"</u></b>.</li>
</ul>

<grostitre>Questions</grostitre>

<doclink href="https://app.wooclap.com/BNNHKJ?from=event-page">Questionnaire Wooclap</doclink>

<dots></dots>

<p>Lorsque vous référencez des fichiers dans le code de vos pages web (comme HTML, CSS, JavaScript), vous spécifiez le chemin d'accès pour indiquer où se trouvent ces fichiers par rapport à la page actuelle.</p>

<info>En résumé, dans la hiérarchie des fichiers d'un site web, les dossiers sont comme les parents qui contiennent les fichiers enfants. Cette organisation aide à gérer les ressources et à créer la structure nécessaire pour faire fonctionner le site web.</info>

<dots></dots>


<grostitre>Chemin d'accès . /</grostitre>

<p>Dans Visual Studio Code (VS Code) et dans de nombreux autres environnements de développement, l'ajout de . / devant les chemins d'accès aux fichiers n'est généralement pas nécessaire, sauf dans certaines situations particulières.</p>

<p>Lorsque vous spécifiez un chemin d'accès à un fichier dans VS Code, le point de départ par défaut est le dossier dans lequel se trouve le fichier que vous avez ouvert. Par conséquent, si le fichier que vous ouvrez est déjà dans le même dossier que les fichiers auxquels vous faites référence, l'ajout de . / n'est pas nécessaire et peut être omis.</p>

<p><em>Cependant, il peut y avoir des cas où l'utilisation de . / peut être appropriée :</em></p>

<ol>
    <li>
    <em>Chemin relatif + clair :</em> Si vous voulez rendre le chemin d'accès relatif plus explicite, vous pouvez ajouter . / pour indiquer que le chemin d'accès est relatif et non absolu.
    </li>

    <li>
        <em>Chemin à partir d'un emplacement différent :</em> Si vous travaillez à partir d'un sous-dossier ou d'un emplacement différent dans votre projet, l'ajout de . / peut être nécessaire pour spécifier explicitement que le chemin d'accès commence à partir du répertoire actuel.  
    </li>

    <li>
        <em>Éviter les conflits :</em> Dans certains cas, des noms de fichiers peuvent coïncider avec des noms de dossiers, ce qui pourrait provoquer des conflits. Dans de tels cas, l'ajout de ./ peut aider à éviter toute confusion.
    </li>

</ol>

<info>
    En résumé, bien que l'ajout de . / ne soit généralement pas nécessaire dans la plupart des scénarios dans VS Code, son utilisation peut être une question de préférence personnelle ou de clarification, en particulier si vous travaillez dans des situations spécifiques.
</info>

<warning>
    Pour éviter les conflits, dans le cadre du cours, nous allons <u><em>toujours</em></u> utiliser . / devant les fichiers pour indiquer que le chemin d'accès commence à partir du répertoire actuel.
</warning>

<dots></dots>

<grostitre>Remonter de niveau . . /</grostitre>

<img src="./images/remonter-dossier.webp">

<p>Lorsque vous désirez remonter d'un niveau comme par exemple : vous êtes au niveau d'un fichier enfant et que vous désirez remonter au dossier parent d'utiliser un autre fichier dans le dossier parent, on l'écrit <em>. . / nom_du_fichier</em> </p>

<h4 style="font-size: 20px; border-style:solid; border-color:red; border-width:1px; padding:20px">Dans le cas présent :  <em>. . / index.html</em></h4>

<p>Si vous devez remonter de 2 niveau alors suffit d'écrire :  <em>. . / . . / nom_du_fichier</em></p>
