<?php

/**
 * @type     article
 * @title    Cartes
 * @icon     ../images/icon.webp
 * @abstract Permettent de générer rapidement et facilement des cartes
 * @ref      web/cadriciels/bootstrap
 */
?>



<grostitre>Introduction</grostitre>
<p>Les cartes Bootstrap permettent, comme leur nom l'indique, de générer rapidement et facilement des cartes comme celle-ci:</p>

<codepen id="mdjaoJR" tab="result" height="350"></codepen>


<p>Les cartes prennent la dimension de leur parent. Il est donc important de les inclure dans une colonne Bootstrap aillant la dimension&nbsp;souhaitée.</p>

<dots></dots>
<grostitre>Image</grostitre>

<p>Il est possible d'insérer une image dans une carte Bootstrap en ajoutant une balise&nbsp;<incode>&lt;img&gt;</incode>&nbsp;et en lui attribuant la classe&nbsp;<incode>.card-img-top</incode>&nbsp;ou&nbsp;<incode>.card-img-bottom</incode>&nbsp;afin d'indiquer où cette image doit afficher, soit en haut ou en bas de la&nbsp;carte.</p>
<p>Par exemple pour l'afficher en&nbsp;haut:</p>

<highlight lang="html">&lt;div class=&quot;card&quot;&gt;
    &lt;img src=&quot;image.jpg&quot; class=&quot;card-img-top&quot;&gt;
&lt;/div&gt;</highlight>

<dots></dots>
<grostitre>Corps</grostitre>

<p>Le corps de la carte contient son texte principal. Pour le définir, il suffit d'ajouter la classe&nbsp;<incode>.card-body</incode>&nbsp;à l'intérieur de la carte comme&nbsp;ceci:</p>

<highlight lang="html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;Description&lt;/div&gt;
&lt;/div&gt;</highlight>

<p>Le corps définit un espace à l'intérieur de la carte empêchant sont contenu de toucher à l'image où aux bordures de&nbsp;celle-ci.</p>

<dots></dots>
<grostitre>Titre</grostitre>

<p>À l'intérieur du corps, il est possible d'ajouter un titre en utilisant la balise de titre adéquate et la classe&nbsp;<incode>.card-title</incode>&nbsp;comme&nbsp;suit:</p>

<highlight lang="html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Titre&lt;/h3&gt;
        Description
    &lt;/div&gt;
&lt;/div&gt;</highlight>

<dots></dots>
<grostitre>Entête et pied</grostitre>

<p>L'entête et le pied d'une carte Bootstrap permettent de définir une zone séparée du reste de la carte afin de les mettre en évidence.</p>

<p>Pour définir de telles zones, il suffit d'ajouter des balises avec les classes&nbsp;<incode>.card-header</incode>&nbsp;ou&nbsp;<incode>.card-footer</incode>.</p>

<p>Par exemple pour une entête:</p>

<highlight lang="html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;Ent&ecirc;te&lt;/div&gt;
&lt;/div&gt;</highlight>

<codepen id="RwBEdpp" tab="result" height="400"></codepen>


<dots></dots>
<grostitre>Liste</grostitre>


<p>Il est aussi possible d'inclure des listes en utilisant la composante de liste de Bootstrap&nbsp;<incode>.list-group</incode>&nbsp;et en y ajoutant le modificateur&nbsp;<incode>.list-group-flush</incode>.</p>
<p>Par exemple:</p>

<highlight lang="html">&lt;div class=&quot;card&quot;&gt;
    &lt;ul class=&quot;list-group list-group-flush&quot;&gt;
        &lt;li class=&quot;list-group-item&quot;&gt;Fait 1&lt;/li&gt;
        &lt;li class=&quot;list-group-item&quot;&gt;Fait 2&lt;/li&gt;
        &lt;li class=&quot;list-group-item&quot;&gt;Fait 3&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</highlight>


<codepen id="eYjbXva" tab="result" height="400"></codepen>

<dots></dots>
<grostitre>Horizontal</grostitre>


<p>Il est possible de changer la direction verticale d'une carte à horizontale en insérant une nouvelle rangée Bootstrap à l'intérieur de&nbsp;celle-ci.</p>
<p>Par exemple:</p>

<highlight lang="html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;col-5&quot;&gt;
            &lt;img src=&quot;image.jpg&quot; class=&quot;img-fluid&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-7&quot;&gt;
            &lt;div class=&quot;card-body&quot;&gt;Description&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt
 &lt;/div&gt;</highlight>


<codepen id="ZEjVPyZ" tab="result" height="200"></codepen>


<doclink href="https://getbootstrap.com/docs/5.3/components/card/">Cards</doclink>


<dots></dots>
<exercice href="../exercices/bootstrap-nav-card"></exercice>

