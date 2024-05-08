 <?php

   /**
    * @type     article
    * @title    P2.3c - Optimisation Web
    * @icon     images/icon.svg
    * @abstract Optimisation des performances Web
   * @index    6
    */
   ?>




<warning>Exercice à débuter en classe sous la supervision de l'enseignante. 
<br>
Important de suivre les étapes dans l’ordre. </warning>
<dots></dots>

<grostitre>Spécification à propos des installations de GSAP et ses plugiciels </grostitre>
<alert>Svp, si nécessaire, veuillez apporter les correctifs AVANT de publier sur GitHub pages. </alert>


<h3>Installation de librairies et plugiciels JavaScript </h3>
<p>Pour la librairie GSAP "core” ainsi que ses plugiciels gratuits nécessaires au projet, vous devrez les installer via CDN.  N’en ajoutez pas pour rien, n’ajouter que les plugiciels nécessaires au requis du projet.</p>


 <h3>Plugiciels GSAP gratuits (Extra Plugins) </h3>
 <p>Suivez le liens ci-dessous et cochez les plugiciels gratuits dont vous avez besoin (onglet CDN) et ajoutez les balises script générées dans vos fichiers HTML. <a href="https://gsap.com/docs/v3/Installation/?checked=core%2CmotionPath&tab=cdn&module=esm&method=private+registry&tier=free&club=false&require=false&trial=true&plugins=ScrollTrigger%2C+MotionPathPlugin%2C+TextPlugin#install-helper" target="_blank" rel="noopener noreferrer">Accédez ici</a></p>

<h3>Plugiciels GSAP payants (Club Plugins) </h3>
 <p>J’ai décidé de ne PAS vous faire inclure les fichiers des plugiciels payant (GSDevTool, DrawSVG et MorphSVG) dans votre projet.  S’ils y sont, supprimez-les.  </p>
 <p>Utilisez plutôt le lien  fourni ici (onglet CodePen), cochez le(s) plugiciel(s) de votre choix du Club Plugins et ensuite le bouton COPY URL à côté en bas pour l’ajouter dans une balise &lt;script&gt; dans votre page HTML.<br> <a href="https://codepen.io/GreenSock/full/JjPwRob" target="_blank" rel="noopener noreferrer">https://codepen.io/GreenSock/full/JjPwRob</a> </p>


<p>Notez que ces scripts ne fonctionneront pas sur un site publié en ligne (comme sur GitHub Pages ou un autre hébergeur comme Host Papa) puisque vous ne payez pas pour le Club GSAP. </p>

<dots></dots>

<grostitre>Optimisation des performances Web du projet</grostitre>

<alert>Pour cette étape du projet, vous devrez désactiver temporairement vos plugiciels payants.</alert>

