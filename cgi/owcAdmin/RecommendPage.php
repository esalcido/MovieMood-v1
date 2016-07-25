<?php
include "../../dbConfig.php";
include("ArrayList.inc");

connectDB();

$max;
$title="null";
$title = $_REQUEST['name'];
$arrayList = new ArrayList();
$movieArray = new ArrayList();

$max;

$result2 = mysql_query("select distinct * from recommend ") or die(mysql_error());
	while($row = mysql_fetch_array($result2) ){
		$id = $row[1];
		$arrayList->add($id);
		$movieArray->add($id."<br>");
	}

?>

<html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Recommended Movie</title>
<link rel="stylesheet" type="text/css" href="adminStyle.css" />
</head>

<body  link="black" alink="black" vlink="black">
<div align="center">
<a  href="../../onlyAdmin.html"><img src="onlyWithAdmin.gif"/></a>


<br><br>

<p><H1>Add Recommended Movie </H1></p>
</div>
<a href="../owcAdmin/RecommendDelete.php">Delete Recommend</a>
<a href="../owcAdmin/Upload_php_TEST.php">upload image</a>
<a href="../owcAdmin/AddMovie.php">Add Movie</a>
<br><br>
<?php

for ( $counter = 0; $counter <= $arrayList->size(); $counter += 1) {

echo $movieArray->get($counter);
}

?>
<br><br>
<form action="processRecommend.php" method="post">
Title: <input type="text" name="title"><br>


<input type="submit" value="Add Recommended Movie">
</form>

<a href="../owcAdmin/RecommendDelete.php">Delete Recommend</a>
<a href="../owcAdmin/Upload_php_TEST.php">upload image</a>

<?php


if($title != NULL){
echo "	<a href=\"../owcAdmin/Upload_php_TEST.php\">upload image</a>
		<script type=\"text/javascript\">alert (\"".$title." has been added\" )
		 </script>";
}	  
?>
</body>
</html>
