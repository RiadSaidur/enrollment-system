<form method="post">
  <label for="reg_no">
    <span>Registration Number</span>
    <input type="number" id="reg_no" name="reg_no" placeholder="Registration Number" min=0 autocomplete="off">
  </label>
  <label for="department">
    <span>Department:</span>
    <select name="department_name" id="department" >
      <option value="CSE">CSE</option>
      <option value="ECE">ECE</option>
      <option value="BBA">BBA</option>
    </select>
  </label>
  <label for="std_name">
    <span>Student Name</span>
    <input type="text" id="std_name" name="std_name" placeholder="Student's Name" autocomplete="off">
  </label>
  <label for="gender">
    <span>Gender:</span>
    <select name="gender" id="gender" >
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
  </label>
  <label for="hsc_gpa">
    <span>HSC GPA</span>
    <input type="number" id="hsc_gpa" name="hsc_gpa" placeholder="GPA" step="0.01" min=0 >
  </label>
  <label for="hsc_roll">
    <span>HSC Roll</span>
    <input type="number" id="hsc_roll" name="hsc_roll" placeholder="HSC Roll" min=0 autocomplete="off">
  </label>
  <label for="college">
    <span>College</span>
    <input type="text" id="college" name="college" placeholder="College" >
  </label>
  <label for="hsc_group">
    <span>Group:</span>
    <select name="hsc_group" id="hsc_group" >
      <option value="science">Science</option>
      <option value="commerce">Commerce</option>
    </select>
  </label>
  <label for="hsc_year">
    <span>HSC Year</span>
    <input type="number" id="hsc_year" name="hsc_year" placeholder="HSC Year" min=0 >
  </label>
  <label for="f_name">
    <span>Father's Name</span>
    <input type="text" id="f_name" name="f_name" placeholder="Father's Name" autocomplete="off">
  </label>
  <label for="m_name">
    <span>Mother's Name</span>
    <input type="text" id="m_name" name="m_name" placeholder="Mother's Name" autocomplete="off">
  </label>
  <button type="submit" id="submit">Submit</button>
</form>