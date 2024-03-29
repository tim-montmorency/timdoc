<?php

/**
 * @type     article
 * @title    Les Balises
 * @icon     images/icon.png
 * @abstract &lt;html&gt;, &lt;head&gt;, &lt;body&gt;, &lt;p&gt;, etc
 * @ref      web/html
 */
?>

<grostitre>Les balises</grostitre>

<p>Le langage HTML utilise des balises pour structurer le contenu d'une page. Ces balises sont écrites entre les symboles chevrons <incode>&lt;</incode> et <incode>&gt; </incode>:</p>

<img src="images/balises.jpg">

<p>Le contenu d'un élément est placé entre une balise ouvrante et une balise fermante.</p>

<p>Par exemple, les balises de paragraphe sont utilisées pour entourer un paragraphe de texte.</p>

<info>Comment faire les chevrons sur le clavier?</info>

<p>Sur un <em>PC</em>, vous utilisez :</p>
<ol>
    <li>La touche <incode>&lt;</incode> pour faire le chevron ouvrant</li>
    <li>Maj + <incode>&lt; </incode>pour le chevron fermant</li>
</ol>

<p>Sur un <em>Mac</em>, vous utilisez :</p>
<ol>
    <li>la touche <incode>&lt;</incode> pour faire le chevron ouvrant</li>
    <li>et<incode> ⇧ </incode> + <incode>&lt;</incode> pour le chevron fermant</li>
</ol>

<info>Et elles servent à quoi les balises concrètement ?</info>

<p>Les balises indiquent la nature du contenu qu'elles encadrent. Elles permettent au navigateur de comprendre ce qu'il doit afficher à l'écran pour les visiteurs d'un site web.</p>

<p>Si les balises pouvaient parler, elles diraient:</p>

<ul>
    <li>
        <incode>&lt;title&gt;</incode>
        <incode> &lt;/title&gt;</incode>: "Ceci est le titre de la page",
    </li>
    <li>
        <incode>&lt;img&gt;</incode>: "Ceci est une image",
    </li>
    <li>
        <incode>&lt;p&gt;</incode>
        <incode>&lt;/p&gt;</incode> : "Ceci est un paragraphe de texte", etc.
    </li>
</ul>

<info>Pourquoi certaines balises sont doublées et contiennent un / dans leur syntaxe?</info>


<dots></dots>


<grostitre>Types de balises</grostitre>

<h3>On distingue deux types de balises :</h3>

<ul>
    <li>Les balises en <em>paire</em>, qui comprennent une <em>balise ouvrante et une balise fermante</em>.</li>
    <li>Les balises <em>orphelines</em>, qui ne nécessitent qu'une seule balise.<em>(autofermantes)</em></li>
</ul>


<dots></dots>


<grostitre>Balise ouvrante et fermante</grostitre>

<p>Les balises en paire s'ouvrent, contiennent du texte, puis se ferment plus loin.</p>
<p>Par exemple, la balise title qui correspond au titre de la page s'écrit ainsi :</p>

<p>
    <incode>&lt;title&gt;</incode>. Ceci est le titre de ma page <incode>&lt;/title&gt;</incode>
</p>

<p>On a donc :</p>

<ul>
    <li>Une balise ouvrante : <incode>&lt;title&gt;</incode>
    </li>
    <li>Une balise fermante : <incode>&lt;/title&gt;</incode> .</li>
</ul>

<p>Cela délimite ce qui sera interprété comme un titre. Pour l'ordinateur, tout ce qui n'est pas entre ces deux balises n'est pas considéré comme un titre.</p>

<dots></dots>

<grostitre>Les balises orphelines</grostitre>

<p>Les balises orphelines, quant à elles, servent le plus souvent à insérer un élément à un endroit précis, <em>comme une image</em>. Il n'est pas nécessaire de délimiter le début et la fin de l'image, on veut simplement dire à l'ordinateur "Insère une image ici". Par conséquent, il n'est pas nécessaire de mettre une balise ouvrante et une balise fermante, d'où le terme "balise orpheline".</p>

