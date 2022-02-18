<!DOCTYPE html>
<?php 
    header("Content-Type: text/html; charset=utf-8");
    include("connMysql.php");
    $seldb = @mysqli_select_db($db_link, "reservation");
    if (!$seldb) die("資料庫選擇失敗！");
    $sql_query = "SELECT Car, Name, Gender, Email, Phone, ServiceTime, Year, Month, Day, ReserveTime, Place FROM `reservation` where `Name` = '".$_GET["Name"]."'";
    $result = mysqli_query($db_link, "$sql_query");
?>
<html>
<head>
	<title>購買車輛</title>
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
			<div class="col-md-5 box_reservation" style="padding-left: 40px;padding-top: 30px;">
				<h4>您的預約試乘紀錄</h4>
				<hr>
				<h5 style="font-weight: bold;text-align: left;font-style:italic">若想<u>修改</u>預約紀錄請聯絡客服，謝謝。</h5><br>	
			    <table border="2" cellpadding="8">
			     <!-- 所有資料內容 -->
			    <?php
			        while($row_result=mysqli_fetch_assoc($result)){
			            echo "<tr>";
			            echo "<th>試乘車款"."</th>";
			          	echo "<th>".$row_result["Car"]."</th>";
			           	echo "</tr>";
			            echo "<th>姓名"."</th>";
			            echo "<th>".$row_result["Name"]."</th>";
			            echo "</tr>";
			            echo "<th>性別"."</th>";
			            echo "<th>".$row_result["Gender"]."</th>";			            
			            echo "</tr>";
			            echo "<th>Email"."</th>";
			            echo "<th>".$row_result["Email"]."</th>";
			            echo "</tr>";
			            echo "<th>電話"."</th>";
			            echo "<th>".$row_result["Phone"]."</th>";
			            echo "</tr>";
			            echo "<th>可聯絡時間"."</th>";
			            echo "<th>".$row_result["ServiceTime"]."</th>";			            
			            echo "</tr>";
			            echo "<th>年"."</th>";
			            echo "<th>".$row_result["Year"]."</th>";			            
			            echo "</tr>";
			            echo "<th>月"."</th>";
			            echo "<th>".$row_result["Month"]."</th>";
			            echo "</tr>";
			            echo "<th>日"."</th>";
			            echo "<th>".$row_result["Day"]."</th>";
			            echo "</tr>";
			            echo "<th>時段"."</th>";
			            echo "<th>".$row_result["ReserveTime"]."</th>";
			            echo "</tr>";
			            echo "<th>試乘地點"."</th>";
			            echo "<th>".$row_result["Place"]."</th>";
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