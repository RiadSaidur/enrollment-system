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

    private function isAvailable($dept) {
      // $sql = "SELECT avail_seats FROM department WHERE department_name = ?";
      // if($statement = $this->connection->prepare($sql)) {
      //   $statement->bind_param('s', $dept);
      //   $statement->execute();
      //   $res = $statement->get_result();
      //   return $res;
      // }
      $sql = "SELECT total_seats FROM department WHERE department_name = '" . $dept . "'";
      $result = $this->connection->query($sql);
      $res = $result->fetch_assoc();
      return $res['total_seats'];
    }

    public function __construct($connection){
      $this->connection = $connection;
    }

    public function getStudentByReg($reg_no) {
      $this->reg_no = htmlspecialchars(strip_tags($reg_no));
      $sql = "SELECT * FROM student_info WHERE reg_no = '" . $this->reg_no . "'";
      $result = $this->connection->query($sql);
      $response = array();
      while($row = $result->fetch_assoc()) {
        $response[] = $row;
      }
      return json_encode($response);
    }

    public function getAll() {
      $result = $this->connection->query("SELECT reg_no, std_name, department_name FROM student_info");
      $response = array();
      while($row = $result->fetch_assoc()) {
        $response[] = $row;
      }
      return json_encode($response);
    }

    public function addNew($req) {
      $this->sanitize($req);
      if(!$this->isAvailable($this->department_name)) return false;

      // return $this->isAvailable($this->department_name);

      $fields = "(reg_no, department_name, std_name, gender, hsc_roll, college, hsc_gpa, hsc_year, hsc_group, f_name, m_name) ";
      $values = "VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

      $studentQuery = "INSERT INTO student_info " . $fields . $values;
      $deptQuery = "UPDATE department SET total_seats = total_seats - 1 WHERE department_name = ?";

      if(($addStudent = $this->connection->prepare($studentQuery)) && ($updateDept = $this->connection->prepare($deptQuery))){
        $addStudent->bind_param('isssisdisss',
          $this->reg_no, $this->department_name, $this->std_name, $this->gender,
          $this->hsc_roll, $this->college, $this->hsc_gpa, $this->hsc_year,
          $this->hsc_group, $this->f_name, $this->m_name);

        $updateDept->bind_param('s', $this->department_name);

        $res = $addStudent->execute() & $updateDept->execute();

        return $res;
      }
      else return false;
    }
  }
?>