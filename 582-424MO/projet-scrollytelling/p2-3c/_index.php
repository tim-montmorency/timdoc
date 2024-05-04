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

<alert>Pour cette étape du projet, vous devrez désactivez temporairement vos plugiciels payants.</alert>

<checklist>Dans le HTML, ajoutez les balises de commentaires autour des balises scripts correspondants à drawSVG, morphSVG et tous autres plugiciels payants que vous avez utilisés. (ex: &lt;!-- &lt;script ...&gt;  --&gt;
Dans votre fichiers script.js, ajoutez des commentaires toute propriété qui font référence à drawSVG, morphSVG (ex /*drawSVG: "0% 100%"*/ ) afin d’éviter des erreurs JS. 
</checklist>



<dots></dots>
<grostitre>Publication de votre site sur GitHubPages </grostitre>
<p>Vous savez comment procéder...</p>

<h3>Attendre le build – cela peut prendre plusieurs minutes.</h3>
<info> Pour vérifier si votre dernière modifications ont été publiées en ligne, rendez-vous dans la page du répertoire. Repérez <em>Evironnments</em> dans la colonne de droite et cliquez sur "github Pages" sous le titre <em>Evironnments</em>. Dans cette page, vérifiez que la première ligne de la liste qui a la mention “Deployed” a été publiée il y a 1 minute ou très récemment. Rafraichir la page plusieurs fois jusqu’à ce que vous constatiez que ça a été publié. </info>



<dots></dots>
<grostitre>Testez votre page web avec PageSpeed Insights</grostitre>
<p>Avec le URL généré par github Page, générez un rapport PageSpeedInsights via <a href="https://pagespeed.web.dev/" target="_blank" rel="noopener noreferrer">https://pagespeed.web.dev/</a></p>

<dots></dots>
<grostitre>Plan et documentation d’optimisation </grostitre>
<checklist>Créez un document Markdown à la racide de votre projet nommé rapport-optimisation.md  Tout dans le documetn Markdown doit être rédigé en Markdown et non en HTML ou autre langage.  Ajoutez-y:
Titre niveau 1 :<br>- “Rapport d’optimisation du projet ScrollyTelling” (sans les guillemets)
Lien : <br>- Dans PageSpeed Insights, cliquez sur Copiez le lien en haut à droite.   <br>- Dans votre fichier Markdown, créez un lien, collez-y le lien copié.<br>- Le texte de ce lien sera : “Page Speed Insights - Rapport du 5 mai 2023, 15:01:06” (la partie “Rapport du 5 mai 2023, 15:01:06” est en fait une copie de la ligne équivalente qui a été générée dans votre rapport). 
</checklist>

<checklist>À partir du rapport Page Speed Insight, sélectionnez 3 éléments à corriger qui vont avoir le plus d’impact dans l’optimisation de la performance. 
Dans le document Markdown,  pour <strong>chacun des 3 éléments</strong>:
Ajoutez un titre de niveau 2 : <br>- “Problème #1” (ou 2 ou 3) (sans les guillemets).  
Sous lequel vous allez devoir ajouter deux titres de niveau 3 :<br>- Nom du problème (écrivez le nom du problème et non le texte non du problème) <br>- “Action concrète pour résoudre le problème” (sans les guillemets) 
Sous le titre "Nom du problème", écrivez, dans vos mots le problème à résoudre (pas de copier-coller de ce que vous voyez à l’écran dans Page Speed).  SI vous ne le comprenez pas bien, allez lire sur le sujet, On vous donne toujours des liens pour en savoir plus sur chaque sujet en question. 
Sous le titre "Action concrète...", écrivez, dans vos mots la ou les actions concrètes pour régler le problème ou améliorer la situation. Soyez précis, nommez les fichiers que vous allez changer, nommez bien les fichiers ou ressources concernées afin que ce soit super clair pour un tierce partie qui lirait votre documentation. 
</checklist>






<dots></dots>

<grostitre>Exécutez votre plan.</grostitre>

<checklist>Sous chaque section Problème #1 etc, ajoutez un troisième titre de niveau 3 “Résultat” et décrivez ce que vous avez fait concrètement et si vous avez réussi ou non à résoudre le problème. </checklist>



<dots></dots>
<grostitre>Optimisation des médias </grostitre>
<checklist>Créez une Actions Photoshop pour optimiser toutes vos images d'arrière-plan de chapitre.
  Optimisez toutes ces images d'arrière-plan de chapitre via un traitement par lots avec cette Action Photoshop.
  Faites de même pour d'autres images à optimiser, si vous n'avez pas besoin de changer leur taille, vous pouvez le faire, ne serait-ce que pour réduire leur poids via une compression complémentaire png ou jpg.
</checklist>
<intlink href="../../optimisation/optimisation-des-medias/"></intlink>



<dots></dots>
<grostitre>Minifiez vos CSS et JavaScript</grostitre>
<checklist>Avec une extention VS Code ou un outil en ligne, créez une version minifiée de votre fichier styles.css que vous nommerez styles.min.css et une version minifiée de scripts.js que vous nommerez scripts.min.js.  
N'oubliez pas de changer les liens vers ces style et scripts minifiés dans votre HTML.
</checklist>
<intlink href="../../optimisation/12-commandements-optimisation#5-reduire-nb-de-fichiers-javascript-et-css"></intlink>





<dots></dots>
<grostitre>Publiez vos changements </grostitre>
<p>Repoussez vos modification sur le site publié en ligne sur GitHub Pages : simplement faire un push sur la branche qui est publiée sur GitHub Pages. </p>


<h3>Attendre le build – cela peut prendre plusieurs minutes.</h3> 

<info> Pour vérifier si votre dernière modifications ont été publiées en ligne, rendez-vous dans la page du répertoire. Repérez <em>Evironnments</em> dans la colonne de droite et cliquez sur "github Pages" sous le titre <em>Evironnments</em>. Dans cette page, vérifiez que la première ligne de la liste qui a la mention “Deployed” a été publiée il y a 1 minute ou très récemment. Rafraichir la page plusieurs fois jusqu’à ce que vous constatiez que ça a été publié. </info> 

<dots></dots>

<grostitre>Re-testez votre page web avec PageSpeed Insights </grostitre>
<p>Avec le le même URL de votre site hébergé sur github Page, regénérez un rapport PageSpeedInsights <a href="https://pagespeed.web.dev/" target="_blank" rel="noopener noreferrer">https://pagespeed.web.dev/</a>  </p>
<p>Les résultats en pourcentage devraient alors avoir augmenté suite à vos modifications d’optimisation. </p>


<dots></dots>
<grostitre>Pour conclure, dans le fichier MarkDown</grostitre>
<checklist>Ajoutez un titre de niveau 2 à la toute fin: <br>- “Rapport projet ScrollyTelling après optimisation” 
Ajoutez le lien :<br>- Dans le nouveau rapport PageSpeed Insights, cliquez sur Copiez le lien en haut à droite.<br>- Dans votre fichier Markdown, créez un lien, collez-y le lien copié.<br>-  Le texte de ce lien sera : “Page Speed Insights - Rapport du 5 mai 2023, 17:50:00” (la partie “Rapport du 5 mai 2023, 17:50:00” est en fait une copie de la ligne équivalente qui a été générée dans votre rapport). 
</checklist>



<dots></dots>
<grostitre>Remise (après avoir comptété P2.3a, P2.3b et P2.3c)</grostitre>
<p>Remettez ce devoir sur une nouvelle branche nommée P2-3</p>
<p>Dans Teams>Devoir, déposez le lien de votre répertoire git individuel, basé sur la branche P2-3. Vous devez aussi y déposer le URL de votre site publié sur GitHub Pages (vous référer aux instructions de P2.3c pour les détails).</p>
<dots></dots>
<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../optimisation/introduction/"></intlink>
<intlink href="../../optimisation/rapport-de-performance/"></intlink>
<intlink href="../../optimisation/12-commandements-optimisation/"></intlink>
<intlink href="../../optimisation/optimisation-des-medias/"></intlink>
