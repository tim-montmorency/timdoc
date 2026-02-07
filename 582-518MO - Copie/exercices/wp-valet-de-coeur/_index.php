<?php
/**
 * @type     exercice
 * @title    Wordpress - Valet de coeur
 * @icon     images/catan.jpeg
 * @abstract Vous evez créer un microsite permettant de présenter les produits vedettes de votre client Le Valet d’Coeur.
 */
?>


<p>Pour cet exercice vous et votre coéquipier (fictif) devez créer un microsite permettant de présenter les produits vedettes de votre client <a href="https://levalet.com/fr" target="_blank">Le Valet&nbsp;d’Coeur</a>.</p>


<p>Votre coéquipier a conçu un mockup HTML sur CodePen, ainsi que le thème WordPress du site. Il compte maintenant sur vous pour le rendre dynamique dans&nbsp;WordPress.</p>


<p>Aperçu du résultat 👇</p>
<clipasset src="images/valet-de-coeur-resultat.mp4"></clipasset>



<dots></dots>
<grostitre>Matériel</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/ZEVPzBZ?editors=1000">Pen de départ</doclink>


<h3 class="heading heading--h3" id="Médias 🖼️">Médias 🖼️</h3>
<mediafile src="images/catan.jpeg">Catan</mediafile>
<mediafile src="images/evolution-climat.jpeg">Évolution Climat</mediafile>
<mediafile src="images/downforce.jpeg">Downforce</mediafile>

