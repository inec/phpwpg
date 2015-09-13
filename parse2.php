<html>

<?PHP
include_once 'parse.php';

	$sessionID = $_POST['PHPSESSID'];
    echo 'Hello!<br> Session id passed in: ' . $sessionID;

    if (!empty($sessionID))
    {
    	session_id($sessionID);
    }

	session_start();
	echo '<br>Stored Token: ' . $_SESSION['sessionToken'];

    echo '<br>SID: ' . session_id();

    #$qs = 'Query String: ' . $_SERVER['QUERY_STRING'];
    $action = $_POST["action"];

    if (empty($_SESSION['sessionToken']) && !empty($action) && empty($sessionToken))
    {
	    $username = $_POST["username"];
	    echo '<br>Username: ' . $username;
	    $password = $_POST["password"];
	    echo '<br>Password: ' . $password;

		if(!empty($username) && !empty($password))
		{
			$pUser = new parseUser;
			$pUser->username = $username;
			$pUser->password = $password;

	    	if ($action == "login")
	    	{
				echo '<br>Login call...';		
				try {
					$loginResult = $pUser->login();
					echo '<br>Login Result: ' . $loginResult->sessionToken;
					$_SESSION['sessionToken'] = $loginResult->sessionToken;
				    echo '<br>Token: ' . $_SESSION['sessionToken'];
				} catch (Exception $e) {
		 		   echo '<br>Login failed.';
				}
	    	}
	    	else if ($action == "signup")
	    	{
				echo '<br>Sign Up call...';		
				try {
					$signupResult = $pUser->signup();
					echo '<br>Signup Result: ' . $signupResult->sessionToken;
				} catch (Exception $e) {
		 		   echo '<br>Signup failed.';
				}
	    	}
    	}
		else
		{
			echo '<br>Missing username/password';
		}
    }
    session_write_close();
?>

<body>

<form method=POST>
<input type="text" name=username>
<br>
<input type="password" name=password>
<br>
<input type="submit" value="Login">
<input type="hidden" value="login" name="action">
<input type="hidden" value="<? echo session_id() ?>"  name="PHPSESSID">
</form>

<form method=POST>
<input type="text" name=username>
<br>
<input type="text" name=email>
<br>
<input type="password" name=password>
<br>
<input type="password2" name=password2>
<br>
<input type="submit" value="Sign Up">
<input type="hidden" value="signup" name="action">
</form>

<?PHP
		$parseQuery = new parseQuery('test');
#		$parseQuery->where('testfield1','test1');
        $result = $parseQuery->find();

        echo "<br><br>RESULT: ";
        print_r($result->results[0]);
?>

</bod>
</html>