window.addEventListener('load', async () => {

  // getting referemce of ul
  const ulRef = document.querySelector('.container ul')

  // function to insert a new node
  const pushStudent = student => {
    const li = document.createElement('li')
    const a = document.createElement('a')

    for (let [key, value] of Object.entries(student)) {
      const span = document.createElement('span')
      span.innerText = value
      a.appendChild(span)
    }

    a.href = `./?reg_no=${student.reg_no}`

    li.appendChild(a)
    ulRef.appendChild(li)
  }
  
  let students = []
  const params = new URLSearchParams(window.location.search)

  // getting data from api

  if(params.has('field') && params.has('value')) {
    const filterby = params.get('field')
    const value = params.get('value')
    const res = await fetch(`../api/searchStudent.php?field=${filterby}&value=${value}`)
    students = await res.json()
  } else {
    const res = await fetch('../api/getStudents.php')
    students = await res.json()
  }
  

  // inserting new li for each student
  students.forEach(student => pushStudent(student))

})