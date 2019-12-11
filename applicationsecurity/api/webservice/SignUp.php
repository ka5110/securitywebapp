<?php
 
include_once '../config/database.php';
include_once '../beans/user.php';


$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
$user->username = $_POST['username'];
$user->email=$_POST['email'];
$user->password = $_POST['password'];
$user->created = date('Y-m-d H:i:s');
 
if($user->signup()){
      print "<h2>Signing Up User for Registration.</h2>";
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Signed Up!",
        "id" => $user->id,
        "username" => $user->username,
        "email"=>$user->email,
        "password"=>$user->password   
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Username already exists!"
    );
}
echo $user_arr['message'];
echo "<a href=\"http://users.sussex.ac.uk/~ka423/signin.php\">click here to Sign in</a>";