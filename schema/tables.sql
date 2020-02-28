CREATE TABLE administrator(
    admin_id varchar(255) PRIMARY KEY NOT NULL,
    admin_name varchar(255) NOT NULL,
    admin_password varchar(255) NOT NULL
);
CREATE TABLE department(
    department_name varchar(255) PRIMARY KEY NOT NULL,
    total_seats int NOT NULL
);
CREATE TABLE student_info(
    reg_no int PRIMARY KEY NOT NULL,
    department_name varchar(255) NOT NULL,
    std_name varchar(255) NOT NULL,
    gender varchar(255) NOT NULL,
    hsc_roll int NOT NULL,
    college varchar(255) NOT NULL,
    hsc_gpa FLOAT NOT NULL,
    hsc_year int NOT NULL,
    hsc_group varchar(255) NOT NULL,
    f_name varchar(255) NOT NULL,
    m_name varchar(255) NOT NULL,
    FOREIGN KEY (department_name) REFERENCES department(department_name) ON DELETE CASCADE ON UPDATE CASCADE
);
CREATE TABLE updates(
    reg_no int NOT NULL,
    admin_id varchar(255) NOT NULL,
    _date date NOT NULL,
    FOREIGN KEY (reg_no) REFERENCES student_info(reg_no) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (admin_id) REFERENCES administrator(admin_id) ON DELETE CASCADE ON UPDATE CASCADE
);
CREATE TABLE deletes(
    reg_no int NOT NULL,
    admin_id varchar(255) NOT NULL,
    _date date NOT NULL,
    FOREIGN KEY (reg_no) REFERENCES student_info(reg_no) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (admin_id) REFERENCES administrator(admin_id) ON DELETE CASCADE ON UPDATE CASCADE
);