(function () {
  this.AppendPopup = function () {
    this.isOpen = false;
    this.msg = window.console;

    var defaultSettings = {};

    if (arguments[0] && typeof arguments[0] === "object") {
      this.settings = Object.assign({}, defaultSettings, arguments[0]);
    }

    init.call(this);
  }

  function init() {
    createDom.call(this);
    bind.call(this);
  }

  function createDom() {
    this.dom = {
      popup: document.createElement('aside'),
      background: document.createElement('span'),
      content: document.createElement('div'),
      title: document.createElement('strong'),
      text: document.createElement('p'),
    }

    this.dom.popup.classList.add('appendPopup');
    this.dom.background.classList.add('appendPopup__background');
    this.dom.content.classList.add('appendPopup__content');
    this.dom.title.classList.add('appendPopup__title');
    this.dom.text.classList.add('appendPopup__text');

    this.dom.popup.style.color = this.settings.color;
    this.dom.title.innerHTML = this.settings.title;
    this.dom.text.innerHTML = this.settings.text;
    if (this.settings.background) {
      this.dom.content.style.backgroundImage = `url(${this.settings.background})`;
    }

    this.dom.content.appendChild(this.dom.title);
    this.dom.content.appendChild(this.dom.text);
    this.dom.popup.appendChild(this.dom.background);
    this.dom.popup.appendChild(this.dom.content);
    this.dom.popup.style.setProperty('--color', this.settings.color);
    document.body.appendChild(this.dom.popup);
    
    this.el = this.dom.popup;
  }

  function bind() {
    this.dom.background.addEventListener('click', () => toggle.call(this, false));
  }

  function toggle(state) {
    this.open = state;
    this.dom.popup.classList.toggle('is-visible', state);
  }

  AppendPopup.prototype.open = function() {
    toggle.call(this, true);

    this.msg.log(`%c${this.settings.title}
%c${this.settings.text}
%c${this.settings.ascii}`, `font-size: 16px; color: ${this.settings.color};`, `font-size: 20px; color: ${this.settings.color};`, `font-size: 5px; color: ${this.settings.color};`)
  }
}());