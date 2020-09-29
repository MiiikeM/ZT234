
<?php

$instance = new Mestak;
class Mestak {
    public $JDM1 = 20; 
    public $JDM2 = 30;
    public $JDM3 = 23;
    public $JDM4 = 63;
    public $JDM5 = 7 ;
    protected $JDM6 = 26;
    protected $JDM7 = 31; 
    protected $JDM8 = 36;
    private $JDM9 = 189;
    private $JDM10 = 65;

    public function getJDM1 () {
       return $this-> JDM1;
    }
    public function getJDM2 () {
       return $this-> JDM2;
    }
    public function getJDM3 () {
       return $this-> JDM3;
    }
    public function getJDM4 () {
       return $this-> JDM4;
    }
    public function getJDM5 () {
       return $this-> JDM5;
    }
    private function setJDM9 () {
       return $this-> JDM9; 
    }
    private function setJDM10 () {
        return $this-> JDM10;
    }
    public function _construct () {

    }
} 
var_dump ($instance);
$JDM1 = new Mestak();
$JDM1-> getJDM1('20');
echo $JDM1-> getJDM1();
echo '<br>';
$JDM2 = new Mestak();
$JDM2-> getJDM2('30');
echo $JDM2-> getJDM2();
echo '<br>';
$JDM3 = new Mestak();
$JDM3-> getJDM3('23');
echo $JDM3-> getJDM3();
echo '<br>';
$JDM4 = new Mestak();
$JDM4-> getJDM4('63');
echo $JDM4-> getJDM4();
echo '<br>';
$JDM5 = new Mestak();
$JDM5-> getJDM5('7');
echo $JDM5-> getJDM5();
?>
