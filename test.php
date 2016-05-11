
<?php 
/*
echo '<pre>';
print_r(debug_backtrace());
	exit();
echo '</pre>';
*/	




class Artem{
private $name;
private $age;


public function __set($name,$value){
	$this->$name = $value;
}

public function __get($name){
	return $this->$name.'<br />';
}

public function __call($name,$arguments){ 

	echo "danogo vetoda nema '.$name.'.'<br />'" ;
}

public static function __callStatic($name,$arguments){
  echo "static".'<br />';

}

public function __isset($name){ 

	echo " nema dostupu do zminnoi'.$name.'.'<br />'" ;
}

public function __unset($name){ 

	echo " nema dostupu do zminnoi'.$name.'.'<br />'" ;
}
public function __sleep($name){ 

	echo " nema dostupu do zminnoi'.$name.'.'<br />'" ;
}



}

$a = new Artem();
$a->name='Artem';
$a->age=29;
echo $a->age;
$a->sss(); 
Artem::ssss();
isset($a->age);
unset($a->age);

class myException extends Exception{
	public function __construct($message){
		parent::__construct($message);
	}
}


echo '<br />';


class Person{
public $name;
private $age;
public $id;
  
function construct( $name, $age ){
 $this->name = $name;
 $this->age = $age; 
}
function setid( $id ){
 $this->id = $id; 
 }
 function __clone(){
  $this->id = 4;
  }
 }
 $person = new Person( "vasya", 44 );
  $person->setid( 343 );
   $person2 = clone $person;
   echo  $person2->name;
   
   
   function d (){
   	echo "Hello Artem!!!";
   }
   
   call_user_func("d");
   
   class Math{
   use B,B1 {
   B::a insteadof B1;
   }
   public $numbers;
   
   public function get_numbers($files,$callback = false){
   	if(is_array($files)){
		foreach($files as $file){
			if(file_exists($file.".txt")){
				
				$data = file($file.".txt");
				if(is_callable($callback)){
					$data = call_user_func($callback,$file,$data);
				}
				$this->numbers[$file] = $data;
			}
		}
		return $this->numbers;
	 }
    }
   }
   /*
   class MyClass{
   
   	public static function my_callback($file,$data){
			foreach($data as $item){
				$arr[] = $item."from file - ".$file;
			}
			return $arr;
	}
	
	 	public function my_callback2($file,$data){
			foreach($data as $item){
				$res = $item/100;
				$arr[] = $res."/100 ";
			}
			return $arr;
	}
   }
   
   function my_callback3($file,$data){
			foreach($data as $item){
				$res = $item*100;
				$arr[] = $res."*100";
			}
			return $arr;
	}
	*/
	 class F extends Math {
   
   }
   
  $files = array(
  	'number1',
    'number2',
	'number3'
           ); 
 $obj = new F();
 //$result = $obj->get_numbers($files);
// $callback = "my_callback3";
 // $callback = array("MyClass","my_callback");
// $obj2 = new MyClass();
 //$callback = array($obj2,"my_callback2");
 $obj->a();
 $callback = function($file,$data){
 	foreach($data as $item){
				$res = $item*1000;
				$arr[] = $res."*1000";
			}
			return $arr;
 };
 $result = $obj->get_numbers($files,$callback); 
 echo"<pre>";
 print_r($result);
 echo"</pre>";  
   
  
   
   trait B {
   public function a(){
    echo "hello Nazar";
   }
   
   }
    trait B1{
   public function a(){
    echo "hello Nazar 2";
   }
   
   }
   $class = new ReflectionClass('Math');
   Reflection::export($class);
   
   
   
   
   
   
   
   


