<h3>Une balise orpheline s'écrit ainsi : <incode>&lt;img&gt;</incode>
</h3>

<p>En plus des balises, nous utiliserons des attributs. Les attributs sont un peu comme les options des balises. Ils viennent compléter les balises en fournissant des informations supplémentaires.</p>

<h3>Voici un exemple de liste avec des balises auto-fermantes</h3>

<ul>
    <li>
        <em>&lt;br&gt;</em> : retour à la ligne dans un paragraphe principalement.
    </li>

    <li>
        <em>&lt;hr&gt;</em> : un trait horizontal
    </li>

    <li>
        <em>&lt;meta&gt;</em> : balise de métadonnées inséré dans le <em>&lt;head&gt;</em>
    </li>

    <li>
        <em>&lt;img&gt;</em> : balise pour mettre une image
    </li>

    <li>
        <em>&lt;link&gt;</em> : pour mettre un lien vers un fichier, css ou js.
    </li>
</ul>

<grostitre>Les attributs</grostitre>

<p>Un attribut est placé dans la balise ouvrante d'une balise en paire ou directement dans une balise orpheline, comme dans l'exemple suivant avec la balise <incode>&lt;img&gt;</incode> :</p>

<img src="images/attributs.jpg">

<p>L'attribut <em>src</em> (pour source) est situé dans la balise <em>img</em>. Il est suivi du signe égal et précise entre guillemets la valeur à prendre en compte, en l'occurrence le nom du fichier de l'image.</p>

<ul style="border:solid; border-width: 1px; padding:40px; border-color:red">
    <li>
        Certains attributs sont globaux = peuvent se mettre sur n’importe quelle balises.
        Par exemple <em>id</em>.
    </li>

    <li>
        Attributs spécifiques à une ou quelques balises.
        Par exemple src sur les balises <em>&lt;img&gt;</em>.
    </li>

    <li>
        La plupart des attributs sont facultatifs.  
    </li>

    <li>
        Mais certains sont obligatoires.
        Par exemples <em>href</em> sur les balises <em>&lt;a&gt;</em>.
    </li>
</ul>

<dots></dots>


<grostitre>Structure de base HTML</grostitre>

<highlight lang="html">&lt;!DOCTYPE html&gt;
    &lt;html&gt;
        &lt;head&gt;
            &lt;meta charset=&quot;utf-8&quot;&gt;
            &lt;title&gt;Le titre de ma page&lt;/title&gt;
        &lt;/head&gt;
        &lt;body&gt;
        &lt;/body&gt;
    &lt;/html&gt;</highlight>

<p>L'ordre des balises est important dans cette structure de base.
    Les balises s'ouvrent puis se ferment, et elles s'emboîtent les unes dans les autres dans un ordre précis.</p>

<alert>La syntaxe <incode>&lt;html&gt;</incode>
    <incode>&lt;body&gt;</incode>
    <incode>&lt;/html&gt;</incode>
    <incode>&lt;/body&gt;</incode> est incorrecte : les balises s'entremêlent.
</alert>

<info>La syntaxe <incode>&lt;html&gt;</incode>
    <incode>&lt;body&gt;</incode>
    <incode>&lt;/body&gt;</incode>
    <incode>&lt;/html&gt;</incode> est correcte : une balise qui est ouverte à l'intérieur d'une autre balise doit également être fermée à l'intérieur de celle-ci.
</info>

<p>Nous avons donc des éléments dits <em>"parents"</em> qui contiennent d'autres éléments dits <em>"enfants"</em>.
    Cela fonctionne un peu comme des poupées russes :</p>

<img src="images/doctype.jpg">

<p>La balise orpheline <em>DOCTYPE</em> est toujours placée en premier. Ensuite vient la balise en paire <em>HTML</em>. À l'intérieur, il y a les balises en paire <em>HEAD</em> suivies de <em>BODY</em>. À l'intérieur de <u>HEAD</u>, on trouve la balise orpheline META et la balise en paire TITLE.</p>

