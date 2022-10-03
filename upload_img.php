
<?php
define("MB",5244880);
if ($_SERVER['REQUEST_METHOD']=='POST') {
    function uploadimage($file)
    {
        global $errorfile;
        $file_name = $_FILES[$file]['name'];
        $file_tmp = $_FILES [$file]['tmp_name'];
        $file_size = $_FILES[$file]['size'];
        $loc_img = realpath("videos/") . $file_name;
        $allowExt = array('mp4', 'mpeg', "avi");
        $strToArray = explode('.', $file_name);
        $Eet = end($strToArray);
        $strTolowwer = strtolower($Eet);
        if (!in_array($strTolowwer, $allowExt)) {
            $errorfac[] = " لا يمكن رفع ملف بهذا الامتداد ";
        } elseif ($file_size > MB) {
            $errorfile[] = "حجم الملف كبير ";
        } else {
            move_uploaded_file($file_tmp, $loc_img);
        }

    }
}


?>
