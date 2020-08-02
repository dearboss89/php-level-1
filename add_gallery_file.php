<?php

$path = "content/img/big/".$_FILES['photo']['name'];
if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)){

// получение нового размера
    list($width, $height) = getimagesize($path);
    $newwidth = 150;
    $newheight = 150;

// загрузка
    $thumb = imagecreatetruecolor($newwidth, $newheight);
    $source = imagecreatefromjpeg($path);

// изменение размера
    imagecopyresampled($thumb, $source, 0, 0, 0, 0,
        $newwidth, $newheight, $width, $height);

    $uploaddir = 'content/img/small/';
    $uploadfile = $uploaddir . basename($_FILES['photo']['name']);

// вывод в окно браузера или запись в файл
    imagejpeg($thumb , $uploadfile);
}
//возврат на главную страницу
header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;

?>
