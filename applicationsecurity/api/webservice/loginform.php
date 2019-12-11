<?php

$username = $_POST['username'];
$password = $_POST['password'];
$password_hashed = password_hash($password ,  PASSWORD_BCRYPT, ["salt" => "khalilkhalilkhalilkhal"]);

$mysql_host = "database-1.cymfuvhzkogm.us-east-2.rds.amazonaws.com";
$mysql_database = "innodb";
$mysql_user= "admin";
$mysql_password= "adminadmin";

$connection = @mysql_connect($mysql_host,$mysql_user,$mysql_password) or die ("could not connect to the server");

$db = @mysql_selecT_db($mysql_database, $connection) or die ("could not select a valid database");

$userQuery = "SELECT * FROM MyUsers";
$userResult = mysql_query($userQuery, $connection); 

$userFound = 0;

while ($userRow = mysql_fetch_Array($userResult))
{
	if ($userRow['username'] == $username)
	{
	$userFound = 1;

	 if($userRow['password'] == $password_hashed)
		{

		
	echo "You have susccessfully Logged In $username ";
	echo "<br/>";
	echo "Welcome to our website ";
	echo "<br/>";
	echo "click the following link to upload your C.V";
	echo "<br/>";
	echo "<a href=\"http://users.sussex.ac.uk/~ka423/indexx.php\">click here</a>";

		 }

	else {
	echo "wrong password!";
	

		 }
	}
}

if ($userFound ==0)
{
	echo "this user was not found within our database !";
}
?>

