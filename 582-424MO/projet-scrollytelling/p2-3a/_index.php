 <?php

   /**
    * @type     article
    * @title    P2.3a Animations avancées
    * @icon     images/icon.svg
    * @abstract Animations avec scroll et animations + avancées
   * @index    12
    */
   ?>




<grostitre>Aperçu du résultat 👇</grostitre>
<clipasset src="videos/demo_p2-3.mp4"></clipasset>



<dots></dots>
 
 <grostitre>Requis</grostitre>

 <grostitre>Installation de librairies et plugiciels JavaScript</grostitre>

  
<checklist>Pour la librairie GSAP "core” ainsi que ses plugiciels gratuits nécessaires au projet, vous devrez les installer via CDN.  N’en ajoutez pas pour rien, n’ajouter que les plugiciels nécessaires au requis du projet. </checklist>
<h3>Plugiciels GSAP payants </h3>

<checklist>Concernant les plugiciels GSAP payants (Club Greensock), vous pourrez les utiliser en local, sur votre ordinateur mais pas sur un serveur Web, publié en ligne, par exemple sur GitHub Pages ou autre hébergement Web. Pour obtenir ces fichiers et les inclure dans votre projet en local, veuillez vous référer au Wiki, cours 13.
Il sera important de les exclure de votre répertoire git afin de ne pas commettre d’infraction.  Utiliser le <a href="https://smnarnold.com/cours/git/gitignore" target="_blank"  onclick="event.stopPropagation()" rel="noopener noreferrer"> fichier gitignore</a> pour éviter de pousser ces fichiers sur GitHub. 
</checklist>
<dots></dots>


 <grostitre>CSS</grostitre>

<checklist>Ajoutez d’abord, sur tous vos chapitres, une bordure temporaire de 1px de couleur rouge afin de bien délimiter visuellement vos chapitres.  
Ajoutez aussi une bordure temporaire à vos éléments animés : bleu ou verte ou une couleur contrastante. 
Note: Si vous utilisez un motionPath le long de quelque chose se trouvant à l'arrière-plan, enlevez l'image d'arrière-plan du chapitre et ajoutez la pluôt dans le HTML en balise <code>img</code>. Le SVG vous servant de trajectoire (path) devra être la même dimension que l'image elle même. Vous pourrez ainsi les styliser afin qu'ils se redimensionnent les 2 de la même façon (responsive).
</checklist>

<dots></dots>
 <grostitre>JavaScript </grostitre>

<checklist>Intégrez <em>scrollTrigger</em> à chacun de vos chapitre (n'oubliez pas d'ajouter le plugiciel à votre page et de l'activer en JavaScript, si ce n'est pas déjà fait) 
Tous les chapitres doivent être épinglés le temps d'une ligne du temps GSAP. 
Pour chaque chapitre, ajoutez une ou des animations GSAP. Chaque chapitre devra avoir son ou ses animations isolées des autres chapitres.   
SVP dans votre code, ajoutez en commentaire séparateur par chapitre, exemple: <code>/* ----  Animation chapitre 3 ----- */</code> 
Chaque animation de chapitre devra être activée via la technique scrollTrigger, donc l’animation va démarrer que lorsque le chapitre entre en scène. 
</checklist>
<dots></dots>

 <grostitre>Requis minimum pour les animations</grostitre>
 <p>Les animations peuvent être dans n'importe quel chapitre. Essayez de d'étendre des requis minimum à plusieurs chapitres distincts.</p>
<p>En plus des animations que vous avez remises à P2.2, voici les ajouts: </p>
<checklist>
Deux sprite sheets qui s’activent dès que le <code>body</code>  contient la classe is-scrolling (vous l’avez déjà fait, il suffit maintenant de l’intégrer à deux chapitre différents). Ces 2 sprite sheets doivent s’animer d’une 2e façon via GSAP, en étant synchronisé avec le scroll de la page. Vous devrez épingler les sections de ces chapitres le temps que l’animation se complète. Voir l’exemple ci-dessus comme référence. La sprite sheet contient un monstre qui fait un cycle de marche complet, sur place. Ensuite j’ai animé cet élément html avec GSAP en changeant sa position x et y et ainsi simulter qu’il marche vers la droite. 
Un effet parallax de 3 couches (arrière-plan + 2 autres couches). 
Une animation d’un svg qui se dessine avec drawSVG. 
Une animation d’un élément qui suit une trajectoire avec motionPath. 
Une animation scrollTrigger qui n’est pas complètement lié au scroll (pas de scrub). L’animation doit être paramétrée pour faire en sorte que l'animation : <br>-joue en entrant (scroll) dans la section <br>-joue à l'envers si on revient (scroll) vers le haut dans la page <br>-se complète après avoir passé (scroll) la section <br>-revient au début si on remonte (scroll) au dessus de la section 
Une animation qui s’active dès qu’on atteint le chapitre et qu’ensuite elle joue en boucle infinie. 
</checklist>



 <dots></dots>
<grostitre>Requis d’identification des animations </grostitre>
<checklist>Dans le HTML de chaque chapitre, ajoutez le code HTML qui suit ce bloc d’instructions.  
Aussi, copiez le code CSS qui suit ce bloc d’instructions et collez le dans votre fichier de styles, dans la section des styles généraux (essayez de classer vos styles un peu, ajoutez des commentaires pour séparer les sections des styles comme vous l’avez fait au dernier projet). 
À chaque chapitre, dans la liste à puce <code>ul.technique-gsap</code> , vous devrez identifier les techniques d’animations que vous avez utilisées à l’intérieur de celui-ci. </checklist>


<h3>HTML dans chaque chapitre (copier-coller et compléter)</h3>


<highlight lang='css'>&lt;ul class=&quot;technique-gsap&quot;&gt; 
    &lt;li&gt;...&lt;/li&gt; 
    &lt;li&gt;...&lt;/li&gt; 
    &lt;li&gt;scrollTrigger 
        &lt;ul&gt; 
            &lt;li&gt;trigger=&lt;/li&gt; 
            &lt;li&gt;...&lt;/li&gt; 
        &lt;/ul&gt; 
    &lt;/li&gt; 
&lt;/ul&gt; </highlight>

 
<h3>CSS à copier-coller</h3>

<highlight lang='css'>ul.technique-gsap{
    background: rgba(0,0,0,0.3);
    color: white;
    font-size: 10px;
    font-family: monospace;
    font-weight: 400;
    width: auto;
    display: inline-block;
    padding: 10px 20px 12px 20px;
    margin: 0;
    max-width: 300px;
    position: absolute;
    z-index: 1000;
    top: 0;
    left: 0;
}

ul.technique-gsap li{
    margin: 5px 0;
}</highlight>


<!--
 <dots></dots>

 <h3>Remise</h3>

<check>
Remettez ce devoir sur une nouvelle branche nommée P2-3
</check>
-->

