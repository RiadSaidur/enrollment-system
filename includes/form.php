<form method="POST" action="./services/add_student.php">
  <input type="number" name="reg_no" placeholder="Registration Number" required>
  <label for="department">
    Department:
    <select name="department_name" id="department" required>
      <option value="CSE">CSE</option>
      <option value="ECE">ECE</option>
      <option value="BBA">BBA</option>
    </select>
  </label>
  <input type="text" name="std_name" placeholder="Student's Name" required>
  <label for="gender">
    Gender:
    <select name="gender" id="gender" required>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
  </label>
  <input type="number" name="hsc_gpa" placeholder="GPA" required>
  <input type="number" name="hsc_roll" placeholder="HSC Roll" required>
  <input type="text" name="college" placeholder="College" required>
  <label for="hsc_group">
    Group:
    <select name="hsc_group" id="hsc_group" required>
      <option value="Science">Science</option>
      <option value="Commerce">Commerce</option>
    </select>
  </label>
  <input type="number" name="hsc_year" placeholder="HSC Year" required>
  <input type="text" name="f_name" placeholder="Father's Name" required>
  <input type="text" name="m_name" placeholder="Mother's Name" required>
  <button type="submit">Submit</button>
</form>