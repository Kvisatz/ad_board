/* global bootstrap: false */
(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
  let elemInputs = document.querySelectorAll('.input-dis')
  let button = document.querySelector('.remover-btn')
  console.log(button)
  button.addEventListener('click', ()=>{
    for(let elemInput of elemInputs){
        console.log(elemInput)
        
        elemInput.removeAttribute('disabled')
      }
  })
  
  
})()
