<?php
$tmp_sname = $_POST['sname'];
$tmp_address = $_POST['address'];
$tmp_link = $_POST['link'];
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials");
$sql = "
    INSERT INTO jjim (
        name,
        description,
        link
    ) VALUES (
      '$tmp_sname',
      '$tmp_address',
      '$tmp_link'        
    )";
mysqli_query($conn, $sql);
//echo mysqli_error($conn);
print "<script language=javascript> alert('리스트에 추가됨'); history.back(-2); </script>";
mysqli_close($conn);
?>
