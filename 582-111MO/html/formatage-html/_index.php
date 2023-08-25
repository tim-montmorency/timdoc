<?php

/**
 * @type     article
 * @title    Formatage HTML
 * @icon     images/icon.png
 * @abstract &lt;u&gt;, &lt;b&gt;, &lt;strong&gt;, &lt;em&gt;, &lt;i&gt;, etc.
 */
?>

<grostitre>Éléments de formatage HTML</grostitre>

<p>Les éléments de formatage ont été conçus pour afficher des types de texte spéciaux :</p>

<ul>
<   li>
        <em>&lt; u &gt;</em> - Texte souligné  <br><br>ex. Ce <u>texte</u> est souligné.</b><br><br><p>L'élément HTML <incode>&lt;u&gt;</incode> permet d'afficher un fragment de texte qui est annoté avec des éléments non textuels. Par défaut, le contenu de l'élément est souligné. </p>
    </li>

    <li>
        <em>&lt; b &gt;</em> - Texte en gras  <br><br>ex. Ce <b>texte</b> est en gras.</b><br><br><p>L'élément HTML <incode>&lt;b&gt;</incode> permet d'attirer l'attention du lecteur sur un contenu qui n'a pas, pour autant, d'importance significative. </p><p>Si l'élément est d'une importance particulière, on utilisera l'élément HTML <incode>&lt;strong&gt;</incode>.</p>
    </li>
    <li>
        <em>&lt; strong &gt;</em> - Texte important  <br><br>ex. Ce texte est <strong>important</strong>. <br><br><p>L'élément HTML <incode>&lt;strong&gt;</incode> indique que le texte a une importance particulière ou un certain sérieux voire un caractère urgent.</p>
    </li>
    <li>
        <em>&lt; i &gt;</em> - Texte en italique  <br><br>ex. Ce texte est en <i>italique</i>. <br><br><p>L'élément HTML <incode>&lt;i&gt;</incode> représente un morceau de texte qui se différencie du texte principal.</p>
    </li>
    <li>
        <em>&lt; em &gt;</em> - Mettre l'accent sur le texte (emphase)  <br><br>ex. On met l<em>'accent</em> sur le texte.<br><br><p>L'élément HTML <incode>&lt;em&gt;</incode> (pour emphase) est utilisé afin de marquer un texte sur lequel on veut insister.</p>
    </li>
    <li>  
        <em>&lt; mark &gt;</em> - Texte marqué  <br><br>ex. Ce texte est <mark>surligné</mark>. <br><br><p>L'élément HTML <incode>&lt;mark&gt;</incode> représente un texte marqué ou surligné à cause de sa pertinence dans le contexte. </p>
    </li>
    <li> 
        <em>&lt; small &gt;</em> - Texte plus petit <br><br>ex. Ce texte est <small>petit</small>.<br><br><p>L'élément HTML <incode>&lt;small&gt;</incode> permet de représenter des commentaires ou des textes à écrire en petits caractères (des termes d'un contrat, des mentions relatives au droit d'auteur, etc.) quelle que soit la présentation.</p>
    </li>
    <li>
        <em>&lt; del &gt;</em> - Texte supprimé <br><br>ex. Ce texte est <del>supprimé</del>.<br><br><p>L'élément HTML <incode>&lt;del&gt;</incode> représente une portion de texte ayant été supprimée d'un document.</p>
    </li>
    <li>
        <em>&lt; ins &gt;</em> - Texte inséré <br><br>ex. Ce texte est <ins>inséré</ins> dans la phrase.<br><br><p>L'élément HTML <incode>&lt;ins&gt;</incode> représente un fragment de texte qui a été ajouté dans un document.</p>
    </li>
    <li>
        <em>&lt; sub &gt;</em> - Texte d'indice (sous la ligne de base et généralement plus petit)<br><br>ex. Voici un texte qui <sub>apparaît</sub> sous la phrase.<br><br><p>L'élément HTML <incode>&lt;sub&gt; </incode>est utilisé, pour des raisons typographiques, afin d'afficher du texte en indice (sous la ligne de base et généralement plus petit) par rapport au bloc de texte environnant./p>
    </li>
    <li>   
        <em>&lt; sup </em>> - Texte en exposant<br><br>ex. Voici un texte qui apparaît <sup>au-dessus</sup> de la phrase.<br><br><p>L'élément HTML <incode>&lt;sup&gt;</incode> est utilisé, pour des raisons typographiques, afin d'afficher du texte en exposant (plus haut et généralement plus petit) par rapport au bloc de texte environnant.</p>
    </li>
</ul>

<dots></dots>

<h3>Éléments HTML de titre </h3>

<p>Les éléments HTML <incode>&lt;h1&gt;</incode> à <incode>&lt;h6&gt;</incode> représentent les six niveaux de titre de section. <incode>&lt;h1&gt;</incode> correspond au niveau de section le plus haut et <incode>&lt;h6&gt;</incode> correspond au niveau le plus faible.</p>

<grostitre>LA BALISE H1</grostitre>

<p>La balise H1 est la plus importante. Toutes vos pages, même celles ne présentant pas de contenu long, comme les pages d’accueil, par exemple, doivent contenir un titre H1 indiquant le sujet principal de la page Web.</p>
<p>En effet, votre balise H1 est celle spécifiant le titre le plus important de votre page Web. Celle-ci sera une des balises les plus analysées par les moteurs de recherche, veillez donc à y intégrer votre mot-clé principal afin de mieux vous positionner sur celui-ci.</p>

<ul>
    <li>
    La balise H1 est le titre de votre page Web. Elle doit présenter clairement le sujet de votre contenu.
    </li>
    <li>Elle doit être différente de la balise <incode>&lt;title&gt;</incode> de votre page. </li>
    <li>Vous ne devez intégrer qu’une balise H1 par page</li>
    <li>Il est conseillé qu’elle apparaisse en haut de page.</li>
    <li>Cette balise doit contenir le mot-clé principal du sujet abordé. </li>
</ul>

<grostitre>Les balises H2</grostitre>

<p>Les balises H2 présentent les grandes parties de votre contenu. Il faut les voir comme des sous parties de votre titre H1, le lecteur doit pouvoir comprendre en un coup d’œil les différents sujets qui sont abordés dans votre contenu. </p>

<grostitre>Les balises H3</grostitre>

<p> Les balises H3 sont des sous-parties de H2 et représentent les arguments ou les détails du H2. Ils permettent d’aérer votre contenu si les parties de vos H2 sont trop longues.  </p>

<grostitre>Les balises H4-H5-H6</grostitre>

<p>Généralement, les balises H4, H5 et H6 sont peu utilisées, mais peuvent favoriser la compréhension de votre article si celui-ci est très long.</p>