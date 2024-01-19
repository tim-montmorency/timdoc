<?php 
/**
 * @index    9
 * @type     article
 * @title    Composantes
 * @icon     images/icon.png
 * @abstract Tout est préfait pour toi
 */
?>

<p>Afin d'en faciliter l'utilisation, <strong><em>Timdoc</em></strong> a été monté en composantes <a target="_blank" href="https://vuejs.org/">VueJS</a>.</p>

<dots></dots>


<grostitre>Titre de section</grostitre>

<h3>grostitre</h3>

<p>La composante <span class="inline-code">&lt;grostitre&gt;</span> remplace les <span class="inline-code">&lt;h1&gt;</span>, créent une ancre et l'ajoute à la table des matières automatiquement.<br><br>Exemple de cette section:</p>

<highlight lang="html"><grostitre>Titre de section</grostitre></highlight>



<h3>dots</h3>

<p>La composante <incode>&lt;dots&gt;</incode> est utilisée pour séparer les différentes sections d'une page.</p>

<highlight lang="html">&lt;dots&gt;&lt;/dots&gt;</highlight>

<dots></dots>


<grostitre>Bulles d'informations</grostitre>

<h3>info</h3>
<highlight lang="html"><info>Ceci est une bulle d'information</info></highlight>
<info>Ceci est une bulle d'information</info>
<br><br>

<h3>warning</h3>
<highlight lang="html"><warning>Ceci est une bulle d'avertissement</warning></highlight>
<warning>Ceci est une bulle d'avertissement</warning>
<br><br>

<h3>alert</h3>
<highlight lang="html"><alert>Ceci est une bulle d'alerte</alert></highlight>
<alert>Ceci est une bulle d'alerte</alert>
<br><br>

<h3>thumbsup</h3>
<highlight lang="html"><thumbsup>Ceci est une bulle d'approbation</thumbsup></highlight>
<thumbsup>Ceci est une bulle d'approbation</thumbsup>
<br><br>

<h3>bravo</h3>
<highlight lang="html"><bravo>Ceci est une bulle d'applaudissement</bravo></highlight>
<bravo>Ceci est une bulle d'applaudissement</bravo>

<dots></dots>


<grostitre>Liens médias</grostitre>

<h3>mediafile</h3>
<highlight lang="html"><mediafile src="images/icon.png">Icône</mediafile></highlight>
<mediafile src="images/icon.png">Icône</mediafile>

<h3>doclink</h3>
<highlight lang="html">
<doclink href="https://www.w3schools.com/cssref/css3_pr_flex-direction.php">flex-direction</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/flex-direction">flex-direction</doclink>
</highlight>
<doclink href="https://www.w3schools.com/cssref/css3_pr_flex-direction.php">flex-direction</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/flex-direction">flex-direction</doclink>

<h3>intlink</h3>
<highlight lang="html">&lt;intlink href=&quot;../../582-215MO/css/exercices/lost-highway/&quot;&gt;&lt;/intlink&gt;</highlight>
<intlink href="../../582-215MO/css/exercices/lost-highway/"></intlink>

<h3>exercice</h3>
<highlight lang="html">&lt;exercice href="exercices/flexbox-defense"&gt;&lt;/exercice&gt;</highlight>
<exercice href="exercices/flexbox-defense"></exercice>

<h3>tool</h3>
<highlight lang="html">&lt;tool href="tools/css-gradient"&gt;&lt;/tool&gt;</highlight>
<tool href="tools/css-gradient"></tool>


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


<grostitre>Surbrillance</grostitre>

<h3>incode</h3>
<highlight lang="html">Utilisez la proprité <incode>transform</incode>.</highlight>
Utilisez la proprité <incode>transform</incode>.<br>


<h3>highlight</h3>
<highlight lang="html">&lt;highlight lang="javascript"&gt;console.log("Ceci est du javascript");&lt;/highlight&gt;</highlight>
<highlight lang="javascript">console.log("Ceci est du javascript");</highlight>
<doclink href="https://github.com/highlightjs/highlight.js/blob/main/SUPPORTED_LANGUAGES.md ">Languages supportés</doclink>

<dots></dots>


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



<grostitre>codepen</grostitre>
<highlight lang="html">&lt;codepen id="gOEwrvG" tab="results"&gt;Voici une remarque pertinente.&lt;/codepen&gt;</highlight>
<codepen id="gOEwrvG" tab="results">Voici une remarque pertinente.</codepen>
<dots></dots>







<grostitre>color</grostitre>
<highlight lang="html">&lt;color&gt;#e8b9ff&lt;/color&gt;
&lt;color&gt;#e2a6f8&lt;/color&gt;
&lt;color&gt;#5638f9&lt;/color&gt;</highlight>
<color>#e8b9ff</color>
<color>#e2a6f8</color>
<color>#5638f9</color>
<dots></dots>

<grostitre>clip</grostitre>
<highlight lang="html">&lt;clip src="videos/le-boson-de-higgs.mp4"&gt;&lt;/clip&gt;</highlight>
<clip src="videos/le-boson-de-higgs.mp4" title="Qu'est-ce que le boson de Higgs?"></clip>
<doclink href="../videos">Manuel / Vidéos</doclink>
<dots></dots>

<grostitre>youtube</grostitre>
<p>Afin d'accélérer le chargement des pages contenant des vidéos, il est fortement conseillé d'utiliser la composante <incode>&lt;youtube src="id"&gt;&lt;/youtube&gt;</incode>.</p>
<highlight lang="html">&lt;youtube src="KVJBHSOx9jI"&gt;&lt;/youtube&gt;</highlight>
<youtube src="KVJBHSOx9jI"></youtube>
<dots></dots>

<grostitre>audioplayer</grostitre>
<highlight lang="html">&lt;audioplayer src="audios/careless-whisper.mp3"&gt;&lt;/audioplayer&gt;</highlight>
<audioplayer src="audios/careless-whisper.mp3"></audioplayer>
<doclink href="../audios">Manuel / Audios</doclink>
<dots></dots>



<grostitre>checklist</grostitre>
<highlight lang="html">&lt;checklist&gt;
    Bacon ipsum dolor amet pork loin shankle leberkas beef capicola porchetta ground round kevin meatball bresaola andouille.
    Andouille ham bresaola landjaeger meatloaf shoulder t-bone kielbasa salami corned beef porchetta ball tip.
    Brisket sirloin short loin beef shank swine ham hock hamburger spare ribs cupim.
    Chuck brisket bacon, bresaola buffalo drumstick pork chop strip steak boudin.
    Cow picanha fatback pastrami meatloaf biltong tongue shankle pork drumstick pork chop ribeye.
    Spare ribs shank hamburger shankle.
    Fatback sausage andouille, tenderloin ribeye ham short loin swine burgdoggen kielbasa capicola chuck spare ribs.
&lt;/checklist&gt;</highlight>
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


<grostitre>swiper</grostitre>
<highlight lang="html">&lt;swiper&gt;
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
&lt;/swiper&gt;</highlight>
<swiper>
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
</swiper>
<dots></dots>
