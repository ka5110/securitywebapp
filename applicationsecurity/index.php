<?php
echo "<h2>Sign UP Page, Please fill in the below Info <h2/> ";
echo "<form action='.\api\webservice\SignUp.php' method='POST'>";
echo "<br/>";
echo "<br/>";
echo "username: ";
echo "<input name='username' type='text' />";
echo "<br/>";
echo "name: ";
echo "<input name='txtname' type='text' />";
echo "<br/>";
echo "email: ";
echo "<input name='email' type='text' />";
echo "<br />Password: ";
echo "<input name='password' type='password' />";
echo "<br /><input type='submit' value='Sign UP'>";
echo "</form>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "Exisiting user?";
echo "<a href=\"http://users.sussex.ac.uk/~ka423/signin.php\">click here to Sign in</a>";
?>
