<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 31.01.2016
 * Time: 17:06
 */

function getPermutations($str = '', $max = 0, $depth = 0, $row = array()) {
    $perms = array();
    for($i = 0; $i <= $max; ++$i) {
        $row[$depth] = isset($row[$depth]) ? ($row[$depth] + 1) : 0;
        if($depth < $max) {
            $res = getPermutations($str, $max, $depth + 1, $row);
            foreach($res as $subrow)
                $perms[] = $subrow;
        } else {
            $subrow = '';
            foreach($row as $char)
                $subrow .= $str{$char};
            $perms[] = $subrow;
        }
    }
    return($perms);
}
$str = 'abc';

$alphabet = getPermutations($str, strlen($str) - 1);

print_r($alphabet);