function setCssVariables() {
  let vh = window.innerHeight * 0.01
  let breadcrumb = $('.breadcrumb-nav').innerHeight()

  let footer = $('#footer').innerHeight()
  document.documentElement.style.setProperty('--footer', `${footer}px`)

  let header = $('#header').innerHeight()
  document.documentElement.style.setProperty('--header', `${header}px`)

  document.documentElement.style.setProperty('--vh', `${vh}px`)
  document.documentElement.style.setProperty('--breadcrumb', `${breadcrumb}px`)

  let mainwrapperleft = $('.main-wrapper-left').innerWidth()
  document.documentElement.style.setProperty('--mainwrapperleft', `${mainwrapperleft}px`)
}

$(document).ready(function () {
  setCssVariables()
})

$(window).on('load', function () {
  setCssVariables()
})

$(window).on('resize', function () {
  setCssVariables()
})
