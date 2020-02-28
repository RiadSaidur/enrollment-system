
window.addEventListener('load', () => {

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

    const rawResponse = await fetch('../api/add_student.php', {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
    if(rawResponse.ok) showMsg({ msg: 'Nice', type: 'success' })
    else showMsg({ msg: 'Fuck', type: 'error' })

    clearInput(el)

    console.log(rawResponse)
  }

  // Everything starts here
  document.querySelector('form').addEventListener('submit', formHandler)
  document.querySelector('.msg').addEventListener('click', clearMsg)

});