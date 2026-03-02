<?php

$a = 4;
$b = 7;
$pass = "abc123";

echo "dane liczby to 4 oraz 7 (a i b)\n";

if($a % 2 == 0) {
    echo "liczba a jest parzysta\n";
} else {
    "liczba a jest nieparzysta\n";
}

echo "\n";

if($a % $b ===0) {
    echo "liczba a jest podzielna przez liczbe b\n";
} else {
    echo "liczba a nie jest podzielna przez liczbe b\n";
}

echo "\n";

if($a > 1 && $a < 10) {
    echo "liczba a jest z przedzialu <1,10>\n";
} elseif($a > 17 && $a < 21) {
    echo "liczba a jest z przedzialu <17,21>\n";
}

echo "\n";

echo "osoba jest ";

if($a < 11) {
    echo "dzieckiem\n";
} elseif($a >= 11 && $a <= 17) {
    echo "nastolatkiem\n";
} elseif($a >= 18) {
    echo "dorosla\n";
}

echo "\n";

if(strlen($pass) < 5) {
    echo "haslo jest bardzo slabe\n";
} elseif(strlen($pass) >= 5 && strlen($pass) <= 8) {
    echo "haslo jest slabe\n";
} elseif(strlen($pass) >= 9 && strlen($pass) <= 11) {
    echo "haslo jest silne\n";
} elseif(strlen($pass) > 11) {
    echo "haslo jest bardzo silne\n";
} 

echo "\n";

$rok = readline("podaj rok: ");
$dni = 28;

if ($rok % 400 == 0) {
    $dni = 29;
} elseif ($rok % 100 == 0) {
    $dni = 28;
} elseif ($rok % 4 == 0) {
    $dni = 29;
} else {
    $dni = 28;
}

echo "Luty w roku $rok ma $dni dni.";
echo "\n";
$liczbaUsera = readline("Dawaj liczbe nr1: \n");
$liczbaUsera2 = readline("Dawaj liczbe nr2: \n");
$liczbaUsera3 = readline("Dawaj liczbe nr3: \n");

if($liczbaUsera < $liczbaUsera2 && $liczbaUsera3) {
    echo "liczba $liczbaUsera z 3 podanych jest najmniejsza\n";
} elseif($liczbaUsera2 < $liczbaUsera && $liczbaUsera3) {
    echo "liczba $liczbaUsera2 z 3 podanych jest najmniejsza\n";
} elseif($liczbaUsera3 < $liczbaUsera && $liczbaUsera2) {
    echo "liczba $liczbaUsera3 z 3 podanych jest najmniejsza\n";
}

echo "\n";







//$a = 10;
//$b = 5;

//print "modulo wartosci: " . $a * $b;



//$koszyk = 0;
//$cenasoku = 7.6;
//$cenaczekolady = 25;

//$koszyk = $cenasoku + $cenaczekolady;

//print $koszyk;

//$cenasuperczekolady = $cenaczekolady * 1.23;
//$koszyk = $koszyk + $cenasuperczekolady;
//print "<br />" . $koszyk;
?>