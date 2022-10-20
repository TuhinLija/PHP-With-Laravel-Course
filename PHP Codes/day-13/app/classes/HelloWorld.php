<?php

namespace App\classes;

class HelloWorld
{
   public $father_name;
   public $age = 20;
   public $number=40;
   public $number1=30;
   

   public function __construct()
   {

   }
   public function one()
   {
       $this->father_name = "Mizanur Rahman";
//       echo gettype($this->father_name)
//       echo gettype($this->father_name)

//       if(18 > $this->age){
//           echo"you are baby";
//        }
//       elseif(18<=$this->age && 31>$this->age ){
//            echo "you are young";
//       }
//       elseif (31<=$this->age && 50>=$this->age){
//           echo"you are wise";
//       }
//       elseif (50<=$this->age ){
//           echo"you are old";
//       }

    switch ($this->age){
        case 10:echo "he or she is a baby";
            break;
        case 20:echo "he or she is a boy";
            break;
        case 30:echo "he or she is a young";
            break;
        default:echo "he or she is a old";
    }
   }

}