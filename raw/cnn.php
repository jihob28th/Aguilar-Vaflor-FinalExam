<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("http://rss.cnn.com/rss/edition_sport.rss");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
?>
    <br/> <br/>
   <h1> CNN News</h1><br/>
                     
<?php 
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $pubDate = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;

   ?>

    <html>
    <head> <title> World Sport Daily: CNN News</title> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
      <div class="articles">  
        <br/><h3><?php echo $title;?> </h3>
             <ul><br/>
                        <li> <?php echo $description; ?> </li> <br/> <br/><br/>
                        <li> <b> Link: </b> <a href="<?php echo $link;?>" target="blank"> <?php echo $link;?>  </a> </li><br/>
                        <li> <b> Published Date:</b> <?php echo $pubDate ?></li><br/>
            </ul><br/><br/>
      </div><br/>          
 <?php
 }
?>

</body>
</html>