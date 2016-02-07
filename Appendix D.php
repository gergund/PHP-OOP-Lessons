<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.02.2016
 * Time: 13:48
 */

function strToHex($string){
    $hex = '';
    for ($i=0; $i<strlen($string); $i++){
        $ord = ord($string[$i]);
        $hexCode = dechex($ord);
        $hex .= substr('0'.$hexCode, -2);
    }
    return strToUpper($hex);
}
function hexToStr($hex){
    $string='';
    for ($i=0; $i < strlen($hex)-1; $i+=2){
        $string .= chr(hexdec($hex[$i].$hex[$i+1]));
    }
    return $string;
}

$key='1234567890';
$method = 'aes-256-cbc';
$iv = openssl_random_pseudo_bytes(16);
$plaintext = 'SECRET';

printf("PLAINTEXT: %s , HEX: %s \n", $plaintext,strToHex($plaintext));
$encrypted = openssl_encrypt($plaintext,$method,$key,OPENSSL_RAW_DATA,$iv);
printf("ENCRYPTED(HEX): %s \n", strToHex($encrypted));
$decrypted = openssl_decrypt($encrypted,$method,$key,OPENSSL_RAW_DATA,$iv);
printf("DECRYPTED: %s , HEX: %s \n",$decrypted,strToHex($decrypted));