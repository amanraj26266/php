<?php
interface fruit{
    public function color();
}
class apple implements fruit {
  public function color()
  {
    echo "red";
  }
}
$fruit = new apple();
$fruit->color();
?>


<!-- example 2  -->

<?php
class A{
  public function display1(){
    echo "parent A <br>";
  }
}
interface B{
  public function display2();
}
class c extends A implements B{
  public function display2(){
    echo "parent B <br>";
  }
  public function display3(){
    echo "child C<br>";
  }
}
$obj = new c();
$obj-> display1();
$obj-> display2();
$obj-> display3();

?>
 

 <!-- php inheritence Example -->

<?php
class Shapes {
  public $length;
  public $width;

  public function __construct($length, $width) {
    $this->length = $length;
    $this->width = $width;
  }
}

class Rect extends Shapes {
  public $height;

  public function __construct($length, $width, $height) {
    $this->length = $length;
    $this->width = $width;
    $this->height = $height;
    $this-> area = $length*$width;
    
  }


  public function showInformation() {
    echo "The length is {$this->length}, the width is {$this->width}, and the height is {$this->height}. <br>";
    
  }
  public function claculateArea(){
    echo "the area of the rectangele is {$this-> area}";
  }
}

    

$r = new Rect(10, 20, 30);
$r->showInformation();
$r->calculateArea();
?>


<!-- Assess modifiers  -->
<!-- 
<?php
class fruits{
  public $name;
  protected $color;
  private $weight;
}
$mango = new fruits();
$mango-> name = "mango";
$mango-> color = "yellow";
$mango-> weight = "300";
?> -->
