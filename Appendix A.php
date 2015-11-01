<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 01.11.2015
 * Time: 19:43
 */

for($i=0;$i < 1000; $i++){
    $byte = "";

    for($j=0; $j<8; $j++) {
        $bit = rand(0,1);
        $byte = $byte . $bit;
    }

    printf("BYTE: %s \n", $byte);
    printf("CHAR: %c \n", $byte);
    printf("DEC:  %s \n\n", bindec($byte));

}

