<?php

include "../../dbConfig.php";
connectDB();


$result = mysql_query("select distinct max(id) from movie") or die(mysql_error()); 

while($row = mysql_fetch_array($result) ){

$max = $row[0];
	//echo " ";
 }

$title=null;

//$title = $_REQUEST['name'];


?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Movie</title>
<link rel="stylesheet" type="text/css" href="adminStyle.css" />
</head>
<body link="white" alink="black" vlink="black">

<div align="center"   >
<a  href="../../onlyAdmin.html"><img src="onlyWithAdmin.gif"/></a>


<br><br>

<p><H1>Add a Movie</H1></p>
</div>
<a href="../owcAdmin/Upload_php_TEST.php">upload image</a>
<a href="../owcAdmin/RecommendPage.php">Recommend Movie</a>
<br><br><br>

<form action="process.php" method="post">
Title: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="title"><br>
Genre: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name = "genre"><br>
Remote Location: <input type="text" name = "remote"><br>
<input type="hidden" name="MAX_FILE_SIZE" value="200000" />

<input type="submit" value="Submit">
</form>

<?php

if($title != NULL){


echo "<a href=\"../owcAdmin/Upload_php_TEST.php\">upload image</a>
<script type=\"text/javascript\">

               
        alert (\"".$name." has been added\" )

      </script>";
}	  
	  
?>
</body>
</html>