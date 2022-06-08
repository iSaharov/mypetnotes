<?php
include_once("connect.php");

class PetInfo
{
    public string $petName;
    public int $petAge;
    public string $petGender;

    public function __construct()
    {
        $this->petName = $_POST["pet-name"];
        $this->petAge = $_POST["pet-age"];
        $this->petGender = $_POST["pet-gender"];
    }
}

$addNewPet = $mysqli->prepare("INSERT INTO PetData(PetAge, PetName, PetGender) VALUES (?, ?, ?)");

try {
    if (!empty($_POST)) { 
        $petData = new PetInfo();
        $addNewPet->bind_param("iss", $petData->petAge, $petData->petName, $petData->petGender);
        $addNewPet->execute();
    }
}
catch (Exception) {
    echo "Не удалось добавить питомца в БД";
}