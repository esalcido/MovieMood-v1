<?php

include "../../dbConfig.php";
connectDB();


$max;




//$name=$_POST['location'];
$email=$_POST['movieId'];
$max2='noImage';

//mysql_query("INSERT INTO `Remote` VALUES ('$name', '$email')"); 
mysql_query("INSERT INTO `Remote` ( `locationId` , `movId` )
VALUES ('danyela', '$email');");

echo "<html>
   <body>
     <script type=\"text/javascript\">

               var exam_score = 56
        alert (\"".$name." has been added\" )

      </script>
   </body>
</html> ";

header( "Location: /cgi/owcAdmin/Remote_AddMovie.php?name=".$name." " ) ;



?>