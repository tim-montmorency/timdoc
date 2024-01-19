<?php 
/**
 * @type     article
 * @title    Posts personnalisés
 * @icon     images/icon-wp.png
 * @abstract Collections de types de publications
 * @index 88
 */
?>

<p>Par défaut, WordPress offre différentes&nbsp;collections:</p>


<ul>
    <li style="margin:0">Articles</li>
    <li style="margin:0">Médias</li>
    <li style="margin:0">Pages</li>
    <li style="margin:0">Commentaires.</li>
</ul>



<p>Bien que pratiques, il est parfois souhaitable d'en créer des&nbsp;nouvelles.</p>
<br><br>

<grostitre>Déclaration manuelle</grostitre>
<p>La déclaration d'un nouveau type de posts doit se fait via le fichier&nbsp;<incode>functions.php</incode>.</p>

<p>Par exemple:</p>

<highlight lang='php'>function create_post_type() {
  register_post_type('produits', 
    array(
      'labels' => array(
        'name' => _x('Produits', 'Nom générique'),
        'singular_name' => _x('Produit', 'Au singulier'),
        'menu_name' => __('Produits'),
        'all_items' => __('Tous les produits'),
        'view_item' => __('Voir les produits'),
        'add_new_item' => __('Ajouter un nouveau produit'),
        'add_new' => __('Ajouter'),
        'edit_item' => __('Editer le produit'),
        'update_item' => __('Modifier le produit'),
        'search_items' => __('Rechercher un produit'),
        'not_found' => __('Non trouvé'),
        'not_found_in_trash' => __('Non trouvé dans la corbeille'),
      ),
      'supports' => array(
        'title', 
        'editor', 
        'author', 
        'thumbnail', 
        'custom-fields',
      ),
      'show_in_rest' => true,
      'public' => true,
      'has_archive' => true,
    )
  );
}

add_action('init', 'create_post_type');</highlight>

<br><br>



<p>Dans cet exemple, avec&nbsp;<incode>'labels' =&gt; array( ... )</incode>&nbsp;indique à WordPress comment nommer ce nouveau post dans différents&nbsp;scénarios.</p><p><incode>'supports' =&gt; array( ... )</incode>&nbsp;indique les champs disponibles pour ce type de post dans le tableau de&nbsp;bord.</p>

<p>Tandis que&nbsp;<incode>addaction('init', 'createpost_type');</incode>&nbsp;indique à WordPress d'appeler cette fonction créant le nouveau type de post à son&nbsp;instanciation.</p><p>Dès ce moment, la nouvelle collection devrait être disponible dans le tableau de&nbsp;bord.</p>





<dots></dots>
<grostitre>Utilisation manuelle (affichage du contenu)</grostitre>
<p>Pour afficher cette collection, il faudra faire une requête à WordPress et stocker son résultat dans une&nbsp;variable.</p>

<p>Par&nbsp;exemple:</p>

<highlight lang='php'>$products = new WP_Query('post_type=produits');</highlight>


<p>Ensuite, il faudra boucler parmi les résultats&nbsp;obtenus et imprimer <incode>print</incode> ceux-ci dans une page:</p>

<highlight lang='php'>
      
while ( $products->have_posts() ) : $products->the_post(); 
    print the_title();  // titre du produit
    the_excerpt(); // extrait de la description du produit
endwhile;</highlight>

<!--<highlight lang='php'>while ($produits->have_posts()) : $produits->the_post();</highlight>-->


<p>Les fonctions de base, tel que:&nbsp;<incode>the_title()</incode>&nbsp;ou&nbsp;<incode>the_content()</incode>&nbsp;retourneront dans le contexte de cette boucle les informations associées à notre collection de&nbsp;produits.</p>

<doclink href='https://developer.wordpress.org/reference/functions/register_post_type/'>register_post_type</doclink>







<dots></dots>
<grostitre>Custom Post Type UI</grostitre>
<p>Est une extension WordPress facilitant grandement la création de nouveaux types de&nbsp;posts. Dans l'onglet extensions&nbsp;<em>(plugins)</em>&nbsp;du tableau de bord, recherchez&nbsp;<em>Custom Post Type UI</em>&nbsp;et repérez l'extension créée par&nbsp;WebDevStudios.</p>


<p>Installez et activez&nbsp;là.</p>
<img src="images/custom-post-type-ui.jpg" alt="Extension Custom Post Type UI">


