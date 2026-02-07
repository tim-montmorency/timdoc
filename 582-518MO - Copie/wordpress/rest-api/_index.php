<?php 
/**
 * @type     article
 * @title    REST API
 * @icon     ../medias/icon.webp
 * @abstract Accéder aux contenus en JavaScript via des JSON
 * @index    50
 * @ref      web/wordpress
 */
?>

<p>Le Rest API de WordPress est la fonctionnalité préférée des développeurs WordPress n'affectionnant pas particulièrement&nbsp;WordPress 🖤.</p>

<p>Elle permet aux éditeurs de continuer d'entrer/modifier du contenu dans le tableau de bord de WordPress, comme dans tout site WordPress classique. Tout en permettant aux développeurs d'accéder aux contenus en JavaScript via des JSON plutôt que d'avoir à utiliser les templates PHP de&nbsp;WordPress.</p>


<dots></dots>
<grostitre>Utilisation de base</grostitre>
      
<p>Par défaut, le Rest API est déjà présent sur tout site WordPress. Pour y avoir accès, il suffit d'ajouter&nbsp;<incode>/wp-json/wp/v2/</incode>&nbsp;à la fin de l'url du site en&nbsp;question.</p>

<p>Par exemple:</p>

<highlight lang="console">https://site.com/wp-json/wp/v2/</highlight>

<br>
<p>La page retournée ressemble probablement à un mur de texte illisible. Il s'agit en fait d'un fichier JSON minifié contenant tous les contenus du site, affichés sur une seule&nbsp;ligne.</p>


<alert><strong>Erreur fréquente</strong><br>Si le Rest API de votre site ne répond pas à cette URL, il est probable que votre hébergeur ait modifié son emplacement. Pour le trouver, ouvrez le code source de votre page d’accueil et cherchez&nbsp;<em>"wp-json/"</em>. <br><br>

Avec une nouvelle installation WordPress, il est possible qu'il soit situé à cette adresse: <span class='inline-code'>https://site.com/index.php/wp-json/wp/v2/</span> </alert>
<br><br>

<dots></dots>
<grostitre>Visualiser les données reçues</grostitre>
<h3>À l'aide d'une extention à ajouter à votrwe navigateur web préféré</h3>
<tool href="../../tools/jsonview/"></tool>
<h3>Avec Firefox</h3>
<p>Avec Firefox, vous n'avez pas besoin d'extention supplémentaire pour visualiser le JSON de manière propre et ordonnée. </p>
<clipasset src='images/firefox-json.mp4'></clipasset>


 <dots></dots>
 <grostitre>Routes</grostitre>

<p>Pour des raisons de performance et de facilité de traitement, il est généralement préférable de ne charger que les informations qui seront utilisées. Pour ce faire, il est possible d'utiliser ce que l'on appelle des&nbsp;routes.</p>


<h3>Pages (pages)</h3>
<p>Par exemple, si seulement les pages sont requises, il est possible de spécifier la&nbsp;route</p>

<highlight lang="console">https://site.com/wp-json/wp/v2/pages</highlight>

<br>

<p>Qui retournera un JSON ne contenant que les pages&nbsp;publiées.</p>

<p>Dans cet exemple, la partie&nbsp;<incode>https://site.com/wp-json/wp/v2</incode>&nbsp;correspond à l'URL de base de l'API. Tandis que&nbsp;<incode>/pages</incode>&nbsp;est la route spécifiant que seuls les contenus de type&nbsp;<em>page</em>&nbsp;doivent-être&nbsp;retourné.</p>

<dots></dots>
<h3>Articles (posts)</h3>
<p>Si un autre type de publication doit être retourné. Par exemple, les articles, ou en anglais&nbsp;<em>posts</em>, il suffit de spécifier une route&nbsp;différente.</p>

<p>Dans cet exemple:&nbsp;<incode>/posts</incode>.</p>

<highlight lang="console">https://site.com/wp-json/wp/v2/posts</highlight>


<dots></dots>
<h3>Type de publication personnalisé (custom post type)</h3>
<p>Si un autre type de publication (custom post type) doit être retourné. Par exemple, les jeux comme dans l'exercice "Valet de coeur", il suffit de spécifier une route&nbsp;différente.</p>

<p>Dans cet exemple:&nbsp;<incode>/games</incode>.</p>

<highlight lang="console">https://site.com/wp-json/wp/v2/games</highlight>


<dots></dots>
<h3>Et si on précisait la route vers une page spécifique?</h3>
<p>Il est possible de spécifier des routes encore plus précises. Notamment en spécifiant l'ID de la publication&nbsp;désirée.</p>

<p>Par exemple, si seulement la page avec le ID 10 est requis, il est possible de spécifier la route&nbsp;<incode>/pages/10</incode>.</p>

<highlight lang="console">https://site.com/wp-json/wp/v2/pages/10</highlight>

<doclink href='https://developer.wordpress.org/rest-api/reference/'>Reference REST API</doclink>
<doclink href='https://capitainewp.io/formations/developper-theme-wordpress/api-rest/'>REST API expliqué par capitaine WP</doclink>





<dots></dots>
<grostitre>Tri des résultats</grostitre>


<h3 class="heading heading--h3" id="orderby">orderby</h3>

<p>Pour trier les résultats d’une requête, il faut ajouter des paramètres à l’URL fournie à la requête fetch. Un premier <incode>orderby</incode> permet d'indiquer le critère devant être utilisé afin de trier les résultats. Il est entre autres possible de trier par:</p>

