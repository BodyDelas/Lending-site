<?php
$title = "Модель №1";//Название страницы
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
    <link rel="stylesheet" href="../CSS/feedback.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Suez+One&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div>
        <span class="siteName">TopModels</span>
      </div>
      <div class="about">
        <a class="black_link" href="index.php#hdr">На главную</a>
        <a class="black_link" href="index.php#overriew">Альбом</a>
        <a class="black_link" href="index.php#title">Возможности</a>
        <a class="black_link" href="index.php#contacs">Контакты</a>
        <a href="<?php $link= 'form.php'; echo $link?>" 
            class="<?php if($current_page===$link){
                    echo 'menu_color';
            }else echo 'black_link' ?>">Регистрация</a> 

        <a href="<?php $link= 'feedback.php'; echo $link?>" 
            class="<?php if($current_page===$link){
                    echo 'menu_color';
            } else echo 'black_link'?>">Обратная связь</a>
      </div>
    </header>

    <form action="https://httpbin.org/post" method="post">
      <h1 title="Обратная связь">Обратная связь</h1>
      <div class="group">
        <input type="text" placeholder="ФИО" name="FIO" />
      </div>
      <div class="group">
        <input type="email" placeholder="Email" name="email" />
      </div>
      <div class="group">
        <span>Откуда узнали о нас?</span>
        <ul>
          <label
            ><input type="radio" name="radio" value="Social ceti" />Социальные
            сети</label
          >
          <label
            ><input type="radio" name="radio" value="Znakomie" />Знакомые</label
          >
          <label><input type="radio" name="radio" value="Radio" />Радио</label>
          <label
            ><input
              type="radio"
              name="radio"
              value="Cluchainosti"
            />Случайность</label
          >
        </ul>
      </div>
      <div class="select">
        <select name="select">
          <option value="Predlozhenie">Предложение</option>
          <option value="Galoba">Жалоба</option>
        </select>
      </div>
      <br />
      <div>
        <textarea name="comment" placeholder="Введите текст"></textarea>
      </div>
      <div>
        <p><input type="file" name="f" /><br /></p>
      </div>

      <div class="group">
        <input type="checkbox" name="Soglasie" />
        <span>Даю согласие на обработку персональных данных</span>
      </div>
      <div class="group">
        <button type="submit" name="button">Отправить</button>
      </div>
    </form>
    
    <footer>
      <div class="contacs">
        <h3 id="contacs">Контактная информация</h3>
        <p>Мобильный телефон: 8(987)4151663</p>
        <p>Почта: bogstrij83@mail.ru</p>
        <span class="footer-info__item">
              <?php echo 'Сформировано ',  $today, " в ", $time ?>
</span>
      </div>
    </footer>
  </body>
</html>
