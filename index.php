<!DOCTYPE html>
<html lang='ru'>
  <head>
    <meta charset="utf-8">
    <title>Дневник ухода за питомцем</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>
    <header>
        <form id="pullPetData" method="POST">
            <script src="js/sendPetData.js"></script>
            <label for="pet-name">Введите кличку питомца: </label>
            <input type="text" id="pet-name" name="pet-name" required/>
            <label for="pet-age">Введите возраст питомца(полных лет): </label>
            <input type="text" id="pet-age" name="pet-age" required/>
            <label for="pet-gender">Выберите пол питомца: </label>
            <select id="pet-gender" name="pet-gender">
                <option value="Мужской">М</option>
                <option value="Женский">Ж</option>
            </select>
            <input type="submit" value="Добавить питомца">
        </form>
    </header>
    <main>
        <p>Основные заметки по выбранному питомцу:</p>
        <?php include_once("php/addpet.php")?>
    </main>
    <aside>
        <p>Список добавленных питомцев:</p>
        <?php require_once("php/selectAllPets.php")?>
    </aside>
    <footer>
        <p>&copy;Авторские права никому не принадлежат, 2022.</p>
    </footer>
</body>
</html>