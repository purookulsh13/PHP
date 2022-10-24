<?php
  echo "<table>";
  for($row=0;$row<=9;$row++)
  {
    echo "<tr>";
    for($col=1;$col<=9;$col++)
    {
      echo "<td style='border:1px solid black'>";
      echo "$row"."$col";
      echo "</td>"; 
    }
    echo "<br>";
    echo "</tr>";
  }
  echo "</table>";
?>
