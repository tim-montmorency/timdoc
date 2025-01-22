<?php
/**
 * @type     article
 * @title    Résumé HTML
 * @icon     images/icon.png
 * @abstract Résumé du HTML 5 vu en Web 1.
 * @ref      web/html
 */
?>



<grostitre>Balises en paires</grostitre>

<ul>
  <li>balise d’ouverture + texte + balise de fermeture</li>
</ul>
<info><em>&lt;title&gt;</em> Ceci est le titre de ma 1ère page Web <em>&lt;/title&gt;</em></info>

<dots></dots>

<grostitre>Balises orphelines</grostitre>

<ul>
  <li>Ne contiennent pas de texte, n’ont pas de balise de fermeture</li>
  <li>Utilisées pour insérer un élément à un endroit précis de la page</li>
</ul>
<info>Exemple: Les balises images</em>, <em>&lt;img&gt; </em></info>

<dots></dots>

<grostitre>Balises avec attributs</grostitre>

<ul>
  <li>Une balise peut avoir des attributs avec ou sans valeurs</li>
</ul>

<highlight lang="html">&lt;img src=&quot;images/blocnotes.png&quot; alt=&quot;Bloc-Notes&quot;&gt; </highlight>

<dots></dots>

<grostitre>h3>ure de base HTML</grostitre>

<highlight lang="html">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Le titre de ma page&lt;/title&gt;
    &lt;/head&gt;

    &lt;body&gt;

    &lt;/body&gt;
&lt;/html&gt;
</highlight>



<dots></dots>
<grostitre>Balises sémantiques</grostitre>
<ul>
  <li><em>&lt;article&gt;</em> : pour indiquer que c’est l’article d’un blog ou d’un journal </li>
  <li><em>&lt;section&gt;</em> : section de contenu – utilisé si l’on a plusieurs sections d’un
document.</li>
  <li><em>&lt;nav&gt;</em> : liens de navigation </li>

  <li><em>&lt;header&gt;</em> : en-tête de la page</li>
  <li><em>&lt;main&gt;</em> : section affichant le contenu principal de la page web</li>
  <li><em>&lt;footer&gt;</em> : pied de page </li>
  <li><em>&lt;aside&gt;</em> : lien indirect avec le sujet principal de la page </li>
</ul>


<dots></dots>
<grostitre>Balises non-sémantiques</grostitre>

<ul>
  <li><em>&lt;div&gt; &lt;/div&gt;</em> : conteneur générique qui sert à regrouper du contenu ensemble – généralement utilisé pour découper un document en bloc (block). </li>
  <li><em>&lt;span&gt; &lt;/span&gt;</em> : la balise <span> est un conteneur en ligne (inline) - généralement utilisé pour entouré du texte à styliser différemment.</li>
</ul>

<dots></dots>

<grostitre>Balises titre</grostitre>

<p><em>&lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt;, &lt;h6&gt;</em> : h1 étant le niveau le titre le plus haut et
h6 le sous-titre le plus bas</p>

<dots></dots>

<grostitre>Balises de texte courant</grostitre>

<ul>
  <li><em>&lt;p&gt;&lt;/p&gt;</em> : paragraphe </li>
  <li><em>&lt;br&gt;</em> : saut de ligne</li>
</ul>
<warning>Ne jamais utiliser <em>&lt;br&gt;</em> pour séparer 2 paragraphes de texte, c'est une mauvaise pratique. Toujours penser à utiliser la balise sémantique <em>&lt;p&gt;&lt;/p&gt;</em> qui crée nativement un espace avant et après le dit paragraphe.</warning>

<dots></dots>
<grostitre>Liste non-ordonnée</grostitre>
<highlight lang='html'>
<ul>
  <li>...</li>
  <li>...</li>
</ul>
</highlight>

