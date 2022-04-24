<?php


require_once("../api/read.php");



if($_SERVER['REQUEST_METHOD'] = 'POST'){

    $requestKey = $_GET['key'];
    if(isset($requestKey)){
        



        switch($requestKey){

            case "student";

            $request = new ReadOperation();
            $students = $request->readStudents();
            echo json_encode($students);

            break;
            case "professor";

            $request = new ReadOperation();
            $professors = $request->readProfessors();
            echo json_encode($professors);

            break;
            case "study_division";

            $request = new ReadOperation();
            $sd_arr = $request->readSD();
            echo json_encode($sd_arr);

            break;
            case "group";

            $request = new ReadOperation();
            $groups = $request->readGroups();
            echo json_encode($groups);

            break;
            case "module";

            $request = new ReadOperation();
            $modules = $request->readModules();
            echo json_encode($modules);

            break;
            case "session";

        
            break;
            case "lecture";

            break;
            case "class";

            $request = new ReadOperation();
            $classes = $request->readClasses();
            echo json_encode($classes);

            break;
            default:
            echo "Access denied!";


        }


    }




























}else {

    echo "Wrong request!";

}


















?>