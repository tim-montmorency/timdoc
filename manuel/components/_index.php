<?php 
/**
 * @type     article
 * @title    Composantes
 * @icon     images/icon.png
 * @abstract Tout est préfait pour toi
 */
?>

<p>Afin d'en faciliter l'utilisation, <strong><em>Timdoc</em></strong> a été monté en composantes <a target="_blank" href="https://vuejs.org/">VueJS</a>.</p>

<dots></dots>

<grostitre>info / warning / alert</grostitre>
<highlight lang="html">&lt;info&gt;Ceci est une bulle d'information&lt;/info&gt;</highlight>
<info>Ceci est une bulle d'information</info>
<br><br>
<highlight lang="html">&lt;warning&gt;Ceci est une bulle d'avertissement&lt;/warning&gt;</highlight>
<warning>Ceci est une bulle d'avertissement</warning>
<br><br>
<highlight lang="html">&lt;alert&gt;Ceci est une bulle d'alerte&lt;/alert&gt;</highlight>
<alert>Ceci est une bulle d'alerte</alert>
<dots></dots>

<grostitre>grostitre</grostitre>
<p>La composante <span class="inline-code">&lt;grostitre&gt;</span> remplace les <span class="inline-code">&lt;h1&gt;</span>, créent une ancre et l'ajoute à la table des matières automatiquement.<br><br>Exemple de cette section:</p>
<highlight lang="html">&lt;grostitre&gt;grostitre&lt;/grostitre&gt;</highlight>
<dots></dots>

<grostitre>mediafile</grostitre>
<highlight lang="html">&lt;mediafile src="images/icon.png"&gt;Icône&lt;/mediafile&gt;</highlight>
<mediafile src="images/icon.png">Icône</mediafile>
<dots></dots>

<grostitre>codepen</grostitre>
<highlight lang="html">&lt;codepen id="WNyYBpN"&gt;&lt;/codepen&gt;</highlight>
<codepen id="WNyYBpN"></codepen>
<dots></dots>

<grostitre>exercice</grostitre>
<highlight lang="html">&lt;exercice href="exercices/flexbox-defense"&gt;&lt;/exercice&gt;</highlight>
<exercice href="exercices/flexbox-defense"></exercice>
<dots></dots>

<grostitre>tool</grostitre>
<highlight lang="html">&lt;tool href="tools/css-gradient"&gt;&lt;/tool&gt;</highlight>
<tool href="tools/css-gradient"></tool>
<dots></dots>

<grostitre>knowmore</grostitre>
<highlight lang="html">&lt;knowmore href="https://fr.wikipedia.org/wiki/Monotremata"&gt;
    Les monotrèmes (Monotremata) constituent un ordre animal défini par
    Charles-Lucien Bonaparte en 1838, regroupant des espèces caractérisées
    par le fait d'être à la fois ovipares et mammifères : ils pondent des œufs
    mais allaitent leurs petits.
&lt;/knowmore&gt;</highlight>
<knowmore href="https://fr.wikipedia.org/wiki/Monotremata">Les monotrèmes (Monotremata) constituent un ordre animal défini par Charles-Lucien Bonaparte en 1838, regroupant des espèces caractérisées par le fait d'être à la fois ovipares et mammifères : ils pondent des œufs mais allaitent leurs petits.</knowmore>
<dots></dots>

<grostitre>doclink</grostitre>
<highlight lang="html">&lt;doclink href="https://www.w3schools.com/cssref/css3_pr_flex-direction.php"&gt;flex-direction&lt;/doclink&gt;
&lt;doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/flex-direction"&gt;flex-direction&lt;/doclink&gt;</highlight>
<doclink href="https://www.w3schools.com/cssref/css3_pr_flex-direction.php">flex-direction</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/flex-direction">flex-direction</doclink>
<dots></dots>

<grostitre>dots</grostitre>
<highlight lang="html">&lt;dots&gt;&lt;/dots&gt;</highlight>
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
<clip src="videos/le-boson-de-higgs.mp4"></clip>
<doclink href="../videos">Manuel / Vidéos</doclink>
<dots></dots>

<grostitre>audioplayer</grostitre>
<highlight lang="html">&lt;audioplayer src="audios/careless-whisper.mp3"&gt;&lt;/audioplayer&gt;</highlight>
<audioplayer src="audios/careless-whisper.mp3"></audioplayer>
<doclink href="../audios">Manuel / Audios</doclink>
<dots></dots>

<grostitre>highlight</grostitre>
<highlight lang="html">&lt;highlight lang="javascript"&gt;console.log("Ceci est du javascript");&lt;/highlight&gt;</highlight>
<highlight lang="javascript">console.log("Ceci est du javascript");</highlight>
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
    photos/01.jpg
    photos/02.jpg
    photos/03.jpg
    photos/04.jpg
    photos/05.jpg
    photos/06.jpg
    photos/07.jpg
    photos/08.jpg
    photos/09.jpg
    photos/10.jpg
&lt;/swiper&gt;</highlight>
<swiper>
    photos/01.jpg
    photos/02.jpg
    photos/03.jpg
    photos/04.jpg
    photos/05.jpg
    photos/06.jpg
    photos/07.jpg
    photos/08.jpg
    photos/09.jpg
    photos/10.jpg
</swiper>
<dots></dots>