<ul>
  <li><em>&lt;ul&gt;&lt;/ul&gt;</em> : indique que c’est une liste non ordonnée</li>
  <li><em>&lt;li&gt;&lt;/li&gt;</em> : définit les différents élements de la liste. Les <em>&lt;li&gt;&lt;/li&gt;</em> doivent être imbriqués à l'intérieur du <em>&lt;ul&gt;&lt;/ul&gt;</em> </li>
</ul>

<dots></dots>

<grostitre>Liste ordonnée</grostitre>
<highlight lang='html'>
<ol>
  <li>...</li>
  <li>...</li>
</ol>
</highlight>

<ul>
  <li><em>&lt;ol&gt;&lt;/ol&gt;</em> : indique que c’est une liste ordonnée</li>
  <li><em>&lt;li&gt;&lt;/li&gt;</em> : définit les différents élements de la liste. Les <em>&lt;li&gt;&lt;/li&gt;</em> doivent être imbriqués à l'intérieur du <em>&lt;ol&gt;&lt;/ol&gt;</em></li>
</ul>


<dots></dots>

<grostitre>Les commentaires</grostitre>

<p><em>&lt;!– Ceci est un commentaire --&gt; </em></p>

<dots></dots>

<grostitre>Les citations</grostitre>

<ul>
  <li> <em>&lt;q&gt;</em> : permet d'insérer dans un texte une courte citation sans créer un nouveau bloc de contenu.</li>
  <li><em>&lt;blockquote&gt;</em> : permet de définir un bloc de citation relativement long.</li>
  <li><em>&lt;cite&gt;</em> : permet de spécifier la source d'une citation.</li>
</ul>

<dots></dots>

<grostitre>Balises de formatage de texte</grostitre>

<ul>
  <li><em>&lt;u&gt; </em> - Texte souligné</li>
  <li><em>&lt;b&gt;</em> - Texte en gras</li>
  <li><em>&lt;strong&gt;</em> - Texte important</li>
  <li><em>&lt;i&gt;</em> - Texte en italique</li>
  <li><em>&lt;em&gt; </em>- Mettre l'accent sur le texte (emphase)</li>
  <li><em>&lt;mark&gt; </em>- Texte marqué</li>
  <li><em>&lt;small&gt;</em> - Texte plus petit</li>
  <li><em>&lt;del&gt;</em> - Texte supprimé</li>
  <li><em>&lt;ins&gt;</em> - Texte inséré</li>
  <li><em>&lt;sub&gt;</em> - Texte d'indice (sous la ligne de base et généralement plus petit)</li>
  <li><em>&lt;sup&gt;</em> - Texte en exposant</li>
</ul>

<dots></dots>


<grostitre>Ancre</grostitre>

<p>Lien vers une page Web</p>

<highlight lang="html">&lt;a href=&quot;https://www.reddit.com/r/cat/&quot;&gt;Les chats sur reddit&lt;/a&gt;</highlight>

<dots></dots>

<grostitre>Tableau</grostitre>
<highlight lang='html'>
<table>

  <caption>
    Classe de Web 2
  </caption>

  <tr>
    <th>Étudiant</th>
    <th>Intéressé par</th>
    <th>Age</th>
  </tr>

  <tr>
    <td>Christophe</td>
    <td>Tables HTML</td>
    <td>18</td>
  </tr>

  <tr>
    <td>Caroline</td>
    <td>Accessibilité du web</td>
    <td>19</td>
  </tr>

</table>
</highlight>
<ul>
  <li>Tableau se construit ligne par ligne</li>
  <li>Chaque ligne doit contenir la liste des cellules </li>
  <li><em>&lt;table&gt;&lt;/table&gt;</em> : indique que ce qui suit est un tableau</li>
  <li><em>&lt;caption&gt;&lt;/caption&gt;</em> : indique titre du tableau </li>
  <li><em>&lt;tr&gt;&lt;/tr&gt;</em> : indique que c’est une ligne du tableau</li>
  <li><em>&lt;th&gt;&lt;/th&gt;</em> : indique que c’est l’en-tête du tableau (généralement la 1ère ligne du tableau)</li>
  <li><em>&lt;td&gt;&lt;/td&gt;</em> : indique que c’est une cellule/case du tableau</li>
