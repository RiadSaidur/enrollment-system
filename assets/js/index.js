window.addEventListener('load', () => {

  const deleteInfo = async () => {
    const origin = window.location.origin
    const rawResponse = await fetch(`${origin}/api/deleteInfo.php${window.location.search}`)
    console.log(rawResponse);
    closePopup()
    if(rawResponse.ok) {
      const el = document.querySelectorAll("form input")
      clearInput(el)
      showMsg({ msg: 'Document deleted successfully', type: 'success' })
    }
    else showMsg({ msg: 'There has been an error', type: 'error' })
  }

  const closePopup = () => {
    document.querySelector('.backdrop').style.display = 'none'
  }

  const openPopup = () => {
    document.querySelector('.backdrop').style.display = 'flex'
  }

  document.querySelector('#nope').addEventListener('click', () => {
    document.querySelector('.backdrop').style.display = 'none'  
  })

  const setValues = async () => {
    const query = window.location.search
    const origin = window.location.origin
    const res = await fetch(`${origin}/api/getStudentInfo.php${query}`)
    const data = await res.json()
    
    if(!data.length) {
      window.location.replace(`${origin}/search.php?exists=false`)
    }

    const inputs = document.querySelectorAll('input')
    const selects = document.querySelectorAll('select')
    const el = [...inputs, ...selects]

    for(let i=0; i<11; i++) el[i].value = data[0][el[i].name]

    document.querySelector('#submit').textContent = 'Update'
    document.querySelector('.container h1').textContent = 'Update Information'
  }

  const showMsg = content => {

    const msgNode = document.querySelector('.msg')
    msgNode.innerText = content.msg
    msgNode.className = `msg ${content.type}`

  }

  const clearMsg = e => {
    e.target.innerText = '',
    e.target.className = 'msg'
  }
  
  const clearInput = elements => {
    [...elements].forEach(element => {
      if (element.type === 'text' || element.type === 'number') element.value = ''
    })
  }

  const isUpdating = () => {
    const { search } = window.location
    if(search) {
      if(search.substr(1).startsWith('reg_no=') && parseInt(search.substr(1).split('reg_no=')[1])) {
        setValues()
        const dltCTA = document.querySelector('#delete')
        dltCTA.style.display = 'initial'
        dltCTA.addEventListener('click', openPopup)
      }
    }
  }

  // Everything starts here
  isUpdating()
  document.querySelector('.msg').addEventListener('click', clearMsg)
  // document.querySelector('#sure')?.addEventListener('click', deleteInfo)
  document.querySelector('#nope').addEventListener('click', closePopup)

});