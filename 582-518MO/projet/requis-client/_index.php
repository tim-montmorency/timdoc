<?php 
/**
 * @type     article
 * @title    Requis client
 * @icon     images/icon.svg
 * @abstract Liste de requis souhaités
 * @index 88
 */
?>

<p>Le client a émis une liste de requis qu’il souhaite avoir sur son site. Ses demandes ont étés évaluées par votre équipe à un total de 80 points. Afin que le client accepte le produit qui lui sera livré, vous devrez couvrir un minimum de ses&nbsp;demandes.</p>

<p>Ainsi, les 35 premiers points que vous réaliserez vous permettront de maintenir votre relation d’affaires avec le client. Tout point subséquent vous permettra de mettre la main sur 1% de votre session, jusqu’à concurrence de 35%, soit le total alloué à la réalisation du projet de&nbsp;session.</p>

<p>Par principe d’équité, ce calcul est légèrement différent pour les équipes de quatre. 40 points de base devront être fait. Les 40 points suivants seront ensuite ramenés sur 35 via une règle de trois afin de déterminer la note allouée sur&nbsp;35%.</p>

<dots></dots>
<grostitre>Math rapides</grostitre>

<p><em>Donc pour obtenir 100% mon équipe n'a pas besoin de réaliser 80 points, mais seulement 70?</em><br>Exact, seulement 70 si vous êtes 3! <br>80 si vous êtes 4.</p><p><em>Que se passe-t-il si nous dépassons 70 points?</em><br>Ces points sont soustraits de votre total… je plaisante 🤡. <br>Votre client est heureux, vous apprenez plus et vous avez un projet plus intéressant à inclure dans votre portfolio!</p><p><em>De combien de points mon équipe à t-elle besoin pour obtenir 60%?</em><br>56 points si vous êtes 3.<br>64 points si vous êtes 4.</p>

<dots></dots>
<grostitre>Généraux</grostitre>
 
<checklist>
Toutes les pages du site doivent-être responsive: <em>375px</em>, <em>768px et 1200px</em>. <em>[6pts]</em>
Les pages du site doivent s'afficher correctement sur les navigateurs: Chrome, Firefox et Edge. <em>[4pts]</em>
Site bilingue sur toutes les pages. Si un contenu n'est pas disponible en anglais sur le site, traduisez-le via <a target="_blank" onclick="event.stopPropagation()" rel="noopener noreferrer" href="https://translate.google.com/?sl=fr&amp;tl=en&amp;op=translate">Google traduction</a> ou <a href="https://www.deepl.com/translator" target="_blank" onclick="event.stopPropagation()">DeepL Translator</a>. <em>[4pts]</em>
Permettre de populer les <code>og:title</code>, <code>og:description</code> et <code>og:image</code> de chaque page. <em>[2pts]</em>
Création d’un fichier <em>variables.scss</em> contenant minimalement 5 variables. Chaque variable doit être utilisée au moins 2 fois.<em>[1pts]</em>
Chaque composante doit avoir son propre fichier SCSS. <br>Minimum de 10 composantes. <em>[2pts]</em>
Création d'un héros générique contenant une image et un titre. <em>[0,5pts]</em>
Création d'une composante permettant d'afficher le contenu du champ description. <em>[0,5pts] </em>
</checklist>

<dots></dots>
<grostitre>Entête</grostitre>
<checklist>
  Le logo du client doit être cliquable et pointer vers l'accueil. <em>[1pts]</em>
  Navigation vers les 5 pages autres que accueil et 404. <em>[1pts]</em>
  Possibilité de modifier la navigation à partir de WordPress. <em>[3pts]</em>
  Effet de survol pour chacun des liens dans la navigation. <em>[1pts]</em>
  Inclure un bouton d'appel-à-l'action (CTA) de dons qui se démarque des liens de la navigation et menant vers une page externe de dons. <em>[1pts]</em>
  Tous les liens de la navigation doivent être masqués dans un menu de type hamburger 🍔 par défaut et devenir visibles en tout temps à partir de la résolution tablette ou ordinateur classique <em>(à votre discrétion)</em>.<em> [3pts]</em>
  Avoir un bouton de changement de langue fonctionnel. <em>[1pts]</em>
  Animer le menu hamburger au survol avec GSAP. <em>[1pts]</em>   
</checklist> 
  
  
<dots></dots>
<grostitre>Pied de page</grostitre>
<checklist>
Le logo du client doit être cliquable et pointer vers l'accueil. <em>[1pts]</em>
Logo des partenaires. <em>[1pts]</em>Contrôler les logos des partenaires via WordPress et permettre l'ajout de lien sur chacun d'eux. <em>[2pts]</em>
Bouton de dons menant sur la page externe de dons. <em>[1pts]</em>
Inclure les liens vers les pages de réseaux sociaux du client. <em>[1pts]</em>
Informations de contact du client <em>[1pts]</em>:<br>- Téléphone<br>- Courriel<br>- Adresse physique<br>- etc.
Lorsque cliquée, l'adresse physique du client doit ouvrir Google Map et afficher le bon endroit. <em>[1pts]</em>
Affichez un symbole de droits d'auteur suivis de l’année <em>(ex: ©2023)</em>, du nom du client et de votre équipe. <em>[1pts]</em></p></li></ol>
</checklist> 



