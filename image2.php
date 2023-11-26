<?php
// Строка:
$string = "Hello!";
// Загрузка рисунка фона
$im = imageCreateFromPNG("images/mars.png");
// Создание в палитре нового цвета — черного.
$color = imageColorAllocate($im, 255, 255, 255);
// Размер шрифта
$size = 7;
// Сдвиг надписи
$offset = strlen($string) / 2 * $size;
// Вычисление x для расположения текста по ширине
$x = (imageSX($im) - strlen($string)) / 2 - $offset;
$y = 5;
// Вывод строки поверх загруженного изображения.
imageString($im, $size, $x, $y, $string, $color);
// Вывод картинки в стандартный выходной поток - в браузер
header("Content-type: image/png");
imagePng($im); // освобождение памяти, занятой картинкой
imageDestroy($im);
