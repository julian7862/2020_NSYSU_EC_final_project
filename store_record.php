<?php
	include("connMysql.php");
    if (!@mysqli_select_db($db_link, "porsche_infor")) die("資料庫選擇失敗！");
    $sql_query = "INSERT INTO `record` (`Car_name` ,`Color` ,`Wheel`,`Wheel_fitting` ,`Seat` ,`Else_fitting`,`Price`) VALUES (";
    $sql_query .= "'".$_POST["Car_name"]."',";
    $sql_query .= "'".$_POST["Color"]."',";
    $sql_query .= "'".$_POST["Wheel"]."',";
    $sql_query .= "'".$_POST["Wheel_fitting"]."',";
    $sql_query .= "'".$_POST["Seat"]."',";
    $sql_query .= "'".implode("/", $_POST["Else_fitting"])."',";
    $sql_query .= "'".$_POST["Price"]."')";
    mysqli_query($db_link, $sql_query);
    //重新導向回到主畫面
    header("Location:Porsche.html");
?>