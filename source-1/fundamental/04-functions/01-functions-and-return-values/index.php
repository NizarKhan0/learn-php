<?php

function sayHello()
{
    echo 'Hello World <br/>';
}
sayHello();

function sayGoodBye(){
    return 'Good Bye <br/>';
}
$goodbye = sayGoodBye();
echo $goodbye;


?>