<h2>La structure de base en HTML</h2>

<p>Voyons à quoi servent toutes ces balises.</p>

<ul>
    <li>La première ligne <incode>&lt;!DOCTYPE html&gt;</incode> est une balise orpheline indispensable : elle indique qu'il s'agit d'une page HTML.</li>
    <li>La balise en paire <incode>&lt;html&gt;</incode>
        <incode>&lt;/html&gt;</incode> englobe tout le contenu de la page web. À l'intérieur, il y a les balises en paire <incode>&lt;head&gt;</incode>
        <incode>&lt;/head&gt;</incode> et <incode>&lt;body&gt;</incode>
        <incode>&lt;/body&gt;</incode>.
    </li>
    <li>La balise en paire <incode>&lt;head&gt;</incode>
        <incode>&lt;/head&gt;</incode> contient deux balises qui fournissent des informations au navigateur : l'encodage et le titre de la page.
    </li>
    <li>La balise orpheline <incode>&lt;meta charset=&quot;utf-8&quot;&gt;</incode> indique l'encodage utilisé dans le fichier .html. Cela détermine comment les caractères spéciaux s'affichent <em>(accents, idéogrammes chinois et japonais, etc.)</em>.</li>

    <warning>Si les accents s'affichent mal par la suite, cela signifie qu'il y a un problème avec l'encodage. Vérifiez que la balise meta indique bien UTF-8 et que votre fichier est enregistré en UTF-8.</warning>

    <li>La balise en paire <incode>&lt;title&gt;</incode>
        <incode>&lt;/title&gt;</incode> indique au navigateur le titre de la page web. Chaque page doit avoir un titre décrivant son contenu. Ce titre s'affichera dans l'onglet du navigateur et apparaîtra dans les résultats de recherche, par exemple sur Google. Autant dire qu'il est important de bien choisir son titre !
    </li>
    <li>La balise en paire <incode>&lt;body&gt;</incode>
        <incode>&lt;/body&gt;</incode> contient tout ce qui sera affiché à l'écran sur la page web.
    </li>
</ul>

<dots></dots>


<grostitre>Commentez votre code HTML</grostitre>

<p>Un commentaire en HTML est un texte qui sert simplement de mémo. Il n'est pas affiché à l'écran, il n'est pas lu par l'ordinateur, et il n'affecte pas l'apparence de la page.</p>

<p>Les commentaires sont utiles pour les développeurs, y compris vous-même, et pour les personnes qui consultent le code source de votre page. Vous pouvez utiliser des commentaires pour ajouter des notes sur le fonctionnement de votre page. Cela vous aidera à vous rappeler comment fonctionne votre code si vous y revenez après une longue absence.</p>

<h3>Comment écrire un commentaire?</h3>

<p>Un commentaire en HTML est une balise avec une syntaxe particulière:</p>

<h2><em>&lt;!-- Ceci est un commentaire --&gt;</em></h2>

<p>Vous pouvez placer des commentaires n'importe où dans votre code source.</p>

<p>Attention, tout le monde peut voir le code HTML source de votre page une fois qu'elle est publiée sur le Web, en utilisant l'outil d'inspection du navigateur. Vos commentaires seront donc également visibles si quelqu'un affiche le code source de la page. Par conséquent, ne mettez pas d'informations sensibles comme des mots de passe dans les commentaires...</p>

<p>D'ailleurs, la plupart des éditeurs de code proposent un raccourci pour commenter rapidement une ligne de code.</p>
<p>Dans Visual Studio Code, par exemple, vous pouvez sélectionner une ligne (ou plusieurs lignes) de code, puis utiliser le raccourci clavier <incode>Ctrl</incode> + <incode>/</incode>.</p>
<p>Cela commentera la ligne de code en un seul clic.</p>

<video playsinline src="video/commentaires.mp4" autoplay="true" muted="true" loop="true"></video>