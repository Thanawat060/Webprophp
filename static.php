<?php
function myTest() {
  static $x = 0;//ยังไม่ส่งหน่วยค่าความจำคือ ถ้าเป็น static
  echo $x." , ";
  $x++;
}

myTest();// output = 0  , x = 1

myTest();// output = 1  , x = 2

myTest();// output = 2  , x = 3


?>