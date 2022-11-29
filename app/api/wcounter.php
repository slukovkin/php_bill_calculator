<?php

session_start();
require_once '../../vendor/db.php';

$counter_prev = $_POST['counter_prev'];
$counter_current = $_POST['counter_current'];

$get_setting = mysqli_query($db, "SELECT * FROM `setting`");

$data = mysqli_fetch_all($get_setting);

$price = $data[count($data) - 1][2];

if ($counter_current > $counter_prev) {
  $sum = ($counter_current - $counter_prev) * $price;
  $check =  mysqli_query($db, "INSERT INTO `water` (`id`, `counter_prev`, `counter_current`, `counter_acc`, `sum`, `data`) VALUES (NULL, '$counter_prev', '$counter_current', '$counter_current', '$sum', current_timestamp())");

  if ($check == 1) {
    // $_SESSION['message'] = $sum;
    header('Location: ../templates/water.php');
  } else {
    $_SESSION['message'] = "Ошибка при cохранении";
    header('Location: ../templates/setting.php');
  }
} else {
  $_SESSION['message'] = 'Проверьте показание текущего счетчика';
  header('Location: ../templates/water.php');
}
