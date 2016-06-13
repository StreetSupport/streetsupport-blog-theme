function Nav () {
  var self = this

  self.openElement = '.js-nav-open'
  self.closeElement = '.js-nav-close'
  self.overlayElement = '.js-nav-overlay'
  self.activeClass = 'is-active'
  self.el = document.querySelectorAll('.js-nav-container, .js-nav-push, .js-nav-overlay, html, body')

  self.init = function () {
    document.querySelector(self.openElement).addEventListener('click', function (e) {
      self.open()
    })

    document.querySelector(self.closeElement).addEventListener('click', function (e) {
      self.close()
    })

    document.querySelector(self.overlayElement).addEventListener('click', function (e) {
      self.close()
    })
  }

  self.open = function () {
    for (var i = 0; i < self.el.length; ++i) {
      self.el[i].classList.add(self.activeClass)
    }
  }

  self.close = function () {
    for (var i = 0; i < self.el.length; ++i) {
      self.el[i].classList.remove(self.activeClass)
    }
  }
}

var nav = new Nav()
nav.init()