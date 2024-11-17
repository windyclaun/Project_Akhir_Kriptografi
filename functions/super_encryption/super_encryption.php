<?php
    include '../../connection.php';
    include 'vigenere_algorithm.php';
    include 'rsa_algorithm.php';

    function superEncrypt($plainText, $vigenereKey, $rsaPublicKey, $rsaModulus) {
        $vigenereEncrypted = vigenereEncrypt($plainText, $vigenereKey);
        $rsaEncrypted = rsaEncrypt($vigenereEncrypted, $rsaPublicKey, $rsaModulus);
        return $rsaEncrypted;
    }

    function superDecrypt($encryptedText, $vigenereKey, $rsaPrivateKey, $rsaModulus) {
        $rsaDecrypted = rsaDecrypt($encryptedText, $rsaPrivateKey, $rsaModulus);
        $vigenereDecrypted = vigenereDecrypt($rsaDecrypted, $vigenereKey);
        return $vigenereDecrypted;
    }
    if(isset($_POST['message']) && isset($_POST['key'])){
        $plainText = $_POST['message'];
        $key = $_POST['key'];
        $superEncrypted = superEncrypt($plainText, $key, $e, $n);
        $query = "INSERT INTO secret_messages (plain_text, vigenere_key, encrypted_text) VALUES ('$plainText', '$key', '$superEncrypted')";
        $result = mysqli_query($connect, $query);
        if($result){
            echo "<script>alert('Data berhasil disimpan');</script>";
            echo "<script>window.location.href='../../dashboard.php';</script>";
            exit();
        }else{
            echo "<script>alert('Data gagal disimpan');</script>";
        }
        // $superDecrypted = superDecrypt($superEncrypted, $key, $d, $n);
    }
    

?>
