<?php
 if ($_FILES["doc1"]["error"] > 0)
   {
   echo "Error: " . $_FILES["doc1"]["error"] . "<br>";
   }
 else
   {
   echo "Upload: " . $_FILES["doc1"]["name"] . "<br>";
   echo "Type: " . $_FILES["doc1"]["type"] . "<br>";
   echo "Size: " . ($_FILES["doc1"]["size"] / 1024) . " kB<br>";
   echo "Stored in: " . $_FILES["doc1"]["tmp_name"];
   }
 ?> 