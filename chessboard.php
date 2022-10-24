<!DOCTYPE html>
<html>
<body>
    <table width="400px" border="1px" cellspacing="1px">
        <?php
            $value = 0;
            for($col = 0; $col < 8; $col++){
            echo "<tr>";
            $value = $col;
            for($row = 0; $row < 8; $row++){
                if($value%2 == 0){
                    echo "<td height=-30px width=-40px bgcolor=black></td>";
                    $value++;
                }
                else {
                    echo "<td height=-30px width=-40px bgcolor=white></td>";
                    $value++;
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
  
</html>