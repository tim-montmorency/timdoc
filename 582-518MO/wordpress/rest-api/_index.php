<?php 
/**
 * @type     article
 * @title    REST API
 * @icon     images/icon-wp.png
 * @abstract Accéder aux contenus en JavaScript via des JSON
 * @index 10
 */
?>

<p>Le Rest API de WordPress est la fonctionnalité préférée des développeurs WordPress n'affectionnant pas particulièrement&nbsp;WordPress 🖤.</p>

<p>Elle permet aux éditeurs de continuer d'entrer/modifier du contenu dans le tableau de bord de WordPress, comme dans tout site WordPress classique. Tout en permettant aux développeurs d'accéder aux contenus en JavaScript via des JSON plutôt que d'avoir à utiliser les templates PHP de&nbsp;WordPress.</p>


<dots></dots>
<grostitre>Utilisation de base</grostitre>
      
<p>Par défaut, le Rest API est déjà présent sur tout site WordPress. Pour y avoir accès, il suffit d'ajouter&nbsp;<code>/wp-json/wp/v2/</code>&nbsp;à la fin de l'url du site en&nbsp;question.</p>

<p>Par exemple:</p>

<pre><code class="hljs javascript">https:<span class="hljs-comment">//site.com/wp-json/wp/v2/</span></code></pre>
<br>
<p>La page retournée ressemble probablement à un mur de texte illisible. Il s'agit en fait d'un fichier JSON minifié contenant tous les contenus du site, affichés sur une seule&nbsp;ligne.</p>


<alert><strong>Erreur fréquente</strong><br>Si le Rest API de votre site ne répond pas à cette URL, il est probable que votre hébergeur ait modifié son emplacement. Pour le trouver, ouvrez le code source de votre page d’accueil et cherchez&nbsp;<em>"wp-json/"</em>.</alert>
<br><br>
<aside class="tool-card">
  <div class="tool-card__content">
    <em class="tool-card__tagline">🛠 Outil</em><br class="tool-card__break">
    <a href="https://jsonview.com/" target="_blank" rel="noopener noreferrer" class="tool-card__title">
      <strong>JSONView</strong>
    </a>

        <p class="tool-card__description">Permet d’afficher un fichier JSON en format standard dans un navigateur plutôt qu’en une longue chaine de&nbsp;caractères.</p>
</div>
 </aside>





 <dots></dots>
 <grostitre>Routes</grostitre>

<p>Pour des raisons de performance et de facilité de traitement, il est généralement préférable de ne charger que les informations qui seront utilisées. Pour ce faire, il est possible d'utiliser ce que l'on appelle des&nbsp;routes.</p>

<p>Par exemple, si seulement les pages sont requises, il est possible de spécifier la&nbsp;route</p>

<pre><code class="hljs javascript">https:<span class="hljs-comment">//site.com/wp-json/wp/v2/pages</span></code></pre>
<br>

<p>Qui retournera un JSON ne contenant que les pages&nbsp;publiées.</p>

<p>Dans cet exemple, la partie&nbsp;<code>https://site.com/wp-json/wp/v2</code>&nbsp;correspond à l'URL de base de l'API. Tandis que&nbsp;<code>/pages</code>&nbsp;est la route spécifiant que seuls les contenus de type&nbsp;<em>page</em>&nbsp;doivent-être&nbsp;retourné.</p>

<p>Si un autre type de publication doit être retourné. Par exemple, les articles, ou en anglais&nbsp;<em>posts</em>, il suffit de spécifier une route&nbsp;différente.</p><p>Par exemple:&nbsp;<code>/posts</code>.</p>

<pre><code class="hljs javascript">https:<span class="hljs-comment">//site.com/wp-json/wp/v2/posts</span></code></pre>
<br>
<p>Il est possible de spécifier des routes encore plus précises. Notamment en spécifiant l'ID de la publication&nbsp;désirée.</p>

<p>Par exemple, si seulement la page avec le ID 10 est requis, il est possible de spécifier la route&nbsp;<code>/pages/10</code>.</p>

<pre><code class="hljs javascript">https:<span class="hljs-comment">//site.com/wp-json/wp/v2/pages/10</span></code></pre>







<dots></dots>
<grostitre>Tri des résultats</grostitre>


<h3 class="heading heading--h3" id="orderby">orderby</h3>

<p>Pour trier les résultats d’une requête, il faut ajouter des paramètres à l’URL fournie à la requête fetch. Un premier <code>orderby</code> permet d'indiquer le critère devant être utilisé afin de trier les résultats. Il est entre autres possible de trier par:</p>

<ul>
    <li><p>Titre <code>title</code></p></li>
    <li><p>Identifiant <code>id</code></p></li>
    <li><p>Date de publication <code>date</code></p></li>
    <li><p>Etc.</p></li>
</ul>
    
<p>Par exemple, par titres:</p>

<pre><code class="hljs javascript">https:<span class="hljs-comment">//site.com/wp-json/wp/v2/posts?orderby=title</span></code></pre>


