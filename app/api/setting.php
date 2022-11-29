<?php

session_start();

require_once '../../vendor/db.php';

$electro_pr = $_POST['electro_pr'];
$water_pr = $_POST['water_pr'];
$gaz_pr = $_POST['gaz_pr'];

$check = mysqli_query($db, "INSERT INTO `setting` (`id`, `electro_price`, `water_price`, `gaz_price`) VALUES (NULL, '$electro_pr', '$water_pr', '$gaz_pr')");


if ($check == 1) {
  $_SESSION['message'] = "Настройки сохранены";
  header('Location: ../../index.php');
} else {
  $_SESSION['message'] = "Ошибка при cохранении";
  header('Location: ../templates/setting.php');
}
