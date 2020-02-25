<?php
  class Student {
    private $connection;
    private $reg_no, $department_name, $std_name, $gender, $hsc_roll, $college, $hsc_gpa, $hsc_year, $hsc_group, $f_name, $m_name;

    private function sanitize($req) {
      if($req['reg_no']) $this->reg_no = htmlspecialchars(strip_tags($req['reg_no']));
      if($req['department_name']) $this->department_name = htmlspecialchars(strip_tags($req['department_name']));
      if($req['std_name']) $this->std_name = htmlspecialchars(strip_tags($req['std_name']));
      if($req['gender']) $this->gender = htmlspecialchars(strip_tags($req['gender']));
      if($req['hsc_roll']) $this->hsc_roll = htmlspecialchars(strip_tags($req['hsc_roll']));
      if($req['college']) $this->college = htmlspecialchars(strip_tags($req['college']));
      if($req['hsc_gpa']) $this->hsc_gpa = htmlspecialchars(strip_tags($req['hsc_gpa']));
      if($req['hsc_year']) $this->hsc_year = htmlspecialchars(strip_tags($req['hsc_year']));
      if($req['hsc_group']) $this->hsc_group = htmlspecialchars(strip_tags($req['hsc_group']));
      if($req['f_name']) $this->f_name = htmlspecialchars(strip_tags($req['f_name']));
      if($req['m_name']) $this->m_name = htmlspecialchars(strip_tags($req['m_name']));
    }

    public function __construct($connection){
      $this->connection = $connection;
    }

    public function getAll() {
      return $this->connection->query("SELECT reg_no, std_name, department_name FROM student_info");    
    }

    public function addNew($req) {
      $this->sanitize($req);
      $fields = "(reg_no, department_name, std_name, gender, hsc_roll, college, hsc_gpa, hsc_year, hsc_group, f_name, m_name) ";
      $values = "VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $sql = "INSERT INTO student_info " . $fields . $values;
      if($statement = $this->connection->prepare($sql));{
          $statement->bind_param('isssisdisss', $this->reg_no, $this->department_name, $this->std_name, $this->gender, $this->hsc_roll, $this->college, $this->hsc_gpa, $this->hsc_year, $this->hsc_group, $this->f_name, $this->m_name);
          $res = $statement->execute();
          if($res) header("Location: /index.php?q=true");
          else header("Location: /index.php?q=false");
      }
    }
  }
?>