<?php 
/**
 * @type     exercice
 * @title    Flexbox - Scrabble Potter
 * @icon     images/thumb.jpg
 * @abstract Déplacer les lettres d’un jeu de Scrabble afin d’afficher correctement le nom de cinq des personnages de la fameuse série littéraire Harry Potter.
 */
?>

<p>Pour cet exercice, vous devez déplacer les lettres d’un jeu de <a target="_blank" href="https://fr.wikipedia.org/wiki/Scrabble">Scrabble</a> afin d’afficher correctement le nom de cinq des personnages de la fameuse série littéraire <a target="_blank" href="https://fr.wikipedia.org/wiki/Harry_Potter">Harry Potter</a>. Pour ce faire vous devrez avoir recours à flexbox.<br><br>Aperçu du résultat 👇</p>

<img src="images/scrabble-potter-resultat.jpg">

<dots></dots>

<grostitre>Matériel</grostitre>

<doclink spacer="true" href="https://codepen.io/ZmotriN/pen/vYrPaYr?editors=1100">Pen de départ</doclink>

<dots></dots>

<highlight lang="javascript">const cyrb53 = (str, seed = 0) => {
    let h1 = 0xdeadbeef ^ seed,
      h2 = 0x41c6ce57 ^ seed;
    for (let i = 0, ch; i < str.length; i++) {
      ch = str.charCodeAt(i);
      h1 = Math.imul(h1 ^ ch, 2654435761);
      h2 = Math.imul(h2 ^ ch, 1597334677);
    }
    h1 = Math.imul(h1 ^ (h1 >>> 16), 2246822507) ^ Math.imul(h2 ^ (h2 >>> 13), 3266489909);
    h2 = Math.imul(h2 ^ (h2 >>> 16), 2246822507) ^ Math.imul(h1 ^ (h1 >>> 13), 3266489909);
    return decimalToHexString(4294967296 * (2097151 & h2) + (h1 >>> 0));
  };
});
</highlight>

<dots></dots>

<grostitre>Requis</grostitre>

<checklist>
    Ajustez les différents groupes de lettres <span class="inline-code">(.group)</span> afin qu'ils affichent de la bonne façon.
    Ajustez le plateau de jeu (.board) afin que tous les groupes de lettres se déplace au bon endroit.
</checklist>


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

<grostitre>Notes de cours</grostitre>

<doclink spacer="true" href="../../">Flexbox</doclink>

<dots></dots>