<?php

$nilai = "A";

if ($nilai == "A") {
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
}elseif ($nilai == "B" || $nilai =="C") {
    echo "Anda Lulus" . PHP_EOL;
}elseif ($nilai == "D" ) {
    echo "Anda tidak Lulus" . PHP_EOL;
}else  {
    echo "mungkin anda salah jurusan" . PHP_EOL;
}

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B" :
    case "C" :
        echo "Anda lulus " . PHP_EOL;
        break;
    case "D" :
        echo "Anda tidak lulus" . PHP_EOL;
    default:
        echo "mungkin anda salah jurusan" . PHP_EOL;
        break;
}