<dots></dots>
<grostitre>Requis</grostitre>
<checklist>Installez en local une copie en <a target="_blank" rel="noopener noreferrer" href="https://fr-ca.wordpress.org/download/">Français du Canada de WordPress</a> pour votre client.
Installez le <a target="_blank" rel="noopener noreferrer" href="https://ex.smnarnold.com/wordpress/valet-de-coeur/valet-de-coeur.zip">thème réalisé par votre collègue</a>. Si vous l'avez installé et vous le cherchez, sachez que c'est le thème qui se nomme "Montmorency".
Installez l'extension <a target="_blank" rel="noopener noreferrer" href="https://fr-ca.wordpress.org/plugins/advanced-custom-fields/">Secure Custom Fields (SCF)</a>.
Créez un nouveau type de post (post type) intitulé <em>"Jeu"</em>. Ce nouveau type de post contiendra tous les jeux de société disponibles chez Le Valet D'Coeur
Créez un nouveau groupe de champs ne s'affichant que dans les posts de type <em>"Jeu"</em>. Ce groupe devra contenir des champs permettant de spécifier le prix, la durée moyenne, le nombre de joueurs et l'âge minimal requis pour jouer au jeu.
Créez les 3 produits suivant: <h3>Catan</h3>109.99$<br>90 min<br>3-6 joueurs<br>10 ans et plus<br>L’édition Jubilé de Catan, célèbre les 25 ans d’un des jeux les plus joués au monde ! Elle contient le jeu de base, l’extension Marins de Catan ainsi que deux scénarios. Lancez-vous à la conquête d’une île vierge, remplie de ressources et de promesses. Saurez-vous construire vos villes et colonies plus vite que vos adversaires ? Catan, ce sont plusieurs millions d’exemplaires vendus à travers le monde et le porte-étendard d’une nouvelle manière de jouer. C’est le jeu qui a fait découvrir au monde tout ce qui fait le sel des jeux à l’allemande : une mécanique fluide et bien pensée, des règles simples, des parties courtes pour un jeu de stratégie et la non-élimination des joueurs en cours de partie.<br>Celebrate 25 years of exploration and discovery! The CATAN 25th anniversary edition contains the classic CATAN 3-4 player board game, PLUS 5-6 Player Extension, Helpers of CATAN Scenario, special iridescent anniversary wood pieces and dice. Also includes resource card sorting trays and card sleeves! In Catan, take the role of an exploring settler carving out a home for your people. <h3>Évolution climat</h3>49.99$<br>60 min<br>2-6 joueurs<br>12 ans et plus<br>Les bouleversements climatiques ont toujours joué un rôle de premier plan dans l’évolution des espèces. Ils affectent l’écosystème dans son intégralité, aussi bien sur le plan animal que végétal. Pour les espèces de grande taille, incapables de se rafraîchir efficacement, un climat trop chaud représente la pire des menaces. De leur côté, les espèces de petite taille se trouvent fort dépourvues face à la rigueur d’une ère glaciaire. L’extension Climat pour Evolution intègre ces nouveaux aléas climatiques au jeu en modifiant quelques éléments. Nouveautés apportées par Climat : Cartes Trait : les icônes de changements climatiques font leur apparition dans cette extension. Chaque carte affiche de 1 à 4 icônes en bas à droite. Le climat évolue en fonction du nombre de soleils et de flocons. Plateau Climat : le plateau Climat remplace le plan d’eau qui est intégré dessus. La piste climatique indique le climat et ses effets pendant le tour de jeu. Elle va d’un climat très froid à un climat très chaud. Pion Climat : le pion Climat se déplace sur la piste pour indiquer le climat du tour. Cartes Evénement : il y a 30 cartes Evénement (15 sont liées au froid et 15 sont liées à la chaleur). Avec cette extension, le but du jeu est le même que dans Evolution, à savoir survivre dans un environnement hostile et à des conditions climatiques changeantes. Une partie d’Evolution se déroule en un nombre de tours qui varie en fonction de l’épuisement de la pioche de cartes Trait.<h3>Downforce</h3>44.99$<br>40 min<br>2-6 joueurs<br>10 ans et plus<br>Un jeu de course mais pas seulement ! Dans Downforce, vous essayez d’être le plus riche. Pour cela, enchérissez à coup de millions sur des voitures de course. Pariez en secret pendant que les voitures s’affrontent sur le bitume. Soyez victorieux et repartez avec le jackpot ! Downforce est un jeu de course pour toute la famille dans lequel être le plus rapide ne sera pas la seule clé de la victoire.
Créez un nouveau modèle WordPress intitulé <em>game.php</em> (vous pouvez dupliquer un autre modèle du thème existant). 
Faites en sorte que ce modèle puisse être attribué aux posts de type <em>"Jeu"</em> et attribuez le à tous ces posts.
Inspirez-vous de la structure HTML réalisée par votre collègue dans le Pen en pièce jointe. Tentez de recréer cette structure dans votre nouveau modèle, mais faites en sorte que les différentes informations <em>"hardcodés"</em> se populent à partir des informations entrées dans WordPress.
Créez ensuite dans le tableau de bord un menu permettant de naviguer parmi les différents produits et assignez-le au menu principal.
Installez l'extension <a target="_blank" rel="noopener noreferrer" href="https://fr-ca.wordpress.org/plugins/wp-multilang/">WP Multilang</a> et traduisez vos produits avec les textes suivants:<h3>Catan</h3>Celebrate 25 years of exploration and discovery! The CATAN 25th anniversary edition contains the classic CATAN 3-4 player board game, PLUS 5-6 Player Extension, Helpers of CATAN Scenario, special iridescent anniversary wood pieces and dice. Also includes resource card sorting trays and card sleeves! In Catan, take the role of an exploring settler carving out a home for your people.<h3>Evolution climate</h3>Evolution: Climate is a standalone game that introduces climate into the Evolution game system. In Evolution: Climate, players adapt their species in a dynamic ecosystem where food is scarce, predators lurk, and the climate can swing between scorching hot and icy cold. Traits like a Hard Shell and Horns can protect your species from Carnivores while a Long Neck will help them get food that others cannot reach. Heavy Fur and Migratory can protect your species from the cold while being Nocturnal or Burrowing will provide protection from the cruel desert sun. With over 200,000 ways to evolve your species, every game evolves into a different adventure.<h3>Downforce</h3>Un Bid! Race! Win! Tires screech. Gears shift. Drivers push their million-dollar cars to the limit. The difference between victory and defeat could be a single card. Downforce is our restoration of Wolfgang Kramer’s classic. For nearly 40 years, this card-driven racing game has been the delight of gamers and families. Known by many names – Top Race, Daytona 500, Cleveland Grand Prix – it’s brought to you now as Downforce.
Ajoutez une option de changement de langue dans le menu principal. Attention de n'afficher qu'une seule langue à la fois dans le menu.</checklist>

      


<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<intlink href="../../wordpress/modeles/"></intlink>
<intlink href="../../wordpress/contenu-dans-modeles/"></intlink>
<intlink href="../../wordpress/images-dans-modeles/"></intlink>
<intlink href="../../wordpress/posts-personnalises/"></intlink>
<intlink href="../../wordpress/advanced-custom-fields/"></intlink>
<intlink href="../../wordpress/menus/"></intlink>
<intlink href="../../wordpress/wp-multilang/"></intlink>
