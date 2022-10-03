<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet">
    <title> رفع الفيديوهات </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="app-video">
    <?php
    require_once "classes/Trait_upload.php";
    class showData{
        use config;
  function SelectDate(){
    $select = mysqli_query($this->connected(),"SELECT * FROM `videos` ORDER BY id DESC ");
    while ($row = mysqli_fetch_object($select)) {
        echo <<<date
        <div class='vedio'>
            <video src="$row->location" class="vedio-player"></video>
        </div>
        <div class="footer">
            <div class="footer-text">
                <p>$row->subject</p>
                <div class="img-marq">
                <a href="upload.php">  <img src="image/down-arrow.png"></a>   
 
                    <marquee> $row->tittle</marquee>
                </div>
            </div>
            <img src="image/SIU.jpg" class="img-play">
        </div>
date;
    }
    }
    }
    $show = new showData();
    $show->SelectDate();
   ?>
</div>
<script>
    // تحديد كل عنصر
    const vedios = document.querySelectorAll("video");
    //     تكرر الفيديو
    for( const vedio of vedios){

        vedio.addEventListener('click',function () {
            if (vedio.paused){
                vedio.play();
            }else {
                vedio.pause();
            }
        })

    }
</script>
</body>
</html>