<dots></dots>
<grostitre>Accueil</grostitre>
<checklist>
Création d'un héros contenant un carrousel. <em>[2pts]</em>
Section affichant un aperçu des <a target="_blank" onclick="event.stopPropagation()" rel="noopener noreferrer" href="../arborescence/#hub-de-services" onclick="event.stopPropagation()">services offerts</a> se populant à partir de ces pages. <em>[2pts]</em>
Section affichant les 3 plus récentes nouvelles se populant à partir de ces pages. <em>[2pts]</em>
Bloc affichant un témoignage. <em>[1pts]</em>
Bloc de dons contenant une animation GSAP élaborée utilisant une timeline. <em>[2pts]</em>
</checklist>

<dots></dots>
<grostitre>Hub de nouvelles</grostitre>

<checklist>
Utilisez la composante de héros générique. <em>[0,5pts] </em>
Affichez 6 cartes d'aperçu des nouvelles les plus récentes à l'aide d'un fetch au REST API de WordPress. Ces cartes doivent-êtres cliquables et pointer ver la page de nouvelle en question. <em>[3pts]</em>
Ajoutez un effet de survol aux cartes. <em>[1pts]</em>
Permettre de choisir l'ordre d'affichage des nouvelles <em>(des + récentes aux + anciennes et vice-versa) </em>via un menu déroulant. <em>[2pts]</em>
Bouton <em>"Voir plus de nouvelles"</em> permettant d'aller chercher les 6 nouvelles suivantes. Ce bouton doit disparaitre lorsqu'il ne reste plus de nouvelle à aller chercher. <em>[2pts]</em>
La 1<sup>re</sup> nouvelle doit avoir une apparence différente des autres nouvelles afin de la faire ressortir du lot. <em>[1pts]</em>
</checklist>



<dots></dots>
<grostitre>Détail de nouvelle</grostitre>
<checklist>
Créez un héros de nouvelle contenant un titre, une image, une date et une catégorie. Chaque héros de nouvelle doit changer légèrement d'apparence en fonction de sa catégorie.<br><br>Par exemple, avoir un élément changeant de couleur, une icône différente, etc. <em>[2pts]</em>
Importez le contenu de 13 pages de nouvelles minimum. <em>[2pts]</em>
Affichez la composante de description de base. <em>[0,5pts]</em>
Incorporez au moins 6 <a target="_blank" onclick="event.stopPropagation()" rel="noopener noreferrer" href="/cours/html/microdonnees">microdonnées</a> de nouvelle. <em>[1pts]</em>
Bloc cliquable en fin de page permettant de voir un aperçu de la prochaine nouvelle. <em>[1pts]</em>
</checklist>

<dots></dots>
<grostitre>Hub de services</grostitre>
<checklist>
Utilisez la composante de héros générique. <em>[0,5pts]</em>
Affichez la composante de description de base. <em>[0,5pts]</em>
Affichez des cartes d'aperçu des différents services offerts. Ces cartes doivent-êtres cliquables et mener vers la page de service en question. <em>[2pts]</em>
</checklist>

<dots></dots>
<grostitre>Détail de service</grostitre>

   <checklist>
Utilisez la composante de héros générique. <em>[0,5pts]</em>
Affichez la composante de description de base. <em>[0,5pts]</em>
Bloc cliquable en fin de page permettant de voir un aperçu du prochain service. <em>[1pts]</em>
  </checklist>



<dots></dots>
<grostitre>Équipe</grostitre>


<checklist>
Utilisez la composante de héros générique. <em>[0,5pts]</em>
Affichez la composante de description de base. <em>[0,5pts]</em>
Chaque membre d'équipe doit avoir un post séparé dans WordPress <em>[1pts]</em>
Affichez tous les membres d'équipe: <em>[1pts]</em><br>- Nom<br>- Poste<br>- Portrait photo (si absent, utilisez une photo de <a href="https://thispersondoesnotexist.com/" target="_blank" onclick="event.stopPropagation()" rel="noopener noreferrer" >ThisPersonDoesNotExist.com</a>)
Chaque membre d'équipe doit-être cliquable afin d'ouvrir un modal contenant plus d'information sur cette personne. Par exemple, une biographie. Si aucune information supplémentaire n'est disponible, affichez un paragraphe de <a target="_blank" onclick="event.stopPropagation()" rel="noopener noreferrer" href="https://www.lipsum.com/feed/html">Lorem Ipsum</a>. <em>[2pts]</em>
</checklist>


  <dots></dots>
  <grostitre>À propos</grostitre>
  <checklist>
  Utilisez la composante de héros générique. <em>[0,5pts]</em>
  Affichez la composante de description de base. <em>[0,5pts]</em>
  </checklist>

  <dots></dots>
  <grostitre>Histoire</grostitre>
  <checklist>
  Utilisez la composante de héros générique. <em>[0,5pts]</em>
  Affichez la composante de description de base. <em>[0,5pts]</em>
  Créez une ligne du temps verticale et affichez les grands événements de leur histoire. <em>[1pts]</em>
  La ligne du temps verticale doit se dessiner graduellement en même temps que le défilement de la page. Les grands événements doivent appraitre à mesure qu'on arrive à son point dans le dessin de la ligne du temps. Utilisez GSAP et les extensions nécessaires réaliser cette animation. Ne pas utiliser drawSVG car il est payant. <em>[2pts]</em>
  </checklist>


  <dots></dots>
  <grostitre>FAQ</grostitre>
  <checklist>
  Utilisez la composante de liste de descriptions (dl, dt, dd). Minimum 4 question-réponse. <em>[1pts]</em>
  </checklist>


  <dots></dots>
  <grostitre>Erreur 404</grostitre>
  <checklist>Affichez le texte <em>“Erreur 404”. [0,5pts]</em>
Incorporez une animation GSAP élaborée utilisant la timeline soulignant que la page n'a pas été trouvée. <em>[1pts]</em></checklist>
        

  
