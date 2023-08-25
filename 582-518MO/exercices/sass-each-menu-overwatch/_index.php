<?php
/**
 * @type     exercice
 * @title    Menu Overwatch
 * @icon     images/thumb-overwatch.jpg
 * @abstract Utiliser @each du langage Sass pour recréer un menu permettant de choisir parmi certains personnages du jeu Overwatch.
 */
?>
<p>Pour cet exercice vous devez recréer un menu permettant de choisir parmi certains personnages du jeu <a href="https://playoverwatch.com/fr-fr/">Overwatch</a>. Afin d’éviter de vous répéter, vous devrez tirer profit de la boucle <code>@each</code> de&nbsp;Scss.</p>

    
    
<p>Aperçu du résultat 👇</p>
<clipasset src='images/each-menu-overwatch-resultat.mp4'></clipasset>
<grostitre>Matériel</grostitre>

<doclink href='https://codepen.io/tim-momo/pen/oNJjzYo'></doclink>


  <h3 class="heading heading--h3" id="Médias 🖼️">Médias 🖼️</h3>

  <mediafile src="images/img1.jpg">Image 1</mediafile>
  
  <div class="medias-list__wrapper">

      
    <div class="medias-list__item">
      <div class="medias-list__desc">
                <span class="medias-list__preview" style="background-image: url(https://ex.smnarnold.com/scss/overwatch/bg.jpg), linear-gradient(45deg, #cbcccc 25%, transparent 25%, transparent 75%, #cbcccc 75%, #cbcccc),
          linear-gradient(45deg, #cbcccc 25%, white 25%, white 75%, #cbcccc 75%, #cbcccc);"></span>
                <span class="medias-list__name">
          Arrière-plan
        </span>
        <button data-module="CopyToClipboard" data-text="https://ex.smnarnold.com/scss/overwatch/bg.jpg" data-snackbar="URL du média copié." title="Copier dans le presse-papier" class="medias-list__copy">
          <span class="visually-hidden">Copier dans le presse-papier</span>
          <span class="medias-list__copy__mask"></span>
          <svg viewBox="0 0 896 1024">
            <path d="M704 896H64V320h640v192h64V192c0-35-29-64-64-64H512C512 57 455 0 384 0S256 57 256 128H64c-35 0-64 29-64 64v704c0 35 29 64 64 64h640c35 0 64-29 64-64V768h-64v128zM192 192h64s64-29 64-64 29-64 64-64 64 29 64 64 32 64 64 64h64s64 29 64 64H128c0-39 28-64 64-64zm-64 512h128v-64H128v64zm448-128V448L320 640l256 192V704h320V576H576zM128 832h192v-64H128v64zm320-448H128v64h320v-64zM256 512H128v64h128v-64z"></path>
          </svg>
        </button>
      </div>

      <div class="medias-list__url">
        https://ex.smnarnold.com/scss/overwatch/bg.jpg
      </div>
    </div>
      
  </div>
</div>


    
    <div class="bard wysiwyg" data-module="BardExercice">
            
      <div class="to-do__progress">
        <span class="to-do__progress__percent">0%</span>
        <progress class="to-do__progress__bar" max="100" value="0">0%</progress>
      </div><ol start="1" class="to-do"><li class="to-do__item">
      <label class="to-do__checkbox">
        <input type="checkbox" class="visually-hidden" tabindex="-1">
        <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
        <span class="to-do__toggle">
          <span class="to-do__number">
            1
          </span>
          <span class="to-do__checkmark">✓</span>
        </span>
      </span></label><p>Ajoutez l'image d'arrière-plan en fond de page. Celle-ci doit couvrir entièrement la page, être centrée et ne doit afficher qu'une seule fois.</p></li><li class="to-do__item">
      <label class="to-do__checkbox">
        <input type="checkbox" class="visually-hidden" tabindex="-1">
        <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
        <span class="to-do__toggle">
          <span class="to-do__number">
            2
          </span>
          <span class="to-do__checkmark">✓</span>
        </span>
      </span></label><p>Faites-en sorte que l'élément avec la classe <code>.overwatch</code> soit centré verticalement ↕️ dans la page.</p></li><li class="to-do__item">
      <label class="to-do__checkbox">
        <input type="checkbox" class="visually-hidden" tabindex="-1">
        <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
        <span class="to-do__toggle">
          <span class="to-do__number">
            3
          </span>
          <span class="to-do__checkmark">✓</span>
        </span>
      </span></label><p>Les personnages <em>(.characters)</em> doivent être centrés horizontalement ↔️, doivent pouvoir s'afficher sur plusieurs lignes, mais tenter de s'afficher autant que possible sur une même ligne si l'espace le permet.</p></li><li class="to-do__item">
      <label class="to-do__checkbox">
        <input type="checkbox" class="visually-hidden" tabindex="-1">
        <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
        <span class="to-do__toggle">
          <span class="to-do__number">
            4
          </span>
          <span class="to-do__checkmark">✓</span>
        </span>
      </span></label><p>Utilisez une boucle <code>@each</code> afin de générer des noms de classes ciblant chacun des personnages suivants: <em>echo, genji, hanzo, junkrat, lucio, mccree, mercy, moira, orisa, pharah, reaper, reinhardt</em></p></li><li class="to-do__item">
      <label class="to-do__checkbox">
        <input type="checkbox" class="visually-hidden" tabindex="-1">
        <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
        <span class="to-do__toggle">
          <span class="to-do__number">
            5
          </span>
          <span class="to-do__checkmark">✓</span>
        </span>
      </span></label><p>Pour chacun de ces personnages, ajouter une image d'arrière-plan dont le chemin de fichier correspond à: <code>https://ex.smnarnold.com/scs/overwatch/[nom du personnage].jpg</code> et assurez que cette image soit entièrement visible <em>(les noms des personnages ne devraient pas être tronqués)</em>.</p></li><li class="to-do__item">
      <label class="to-do__checkbox">
        <input type="checkbox" class="visually-hidden" tabindex="-1">
        <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
        <span class="to-do__toggle">
          <span class="to-do__number">
            6
          </span>
          <span class="to-do__checkmark">✓</span>
        </span>
      </span></label><p>Profitez du nesting de Scss afin de créer un effet de survole sur les personnages. Ceux-ci doivent grandir de 10% en l'espace d'un tiers de seconde, lorsque survolé par la souris.</p></li></ol>
      
    </div>

    <section class="course-notes">
  <div class="course-notes__wrapper">
    <h2 class="heading heading--h2" id="Notes de cours 📚">Notes de cours 📚<a href="#Notes de cours 📚" aria-hidden="true" class="heading__anchor" data-module="CopyToClipboard" data-text="https://smnarnold.com/exercices/sass/each-menu-overwatch#Notes de cours 📚" data-snackbar="Lien copié.">
    <span class="heading__anchor__wrapper">
      <svg viewBox="0 0 24 24">
        <path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"></path>
      </svg>
    </span>
  </a>
  </h2>


        <ul class="course-notes__list wysiwyg">
      <li class="course-notes__item">
                  <span class="course-notes__preview">
            B
          </span>
        
        <a href="/cours/sass/boucles" target="_blank" class="course-notes__link">
          Boucles
        </a>
      </li>
    </ul>
        <ul class="course-notes__list wysiwyg">
      <li class="course-notes__item">
                  <span class="course-notes__preview">
            F
          </span>
        
        <a href="/cours/css/flexbox" target="_blank" class="course-notes__link">
          Flexbox
        </a>
      </li>
    </ul>
        <ul class="course-notes__list wysiwyg">
      <li class="course-notes__item">
                            <img src="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvdHJhbnNmb3JtLmpwZw==?h=100&amp;s=40e46a232771da433ffe5570a36e216f" alt="transform.jpg" width="150" height="100" class="course-notes__preview">
          
        
        <a href="/cours/css/transformation" target="_blank" class="course-notes__link">
          Transformation
        </a>
      </li>
    </ul>
        <ul class="course-notes__list wysiwyg">
      <li class="course-notes__item">
                            <img src="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvdHJhbnNpdGlvbi5wbmc=?h=100&amp;s=9af3169abcc41eefd40c13cbfa7bc965" alt="transition.png" width="150" height="100" class="course-notes__preview">
          
        
        <a href="/cours/css/transition" target="_blank" class="course-notes__link">
          Transition
        </a>
      </li>
    </ul>
    
  </div>
</section>

