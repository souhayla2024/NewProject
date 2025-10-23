$(document).ready(function () {
  openSubMenu()
  closeInfo()
  currentTabActive()
  multiSelect()
  checkAllcheckbox()
})

function closeInfo() {
  $('.close-info').on('click', function () {
    $('.content-single-product-bottom').toggleClass('active')
    $('.tabulation-items').toggleClass('active')
  })
}

function checkAllcheckbox(container) {
  const selectAll = container.querySelector('.select-all')
  const items = container.querySelectorAll('.item-check')

  // Sélectionner tous
  selectAll.addEventListener('change', function () {
    items.forEach(item => {
      item.checked = this.checked
    })
  })

  // Mise à jour du "Sélectionner tous"
  items.forEach(item => {
    item.addEventListener('change', function () {
      // Ne regarde que les items de ce container
      selectAll.checked = Array.from(items).every(i => i.checked)
    })
  })
  // Initialiser chaque groupe séparément
}
document.querySelectorAll('.listing-chexbox').forEach(function (group) {
  checkAllcheckbox(group)
})

function multiSelect() {
  $('.multi-select-dropdown').each(function () {
    var $dropdown = $(this)
    var $btn_dropdown = $dropdown.find('.btn-dropdown')
    var $selected = $dropdown.find('.dropdown-selected')
    var $options = $dropdown.find('.dropdown-options')
    var $checkboxes = $options.find('input[type=checkbox]')

    // Ouvrir / fermer dropdown
    $btn_dropdown.on('click', function (e) {
      e.stopPropagation()
      $options.toggle()
    })

    // Ouvrir / fermer dropdown
    $selected.on('click', function (e) {
      e.stopPropagation()
      $options.toggle()
    })

    // Fermer si clic en dehors
    $(document).on('click', function (e) {
      if (!$dropdown.is(e.target) && $dropdown.has(e.target).length === 0) {
        $options.hide()
      }
    })

    // Mettre à jour les éléments sélectionnés
    $checkboxes.on('change', function () {
      var selectedValues = $checkboxes
        .filter(':checked')
        .map(function () {
          return $(this).val()
        })
        .get()

      if (selectedValues.length) {
        $selected.empty() // on vide
        selectedValues.forEach(function (val) {
          $selected.append(
            '<div class="selected-item">' + val + '<span class="remove-item">×</span></div>'
          )
        })
      } else {
        $selected.text('Toutes les catégories').addClass('placeholder')
      }
    })

    // Supprimer via croix
    $selected.on('click', '.remove-item', function (e) {
      e.stopPropagation()
      var $item = $(this).parent()
      var val = $item.text().slice(0, -1) // retirer la croix
      $item.remove()
      // décocher la checkbox correspondante
      $checkboxes
        .filter(function () {
          return $(this).val() === val
        })
        .prop('checked', false)
        .trigger('change')
    })
  })
}

function currentTabActive() {
  $('.tabulation-items li:first').addClass('active')
  $('.tabulation-items li').on('click', function () {
    $('.tabulation-items li').removeClass('active')
    $(this).addClass('active')
  })
}
function openSubMenu() {
  $('.link-item-list-menu-nav').click(function (e) {
    // $('.sub-menu-items').removeClass('is-open')
    $(this).siblings('.sub-menu-items').toggleClass('is-open')
  })
}
