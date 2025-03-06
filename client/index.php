<?php
require 'script.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Палитра</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <form method="post">
        <label for="words">Введите 3 слова через пробел</label>
        <input type="text" id="words" name="words" required>
        <button type="submit">Сохранить</button>
    </form>
    <!--палитра-->
    <div id="colors">
        <div id="color1" class="color">
            <p id="hex">HEX: # <?php echo $color1[0]['hex']?></p>
            <p id="rgb">RGB:<?php echo $color1[0]['rgb']['red']?>, <?php echo $color1[0]['rgb']['green']?>, <?php echo $color1[0]['rgb']['blue']?></p>   
        </div>
        <div id="color2" class="color">
            <p id="hex">HEX: # <?php echo $color2[0]['hex']?></p>
            <p id="rgb">RGB:<?php echo $color2[0]['rgb']['red']?>, <?php echo $color1[0]['rgb']['green']?>, <?php echo $color1[0]['rgb']['blue']?></p> 
        </div>
        <div id="color3" class="color">
            <p id="hex">HEX: # <?php echo $color3[0]['hex']?></p>
            <p id="rgb">RGB:<?php echo $color3[0]['rgb']['red']?>, <?php echo $color1[0]['rgb']['green']?>, <?php echo $color1[0]['rgb']['blue']?></p> 
        </div>
    </div>
    <h1>Варианты использования</h1>
    <!--мактеты-->
    <div id="makets">
        <div id="maket1" class="maket color2" >
            <div id = 'div1' class="color1">
                <div id = 'div_main' class="color2">главная</div>
                <div id = 'div_menu' class="color2">меню</div>
                <div id = 'div_aboutUs' class="color2">о нас</div>
            </div>
            <h3 class="color1_txt">заголовок</h3>
            <div id = 'div2'>
                <div id = 'div_pic' class="color3">картинка</div>
                <div id = 'div_txt' class="color1">текст</div>
            </div>
            <h4 class="color1_txt">подзаголовок</h4>
            <div id = 'div3'>
                <div id = 'div_txt' class="color1">текст</div>
                <div id = 'div_pic' class="color3">картинка</div>
            </div>
        </div>
        <div id="maket2" class="maket color1">
            <div id = 'div1' class="color2">
                <div id = 'div_logo' class="color3">лого</div>
                <div id = 'div_txt' class="color1">текст</div>
            </div>
            <h3 class="color2_txt">заголовок</h3>
            <div id = 'div2'>
                <div id = 'div_txt' class="color2">текст</div>
                <div id = 'div_pic'c class="color2">картинка</div>
            </div>
            <h3 class="color2_txt">заголовок</h3>
            <div id = 'div3'>
                <div id = 'div_pic' class="color2">картинка</div>
                <div id = 'div_pic' class="color3">картинка</div>
                <div id = 'div_pic' class="color2">картинка</div>
            </div>
            <div id = 'div_txt' class="color2">текст</div>
        </div>
        <div id="maket3" class="maket">
            <div id = 'div1' class="divs color3">
                <div id = 'div_logo' class="color2">лого</div>
                <div id = 'div1'>
                    <div id = 'div11'>
                        <div id = 'div_aboutUs' class="divs_menu color2">о нас</div>
                        <div id="div_catalog" class="divs_menu color2">каталог</div>
                    </div>
                    <div id = 'div12'>
                        <div id="div_contacts" class="divs_menu color2">контакты</div>
                        <div id="div_where" class="divs_menu color2">где мы?</div>
                    </div>
                </div>
            </div>
            <div id="div2" class="color2">
                <h4 class="color3_txt">◀</h4>
                <div id = 'div_pic' class="color1">картинка</div>
                <h4 class="color3_txt">▶</h4>
            </div>
            <h3 class="color2_txt">заголовок</h3>
            <div id="div3">
                <div id = 'div_txt' class="color2">текст</div>
                <div id = 'div_pic' class="color2">картинка</div>
            </div>
        </div>
    </div>
</body>
</html>
