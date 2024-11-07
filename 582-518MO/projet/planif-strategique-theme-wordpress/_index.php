<?php 
/**
 * @type     article
 * @title    Planif création thème WP
 * @icon     images/icon.svg
 * @abstract Planification stratégique de votre thème WordPress
 * @index 30
 */
?>

<alert>Cette page est en cours de rédaction, veuillez ignorer son contenu.</alert>


<dots></dots>
<grostitre>REMISE 4 – PLANIFICATION DU THÈME WP</grostitre>

<p>Cette étape se réalise en équipe.</p>

<checklist>Dans VS Code, installez l'extension <a href="https://marketplace.visualstudio.com/items?itemName=gera2ld.markmap-vscode" target="_blank">MarkMap</a>.
Dans votre thème, créez un fichier <em>structure-site.md</em>.
Ensuite ouvrir palette des commandes (ctrl+maj+p) et écrire <em>Open as markmap</em> + Enter afin de visualiser votre fichier markdown en fomat carte conceptuelle.
Listez toutes vos pages en markdowm, chaque page sera un titre de niveau 1.

</checklist>



<p>
<ul>
    <li> Listez toutes vos pages (titre niveau 1)</li>
    <li> Par page vous allez lister :
        <ul>
            <li>TYPE DE CONTENU: Quel type de contenu (post-type) principal vous avez besoin (titre niveau 2)</li>
            <li> MODÈLE: Quel sera le nom du modèle lié à cette page (ou ce type de page)?
                Ex: page.php, product.php ?</li>
            <li> COMPOSANTE: Dans la page elle-même, qu’est-ce que vous évaluez être une composante qui aura son
                propre partial. Pour
                chaque composante nommée :
                <ul>
                    <li>COMPOSANTE: Comment nommerez-vous le partial de cette composante (theme (php)) (tire niveau 3)</li>
                    <li>ACF: Quel(s) champs ACF cette composante aura besoin et comment allez-vous les nommer ?</li>
                </ul>
            </li>
            <li>ACF: Outre les composantes, quels champs ACF avec-vous besoin de créer pour compléter la page en question</li>
        </ul>
    </li>
</ul>
