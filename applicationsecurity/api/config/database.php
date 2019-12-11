<?php


class Database{
    private $host="database-1.cymfuvhzkogm.us-east-2.rds.amazonaws.com";
    private $db_name = "innodb";
    private $username = "admin";
    private $password = "adminadmin";
    public $conn;
    
    
    public function getConnection(){
        $this->conn = null;
            print "<h2>Connecting to the Database!</h2>";
        try{
            print "<h2>Passing the Credentials </h2>";
            $this->conn = new PDO(
                    "mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                    $this->username,
                    $this->password);
            $this->conn->exec("set names utf8");
			print "<h2> Connection established </h2>";
        }catch(PDOException $exception){
            
            echo "Connection error: " . $exception->getMessage()  
                    
                    + " || "+
                     
                  $this->conn. error_reporting();
            
        }
        return $this->conn;
    }

}
?>
