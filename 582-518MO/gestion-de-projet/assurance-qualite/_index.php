<?php 
/**
 * @type     article
 * @title    Assurance qualité
 * @icon     images/icon.svg
 * @abstract Valider qu'un site correspond aux exigences attendues et de qu'il ne contient pas de bogues 🐛.
 * @index 200
 */
?>

<p>L'assurance qualité, souvent abrégé QA en anglais, permet de valider qu'un site correspond aux exigences attendues et de qu'il ne contient pas de bogues 🐛. À l'aide de tests manuels ou automatisés, différents aspects du site sont mis
à l'épreuve. Le but est d'identifier les erreurs, oublies ou mauvaises interprétations des&nbsp;requis.</p>



<dots></dots>
<grostitre>Pourquoi est-ce important?</grostitre>


<p>Le plus tôt un bogue est identifié, le plus tôt il peut être réglé. Lorsqu'un site est bien testé, il est fiable,
sécuritaire et performant. Ces qualités évitent les mauvaises surprises, permettent de réduire les coûts d'entretiens et contribuent à augmenter le taux de satisfaction/confiance des utilisateurs envers le&nbsp;site.</p>

<p>Par exemple, une assurance qualité adéquate permet d'éviter ce type de&nbsp;situations:</p>

<clipasset src="images/cybertruck-fail.mp4"></clipasset>




<dots></dots>
<grostitre>Types de tests</grostitre>

<h3 class="heading heading--h3" id="Test visuel 👁">Test visuel 👁</h3>

<p>Les designers font attention au moindre petit détail. Il est donc normal qu'ils soient exigeants lorsque vient le
    moment de traduire leurs maquettes en page web. Malheureusement, étant humain, il est courant que certains éléments
    ne soient pas parfaits du premier&nbsp;coup:</p>
<ul>
    <li>
        <p>Est-ce la bonne&nbsp;fonte?</p>
    </li>
    <li>
        <p>Est-ce que ce bouton est trop&nbsp;petit?</p>
    </li>
    <li>
        <p>Est-ce vraiment la bonne&nbsp;couleur?</p>
    </li>
</ul>
<p>La liste peut s'allonger rapidement, surtout après un certain temps à travailler sur un projet où certains éléments
    deviennent presque imperceptibles tellement nous sommes habitués de les voir, d'où l'importance d'avoir un regard
    frais d'une personne externe afin de comparer le résultat produit aux maquettes originales afin de s'assurer que la
    vision du designer est&nbsp;respectée.</p>
<h3 class="heading heading--h3" id="Test de bout en bout ↔️">Test de bout en bout ↔️</h3>

<p>Du point de vue d'un utilisateur, si j'utilise un site de façon cohérente afin d'accéder à un résultat spécifique,
    suis-je en mesure de le&nbsp;faire?</p>
<p>Par exemple, pour tester si un système de commandes en ligne fonctionne, si j'ajoute un élément dans le panier, que
    j'accède au panier, que je confirme mon achat, que j'entre mes informations de livraison et mes informations
    bancaires, est-ce que la transaction est traitée et si oui, est-ce qu'une page de confirmation me résumant mon achat
    m'est&nbsp;affichée?</p>
<h3 class="heading heading--h3" id="Monkey testing 🐒">Monkey testing 🐒</h3>

<p>Le&nbsp;<em>"Monkey testing"</em>&nbsp;consiste à utiliser un site web comme un singe le ferait. C'est à dire sans
    compréhension particulière du site, en agissant de façon parfois aléatoire et&nbsp;inattendue.</p>
<p>Par exemple, que ce passe-t-il si je quitte à la troisième page d'un formulaire en cinq étapes? Que ce passe-t-il si
    j'appuie trois fois rapidement sur le bouton soumettre d'un formulaire d'inscription? Est-ce que trois comptes
    seront créés? Si je redimensionne ma page après la fin de son chargement, est-ce que son affichage brisera? Ainsi
    de&nbsp;suite.</p>
<h3 class="heading heading--h3" id="Test de compatibilité">Test de compatibilité</h3>

<p>Ces tests garantissent que le site web fonctionne tel que spécifié sur différent type d'appareils, systèmes
    d'exploitation et navigateurs. Généralement, la personne en charge de ces tests a accès à plusieurs appareils en
    fonctions de la liste établie d'appareils supportés par le&nbsp;projet.</p>
<p>Il est aussi possible que cette personne ait recours à des logiciels permettant de démarrer des machines virtuelles,
    comme:&nbsp;<a target="_blank" href="https://www.browserstack.com/">Browserstack</a>&nbsp;ou encore&nbsp;<a
    target="_blank" href="https://crossbrowsertesting.com/">Cross Browser Testing</a>&nbsp;afin de tester une liste d'appareils
    très&nbsp;large.</p>
<p>Par exemple: Sur un iPad mini de 3e génération, si l'utilisateur utilise Safari, est-ce que le comportement du site
    correspond aux&nbsp;attentes?</p>
<h3 class="heading heading--h3" id="Test de performance 💪">Test de performance 💪</h3>

<p>Un site peut fonctionner, mais avoir des performances décevantes. Il est donc important d'établir des exigences de
    base et de s'assurer que le résultat est conforme à celles-ci. Par exemple, une exigence pourrait-être qu'un site
    charge en moins de deux secondes ou encore qu'il obtienne un pointage de 90 ou plus sur un outil permettant de
    l'évaluer, tel que:&nbsp;<a target="_blank" href="https://developers.google.com/web/tools/lighthouse">Lighthouse</a> ou <a target="_blank" href="https://pagespeed.web.dev/">Pagespeed Insights</a>.</p>










<dots></dots>
<grostitre>Système de gestion de projet</grostitre>


