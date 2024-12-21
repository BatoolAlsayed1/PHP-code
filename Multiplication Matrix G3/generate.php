<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate</title>
</head>
<body>
    <?php
        extract($_POST);
        if ($msize<=1 || $msize>20){
            echo "Inavalid Size";
        } else {
            echo "<table border='1' align='center'>";
            for($r=1; $r<=$msize; $r++){
                echo "<tr>";
                for($c=1; $c<=$msize; $c++){
                    $m=$r*$c;
                    $hcol="white";
                    if ($m % $divby == 0)
                        $hcol=$color;
                    echo "<td style='background-color:$hcol'>$m</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    
    
    
    
    
    ?>
</body>
</html>