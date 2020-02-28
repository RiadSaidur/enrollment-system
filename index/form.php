<form>
  <input type="number" name="reg_no" placeholder="Registration Number" min=0 autocomplete="off">
  <label for="department">
    Department:
    <select name="department_name" id="department" >
      <option value="CSE">CSE</option>
      <option value="ECE">ECE</option>
      <option value="BBA">BBA</option>
    </select>
  </label>
  <input type="text" name="std_name" placeholder="Student's Name" autocomplete="off">
  <label for="gender">
    Gender:
    <select name="gender" id="gender" >
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
  </label>
  <input type="number" name="hsc_gpa" placeholder="GPA" step="0.01" min=0 >
  <input type="number" name="hsc_roll" placeholder="HSC Roll" min=0 autocomplete="off">
  <input type="text" name="college" placeholder="College" >
  <label for="hsc_group">
    Group:
    <select name="hsc_group" id="hsc_group" >
      <option value="Science">Science</option>
      <option value="Commerce">Commerce</option>
    </select>
  </label>
  <input type="number" name="hsc_year" placeholder="HSC Year" min=0 >
  <input type="text" name="f_name" placeholder="Father's Name" autocomplete="off">
  <input type="text" name="m_name" placeholder="Mother's Name" autocomplete="off">
  <button type="submit">Submit</button>
</form>