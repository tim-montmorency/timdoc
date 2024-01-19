<?php

/**
 * @type     article
 * @title    Fenêtre modale
 * @icon     images/icon.png
 * @abstract Composante qui permet de créer rapidement des popups (fenêtre modale)
 */
?>
<grostitre>Intro</grostitre>
<p>La composante&nbsp;<em>Modal</em>&nbsp;de Bootstrap permet de créer facilement des fenêtres contextuelles, plus
    communément connues sous leur nom anglophone&nbsp;<em>"popup"</em>.</p>

<p>Lorsqu'une de ces fenêtres est ouverte, elle s'affiche par-dessus le site, masquant partiellement le reste du contenu
    à l'aide d'un fond grisé semi-transparent, permettant de mettre l'emphase sur la fenêtre en question. Ces fenêtres
    ne réagissent pas au défilement de la page, elles restent donc prédominantes jusqu'à leur fermeture, ce qui les rend
    tout indiquées pour afficher certains éléments tels&nbsp;que:</p>

<ul>
    <li>Un formulaire&nbsp;<em>(connexion, quiz, abonnement à une infolettre,&nbsp;etc.)</em></li>
    <li>Une image en meilleure&nbsp;résolution.</li>
    <li>Un avertissement. Par exemple,&nbsp;<em>"Votre session a expiré"</em>,&nbsp;etc.</li>
</ul>
<warning>Pour fonctionner, cette composante <strong>nécessite le fichier JS</strong> de Bootstrap.</warning>

<grostitre>Définition</grostitre>
<p>Pour définir une fenêtre contextuelle de type&nbsp;<em>modal</em>, il faut insérer sa structure de base dans un
    fichier&nbsp;HTML.</p>
<p>Par exemple:</p>


<highlight lang='html'>&lt;div class=&quot;modal&quot; tabindex=&quot;-1&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</highlight>

<p>Dans cet exemple, la classe&nbsp;<incode>.modal</incode>&nbsp;permet de créer le fond semi-transparent masquant
    partiellement le reste du site. La classe&nbsp;<incode>.modal-dialog</incode>&nbsp;se charge de créer la fenêtre de base
    et&nbsp;<incode>.modal-content</incode>&nbsp;s'occupe de gérer le positionnement des différents éléments de contenu dans
    la fenêtre&nbsp;<em>modal</em>.</p>

<warning>Bien que ce code puisse théoriquement être placé n’importe où dans le fichier HTML. Il est suggéré de le placer
    vers la fin du body, hors de tout parent, afin d’éviter de potentiels conflits de positionnement avec&nbsp;ceux-ci.
</warning>
<dots></dots>
<grostitre>Contenu</grostitre>
<p>L'élément&nbsp;<incode>.modal-content</incode>&nbsp;peut contenir trois types de contenu,&nbsp;soit:</p>
<h3 id="modal-header">modal-header</h3>
<p>Contiens des informations telles&nbsp;que:</p>
<ul>
    <li>Le titre de la&nbsp;fenêtre.</li>
    <li>Une croix permettant de fermer la&nbsp;fenêtre.</li>
    <li>Etc.</li>
</ul>
<highlight lang='html'>&lt;div class=&quot;modal-header&quot;&gt;
  &lt;h2 class=&quot;modal-title&quot;&gt;Titre de ma fenêtre&lt;/h2&gt;
  &lt;button class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Fermer la
  fenêtre&quot;&gt;&lt;/button&gt;
&lt;/div&gt;</highlight>

<p>L'attribut&nbsp;<incode>data-bs-dismiss="modal"</incode>&nbsp;permet de spécifier à n'importe quel élément dans une
    fenêtre&nbsp;<em>modal</em>&nbsp;de fermer la fenêtre en&nbsp;question.</p>


<h3 id="modal-body">modal-body</h3>

<p>Permets de contenir le contenu principal de la fenêtre: son texte, son image, son formulaire,&nbsp;etc.</p>

<p>Par exemple:</p>
<highlight lang='html'>&lt;div class=&quot;modal-body&quot;&gt;
    &lt;p&gt;Message de ma fenêtre&lt;/p&gt;
    &lt;/div&gt;</highlight>

<h3 id="modal-footer">modal-footer</h3>
<p>Contiens généralement des boutons en lien avec la&nbsp;fenêtre.</p>

