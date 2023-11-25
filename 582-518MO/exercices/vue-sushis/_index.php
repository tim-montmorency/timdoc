<?php
/**
 * @type     exercice
 * @title    Vue - Sushis
 * @icon     images/pink-palette-resultat.png
 * @abstract 
 */
?>

<p>Pour cet exercice, vous devez compléter un menu d’un restaurant de sushis 🍣 permettant de visualiser le détail d’une commande en temps&nbsp;réel.</p>
<p>Aperçu du résultat 👇</p>
<clipasset src='images/vue-sushis-resultat.mp4'></clipasset>
<dots></dots>
<grostitre>Matériel</grostitre>
<a href="https://ex.smnarnold.com/vue/sushis/prenom-nom.zip" target="_blank" rel="noopener noreferrer" download="" class="starting-files">
            Dossier de départ 📁
</a>

  <h3 class="heading heading--h3" id="Couleurs 🎨">Couleurs 🎨</h3>


  <table class="colors-list__table">
      <tbody><tr>
              <td>Bleu sombre</td>
            <td>
        <span class="colors-list__color-code" style="background-color: #586F7C; color: #fff;">
          #586F7C
          <button data-module="CopyToClipboard" data-text="#586F7C" data-snackbar="Couleur copiée." title="Copier dans le presse-papier" class="colors-list__copy">
            <span class="visually-hidden">Copier dans le presse-papier</span>
            
            <span class="colors-list__copy__mask" style="background-color: #fff;">
            </span>
            
            <svg viewBox="0 0 896 1024">
              <path d="M704 896H64V320h640v192h64V192c0-35-29-64-64-64H512C512 57 455 0 384 0S256 57 256 128H64c-35 0-64 29-64 64v704c0 35 29 64 64 64h640c35 0 64-29 64-64V768h-64v128zM192 192h64s64-29 64-64 29-64 64-64 64 29 64 64 32 64 64 64h64s64 29 64 64H128c0-39 28-64 64-64zm-64 512h128v-64H128v64zm448-128V448L320 640l256 192V704h320V576H576zM128 832h192v-64H128v64zm320-448H128v64h320v-64zM256 512H128v64h128v-64z"></path>
            </svg>
          </button>
        </span>
        
      </td>
    </tr>
      <tr>
              <td>Bleu charbon</td>
            <td>
        <span class="colors-list__color-code" style="background-color: #2F4550; color: #fff;">
          #2F4550
          <button data-module="CopyToClipboard" data-text="#2F4550" data-snackbar="Couleur copiée." title="Copier dans le presse-papier" class="colors-list__copy">
            <span class="visually-hidden">Copier dans le presse-papier</span>
            
            <span class="colors-list__copy__mask" style="background-color: #fff;">
            </span>
            
            <svg viewBox="0 0 896 1024">
              <path d="M704 896H64V320h640v192h64V192c0-35-29-64-64-64H512C512 57 455 0 384 0S256 57 256 128H64c-35 0-64 29-64 64v704c0 35 29 64 64 64h640c35 0 64-29 64-64V768h-64v128zM192 192h64s64-29 64-64 29-64 64-64 64 29 64 64 32 64 64 64h64s64 29 64 64H128c0-39 28-64 64-64zm-64 512h128v-64H128v64zm448-128V448L320 640l256 192V704h320V576H576zM128 832h192v-64H128v64zm320-448H128v64h320v-64zM256 512H128v64h128v-64z"></path>
            </svg>
          </button>
        </span>
        
      </td>
    </tr>
      <tr>
              <td>Bleu poudre</td>
            <td>
        <span class="colors-list__color-code" style="background-color: #B8DBD9; color: #000;">
          #B8DBD9
          <button data-module="CopyToClipboard" data-text="#B8DBD9" data-snackbar="Couleur copiée." title="Copier dans le presse-papier" class="colors-list__copy">
            <span class="visually-hidden">Copier dans le presse-papier</span>
            
            <span class="colors-list__copy__mask" style="background-color: #000;">
            </span>
            
            <svg viewBox="0 0 896 1024">
              <path d="M704 896H64V320h640v192h64V192c0-35-29-64-64-64H512C512 57 455 0 384 0S256 57 256 128H64c-35 0-64 29-64 64v704c0 35 29 64 64 64h640c35 0 64-29 64-64V768h-64v128zM192 192h64s64-29 64-64 29-64 64-64 64 29 64 64 32 64 64 64h64s64 29 64 64H128c0-39 28-64 64-64zm-64 512h128v-64H128v64zm448-128V448L320 640l256 192V704h320V576H576zM128 832h192v-64H128v64zm320-448H128v64h320v-64zM256 512H128v64h128v-64z"></path>
            </svg>
          </button>
        </span>
        
      </td>
    </tr>
  
  </tbody></table>



  <dots></dots>
  <grostitre>Requis CSS</grostitre>



            
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
      </span></label><p>Centrez horizontalement ↔️ et verticalement ↕️ les items du menu.</p></li><li class="to-do__item">
      <label class="to-do__checkbox">
        <input type="checkbox" class="visually-hidden" tabindex="-1">
        <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
        <span class="to-do__toggle">
          <span class="to-do__number">
            2
          </span>
          <span class="to-do__checkmark">✓</span>
        </span>
      </span></label><p>Chaque item du menu doit avoir une largeur de 150px et un espace de 15px entre eux. Autant d'items que possible doivent s'afficher sur une seule ligne.</p></li><li class="to-do__item">
      <label class="to-do__checkbox">
        <input type="checkbox" class="visually-hidden" tabindex="-1">
        <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
        <span class="to-do__toggle">
          <span class="to-do__number">
            3
          </span>
          <span class="to-do__checkmark">✓</span>
        </span>
      </span></label><p>Les boutons ➖ et ➕doivent avoir une dimension de 40x40px, être bleu sombre par défaut et bleu charbon au survole.</p></li><li class="to-do__item">
      <label class="to-do__checkbox">
        <input type="checkbox" class="visually-hidden" tabindex="-1">
        <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
        <span class="to-do__toggle">
          <span class="to-do__number">
            4
          </span>
          <span class="to-do__checkmark">✓</span>
        </span>
      </span></label><p>La bulle de total doit avoir une dimension de 150x150px, être bleu poudre et le prix à l'intérieur doit avoir une taille de police de 40px. </p></li></ol>










