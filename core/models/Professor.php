<?php


class Professor {

    public $prof_id;
    public $first_name;
    public $last_name;
    public $birth_date;
    public $sex;
    public $sd_id;

    function __construct($prof_id,
    $first_name,
    $last_name,
    $birth_date,
    $sex,
    $sd_id)
    {
        $this->prof_id = $prof_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->birth_date = $birth_date;
        $this->sex = $sex;
        $this->sd_id = $sd_id;

    }

    
}





















?>