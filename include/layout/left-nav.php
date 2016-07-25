<?php
?>
<div id="left-nav">
    <div id="recommended">
                Recommended
                <script type="text/javascript">
                      //specify path to your external page:
                      var iframesrc="<?php echo BASE_URL; ?>recommended.php"

                      document.write('<iframe id="datamain" src="'+iframesrc+'" width="200px" height="50px" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="1" scrolling="no"></iframe>')
                </script>

            </div><!--end recommended-->
    <!--log-in-->
    <div id="login-div">
        <h3><b>Log-in</b></h3>
    </div>
    <div id="login" >
                        <form id="login-form" method="post" action="include/checklogin.php">
                            
                            <p>
                                    <label for="username">Username: </label>
                                    <input type="text" id="username" name="username" size="30" />
                            </p>
                            <p>
                                    <label for="pass">Password: </label>
                                    <input type="password" id="pass" name="pass" size="30" />
                            </p>
                            <p>
                                    <input type="submit" value="Login" />
                            </p>
                            <p>
                                <em><!--Leave empty so see resizing--></em>
                            </p>
                        </form>
                  </div>
    <!--end log-in-->
    
    
                

           <br />
                <div id="dwd" class="ad">
            <a href="http://www.dynamicwebdezign.com/" target="_blank"><img src="<?php echo BASE_URL; ?>dwd_ad_1.jpg" width="200" height="171" border="0" /></a>
            </div><!--end dwd ad-->
            <br />
            
            <div id="quotables">
            	<script type="text/javascript">
                    //specify path to your external page:
                    var iframesrc="<?php echo BASE_URL; ?>quotable.php"
                    document.write('<iframe id="datamain" src="'+iframesrc+'" width="200px" height="50px" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>')
                </script>
            </div><!--end quotables-->
            
       </div><!--end left nav-->

