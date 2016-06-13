/* global ga */

function Accordion () {
  var self = this

  self.accordion = '.js-accordion'
  self.header = '.js-header'
  self.activeClass = 'is-active'

  self.init = function (showFirst, indexToOpen) {
    // If not supported, exit out
    if (!document.querySelector || !document.querySelectorAll || !document.body.classList) {
      return
    }

    var i
    var el = document.querySelector(self.accordion)
    var headers = document.querySelectorAll(self.header)
    var itemCount = headers.length

    // Add active class to first elements or if there is only one panel
    if (showFirst || itemCount === 1) {
      var firstHeader = headers[0]
      self.open(firstHeader, el)
    } else if (indexToOpen >= 0) {
      self.open(headers[indexToOpen], el)
    }

    // Add click listener to headers
    for (i = 0; i < headers.length; i++) {
      headers[i].addEventListener('click', function (e) {
        self.open(this, el)
      })
    }
  }

  self.open = function (el, context) {
    self.close(el, context)
    // Check to see if clicked header is already active
    if (!el.classList.contains(self.activeClass)) {
      // Add active classes for clicked header and the item div
      el.classList.add(self.activeClass)
      el.nextElementSibling.classList.add(self.activeClass)
    }
  }

  self.close = function (el, context) {
    var children = context.children
    console.log(children)
    // Remove active classes in accordion
    for (var b = 0; b < children.length; b++) {
      var grandChildren = children[b].childNodes
      for (var c = 1; c < grandChildren.length; c += 2) {
        grandChildren[c].classList.remove(self.activeClass)
      }
    }
  }
}

new Accordion().init(false, -1)
