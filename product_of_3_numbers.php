<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/xml; charset=utf-8');

if(isset($_GET['num1']) &&
isset($_GET['num2']) &&
isset($_GET['num3'])
)
{
    $number1 = $_GET['num1'];
    $number2 = $_GET['num2'];
    $number3 = $_GET['num3'];

    $product = $number1 * $number2 * $number3;

    $result = "<?xml version='1.0' encoding='UTF-8'?>
    <results>
    <product>$product</product>
    </results>";

   echo $result;
}
else
{
    $result = "<?xml version='1.0' encoding='UTF-8'?>
    <results>
     <error>'Write Parameters in URL. Refer to api documentation'</error>
    </results>";

    echo $result;
}

?>