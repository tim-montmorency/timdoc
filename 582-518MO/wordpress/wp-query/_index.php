<?php 
/**
 * @type     article
 * @title    WP-Query
 * @icon     ../medias/icon.webp
 * @abstract Requête pour récupérer le coontenu des posts et pages
 * @index    51
 * @ref      web/wordpress
 */
?>

<p>Parfois, une page doit afficher des informations contenues dans d'autres posts. Par exemple, une page intitulée&nbsp;<em>Projets</em>&nbsp;pourrait contenir un texte de présentation suivi d'onglets cliquables montrant un aperçu des projets&nbsp;réalisés.</p>

<p>Idéalement, chaque projet aurait sa propre page avec ses propres informations et lorsqu'un projet serait ajouté ou modifié, celui se mettrait à jours automatiquement sur la page&nbsp;<em>Projets</em>&nbsp;sans qu'il ne soit nécessaire d'effectuer d'autres&nbsp;manipulations.</p>

<dots></dots>

<grostitre>Récupérer des posts</grostitre>
<p>Pour récupérer des posts, il faut effectuer une nouvelle requête à WordPress via la fonction&nbsp;<incode>WP_Query</incode>&nbsp;et stocker son résultat dans une&nbsp;variable.</p>

<p>Par exemple, pour obtenir tous les posts de type&nbsp;<em>project</em>&nbsp;et les stockers dans une variable&nbsp;<incode>$projects</incode>, il est possible de&nbsp;faire:</p>

<highlight lang="php">
&lt;?php
  $projects = new WP_Query(&#39;post_type=project&#39;);
?&gt;
</highlight>






<dots></dots>
<grostitre>Afficher les posts</grostitre>
<p>À partir de cette variable, il est possible d'effectuer une boucle sur les projets retournés et d'accéder au contenu du projet courant comme si nous étions sur cette page directement, tant que le code est inscrit à l'intérieur de la boucle&nbsp;<incode>while</incode>.</p>


<highlight lang="php">
&lt;?php
  $projects = new WP_Query(&#39;post_type=project&#39;);
  while ($projects-&gt;have_posts()) : $projects-&gt;the_post(); 
?&gt;
&lt;!-- 👆 Début boucle while --&gt;
  ...
&lt;!-- 👇 Fin boucle while --&gt;
&lt;?php
  endwhile; 
  wp_reset_postdata(); 
?&gt;
</highlight>




<p>Par exemple, si le titre de la page actuelle est&nbsp;<em>Projets</em>&nbsp;et que trois posts de type&nbsp;<em>project</em>&nbsp;sont créés avec pour titre respectif: Apollo, Barracuda et&nbsp;Canari.</p><p>La fonction&nbsp;<incode>the_title()</incode>&nbsp;retournera le titre du post courant soit&nbsp;<em>Projets</em>&nbsp;si elle est utilisée à l'extérieur de la boucle ou le titre de chacun des projets si elle est utilisée à l'intérieur de la&nbsp;boucle.</p><p>Par exemple:</p>

<highlight lang="php">
&lt;h1&gt;&lt;?php the_title(); ?&gt;&lt;/h1&gt; &lt;!-- 👈 Titre page --&gt;

&lt;?php
  $projects = new WP_Query(&#39;post_type=project&#39;);
  while ($projects-&gt;have_posts()) : $projects-&gt;the_post(); 
?&gt;
  &lt;h2&gt;&lt;?php the_title(); ?&gt;&lt;/h2&gt; &lt;!-- 👈 Titre projet --&gt;
&lt;?php
  endwhile; 
  wp_reset_postdata(); 
?&gt;

&lt;!--
&lt;h1&gt;Projets&lt;/h1&gt;
&lt;h2&gt;Apollo&lt;/h2&gt;
&lt;h2&gt;Barracuda&lt;/h2&gt;
&lt;h2&gt;Canari&lt;/h2&gt;
--&gt;
</highlight>


<br><br>





<dots></dots>
<grostitre>Paramètres</grostitre>
<p>Contrôler plus précisément la requêtes faite à WordPress est parfois nécessaire. Par exemple, spécifier le nombre d'éléments à afficher, le critère de trie&nbsp;<em>(nom, date)</em>, leur ordre&nbsp;<em>(croissant ⬇ décroissant ⬆️)</em>,&nbsp;etc.</p>

<p>Heureusement, il est possible de spécifier le résultat attendu à WordPress en lui passant un tableau&nbsp;<em>(array)</em>&nbsp;d'arguments plutôt qu'une chaine de caractères comme dans les précédents&nbsp;exemples.</p>

<p>Par exemple, si pour obtenir les posts de type&nbsp;<em>project</em>, mais spécifier que trois éléments seulement doivent-être retourné, il est possible de&nbsp;faire:</p>


<highlight lang="php">
&lt;?php
  $arguments = array( // 👈 Tableau d&#39;arguments
    &#39;post_type&#39; =&gt; &#39;project&#39;,
    &#39;posts_per_page&#39; =&gt; 3
  );
  $projects = new WP_Query($arguments); // 👈 Utilisation
  while ($projects-&gt;have_posts()) : $projects-&gt;the_post(); 
?&gt;
  ...
&lt;?php
  endwhile; 
  wp_reset_postdata(); 
?&gt;
</highlight>

<doclink href="https://developer.wordpress.org/reference/classes/wp_query/">WP_Query</doclink>

<br><br>

<exercice href="../../exercices/wp-query-les-bagnoles/"></exercice>

<dots></dots>