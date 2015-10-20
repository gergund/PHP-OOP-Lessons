<?php
/**
 * Created by PhpStorm.
 * User: olgagergun
 * Date: 9/13/15
 * Time: 13:19
 */

class Connection {

    public $Host_IP;
    public $Host_User;
    public $Host_Password;

    const protocol_version = '1.0';

    private $status = 'undifened';

    public function __construct($arg_Host_IP, $arg_Host_User, $arg_Host_Password){

        $this->Host_IP=$arg_Host_IP;
        $this->Host_User=$arg_Host_User;
        $this->Host_Password=$arg_Host_Password;
    }

    public function __toString() {
        return ("\nHost IP: ".$this->Host_IP.", Host User: ".$this->Host_User.", Host Password: ".$this->Host_Password."\n");
    }

    public function ShowInfo() {
        printf("Host IP: %s \n", $this->Host_IP);
        printf("Host User: %s \n", $this->Host_User);
        printf("Host Password: %s \n", $this->Host_Password);
        printf("\nProtocol version: %s \n", self::protocol_version);
        printf("\nConnection status: %s \n", $this->status);

    }

}

//example1
$connection = new Connection("192.168.1.1","admin","password");
$connection->ShowInfo();

//example2
$connection->Host_IP="192.168.10.20";
echo($connection);

//example3
$conn1 = $connection;
$conn2 = clone $connection;
$conn3 = &$connection;

$conn1->Host_IP="192.168.30.40";
echo($connection." equal and edit ".$conn1);

$conn2->Host_IP="192.168.40.50";
echo($connection." clone and edit ".$conn2);

$conn3->Host_IP="192.168.60.70";
echo($connection." equal address and edit ".$conn3);

$conn4 = new Connection("192.168.1.2","admin","password");
echo("\nProtocol version: ".$conn4::protocol_version);

