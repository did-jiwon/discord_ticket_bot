<?php
    $tmp_id = $_POST['id'];
    $conn = mysqli_connect("localhost", "root", "111111", "opentutorials");
    $sql = "DELETE FROM jjim WHERE id=$tmp_id";
    mysqli_query($conn, $sql);
    //echo mysqli_error($conn);
    print "<script language=javascript> alert('리스트에서 제거됨'); history.back(-2); </script>";
    mysqli_close($conn);
?>