window.addEventListener('load', () => {

  const searchHandler = e => {
    if(e.key === 'Enter') {
      const { value } = e.target
      console.log(value)
    }
  }

  // Everything starts here
  document
    .querySelector('#search')
    .addEventListener('keyup', searchHandler)

})