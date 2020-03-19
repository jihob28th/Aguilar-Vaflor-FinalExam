<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("http://feeds.bbci.co.uk/sport/rss.xml?edition=uk#"); //XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
?>
    <br/> <br/>
   <h1> BBC News</h1><br/>
                     
<?php 
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $pubDate = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;

   ?>

    <html>
    <head> <title> World Sport Daily: BBC News</title> 
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