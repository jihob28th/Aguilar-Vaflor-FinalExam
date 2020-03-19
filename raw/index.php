<?php 
$loadnav = (isset($_GET['loadnav']) && $_GET['loadnav'] != '') ? $_GET['loadnav']: '';
?>

<html> 
    <head>
        <title> World Sport Daily </title>
        <link rel="icon" type="image/ico" href="Images/logo01.png" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body bgcolor="black">
        
            <div class="header">  </div>
            <div class="navhead">
            
                    <div class="navigation">
                        <ul> 
                            <li> <a href="index.php?loadnav=home"> <b>HOME </b></a> </li>
                            <li> <a href="index.php?loadnav=bbc"> <b>BBC SPORTS </b></a> </li>
                            <li> <a href="index.php?loadnav=cnn"> <b>CNN SPORTS  </b></a> </li>
                            <li> <a href="index.php?loadnav=aboutus"> <b>ABOUT US </b></a> </li>
                        </ul>
                        </div>
                    </div>              

                        <div class="main_body">
                            <?php 
                            switch($loadnav){
                                case 'bbc':
                                require_once 'bbc.php';
                                break;
                                case 'cnn':
                                require_once 'cnn.php';
                                break;
                                case 'aboutus':
                                require_once 'aboutus.php';
                                break;
                                default:
                                require_once 'home.php';
                                break;
                            }
                            ?>
                        </div>
            <div class="footer">
            <div class="form">
                    <b></br>&#169; 2019 World Sport Daily. All rights reserved.</b>
                </div>
        </div>
 
    </body>
</html>