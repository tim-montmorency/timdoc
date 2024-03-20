 <?php

  /**
   * @type     article
   * @title    P1.3a LP - Sections cartes
   * @icon     images/icon.svg
   * @abstract Sections fonctionnalités + témoignages
   */
  ?>

<grostitre>Note</grostitre>
<info>
  NE JAMAIS utiliser l’attribut <em>style</em> directement dans les balises HTML pour styliser vos éléments.<br><br>Soit, vous utilisez les classes utilitaires Bootstrap, soit vous stylisez vous-même avec des classes personnalisées dans <em>main.css</em> et/ou <em>styles-app.css</em> et/ou <em>styles-lp.css</em>.
</info>

<warning>Suivez toujours les instructions lorsqu'il est mentionné dans les instructions d'utiliser les classes utilitaires Bootstrap.</warning>


</checklist>
<dots></dots>

<grostitre>Section Fonctionnalités</grostitre>
<p>2 exemples de résultats possibles pour cette section (mais vous avez une certaine flexibilité) 👇</p>
<img src="images/lp_fearures_demo1.png" alt="Aperçu"  style="box-shadow: 5px 5px 20px rgba(0,0,0,0.1)">

<img src="images/lp_fearures_demo2.png" alt="Aperçu"  style="box-shadow: 5px 5px 20px rgba(0,0,0,0.1)">
<checklist>
Bien que vous ayez préalablement designé votre page, vous devez tout de même suivre les instructions de ce devoir. Libre à vous par la suite d’ajouter les détails de votre maquette mais ces instructions-ci absolument doivent être suivies avant de personnaliser votre page (bref le résultat final doit conserver les instructions ci-bas).
Si ce n’est pas le cas, ajoutez votre section <em>hero</em> dans la balise <em>main</em> 
Sous la section Hero, créez une 2e section, identifiez-la <em>section-features</em>. Ce sera la section qui présente les fonctionnalités de l’appli que vous présentez au public. Il y en a 6. Le texte à utiliser se trouve dans le wiki du cours 4 (groupe H24). Pour créer cette section, utilisez la balise sémantique la plus appropriée. Sachez aussi que cette section fera office de rangée Bootstrap. Ajoutez les classes qui sont de mise. 
Dans cette section ajoutez un conteneur Bootstrap qui lui-même contiendra 2 rangées. Dans la première rangée, ajoutez un titre de niveau 2 nommé <em>Fonctionnalités</em> suivi d’un paragraphe qui introduit la section (le texte est disponible dans le wiki). 
Dans la 2e rangée, créez 6 colonnes. Par défaut, les colonnes s’affichent sur toute la largeur de la rangée  (donc une en dessous de l'autre). 
À partir du breakpoint <em>md</em>, on verra 2 colonnes par rangée.
À partir du breakpoint <em>lg</em>, on verra 3 colonnes par rangée (excepté si vous choisissez d'avoir des cartes horizontales, pour le breakpoint <em>lg</em> on gardera alors 2 colonnes par rangée). 
Dans chaque colonne, (commencez par la première et vous pourrez dupliquer lorsque complété), créez une carte Bootstrap. <br>Chaque carte Bootstrap devra contenir le titre et la description de la fonctionnalité.  Les cartes ne sont PAS cliquables (elles ne mènent pas à une autre page ou une autre section, elles ne servent qu'à présenter le contenu tel quel). 
Allez voir la <a href="https://icons.getbootstrap.com/#install" target="_blank" onclick="event.stopPropagation()">documentation sur les icônes Bootstrap</a> et installez le paquet d'icônes via CDN, soit avec la balise <em>link</em> ou via <em>@import</em> dans le css, à ta guise. 
Chaque carte Bootstrap devra accueillir une icône (icône Bootstrap). Utilisez la méthode <em>Icon Font</em> (voir documentation liée au point précédent). Vous n'êtes pas contraints à utiliser les même icônes que les aperçus ci-haut. Allez-y avec votre intuition. 
Appliquez le style qui vous convient selon votre design. Vous avez aussi la possibilité d’explorer autre chose au niveau du style, pas une nécessité de vous coller à votre design. Il faut que les cartes sortent un peu du look classique avec le petit filet gris autour, amusez-vous à explorer les possibilités. Ce peut-être des cartes horizontales (en 2 colonnes) ou verticales (icone, titre, texte, l’une en dessous de l’autre). À vous de voir ! 
Sur les rangées et les colonnes de la section actuelle, ajoutez une marge supplémentaire en haut et en bas avec les classes utilitaires Bootstrap. 
Au besoin, pour réduire la largeur des gouttières (gutters) entre les colonnes, ajoutez les classes Bootstrap en conséquence. 
</checklist>

<h4>Notes de cours 📚</h4>
<intlink href="../../bootstrap/cartes"></intlink> 
<intlink href="../../bootstrap/utilitaires"></intlink> 
<intlink href="../../bootstrap/grille"></intlink> 
<dots></dots>
<grostitre>Section Témoignages</grostitre>


<p>Aperçu du résultat selon 3 dimensions d'écran: par défaut, ensuite à partir du breakpoint <em>sm</em> et ensuite à partir du beakpoint <em>lg</em> 👇</p>
<img src="images/temoignages_default.jpg" alt="Défaut" style="max-width: 200px">
<img src="images/temoignages_sm.jpg" alt="À partir du breakpoint sm" style="max-width: 400px">
<img src="images/temoignages_lg.jpg" alt="À partir du breakpoint lg">
<checklist>
Sous la section <em>section-features</em>, créez une 3e section, identifiez-la <em>section-testimonials</em>. Ce sera la section des témoignages de gens qui sont satisfaits de l’appli.  
Comme la section fonctionnalités, ajoutez deux rangées, la première contenant un titre <em>Témoignages</em> et un paragraphe qui présente la section. 
Dans la 2e rangée, créez 6 colonnes de largeur identique. Par défaut, les colonnes s’affichent sur toute la largeur (donc une en dessous de l'autre). 
À partir du breakpoint <em>sm</em>, on verra 2 colonnes par rangée. 
À à partir du breakpoint <em>lg</em>, on verra 4 colonnes par rangée. La 2e rangée de cartes témoignage n’en contiendra que 2, trouvez un moyen de les centrer dans leur propre rangée avec les classes utilitaires Bootstrap.
La carte contient une photographie de la personne qui témoigne. Vous pouvez utiliser ce <a href=" https://unsplash.com" target="_blank" onclick="event.stopPropagation()">site pour aller chercher des portrait photographique d'hommes et de femmes.</a> Choisissez le format "petit" de l'image. Prenez le temps de télécharger les images, bien les nommer et les classer dans vos <em>assets</em>. Appliquez à l’image une hauteur à votre guise autour de height: 20vh; afin que sa dimension soit adaptable avec la dimension de l’écran (vh = view height). Positionnez l’image dans son cadre avec la propriété <code>object-fit</code> et <code>object-position</code>.  L'image ne doit pas être écrasée ou étirée. Elle doit garder son ratio initial.
Sous l’image, le nom de la personne qui témoigne en tant que titre de la carte. 
Note : n’oubliez pas d’ajouter les balises et classes nécessaires pour formatter une carte Bootstrap comme il se doit. 
Sous le titre de la carte, ajoutez un témoignage de votre cru. Soyez sympa. 😊  
Stylisez un peu les cartes. J'ajoute cependant un style obligatoire, vous devez ajouter des icônes “quote” de Bootstrap, soit en arrière-plan, en haut ou au coin de la carte, en filigrane, un peu superposé ou autre idée de placement.  
Sur toutes les sections de votre page (et il y en aura d’autres à venir), assurez-vous d’avoir un <code>padding</code> en haut et en bas assez large pour laisser respirer le contenu. Assurez-vous aussi que ce <code>padding</code> est constant de section en section. Utilisez les classes utilitaires Boostrap pour générer ce <code>padding</code>. 
Assurez-vous aussi d’alterner la couleur de fond de chacune de vos sections pour de bien distinguer la séparation entre chacune d'elle. 
</checklist>

<h4>Notes de cours 📚</h4>
<intlink href="../../bootstrap/cartes"></intlink> 
<intlink href="../../bootstrap/utilitaires"></intlink> 
<intlink href="../../bootstrap/grille"></intlink> 
