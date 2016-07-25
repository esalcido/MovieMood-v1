 <?php 
 // Connects to your Database 

//calling in the Class for Database
	require_once "Database.php";
	$db = new Database();
	$db->connect();

 //This code runs if the form has been submitted

 if (isset($_POST['submit'])) { 

 	//This makes sure they did not leave any fields blank
	if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {
 		die('You did not complete all of the required fields');
	}

 	// checks if the username is in use
	//
	if (!get_magic_quotes_gpc()) {
 		$_POST['username'] = addslashes($_POST['username']);
 	}

 	$usercheck = $_POST['username'];

	//getting user 
 	$query1 = "SELECT name FROM sb_user WHERE name = '$usercheck'";

 	$check = $db->query($query1);
	$check2 = $db->numRows();

	 //if the name exists it gives an error
 	if ($check2 != 0) {

 		die('Sorry, the username '.$_POST['username'].' is already in use.');
			echo "<p><a href=\"../index.php\">home</a></p>";
 				}
				
 // this makes sure both passwords entered match
 	if ($_POST['pass'] != $_POST['pass2']) {
 		die('Your passwords did not match. ');
 	}

 	// here we encrypt the password and add slashes if needed

 	$_POST['pass'] = md5($_POST['pass']);

 	if (!get_magic_quotes_gpc()) {
		$_POST['pass'] = addslashes($_POST['pass']);
 		$_POST['username'] = addslashes($_POST['username']);
 	}

 // now we insert it into the database

 	$insert = "INSERT INTO sb_user (name, password)

 			VALUES ('".$_POST['username']."', '".$_POST['pass']."')";

 	$add_member = mysql_query($insert);

 	?>
 
 <h1>Registered</h1>

 <p>Thank you, you have registered - you may now login</a>.</p>
 <p><a href="../index.php">home</a></p>
 <?php 
 } 

 else 
 {	
 ?>
 <div id="container" >
 
 	
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div id="username">
         Username:
         <input type="text" name="username" maxlength="60">
        </div>
        
        <div id="password">
        Password:
        <input type="password" name="pass" maxlength="10">
        </div>
        
        <div id="confirm-password">
         Confirm Password:
        <input type="password" name="pass2" maxlength="10">
        </div>
        
        <div id="submit">
        <input type="submit" name="submit" value="Register">
        </div>
         </form>

</div><!--end container-->

 <?php

 }
 ?> 