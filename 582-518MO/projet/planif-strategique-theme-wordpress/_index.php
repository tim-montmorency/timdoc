<?php 
/**
 * @type     article
 * @title    Planif création thème WP
 * @icon     images/icon.svg
 * @abstract Planification stratégique de votre thème WordPress
 * @index 30
 */
?>

<dots></dots>
<grostitre>REMISE 4 – PLANIFICATION DU THÈME WP</grostitre>

<dots></dots>
<grostitre>Étape individuelle</grostitre>
<p>Cette étape se réalise d'abord individuellement et ensuite il y aura un retour en équipe.</p>

<checklist>Dans VS Code, installez l'extension <a href="https://marketplace.visualstudio.com/items?itemName=gera2ld.markmap-vscode" target="_blank">MarkMap</a>.
Dans votre thème, créez un fichier <em>structure-site-VOSINITIALES.md</em> (changez VOSINITIALES pour vos propres initiales, par exemple pour moi, mon fichier serait <em>structure-site-mmo.md</em>).
Ensuite ouvrez palette des commandes (ctrl+maj+p) et inscrivez <em>Open as markmap</em> + Enter afin de visualiser votre fichier markdown en fomat carte conceptuelle.
Listez toutes les pages du site, chaque page sera un titre de niveau 1 (en markdown). Pour les pages qui se répètent (les 13 nouvelles ou les quelques services), veuillez les considérer comme une seule page.
Sous chaque page, copiez-collez le code ci-bas. ⬇️ 
Pour chaque catégorie ci-bas, veuillez lister en titre niveau 3 ou 4 (selon le contexte) ce que vous prévoyez avoir à créer pour chaque catégorie. 
Vous trouverez les instructions pour chaque catégories juste en bas ici. ⬇️ ⬇️ 
</checklist>

<h3>Catégories par page</h3>
<highlight lang='md'>
## TYPE DE CONTENU (POST TYPE)

## MODÈLE (TEMPLATE)

## COMPOSANTES
### NOM DU PARTIAL
### CHAMPS PERSONNALISÉS

## AUTRES CHAMPS PERSONNALISÉS
</highlight>

<h3>Instructions pour chaque catégorie</h3>
<ul>
    <li>## TYPE DE CONTENU (POST TYPE) <br>
    Quel type de contenu (post-type) principal vous avez besoin? <br> Comment allez vous nommer ce post type (sans majuscule, ni accent, ni espace)? Ce sera le nom que vous allez utiliser pour le créer dans WP et l'utiliser dans le code PHP du thème.<br> <br>

</li>
    <li>## MODÈLE (TEMPLATE) <br>
    Quel sera le nom du modèle lié à cette page (ou ce type de page)? <br>Par examples: page.php, product.php. <br>Vous n'avez pas nécessairement besoin de créer un modèle unique pour chaque page. Si la page ne comporte qu'un titre et un contenu textuel, comme ces champs sont natifs de WordPress, vous n'avez pas besoin de faire un modèle spécial pour cette page, ni de champs personnalisés. À vous de voir. <br> <br>
    </li>
    <li>## COMPOSANTE DE LA PAGE <br>
    Dans la page elle-même, qu’est-ce que vous évaluez être une composante qui aura son propre partial PHP dans le thème. Pour chaque composante nommée :
    
        <ul>
            <li>### NOM DU PARTIAL DU THÈME WP POUR CETTE COMPOSTANTE <br>
            Comment nommerez-vous le partial de cette composante php?
            </li>
            <li>### CHAMPS PERSONNALISÉS (CUSTOM FIELDS) DE CETTE COMPOSANTE <br>
            Quel(s) champs SCF que cette composante aura besoin et comment allez-vous les nommer. Vous devez donc écrire <br> <em>le-nom: le type de champs</em>.
            </li>
        </ul>
    </li>
    <li>## AUTRES CHAMPS PERSONNALISÉS (CUSTOM FIELDS) SANS LIEN AVEC UNE COMPOSANTE <br>
    Outre les composantes, quels champs SCF avec-vous besoin de créer pour compléter la page en question. <br> <em>le-nom: le type de champs</em>
    </li>
</ul>

Pour les type de champs personnalisés, allez consulter <a href="https://www.advancedcustomfields.com/resources/" target="_blank" rel="noopener noreferrer">les options de Secure Custom Fields</a>.

<alert>Essayez de minimiser le nombre de type de contenu (post type), de modèles et de champs personnalisés à créer. Rappelez-vous qu'il y a des types de contenu (page et article) ainsi que des champs de base déjà existants dans Wordpress que vous pouvez utilsier avant d'en créer des supplémentaires.</alert>



<dots></dots>
<grostitre>Étape en équipe</grostitre>
<p>Lorsque l'étape individuelle est complétée, retrouvez-vous en équipe et comparez vos planifications. Discutez et trouvez un accord pour faire un plan final d'équipe. Faites votre markdown/mindmap final ensemble. Les noms de modèles, de types de contenu et de champs personalisés devront être finaux. Vous devrez vous fier à ces noms exacts pour réaliser votre thème WordPress.</p>


<dots></dots>
<grostitre>Remise</grostitre>
<p>Ajoutez vos fichiers individuels ainsi que le fichier d'équipe final  <em>structure-site.md</em> dans votre thème Wordpress.</p>
<p>Remettez ces 3 ou 4 fichiers <em>structure-site.md</em> dans Teams/Devoir d'ici lundi.</p>




<dots></dots>
<grostitre>Notes de cours</grostitre>
<intlink href='../../wordpress/'></intlink>