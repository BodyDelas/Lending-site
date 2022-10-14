<?php
$title = "Стриженок Богдан Юрьевич, группаа 211-362, лб3";//Название страницы
$today = date("d.m.y");  //Текущий год, месяц, день
$time = date("h:m:s"); //Текущее время
$current_page = "feedback.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title?></title>
    <link rel="icon" href="../images/logo.png" />
    <link rel="stylesheet" href="../CSS/home.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Suez+One&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  <?php include 'templates/header.php'?>

    <main>
      <?php 
      
        echo '<p>Здравствуйте, <b>'.$_POST['FIO'].'</b></p>';
        if ($_POST['select']=='Predlozhenie') {
            echo '<p>Спасибо за Ваше предложение</p>';
        } else {
            echo '<p>Мы рассмотрим Вашу жалобу</p>';
        }
        echo '<textarea>'.$_POST['comment'].'</textarea></p>';

        if (isset($_POST['f']) & $_POST['f']!='') echo'<p>Вы приложили следующий файл: <span class="got_file"><p>'.$_POST['f'];
                    
        echo '<div><button><a class="btn"<a class="btn" href="feedback.php?FIO='.$_POST['FIO'].
            '&email='.$_POST['email'].
            '&radio='.$_POST['radio'].
            '">Заполнить снова</a></button></div>';



      ?>
    </main>

  

    
    <?php include 'templates/footer.php' ?>

  </body>
</html>