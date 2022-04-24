<?php



class Student {

    public $student_id;
    public $first_name;
    public $last_name;
    public $birth_date;
    public $sex;
    public $semester;
    public $sd_id;
    public $group_id;

    function __construct($student_id,
    $first_name,
    $last_name,
    $birth_date,
    $sex,
    $semester,
    $sd_id,
    $group_id)
    {
        $this->student_id = $student_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->birth_date = $birth_date;
        $this->sex = $sex;
        $this->semester = $semester;
        $this->sd_id = $sd_id;
        $this->group_id = $group_id;

    }

    
}










?>