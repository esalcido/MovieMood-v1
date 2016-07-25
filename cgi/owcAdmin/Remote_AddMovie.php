<?php



include "../../dbConfig.php";

connectDB();
$max;


$result = mysql_query("select distinct max(remoteId) from Remote") or die(mysql_error()); 

while($row = mysql_fetch_array($result) ){

$max = $row[0];
	//echo " ";
 }

$title="null";
$title = $_REQUEST['movieId'];


echo "


<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
<title>Add Movie to Remote Location</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"adminStyle.css\" />
</head>
<body link=\"white\" alink=\"black\" vlink=\"black\">

<div align=\"center\"   >
<a  href=\"../../onlyAdmin.html\"><img src=\"onlyWithAdmin.gif\"/></a>


<br><br>

<p><H1>Add a Movie To Remote Location</H1></p>
</div>
<a href=\"../owcAdmin/Upload_php_TEST.php\">upload image</a>
<a href=\"../owcAdmin/RecommendPage.php\">Recommend Movie</a>
<br><br><br>

<form action=\"Remote_process.php\" method=\"post\">
<br>
Movie Id: <input type=\"text\" name = \"movieId\"><br>
<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"200000\" />

<input type=\"submit\" value=\"Submit\">
</form>

";

if($title != NULL){
echo "<a href=\"../owcAdmin/Upload_php_TEST.php\">upload image</a>
<script type=\"text/javascript\">

               
        alert (\"".$name." has been added\" )

      </script>";
}	  
	  
	  echo "
</body>
</html>

";

?>