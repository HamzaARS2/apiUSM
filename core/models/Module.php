<?php



class Module {

    public $module_id;
    public $module_name;
    public $semester;
    public $sd_id;


    function __construct($module_id,$module_name,$semester,$sd_id)
    {
        $this->module_id = $module_id;
        $this->module_name = $module_name;
        $this->semester = $semester;
        $this->sd_id = $sd_id;
    }

    
}










?>