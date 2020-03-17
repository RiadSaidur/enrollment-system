window.addEventListener('load', () => {

  const searchHandler = e => {
    if(e.key === 'Enter') {
      window.location.href = `/allstudents.php?field=reg_no&value=${e.target.value}`
    }
  }

  // Everything starts here
  document
    .querySelector('#search')
    .addEventListener('keyup', searchHandler)

})