<p>Dans un système de gestion de projet, par exemple&nbsp;<a target="_blank" rel="noopener noreferrer" href="/cours/autres/trello">Trello</a>, l'assurance qualité se traduit généralement par l'ajout de&nbsp;colonnes.</p>

<p>Par exemple, dans un projet Kanban classique&nbsp;<em>("To do", "In progress", "Done")</em>&nbsp;lorsqu'un
 développeur termine une tâche, il peut la placer à&nbsp;<em>"Done"</em>. Indiquant ainsi qu'il a terminé son
 développement. Cependant, comment savoir si le résultat est visible en ligne ou uniquement sur son poste? L'ajout
 d'une colonne&nbsp;<em>"Ready to QA"</em>&nbsp;permet d'indiquer que non seulement que la tâche a été complétée,
 mais qu'elle est aussi disponible en&nbsp;ligne.</p>

<p>Lorsqu'un billet se retrouve dans cette colonne, il devient possible pour une deuxième personne, n'ayant pas été
 impliqué dans son développement, de valider sa conformité. Il peut donc changer le billet dans la
 colonne&nbsp;<em>"QA in progress"</em>&nbsp;afin de signaler qu'il entame sa&nbsp;validation.</p>

<p>S'il respecte les exigences, le billet peut finalement être glissé dans une colonne intitulée&nbsp;<em>"Production
 ready"</em>&nbsp;ou un terme équivalent. Si au contraire la personne remarque que certains éléments ont étés
 oubliés ou ne fonctionnent pas comme souhaité, le billet est alors remis au sommet de la colonne&nbsp;<em>"To do"</em>&nbsp;avec des commentaires détaillant le ou les problèmes rencontrés. Pour éviter toute confusion, le
 billet est généralement bonifié d'un libellé, par exemple&nbsp;Bug&nbsp;indiquant la raison de son retour soudain
 dans la colonne&nbsp;<em>"To&nbsp;do"</em>.</p>

<p>Il est aussi possible de créer un nouveau billet pour expliquer spécifiquement un bogue. Cette approche est
 particulièrement utile si plus d'un bogue est découvert en lien avec un billet. Ainsi, il est plus facile de suivre
 la progression de la résolution de chaque bogue et éviter de confondre certaines&nbsp;informations.</p>






 <dots></dots>
 <grostitre>Rédaction d'un bogue</grostitre>

<p>Lorsqu'un bogue est rencontré et que nous ne somme pas la personne en charge de le corriger il est impératif d'être le plus précis possible dans sa&nbsp;description.</p>

<p>Par exemple, si un problème est rencontré à La Presse et que son descriptif se limite&nbsp;à:</p>

<p><em>"La page d'article n'affiche pas comme il&nbsp;faut."</em></p>

<p>Beaucoup de temps risque d'être investi une deuxième fois à cerner le&nbsp;problème.</p>

<p><strong>Où le problème est-il&nbsp;visible?</strong></p>

<ul>
    <li style="margin: 0;">
        L'application mobile, La Presse+, le site&nbsp;web?
    </li>
    <li style="margin: 0;">
        PC ou Mac?
    </li>
    <li style="margin: 0;">
        Sur tous les&nbsp;navigateurs?
    </li>
    <li style="margin: 0;">
       Dans une résolution d'écran en&nbsp;particulier?
    </li>
    <li style="margin: 0;">
       etc.
    </li>
</ul>
<p><strong>Qu'est-ce qui pose&nbsp;problème?</strong>
<ul>
    <li style="margin: 0;">
       La mise en page est&nbsp;brisée?
    </li>
    <li style="margin: 0;">
        Une faute d'orthographe est&nbsp;présente?
    </li>
    <li style="margin: 0;">
       Une image est hors propos ou mal&nbsp;recadrée?
    </li>
    <li style="margin: 0;">
        La mauvaise personne est&nbsp;créditée?
    </li>
    <li style="margin: 0;">
        etc.
    </li>
</ul>


<dots></dots>
<h3 class="heading heading--h3" id="Exemple de rédaction">Exemple de rédaction</h3>

<p><strong>Environnement:</strong>&nbsp;Site
    web<br><strong>Sévérité:</strong>&nbsp;Moyenne<br><strong>Url:</strong>&nbsp;<a
        href="https://www.lapresse.ca/mon-article">https://www.lapresse.ca/mon-article</a><br><strong>Système
        d'exploitation:</strong>&nbsp;MAC<br><strong>Navigateur:</strong>&nbsp;Safari<br><strong>Résolution:</strong>&nbsp;1200
    x 700px<br><strong>Description:</strong>&nbsp;Le pied de page est tronqué.<br><strong>Étapes de
        reproduction:</strong></p>


<ol start="1">
    <li style="margin: 0;">
        Ouvrir la page en 992px de large ou&nbsp;moins.
    </li>
    <li style="margin: 0;">
       Descendre en bas de la page complètement.
    </li>
    <li style="margin: 0;">
      Agrandir la page pour atteindre 1200px de large ou&nbsp;plus.
    </li>
    <li style="margin: 0;">
        Une partie du pied de page devient&nbsp;inaccessible.
    </li>
</ol>

<p>Et idéalement une capture d'écran montrant clairement le&nbsp;problème.



<dots></dots>
<aside class="exercice-card">
    <div class="exercice-card__content">
        <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
        <a href="../../exercices/assurance-qualite-insoapropriate" target="_blank" class="exercice-card__title">
            Assurance qualité -&nbsp;Insoapropriate
        </a>

        <p class="exercice-card__description">Pour cet exercice vous devrez examiner attentivement une réalisation et
            vous assurez qu’elle correspond bien aux requis client. Toute&nbsp;ano...</p>
    </div>

   
</aside>
