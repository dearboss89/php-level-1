<?php
function createGallery($directory){
    $photo = scandir($directory);
for ($i=2; $i<count($photo); $i++):?>
   <div class="gallery">
       <a href="server.php?name=<?=$photo[$i]?>" target="_blank">
    <img src="<?=$directory."/".$photo[$i]?>" alt="">
       </a>
   </div>
<?php
    endfor;
}
createGallery("content/img/small");
?>