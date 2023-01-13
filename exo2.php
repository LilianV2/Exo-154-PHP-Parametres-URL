<?php

if (!isset($_GET['iteration'])){
    echo "truc";
    die();
}

$iterate = $_GET['iteration'];

if ($iterate > 50){
    $iterate = 50;
}
else if ($iterate <= 0){
    $iterate = 1;
}

for ($i = 0;$i < $iterate; $i++){
    echo "<a href='exo2.php?iteration=$i'>autre lien</a><br>";
}