<?php
$title = "Стриженок Богдан Юрьевич, группаа 211-362, лб3";//Название страницы
date_default_timezone_set("Europe/Moscow");
$today = date("d.m.y");  //Текущий год, месяц, день
$time = date("h:m:s"); //Текущее время

$s = date("s"); // Текущая секунда
$os = (int)$s % 2; // Четность секунды


if ($os == 0) {
    $photo1 = "https://infotolium.com/uploads/posts/2014-11/1416350391_most-beautiful-girls-on-planet-6.jpg";
} else {
    $photo1 = "https://crobux.ru/wp-content/uploads/a/c/f/acf7a7b444166eb32bd64ff50deda599.jpeg";
}

if ($os == 0) {
    $photo3 = "https://img-fotki.yandex.ru/get/4117/46934776.97d/0_b99a7_a4f8239a_XL.jpg";
} else {
    $photo3 = "https://tabakur77.ru/wp-content/uploads/4/b/c/4bc6ed0c9fa1e01075f8b51e22ca3749.jpeg";
}

if ($os == 0) {
    $photo2 = "http://mama-likes.ru/wp-content/uploads/2017/02/1-72.jpg";
} else {
    $photo2 = "https://catherineasquithgallery.com/uploads/posts/2021-02/1614424300_4-p-deti-na-temnom-fone-4.jpg";
}

if ($os == 0) {
    $photo4 = "https://pp.userapi.com/1r2FcGDCeMkdfkjhKdWz6zAh5zwmWnfqkhCmhw/zhTizSs5DN8.jpg";
} else {
    $photo4 = "http://kapitosha.net/wp-content/uploads/2020/07/xxl.jpg";
}

if ($os == 0) {
    $photo5 = "http://kzndeti.ru/userfiles/images/image-12-2017/photo_2017_12_27_13_37_59.jpg";
} else {
    $photo5 = "https://static.tildacdn.com/tild3833-3263-4838-a230-366365643631/150b.jpg";
}

if ($os == 0) {
    $photo6 = "https://happykidsmodels.ru/wp-content/uploads/2018/09/VM1_9156.jpg";
} else {
    $photo6 = "https://i.pinimg.com/originals/24/d2/2b/24d22bf0a466a8e38f06fd5613175c27.jpg";
}

$array = [
    '<li>ЗАНЯТИЯ НА ПОДИУМЕ</li>
    <p>
          В школе моделей занятия проходят не только в зеркальном классе, но и
          на самом настоящем подиуме. Увлекательные репетиции, проходящие на
          модельном подиуме перед аудиторией, позволяют закрепить навыки дефиле,
          приобретенные в классе.
        </p>',

        '<li>МОДНЫЕ ПОКАЗЫ</li>
        <p>
          Специально для своих учеников мы организовали Московскую детскую
          неделю моды. Модные показы, праздники и другие мероприятия модельного
          агентства для детей – это незаменимая практика приобретенных знаний.
        </p>',
        '<li>ПУБЛИЧНЫЕ ВЫСТУПЛЕНИЯ</li>
        <p>
          Благодаря увлекательным мероприятиям, ребята с лёгкостью преодолевают
          страх перед сценой и формируют навыки выступления перед аудиторией.
        </p>',
        '<li>ПОГРУЖЕНИЕ В ФОТОСЪЕМКИ</li>
        <p>
          В обучение включена подготовка к работе на съемочной площадке и
          создание модельного портфолио. Незабываемыми останутся впечатления от
          съемочного дня, проведенного в фотостудии.
        </p>',
        '<li>УЧИМ ПОБЕЖДАТЬ</li>
        <p>
          На занятиях делимся секретами успешных выступлений на конкурсных и
          телевизионных проектах. Выпускники школы моделей успешно принимают
          участие в российских и международных детских конкурсах. Самой юной
          нашей ученице, победительнице международного конкурса Little Miss
          Planet всего 6 лет.
        </p>',
        '<li>РАБОТА НАД ОСАНКОЙ</li>
        <p>
          Мы делаем упор на физическое развитие ребёнка, поэтому в программу
          обучения входят занятия, способствующие формированию правильной
          осанки.
        </p>',
        '<li>ПОСВЯЩЕНИЕ В МОДЕЛИ</li>
        <p>
          Ребята получают не только диплом, но и Статус модели, а фотографии,
          созданные во время обучения, размещаются на сайте модельного
          агентства.
        </p>',
];

