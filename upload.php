
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
    <link rel="stylesheet" href="main.css">
    <title>upload</title>

</head>
<body>
 <div class="container">
     <?php
     require_once "classes/Trait_upload.php";
     class addData{
         use Upload;
     }
     $trait = new addData();
     $trait->Uploaded();
     ?>
     <center>
         <img src="image/5.jpg">
     </center>
     <div class="form">
         <form method="post" enctype="multipart/form-data">

             <input type="text" name="subject" id="subject" placeholder="اكتب عنوان الفيديو " required><br>
             <input type="text" name="title" id="title" placeholder="وصف الفيديو" required><br>

             <input type="file" name="file" id="fil"   required>
<!--             <label for="fil" id="label" > رفع الملف </label><br>-->
             <input type="submit" name="upload" id="submit" value="رفع الفيديو">
             <br>
             <a href="readvideo.php" class="link">الرجع للصفحة</a>
         </form>
     </div>

 </div>
</body>
</html>