<dots></dots>
<grostitre>>Requis Vue</grostitre>
            
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
      </span></label><p>Importez le cadriciel Vue via CDN dans le projet et connectez votre app Vue au HTML.</p></li><li class="to-do__item">
      <label class="to-do__checkbox">
        <input type="checkbox" class="visually-hidden" tabindex="-1">
        <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
        <span class="to-do__toggle">
          <span class="to-do__number">
            2
          </span>
          <span class="to-do__checkmark">✓</span>
        </span>
      </span></label><p>Créez une composante intitulée <em>"sushi"</em>. Cette composante devra être utilisée pour générer l'aperçu de chaque item sur le menu via une boucle Vue.</p></li><li class="to-do__item">
      <label class="to-do__checkbox">
        <input type="checkbox" class="visually-hidden" tabindex="-1">
        <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
        <span class="to-do__toggle">
          <span class="to-do__number">
            3
          </span>
          <span class="to-do__checkmark">✓</span>
        </span>
      </span></label><p>Les boutons ➖ et ➕ doivent permettre de diminuer/augmenter le nombre de sushis de chaque sorte respective. Attention, un nombre de sushis ne peut jamais être négatif.</p></li><li class="to-do__item">
      <label class="to-do__checkbox">
        <input type="checkbox" class="visually-hidden" tabindex="-1">
        <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
        <span class="to-do__toggle">
          <span class="to-do__number">
            4
          </span>
          <span class="to-do__checkmark">✓</span>
        </span>
      </span></label><p>Utilisez des propriétés calculées afin d'afficher en temps réel le nombre de morceaux ainsi que le prix total lorsque des sushis sont ajoutés/retirés. </p></li></ol>
      
    </div>
