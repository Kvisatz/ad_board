/* global bootstrap: false */
(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
  let elemInput = document.querySelectorAll('.input-dis')
  let button = document.querySelectorAll('.remover-btn')
  button.addEventListener()
  elem.forEach(function(){
    console.log(elem)
    elem.removeAttribute('disabled')
  })
})()
