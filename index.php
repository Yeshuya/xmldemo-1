<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xmlactivity.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("article");
?>

 <h1Articles</h1>

 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
     $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
     $author = $data->getElementsByTagName("author")->item(0)->nodeValue;
     $created = $data->getElementsByTagName("created")->item(0)->nodeValue;
     echo "<ul>
            <h2>$title</h2>
              <ul>
                  <li>Description: $description </li>
                  <li>Author: $author </li>
                  <li>Date Created: $created </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
