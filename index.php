<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 06/08/2017
 * Time: 09:39 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Image</title>

    <!--    for preview-->
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
          rel="stylesheet" type="text/css"/>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">

    <!--    for preview Image-->

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <input type="file" name="image" onchange="readURL(this)"> <br>
    <img style="height: 572px width: 572px" id="preview" src="#" alt="Preview"> <br>
    <input type="submit" name="img_up" value="Upload!">


</form>
</body>
</html>
