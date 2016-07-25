<?php


include "dbConfig.php";

connectDB();


$max;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Only With Class</title>
<style type="text/css">
<!--
body {
	background-color: #000000;
	
        background-position: 100px 60px;
	background-repeat: no-repeat;
}
body,td,th {
	color: #FFFFFF;
	background-attachment: fixed;
	border: 0;
}
-->
</style></head>

<body>
<!--  =Getting the recommended titles==   -->
<div id="datacontainer" style="position:absolute;left:1px;top:10px;width:100%" onMouseover="scrollspeed=0" onMouseout="scrollspeed=cache">
<?php


$query3 = "select distinct  * from quotables";
		$result2 = mysql_query($query3);
  		$num2 = mysql_num_rows($result2);
  		$k = 1;
  			while ( $k <= $num2) {
    			$obj2 = mysql_fetch_array($result2);
                        
                        

    			echo "<p align=\"center\">".$obj2[1].": ".$obj2[2]." /".$obj2[3]."</p>";
                        
  				$k++;

  			}

//=============================================================================
?>
</div><script type="text/javascript">



var scrollspeed=cache=1


var initialdelay=500

function initializeScroller(){
dataobj=document.all? document.all.datacontainer : document.getElementById("datacontainer")
dataobj.style.top="5px"
setTimeout("getdataheight()", initialdelay)
}

function getdataheight(){
thelength=dataobj.offsetHeight
if (thelength==0)
setTimeout("getdataheight()",10)
else
scrollDiv()
}

function scrollDiv(){
dataobj.style.top=parseInt(dataobj.style.top)-scrollspeed+"px"
if (parseInt(dataobj.style.top)<thelength*(-1))
dataobj.style.top="5px"
setTimeout("scrollDiv()",40)
}

if (window.addEventListener)
window.addEventListener("load", initializeScroller, false)
else if (window.attachEvent)
window.attachEvent("onload", initializeScroller)
else
window.onload=initializeScroller

</script>
	

</body>
</html>
