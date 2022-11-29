<?php

session_start();
require './header.php';
require_once '../../vendor/db.php';

$date = date('Y-m-d');

$data = mysqli_query($db, "SELECT * FROM `gaz` WHERE `data` = '$date'");
$sum = mysqli_query($db, "SELECT `sum` FROM `gaz` ");
$sum = mysqli_fetch_all($sum);

$sum = $sum[count($sum)-1];


$data = mysqli_fetch_all($data);
$data = $data[count($data) - 1];

$get_setting = mysqli_query($db, "SELECT * FROM `setting`");

$price = mysqli_fetch_all($get_setting);
$price = $price[count($price) - 1];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Газоснабжение</title>
</head>

<body>
  <div class="wrapper">
    <form action="../api/gcounter.php" method="POST">

      <label for="" style="margin-bottom: 20px;">
        <h3>Показания счетчика <?= $data[3] ?> на <?= $data[5] ?></h3>
        <h4>Цена на 1 куб <?= $price[3] ?></h4>
        <?php
        if(!$_SESSION['message']){
        ?>
        <h4 style="margin-top: 10px; color: darkred;">К оплате <?= $sum[0] ?> грн.</h4>
        <?php
        } else {
          ?>
        <h4 style="margin-top: 10px; color: red;"><?= $_SESSION['message'] ?></h4>
        <?php
        }
        ?>

        <?php
        unset($_SESSION['message']);
        ?>

      </label>

      <label for="counter_prev">Предыдущие показание</label>
      <input type="text" name="counter_prev" id="counter_prev" require="true" value="<?= $data[3] ?>">


      <label for="counter_current">Текущее показание</label>
      <input type="text" name="counter_current" id="counter_current" require="true" value="">

      <!-- <h4><?= $data[1] ?></h4> -->

      <button class="btn">Расчитать</button>
      <button class="btn"><a href="../../index.php">Вернуться</a></button>



    </form>

  </div>
</body>

</html>