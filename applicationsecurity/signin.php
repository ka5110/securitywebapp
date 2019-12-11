<?php
echo "<br/>";
echo "<h2>Sign in Here:<h2/>	";
echo "<br/>";
echo "<br/>";

echo "<form action='.\api\webservice\loginform.php' method='POST'>";
echo "Username :";
echo "<input name='username' type='text' />";
echo "<br />Password: ";
echo "<input name='password' type='password' />";
echo "<br /><input type='submit' value='Login'>";
echo "</form>";
echo "<br/>";
echo "New user?";
echo "<br/>";
echo "<a href=\"http://users.sussex.ac.uk/~ka423\">click here to Sign up</a>";

?>
