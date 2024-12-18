<?php

// Menghasilkan kunci RSA
$p = 61;
$q = 53;
$n = $p * $q;
$phi = ($p - 1) * ($q - 1);
$e = 17;
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function modInverse($e, $phi) {
    $m0 = $phi;
    $x0 = 0; 
    $x1 = 1;
    
    while ($e > 1) {
        $q = intdiv($e, $phi);
        $temp = $phi;
        $phi = $e % $phi;
        $e = $temp;
        
        $temp = $x0;
        $x0 = $x1 - $q * $x0;
        $x1 = $temp;
    }

    return ($x1 + $m0) % $m0;
}

function rsaEncrypt($plaintext, $e, $n) {
    $ciphertext = [];
    foreach (str_split($plaintext) as $char) {
        $ciphertext[] = bcpowmod(ord($char), $e, $n);
    }
    return implode(' ', $ciphertext);
}

function rsaDecrypt($ciphertext, $d, $n) {
    $plaintext = '';
    $cipherArray = explode(' ', $ciphertext);
    foreach ($cipherArray as $cipherChar) {
        $plaintext .= chr(bcpowmod($cipherChar, $d, $n));
    }
    return $plaintext;
}



while (gcd($e, $phi) != 1) {
    $e++;
}

$d = modInverse($e, $phi);
?>
