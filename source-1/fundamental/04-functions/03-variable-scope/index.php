   <?php

   //Global scope (nak guna kena ada dalam argument)
   $name = 'Nizar';

   function sayHello(){

    global $name;
    $name = 'Roronoa';
    //local scope
    echo 'Hello ' . $name;
   }

function sayGoodbye(){
    //local scope
    $names = ['NIzar', 'Roronoa', 'Zoro'];
    // echo 'Goodbye ' . $names[0];
}

echo $names[0];
sayGoodBye();

?>