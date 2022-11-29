<?php

session_start();
unset($_SESSION['message']);
require './header.php';
require_once '../../vendor/db.php';

$get_setting = mysqli_query($db, "SELECT * FROM `setting`");

$data = mysqli_fetch_all($get_setting);
$data = $data[count($data) - 1];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <title>Настройки</title>
</head>

<body>
  <div class="wrapper">
    <form action="../api/setting.php" method="POST">

      <label for="" style="margin-bottom: 20px;">
        <h3>Данные на <?= $data[4] ?></h3>
      </label>

      <label for="electro_pr">Цена за 1кВт электричества</label>
      <input type="text" name="electro_pr" id="electro_pr" placeholder="Цена на 1кВт" require="true" value="<?= $data[1] ?>">


      <label for="water_pr">Цена за 1 куб воды</label>
      <input type="text" name="water_pr" id="water_pr" placeholder="Цена на 1куб" require="true" value="<?= $data[2] ?>">


      <label for="gaz_pr">Цена за 1 куб газа</label>
      <input type="text" name="gaz_pr" id="gaz_pr" placeholder="Цена на 1кВт" require="true" value="<?= $data[3] ?>">

      <button class="btn">Сохранить</button>
      <button class="btn"><a href="../../index.php">Вернуться</a></button>
    </form>

  </div>
</body>

</html>