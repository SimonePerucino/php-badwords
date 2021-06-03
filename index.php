<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->

<?php

$parola = $_GET["badword"];

$paragrafo = "paragrafo di " . $parola . " ";

echo $paragrafo;
echo strlen($paragrafo);

echo "<br>";

$paragrafo2 = str_replace($parola, "***", $paragrafo);
echo $paragrafo2;
?>