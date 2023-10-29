<?php 
/**
 * @type     article
 * @title    WP-Query
 * @icon     images/icon-wp.png
 * @abstract Requête pour récupérer le coontenu des posts et pages
 * @index 12
 */
?>

<p>Parfois, une page doit afficher des informations contenues dans d'autres posts. Par exemple, une page intitulée&nbsp;<em>Projets</em>&nbsp;pourrait contenir un texte de présentation suivi d'onglets cliquables montrant un aperçu des projets&nbsp;réalisés.</p>

<p>Idéalement, chaque projet aurait sa propre page avec ses propres informations et lorsqu'un projet serait ajouté ou modifié, celui se mettrait à jours automatiquement sur la page&nbsp;<em>Projets</em>&nbsp;sans qu'il ne soit nécessaire d'effectuer d'autres&nbsp;manipulations.</p>

<dots></dots>

<grostitre>Récupérer des posts</grostitre>
<p>Pour récupérer des posts, il faut effectuer une nouvelle requête à WordPress via la fonction&nbsp;<code>WP_Query</code>&nbsp;et stocker son résultat dans une&nbsp;variable.</p>

<p>Par exemple, pour obtenir tous les posts de type&nbsp;<em>project</em>&nbsp;et les stockers dans une variable&nbsp;<code>$projects</code>, il est possible de&nbsp;faire:</p>

<pre><code class="hljs php"><span class="hljs-meta">&lt;?php</span>
  <span class="hljs-variable">$projects</span> = <span class="hljs-keyword">new</span> WP_Query(<span class="hljs-string">'post_type=project'</span>);
<span class="hljs-meta">?&gt;</span></code></pre>






<dots></dots>
<grostitre>Afficher les posts</grostitre>
<p>À partir de cette variable, il est possible d'effectuer une boucle sur les projets retournés et d'accéder au contenu du projet courant comme si nous étions sur cette page directement, tant que le code est inscrit à l'intérieur de la boucle&nbsp;<code>while</code>.</p>


<pre><code class="hljs php"><span class="hljs-meta">&lt;?php</span>
  <span class="hljs-variable">$projects</span> = <span class="hljs-keyword">new</span> WP_Query(<span class="hljs-string">'post_type=project'</span>);
  <span class="hljs-keyword">while</span> (<span class="hljs-variable">$projects</span>-&gt;have_posts()) : <span class="hljs-variable">$projects</span>-&gt;the_post(); 
<span class="hljs-meta">?&gt;</span>
&lt;!-- 👆 Début boucle <span class="hljs-keyword">while</span> --&gt;
  ...
&lt;!-- 👇 Fin boucle <span class="hljs-keyword">while</span> --&gt;
<span class="hljs-meta">&lt;?php</span>
  <span class="hljs-keyword">endwhile</span>; 
  wp_reset_postdata(); 
<span class="hljs-meta">?&gt;</span></code></pre><p>Par exemple, si le titre de la page actuelle est&nbsp;<em>Projets</em>&nbsp;et que trois posts de type&nbsp;<em>project</em>&nbsp;sont créés avec pour titre respectif: Apollo, Barracuda et&nbsp;Canari.</p><p>La fonction&nbsp;<code>the_title()</code>&nbsp;retournera le titre du post courant soit&nbsp;<em>Projets</em>&nbsp;si elle est utilisée à l'extérieur de la boucle ou le titre de chacun des projets si elle est utilisée à l'intérieur de la&nbsp;boucle.</p><p>Par exemple:</p><pre><code class="hljs php">&lt;h1&gt;<span class="hljs-meta">&lt;?php</span> the_title(); <span class="hljs-meta">?&gt;</span>&lt;/h1&gt; &lt;!-- 👈 Titre page --&gt;

<span class="hljs-meta">&lt;?php</span>
  <span class="hljs-variable">$projects</span> = <span class="hljs-keyword">new</span> WP_Query(<span class="hljs-string">'post_type=project'</span>);
  <span class="hljs-keyword">while</span> (<span class="hljs-variable">$projects</span>-&gt;have_posts()) : <span class="hljs-variable">$projects</span>-&gt;the_post(); 
<span class="hljs-meta">?&gt;</span>
  &lt;h2&gt;<span class="hljs-meta">&lt;?php</span> the_title(); <span class="hljs-meta">?&gt;</span>&lt;/h2&gt; &lt;!-- 👈 Titre projet --&gt;
<span class="hljs-meta">&lt;?php</span>
  <span class="hljs-keyword">endwhile</span>; 
  wp_reset_postdata(); 
<span class="hljs-meta">?&gt;</span>

&lt;!--
&lt;h1&gt;Projets&lt;/h1&gt;
&lt;h2&gt;Apollo&lt;/h2&gt;
&lt;h2&gt;Barracuda&lt;/h2&gt;
&lt;h2&gt;Canari&lt;/h2&gt;
--&gt;</code></pre>

<br><br>





<dots></dots>
<grostitre>Paramètres</grostitre>
<p>Contrôler plus précisément la requêtes faite à WordPress est parfois nécessaire. Par exemple, spécifier le nombre d'éléments à afficher, le critère de trie&nbsp;<em>(nom, date)</em>, leur ordre&nbsp;<em>(croissant ⬇ décroissant ⬆️)</em>,&nbsp;etc.</p>

<p>Heureusement, il est possible de spécifier le résultat attendu à WordPress en lui passant un tableau&nbsp;<em>(array)</em>&nbsp;d'arguments plutôt qu'une chaine de caractères comme dans les précédents&nbsp;exemples.</p>

<p>Par exemple, si pour obtenir les posts de type&nbsp;<em>project</em>, mais spécifier que trois éléments seulement doivent-être retourné, il est possible de&nbsp;faire:</p><pre><code class="hljs php"><span class="hljs-meta">&lt;?php</span>
  <span class="hljs-variable">$arguments</span> = <span class="hljs-keyword">array</span>( <span class="hljs-comment">// 👈 Tableau d'arguments</span>
    <span class="hljs-string">'post_type'</span> =&gt; <span class="hljs-string">'project'</span>,
    <span class="hljs-string">'posts_per_page'</span> =&gt; <span class="hljs-number">3</span>
  );
  <span class="hljs-variable">$projects</span> = <span class="hljs-keyword">new</span> WP_Query(<span class="hljs-variable">$arguments</span>); <span class="hljs-comment">// 👈 Utilisation</span>
  <span class="hljs-keyword">while</span> (<span class="hljs-variable">$projects</span>-&gt;have_posts()) : <span class="hljs-variable">$projects</span>-&gt;the_post(); 
<span class="hljs-meta">?&gt;</span>
  ...
<span class="hljs-meta">&lt;?php</span>
  <span class="hljs-keyword">endwhile</span>; 
  wp_reset_postdata(); 
<span class="hljs-meta">?&gt;</span></code></pre>
<br><br>
<doclink href='https://developer.wordpress.org/reference/classes/wp_query/'>WP_Query</doclink>

<br><br>
              <aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="../../exercices/wp-query-les-bagnoles/" target="_blank" class="exercice-card__title">
        WP Query - Les&nbsp;Bagnoles
      </a>

            <p class="exercice-card__description">Pour cet exercice vous et votre coéquipier devez créer un microsite permettant de présenter les protagonistes du film les&nbsp;Bagnoles.
Votre...</p>
          </div>

      </aside>
 


