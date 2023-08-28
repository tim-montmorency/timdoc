<?php

/**
 * @type     article
 * @title    Les Balises Div et Span
 * @icon     images/icon.png
 * @abstract &lt;div&gt;, &lt;span&gt;
 */
?>

<p>Les balises <em>&lt;div&gt;</em> et<em> &lt;span&gt;</em> sont des éléments HTML utilisés pour structurer et formater le contenu d'une page web. Elles n'ont pas de signification sémantique propre comme les balises de titre, de paragraphe, de liste, etc.</p>

<p> Au lieu de cela, elles sont utilisées pour appliquer des styles, créer des agencements et regrouper des éléments à des fins de présentation et de mise en forme.</p>


<grostitre>Div</em></grostitre>

<p>La balise <em>&lt;div&gt;</em> est utilisée pour créer des conteneurs génériques ou des blocs de contenu. Elle permet de regrouper des éléments connexes, de diviser une page en sections ou de créer des mises en page complexes. </p>

<p>La balise <em>&lt;div&gt;</em> est souvent utilisée pour appliquer des styles CSS, ajouter des arrière-plans, définir des bordures et créer des structures de mise en page flexibles.</p>

<p>Exemple d'utilisation de la balise <em>&lt;div&gt;</em></p>

<highlight lang="html">
    &lt;div id=&quot;conteneur&quot;&gt;

        &lt;h1&gt;Titre&lt;/h1&gt;
        &lt;p&gt;Contenu du paragraphe.&lt;/p&gt;

    &lt;/div&gt;
</highlight>

<h2>En bloc (block)</h2>

<p>Un élément de niveau bloc commence toujours sur une nouvelle ligne et occupe toute la largeur disponible.</p>

<p><em>&lt;div&gt;</em> est de niveau bloc et est souvent utilisé comme conteneur pour d'autres éléments HTML.</p>

<p>Nommez d’autres éléments en block qu’on a vus aujourd’hui…<em> &lt;p&gt; &lt;div&gt; &lt;h1&gt; &lt;h2&gt; &lt;ul&gt; &lt;li&gt; </em>
&lt;header&gt; &lt;footer&gt; &lt;nav&gt; ...</em></p>

<dots></dots>

<grostitre>Span</em></grostitre>

<p>La balise &lt;span&gt; est utilisée pour appliquer des styles ou formater une partie spécifique d'un texte. Elle peut être utilisée pour cibler une portion de texte à l'aide de CSS ou pour appliquer des modifications spécifiques à des parties de contenu.</p>

<p> Contrairement à la balise &lt;div&gt;, qui est un conteneur de bloc, la balise &lt;span&gt; est un conteneur en ligne.</p>

<p>Exemple d'utilisation de la balise <span></p>

<highlight lang="html">

    &lt;p&gt;Le prix est de &lt;span class="prix"&gt;25$&lt;/span&gt;.&lt;/p&gt;

</highlight>

<p>Dans cet exemple, la balise &lt;span&gt; est utilisée pour appliquer un style particulier au prix affiché.</p>

<h2>En ligne (inline)</h2>

<p>Un élément en ligne ne commence pas sur une nouvelle ligne et il n'occupe que la largeur nécessaire</p>

<p><em>&lt;span&gt;</em> est un conteneur en ligne utilisé pour baliser une partie d'un texte ou une partie d'un document.</p>

<p>Nommez d’autres éléments en ligne qu’on a vus aujourd’hui… <em>&lt;em&gt;, &lt;strong&gt;, &lt;span&gt;, etc.</em></p>

<dots></dots>

<info>En résumé, les balises <em>&lt;div&gt;</em> et <em>&lt;span&gt;</em> sont des éléments HTML utilisés pour structurer et formater le contenu d'une page web.</p>

<p> La balise <em>&lt;div&gt;</em> est utilisée pour créer des conteneurs de blocs et des structures de mise en page, tandis que la balise <em>&lt;span&gt;</em> est utilisée pour appliquer des styles à des parties spécifiques du texte.</p></info>

<dots></dots>

<h2>Démonstration</h2>

<doclink href="https://codepen.io/tim-momo/pen/YzRbEmW?editors=1100">Div & Span</doclink>

<dots></dots>

<exercice href="exercices/div-span/"></exercice>

<dots></dots>