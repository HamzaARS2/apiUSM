<?php



class Group {

    public $group_id;
    public $group_no;
    public $sd_name;
    public $semester;


    function __construct($group_id,$group_no,$sd_name,$semester)
    {
        $this->group_id = $group_id;
        $this->group_no = $group_no;
        $this->sd_name = $sd_name;
        $this->semester = $semester;
    }

    
}










?>