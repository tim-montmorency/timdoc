<?php 
/**
 * @type     exercice
 * @title    Malajube - Trompe-l'œil
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du HTML et du CSS afin de recréer l’album "Trompe-l'œil" de Malajube.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du HTML et du CSS afin de recréer l’album <a target="_blank" href="https://open.spotify.com/album/29v9woB73Q3nCWgefIxyzK">"Trompe-l'œil"</a> de <a target="_blank" href="https://fr.wikipedia.org/wiki/Malajube">Malajube</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./malajube-trom-l-oeil.zip">Dossier de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#fdfcf7</color>
<color>#dbd6c1</color>

<h3>Médias</h3>

<mediafile src="images/trompe-l-oeil_1.png">Papillon</mediafile>
<mediafile src="images/trompe-l-oeil_2.png">Oeuf</mediafile>
<mediafile src="images/trompe-l-oeil_3.png">Poissons</mediafile>

<dots></dots>


<grostitre>Requis</grostitre>

<checklist>
  Téléchargez une copie des images. Placez-les dans un dossier intitulé <span class="inline-code">images</span> dans votre projet et utilisez ces images plutôt que celles en ligne.  
  Le fond de la page doit être un dégradé vertical ↕️ partant de <em>blanc cassé</em> à <em>gris pâle</em>.
  L'album doit être de couleur <em>blanc cassé</em>, une dimension de <em>500x500px</em>, être positionné à <em>20px</em> du sommet de la page et être parfaitement centré horizontalement. <em>(Attention, votre page ne doit pas avoir de barre de défilement visible.)</em>
  L'album doit avoir une ombre noire semi-transparente <em>(50% d'opacité)</em> de <em>50px</em>, égale de tous les côtés de l'album.
  Utilisez la balise <span class="inline-code">picture</span> afin d'afficher par défaut l'image <em>Poissons</em>. À partir de <em>750px</em>, affichez l'image <em>Oeuf</em> et à partir de <em>1150px</em>, l'image <em>Papillon</em>.
  Les images doivent avoir une hauteur maximale et une largeur maximale de <em>400px</em> et être centrés verticalement et horizontalement dans l'album.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<clip src="videos/malajube-pate-filo.mp4"></clip>
<span class="remark">À celle qui a volé mon coeur.</span>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../linear-gradient/"); ?>
<?php intlink("../../box-shadow/"); ?>
<?php intlink("../../../html/picture/"); ?>

<dots></dots>