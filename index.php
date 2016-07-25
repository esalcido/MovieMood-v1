<?php

include 'dbConfig.php';
//connectDB();
//require_once "include/Database.php";
//$db = new Database();
//==========================================
session_start();          

?>
        <!--call in header here-->
    	<?php include "include/layout/header.php"; ?>
        
        <div id="content">
            
        <!--call in left nav div -->
        <?php  include "include/layout/left-nav.php";?>

        <div id="center">

                <div id="featured"     >  
                    <p><h2>My Latest</h2></p>
                <div id="rotator-js">
                      <script language="javascript">
                            var sliderwidth="600px" 
                            var sliderheight="250px" 
                            var slidespeed=3 
                            slidebgcolor="transparent"  
                            var leftrightslide=new Array()
                            var finalslide=''		
                    <?php  
                    
                    
                    $op=null;
                    $max;

                    //get max movie from Database
                    $result = mysql_query("select distinct max(id) from movie") or die(mysql_error()); 

                    while($row = mysql_fetch_array($result) ){

                            $max = $row[0];
                            echo "max =  ".$max;
                    }

                    $min = $max - 30;
                    //this is where its cut A===================================
                   $query2 = "select distinct id, movPicture 	from movie	where id >".$min." and not(movPicture = 'noImage')";
                    $result1 = mysql_query($query2);
                    $num = mysql_num_rows($result1);

                     $i = $num;
                        while ( $i >= 0) {
                                $obj = mysql_fetch_array($result1);

                                echo "leftrightslide[".$i."]='<img src=\"./images/". $obj[1]. "\" border=1><---" .$obj[0]. "' \n"; 

                        $i--;
                        }
                    //this is where its cut B========================

                ?>

                            var imagegap=" "  
                    var slideshowgap=5 
                </script>
                <script type="text/javascript" src="./slider.js"></script>	
                <br />
                </div><!--end rotator-js-->
            </div><!--end featured div-->

            <div id="center-menu" style=" padding-bottom: 15px;">
                <div id="movie-button" class="home-button" style="float:left;">
                    <a style="float:left;" href="./cgi/movie.php?counter=1"> <img src="./images/dvdPic.jpg" alt="check out my movie collection" name="movieLink"   id="movieLink" /></a>
                    <p>&nbsp;My Movies</p>
                </div>
                <div id="contact-button" class="home-button" style="float:right;">
                    <a style="float:left;" href="./cgi/search2.php"><img src="./images/searchNewFla.gif" alt="click here for Search" name="searchLink" width="87" height="87" border="0"  id="searchLink" /></a> 
                    
                    <p>&nbsp;Search</p>
                </div>
                <div id="search-button" class="home-button" style="float:left;">
                    <a style="float:left;" href="./contact.html"><img src="./images/handshake.jpg" alt="click here for Contact" name="contactLink" width="87" height="87" border="0" id="contactLink" /></a> 
                    <p>&nbsp;Contact</p>
                </div>
                <div id="forum-button" class="home-button" style="float:right;">
                    <a style="float:left;" href="#"><img src="./images/forum.jpg" alt="click here for Forum" name="forumLink" width="86" height="86" border="0"  id="forumLink" /></a>
                    <p>&nbsp;Forum</p>
                </div>
           
            </div><!-- end center-menu-->

            <br /><br />



        </div><!--end center-->
    </div><!--end content-->
            <br
      <!--call in the footer -->
      <?php include "include/layout/footer.php"; ?>
            
    
    </div>
    
    </div><!--end wrapper-->
    	

</body>
</html>