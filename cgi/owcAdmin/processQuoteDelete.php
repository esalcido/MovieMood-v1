<?php

include "../../dbConfig.php";
connectDB();

$max;




$name=$_POST['title'];


echo $name;
mysql_query("delete from quotables where qid =".$name);


echo "<html>
   <body>
     <script type=\"text/javascript\">

        alert (\" ".$name." has been added\" )

      </script>
   </body>
</html> ";


header( "Location: http://tempted1.freehostia.com/cgi/owcAdmin/QuotableDelete.php?name=".$name." " );


?>