$current_page = "index.php";
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title?></title>
    <link rel="icon" href="../images/logo.png" />
    <link rel="stylesheet" href="../CSS/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Suez+One&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="hdr" id="hdr">
      <div>
        <span class="siteName">TopModels</span>
      </div>
      <div class="about">
      <a class="black_link" href="#hdr">На главную</a>
        <a class="black_link" href="#overriew">Альбом</a>
        <a class="black_link" href="#title">Возможности</a>
        <a class="black_link" href="#contacs">Контакты</a>

        <a href="<?php $link= 'form.php'; echo $link?>" 
            class="<?php if($current_page=$link){
                    echo 'menu_color';
            } else echo 'black_link'?>">Регистрация</a> 

        <a href="<?php $link= 'feedback.php'; echo $link?>" 
            class="<?php if($current_page=$link){
                    echo 'menu_color';
            } else echo 'black_link'?>">Обратная связь</a>
      </div> 
    </header>

    <div class="top" id="top">
      <h1>Top Models</h1>
      <h3>модельная школа для детей</h3>
    </div>

    <div class="main" id="main">
      <h2>Наши услуги помогут вам!</h2>
      <div class="text">
        <span><p>
            Детская школа моделей - это увлекательный курс, развивающий умение
            выступать на публике в юном возрасте. Программа основана на развитии
            таких навыков, как: творческое мышление, уверенность в себе, умение
            работать в команде.
          </p>
          <br />
          <h3><p>1. Модельная школа от 5 до 6 лет</p></h3>
          <p>
            Увлекательный курс для дошкольников. Модельная школа для мальчиков и
            девочек с малых лет прививает любовь к участию в мероприятиях: у
            дошколят создается впечатление, что выступать перед зрителями легко.
            Наша программа упрощает дружескую социализацию детей в этот период
            их жизни. Программа основана на гармоничном развитии малышей.
            Продолжительность курса от 4 до 8 месяцев.
          </p>
          <br />
          <h3><p>2. Модельная школа от 7 до 9 лет</p></h3>
          <p>
            Современная программа для младших школьников дает ребенку ряд
            преимуществ перед сверстниками. В 7 лет у ребенка начинает
            формироваться самооценка. Наша программа помогает сформировать
            высокую самооценку, любовь к себе и веру в свои силы. Программа
            основана на развитии таких навыков, как: творческое мышление,
            уверенность в себе, умение работать в команде. Ребенок, в первую
            очередь, развивается как личность. Продолжительность курса от 4 до 8
            месяцев.
          </p>
          <br />
          <h3><p>3. Модельная школа от 10 до 11 лет</p></h3>
          <p>
            Захватывающий курс для подростков, создающий прочный фундамент для
            уверенного общения со сверстниками. Возраст 10 -11 лет
            характеризуется растущим стремлением к самостоятельности, поэтому в
            основу курса мы включили темы для обсуждения, интересные школьникам
            переходного возраста. Занятия ориентируются на мир подростков и их
            увлечения. Продолжительность курса от 4 до 8 месяцев.
          </p>
        </span>
      </div>
    </div>

    <div class="overriew" id="overriew">
      <h2>Альбом</h2>
      <h4>Лучшее только детям</h4>
      <img
        src=<?php echo $photo1?>
      />
      <img
      src=<?php echo $photo3?>
      />
      <img src=<?php echo $photo2?> />
      <img
      src=<?php echo $photo4?>
      />
      <img
      src=<?php echo $photo5?>
      />
      <img
      src=<?php echo $photo6?>>
    </div>

    <div class="title">
      <h2 id="title">ОСОБЕННОСТИ ОБУЧЕНИЯ В Top Models</h2>
      <ul>
        <?php for($i=0; $i<count($array); $i++) {
            echo $array[$i];
        }?>
      </ul>
    </div>

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
