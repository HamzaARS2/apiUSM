<?php



require_once("../core/initialize.php");







class ReadOperation {

    private $db;

    function __construct()
    {
        $this->db = new DbOperations();
    }

    function readStudents(){
        $students = array();
        $students['data'] = array();
        $result = $this->db->read("SELECT * FROM `student`");

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $student = new Student(
                $student_id,
                $first_name,
                $last_name,
                $birth_date,
                $sex,
                $semester,
                $sd_id,
                $group_id);

                array_push($students['data'],$student);
        }

        return $students;

    
    }

    function readProfessors(){
        $profs = array();
        $profs['data'] = array();
        $result = $this->db->read("SELECT * FROM `professor`");

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $prof = new Professor(
                $prof_id,
                $first_name,
                $last_name,
                $birth_date,
                $sex,
                $sd_id);

                array_push($profs['data'],$prof);
        }

        return $profs;
    }

    function readSD(){
        $sd_arr = array();
        $sd_arr['data'] = array();
        $result = $this->db->read("SELECT * FROM `study_division`");

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $sd = new StudyDivision($sd_id,$sd_name);

                array_push($sd_arr['data'],$sd);
        }

        return $sd_arr;
    }

    function readGroups(){
        $groups = array();
        $groups['data'] = array();
        $query = "SELECT group.group_id, group.group_no,study_division.sd_name,group.semester
                  FROM `group`
                  INNER JOIN study_division ON group.sd_id = study_division.sd_id";
        $result = $this->db->read($query);

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $group = new Group($group_id,$group_no,$sd_name,$semester);

                array_push($groups['data'],$group);
        }

        return $groups;
    }

    function readModules(){
        $modules = array();
        $modules['data'] = array();
        $result = $this->db->read("SELECT * FROM `module`");

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $module = new Module($module_id,$module_name,$semester,$sd_id);

                array_push($modules['data'],$module);
        }

        return $modules;
    }

    function readClasses(){
        $classes = array();
        $classes['data'] = array();
        $result = $this->db->read("SELECT * FROM `class`");

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $class = new Classroom($class_id,$class_name);

                array_push($classes['data'],$class);
        }

        return $classes;
    }

 



    
}

// if(isset($_GET['username'])){
//     if($_GET['username'] == "HamzaAPI"){
//         $reader = new ReadOperation();
//         $reader->readStudents();
//     }else {
//         print("Access denied!");
//     }

// }else {
//     print("Required fields are missing!");
// }



















?>