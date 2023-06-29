<?php

/**
 * @type     article
 * @title    Les tableaux
 * @icon     images/icon.png
 * @abstract td, tr
 */
?>

<grostitre>Les tableaux</grostitre>

<p>La balise en paire <incode>&lt;table&gt;</incode>
    <incode>&lt;/table&gt;</incode> indique le début et la fin d'un tableau. Cette balise est de type block , on va donc la placer en dehors d'un paragraphe ou d'une <incode>div</incode>.
</p>

<h4>Indiquez les valeurs du tableau avec les balises HTML <incode>&lt;tr&gt;</incode> et <incode> &lt;td&gt;</incode>
</h4>

<info>Pour construire un tableau ligne par ligne, on indique pour chaque ligne,<incode> &lt;tr&gt;</incode> (pour <em>table row</em> ou <em>"rangée du tableau"</em>), le contenu des différentes cellules, <incode>&lt;td&gt;</incode> (pour table data ou <em>"donnée"</em> ou <em>"entrée"</em>):
    <ul>
        <li>
            <incode>&lt;tr&gt;</incode>
            <incode>&lt;/tr&gt;</incode> indique le début et la fin d'<em>une ligne du tableau</em>
        </li>
        <li>
            <incode>&lt;td&gt;</incode>
            <incode>&lt;/td&gt;</incode> indique le début et la fin du <em>contenu d'une cellule</em>
    </ul>

</info><br><br>

<img src="images/cellule.jpg">

<p>On a une balise de ligne <incode>&lt;tr&gt;</incode> qui englobe un groupe de cellules <incode>&lt;td&gt;</incode>.</p>

<p>Par exemple, si je veux faire un tableau à deux lignes, avec trois cellules par ligne (donc trois colonnes), je devrai taper ceci :</p>

<highlight lang="html">&lt;table&gt;
    &lt;tr&gt;
    &lt;td&gt;Carmen&lt;/td&gt;
    &lt;td&gt;33 ans&lt;/td&gt;
    &lt;td&gt;Espagne&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td&gt;Michelle&lt;/td&gt;
    &lt;td&gt;26 ans&lt;/td&gt;
    &lt;td&gt;États-Unis&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/table&gt;</highlight>

<p>Le résultat est un peu déprimant :</p>

<img src="images/resultat-tableau.png">

<p>On peut embellir le résultat avec du CSS mais continuons sans CSS.</p>

<dots></dots>

<grostitre>En-tête d’un tableau</grostitre>

<p>La ligne d'en-tête se crée avec un <incode>&lt;tr&gt;</incode> mais les cellules qu'elle contient sont, cette fois, encadrées par des balises <incode>&lt;th&gt; </incode> (pour table header ou "en-tête de tableau" en français) et non pas <incode>&lt;td&gt; </incode>
</p>

<highlight lang="html">&lt;table&gt;
    &lt;tr&gt;
    &lt;th&gt;Nom&lt;/th&gt;
    &lt;th&gt;Âge&lt;/th&gt;
    &lt;th&gt;Pays&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td&gt;Carmen&lt;/td&gt;
    &lt;td&gt;33 ans&lt;/td&gt;
    &lt;td&gt;Espagne&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td&gt;Michelle&lt;/td&gt;
    &lt;td&gt;26 ans&lt;/td&gt;
    &lt;td&gt;États-Unis&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/table&gt;</highlight>

<p>La ligne d'en-tête est très facile à reconnaître pour deux raisons:</p>

<ul>
    <li>Les cellules sont des <incode>&lt;th&gt; </incode>au lieu des <incode>&lt;td&gt;</incode> habituels</li>
    <li>C'est la première ligne du tableau</li>
</ul>

<info>Comme vous pouvez le constater, le navigateur a mis en gras le texte des cellules d'en-tête. C'est ce que font en général les navigateurs mais, si vous le désirez, vous pouvez changer cela à coups de CSS : modifier la couleur de fond des cellules d'en-tête, leur police, leur bordure, etc. Pour cela, il vous suffit d'utiliser le sélecteur <incode>th</incode> dans le CSS !</info>

<dots></dots>

<grostitre>Titre d'un tableau</grostitre>

<p>Normalement, chaque tableau devrait être accompagné d'un titre. Le titre du tableau permet d'informer rapidement le visiteur sur le contenu et le contexte du tableau. Dans notre exemple, nous présentons une liste de personnes... Sans titre de tableau, il est facile de se sentir perdu.</p>

