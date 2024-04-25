<?php
/**
 * @index    9
 * @type     article
 * @title    Composantes
 * @icon     images/icon.webp
 * @abstract Tout est préfait pour toi
 * @font     https://patorjk.com/software/taag/#p=display&f=Standard&t=TIMdoc
 */
?>

<p>Afin d'en faciliter l'utilisation, <strong><em>Timdoc</em></strong> a été monté en composantes <a target="_blank" href="https://vuejs.org/">VueJS</a>.</p>

<dots></dots>


<!--
  _____ _ _                  _                      _   _
 |_   _(_) |_ _ __ ___    __| | ___   ___  ___  ___| |_(_) ___  _ __
   | | | | __| '__/ _ \  / _` |/ _ \ / __|/ _ \/ __| __| |/ _ \| '_ \
   | | | | |_| | |  __/ | (_| |  __/ \__ \  __/ (__| |_| | (_) | | | |
   |_| |_|\__|_|  \___|  \__,_|\___| |___/\___|\___|\__|_|\___/|_| |_|

-->
<grostitre>Titre de section</grostitre>

<h3>grostitre</h3>

<p>La composante <incode><grostitre></incode> remplace les <incode>h1</incode>, créent une ancre et l'ajoute à la table des matières automatiquement.<br><br>Exemple de cette section:</p>

<highlight lang="html"><grostitre>Titre de section</grostitre></highlight>

<h3>dots</h3>

<p>La composante <incode>&lt;dots&gt;</incode> est utilisée pour séparer les différentes sections d'une page.</p>

<highlight lang="html">&lt;dots&gt;&lt;/dots&gt;</highlight>

<dots></dots>



<!--
  _   _             _             _   _
 | \ | | __ ___   _(_) __ _  __ _| |_(_) ___  _ __
 |  \| |/ _` \ \ / / |/ _` |/ _` | __| |/ _ \| '_ \
 | |\  | (_| |\ V /| | (_| | (_| | |_| | (_) | | | |
 |_| \_|\__,_| \_/ |_|\__, |\__,_|\__|_|\___/|_| |_|
                      |___/
 -->

<grostitre>Navigation</grostitre>

<h3>children</h3>

<p>La balise <incode><children></children></incode> permet de lister les sous-dossier d'une page. Cette composante ne doit être utilisée qu'a l'intérieur d'une page de type <incode>list</incode>.</p>

<highlight lang="html">
&lt;?php
/**
 * @type     list
 * @title    Manuel
 * @icon     images/icon.png
 * @abstract Installation et développement
 */
?&gt;
&lt;children&gt;&lt;/children&gt;
</highlight>

<timg class="full" src="./images/manuel-$t.webp"></timg>

<warning>Le rendu de cette composante est effectué par le pré-processeur.</warning>

<dots></dots>


<!--
  ____        _ _                 _ _ _        __                            _   _
 | __ ) _   _| | | ___  ___    __| ( |_)_ __  / _| ___  _ __ _ __ ___   __ _| |_(_) ___  _ __  ___
 |  _ \| | | | | |/ _ \/ __|  / _` |/| | '_ \| |_ / _ \| '__| '_ ` _ \ / _` | __| |/ _ \| '_ \/ __|
 | |_) | |_| | | |  __/\__ \ | (_| | | | | | |  _| (_) | |  | | | | | | (_| | |_| | (_) | | | \__ \
 |____/ \__,_|_|_|\___||___/  \__,_| |_|_| |_|_|  \___/|_|  |_| |_| |_|\__,_|\__|_|\___/|_| |_|___/

-->

<grostitre>Bulles d'informations</grostitre>

<h3>info</h3>
<highlight lang="html">
<info>Ceci est une bulle d'information</info>
<warning>Ceci est une bulle d'avertissement</warning>
<alert>Ceci est une bulle d'alerte</alert>
<thumbsup>Ceci est une bulle d'approbation</thumbsup>
<bravo>Ceci est une bulle d'applaudissement</bravo>
</highlight>
<info>Ceci est une bulle d'information</info>
<warning>Ceci est une bulle d'avertissement</warning>
<alert>Ceci est une bulle d'alerte</alert>
<thumbsup>Ceci est une bulle d'approbation</thumbsup>
<bravo>Ceci est une bulle d'applaudissement</bravo>

<dots></dots>



<!--
  ____                            _             _     _  __  __
 |  _ \ _   _  ___ ___  ___    __| | ___    ___| |__ (_)/ _|/ _|_ __ ___
 | |_) | | | |/ __/ _ \/ __|  / _` |/ _ \  / __| '_ \| | |_| |_| '__/ _ \
 |  __/| |_| | (_|  __/\__ \ | (_| |  __/ | (__| | | | |  _|  _| | |  __/
 |_|    \__,_|\___\___||___/  \__,_|\___|  \___|_| |_|_|_| |_| |_|  \___|

 -->

<grostitre>Puces de chiffre</grostitre>
<p>Par défaut, la grosseur d'une puce de chiffre est de <em>24px</em>.</p>

<highlight lang="html">
<zero></zero>
<one size="29" color="#00ff00"></one>
<two size="34" color="skyblue"></two>
<three size="39" color="tomato"></three>
<four size="44"></four>
<five size="49"></five>
<six size="54"></six>
<seven size="59"></seven>
<eight size="64"></eight>
<nine size="69"></nine>
</highlight>

<zero></zero>
<one size="29" color="#00ff00"></one>
<two size="34" color="skyblue"></two>
<three size="39" color="tomato"></three>
<four size="44"></four>
<five size="49"></five>
<six size="54"></six>
<seven size="59"></seven>
<eight size="64"></eight>
<nine size="69"></nine>

<dots></dots>

<!--
  _     _                              __     _ _
 | |   (_) ___ _ __  ___   _ __ ___   /_/  __| (_) __ _ ___
 | |   | |/ _ \ '_ \/ __| | '_ ` _ \ / _ \/ _` | |/ _` / __|
 | |___| |  __/ | | \__ \ | | | | | |  __/ (_| | | (_| \__ \
 |_____|_|\___|_| |_|___/ |_| |_| |_|\___|\__,_|_|\__,_|___/

-->


<grostitre>Liens médias</grostitre>

<h3>mediafile</h3>
<p>Lier un fichier média afin de le copier ou de le télécharger.</p>
<highlight lang="html">
<mediafile src="images/icon.webp">Icône</mediafile>
<mediafile src="images/gandalf.svg">Gandalf</mediafile>
</highlight>
<mediafile src="images/icon.webp">Icône</mediafile>
<mediafile src="images/gandalf.svg">Gandalf</mediafile>
<br>
<p>Si vous n'avez pas besoin de la boîte d'adresse.</p>
<highlight lang="html">
<mediafile src="images/icon.webp" addr="false">Icône</mediafile>
<mediafile src="images/gandalf.svg" addr="false">Gandalf</mediafile>
</highlight>
<mediafile src="images/icon.webp" addr="false">Icône</mediafile>
<mediafile src="images/gandalf.svg" addr="false">Gandalf</mediafile>
<br>

<h3>doclink</h3>
<highlight lang="html" scroll="true">
<doclink href="https://css-tricks.com/almanac/properties/f/flex-direction/">flex-direction</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_flex-direction.php">flex-direction</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/flex-direction">flex-direction</doclink>
</highlight>
<doclink href="https://css-tricks.com/almanac/properties/f/flex-direction/">flex-direction</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_flex-direction.php">flex-direction</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/flex-direction">flex-direction</doclink>
<br><br>

<h3>intlink</h3>
<highlight lang="html">&lt;intlink href=&quot;../../582-215MO/css/exercices/lost-highway/&quot;&gt;&lt;/intlink&gt;</highlight>
<intlink href="../../582-215MO/css/exercices/lost-highway/"></intlink>
<info>Il existe aussi la composante <incode>&lt;listlink href=&quot;...&quot;&gt;&lt;/listlink&gt;</incode> qui est l'équivalent de <incode>&lt;intlink&gt;&lt;/intlink&gt;</incode> mais pour les pages de type <incode>list</incode>.</info>

<warning>Le rendu de cette composante est effectué par le pré-processeur.</warning>
<br><br>

<h3>exercice</h3>
<highlight lang="html">&lt;exercice href="exercices/flexbox-defense"&gt;&lt;/exercice&gt;</highlight>
<exercice href="exercices/flexbox-defense"></exercice>
<warning>Le rendu de cette composante est effectué par le pré-processeur.</warning>
<br><br>

<h3>tool</h3>
<highlight lang="html">&lt;tool href="tools/css-gradient"&gt;&lt;/tool&gt;</highlight>
<tool href="tools/css-gradient"></tool>
<warning>Le rendu de cette composante est effectué par le pré-processeur.</warning>
<br><br>

<h3>knowmore</h3>
<highlight lang="html">
<knowmore href="https://fr.wikipedia.org/wiki/Monotremata">
    Les monotrèmes (Monotremata) constituent un ordre animal défini par
    Charles-Lucien Bonaparte en 1838, regroupant des espèces caractérisées
    par le fait d'être à la fois ovipares et mammifères : ils pondent des œufs
    mais allaitent leurs petits.
</knowmore>
</highlight>
<knowmore href="https://fr.wikipedia.org/wiki/Monotremata">
    Les monotrèmes (Monotremata) constituent un ordre animal défini par
    Charles-Lucien Bonaparte en 1838, regroupant des espèces caractérisées
    par le fait d'être à la fois ovipares et mammifères : ils pondent des œufs
    mais allaitent leurs petits.
</knowmore>

<dots></dots>





<!--
  ____             _          _ _ _
 / ___| _   _ _ __| |__  _ __(_) | | __ _ _ __   ___ ___
 \___ \| | | | '__| '_ \| '__| | | |/ _` | '_ \ / __/ _ \
  ___) | |_| | |  | |_) | |  | | | | (_| | | | | (_|  __/
 |____/ \__,_|_|  |_.__/|_|  |_|_|_|\__,_|_| |_|\___\___|

-->

<grostitre>Surbrillance</grostitre>

<h3>incode</h3>
<highlight lang="html">Utilisez la proprité <incode>transform</incode>.</highlight>
Utilisez la proprité <incode>transform</incode>.<br>
<warning>Le rendu de cette composante est effectué par le pré-processeur.</warning>
<br><br>

<h3>highlight</h3>
<highlight lang="html">
&lt;highlight lang="javascript"&gt;
    console.log("Ceci est du javascript en surbrillante grâce à la librairie javascript Highlight.js qui supporte une tonne de langages différents.");
&lt;/highlight&gt;
</highlight>
<highlight lang="javascript">console.log("Ceci est du javascript en surbrillante grâce à la librairie javascript Highlight.js qui supporte une tonne de langages différents.");</highlight>

<p>Si votre texte est trop long vous pouvez toujours utiliser la propriété <incode>scroll="true"</incode> pour activer la barre de défilement horizontale.</p>
<highlight lang="html" scroll="true">
&lt;highlight lang="javascript" scroll="true"&gt;
    console.log("Ceci est du javascript en surbrillante grâce à la librairie javascript Highlight.js qui supporte une tonne de langages différents.");
&lt;/highlight&gt;
</highlight>
<highlight lang="javascript" scroll="true">console.log("Ceci est du javascript en surbrillante grâce à la librairie javascript Highlight.js qui supporte une tonne de langages différents.");</highlight>

<warning>Le rendu de cette composante est effectué par le pré-processeur.</warning>
<doclink href="https://github.com/highlightjs/highlight.js/blob/main/SUPPORTED_LANGUAGES.md ">Languages supportés</doclink>


<dots></dots>




<!--
  _     _     _          __                    _
 | |   (_)___| |_ ___    \_\_    ___ ___   ___| |__   ___ _ __
 | |   | / __| __/ _ \  / _` |  / __/ _ \ / __| '_ \ / _ \ '__|
 | |___| \__ \ ||  __/ | (_| | | (_| (_) | (__| | | |  __/ |
 |_____|_|___/\__\___|  \__,_|  \___\___/ \___|_| |_|\___|_|

-->

<grostitre>Liste à cocher</grostitre>

<h3>checklist</h3>
<highlight lang="html" scroll="true">
<checklist>
    Bacon ipsum dolor amet pork loin shankle leberkas beef capicola porchetta ground round kevin meatball bresaola andouille.
    Andouille ham bresaola landjaeger meatloaf shoulder t-bone kielbasa salami corned beef porchetta ball tip.
    Brisket sirloin short loin beef shank swine ham hock hamburger spare ribs cupim.
    Chuck brisket bacon, bresaola buffalo drumstick pork chop strip steak boudin.
    Cow picanha fatback pastrami meatloaf biltong tongue shankle pork drumstick pork chop ribeye.
    Spare ribs shank hamburger shankle.
    Fatback sausage andouille, tenderloin ribeye ham short loin swine burgdoggen kielbasa capicola chuck spare ribs.
</checklist>
</highlight>
<checklist>
    Bacon ipsum dolor amet pork loin shankle leberkas beef capicola porchetta ground round kevin meatball bresaola andouille.
    Andouille ham bresaola landjaeger meatloaf shoulder t-bone kielbasa salami corned beef porchetta ball tip.
    Brisket sirloin short loin beef shank swine ham hock hamburger spare ribs cupim.
    Chuck brisket bacon, bresaola buffalo drumstick pork chop strip steak boudin.
    Cow picanha fatback pastrami meatloaf biltong tongue shankle pork drumstick pork chop ribeye.
    Spare ribs shank hamburger shankle.
    Fatback sausage andouille, tenderloin ribeye ham short loin swine burgdoggen kielbasa capicola chuck spare ribs.
</checklist>
<dots></dots>




<!--
   ____ _ _        _   _
  / ___(_) |_ __ _| |_(_) ___  _ __
 | |   | | __/ _` | __| |/ _ \| '_ \
 | |___| | || (_| | |_| | (_) | | | |
  \____|_|\__\__,_|\__|_|\___/|_| |_|

 -->

<grostitre>Citation</grostitre>

<h3>quote</h3>

<highlight lang="html">
<quote author="Gandalf" title="Magicien" photo="./images/gandalf.webp">
    Un magicien n'est jamais en retard, ni en avance d'ailleurs Frodon Sacquet.
    Il arrive précisément à l'heure prévue.
</quote>
</highlight>

<quote author="Gandalf" title="Magicien" photo="./images/gandalf.webp">
    Un magicien n'est jamais en retard, ni en avance d'ailleurs Frodon Sacquet. Il arrive précisément à l'heure prévue.
</quote>

<dots></dots>





<!--
   ____            _
  / ___|___  _   _| | ___ _   _ _ __ ___
 | |   / _ \| | | | |/ _ \ | | | '__/ __|
 | |__| (_) | |_| | |  __/ |_| | |  \__ \
  \____\___/ \__,_|_|\___|\__,_|_|  |___/

 -->

<grostitre>Couleurs</grostitre>

<h3>color</h3>
<highlight lang="html">
<color>#51af3f</color>
<color>#1e98e1</color>
<color>#ee4bbe</color>
<color>#8a774c</color>
</highlight>

<color>#51af3f</color>
<color>#1e98e1</color>
<color>#ee4bbe</color>
<color>#8a774c</color>
<dots></dots>






<!--
  ___
 |_ _|_ __ ___   __ _  __ _  ___  ___
  | || '_ ` _ \ / _` |/ _` |/ _ \/ __|
  | || | | | | | (_| | (_| |  __/\__ \
 |___|_| |_| |_|\__,_|\__, |\___||___/
                      |___/
 -->

<grostitre>Images</grostitre>

<h3>timg</h3>

<p>La composante <incode><timg src=""></timg></incode> agît de la même manière que la balise <incode><img src=""></incode> à l'exception que l'expression <incode>$t</incode> sera remplacé par le nom du thème (<incode>light</incode> ou <incode>dark</incode>).</p>

<highlight lang="html"><timg src="./images/timg-$t.webp" class="full"></timg></highlight>

<timg src="./images/timg-$t.webp" class="full"></timg>


<br><br>


<h3>gallery</h3>
<highlight lang="html">&lt;gallery&gt;
    photos/01.webp
    photos/02.webp
    photos/03.webp
    photos/04.webp
    photos/05.webp
    photos/06.webp
    photos/07.webp
    photos/08.webp
    photos/09.webp
    photos/10.webp
&lt;/gallery&gt;</highlight>
<gallery>
    photos/01.webp
    photos/02.webp
    photos/03.webp
    photos/04.webp
    photos/05.webp
    photos/06.webp
    photos/07.webp
    photos/08.webp
    photos/09.webp
    photos/10.webp
</gallery>
<dots></dots>





<!--
 __     ___     _   __
 \ \   / (_) __| | /_/  ___  ___
  \ \ / /| |/ _` |/ _ \/ _ \/ __|
   \ V / | | (_| |  __/ (_) \__ \
    \_/  |_|\__,_|\___|\___/|___/

 -->

<grostitre>Vidéos</grostitre>

<h3>youtube</h3>
<p>Afin d'accélérer le chargement des pages contenant des vidéos, il est fortement conseillé d'utiliser la composante <incode>&lt;youtube src="id"&gt;&lt;/youtube&gt;</incode>.</p>
<highlight lang="html"><youtube src="KVJBHSOx9jI"></youtube></highlight>
<youtube src="KVJBHSOx9jI"></youtube>
<br><br>

<h3>Vimeo</h3>
<highlight lang="html"><vimeo src="874986396"></vimeo></highlight>
<vimeo src="874986396"></vimeo>
<br><br>

<h3>clip</h3>
<highlight lang="html"><clip src="videos/le-boson-de-higgs.mp4"></clip></highlight>
<clip src="videos/le-boson-de-higgs.mp4" title="Qu'est-ce que le boson de Higgs?"></clip>
<doclink href="../videos">Manuel / Vidéos</doclink>
<br><br>

<h3>clipasset</h3>
<p><incode><clipasset></incode> permet d'inclure un video inline en boucle. Il est conseillé d'avoir un vidéo d'une largeur maximale de <em>770px</em>. Il est aussi recommandé de bien compresser son vidéo avec la commande <incode>FFMPEG</incode> suivante:</p>
<highlight lang="console">> ffmpeg -y -i "input.mp4" -an -c:v libx264 -profile:v main -level:v 3.0 -pix_fmt yuv420p -preset veryslow -movflags faststart -crf 22 -vf "scale=770:-1" "output.mp4"</highlight>
<highlight lang="html"><clipasset src="./videos/king-crimson.mp4"></clipasset></highlight>
<clipasset src="./videos/king-crimson.mp4"></clipasset>
<p>Il est possible d'afficher le <incode><clipasset></incode> en format téléphone mobile. Pour ce faire utilisez <span class='inline-code'>mobile="true"</span></p>
<highlight lang="html"><clipasset src="anim-figma-appli-mobile.mov" mobile="true"></clipasset></highlight>
<clipasset src="../../582-201MO/wiki/images/exercice-cours13-appli-mobile.mov" mobile="true"></clipasset>

<dots></dots>



<!--
     _             _ _
    / \  _   _  __| (_) ___  ___
   / _ \| | | |/ _` | |/ _ \/ __|
  / ___ \ |_| | (_| | | (_) \__ \
 /_/   \_\__,_|\__,_|_|\___/|___/

 -->

<grostitre>Audios</grostitre>

<h3>audioplayer</h3>
<highlight lang="html"><tune src="audios/careless-whisper.mp3"></tune></highlight>
<tune src="audios/careless-whisper.mp3"></tune>
<doclink href="../audios">Manuel / Audios</doclink>
<dots></dots>



<!--
   ____          _
  / ___|___   __| | ___ _ __   ___ _ __
 | |   / _ \ / _` |/ _ \ '_ \ / _ \ '_ \
 | |__| (_) | (_| |  __/ |_) |  __/ | | |
  \____\___/ \__,_|\___| .__/ \___|_| |_|
                       |_|
 -->

<grostitre>Codepen</grostitre>

<p>Par défaut, si l'attribut <incode>tab</incode> n'est pas spécifié, les tabs HTML et Result sont affichés.</p>

<h3>Exemples:</h3>
<highlight lang="html"><codepen id="gOEwrvG" tab="result"></codepen></highlight>
<codepen id="gOEwrvG" tab="result"></codepen>

<highlight lang="html"><codepen id="gOEwrvG" tab="css,result" height="500"></codepen></highlight>
<codepen id="gOEwrvG" tab="css,result" height="500"></codepen>

<highlight lang="html"><codepen id="gOEwrvG" notab="true" height="400"></codepen></highlight>
<codepen id="gOEwrvG" notab="true" height="400"></codepen>

<dots></dots>



<!--
   ____                         _   _
  / ___|___  _ __ _ __ ___  ___| |_(_) ___  _ __
 | |   / _ \| '__| '__/ _ \/ __| __| |/ _ \| '_ \
 | |__| (_) | |  | | |  __/ (__| |_| | (_) | | | |
  \____\___/|_|  |_|  \___|\___|\__|_|\___/|_| |_|

 -->

<grostitre>Correction</grostitre>

<p>Il est possible de créer un simulateur de correction avec les balises <incode>correction</incode> et <incode>criteria</incode>.</p>

<h3>Exemple:</h3>
<highlight lang="html">
<correction scale="Excellent, Bon, Moyen, Médiocre, Absent" value="10">
    <criteria value="20">Album</criteria>
    <criteria value="20">Textes</criteria>
    <criteria value="20">Mains</criteria>
    <criteria value="20">Transitions</criteria>
    <criteria value="5">Débrouillardise</criteria>
    <criteria value="5">Clareté du code</criteria>
    <criteria value="5">Suivi des consignes</criteria>
    <criteria value="5">Remise</criteria>
</correction>
</highlight>

<correction scale="Excellent, Bon, Moyen, Médiocre, Absent" value="10">
    <criteria value="20">Album</criteria>
    <criteria value="20">Textes</criteria>
    <criteria value="20">Mains</criteria>
    <criteria value="20">Transitions</criteria>
    <criteria value="5">Débrouillardise</criteria>
    <criteria value="5">Clareté du code</criteria>
    <criteria value="5">Suivi des consignes</criteria>
    <criteria value="5">Remise</criteria>
</correction>

<dots></dots>




<!--
 __        ___ _    _
 \ \      / (_) | _(_)
  \ \ /\ / /| | |/ / |
   \ V  V / | |   <| |
    \_/\_/  |_|_|\_\_|

 -->

<grostitre>Wiki Teams</grostitre>

<p>Comme le wiki suit le thème de Timdoc, il sera affiché par défaut en thème <incode>light</incode> dans Teams. Il est possible de forcer le thème en l'ajoutant à l'adresse url.</p>

<highlight lang="console">
https://tim-montmorency.com/timdoc/582-215MO/wiki/?light
https://tim-montmorency.com/timdoc/582-215MO/wiki/?dark
</highlight>

<h3>wiki-page</h3>

<p>La balise <incode><wiki-page></incode> ne doit être utilisée que dans une page de type <incode>wiki</incode>.</p>

<highlight lang="html">
&lt;?php
/**
 * @type     wiki
 * @title    Wiki - Intégration Web
 * @icon     images/icon.png
 * @abstract Intégration Web
 */
?&gt;

&lt;wiki-page name=&quot;Cours 01A&quot; date=&quot;2023-05-09&quot;&gt;
    &lt;intlink href=&quot;../css/anatomie/&quot;&gt;&lt;/intlink&gt;
    &lt;intlink href=&quot;../css/selecteurs/&quot;&gt;&lt;/intlink&gt;
    &lt;intlink href=&quot;../css/selecteurs/exercices/css-diner/&quot;&gt;&lt;/intlink&gt;
    &lt;intlink href=&quot;../autres/chemins/&quot;&gt;&lt;/intlink&gt;
    &lt;intlink href=&quot;../autres/chemins/exercices/pokemon/&quot;&gt;&lt;/intlink&gt;
&lt;/wiki-page&gt;
</highlight>

<timg src="./images/wiki-$t.webp" class="full"></timg>
<doclink href="../page-types/">Types de pages</doclink>

<dots></dots>