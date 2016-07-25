<?php

include "../../dbConfig.php";
connectDB();


$max;




$name=$_POST['title'];
$email=$_POST['genre'];
$max2='noImage';
$remoteId = $_POST['remote'];

//mysql_query("INSERT INTO `movie` VALUES ('$name', '$email')"); 
mysql_query("INSERT INTO `movie` ( `id` , `title` , `genre` , `movPicture` , `remoteId`)
VALUES (
'', '$name', '$email', '$max2',$remoteId);");

echo "<html>
   <body>
     <script type=\"text/javascript\">

               
        alert (\"".$name." has been added \" )

      </script>
   </body>
</html> ";

header( "Location: ./AddMovie.php?name=".$name." " ) ;



?>