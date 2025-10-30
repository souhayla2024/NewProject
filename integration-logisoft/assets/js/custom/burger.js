$(document).ready(function () {
  menuBurger()
  // relloverMenuBurger()
})

function menuBurger() {
  const burger = $('.burger-nav')
  const wrapper = $('#main-wrapper')

  burger.on('click', function () {
    const isActive = wrapper.hasClass('active')
    wrapper.toggleClass('active')

    // Indique si le menu a été ouvert par clic
    wrapper.data('clicked', !isActive)
  })
}

function relloverMenuBurger() {
  const left = $('.menu-nav')
  const wrapper = $('#main-wrapper')

  left.on('mouseenter', function () {
    // si le menu n’a pas été ouvert par clic → hover actif
    if (!wrapper.data('clicked')) {
      wrapper.addClass('is-hovered')
    }
  })

  left.on('mouseleave', function () {
    // si le menu n’a pas été ouvert par clic → hover actif
    if (!wrapper.data('clicked')) {
      setTimeout(() => {
        // on vérifie encore que la souris n’est pas revenue entre temps
        if (!left.is(':hover')) {
          wrapper.removeClass('is-hovered')
        }
      }, 500)
    }
  })
}
