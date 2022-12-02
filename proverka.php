<?php
include "db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM `product` WHERE 1";
if($result = $mysql->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>id_cat</th><th>id</th><th>name</th><th>photo</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id_cat"] . "</td>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            //echo "<td>" . $row['photo'];
            echo'
            <td width=40px><img src = "img/'.$row['photo'].'.png" ></img>
            </td>
            ';
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
}
echo'<form method=POST action = "index.php">
<button formmethod=POST name=1 value=1>Назад</button>
</form><br>';
?>