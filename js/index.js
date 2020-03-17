
window.addEventListener('load', () => {

  const deleteInfo = async () => {
    const rawResponse = await fetch(`/api/deleteInfo.php${window.location.search}`)
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
      
  })

  const setValues = async () => {
    const query = window.location.search
    const res = await fetch(`../api/getStudentInfo.php${query}`)
    const data = await res.json()
    
    if(!data.length) {
      const { origin } = window.location
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

  const formHandler = async e => {
    e.preventDefault()
    const el = e.target.elements

    const data = {}

    for(let i=0; i<11; i++) data[el[i].name] = el[i].value

    let baseAPI = '../api/'

    const params = new URLSearchParams(window.location.search)

    if(params.has('reg_no')) baseAPI += 'updateInfo.php'
    else baseAPI += 'add_student.php'

    const rawResponse = await fetch(baseAPI, {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
    if(rawResponse.ok) {
      clearInput(el)
      showMsg({ msg: 'Document added successfully', type: 'success' })
    }
    else showMsg({ msg: 'There has been an error', type: 'error' })

    window.scrollTo(0, 0)
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
  document.querySelector('form').addEventListener('submit', formHandler)
  document.querySelector('.msg').addEventListener('click', clearMsg)
  document.querySelector('#sure').addEventListener('click', deleteInfo)
  document.querySelector('#nope').addEventListener('click', closePopup)

});