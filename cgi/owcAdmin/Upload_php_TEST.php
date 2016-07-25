
<?php

include 'ArrayList.inc';
include "../../dbConfig.php";
connectDB();



$arrayList = new ArrayList();
$movieArray = new ArrayList();
$max;
 
$result= mysql_query("select distinct max(id) from movie") or die(mysql_error());

while($row = mysql_fetch_array($result) ){

$max = $row[0];
	//echo "max =  ".$max;
 }


$result2 = mysql_query("select distinct * from movie where movPicture = 'noImage'") or die(mysql_error());

while($row = mysql_fetch_array($result2) ){

$id = $row[0];
$arrayList->add($id);

$title = $row[1];
$genre = $row[2];

	
	$movieArray->add($id."&nbsp ".$title."&nbsp ".$genre."<br>");
 }


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>upload Image</title>
<style type="text/css"><!--
body {
	background-color: #000000;
		
        background-position: 100px 60px;
	background-repeat: no-repeat;
}
body,td,th {
	color: #FFFFFF;
	background-attachment: fixed;
	border: 0;
}
#layer1 { background-color: #fff; width: 122px; left: 10px; top: 160px; z-index: 1; position: relative; visibility: visible; }
--></style>
</head>

<body  link="black" alink="black" vlink="black">

<div align="center">
<a  href="../../onlyAdmin.html"><img src="onlyWithAdmin.gif"/></a>


<br><br>

<p><H1>UPLOAD AN IMAGE</H1></p>
</div>
<a href="../owcAdmin/AddMovie.php">Add Movie</a>
<a href="../owcAdmin/RecommendPage.php">Recommend Movie</a>
<BR>

<?php
//for ( $count = 0; $count <= $arrayList->size()-1; $count += 1) {
//echo $movieArray->get($count);
//}
?>

<br><br>
Movies recently added to Database that need an Image as soon as possible.<br><br>
<form  name='nav' enctype="multipart/form-data" action="upload.php" method="POST">  
<SELECT id= 'selectId' NAME="SelectURL[]" >
<option selected value="#">Select Movie Id</option>

<?php

for ( $counter = 0; $counter <= $arrayList->size(); $counter += 1) {

echo "<OPTION value='".$arrayList->get($counter)."'>"." ".$movieArray->get($counter)."</OPTION>";

}

?>
</select>


<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
&nbsp;&nbsp;&nbsp;&nbsp;Choose a file to upload: <input name="uploadedfile" type="file" />
<input type="submit" value="Upload File" />
</form>

<a href="../owcAdmin/AddMovie.php">Add Movie</a>
</body>
</html>

