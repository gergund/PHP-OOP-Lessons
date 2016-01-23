<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.01.2016
 * Time: 19:05
 */

interface Collector {

    public function SetData( $data);
    public function GetData();
}

class ArrayCollector implements Collector {

    private $collector = array();

    public function SetData( $data)
    {
        // TODO: Implement SetData() method.
        $this->collector[] = $data;
    }

    public function GetData()
    {
        // TODO: Implement GetData() method.
        return $this->collector;
    }
}

$obj = new ArrayCollector();
$obj->SetData(1);
$obj->SetData(2);
$obj->SetData(3);

foreach ($obj->GetData() as $key=>$value) {
    printf("Element[%s]: %s \n",$key,$value);
}