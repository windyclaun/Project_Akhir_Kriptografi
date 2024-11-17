<?php
    include '../../connection.php';
    include 'vigenere_algorithm.php';
    include 'rsa_algorithm.php';

    function superEncrypt($plainText, $vigenereKey, $rsaPublicKey, $rsaModulus) {
        $vigenereEncrypted = vigenereEncrypt($plainText, $vigenereKey);
        echo "Vigenere Encrypt: " . $vigenereEncrypted . "\n";
        echo "<br><br>";
        $rsaEncrypted = rsaEncrypt($vigenereEncrypted, $rsaPublicKey, $rsaModulus);
        return $rsaEncrypted;
    }

    function superDecrypt($encryptedText, $vigenereKey, $rsaPrivateKey, $rsaModulus) {
        $rsaDecrypted = rsaDecrypt($encryptedText, $rsaPrivateKey, $rsaModulus);
        echo "RSA Decrypt: " . $rsaDecrypted;
        echo "<br><br>";

        $vigenereDecrypted = vigenereDecrypt($rsaDecrypted, $vigenereKey);
        return $vigenereDecrypted;
    }
    if(isset($_POST['message']) && isset($_POST['key'])){
        $plainText = $_POST['message'];
        $key = $_POST['key'];
        $superEncrypted = superEncrypt($plainText, $key, $e, $n);
        echo "Super Encrypt: " . $superEncrypted . "\n";
        echo "<br><br>";
        $superDecrypted = superDecrypt($superEncrypted, $key, $d, $n);
        echo "Super Decrypt: " . $superDecrypted . "\n";
        echo "<br><br>";

    }

?>
