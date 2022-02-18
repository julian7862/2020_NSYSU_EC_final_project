<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql.php");
	$seldb = @mysqli_select_db($db_link, "porsche_infor");
    if (!$seldb) die("資料庫選擇失敗！");

    $sql_query = "SELECT * FROM `record`";
    $result = mysqli_query($db_link, $sql_query);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>會員訂單紀錄</title>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Porsche.css">
 </head>
 <body>
 	<script src="nav.js"></script>
	<div w3-include-html="nav.html"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-7 box_reservation" style="padding-left: 40px;padding-top: 30px;">
                <h4>您的購買車輛紀錄</h4>
                <hr>
 	<table border="2" cellpadding="8">
        <?php
        while($row_result=mysqli_fetch_assoc($result)){
        	echo "<tr>";
            	echo "<td>"."品項"."</td>";
            	echo "<td>"."名稱"."</td>";
            echo "</tr>";
            echo "<tr>";
            	echo "<td>"."車款"."</td>";
            	echo "<td>".$row_result["Car_name"]."</td>";
            echo "</tr>";
            echo "<tr>";
            	echo "<td>"."車色"."</td>";
            	echo "<td>".$row_result["Color"]."</td>";
            echo "</tr>";
            echo "<tr>";
            	echo "<td>"."輪圈"."</td>";
            	echo "<td>".$row_result["Wheel"]."</td>";
            echo "</tr>";
            echo "<tr>";
            	echo "<td>"."輪圈配件"."</td>";
            	echo "<td>".$row_result["Wheel_fitting"]."</td>";
            echo "</tr>";
            echo "<tr>";
            	echo "<td>"."車款"."</td>";
           	 	echo "<td>".$row_result["Seat"]."</td>";
            echo "</tr>";
            echo "<tr>";
            	echo "<td>"."照明系統"."</td>";
            	echo "<td>".$row_result["Else_fitting"]."</td>";
            echo "</tr>";
            echo "<tr>";
            	echo "<td>"."總金額"."</td>";
            	echo "<td>"."$".$row_result["Price"]."</td>";
            echo "</tr>";
        }
    ?>
 	</table>
 </div>
</div>
</div>
 	<script src="footer.js"></script>
	<div w3-include-html="footer.html"></div>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>