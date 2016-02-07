<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 31.01.2016
 * Time: 17:06
 */

function getPermutations($key = '', $max = 0, $depth = 0, $row = array()) {
    $perms = array();
    for($i = 0; $i <= $max; ++$i) {
        $row[$depth] = isset($row[$depth]) ? ($row[$depth] + 1) : 0;
        if($depth < $max) {
            $res = getPermutations($key, $max, $depth + 1, $row);
            foreach($res as $subrow)
                $perms[] = $subrow;
        } else {
            $subrow = '';
            foreach($row as $char)
                $subrow .= $key{$char};
            $perms[] = $subrow;
        }
    }
    return($perms);
}

function getMap($key){
    $alphabet = getPermutations($key, strlen($key) - 1);

    $index=0;
    for($i=65;$i<92;$i++){
        $map[chr($i)] = $alphabet[$index];
        $index++;
    }
return $map;
}

function decode($map,$msg_in)
{
    $msg_index=0;$map_index=0;
    foreach($msg_in as $char_in){
        foreach($map as $char_out => $value){
            if($char_in == $char_out) {
                $msg_out[$msg_index] = $value;
            }
            $map_index++;
        }
        $msg_index++;
    }

    return $msg_out;
}

function encode($map,$msg_in){
    return $msg_out;
}

$key = 'abc';

if( strlen($key) == 3){
    $map = getMap($key);
    print_r($map);

    $in = str_split('ILOVEYOU');
    $out = decode($map,$in);

    foreach($out as $char){
        echo $char." ";
    }



}else{
    printf("Key size should be 3 unrepeteable symbols. Please check your key");
}

#$input_msg = trim(fgets(STDIN));
#$msg_in = str_split($input_msg);


