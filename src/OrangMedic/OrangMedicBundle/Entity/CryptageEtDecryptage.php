<?php
namespace OrangMedic\OrangMedicBundle\Entity;

class CryptageEtDecryptage
{
// Encrypt Function
public static function mc_encrypt($encrypt){
    $key = 'myKey';
    $encoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $encrypt, MCRYPT_MODE_CBC, md5(md5($key))));
    return $encoded;
}

// Decrypt Function
public static function mc_decrypt($decrypt){
    $key = 'myKey';
    $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($decrypt), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
    return $decrypted;
}
}