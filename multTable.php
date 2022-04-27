<!DOCTYPE html>
<html>
<style>
table, th, td
{
  border:2px solid blue;
}
</style>
<body>


<h1>100 X 100 Multiplation Table</h1>


<?php
echo "<table border =\"20\">";

    echo "<tr style='font-weight: bold'> ";
        echo "<td >  0  </td> \n";
        for ($m_cols= 1; $m_cols <= 100; $m_cols++)
        {
          echo "<td> $m_cols </td> \n";
        }
    echo "</tr>";

    for($m_rows = 1; $m_rows <= 100; $m_rows++)
    {
        echo "<tr> \n";
        echo "<td style='font-weight: bold;'> $m_rows </td>";

        for ($m_cols=1; $m_cols <= 100; $m_cols++)
        {
            $p = $m_cols * $m_rows;
            echo "<td>$p</td> \n";
        }
        echo "</tr>";
    }
"</table>";
?>

</body>
</html>
