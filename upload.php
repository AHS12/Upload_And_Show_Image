<?php

/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 06/08/2017
 * Time: 09:40 PM
 */

include "db.php";

if (isset($_POST['img_up'])) {


    $fileTmp = $_FILES['image']['tmp_name']; //Temporary location Of File
    $fileName = $_FILES['image']['name'];
    $fileType = $_FILES['image']['type'];
//    $fileSize = $_FILES['image']['size'];
    $filePath = "images/" . $fileName;

    $fileSize = getimagesize($fileTmp);


    //getting the file Width & Height

    $fileWidth = $fileSize[0];
    $fileHeight = $fileSize[1];


    if ($fileSize != false) {


        if (($fileType != "image/jpeg" && $fileType != "image/png") && $fileType != "image/gif") {

            echo "Please Upload A Jpeg/PNG/Gif";

        } else {

            move_uploaded_file($fileTmp, $filePath);
            $query = "INSERT INTO images(img_name, img_path, img_type) VALUES ('$fileName','$filePath','$fileType')";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("Failed!!!" . mysqli_error($connection));
            } else {
                echo "Upload Successful";
                echo "<br>";
                echo "Image Height : " . $fileHeight;
                echo "<br>";
                echo "Image Width : " . $fileWidth;
            }
        }


    } else {
        die("Please Upload A Image");
    }


}