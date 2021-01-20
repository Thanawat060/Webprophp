<html>
    <body>
    <?php
    $x = $_GET["numx"];
    $y = $_GET["numy"];
    $op = $_GET["text"];
    ?>
Show Result <br>
Num X = <?php echo  $x ?> <br>
Num Y = <?php echo  $y ?> <br>
Opeartor = <?php echo  $op ?> <br><br>
    <?php
    
    if($op == "+"){
        echo" $x+$y = " ,$x+$y;
    }
    else if($op == "-"){
        echo" $x-$y = " ,$x-$y;
    }
    else if($op == "*"){
        echo" $x*$y = " ,$x*$y;
    }
    else if($op == "/"){
        echo" $x/$y = " ,$x/$y;;
    }
    ?>
    <form action ="formcal.php" method ="get">
        <input type ="submit">
</body>
</html>