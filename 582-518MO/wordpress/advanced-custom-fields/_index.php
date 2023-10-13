<?php 
/**
 * @type     article
 * @title    Champs avancés personnalisés
 * @icon     images/icon-wp.png
 * @abstract ACF - Advanced Custom Fields
 * @index 85
 */
?>
<p>Les champs&nbsp;<em>Titre</em>&nbsp;et&nbsp;<em>Contenu</em>&nbsp;sont efficaces pour afficher les contenus texte de base d'une page ou d'un article, mais il arrive que certains projets requièrent plus de deux&nbsp;champs pour réaliser certaines mise en&nbsp;page.</p><p>Par exemple, si l'éditeur exige de pouvoir choisir la couleur de fond de chacune de ses pages, comment lui donner cette possibilité? Un nouveau champ dédié à la couleur de la page sera&nbsp;nécessaire.</p>

<p>Souvent abrégé&nbsp;<strong>ACF</strong>,&nbsp;<a href="https://www.advancedcustomfields.com/" target="_blank">Advanced Custom Fields</a>&nbsp;est l'une des extensions les plus utiles aux développeurs&nbsp;WordPress.</p><p>Elle permet d'ajouter plusieurs types de champs et d'en créer autant que&nbsp;désiré. Pour reprendre l'exemple précédent, il serait possible d'ajouter un champs de sélection de couleur&nbsp;<em>(color&nbsp;picker)</em>.</p>



<dots></dots>
<grostitre>Installation</grostitre>

<p>Dans l'onglet extensions&nbsp;<em>(plugins)</em>&nbsp;du tableau de bord, recherchez&nbsp;<em>Advanced Custom Fields</em>&nbsp;et repérez l'extension créée par Elliot&nbsp;Condon.</p>

<p>Installez et activez&nbsp;là.
<img src="images/acf-peview.jpg" alt="ACF prévisualisation de l'extension"></p>



<dots></dots>
<grostitre>Création de champs</grostitre>

<p>Une fois installée, un onglet&nbsp;<code>ACF</code>&nbsp;(ou en anglais&nbsp;<em>Custom Fields</em>) devrait être visible dans la barre latérale servant de&nbsp;menu.</p><p>À partir de cet onglet, il est possible de créer des nouveaux&nbsp;<code>Groupes de champs</code>&nbsp;<em>(New Field Group)</em>&nbsp;en cliquant sur&nbsp;<code>Ajouter</code>&nbsp;<em>(Add&nbsp;New)</em>.</p>


<img src="images/acf-menu.jpg" alt="Menu ACF">

<ol start="1">
    <li><p>Nommez votre nouveau groupe de&nbsp;champs.</p></li>
    <li><p>Le bouton&nbsp;<em>+Ajouter des champs</em>&nbsp;permet d'ajouter autant de champs que&nbsp;désiré.</p></li>
    <li><p>Pour chaque champs créé, populez les informations&nbsp;requises: titre, nom, type,&nbsp;etc.</p><p>Par exemple, il serait possible de créer un groupe de champ&nbsp;<em>Apparence de la&nbsp;page</em>&nbsp;et de lui ajouter un champs intitulé&nbsp;<em>Couleur de fond</em>&nbsp;constitué d'un sélecteur de&nbsp;couleur.</p></li>
</ol>


<img src="images/acf-fields-group.jpg" alt="">


<ol start="4">
    <li>La boite&nbsp;<em>Location Rules</em>&nbsp;(emplacement) permet de spécifier où ce nouveau groupe de champs devrait-être&nbsp;visible. <br>Par exemple, afficher uniquement le groupe de champs&nbsp;<em>Apparence de la page</em>&nbsp;sur les pages de type&nbsp;article.</li>
</ol>

<ol start="5">
    <li>Ajuster les&nbsp;<em>Réglages</em>&nbsp;si désiré pour configurer l'apparence du groupe de champs dans la&nbsp;page.</p></li><li><p>Appuyez sur le bouton&nbsp;<em>Save changes</em> (Publier).</li>
</ol>



<dots></dots>
<grostitre>Récupération de valeurs</grostitre>
<p>Comme nous avons vu, créer un champ permet à l'éditeur d'ajouter de nouvelles informations sur ses pages, mais pour que ces informations soient utilent, il faut ensuite les récupérer afin de les&nbsp;afficher.</p>

