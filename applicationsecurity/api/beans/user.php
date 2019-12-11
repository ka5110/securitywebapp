
<?php

class User{
 
    private $conn;
    private $table_name = "MyUsers";
 
    public $id;
    public $username;
    public $name;
    public $email;
    public $password;
    public $created;
    public $hashed_password;
 
    public function __construct($db){
       
        $this->conn = $db;
   
        }

    function signup(){
       
       if($this->isUserAlreadyExist()){
        return false;
    }
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                username=:username, email=:email, password=:password, created=:created";
  
    $stmt = $this->conn->prepare($query);
  
    $this->username=htmlspecialchars(strip_tags($this->username));
    $this->email= htmlspecialchars(strip_tags($this->email));
    //$this->password=htmlspecialchars(strip_tags($this->password));
    $this->created=htmlspecialchars(strip_tags($this->created));


    $this->hashed_password = password_hash($this->password , PASSWORD_BCRYPT, ["salt" => "khalilkhalilkhalilkhal"]);


    $stmt->bindParam(":username", $this->username);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":password", $this->hashed_password);
    $stmt->bindParam(":created", $this->created);
  
    if($stmt->execute()){
        $this->id = $this->conn->lastInsertId();
        return true;
    }
    return false;        
    }
    
    function login(){
    
    $query = "SELECT
                `id`, `username`, `password`, `created`
            FROM
                " . $this->table_name . " 
            WHERE
                username='".$this->username."' AND password='".$this->password."'";    
                

    $stmt = $this->conn->prepare($query);

    $stmt->execute();

    return $stmt; 
	echo "done querying the database about user login";
    }
    
    function isUserAlreadyExist(){
        $query = "SELECT * FROM
            " . $this->table_name . " 
        WHERE
            username='".$this->username."'";
   

    $stmt = $this->conn->prepare($query);
    
    $stmt->execute();
    if($stmt->rowCount() > 0){
        return true;
    }
    else{
        return false;
    }
        
    }
}