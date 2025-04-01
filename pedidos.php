<?php
$handle = fopen("pedidos.txt", "r");// Abre o arquivo para leitura
    while (!feof($handle)) { // Enquanto não chegar ao final do arquivo
        $line = fgets($handle); // Lê uma linha do arquivo
        echo $line . "<br>"; // Imprime a linha lida do arquivo
    }
    fclose($handle);// Fecha o arquivo após a leitura
    // O arquivo é fechado para liberar os recursos do sistema

   $handle = fopen("pedidos.txt", "r");// Abre o arquivo para leitura
   while (!feof($handle)) { // Enquanto não chegar ao final do arquivo
       $line = fgets($handle); // Lê uma linha do arquivo
       echo $line . "<br>"; // Imprime a linha lida do arquivo
}
   fclose($handle);// Fecha o arquivo após a leitura
// O arquivo é fechado para liberar os recursos do sistema
?>