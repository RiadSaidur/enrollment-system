window.addEventListener('load', async () => {

  // getting referemce of ul
  const ulRef = document.querySelector('.container ul')

  // function to insert a new node
  const pushStudent = student => {
    const li = document.createElement('li')

    for (let [key, value] of Object.entries(student)) {
      const span = document.createElement('span')
      span.innerText = value
      li.appendChild(span)
    }

    ulRef.appendChild(li)
  }
  
  // getting data from api
  const res = await fetch('../api/getStudentInfo.php')
  const students = await res.json()

  // inserting new li for each student
  students.forEach(student => pushStudent(student))

})