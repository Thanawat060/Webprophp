<html>
<body>
<body>
    <h2>Check Number</h2>
    <form action="#" method="get">
        <input type="text" name="number" value=0>
        <br>
        <input type="submit" value="check num">
        <br><br>
        
    </form>
    <?php
        $num=0;
        $odd= 0;
        $even = 0;
        $zero = 0;
        $num = $_GET['number'];
        echo "<br> Num is ".$num;

        $r = 0;
    do{
        

        if ($num % 10 == 0){
           
            $zero ++;
        }
        else if($num % 2 == 0){
            
            $odd ++;
        }
        else {
            
            $even ++;
        }
         $num /= 10;
        $r++;
        if ($num < 1){
            $r = true;
        }
    }
    while($r < strlen ($num));


    echo "<table border=1>";
    echo "<tr><td>Odd = </td>";
    echo "<td>".$odd."</td>";
    echo "</tr>";
    echo "<tr><td>Even = </td>";
    echo "<td>".$even."</td>";
    echo "</tr>";
    echo "<tr><td>Zero = </td>";
    echo "<td>".$zero."</td>";
    echo "</tr>";
    echo "</table>";
    
    
?>
</body>
</html>