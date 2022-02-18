<!DOCTYPE html>
<?php 
if(isset($_POST["action"])&&($_POST["action"]=="add")){
  include("connMysql.php");
  if (!@mysqli_select_db($db_link, "reservation")) die("資料庫選擇失敗！");
  $sql_query = "INSERT INTO `reservation` (`Car`,`Name`,`Gender`,`Email`,`Phone`,`ServiceTime`,`Year`,`Month`,`Day`,`ReserveTime`,`Place`) VALUES (";
  $sql_query .= "'".$_POST["Car"]."',";
  $sql_query .= "'".$_POST["Name"]."',";
  $sql_query .= "'".$_POST["Gender"]."',";
  $sql_query .= "'".$_POST["Email"]."',";
  $sql_query .= "'".$_POST["Phone"]."',";
  $sql_query .= "'".$_POST["ServiceTime"]."',";
  $sql_query .= "'".$_POST["Year"]."',";
  $sql_query .= "'".$_POST["Month"]."',";
  $sql_query .= "'".$_POST["Day"]."',";
  $sql_query .= "'".$_POST["ReserveTime"]."',";
  $sql_query .= "'".$_POST["Place"]."')";
  mysqli_query($db_link, $sql_query);
  header("Location: ReservationDone.html");
}
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
			<h4>預約試乘</h4>
			<hr>
				<form action="" method="post" name="formAdd" id="formAdd">
					<div class="form-row">
						<div class="form-group col-md-11">
							<label for="inputState">選擇試乘車款</label>
							<select name="Car" id="Car" class="form-control">
								<option value="The new 911 Carrera">The new 911 Carrera</option>
								<option value="911 Carrera 4 Cabriolet">911 Carrera 4 Cabriolet</option>
								<option value="The new 911 Carrera 4S">The new 911 Carrera 4S</option>
								<option value="Panamera">Panamera</option>
								<option value="Panamera 4S">Panamera 4S</option>
								<option value="Panamera GTS">Panamera GTS</option>
								<option value="Macan">Macan</option>
								<option value="Macan S">Macan S</option>
								<option value="Macan Turbo">Macan Turbo</option>
							</select>
						</div>
					</div>
					<hr>
					<h5>填寫資料並選擇試乘地點</h5>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputState">姓名:</label>
							<input type="text" class="form-control" name="Name" id="Name">
						</div>
						<div class="form-group col-md-2"></div>
						<div class="form-group col-md-3">
							<label for="inputState">性別:</label>
							<select name="Gender" id="Gender" class="form-control">
								<option value="男">男</option>
								<option value="女">女</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-11">
							<label for="inputState">Email:</label>
							<input type="text" class="form-control" name="Email" id="Email">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputState">電話:</label>
							<input type="text" class="form-control" name="Phone" id="Phone">
						</div>
						
						<div class="form-group col-md-5">
							<label for="inputState">客服人員聯絡時間:</label>
							<select name="ServiceTime" id="ServiceTime" class="form-control">
								<option value="皆可">皆可</option>
								<option value="8:00 ~ 12:00">8:00 ~ 12:00</option>
								<option value="12:00 ~ 16:00">12:00 ~ 16:00</option>
								<option value="16:00以後">16:00 以後</option>
							</select>
						</div>
					</div>
					<hr>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputState">期望日期:</label>
							<select name="Year" id="Year" class="form-control">
								<option value="2019年">2019 年</option>
								<option value="2020年">2020 年</option>
							</select>
						</div>
						<div class="form-group col-md-4">
							<label for="inputState" style="color: white;">space</label>
							<select name="Month" id="Month" class="form-control">
								<option value="1月">1 月</option>
								<option value="2月">2 月</option>
								<option value="3月">3 月</option>
								<option value="4月">4 月</option>
								<option value="5月">5 月</option>
								<option value="6月">6 月</option>
								<option value="7月">7 月</option>
								<option value="8月">8 月</option>
								<option value="9月">9 月</option>
								<option value="10月">10 月</option>
								<option value="11月">11 月</option>
								<option value="12月">12 月</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label for="inputState" style="color: white;">space</label>
							<select name="Day" id="Day" class="form-control">
								<option value="1日">1 日</option>
								<option value="2日">2 日</option>
								<option value="3日">3 日</option>
								<option value="4日">4 日</option>
								<option value="5日">5 日</option>
								<option value="6日">6 日</option>
								<option value="7日">7 日</option>
								<option value="8日">8 日</option>
								<option value="9日">9 日</option>
								<option value="10日">10 日</option>
								<option value="11日">11 日</option>
								<option value="12日">12 日</option>
								<option value="13日">13 日</option>
								<option value="14日">14 日</option>
								<option value="15日">15 日</option>
								<option value="16日">16 日</option>
								<option value="17日">17 日</option>
								<option value="18日">18 日</option>
								<option value="19日">19 日</option>
								<option value="20日">20 日</option>
								<option value="21日">21 日</option>
								<option value="22日">22 日</option>
								<option value="23日">23 日</option>
								<option value="24日">24 日</option>
								<option value="25日">25 日</option>
								<option value="26日">26 日</option>
								<option value="27日">27 日</option>
								<option value="28日">28 日</option>
								<option value="29日">29 日</option>
								<option value="30日">30 日</option>
								<option value="31日">31 日</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-11">
							<label for="inputState">試乘時段</label>
							<select name="ReserveTime" id="ReserveTime" class="form-control">
								<option>請選擇時段</option>
								<option value="8:00 ~ 10:00">8:00 ~ 10:00</option>
								<option value="10:00 ~ 12:00">10:00 ~ 12:00</option>
								<option value="12:00 ~ 14:00">12:00 ~ 14:00</option>
								<option value="14:00 ~ 16:00">14:00 ~ 16:00</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-11">
							<label for="inputState">試乘據點</label>
							<input type="text" class="form-control" name="Place" id="Place" placeholder="請輸入試乘地址">
						</div>
					</div>
					<hr>
		    		<input name="action" type="hidden" value="add">
		    		<input class="btn btn-primary" type="submit" name="button" id="AddButton" value="確認送出">
				</form>
			</div>
			<div class="col-md-6 fixed_buy">
				<script src="ninecar.js"></script>
				<div w3-include-html="ninecar.html"></div>
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