<p>Deux fonctions permettent de les récupérer:</p>
<ol start="1">
    <li><code>the_field()</code>qui retourne une chaine de&nbsp;caractère.</li>
    <li><code>get_field()</code>&nbsp;qui retourne un objet contenant de multiples&nbsp;valeurs.</li>
</ol>


<h3 class="heading heading--h3" id="Couleur">Couleur</h3>

<p>Les valeurs provenant d'un champ de type&nbsp;<em>Sélecteur de couleur</em>&nbsp;sont sauvegardés sous forme d'une chaine de caractères. Il est sonc possible de les récupérer via la fonction&nbsp;<code>the_field(...)</code>.</p><p>Par exemple:</p>



<highlight lang='html'>&lt;body style=&quot;background: &lt;?php the_field(&#39;couleur_de_fond&#39;); ?&gt;;&quot;&gt;
  ...
&lt;/body&gt;</highlight>

<doclink href='https://www.advancedcustomfields.com/resources/color-picker/'>color picker</doclink>




<h3 class="heading heading--h3" id="Texte">Texte</h3>
<p>Un champ texte peut être créé pour stocker des informations supplémentaires. Ce type de champs est, entre autre, utile lorsqu'une information doit être séparée visuellement du reste du&nbsp;contenu.</p><p>Prenons par exemple la&nbsp;<a target="_blank" href="https://fr.wikipedia.org/wiki/The_Offspring">page Wikipedia d'un groupe de musique</a>. Si cette page était construite à l'aide de WordPress, le champ&nbsp;<code>titre</code>&nbsp;contiendrait le texte&nbsp;<em>The Offspring</em>&nbsp;et le champs&nbsp;<code>contenu</code>&nbsp;l'ensemble du texte dans la colonne de gauche. Cependant, les éléments dans la colonne de droite proviendraient de champs ACF&nbsp;supplémentaires.</p><p>Par exemple, un champ&nbsp;<code>autre nom</code>&nbsp;associé aux pages de type&nbsp;<em>Groupe de musique</em>&nbsp;permettrait à l'éditeur de spécifier si un groupe fut précédemment connu sous un autre&nbsp;nom.</p><pre><code class="hljs php">&lt;strong&gt;Autre nom&lt;/strong&gt;
<span class="hljs-meta">&lt;?php</span> the_field(<span class="hljs-string">'autre_nom'</span>); <span class="hljs-meta">?&gt;</span></code></pre>

<info>Manic Subsidal???&nbsp;🤷‍♂️</info>


<doclink href='https://www.advancedcustomfields.com/resources/text/'>text</doclink>






<h3 class="heading heading--h3" id="Liste-deroulante">Liste déroulante</h3>
<p>Il est parfois préférable d'offrir à l'éditeur une liste de choix préétablis plutôt qu'un champ texte offrant trop de&nbsp;liberté.</p>

<p>Par exemple, pour ce qui est du pays d'origine, quel devrait-être la valeur pour The Offpring? USA, États-Unis, États Unis d'Amérique, etc. Une liste de choix préétablis règle cette question et offre une cohérence entre les différentes&nbsp;pages.</p>

<p>Il suffit de créer un champ de type&nbsp;<em>Sélection</em>&nbsp;et de lui donner les choix disponibles en format:<br><code>Valeur affiché sur le site : Valeur afficher dans l'admin</code></p><p>Par exemple:</p>

<p><code>🇨🇦 Canada : Canada</code><br><code>🇺🇸 États-Unis : États-Unis</code><br><code>🇫🇷 France : France</code></p><p>Comme pour un champ texte, la valeur peut-être ensuite récupérée via&nbsp;<code>the_field(...)</code>.</p>

<highlight lang='html'>&lt;strong&gt;Pays d&#39;origine&lt;/strong&gt;
&lt;?php the_field(&#39;pays_dorigine&#39;); ?&gt;</highlight>

<doclink href='https://www.advancedcustomfields.com/resources/select/'>select</doclink>




<dots></dots>
<grostitre>Image</grostitre>
<p>Un champ image permet de stocker des images&nbsp;supplémentaires.</p>

<p>Pour continuer avec la précédente métaphore, le champ d'image par défaut de WordPress,&nbsp;<em>Image mise de l'avant</em>, ou en anglais&nbsp;<em>Preview</em>, servirait à afficher l'image du&nbsp;groupe dans le haut de la colonne de&nbsp;droite.

<img src="images/the_offspring.jpg" alt="Photo du groupe Offpsriing"  style="box-shadow: 0 0 20px rgba(0,0,0,0.3)"></p>

<p>Cependant, un champ d'image supplémentaire serait requis afin d'afficher le logo du groupe un peu plus&nbsp;bas.<img src="images/the-offspring-logo.jpeg" alt="Logo The Offspring" style="box-shadow: 0 0 20px rgba(0,0,0,0.3)"></p>

<br>
<p>Un champs ACF&nbsp;<em>Logo</em>&nbsp;serait donc créé. Il y aurait ensuite deux façons d'afficher son&nbsp;contenu.</p>

<p>La façon simple avec&nbsp;<em>the_field(…)</em>&nbsp;retournant un&nbsp;url.<br>Par&nbsp;exemple:</p>

<highlight lang='html'>&lt;img src=&quot;&lt;?php the_field(&#39;logo&#39;); ?&gt;&quot; class=&quot;logo&quot;&gt;</highlight>



<p>ou la version plus avancée avec&nbsp;<em>get_field(…)</em>&nbsp;permettant d'obtenir toutes les informations relatives à&nbsp;l'image:</p>
<ul>
    <li style="margin:0">url</li>
    <li style="margin:0">size</li>
    <li style="margin:0">title</li>
    <li style="margin:0">alt</li>
    <li style="margin:0">caption</li>
    <li style="margin:0">etc.</li>
</ul>


<p>Ces informations sont enregistrées sour forme d'objet. Il est donc préférable de stocker cet objet dans une variable afin d'accèder à ses&nbsp;sous-propriétés au&nbsp;besoin.</p><p>Par exemple, stockons cet objet dans la variable&nbsp;<code>$logo</code>&nbsp;et recréons l'exemple précédent, mais avec l'attribut alt de&nbsp;populé.</p>

<highlight lang='php'>&lt;?php 
  $logo = get_field(&#39;logo&#39;);
  $url = $logo[&#39;url&#39;];
  $alt = $logo[&#39;alt&#39;];
?&gt;
&lt;img src=&quot;&lt;?php echo $url; ?&gt;&quot; class=&quot;logo&quot; alt=&quot;&lt;?php echo $alt; ?&gt;&quot;&gt;</highlight>
<doclink href='https://www.advancedcustomfields.com/resources/image/'>image</doclink>

<br>
<br>
<p>>>>EXERCICE PRÉSENTÉ EN CLASSE</p>

<dots></dots>
<grostitre>Export</grostitre>
<p>Advanced Custom Fields permet d'exporter la structure de ses groupes de champs afin de pouvoir les importer sur un autre site. </p>


<h3 class="heading heading--h3" id="Exportation">Exportation</h3>


<p>Il faut aller dans l'onglet <code>ACF</code> et sélectionner l'option <code>Outils</code> <em>(Tools)</em>. À cet endroit dans la colonne de gauche, une liste de boites à cocher permet de choisir les groupes de champs à exporter. Lorsque ce choix est terminé, cliquez sur le bouton <em>Exporter le fichier</em> afin d'obtenir un fichier JSON contenant lesdites structures.</p>


<warning>Attention, cette exportation <strong>n’inclut pas les valeurs</strong>, uniquement la structure des&nbsp;champs.</warning>

<h3 class="heading heading--h3" id="Importation">Importation</h3>
<p>Pour importer des groupes de champs, il faut aussi aller dans l'onglet <code>ACF</code> et sélectionner l'option <code>Outils</code> <em>(Tools)</em>. Sur cette page, dans la colonne de droite, se trouve un champs permettant de charger un fichier JSON. Importez le fichier désiré permet de recréer une structure de champs ACF d'un projet à un autre.</p>

<warning>Assurez-vous que l’extension ACF soit installée sur le nouveau site avant d’importer une structure de groupe de&nbsp;champs.</warning>