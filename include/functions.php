<?php

//functions from movie.php in cgi folder
function counterSet($fname,$result)
  {
	  
	  $baseURL ='localhost/DWD/OnlyWithClass/';
$stop = 0;

$end = ($fname * 20 ) -1;
$begin = $end -19;

while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	if($stop >= $begin ){

              echo "<tr><td>"; 
	      echo $row['id'];
	      echo "</td><td><img src='../images/".$row['movPicture']."'>"; 
	      echo $row['title'];
	      echo "</td><td>"; 
	      echo $row['genre'];
	      echo "</td></tr>";
         }
         if($stop == $end){
         break;
        }
       else{
	 ;
       }


$stop++;
} 

  }

//=======================================
function assertPageMax($pageNum, $numPages){
if($pageNum > $numPages){

--$pageNum;
}
if($pageNum < 1){

++$pageNum;
}

return $pageNum;
}