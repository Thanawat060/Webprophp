<html>
    <body>
    <?php
    $x = $_GET["numx"];
    $y = $_GET["numy"];
    $op = $_GET["text"];
    ?>

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
</body>
</html>