</ul>


<h3>Tableau structuré</h3>
<highlight lang='html'>
<table>

  <caption>
    Classe de Web 2
  </caption>

  <thead>
    <tr>
      <th scope="col">Étudiant</th>
      <th scope="col">Intéressé par</th>
      <th scope="col">Age</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">Christophe</th>
      <td>Tables HTML</td>
      <td>18</td>
    </tr>

    <tr>
      <th scope="row">Caroline</th>
      <td>Accessibilité du web</td>
      <td>19</td>
    </tr>
  </tbody>

</table>
</highlight>
<ul>
  <li>Division en 3 parties: en-tête, corps et pied du tableau</li>
  <li><em>&lt;thead&gt;&lt;/thead&gt;</em> : indique que c’est l’en-tête du tableau </li>
  <li><em>&lt;tbody&gt;&lt;/tbody&gt;</em>: indique que c’est le corps du tableau et sert à distinguer cette partie du <em>&lt;thead&gt;&lt;/thead&gt;</em></li>
  <li><em>&lt;tfoot&gt;&lt;/tfoot&gt;</em> : indique que c’est le pied du tableau</li>
  <li><em>&lt;th&gt;&lt;/th&gt;</em> : indique que c’est l’en-tête du tableau (1ère ligne du tableau)</li>
  <li><em>&lt;td&gt;&lt;/td&gt;</em> : indique que c’est une cellule/case du tableau </li>
</ul>



<h3>Fusion de cellules du tableau</h3>
<ul>
  <li><em>Fusion horizontale</em> : fusion de colonnes en utilisant <em>colspan</em></li>
  <li><em>Fusion verticale</em> : fusion de lignes en utilisant <em>rowspan</em></li>
</ul>

<dots></dots>

<grostitre>Images</grostitre>
<highlight lang='html'> 
  <img src="assets/mon-image.png" alt="Description textuelle de mon image.">
</highlight>
<ul>
  <li>La balise <em>&lt;img&gt;</em> : indique que l’on va insérer une image, </li>
  <li>son attribut obligatoire <em>src</em> : indique source de l’image (i.e. où se trouve l’image), </li>
  <li>son attribut <em>alt</em> : indique un texte alternatif pour décrire l’image, </li>
  <li>ses attributs <em>height</em> et <em>width</em> : hauteur et largeur de l’image.</li>
</ul>

<dots></dots>

<grostitre>Légende de média</grostitre>
<highlight lang='html'>
<figure>
  <img src="images/kangourou.jpg" alt="Kangourou qui saute." />
  <figcaption>Un kangourou qui saute dans les plaines de l'Australie.</figcaption>
</figure>
</highlight>

<ul>
  <li>La balise <em>&lt;figure&gt;</em> représente un contenu autonome (image, vidéo, diagramme, etc.), éventuellement accompagné d'une légende facultative.</li>
  <li>La légende de la figure utilise la balise <em>&lt;figcaption&gt;</em>.</li>
</ul>

<img src="./images/figcapture-demo.jpg" width="200px">

<dots></dots>

<grostitre>Audio</grostitre>
<highlight lang='html'>
<audio src="media/lion-roar.mp3" controls loop autoplay></audio>
</highlight>

<ul>
  <li>la balise <em>&lt;audio&gt;&lt;/audio&gt;</em> : indique l’insertion d’un élément de type audio.</li>
  <li>son attribut obligatoire <em>src</em> : source de l’audio, </li>
  <li>son attribut <em>controls</em> : indique qu’il faut la barre de défilement + boutons Lecture & Pause, </li>
  <li>son attribut <em>loop</em> : indique de jouer le morceau audio en boucle, </li>
  <li>son attribut <em>autoplay</em> : indique que le morceau audio démarrera dès le début.</li>
