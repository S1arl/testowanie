<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
 class A {
        public $a = 1;
          public function pierwsza() {
              if($this->a == 1) {
                  throw new myException();
              }
          }
         
      }
     
     
      
     $v = new A();
     try{
     $v->pierwsza();
     }
     catch(Exception $e) {
         echo $e->errorMessage();
     }
     
     class myException extends Exception {
         public function errorMessage() {
             return "my own message";
         }
         
     }
        ?>
    </body>
</html>
