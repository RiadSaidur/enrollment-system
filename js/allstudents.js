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
  
  // getting data from api
  const res = await fetch('../api/getStudents.php')
  const students = await res.json()

  // inserting new li for each student
  students.forEach(student => pushStudent(student))

})