</ul>



<dots></dots>
<grostitre>Vidéo</grostitre>
<highlight lang='html'>
<video controls width="250">
  <source src="media/papillon.webm" type="video/webm" />
  <source src="media/papillon.mp4" type="video/mp4" />
</video>
</highlight>

<ul>
  <li>La balise <em>&lt;video&gt;&lt;/video&gt;</em> : indique l’insertion d’un élément de type video</li>
  <li>La balise <em>&lt;source&gt;&lt;/source&gt;</em> : balise qui est imbriquée dans la balise <em>&lt;video&gt;&lt;/video&gt;</em>, il peut y avoir une ou plusieurs balise source afin de permettre au navigateur de lire un autre format, s'il ne supporte pas celui de la première source.</li>
  <li>L'attribut <em>src</em> de la balise source : chemin d'accès vers le fichier vidéo.</li>
</ul>
<strong>Les attributs suivants sont destité à la balise parent <em>&lt;video&gt;&lt;/video&gt;</em> et non pas à la balise enfant <em>&lt;source&gt;&lt;/source&gt;</em>:</strong>
  
<ul>
  <li><em>poster</em> : indique l’image à afficher en attendant que la video soit chargée</li>
  <li><em>controls</em> : indique qu’il faut la barre de défilement + boutons Lecture & Pause </li>
  <li><em>width</em> : indique la largeur du lecteur vidéo si l’on veut la modifier</li>
  <li><em>height</em> : indique la hauteur du lecteur vidéo si l’on veut la modifier</li>
  <li><em>loop</em> : indique de jouer le morceau audio en boucle </li>
  <li><em>autoplay</em> : indique que le morceau audio démarrera dès le début </li>
  <li><em>muted</em> : indique au navigateur de jouer la vidéo en mode silencieux</li>
  <li>playsinline : spécifie de jouer la vidéo dans son cadre d’origine  </li>
</ul>

<dots></dots>

<grostitre>Formulaire</grostitre>

<p>Balise de base pour création d’un formulaire</p>

<ul>
  <li><em>&lt;form&gt;&lt;/form&gt;</em> : indique que l’on va insérer un formulaire </li>
</ul>

<h3>Attributs de base</h3>

<ul>
  <li><em>method</em> : indique comment envoyer les informations</li>
  <ul>
    <li><em>GET</em> (par défaut) stock les informations du formulaire dans l'URL après le symbole ?.</li>
    <li><em>POST</em> envois les informations du formulaire dans la requête soumise à la page.</li>
  </ul>
  <li><em>action</em> : indique l’adresse de la page ou du programme qui va traiter les
informations.</li>
</ul>

<dots></dots>

<h3>Input text</h3>

<highlight lang="html"> &lt;input type=&quot;text&quot;&gt;</highlight>

<ul>
  <li><em>&lt;input&gt;</em> : indique que l’on va créer une zone de texte </li>
  <li><em>&lt;label&gt;&lt;/label&gt;</em> : indique le libellé de la zone de texte </li>
</ul>

<h4>Attributs pour zone de texte</h4>

<ul>
  <li><em>type</em> : indique le type des informations saisies</li>
  <li><em>name</em> : nom de la zone de texte </li>
  <li><em>id</em> : identifiant de la zone de texte pour lier le label à la zone de texte</li>
  <li><em>for</em> : aura la même valeur que id de la zone de texte pour lier le label </li>
  <li><em>readonly</em> : champ en lecture seule</li>
  <li><em>required</em> : le champ est requis</li>
  <li><em>minlength</em> & <em>maxlength</em> : nombre limite de caractères </li>
  <li><em>value</em> : valeur par défaut si l’on veut mettre une valeur initiale </li>
  <li><em>placeholder</em> : explication/exemple concernant le contenu du champ </li>
</ul>

