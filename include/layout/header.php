<?php
    define('BASE_URL', '/OWC/');
    $site_title = 'Movie Mood';
?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/style.css" />
    
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title><?php echo $site_title; ?></title>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="<?php echo BASE_URL; ?>plugins/fancyapps-fancyBox-18d1712/lib/jquery-1.10.1.min.js"></script>

	
        <!--open font  -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        
        <!--included files for top menu-->
        
        <!--end included files css for menu -->
        	<link rel="stylesheet" href="<?php echo BASE_URL; ?>plugins/dist/css/superfish.css" media="screen">
<!--		<style> body { max-width: 40em; } </style>-->
		<script src="<?php echo BASE_URL; ?>plugins/dist/js/jquery.js"></script>
		<script src="<?php echo BASE_URL; ?>plugins/dist/js/hoverIntent.js"></script>
		<script src="<?php echo BASE_URL; ?>plugins/dist/js/superfish.js"></script>
		<script>

		
			$(document).ready(function(){

				// initialise plugin
				var example = $('#example').superfish({
					//add options here if required
				});

				// buttons to demonstrate Superfish's public methods
				$('.destroy').on('click', function(){
					example.superfish('destroy');
				});

				$('.init').on('click', function(){
					example.superfish();
				});

				$('.open').on('click', function(){
					example.children('li:first').superfish('show');
				});

				$('.close').on('click', function(){
					example.children('li:first').superfish('hide');
				});
$("#login-div").click(function(){
                            $("#login").slideToggle();
                        });			
    
    
    });

		</script>
                <script>
                    
//                    $(document).ready(){
//                        
//                    });
                    
                
                </script>
        
        
    
        <!--rotten tomatoes api -->
        <script>

            var apikey = "gnnfgwamusxjqqvw864syu85";

            var baseUrl = "http://api.rottentomatoes.com/api/public/v1.0"; 

            // construct the uri with our apikey
            var moviesSearchUrl = baseUrl + '/lists/movies/upcoming.json?apikey=' + apikey;
            var query = "Gone with the Wind";



            $(document).ready(function() {

              // send off the query
              $.ajax({

                url: moviesSearchUrl,

                dataType: "jsonp",

                //success: searchCallback

              });

            });

            // callback for when we get back the results

            function searchCallback(data) {

             //$(document.body).append('Found ' + data.total + ' results for ' + query);

             var movies = data.movies;

             $.each(movies, function(index, movie) {

               $(document.body).append('<img src="' + movie.posters.thumbnail + '" />');
               $(document.body).append('<p>' + movie.title + '</p>');
             });

            }
        </script>

        <!--end rotten tomatoes-->
	
    </head>
    <body>
    
    <div id="wrapper">
    <div style=" background-color:#000">
        <div id="top-nav" >
            <div id="banner" align="center" onclick="index.php">
<!--                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="738" height="81">
                        <param name="movie" value="<?php echo BASE_URL; ?>/classBanner2.swf" />
                        <param name="quality" value="high" />
                        <param name="wmode" value="transparent" />
                        <embed src="<?php echo BASE_URL; ?>classBanner2.swf" quality="high" scale="exactfit" wmode="transparent" bgcolor="#0033cc" width="738" height="81" name="classBanner2" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
                    
                    </object>-->
<h1><p id="top-banner-title">MOVIE MOOD</p></h1>
           </div>
<!--            <div id="navbar">
                <ul class="sf-menu" id="example">
                    <li>home</li>
                    <li>My Movies</li>
                    <li>Contact</li>
                </ul>
            </div>
        -->
        
        </div>
        
        <hr />

             
                <div id='search'  style="float:right;">
                    <form name="form" action="<?php echo BASE_URL; ?>cgi/search.php" method="get">
                        <input type="text" name="q" placeholder='enter movie title here'/>
                        <input type="submit" name="Submit" value="Search" />
                    </form>
                </div>