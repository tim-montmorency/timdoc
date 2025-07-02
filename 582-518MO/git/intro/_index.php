<?php

/**
 * @type     article
 * @title    Introduction GIT
 * @icon     images/icon.svg
 * @abstract L'introduction à Git, un outil de gestion de versions
 * @index 100
 */
?>

<!-- acces au contenu complet via https://web.archive.org/web/20231209061406/https://smnarnold.com/cours/git/introduction  -->


<p>Git est un outil qui vous protège de vous-même. Il permet en quelque sorte de faire
    des&nbsp;<em>"checkpoints"</em>&nbsp;ou en français, des points de sauvegarde 💾, dans un&nbsp;projet.</p>
<div class="image">

    <div class="image__wrapper image__wrapper--landscape">
        <video src="/web/20231209061406im_/https://smnarnold.com/assets/dark-soul-bonefire.mp4" autoplay="" muted=""
            loop="" class="image__gifv"></video>
    </div>



</div>

<p>Ainsi, vous pouvez modifier/briser/améliorer votre projet l'esprit tranquille, puisqu'il vous permet de revenir en
    arrière en cas de&nbsp;besoin.</p>


 <grostitre>Répertoire</grostitre>


<p>Un répertoire, en anglais&nbsp;<em>repository</em>&nbsp;ou son diminutif&nbsp;<em>repo</em>, est le nom donné au
    dossier 📂 devant être surveillé par Git. À chaque&nbsp;<em>commit</em>, tous les changements effectués à
    l'intérieur de celui-ci seront enregistrés par&nbsp;Git.</p>
<div class="image">

    <div class="image__wrapper image__wrapper--landscape">
        <img src="/web/20231209061406im_/https://smnarnold.com/assets/git-folder-icon.png" width="46" height="20" alt=""
            loading="lazy" class="image__image">
    </div>



</div>

<grostitre>Commit</grostitre>

<p>À tout moment, il est possible de sauvegarder en local&nbsp;<em>(sur son ordinateur)</em>&nbsp;l'avancement
    d'un&nbsp;projet 💾.</p>
<p>Cette étape est appelée&nbsp;<em>commit</em>.</p>



<p class="codepen" data-height="300" data-theme-id="light" data-default-tab="html,result" data-slug-hash="zxGQqRR" data-pen-title="Untitled" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/zxGQqRR">
  Untitled</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://public.codepenassets.com/embed/index.js"></script>



<grostitre>Push</grostitre>


<p>Idéalement, un&nbsp;<em>commit</em>&nbsp;est ensuite poussé vers le&nbsp;<em>cloud</em> ☁️.</p>
<p>Ce qu'on appel faire un&nbsp;<em>push</em> ⬆️.</p>


<p class="codepen" data-height="300" data-theme-id="light" data-default-tab="html,result" data-slug-hash="azOrNGG" data-pen-title="Git commit - anim demo" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/azOrNGG">
  Git commit - anim demo</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://public.codepenassets.com/embed/index.js"></script>


<p>Ainsi, il est possible de récupérer les changements les plus récents sur un projet et de continuer son avancement
    exactement où nous étions&nbsp;rendus.</p>



<aside class="note note--info">
    <div class="note__wrapper">
        <p>Pour continuer la métaphore du jeu vidéo, l’équivalent serait de faire une sauvegarde en ligne. Ainsi, même
            si votre console brise ou si vous êtes en visite, vous pouvez récupérer votre partie et la continuer sur une
            autre&nbsp;console.</p>

    </div>
</aside>


<dots></dots>
<grostitre>Branches</grostitre>
<p>Par défaut, tous les&nbsp;<em>repos</em>&nbsp;ont une branche principale appelée&nbsp;<em>main</em> ou
    <em>master</em>. Lorsqu'un&nbsp;<em>push</em>&nbsp;est effectué, les changements sont envoyés vers cette branche.
</p>
<p>Cependant, il est parfois préférable de laisser la branche&nbsp;principale<em> </em>indemne. Par exemple, à
    l'approche d'une démonstration client où l'on souhaite s'assurer qu'aucun bug ne vienne perturber la présentation.
    Néanmoins, arrêter de travailler quelques jours avant la présentation, simplement pour éviter un potentiel bug lors
    d'une présentation représente une perte de temps non négligeable. Il est donc préférable de créer une nouvelle
    branche à partir de la branche principale&nbsp;et de travailler sur celle-ci&nbsp;plutôt.</p>
<p>Ainsi, il est possible de présenter la branche principale&nbsp;l'esprit en paix sachant qu'aucun bug de dernière
    minute ne risque de faire son apparition. Lorsque la présentation est passée ou que les changements sur la nouvelle
    branche sont complétés, il est possible de&nbsp;<em>merger</em>&nbsp;la nouvelle branche vers la branche
    principale&nbsp;afin d'y incorporer ses&nbsp;changements.</p>




<aside class="tool-card">
    <div class="tool-card__content">
        <em class="tool-card__tagline">🛠 Outil</em><br class="tool-card__break">
        <a href="https://web.archive.org/web/20231209061406/https://learngitbranching.js.org/?locale=fr_FR"
            target="_blank" rel="noopener noreferrer" class="tool-card__title">
            <strong>Apprenez Git&nbsp;Branching</strong>
        </a>

        <p class="tool-card__description">Un outil de visualisation Git interactif pour s’éduquer et se&nbsp;challenger!
        </p>
    </div>

    <picture class="tool-card__preview">
        <source
            srcset="/web/20231209061406im_/https://smnarnold.com/img/asset/YXNzZXRzL3Rvb2xzL2FwcHJlbmV6LWd1aXQtYnJhbmNoaW5nLmpwZw==?w=620&amp;s=15436e1148bb728a0d6d99b1dc15dbee"
            media="(max-width: 575px) and (min-resolution: 2dppx)">
        <source
            srcset="/web/20231209061406im_/https://smnarnold.com/img/asset/YXNzZXRzL3Rvb2xzL2FwcHJlbmV6LWd1aXQtYnJhbmNoaW5nLmpwZw==?w=310&amp;s=e5191daaa32564694947bf8ee7adc746"
            media="(max-width: 575px)">
        <source
            srcset="/web/20231209061406im_/https://smnarnold.com/img/asset/YXNzZXRzL3Rvb2xzL2FwcHJlbmV6LWd1aXQtYnJhbmNoaW5nLmpwZw==?w=370&amp;s=8973dd937717bf0800c6a02fb4924562"
            media="(min-resolution: 2dppx)">
        <img src="/web/20231209061406im_/https://smnarnold.com/img/asset/YXNzZXRzL3Rvb2xzL2FwcHJlbmV6LWd1aXQtYnJhbmNoaW5nLmpwZw==?w=185&amp;s=5ced4486fe08b3126af4467cbcd4f92a"
            width="" height="" loading="lazy" class="tool-card__image" style="object-position: 50% 50%;">&gt;
    </picture>
</aside>