<p></p>
<h3 class="heading heading--h3" id="nouveaux-types-posts">Création de nouveaux types de posts</h3>
<p>Une fois l'extension installée, un onglet&nbsp;<em>CPT UI</em>&nbsp;devrait être visible dans la barre latérale servant de&nbsp;menu.</p>
<p>À partir de cet onglet, il est possible de créer de nouveaux Types de posts en cliquant sur&nbsp;<em>(Add/Edit Post&nbsp;Type)</em>.</p>

<p>Remplissez les trois champs de&nbsp;base:</p>

<ol start="1">
    <li style="margin:0"><em>Slug</em>&nbsp;nom pour accéder au post dans le&nbsp;code</li>
    <li style="margin:0"><em>Plural Label</em>&nbsp;nom au pluriel des&nbsp;posts</li>
    <li style="margin:0"><em>Singular Label</em>&nbsp;nom au singulier des&nbsp;posts</li>
</ol>

<p>Optionnellement, vous pouvez remplir les différents champs affichés après les trois premiers pour plus de contrôle sur l'affichage de votre nouveau type de&nbsp;post.</p>


<info>Une des options les plus populaires est de changer l’icône du nouveau type de post. Pour ce faire, il faut aller presque à la fin des champs supplémentaire et populer un champ nommé Menu&nbsp;Icon.</info>

<p>Cliquez sur&nbsp;<em>Populate missing labels based on chosen labels</em>&nbsp;et appuyez sur&nbsp;<em>Add Post&nbsp;Type</em>.</p>

<p>Un nouveau type de post devrait automatiquement apparaître dans le menu latéral du tableau de bord de&nbsp;WordPress.</p>







<dots></dots>
<grostitre>Affichage dans les menus</grostitre>
<p>Il est possible d'ajouter les nouveaux types de posts dans un menu personnalisé. Cependant, cette option est désactivée par&nbsp;défaut.</p>
<p>Pour&nbsp;l'activer:</p>

<ol start="1">
    <li><p>Allez dans&nbsp;<incode>Apparence -&gt; Menus</incode>.</p></li>
    <li><p>En haut à droite de la page, repérez le bouton&nbsp;<em>Options de l'écran</em>&nbsp;et cliquez&nbsp;dessus.</p></li>
    <li><p>Dans le panneau ouvrant, cochez les types de posts ayant la permission d'être inclus dans les&nbsp;menus.</p></li>
</ol>





<dots></dots>
<grostitre>Création de modèles</grostitre>
<p>Afin de pouvoir sélectionner un modèle&nbsp;<em>(template)</em>&nbsp;pour un type de post personnalisé, il est nécessaire de spécifier un modèle&nbsp;compatible.</p>

<p>Pour ce faire, dans le fichier PHP d'un modèle, il faut ajouter dans les commentaires de début de page une propriété intitulée&nbsp;<incode>Template Post Type</incode>&nbsp;et lui spécifier les types de posts&nbsp;compatibles.</p>
<p>Par exemple, pour qu'un modèle soit compatible avec les posts de base et les posts personnalisés de type&nbsp;<em>partenaire</em>, il faut&nbsp;écrire:</p>
<highlight lang='css'>/**
 * Template Name: Partenaire
 * Template Post Type: post, page, partenaire
 */</highlight>




 <dots></dots>
 <grostitre>Export</grostitre>
<p>Custom Post Type UI permet d'exporter la structure de ses posts personnalisés afin de pouvoir les importer sur un autre site.</p>

<h3 class="heading heading--h3" id="Exportation">Exportation</h3>
<p>Il faut aller dans l'onglet&nbsp;<incode>CPT UI</incode>&nbsp;et sélectionner l'option&nbsp;<incode>Tools</incode>. À cet endroit dans la colonne de droite, une boite de texte permet de copier un code JSON contenant la structure des posts personnalisés. </p>

<warning>Attention, cette exportation <strong>n’inclut pas les valeurs</strong>, uniquement la structure des&nbsp;posts.</warning>



<h3 class="heading heading--h3" id="Importation">Importation</h3>
<p>Pour importer des posts personnalisés, il faut aussi aller dans l'onglet&nbsp;<incode>CPT UI</incode>&nbsp;et sélectionner l'option&nbsp;<incode>Tools</incode>. Sur cette page, dans la colonne de gauche, se trouve une boite de texte vide permettant de copier un code JSON. Importez le code désiré permet de recréer la structure des posts personnalisés d'un projet à un autre.</p>

<warning>Assurez-vous que l’extension Custom Post Type UI soit installée sur le nouveau site avant d’importer une structure de posts&nbsp;personnalisés.</warning>

<doclink href='https://fr.wordpress.org/plugins/custom-post-type-ui/'>Custom Post Type UI</doclink>
