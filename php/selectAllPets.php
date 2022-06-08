<?php
include("connect.php");
$result = $mysqli -> query("SELECT PetName FROM PetData");
$resultArray = array();
if($result) {
    while($row = mysqli_fetch_assoc($result)){         //метод при одиночном обращении возвращает одну строку
        $resultArray[] = $row['PetName'];             
    }
}
echo "<select id='allPets'>";
for($i = 0; $i < count($resultArray); $i += 1) {
    print_r("<option value={$resultArray[$i]}>{$resultArray[$i]}</option>");
}
echo "</select>";