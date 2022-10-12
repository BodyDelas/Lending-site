<header>
      <div>
        <span class="siteName">TopModels</span>
      </div>
      <div class="about">
        <a class="black_link" href="index.php#top1">На главную</a>
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