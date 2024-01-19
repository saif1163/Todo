<?php 
    include './partials/db_connect.php';

    $sql = "SELECT * FROM list";
//   $sql =  "SELECT * FROM list (list, user_id)
//     VALUES ('$list', '$user_id');
//     ";

    $result = $conn->query($sql);
?>