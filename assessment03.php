<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment 03 : Web Program Creation</title>
    
</head>
<body>

    <?php
        echo "<h1>Isosceles Triangle</h1>";
        echo "<h3>Size of Isosceles triangle should be from 2 to 10.<h3>";
        $size = 5;
        echo "<h3>Size of Isosceles triangle is $size<h3>";
    
        if ($size < 2) {
            echo "Isosceles triangle with size $size is below the minimum dimension.";
        } elseif ($size > 10) {
            echo "Isosceles triangle with size $size exceeds the side dimension.";
    
        }else {
            printTriangle($size);
        }
    
        function printTriangle($size){
                orient1($size);
                echo "<br>";
                orient2($size);
                echo "<br>";
                orient3($size);
                echo "<br>";
                orient4($size);
        }
        function orient1($size){
            for ($i=0; $i < $size; $i++) { 
                for ($j=0; $j <= $i; $j++) { 
                    echo '*&nbsp;';
                }
                echo "<br>";   
            }
        }
    
        function orient2($size){
            for ($i=$size; $i > 0; $i--) { 
                for ($j=$i-1; $j >= 0; $j--) { 
                    echo '*&nbsp;';
                }
                echo "<br>";   
            }
        }
        function orient3($size){
            for ($i=$size; $i > 0; $i--) { 
                for ($j=$i-1; $j < $size; $j++) { 
                    echo '&nbsp;&nbsp;&nbsp;';
                }
                for ($k=$i-1; $k >= 0; $k--) { 
                    echo '*&nbsp;';
                }
                echo "<br>";   
            }
        }
        function orient4($size){
            for ($i=0; $i < $size; $i++) { 
                for ($j=$i; $j < $size; $j++) { 
                    echo '&nbsp;&nbsp;&nbsp;';
                }
                for ($k=$i; $k >= 0; $k--) { 
                    echo '*&nbsp;';
                }
                echo "<br>";   
            }
        }
        
    ?>
</body>
</html>