window.addEventListener('load', async () => {

  const query = window.location.search
  const res = await fetch(`../api/getStudentInfo.php${query}`, {
    method: 'GET',
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    }
  })
  // const res = await fetch('../api/getStudents.php')
  const data = await res.json()

  console.log(data)
  
})