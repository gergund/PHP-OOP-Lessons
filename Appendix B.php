<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.01.2016
 * Time: 11:15
 */

class Group {
    static public $self_count=0;

    public $this_count=0;

    public function Inc_This(){
        $this->this_count++;
    }

    public function Inc_Self(){
        self::$self_count++;
    }

    public function Results(){
        printf("Count this: %s \n",$this->this_count);
        printf("Count self: %s \n",self::$self_count);
    }
}

$group1 = new Group();
$group1->Inc_Self();
$group1->Inc_This();
$group1->Results();

echo ("\n__________________________\n");

$group2 = new Group();
$group2->Inc_This();
$group2->Inc_Self();
$group2->Results();