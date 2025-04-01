<?php
$handle = fopen("livros.txt", "r");
    while (!feof($handle)) { 
        $line = fgets($handle);
        echo $line . "<br>"; 
    }
    fclose($handle);
  

   $handle = fopen("livros.txt", "r");
   while (!feof($handle)) { 
       $line = fgets($handle); 
       echo $line . "<br>"; 
}
   fclose($handle);

?>