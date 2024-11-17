<?php
function vigenereEncrypt($plaintext, $key) {
    $ciphertext = '';
    $key = strtoupper($key);
    $keyLength = strlen($key);
    $keyIndex = 0;

    foreach (str_split($plaintext) as $char) {
        if (ctype_alpha($char)) {
            $offset = ord(ctype_upper($char) ? 'A' : 'a');
            $char = chr((ord($char) - $offset + ord($key[$keyIndex]) - ord('A')) % 26 + $offset);
            $keyIndex = ($keyIndex + 1) % $keyLength;
        }
        $ciphertext .= $char;
    }
    return $ciphertext;
}

function vigenereDecrypt($ciphertext, $key) {
    $plaintext = '';
    $key = strtoupper($key);
    $keyLength = strlen($key);
    $keyIndex = 0;

    foreach (str_split($ciphertext) as $char) {
        if (ctype_alpha($char)) {
            $offset = ord(ctype_upper($char) ? 'A' : 'a');
            // $char = chr((ord($char) - ord($key[$keyIndex]) + 26) % 26 + $offset);
            $char = chr((ord($char) - $offset - (ord($key[$keyIndex]) - ord('A')) + 26) % 26 + $offset);
            $keyIndex = ($keyIndex + 1) % $keyLength;
        }
        $plaintext .= $char;
    }
    return $plaintext;
}
?>
