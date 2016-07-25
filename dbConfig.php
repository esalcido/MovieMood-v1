<?
// Replace the variable values below
// with your specific database information.
function connectDB(){
/*$host = "localhost";
$user = "root";
$pass = "qazwsx";
$db   = "onlyclass_test";
*/

$host = "localhost";
$user = "root";
$pass = "qazwsx";
$db   = "onlywithclass";



// This part sets up the connection to the
// database (so you don't need to reopen the connection
// again on the same page).
$ms = mysql_pconnect($host, $user, $pass);
if ( !$ms )
{
echo "Error connecting to database.\n";
}

// Then you need to make sure the database you want
// is selected.
mysql_select_db($db);
}
//mysql_select_db ("onlyclass_test",$db)  or die ("Could not select database");
//====================================================================
function getMax($sql){
//get max movie from Database
$result = mysql_query($sql) or die(mysql_error()); 

while($row = mysql_fetch_array($result) ){

$max = $row[0];
	echo " ";
 }
return $max;
}

//=================================================================
function printMovieBanner($min){


	echo " <script language=\"javascript\">
 		var sliderwidth=\"700px\" 
 		var sliderheight=\"250px\" 
 		var slidespeed=3 
 		slidebgcolor=\"transparent\"  
		var leftrightslide=new Array()
 		var finalslide=''
";



$query2 = "select distinct id, movPicture 	from movie	where id >".$min;
		$result1 = mysql_query($query2);
  		$num = mysql_num_rows($result1);
  		$i = $num;
  			while ( $i >= 0) {
    			$obj = mysql_fetch_array($result1);
    			echo "leftrightslide[".$i."]='<img src=\"/images/".$obj[movPicture]."\" border=1><---".$obj[id]."' \n";
  				$i--;

  			}



echo "
var imagegap=\" \"  
		var slideshowgap=5 
		</script>

	<script type=\"text/javascript\" src=\"/slider.js\"></script>
";


}

//===================================================================================

function printHTMLcode($sql  ){
$result3 = mysql_query("select distinct * from HTML_Code where id=$sql") or die(mysql_error()); 

while($row = mysql_fetch_array($result3) ){

$max2 = $row[1];
	echo " ";

 }

echo $max2;

}
//==================================================================================
function printLogin(){
if ($_GET["op"] == "login")
 {
 
 if (!$_POST["username"] || !$_POST["password"])
  {
  die("You need to provide a username and password.");
  }
 
 // Create query
 $q = "SELECT * FROM `dbUsers` "
  ."WHERE `username`='".$_POST["username"]."' "
  ."AND `password`=PASSWORD('".$_POST["password"]."') "
  ."LIMIT 1";
 // Run query
 $r = mysql_query($q);

 if ( $obj = @mysql_fetch_object($r) )
  {
  // Login good, create session variables
  $_SESSION["valid_id"] = $obj->id;
  $_SESSION["valid_user"] = $_POST["username"];
  $_SESSION["valid_time"] = time();

  // Redirect to member page
  Header("Location: members.php");
  }
 else
  {
  // Login not successful
  die("Sorry, could not log you in. Wrong login information.");
  }
 }
else
 {
//If all went right the Web form appears and users can log in
 echo "<form action=\"?op=login\" method=\"POST\">";
 echo "Username: <br><input name=\"username\" size=\"15\"><br />";
 echo "Password: <br><input type=\"password\" name=\"password\" size=\"8\"><br />";
 echo "<input type=\"submit\" value=\"Login\">";
 echo "</form>";
 }
}

//===================================================================



?>