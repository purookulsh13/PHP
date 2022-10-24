<?php

  echo "<table style='margin-top: -200px'>";
  $num=1;
  for($row=0;$row<=10;$row++)
  {
    echo "</td>"; 
    for($col=0;$col<=$row;$col++)
    {
      echo "<td style='border:1px solid black'>";
      echo "$num";
      $num++;
      echo "</td>"; 
    }
    echo "<br>";
    echo "</tr>";
  }
  echo "</table>";
?>