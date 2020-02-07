<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("browser");
 
 ?>
<h2> Web Browsers </h2>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $name = $data->getElementsByTagName("browsername")->item(0)->nodeValue;
   $creator= $data->getElementsByTagName("creator")->item(0)->nodeValue;
   $publish = $data->getElementsByTagName("publish")->item(0)->nodeValue;
  
   echo "<li><b>Browser Name:</b> $name
            <ul>
                <li> <b>The Creator:</b> $creator</li>
                <li> <b>Published:</b> $publish</li>
            </ul>
        </li>";
 }
?>
</ul>
