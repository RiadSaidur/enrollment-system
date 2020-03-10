window.addEventListener('load', () => {

  let filterby = ''

  const setFilter = id => {
    filterby = id
    console.log(filterby)
  }

  const formhandler = e => {
    e.preventDefault()
    console.log(e.target.elements[0].value)
  }

  const doesExist = () => {
    if(search.substr(1).startsWith('exists')) {
      if(search.substr(1).split('exists=')[1] === 'false') {
        console.log('ok')
      }
    }
  }

  const filters = [...document.querySelectorAll('input[type="radio"]')]
  const { search } = window.location
  
  // Everything starts here
  doesExist()
  filters
    .forEach(filter => filter.addEventListener('click', () => setFilter(filter.id)))
  document
    .querySelector('form')
    .addEventListener('submit', formhandler)

})