<highlight lang="html">&lt;div&gt;
  &lt;label for=&quot;pays-residence&quot;&gt;Pays de résidence&lt;/label&gt;&lt;br&gt;
  &lt;input type=&quot;text&quot; id=&quot;pays-residence&quot;&gt;
&lt;/div&gt;</highlight>

<dots></dots>

<h3>Input submit</h3>
<em>
  
  <p>Génère un bouton permettant de soumettre un formulaire.</p>
</em>
<highlight lang="html"> &lt;input type=&quot;submit&quot; value=&quot;Soumettre&quot;&gt;</highlight>


<dots></dots>

<h3>Checkbox</h3>

<highlight lang="html">&lt;label&gt;
  &lt;input type=&quot;checkbox&quot; name=&quot;olives&quot;&gt; Olives &lt;/label&gt;&lt;br&gt;
&lt;label&gt;</highlight>

<h4>Attributs pour les checkbox</h4>

<ul>
  <li><em>checked</em> : permet de spécifier si l'option devrait être cochée ou non</li>
  <li><em>name</em> : nom de la zone de texte </li>
  <li><em>disabled</em> : permet d'afficher en lecture seule une boite à cochée</li>
  <li><em>value</em> : valeur par défaut si l’on veut mettre une valeur initiale </li>
</ul>

<dots></dots>

<h3>Radio</h3>

<highlight lang="html">&lt;label&gt;
  &lt;input type=&quot;radio&quot; name=&quot;pizza&quot; value=&quot;vege&quot;&gt; Végétarienne&lt;/label&gt;&lt;br&gt;
&lt;label&gt;</highlight>

<h4>Attributs pour les Radios</h4>

<ul>
  <li><em>checked</em> : permet de spécifier si l'option devrait être cochée ou non</li>
  <li><em>name</em> : nom de la zone de texte </li>
  <li><em>disabled</em> : permet d'afficher en lecture seule une boite à cochée</li>
  <li><em>value</em> : valeur par défaut si l’on veut mettre une valeur initiale </li>
</ul>


<dots></dots>

<h3>Select</h3>

<highlight lang="html">&lt;select&gt;
  &lt;option value=&quot;12:00&quot;&gt;12h&lt;/option&gt;
  &lt;option value=&quot;13:00&quot;&gt;13h&lt;/option&gt;
  &lt;option value=&quot;14:00&quot;&gt;14h&lt;/option&gt;
  &lt;option value=&quot;15:00&quot; disabled&gt;15h&lt;/option&gt;
&lt;/select&gt;</highlight>

<h4>Attributs pour les select</h4>

<ul>
  <li><em>multiple</em> : permet la sélection de plusieurs options.</li>
  <li><em>name</em> : nom de la zone de texte </li>
  <li><em>disabled</em> : permet d'afficher en lecture seule une boite à cochée</li>
  <li><em>value</em> : valeur par défaut si l’on veut mettre une valeur initiale </li>
  <li><em>selected</em> : permet de spécifier si l'option devrait être sélectionnée.</li>
</ul>

<dots></dots>

<h3>Textarea</h3>
<highlight lang="html">&lt;textarea cols=&quot;30&quot; rows=&quot;5&quot;&gt;&lt;/textarea&gt;</highlight>


<h4>Attributs pour les textarea</h4>
<ul>
  <li><em>cols</em> : définit la largeur de base du textarea.</li>
  <li><em>rows</em> : définit la hauteur de base du textarea.</li>
  <li><em>type</em> : indique le type des informations saisies</li>
  <li><em>name</em> : nom de la zone de texte </li>
  <li><em>id</em> : identifiant de la zone de texte pour lier le label à la zone de texte</li>
  <li><em>for</em> : aura la même valeur que id de la zone de texte pour lier le label </li>
  <li><em>readonly</em> : champ en lecture seule</li>
  <li><em>required</em> : le champ est requis</li>
  <li><em>minlength</em> & <em>maxlength</em> : nombre limite de caractères </li>
  <li><em>value</em> : valeur par défaut si l’on veut mettre une valeur initiale </li>
  <li><em>placeholder</em> : explication/exemple concernant le contenu du champ </li>
