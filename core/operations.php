<?php





class DbOperations {

    private $conn;


    function __construct(){

        $db = new DbConnection();
        $this->conn = $db->connect();
        
    }


    public function read($query){
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        if($result){
            echo "Connected to database successfully!";
        }else {
            die("Connection to database failed!");
        }
        return $stmt;
    }

    public function insert($query,$types,$params){
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam($types,...$params);
        $result = $stmt->execute();
        if($result){
            echo "Student inserted successfully!";
        }else {
            die("Failed!");
        }
        return $stmt;
    }



    
}

















?>