<h3 class="heading heading--h3" id="order">order</h3>

<p>Il est aussi de spécifier l’ordre dans lequel les posts devraient être triés via le paramètre <code>order </code>permettant de spécifier si les résultats doivent être triés par:</p>
<ul>
    <li><p>ordre croissant asc </p></li>
    <li><p>ordre décroissant desc</p></li>
</ul>


<p>Par exemple, par titres décroissants:</p>


<pre><code class="hljs javascript">https:<span class="hljs-comment">//site.com/wp-json/wp/v2/posts?orderby=title&amp;order=desc</span></code></pre>
<br>
<doclink href='https://developer.wordpress.org/rest-api/reference/posts/#arguments'>Arguments</doclink>


<info>Le premier paramètre est séparé de l’URL grâce à un point d’interrogation <em>(?)</em>. Tous les paramètres suivants sont séparés entre eux par une perluète&nbsp;<em>(&amp;)</em>.</info>






<dots></dots>
<grostitre>Featured Image</grostitre>

<p>Par défaut, un objet correspondant à un post dans le JSON ne contient que le id du featured image lui étant associé. Pour obtenir plus d’informations concernant ce featured image, il faut le spécifier dans l’URL fournie à fetch en lui ajoutant le paramètre <code>_embed</code>. </p>


<p>Par exemple: </p>

<pre><code class="hljs javascript"><a href="https://site.com/wp-json/wp/v2/posts?_embed">https:<span class="hljs-comment">//site.com/wp-json/wp/v2/posts?_embed</span></a><span class="hljs-comment"> </span></code></pre>
<br><br>

<p>Chaque post sera alors bonifié d’une propriété nommée <code>_embedded</code> contenant une sous-propriété intitulée <code>wp:featuredmedia</code>. Celle-ci est un tableau contenant des objets correspondant à chaque featured image associée au post. </p>


<info>Certaines extensions permettent d’ajouter plus d’une featured image, d’où pourquoi un tableau est&nbsp;retourné.</info>

<p>Il est donc possible d’accéder à toutes les propriétés associées à cette image telles que: sa date de création, son alt et surtout son URL. </p>

<p>Par exemple, afin d’obtenir l’URL de la 1<sup>re</sup> featured image:</p>

<pre><code class="hljs css">referencAuPost._embedded<span class="hljs-selector-attr">[<span class="hljs-string">'wp:featuredmedia'</span>]</span><span class="hljs-selector-attr">[0]</span><span class="hljs-selector-class">.source_url</span></code></pre>

<br><br>
<doclink href='https://developer.wordpress.org/rest-api/using-the-rest-api/global-parameters/#_embed'>_embed</doclink>









<dots></dots>
<grostitre>Compatibilité ACF</grostitre>

<p>Par défaut, les informations stockées dans des champs&nbsp;<a target="_blank" rel="noopener noreferrer" href="/cours/wordpress/advanced-custom-fields">ACF</a>&nbsp;ne sont pas retournées par le Rest&nbsp;API de WordPress. Heureusement, il est possible de les inclure facilement en ajoutant l'extension&nbsp;<em>ACF to REST&nbsp;API</em>&nbsp;de Aires&nbsp;Gonçalves.</p>

<img src="images/acf-to-rest-api.jpg" alt="">

<p>Aussi tôt l'extension installée, les champs ACF seront visibles dans le JSON retourné dans une propriété nommée&nbsp;<em>ACF</em>.</p>








<dots></dots>
<grostitre>Affichage</grostitre>
<p>Une fois les JSONs désirés identifiés, il ne reste plus qu'à afficher leurs&nbsp;informations!</p>
<p>Par exemple, dans la page&nbsp;<em>single.php</em>&nbsp;servant à afficher les articles, il serait possible de déclarer une balise&nbsp;<code>&lt;script&gt;</code>&nbsp;et d'effectuer un&nbsp;<a target="_blank" rel="noopener noreferrer" href="/cours/javascript/fetch">fetch</a>&nbsp;afin de récupérer les informations de l'article&nbsp;courant:</p>


<pre><code class="hljs javascript">fetch(<span class="hljs-string">"/wp-json/wp/v2/posts/&lt;?php the_ID(); ?&gt;"</span>)
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> response.json())
  .then(<span class="hljs-function"><span class="hljs-params">data</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(data));</code></pre>

<br><br>
<info><code>the_ID()</code> est une fonction de WordPress retournant le id de la page courante, ex:&nbsp;10.</info>


<aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/exercices/wordpress/wp-rest-api-vice-versa" target="_blank" class="exercice-card__title">
        WP Rest API - Vice&nbsp;Versa
      </a>
       <p class="exercice-card__description">Pour cet exercice vous et votre coéquipier devez créer un microsite permettant de présenter les protagonistes du film Vice Versa de&nbsp;Pixar...</p>
    </div>
 </aside>




<br> <br>
<doclink href='https://developer.wordpress.org/rest-api/using-the-rest-api/global-parameters/'>REST API</doclink>
