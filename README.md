# Enrollment System

## Requirements

**In this system, admission keeps students general information during admission. Admission can make any query regarding a student using a search option and also adding new records, save record, update record, delete record and record navigation.**

## Planning

* Administration can **login** using **admin panel**.
* Students are sorted by their **cummulative gpa** by default.
* After authenticating, Admin can **add new student record**,**update record**, **delete record**.
* Admin can **search** any infromation from the database.
* Admin can view **any specified students** information **on demand**.
* Admin can view the **number of applicants** for **each** and **every** departments.
* Students are sorted by their **cumulative gpa** by default.

### Add New Record

Admin can add new record of a students **general informations**.<br>
For Students **registration number** and **roll number** should be unique. A student can apply to any **department(s)** within their **group**.

### Update Record

Admin can Update any students record.<br>
Upon updating, the document will hold a record of **time of update** and **admin identification**.

### Delete Record

Admin can Delete any record.<br>
Upon deleting, all student info will be cleared and will hold a record of **time of delete** and **admin identification**.

### Search

Admin can query Student Record Database using any **field values**.

## Table Schema

**admin**(
  <ins>admin_id</ins>,
  admin_pass,
  admin_name
)

**department**(
  <ins>department_id</ins>,
  department_name,
  total_seats,
  occupied
)

**applicant_info**(
  <ins>reg_no</ins>,
  app_name,
  department_id,
  ssc_roll,
  hsc_roll,
  school,
  college,
  ssc_gpa,
  hsc_gpa,
  ssc_year,
  hsc_year,
  ssc_group,
  hsc_group,
  cgpa,
  f_name,
  m_name,
  f_occupation,
  m_occupation,
  f_phone,
  m_phone,
  f_income,
  m_income
)

**updates**(
  <ins>reg_no</ins>,
  admin_id,
  date
)

**deletes**(
  <ins>reg_no</ins>,
  admin_id,
  date
)