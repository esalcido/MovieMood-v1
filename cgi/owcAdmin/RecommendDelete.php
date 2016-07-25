<?php
include "../../dbConfig.php";
include("ArrayList.inc");

connectDB();

$max;
$title="null";
$title = $_REQUEST['name'];
$arrayList = new ArrayList();
$movieArray = new ArrayList();

$result2 = mysql_query("select distinct * from recommend ") or die(mysql_error());
	while($row = mysql_fetch_array($result2) ){

		$id = $row[0];
		$title = $row[1];
		$arrayList->add($id);
		$movieArray->add($id."\t&nbsp;&nbsp; ".$title."<br>");
	}



?>

<html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Delete Recommended Movie</title>
<link rel="stylesheet" type="text/css" href="adminStyle.css" />
</head>

<body  link="black" alink="black" vlink="black">
<div align="center">
<a  href="../../onlyAdmin.html"><img src="onlyWithAdmin.gif"/></a>

<br><br>

<p><H1>Delete Recommended Movie </H1></p>
</div>
<a href="../owcAdmin/RecommendPage.php">Add Recommend</a>
<a href="../owcAdmin/Upload_php_TEST.php">upload image</a>
<a href="../owcAdmin/AddMovie.php">Add Movie</a>
<br><br>


<?php


for ( $counter = 0; $counter <= $arrayList->size(); $counter += 1) {

echo $movieArray->get($counter);
}

?>

<br><br>
<form action="processRecommendDelete.php" method="post">
Id: <input type="text" name="title"><br>


<input type="submit" value="Delete Recommended Movie">
</form>

<a href="../owcAdmin/RecommendPage.php">Add Recommend</a>
<a href="../owcAdmin/Upload_php_TEST.php">upload image</a>
<a href="../owcAdmin/AddMovie.php">Add Movie</a>

<?php

if($title != NULL){
echo "<a href=\"../owcAdmin/Upload_php_TEST.php\">upload image</a>
<script type=\"text/javascript\">

               
        alert (\"".$title." has been deleted\" )

      </script>";
}	  

?>
</body>
</html>

