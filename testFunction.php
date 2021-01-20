<?php 
$x = 100;
$y = 10;
$opeartor = "+";

/*if ($opeartor == "+"){
    plus();
}
else if ($opeartor == "-"){
    sub();
}
else if ($opeartor == "*"){
    mul();
}
else if ($opeartor == "/"){
    div();
}*/
switch ($opeartor){
    case "+":
    plus();
    break;

    case "-":
    sub();
    break;

    case "*":
    mul();
    break;

    case "/":
    div();
    break;
}

function plus ()
{
    echo  "x + y = " .$GLOBALS['x'] + $GLOBALS['y'] .'<br>' ;
}
function sub()
{
    echo  "x - y = " .$GLOBALS['x'] - $GLOBALS['y'] .'<br>'  ;
}
function mul()
{
    echo  "x * y = " .$GLOBALS['x'] * $GLOBALS['y'] .'<br>'  ;
}
function div()
{
    echo  "x / y = " .$GLOBALS['x'] / $GLOBALS['y'] .'<br>'  ;
}

?>