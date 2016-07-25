<?php

include "../../dbConfig.php";
connectDB();

$max;




$name=$_POST['author'];
$quote=$_POST['quote'];
$movie=$_POST['movie'];

echo $name.$quote.$movie;

mysql_query("INSERT INTO quotables(author,quote,movie)VALUES('$name','$quote','$movie')");

header( "Location: http://tempted1.freehostia.com/cgi/owcAdmin/AddQuote.php?name=".$name." " );
echo "<html>
   <body>
     <script type=\"text/javascript\">

        alert (\" ".$name." has been added\" )

      </script>
   </body>
</html> ";





?>