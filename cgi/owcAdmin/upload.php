<?php


include "../../dbConfig.php";
include 'ArrayList.inc';
connectDB();



$target_path = "../../images/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!".  basename( $_FILES['uploadedfile']['name']);
}

$SelectURL = $_POST['SelectURL'];


foreach( $SelectURL as $value ){
    echo $value;
}
//$valA = basename( $_FILES['uploadedfile']['name']).'.jpg';
$valA = basename( $_FILES['uploadedfile']['name']);

//mysql_select_db ("eddzol4_test",$dbh)  or die ("Could not select database");
$result = mysql_query("UPDATE movie SET movPicture='$valA' WHERE id='$value'") or die(mysql_error());
echo "valA = ".$valA;
echo "val = ".$value;
header( "Location: ./Upload_php_TEST.php " );




?>