<p>Heureusement, la balise <incode>&lt;caption&gt;</incode> vient à notre secours pour ajouter un titre à notre tableau!</p>

<p>Cette balise doit être placée au début du tableau, juste avant l'en-tête. Son contenu correspond au titre que vous souhaitez attribuer au tableau.</p>

<highlight lang="html">&lt;table&gt;
    &lt;caption&gt;Passagers du vol 377&lt;/caption&gt;
    &lt;tr&gt;
    &lt;th&gt;Nom&lt;/th&gt;
    &lt;th&gt;Âge&lt;/th&gt;
    &lt;th&gt;Pays&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td&gt;Carmen&lt;/td&gt;
    &lt;td&gt;33 ans&lt;/td&gt;
    &lt;td&gt;Espagne&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td&gt;Michelle&lt;/td&gt;
    &lt;td&gt;26 ans&lt;/td&gt;
    &lt;td&gt;États-Unis&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/table&gt;</highlight>

<dots></dots>

<grostitre>Un grand tableau avec des balises HTML</grostitre>

<h4>Divisez un tableau avec les balises HTML <incode>thead</incode>, <incode>tbody</incode> et <incode>tfoot</incode>
</h4>

<p>Si votre tableau est assez gros, vous aurez tout intérêt à le découper en plusieurs parties. Pour cela, il existe des balises HTML qui permettent de définir les trois “zones” du tableau:</p>

<ol>
    <li><em>L'en-tête du tableau </em>(en haut) se définit avec les balises <incode>&lt;thead&gt;</incode>
        <incode>&lt;/thead&gt;</incode>
    </li>
    <li><em>Le corps du tableau</em> (au centre) se définit avec les balises <incode>&lt;tbody&gt;</incode>
        <incode>&lt;/tbody&gt;</incode>
    </li>
    <li><em>Le pied du tableau</em> (en bas) se définit avec les balises <incode>&lt;tfoot&gt;</incode>
        <incode>&lt;/tfoot&gt;</incode>
    </li>
</ol>

<info>Vous vous servirez de ces balises, surtout si votre tableau est assez gros, et que vous avez besoin de l'organiser plus clairement. Pour les “petits” tableaux, vous pouvez garder sans problème l'organisation plus simple que nous avons vue au début.</info>

<p>Vous pouvez par exemple y mettre un résumé, ou un total. Le pied de tableau se mettra, comme l'en-tête, par défaut, en gras:</p>

<img src="images/grand-tableau.png">

<p>Dans cet exemple de tableau, il peut sembler redondant de mettre le même contenu dans l'en-tête et le pied du tableau. Cependant, cette pratique peut s'avérer utile lorsque le tableau est très long.</p>

<p>Lorsqu'un tableau contient un grand nombre de lignes et que l'utilisateur fait défiler la page pour le parcourir, il peut être pratique de répéter le contenu de l'en-tête dans le pied du tableau. Ainsi, lorsque l'utilisateur atteint la fin du tableau, il peut facilement visualiser les informations clés de chaque colonne sans avoir à remonter vers l'en-tête.</p>

<p>Cette répétition de contenu facilite la consultation du tableau et permet de garder une vue d'ensemble, même lorsque l'utilisateur se trouve loin de l'en-tête. Cependant, il est important de noter que cette pratique peut augmenter la taille du tableau et nécessite une attention particulière pour maintenir la cohérence des données entre l'en-tête et le pied du tableau.</p>

<dots></dots>

<grostitre>Fusionnez les cellules d'un tableau</grostitre>

<h4>Fusionnez des cellules du tableau avec les attributs <incode>colspan</incode> et <incode>rowspan</incode>
</h4>

<p>Pour fusionner des cellules entre elles, il suffit d'ajouter un attribut dans la balise HTML <incode>&lt;td&gt;</incode>. Cela permet d'indiquer le nombre de cellules à fusionner entre elles (la balise des cellules).</p>

<p>II existe deux attributs pour deux types de fusions différentes:</p>

<ol>
    <li><em>L'attribut</em>
        <incode>colspan</incode> <em>permet de fusionner des colonnes</em>: la fusion s'effectue horizontalement, aussi bien sur les lignes d'en-tête que sur le contenu lui-même.
    </li>
    <li><em>L'attribut </em>
        <incode>rowspan</incode> <em>permet de fusionner des lignes</em>: là, deux lignes seront groupées entre elles. La fusion s'effectuera verticalement.
    </li>
</ol>

<p>Voyons tout de suite à quoi cela peut ressembler:</p>

<img src="images/fusion-cellule.png">

<dots></dots>