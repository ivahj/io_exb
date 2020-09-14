<?php
include "conn.php";
$sql="SELECT * FROM users";
$results=$db->query($sql);
$ass_arr=$results->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($ass_arr);
?>