</ul>


<dots></dots>
<h3>Number</h3>
<highlight lang="html">&lt;input type=&quot;number&quot; value=&quot;0&quot; min=&quot;0&quot; max=&quot;10&quot; step=&quot;2&quot;&gt;</highlight>


<h4>Attributs pour les number</h4>
<ul>
  <li><em>min & max</em> : permettent de spécifier un nombre minimal et maximal à respecter.</li>
  <li><em>name</em> : nom de la zone de texte </li>
  <li><em>disabled</em> : permet d'afficher en lecture seule le champ number</li>
  <li><em>step</em> : définit le saut entre chaque valeur. </li>
</ul>


<dots></dots>
<h3>Range</h3>
<highlight lang="html">&lt;input type=&quot;range&quot; min=&quot;0&quot; max=&quot;1000&quot; step=&quot;100&quot;&gt;</highlight>

<h4>Attributs pour les range</h4>
<ul>
  <li><em>min & max</em> : permettent de spécifier un nombre minimal et maximal à respecter.</li>
  <li><em>name</em> : nom de la zone de texte </li>
  <li><em>disabled</em> : permet d'afficher en lecture seule un widget range</li>
  <li><em>step</em> : définit le saut entre chaque valeur. </li>
</ul>

<dots></dots>
<h3>Password</h3>
<highlight lang="html">&lt;input type=&quot;password&quot; value=&quot;sans-anchois&quot;&gt;</highlight>


<dots></dots>
<h3>Email</h3>
<highlight lang="html">&lt;input type=&quot;email&quot;&gt;</highlight>


<dots></dots>
<h3>Tel</h3>
<highlight lang="html">&lt;input type=&quot;tel&quot; inputmode=&quot;decimal&quot;&gt;</highlight>


<h4>Attributs pour les number</h4>
<ul>
  <li><em>inputmode="decimal"</em> : affichent un pavé numérique agrémenté des symboles +*# sur les appareils mobile afin de simplifier la vie de l'usager.</li>
  <li><em>disabled</em> : permet d'afficher en lecture seule le champ de téléphone</li>
</ul>


<dots></dots>
<h3>Search</h3>
<highlight lang="html">&lt;input type=&quot;search&quot; value=&quot;Hawaienne&quot;&gt;</highlight>

<dots></dots>
<h3>Date</h3>
<highlight lang="html">&lt;input type=&quot;date&quot; min=&quot;1980-01-01&quot; max=&quot;2000-01-01&quot;&gt;</highlight>

<h4>Attributs pour les dates</h4>
<ul>
  <li><em>min & max</em> : permettent de spécifier une date minimale et maximale à respecter.</li>
  <li><em>disabled</em> : permet d'afficher en lecture seule un widget range</li>
</ul>

<dots></dots>

<h3>Time</h3>
<highlight lang="html">&lt;input type=&quot;time&quot; min=&quot;09:00&quot; max=&quot;17:00&quot;&gt;</highlight>

<h4>Attributs pour time</h4>
<ul>
  <li><em>min & max</em> : permettent de spécifier une heure minimale et maximale à respecter.</li>
  <li><em>disabled</em> : permet d'afficher en lecture seule l'outil de sélection d'heure.</li>
</ul>

<dots></dots>

<h3>Color</h3>
<highlight lang="html">&lt;input type=&quot;color&quot; value=&quot;#00c774&quot;&gt;</highlight>

<h4>Attributs pour color</h4>
<ul>
  <li><em>name</em> : nom de référence lorsque le formulaire est soumis.</li>
  <li><em>value</em> : code de la couleur par défaut.</li>
  <li><em>disabled</em> :permet d'afficher en lecture seule l'outil de sélection de couleur.</li>

  <dots></dots>
</ul>