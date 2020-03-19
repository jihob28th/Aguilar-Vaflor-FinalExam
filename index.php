<?php 
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page']: '';
include('google_config/google_read.php');
if($login_button == true){
	include('facebook_config/facebook_read.php');
}
?>

<html> 
    <head>
      <title>  Final Exam </title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body style="text-align: center;"> 
	  	<div style="margin: 0 auto;">
			<?php
			if($login_button == '')
				{
				switch($page){
				case 'home':
				require_once('home.php');
				break;
				case 'login':
				require_once('login.php');
				break;
				default:
				require_once('home.php');
				break;
					}
				}else{
          		if(isset($facebook_login_url)){
				echo $login_button;	  
	  			}else{
								
	  			}
        		}
				?>

				<?php
				if(isset($facebook_login_url)){
				echo $facebook_login_url;
				}else{
				switch($page){
					case 'home':
					require_once('home.php');
					break;
					case 'login':
					require_once('login.php');
					break;
					default:
					require_once('home.php');
					break;
					}
				}
			?>
			</div>
	    <div class="footer"> By: Carl Aguilar & Lance Vaflor BSIT-2A</div>
    </body>
</html>
