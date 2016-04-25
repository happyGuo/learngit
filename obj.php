<?php

namespace MySpaces;

abstract class Domain
{

    public static function create()
    {
        return new static();
    }
}
class PartnerC extends Domain
{
    public function __toString()
    {
        return 'this class is '.__NAMESPACE__;
    }
   const  VAL = 15; 
   public static $pNum = 9;
   public  $ppNum = 9;
   public static function getP()
   {
    return self::VAL;
   }
}

$pd = new PartnerC();
echo $pd::getP()."\n";
if ($pd instanceof Domain) {
    echo "yes\n";
}

if (is_callable([$pd,'getP'])) {
    echo "yes\n";
}
echo(new PartnerC());
class TimesTwoStage extends PartnerC
{
    public static $num=10;
    private $out;
    public static $publicProperty = 'bar';
     public static function getStaticNum()
    {
        return parent::getP();
    }
    public function __invoke($payload)
    {
        return $payload * 2;
    }
   
    public function __set($out,$payload)
    {
        return $this->$out = $payload;
    }
     public function __get($out)
    {
        if (isset($this->$out)) {
          return $this->$out;
        }else{
          return 'not exists varbles';
        }
    }
    public function command($parameters)
    {
        echo "command method {$parameters}";
    }
    public function __call($method,$parameters)
    {
       if(method_exists($this, $method)){
        $this->command($parameters);
       }else{
        return 'method is not exists';
       }
    }
}

class Node
{
    public $root;
    public $leftNode = null;
    public $rightNode = null;
}
function preorder($root){
    $stack = array();
    array_push($stack, $root);
    while(!empty($stack)){
        $center_node = array_pop($stack);
        echo $center_node->root.' ';
        
        if($center_node->rightNode != null) array_push($stack, $center_node->rightNode);
        if($center_node->leftNode != null) array_push($stack, $center_node->leftNode);
    }
}
$a = new Node();
$b = new Node();
$c = new Node();
$d = new Node();
$e = new Node();
$f = new Node();
$a->root = 'A';
$b->root = 'B';
$c->root = 'C';
$d->root = 'D';
$e->root = 'E';
$f->root = 'F';
$a->leftNode = $b;
$a->rightNode = $c;
$b->leftNode = $d;
$b->rightNode = $e;
$c->leftNode = $f;
preorder($a);
echo "\n";
