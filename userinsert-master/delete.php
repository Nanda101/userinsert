<?php

$sql = "DELETE FROM todos WHERE userId='" . $_GET["userId"] . "'";
mysqli_query($conn,$sql);
header("Location:index.php");
?>