<?php


if ($_SERVER["REQUEST_METHOD"] == "POST")
$nota      =    $_POST ['nota'];


if ($nota >= 9) {
   echo "Excelente";
};

if ($nota >= 7 && $nota <=8.9 ) {
   echo "Bom";
};

if ($nota >= 5 && $nota <=6.9 ) {
   echo "Regular";
};

if ($nota <5) {
   echo "Reprovado";
};






?>