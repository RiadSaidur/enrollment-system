const container = document.querySelector('.container')
const ham = document.querySelector('.ham')
const menu = document.querySelector('.menu')

let show = false

ham.addEventListener('click', () => {
  show = !show

  show ?
    menu.style.display = 'flex' :
    menu.style.display = 'none'

})

container.addEventListener('click', () => {
  if(show) {
    menu.style.display = 'none'
    show = !show
  }
})