<ul>
    <li><p>Titre <incode>title</incode></p></li>
    <li><p>Identifiant <incode>id</incode></p></li>
    <li><p>Date de publication <incode>date</incode></p></li>
    <li><p>Etc.</p></li>
</ul>
    
<p>Par exemple, par titres:</p>

<highlight lang="console">https://site.com/wp-json/wp/v2/posts?orderby=title</highlight>


<h3 class="heading heading--h3" id="order">order</h3>

<p>Il est aussi de spécifier l’ordre dans lequel les posts devraient être triés via le paramètre <incode>order </incode>permettant de spécifier si les résultats doivent être triés par:</p>
<ul>
    <li><p>ordre croissant asc </p></li>
    <li><p>ordre décroissant desc</p></li>
</ul>


<p>Par exemple, par titres décroissants:</p>


<highlight lang="console">https://site.com/wp-json/wp/v2/posts?orderby=title&order=desc</highlight>


<br>
<doclink href="https://developer.wordpress.org/rest-api/reference/posts/#arguments">Arguments</doclink>


<info>Le premier paramètre est séparé de l’URL grâce à un point d’interrogation <em>(?)</em>. Tous les paramètres suivants sont séparés entre eux par une perluète&nbsp;<em>(&amp;)</em>.</info>






<dots></dots>
<grostitre>Featured Image</grostitre>

<p>Par défaut, un objet correspondant à un post dans le JSON ne contient que le id du featured image lui étant associé. Pour obtenir plus d’informations concernant ce featured image, il faut le spécifier dans l’URL fournie à fetch en lui ajoutant le paramètre <incode>_embed</incode>. </p>


<p>Par exemple: </p>

<highlight lang="console">https://site.com/wp-json/wp/v2/posts?_embed </highlight>


<br><br>

<p>Chaque post sera alors bonifié d’une propriété nommée <incode>_embedded</incode> contenant une sous-propriété intitulée <incode>wp:featuredmedia</incode>. Celle-ci est un tableau contenant des objets correspondant à chaque featured image associée au post. </p>


<info>Certaines extensions permettent d’ajouter plus d’une featured image, d’où pourquoi un tableau est&nbsp;retourné.</info>

<p>Il est donc possible d’accéder à toutes les propriétés associées à cette image telles que: sa date de création, son alt et surtout son URL. </p>

<p>Par exemple, afin d’obtenir l’URL de la 1<sup>re</sup> featured image:</p>

<highlight lang="javascript">referencAuPost._embedded['wp:featuredmedia'][0].source_url</highlight>

<br><br>
<doclink href="https://developer.wordpress.org/rest-api/using-the-rest-api/global-parameters/#_embed">_embed</doclink>





<dots></dots>
<grostitre>Compatibilité SCF</grostitre>
<p>Les <em>post types</em> que vous créez avec SCF vont être pris en compte et retournés par le REST&nbsp;API.</p>

<p>Par compte, les informations stockées dans des champs&nbsp;<a target="_blank" rel="noopener noreferrer" href="/cours/wordpress/advanced-custom-fields">SCF</a>&nbsp;ne sont pas retournées par le Rest&nbsp;API de WordPress. Heureusement, il est possible de les inclure facilement en activant REST API pour le/les groupe(s) de champs concernés. </p>

<clipasset src='images/show-in-rest-api.mov'></clipasset>





<dots></dots>
<grostitre>Affichage</grostitre>
<p>Une fois les JSONs désirés identifiés, il ne reste plus qu'à afficher leurs&nbsp;informations!</p>
<p>Par exemple, dans la page&nbsp;<em>single.php</em>&nbsp;servant à afficher les articles, il serait possible de déclarer une balise&nbsp;<incode>&lt;script&gt;</incode>&nbsp;et d'effectuer un&nbsp;<a target="_blank" rel="noopener noreferrer" href="../../../582-424MO/javascript/fetch-api/">fetch</a>&nbsp;afin de récupérer les informations de l'article&nbsp;courant:</p>



<highlight lang="javascript">
fetch(&quot;/wp-json/wp/v2/posts/&lt;?php the_ID(); ?&gt;&quot;)
  .then(response =&gt; response.json())
  .then(data =&gt; console.log(data));
</highlight>

<info><incode>the_ID()</incode> est une fonction de WordPress retournant le id de la page courante, ex:&nbsp;10.</info>




<dots></dots>
<grostitre>Pour creuser dans un JSON</grostitre>
<p>Si vous ne vous souvenez pas comment creuser dans un JSON et aller chercher l'info qu'on veut afficher dans la page, retournez voir les contenus de cours de Fetch API. Je vous remonte aussi un CodePen que vous avez déjà vu dans un cours antérieur qui continent des explications (voir les commentaires dans le JS).</p>
<intlink href='../../../582-424MO/javascript/fetch-api/'></intlink>

<p class="codepen" data-height="600" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="OJrYEop" data-pen-title="DEMO Fetch API | GET - Reddit" data-user="tim-momo" style="height: 600px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/OJrYEop">
  DEMO Fetch API | GET - Reddit</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>


<br><br>
<exercice href="../../exercices/wp-rest-api-vice-versa/"></exercice>



<br> <br>
<doclink href="https://developer.wordpress.org/rest-api/using-the-rest-api/global-parameters/">REST API</doclink>
