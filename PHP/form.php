<?php
$title = "Стриженок Богдан Юрьевич, группаа 211-362, лб3";//Название страницы
$today = date("d.m.y");  //Текущий год, месяц, день
$time = date("h:m:s"); //Текущее время

$current_page = "form.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title?></title>
    <link rel="icon" href="../images/logo.png" />
    <link rel="stylesheet" href="../CSS/form.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Suez+One&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    
  <?php include 'templates/header.php'?>

    <form action="https://httpbin.org/post" method="post">
      <h1 title="Форма регистрации на сайте">Регистрация</h1>
      <div class="group">
        <label for="login"></label>
        <input type="text" placeholder="Логин" id="login" name="Login" />
      </div>
      <div class="group">
        <label for="password"></label>
        <input
          type="password"
          placeholder="Пароль"
          id="password"
          name="password"
        />
      </div>
      <div class="group">
        <label for="password"></label>
        <input
          type="password"
          placeholder="Повторите пароль"
          id="password"
          name="password"
        />
      </div>
      <div class="group">
        <input type="checkbox" id="rememberMe" name="rememberMe" />
        <span>Запомнить меня</span>
      </div>
      <div class="group">
        <button type="submit">Зарегестрироваться</button>
      </div>
    </form>
    
    <?php include 'templates/footer.php' ?>

  </body>
</html>