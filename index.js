
window.addEventListener('load', () => {

  let display = true

  const hideSpans = () => {
    const spans = document.querySelectorAll('nav span')
    const arrow = document.querySelector('nav button img')

    if(display) {
      spans.forEach(span => span.style.display = "inline")
      arrow.style.transform = 'rotate(0deg)'
    } else {
      spans.forEach(span => span.style.display = "none")
      arrow.style.transform = 'rotate(180deg)'
    }

    display = !display
  }

  const collapse = document.querySelector('nav button')
  
  collapse.addEventListener('click', hideSpans)

});