<?php
if (isset($_POST['distance'])) {
    $distance = $_POST['distance'];
    file_put_contents("distance.txt", $distance);
    echo "OK";
}
?>
