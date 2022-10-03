<?php
trait config{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $DbName="toturial";

    function connected(){
        $connect = mysqli_connect($this->host,$this->user,$this->pass,$this->DbName);
        return $connect;
    }
}
trait Upload{
    use config;
    public  static $MB = 5244880*5;
  function Uploaded(){
    if(isset($_POST['upload'])){
        $subject  = $_POST['subject'];
        $title    = $_POST['title'];
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES ['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $loc_img = "videos/" . $file_name;
        $allowExt = array('mp4', 'mpeg', "avi");
        $strToArray = explode('.', $file_name);
        $Eet = end($strToArray);
        $strTolowwer = strtolower($Eet);
        if (!in_array($strTolowwer, $allowExt)) {
            echo  " <center><h3 style='margin-top: 20px;color: tomato'>
               لا يمكن رفع ملف غير الفيديو  
               </h3></center>";
        } elseif ($file_size > self::$MB) {
            echo  "<center><h3 style='margin-top: 20px;color: goldenrod'>
يجب انا يكون حجم الملف اقل من 10 قيقا بايت         
           </h3>  </center>";
        }else{
            if(move_uploaded_file( $file_tmp,$loc_img)) {
                $insert = "INSERT INTO `videos`(`name`,`location`, `subject`, `tittle`)
            VALUES ('$file_name',' $loc_img','$subject','  $title ')";
                mysqli_query($this->connected(), $insert);
                echo  "<center><h3 style='margin-top: 20px;color: darkgreen'>
تم الرفع الفيديو              
                 </h3>
             </center>";
                header("location:upload.php");
                exit();
            }
        }

    }
}


}
trait Showing{

}
?>