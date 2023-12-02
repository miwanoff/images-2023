<?php

// $i = imageCreate(100, 100);
// $c = imageColorAllocate($i, 1, 255, 1);

// imageFilledRectangle($i, 0, 0, imageSX($i)-1, imageSY($i)-1, $c) ;
// imageColorTransparent($i, $c);

// // // дальше работаем с изначально прозрачным фоном
// header('Content-type: image/png');
// imagepng($i);
// imagedestroy($i);

//

//Создание изображения 200 x 200
$canvas = imagecreatetruecolor(200, 200);

// Создание цветов
$pink = imagecolorallocate($canvas, 255, 105, 180);
$white = imagecolorallocate($canvas, 255, 255, 255);
$green = imagecolorallocate($canvas, 132, 135, 28);

// Рисование разноцветных прямоугольников
imagerectangle($canvas, 50, 50, 150, 150, $pink);
imagerectangle($canvas, 45, 60, 120, 100, $white);
imagerectangle($canvas, 100, 120, 75, 160, $green);

imageline($canvas, 0, 0, imageSX($canvas) - 1, imageSY($canvas) - 1, $green);
imagepolygon($canvas, [
    0, 0,
    120, 100,
    150, 200,
],
    $pink);
// Вывод и освобождение памяти
header('Content-Type: image/jpeg');
imagejpeg($canvas);
imagedestroy($canvas);

// Create a 55x30 image
// $im = imagecreatetruecolor(55, 30);
// $red = imagecolorallocate($im, 255, 0, 0);
// $black = imagecolorallocate($im, 0, 0, 0);

// // Make the background transparent
// imagecolortransparent($im, $black);

// // Draw a red rectangle
// imagefilledrectangle($im, 4, 4, 50, 25, $red);

// // Save the image
// imagepng($im, './imagecolortransparent.png');
// imagedestroy($im);