<ul>
    <li>Bouton confirmant un&nbsp;changement.</li>
    <li>Bouton de soumission de&nbsp;formulaire.</li>
    <li>Bouton d'annulation permettant de fermer la&nbsp;fenêtre.</li>
    <li>Etc.</li>
</ul>
<dots></dots>
<highlight lang='html'>&lt;div class=&quot;modal-footer&quot;&gt;
    &lt;button class=&quot;btn&quot; data-bs-dismiss=&quot;modal&quot;&gt;Annuler&lt;/button&gt;
    &lt;/div&gt;</highlight>
<dots></dots>
<grostitre>Déclenchement</grostitre>
<p>Par défaut, les fenêtres&nbsp;<em>modal</em>&nbsp;sont masquées. Pour les afficher, il est nécessaire d'ajouter un
    élément permettant de déclencher leur apparition. Ce bouton doit contenir deux attributs&nbsp;clés:</p>

<ul>
    <li><incode>data-bs-toggle="modal"</incode>&nbsp;indiquant qu'il contrôle une fenêtre&nbsp;<em>"modal"</em>.</li>
    <li><incode>data-bs-target="#example"</incode>&nbsp;spécifiant la fenêtre&nbsp;<em>"modal"</em>&nbsp;contrôlée.</li>
</ul>

<highlight lang='html'>&lt;button class=&quot;btn&quot; data-bs-toggle=&quot;modal&quot;
    data-bs-target=&quot;#example&quot;&gt;
    Ouvrir
    &lt;/button&gt;</highlight>
<warning>Attention, le id doit être spécifié sur la fenêtre modal et dans l’attribut du bouton pour que les deux
    éléments soient&nbsp;liés.</warning>
<dots></dots>
<grostitre>Taille</grostitre>
<p>Par défaut, la fenêtre&nbsp;<em>modal</em>&nbsp;de Bootstrap à une largeur de 500px. Cependant, il est possible de
    modifier cette taille en ajoutant une classe supplémentaire à l'élément&nbsp;<incode>.modal-dialog</incode>.</p>

<table>
    <tbody>
        <tr>
            <th>
                CLASSES
            </th>
            <th>
                TAILLE
            </th>
        </tr>
        <tr>
            <td>
               .modal-sm
            </td>
            <td>
                300px
            </td>
        </tr>
        <tr>
            <td>
                .modal-lg
            </td>
            <td>
                800px
            </td>
        </tr>
        <tr>
            <td>
                .modal-xl
            </td>
            <td>
                1140px
            </td>
        </tr>
    </tbody>
</table>

<p>Par exemple:</p>
<highlight lang='html'>&lt;div class=&quot;modal&quot; tabindex=&quot;-1&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-lg&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;</highlight>


<dots></dots>
<grostitre>Alignement vertical</grostitre>


<p>Par défaut, les fenêtres&nbsp;<em>modal</em>&nbsp;Bootstrap sont affichées vers le haut de la page. Cependant, il est
    possible de centrer ces fenêtres verticalement en ajoutant la classe&nbsp;<incode>.modal-dialog-centered</incode>&nbsp;à
    l'élément&nbsp;<incode>modal-dialog</incode>.</p>
<p>Par exemple:</p>

<highlight lang='html'>&lt;div class=&quot;modal&quot; tabindex=&quot;-1&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;</highlight>

<dots></dots>

<grostitre>Transition</grostitre>

<p>Par défaut, la fenêtre&nbsp;<em>modal</em>&nbsp;apparait brusquement lorsque déclenchée. Cependant, il est possible
    d'ajouter une transition afin de rendre son apparition plus élégante grâce à une transition. Pour ce faire, il
    suffit d'ajouter la classe&nbsp;<incode>.fade</incode>&nbsp;à l'élément&nbsp;<incode>.modal</incode>.</p>


<highlight lang='html'>&lt;div class=&quot;modal fade&quot; tabindex=&quot;-1&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;</highlight>

<warning>Attention, contrairement aux exemples précédents, la classe doit être ajoutée sur l’élément
            <incode>.modal</incode> et non&nbsp;<incode>.modal-dialog</incode>.</warning>


<doclink href='https://getbootstrap.com/docs/5.2/components/modal/'>Modal</doclink>
