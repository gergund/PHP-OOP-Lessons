<?php
/**
 * Created by PhpStorm.
 * User: dgergun
 * Date: 20.09.15
 * Time: 9:10
 */
class FileSystem_Tree
{
    protected $fs_tree;

    public function __construct($array_tree){

        $this->fs_tree = $array_tree;
    }

    public function ShowTree(){
        $keys = array_keys($this->fs_tree);

        foreach($keys as $dirs) {
            print $dirs . " =>\n";

            foreach ($this->fs_tree[$dirs] as $items) {
                print "\t" . $items . "\n";
            }
        }

        print "\n";
    }

    public function Add($sub){
        $this->fs_tree = $sub;
    }

}


$directories = new FileSystem_Tree(array('dir 1' => array('file 11', 'file 12', 'file 13'), 'dir 2' => array('file 21', 'file 22'), 'dir 3' => array()));
$directories->ShowTree();

$directories->Add(array('dir 4' => array('file 41', 'file 42', 'file 43')));
$directories->ShowTree();

$directories->Add(array('dir 5' => array('file 51')));
$directories->ShowTree();


