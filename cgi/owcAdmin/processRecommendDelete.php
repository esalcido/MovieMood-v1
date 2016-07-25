<?php

include "../../dbConfig.php";
connectDB();


$max;




$name=$_REQUEST['title'];


echo $name;
mysql_query("delete from recommend where rid =".$name);


echo "<html>
   <body>
     <script type=\"text/javascript\">

        alert (\" ".$name." has been added\" )

      </script>
   </body>
</html> ";

header( "Location: ../owcAdmin/RecommendDelete.php?name=".$name." " ) ;



?>