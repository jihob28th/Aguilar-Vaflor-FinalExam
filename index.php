<?php 
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page']: '';
include('google/google-confirm.php');
if($login_button == true){
	include('facebook/facebook-confirm.php');
}
?>

<html> 
    <head>
      <title>  Final Exam </title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body> 
    <div class="navhead">
            <div class="navigation">
                        <ul> 
                        <li> <a href="index.php?loadnav=home"> <b>HOME </b></a> </li>
                        <li> <a href="index.php?loadnav=list"> SHOW PRODUCT</a> </li>
                        <li> <a href="index.php?loadnav=categories"> CATEGORIES</a> </li>
                        <li> <a href="index.php?loadnav=create"> CREATE  </a> </li>
                        </ul>
                        </div>
                    </div>
	  	<div class="content">
			<?php
			if($login_button == '')
				{
				switch($page){
				case 'list':
			        require_once 'show.php';
		                break;
				case 'categories':
				require_once 'categories.php';
				break;
				case 'create':
				require_once 'form_create.php';
				break;
				case 'profile':
				require_once 'pro_profile.php';
				break;
				default:
				require_once 'home.php';
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
				  case 'readprod':
				  require_once 'show.php';
				  break;
				  case 'readcat':
				  require_once 'show_categories.php';
				  break;
				  case 'pro_update':
				  require_once 'pro_update.php';
				  break;
				  case 'pro_create':
				  require_once 'pro_create.php';
				  break;
				  case 'create':
				  require_once 'form_create.php';
				  break;
				  case 'update':
				  require_once 'form_create.php';
				  break;
				   case 'delete':
				  require_once 'pro_delete.php';
				  break;
				  case 'details':
				  require_once 'product_details.php';
				  break;
				  default: 
				  require_once('show.php');
                                  break;
					}
				}
			?>
			</div>
	    
    </body>
</html>
