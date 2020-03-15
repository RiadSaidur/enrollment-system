window.addEventListener('load', () => {

  let filterby = ''

  const setFilter = id => {
    filterby = id
    console.log(filterby)
  }

  const formhandler = async e => {
    e.preventDefault()

    const query = `?field=${filterby}&value=${e.target.elements[0].value}`

    window.location.href = `/allStudents.php${query}`

    console.log(data)
  }

  const filters = [...document.querySelectorAll('input[type="radio"]')]
  
  // Everything starts here
  filters
    .forEach(filter => filter.addEventListener('click', () => setFilter(filter.id)))
  document
    .querySelector('form')
    .addEventListener('submit', formhandler)

})