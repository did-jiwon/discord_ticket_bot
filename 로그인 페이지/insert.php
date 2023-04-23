<?php
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials");
$sql = "
    INSERT INTO topic (
        title,
        description,
        created
    ) VALUES (
      'MYSQL',
      'MYSQL is..',        
      NOW()
    )";
mysqli_query($conn, $sql);

echo mysqli_error($conn);

?>