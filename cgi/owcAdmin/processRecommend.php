<?php

include "../../dbConfig.php";
connectDB();

$max;
$name=$_REQUEST['title'];


mysql_query("INSERT INTO `recommend` ( `title`  )
VALUES (
 '$name');");


echo "<html>
   <body>
     <script type=\"text/javascript\">

        alert (\" ".$name." has been added\" )

      </script>
   </body>
</html> ";

header( "Location: ../owcAdmin/RecommendPage.php?name=".$name." " );



?>