<checklist>Dans le HTML, ajoutez les balises de commentaires autour des balises scripts correspondants à drawSVG, morphSVG et tous autres plugiciels payants que vous avez utilisés. (ex: &lt;!-- &lt;script ...&gt;  --&gt;
Dans votre fichiers script.js, ajoutez des commentaires toute propriété qui font référence à drawSVG, morphSVG (ex /*drawSVG: "0% 100%"*/ ) afin d’éviter des erreurs JS. 
</checklist>

<warning>Avant de mettre en ligne, ajoutez un <span class='inline-code'>display: none;</span> à <span class='inline-code'>ul.technique-gsap</span> dans votre css.</warning>



<dots></dots>
<grostitre>Publication de votre site sur https://tim-momo.com/</grostitre>
<p>Voir capsule vidéo pour la mise en ligne disponible dans le wiki du cours 14.</p>
<!--
<h3>Attendre le build – cela peut prendre plusieurs minutes.</h3>
<info> Pour vérifier si votre dernière modifications ont été publiées en ligne, rendez-vous dans la page du répertoire. Repérez <em>Evironnments</em> dans la colonne de droite et cliquez sur "github Pages" sous le titre <em>Evironnments</em>. Dans cette page, vérifiez que la première ligne de la liste qui a la mention “Deployed” a été publiée il y a 1 minute ou très récemment. Rafraichir la page plusieurs fois jusqu’à ce que vous constatiez que ça a été publié. </info>-->



<dots></dots>
<grostitre>Testez votre page web avec PageSpeed Insights</grostitre>
<p>Avec le URL de votre site web (https://votreprenom.tim-momo.com), générez un rapport PageSpeedInsights via <a href="https://pagespeed.web.dev/" target="_blank" rel="noopener noreferrer">https://pagespeed.web.dev/</a></p>

<dots></dots>
<grostitre>Plan et documentation d’optimisation </grostitre>
<checklist>Créez un document Markdown à la racide de votre projet nommé <em>rapport-optimisation.md</em>.  Tout dans le dans ce document  doit être rédigé en Markdown et non en HTML ou autre langage.  Ajoutez-y:
Titre niveau 1 :<br>- “Rapport d’optimisation du projet ScrollyTelling” (sans les guillemets)
Lien : <br>- Dans votre rapport généré de PageSpeed Insights, cliquez sur <em>Copiez le lien</em> en haut à droite.   <br>- Dans votre fichier Markdown, créez un lien, collez-y le lien de votre rapport PageSpeed Insights.<br>- Le texte de ce lien sera : “Page Speed Insights - Rapport du 6 mai 2024, 15:01:06” (la partie “Rapport du 6 mai 2024, 15:01:06” est en fait une copie de la ligne équivalente qui a été générée dans votre rapport). 
</checklist>

<checklist>À partir du rapport Page Speed Insight, sélectionnez 3 éléments à corriger qui vont avoir le plus d’impact dans l’optimisation de la performance. 
Dans le document Markdown,  pour <strong>chacun des 3 éléments</strong>:
Ajoutez un titre de niveau 2 : <br>- “Problème #1” (ou 2 ou 3) (sans les guillemets).  
Sous lequel vous allez devoir ajouter deux titres de niveau 3 :<br>- Nom du problème (écrivez le nom du problème et non le texte non du problème) <br>- “Action concrète pour résoudre le problème” (sans les guillemets) 
Sous le titre "Nom du problème", écrivez, dans vos mots le problème à résoudre (pas de copier-coller de ce que vous voyez à l’écran dans Page Speed).  Si vous ne le comprenez pas bien, allez lire sur le sujet. Dans le rapport PageSpeed Insights, vous donne toujours des liens pour en savoir plus sur chaque sujet en question. 
Sous le titre "Action concrète...", écrivez, dans vos mots la ou les actions concrètes pour régler le problème ou améliorer la situation. Soyez précis, nommez les fichiers que vous allez changer, nommez bien les fichiers ou ressources concernées afin que ce soit super clair pour un tierce partie qui lirait votre documentation. 
</checklist>






<dots></dots>

<grostitre>Exécutez votre plan.</grostitre>

<checklist>À la fin de chaque section Problème #1 etc, ajoutez un troisième titre de niveau 3 “Résultat” et décrivez ce que vous avez fait concrètement et si vous avez réussi ou non à résoudre le problème. </checklist>

<dots></dots>
<grostitre>Optimisation des médias </grostitre>
<checklist>Pour vos images en jpg et png, créez une Actions Photoshop pour optimiser le poids et la taille des images de grande dimension telles que vos images d'arrière-plan de chapitre.
  Optimisez toutes ces images via un traitement par lots avec cette Action Photoshop.
  Faites de même pour d'autres images à optimiser, si vous n'avez pas besoin de changer leur taille, vous pouvez le faire, ne serait-ce que pour réduire leur poids via une compression complémentaire png ou jpg.
</checklist>
<intlink href="../../optimisation/optimisation-des-medias/"></intlink>

<dots></dots>
<grostitre>Optimisation des spritesheets créées dans After Effects</grostitre>
<checklist>Certaines spritesheets ont été créées dans After Effect à une cadence de 24 ou même 30 images par seconde. Ce qui en résulte: des fichiers images avec un poids monstrueux! Si tel est le cas, retournez dans AE, diminuez le framerate de votre composition à 12 ou même 6 images/seconde et ré-exportez vos images pour recomposer votre spritesheet.
Évitez aussi que la taille de la composition ne dépasse les 500px X 500px.
Si vous changez le framerate et ré-exportez votre spritesheet, vous devrez, évidemment, ajuster le nombre de <span class='inline-code'>steps</span> dans votre css pour le nouveau nombre d'images clé de votre nouvelle spritesheet.
</checklist>
<intlink href="../p2-1b/#video-ae-spritesheet"></intlink>


<dots></dots>
<grostitre>Appliquez le chargement différé sur vos images</grostitre>
<p>Le chargement différé (lazy loading en anglais) est une stratégie d'identification des ressources non critiques (comme des images) afin de ne les charger qu'au moment où elles sont utiles. C'est une façon de réduire le temps de chargemen de la page et de faire en sorte qu'on ne charge pas des images inutilement.</p>
<p>L'attribut <span class='inline-code'>loading</span> utilisé sur un élément <span class='inline-code'>&lt;img&gt;</span> peut être utilisé pour demander au navigateur de différer le chargement des images  qui se situent en dehors de la zone affichée à l'écran, jusqu'à ce que la personne visitant le site ne les affiche en faisant défiler la page.
</p>
<highlight lang='html'>&lt;img src=&quot;image.jpg&quot; alt=&quot;...&quot; loading=&quot;lazy&quot;&gt;</highlight>
<intlink href="../../optimisation/chargement-images-progressif/"></intlink>


<dots></dots>
<grostitre>Minifiez vos CSS et JavaScript</grostitre>
<checklist>Avec une extention VS Code ou un outil en ligne, créez une version minifiée de votre fichier styles.css que vous nommerez styles.min.css et une version minifiée de scripts.js que vous nommerez scripts.min.js.  
N'oubliez pas de changer les liens vers ces styles et scripts minifiés dans votre HTML.
</checklist>
<intlink href="../../optimisation/12-commandements-optimisation#5-reduire-nb-de-fichiers-javascript-et-css"></intlink>





<dots></dots>
<grostitre>Publiez vos changements </grostitre>
<p>Déployez vos modifications sur le serveur tim-momo.com : écrasez simplement l'ancienne version de vos fichiers préalablement publiés). </p>

<!--
<h3>Attendre le build – cela peut prendre plusieurs minutes.</h3> 

<info> Pour vérifier si votre dernière modifications ont été publiées en ligne, rendez-vous dans la page du répertoire. Repérez <em>Evironnments</em> dans la colonne de droite et cliquez sur "github Pages" sous le titre <em>Evironnments</em>. Dans cette page, vérifiez que la première ligne de la liste qui a la mention “Deployed” a été publiée il y a 1 minute ou très récemment. Rafraichir la page plusieurs fois jusqu’à ce que vous constatiez que ça a été publié. </info> -->

<dots></dots>

<grostitre>Re-testez votre page web avec PageSpeed Insights </grostitre>
<p>Avec le le même URL de votre site hébergé sur github Page, regénérez un rapport PageSpeedInsights <a href="https://pagespeed.web.dev/" target="_blank" rel="noopener noreferrer">https://pagespeed.web.dev/</a>  </p>
<p>Les résultats en pourcentage devraient alors avoir augmenté suite à vos modifications d’optimisation. </p>


<dots></dots>
<grostitre>Pour conclure, dans le fichier MarkDown</grostitre>
<checklist>Ajoutez un titre de niveau 2 à la toute fin: <br>- “Rapport projet ScrollyTelling après optimisation” 
Ajoutez le lien :<br>- Dans le nouveau rapport PageSpeed Insights, cliquez sur Copiez le lien en haut à droite.<br>- Dans votre fichier Markdown, créez un lien, collez-y le lien copié.<br>-  Le texte de ce lien sera : “Page Speed Insights - Rapport du 6 mai 2024, 17:50:00” (la partie “Rapport du 6 mai 2024, 17:50:00” est en fait une copie de la ligne équivalente qui a été générée dans votre rapport). 
</checklist>






<dots></dots>
<grostitre>Préparation de la remise finale</grostitre>

<warning>À faire lorsque vous aurez tout complété P2.3a, P2.3b et P2.3c et couvert ce qui a été discuté en rencontre avec moi au cours 14.</warning>

<info>N'OUBLIEZ PAS D'ENLEVER LES BORDURES AUTOUR DE VOS CHAPITRES ET ÉLÉMENTS GRAPHIQUES avant la remise finale et la  mise en ligne finale 😊
Certains chapitres peuvent quand même nécessiter une bordure sur le haut ou le bas pour mieux définir leur limite graphique, à vous de juger. Par contre, enlevez quand même les bordures à droite et à gauche sur tous vos chapitres (si ce n'est pas déjà fait).</info>

<checklist>Republiez en ligne (tim-momo.com) vos dernières modifications et optimisations. Dans cette version, vous devez avoir commenté ce qui fait référence à drawSVG et morphSVG. Vous devrez aussi sur cette version avoir caché <span class='inline-code'>ul.technique-gsap</span> à l'aide d'une <span class='inline-code'>display: none;</span>.
Avec cette version, créez une branche git nommée <em>live</em>. Commitez et pousser vers github.
Créez ensuite une autre branche git nommée <em>final</em>, décommentez tout ce qui a un lien avec drawSVG et morphSVG. Réaffichez <span class='inline-code'>ul.technique-gsap</span>. Commitez et pousser vers github. Ce sera la version que vous allez présenter en classe au cours 15.
</checklist>


<alert>Votre projet dois être 100% fonctionnel lorsqu'on clique sur <em>index.html</em> (donc sans passer par <em>Live Server</em> de Visual Studio Code).</alert>


<dots></dots>
<grostitre>Remise (après avoir comptété P2.3a, P2.3b et P2.3c)</grostitre>
<p>Dans Teams>Devoir, déposez le lien de votre répertoire git individuel. </p>
<p> Vous devez aussi y déposer le URL de votre site publié en ligne sur tim-momo.com.</p>


<dots></dots>
<grostitre>Présentation du projet</grostitre>
<p><strong>Environ 7 min par personne</strong></p>

<p>Simplement faire la démo de la version de la branche "final" que j’aurai téléchargé sur le poste du professeur en avant. La branche "final", c'est la version qui inclut drawSVG et morphSVG, tout est fonctionnel et on peut voir en haut à gauche le petit carré "techniques-gsap" visible.</p>

<p>Donc en 2 temps:</p>
<ol>
  <li>Racontez-nous votre histoire, chapitre par chapitre (lire le texte ou interprétez un sous-texte si vous le souhaitez).</li>
  <li>Remontez en haut et cette fois, expliquez chapitre par chapitre quelles sont les techniques d'animation GSAP que vous avez utilisées et programmées.</li>
</ol>




<dots></dots>
<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../optimisation/introduction/"></intlink>
<intlink href="../../optimisation/rapport-de-performance/"></intlink>
<intlink href="../../optimisation/12-commandements-optimisation/"></intlink>
<intlink href="../../optimisation/optimisation-des-medias/"></intlink>
<intlink href="../../optimisation/chargement-images-progressif/"></intlink>
