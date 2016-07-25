<!--left nav-->
    <div id='tx' align = 'left'>
           <table  align =  'left' dir=ltr border cellpadding='4'>
                 <tr>
                     <td width = 90 align = center><u>menu</u></td>
                 </tr>
                 <tr>
                     <td width = 90 align = center>
                    <a href="./search.html">Search</a>
                     </td>
               </tr>
               <tr>
                   <td width = 90 align = center>
                    <a href="../index.php">Home</a>
                    </td>
               </tr>
               <tr>
                   <td width = 90 align = center>
                   
                   <FORM NAME="nav"> 
                   
                   <SELECT NAME="SelectURL" onChange="document.location.href=document.nav.SelectURL.options[document.nav.SelectURL.selectedIndex].value"><OPTION > Page <?php floor($pageNum) ;?>
                   <?php 
                        for ( $counter = 1; $counter <= $numPages; $counter++) {
                                echo "<OPTION VALUE='./movie.php?counter=".$counter."'>Page".$counter."</OPTION>" ;
                                }
                    ?>
 
                    </SELECT>
                    </FORM> 
                   <pre><a href='./movie.php?counter=<?php echo($pageNum - 1) ?>'>Prev</a>   <a href='./movie.php?counter=<?php echo ($pageNum+1)?>'>Next</pre>
                    <pre><a href='./movie.php?counter=1'>First</a>   <a href='./movie.php?counter=<?php echo $numPages ?>'>Last</a></pre>
                   
                   </td>
            </tr>
            <tr>
            <td width = 90 align = center>Updated: <?php echo $update ?> </td>
            </tr>
            <tr>
            <td width = 90 align = center> </td>
            </tr>
            
            </table>
    </div><!--end left nav-->
