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
$key = 'abc';
$alphabet = getPermutations($key, strlen($key) - 1);

$index=0;
for($i=65;$i<92;$i++){
    $map[chr($i)] = $alphabet[$index];
    $index++;
}

print_r($map);