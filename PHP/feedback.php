<?php
$title = "Стриженок Богдан Юрьевич, группаа 211-362, лб3";//Название страницы
$today = date("d.m.y");  //Текущий год, месяц, день
$time = date("h:m:s"); //Текущее время

$current_page = "feedback.php";

$FIO = '';
$email = '';
$radio = 'Social ceti';
$select = 'Predlozhenie';
$comment = '';
$f = '';
$Soglasie = '';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title?></title>
    <link rel="icon" href="../images/logo.png" />
    <link rel="stylesheet" href="../CSS/feedback.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Suez+One&display=swap"
      rel="stylesheet"/>
  </head>
  <body>
    
  <?php include '../templates/header.php'?>

    <form action="home.php" method="post">
      <h1 title="Обратная связь">Обратная связь</h1>

      <?php
      if (isset($_GET['FIO'])) $FIO = $_GET['FIO'];
      if (isset($_GET['email'])) $email = $_GET['email'];
      if (isset($_GET['radio'])) $radio = $_GET['radio'];
      if (isset($_GET['select'])) $select = $_GET['select'];
      if (isset($_GET['comment'])) $comment = $_GET['comment'];
      if (isset($_GET['f'])) $f = $_GET['f'];
      if (isset($_GET['Soglasie'])) $Soglasie = $_GET['Soglasie'];
      ?>

      <div class="group">
        <input type="text" placeholder="ФИО" name="FIO" value="<?php echo $FIO?>"/>
      </div>
      <div class="group">
        <input type="email" placeholder="email" name="email" value="<?php echo $email?>" />
      </div>
      <div class="group">
        <span>Откуда узнали о нас?</span>
        <ul>
          <label> <input type="radio" name="radio" value="Social ceti" <?php if ($radio=='Social ceti') echo 'checked'?>/>Социальные сети</label>
          <label><input type="radio" name="radio" value="Znakomie" <?php if ($radio=='Znakomie') echo 'checked'?> />Знакомые</label>
          <label><input type="radio" name="radio" value="Radio" <?php if ($radio=='Radio') echo 'checked'?> />Радио</label>
          <label><input type="radio" name="radio" value="Cluchainosti" <?php if ($radio=='Cluchainosti') echo 'checked'?>/>Случайность</label>
        </ul>
      </div>
      <div class="select">
        <select name="select">
          <option value="Predlozhenie" <?php if($select=='Predlozhenie')echo 'selected'?>>Предложение</option>
          <option value="Galoba" <?php if($select=='Galoba')echo 'selected'?>>Жалоба</option>
        </select>
      </div><br>
      <div>
        <textarea name="comment" placeholder="Введите текст"><?=$comment?></textarea>
      </div>
      <div>
        <p><input type="file" name="f" /><br></p>
      </div>
      
      <div class="group">
        <input type="checkbox" name="Soglasie" <?php if ($Soglasie=='on') echo 'checked'?>/><span>Даю согласие на обработку персональных данных</span>
      </div>
      <div class="group">
        <button type="submit" name="button">Отправить</button>
      </div>
    </form>
    
    <?php include '../templates/footer.php' ?>

  </body>
</html>
