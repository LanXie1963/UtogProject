<?php
require 'getColors.php';
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
    <h3>Введите 3 слова через пробел</h3>
    <form method="post">
        <input type="text" id="firstInput" name="words" required>
        <button type="submit" id=firstButton>Сохранить</button>
    </form>
    <!--палитра-->
    <div id="colors">
        <div id="color1" class="color" style='background-color: url("<?php echo $color1[0]['hex'] ?>");'>
            <p id="hex">HEX: # <?php echo $color1[0]['hex']?></p>
            <p id="rgb">RGB:<?php echo $color1[0]['rgb']['red']?>, <?php echo $color1[0]['rgb']['green']?>, <?php echo $color1[0]['rgb']['blue']?></p>   
        </div>
        <div id="color2" class="color" style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>
            <p id="hex">HEX: # <?php echo $color2[0]['hex']?></p>
            <p id="rgb">RGB:<?php echo $color2[0]['rgb']['red']?>, <?php echo $color2[0]['rgb']['green']?>, <?php echo $color2[0]['rgb']['blue']?></p> 
        </div>
        <div id="color3" class="color" style='background-color: url("<?php echo $color3[0]['hex'] ?>");'>
            <p id="hex">HEX: # <?php echo $color3[0]['hex']?></p>
            <p id="rgb">RGB:<?php echo $color3[0]['rgb']['red']?>, <?php echo $color3[0]['rgb']['green']?>, <?php echo $color3[0]['rgb']['blue']?></p> 
        </div>
    </div>
    <h1>Варианты использования</h1>
    <!--мактеты-->
    <div id="makets">
        <div id="maket1" class="maket" style='background-color: url("<?php echo $color2[0]['hex'] ?>");' >
            <div id = 'div1' style='background-color: url("<?php echo $color1[0]['hex'] ?>");'>
                <div id = 'div_main' style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>главная</div>
                <div id = 'div_menu' style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>меню</div>
                <div id = 'div_aboutUs' style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>о нас</div>
            </div>
            <h3 style='color: url("<?php echo $color1[0]['hex'] ?>");'>заголовок</h3>
            <div id = 'div2'>
                <div id = 'div_pic' style='background-color: url("<?php echo $color3[0]['hex'] ?>");'>картинка</div>
                <div id = 'div_txt' style='background-color: url("<?php echo $color1[0]['hex'] ?>");'>текст</div>
            </div>
            <h4 style='color: url("<?php echo $color1[0]['hex'] ?>");'>подзаголовок</h4>
            <div id = 'div3'>
                <div id = 'div_txt' style='background-color: url("<?php echo $color1[0]['hex'] ?>");'>текст</div>
                <div id = 'div_pic' style='background-color: url("<?php echo $color3[0]['hex'] ?>");'>картинка</div>
            </div>
        </div>
        <div id="maket2" class="maket color1">
            <div id = 'div1' style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>
                <div id = 'div_logo' style='background-color: url("<?php echo $color3[0]['hex'] ?>");'>лого</div>
                <div id = 'div_txt' style='background-color: url("<?php echo $color1[0]['hex'] ?>");'>текст</div>
            </div>
            <h3 style='color: url("<?php echo $color2[0]['hex'] ?>");'>заголовок</h3>
            <div id = 'div2'>
                <div id = 'div_txt' style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>текст</div>
                <div id = 'div_pic'c style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>картинка</div>
            </div>
            <h3 style='color: url("<?php echo $color2[0]['hex'] ?>");'>заголовок</h3>
            <div id = 'div3'>
                <div id = 'div_pic' style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>картинка</div>
                <div id = 'div_pic' style='background-color: url("<?php echo $color3[0]['hex'] ?>");'>картинка</div>
                <div id = 'div_pic' style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>картинка</div>
            </div>
            <div id = 'div_txt' style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>текст</div>
        </div>
        <div id="maket3" class="maket">
            <div id = 'div1' style='background-color: url("<?php echo $color3[0]['hex'] ?>");'>
                <div id = 'div_logo' style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>лого</div>
                <div id = 'div1'>
                    <div id = 'div11'>
                        <div id = 'div_aboutUs' class="divs_menu" style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>о нас</div>
                        <div id="div_catalog" class="divs_menu" style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>каталог</div>
                    </div>
                    <div id = 'div12'>
                        <div id="div_contacts" class="divs_menu" style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>контакты</div>
                        <div id="div_where" class="divs_menu" style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>где мы?</div>
                    </div>
                </div>
            </div>
            <div id="div2" style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>
                <h4 style='color: url("<?php echo $color3[0]['hex'] ?>");'>◀</h4>
                <div id = 'div_pic' style='background-color: url("<?php echo $color1[0]['hex'] ?>");'>картинка</div>
                <h4 style='color: url("<?php echo $color3[0]['hex'] ?>");'>▶</h4>
            </div>
            <h3 style='color: url("<?php echo $color2[0]['hex'] ?>");'>заголовок</h3>
            <div id="div3">
                <div id = 'div_txt' style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>текст</div>
                <div id = 'div_pic' style='background-color: url("<?php echo $color2[0]['hex'] ?>");'>картинка</div>
            </div>
        </div>
    </div>
</body>
</html>
