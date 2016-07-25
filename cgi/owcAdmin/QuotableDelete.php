<?php

include("ArrayList.inc");
include "../../dbConfig.php";
connectDB();


$max;




$arrayList = new ArrayList();
$movieArray = new ArrayList();


$max;
$title="null";
$title = $_REQUEST['name'];

mysql_select_db ("eddzol4_test",$dbh)  or die ("Could not select database");


$result2 = mysql_query("select distinct * from quotables ") or die(mysql_error());
while($row = mysql_fetch_array($result2) ){

$id = $row[0];
$author = $row[1];
$quote = $row[2];
$movie = $row[3];

$arrayList->add($id);



	
	$movieArray->add($id."\t".$author."\t".$quote."\t".$movie."<br>");
 }


echo "

<html>
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
<title>Delete Quote</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"adminStyle.css\" />
</head>

<body  link=\"black\" alink=\"black\" vlink=\"black\">
<div align=\"center\">
<a  href=\"../../onlyAdmin.html\"><img src=\"onlyWithAdmin.gif\"/></a>


<br><br>

<p><H1>Delete Quote </H1></p>
</div>
<a href=\"../owcAdmin/AddQuote.php\">Add Quote</a>
<a href=\"../owcAdmin/Upload_php_TEST.php\">upload image</a>
<a href=\"../owcAdmin/AddMovie.php\">Add Movie</a>
<br><br>
";

for ( $counter = 0; $counter <= $arrayList->size(); $counter += 1) {

echo $movieArray->get($counter);
}



echo "<br><br>
<form action=\"processQuoteDelete.php\" method=\"post\">
Title: <input type=\"text\" name=\"title\"><br>


<input type=\"submit\" value=\"Delete Movie Quote\">
</form>

<a href=\"../owcAdmin/AddQuote.php\">Add Quote</a>
<a href=\"../owcAdmin/Upload_php_TEST.php\">upload image</a>
";

if($title != NULL){
echo "<a href=\"../owcAdmin/Upload_php_TEST.php\">upload image</a>
<script type=\"text/javascript\">

               
        alert (\"".$name." has been deleted\" )

      </script>";
}
	  
echo "

</body>
</html>


";

?>