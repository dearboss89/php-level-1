<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="Luka Cvrk (www.solucija.com)" />
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <title>Галерея</title>
</head>
<body>
<section>
    <?php include_once("scan_gallery.php");?>
</section>
<section>
    <div class="gallery">
    <form action="add_gallery_file.php" method="post" enctype="multipart/form-data">
        <p>Выбирите файл</p>
        <input type="file" name="photo" accept="image/jpeg"><br><br>
        <input type="submit" value="Загрузить">
    </form>
    </div>
</section>
</body>
</html>