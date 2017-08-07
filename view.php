<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Showing Image</title>
</head>
<body>
<?php

/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 06/08/2017
 * Time: 09:40 PM
 */


include "db.php";
$id = 41;
$query = "SELECT * FROM images WHERE images.img_id ='{$id}'";

$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
$img_id = $row['img_id'];
$img_name = $row['img_name'];
$img_path = $row['img_path'];

?>

<img width="512" height="512" src="<?php echo $img_path ?>" alt="unable to load">
</body>
</html>


<?php }


if (!$result) {
    die("Error!!" . mysqli_error($connection));
}

?>





