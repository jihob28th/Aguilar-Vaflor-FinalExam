<?php
$load = (isset($_GET['page'])&& $_GET['page'] !='')? $_GET['page'] : '';

include('google_config/google_read.php');
if($login_button == true){
    include('facebook_config/facebook_read.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
		<title> Sample Movies Site </title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
    <body>
	    <p style="color: white;"> Logged in as <?php echo $_SESSION['user_first_name'] ?> <?php echo $_SESSION['user_last_name'] ?> </p>
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
               
                        <?php 
                        switch($loadnav){
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
                        ?>
        <div class="footer"> By: Carl Aguilar & Lance Vaflor BSIT-2A</div>
    </body>
    <a href="logout_google.php" onClick="location.href='logout_facebook.php'">Logout</a>
</html>
