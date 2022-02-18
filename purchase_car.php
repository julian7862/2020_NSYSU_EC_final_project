<!DOCTYPE html>
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
			<div class="col-md-5 box_buy" style="padding-left: 40px;padding-top: 30px;">
			<h4>購買車輛</h4>
			<hr>
				<form method="post" action="purchase.php">
					<div class="form-row">
						<div class="form-group col-md-11">
							<label for="inputState">車款</label>
							<select id="inputState" class="form-control" name="Car_name">
								<option value="911 Carrera">The new 911 Carrera(NTD 5,800,000起)</option>
								<option value="911 Carrera 4 Cabriolet">911 Carrera 4 Cabriolet(NTD 6,960,000起)</option>
								<option value="911 Carrera 4S">The new 911 Carrera 4S(NTD 7,060,000起)</option>
								<option value="Panamera">Panamera(NTD 4,930,000起)</option>
								<option value="Panamera 4S">Panamera 4S(NTD 7,630,000起)</option>
								<option value="Panamera GTS">Panamera GTS(NTD 8,910,000起)</option>
								<option value="Macan">Macan(NTD 2,750,000起)</option>
								<option value="Macan S">Macan S(NTD 3,170,000起)</option>
								<option value="Macan Turbo">Macan Turbo(NTD 4,610,000起)</option>
							</select>
						</div>
					</div>
					<hr>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="inputState">顏色</label>
							<br>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="Color" id="inlineRadio1" value="紅色">
							  <label class="form-check-label red square" for="inlineRadio1"></label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="Color" id="inlineRadio2" value="黑色">
							  <label class="form-check-label black square" for="inlineRadio2"></label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="Color" id="inlineRadio2" value="黃色">
							  <label class="form-check-label yellow square" for="inlineRadio2"></label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="Color" id="inlineRadio2" value="白色">
							  <label class="form-check-label white square" for="inlineRadio2"></label>
							</div>
						</div>
					</div>
					<hr>
					<div class="form-row">
						<div class="form-group col-md-11">
							<label for="inputState">輪圈</label>
							<select id="inputState" class="form-control" name="Wheel_name">
								<option value="Carrera輪圈">前19吋後20吋 Carrera 輪圈(0 NTD)</option>
								<option value="Carrera S 輪圈">前20吋後21吋 Carrera S 輪圈(103,100 NTD)</option>
								<option value="RS Spyder 輪圈">前20吋後21吋 RS Spyder 輪圈(216,700 NTD)</option>
								<option value="Carrera Classic 輪圈">前20吋後21吋 Carrera Classic 輪圈(141,000 NTD)</option>
								<option value="Carrera Exclusive Design 輪圈">前20吋後21吋 Carrera Exclusive Design 輪圈(219,400 NTD)</option>
							</select>
						</div>
					</div>
					<hr>
					<div class="form-row">
						<div class="form-group col-md-11">
							<label for="inputState">輪圈配件</label>
							<select id="inputState" class="form-control" name="Content">
								<option value="輪圈施以外觀同色烤漆">輪圈施以外觀同色烤漆(75,800 NTD)</option>
								<option value="輪圈施以金屬墨玉黑色烤漆">輪圈施以金屬墨玉黑色烤漆(75,800 NTD)</option>
								<option value="輪圈施以霧面鉑銀色烤漆">輪圈施以霧面鉑銀色烤漆(75,800 NTD)</option>
								<option value="輪圈施以高亮澤黑色烤漆">輪圈施以高亮澤黑色烤漆(75,800 NTD)</option>
								<option value="輪圈施以消光黑色烤漆">輪圈施以消光黑色烤漆(75,800 NTD)</option>
								<option value="輪圈施以霧面鉑金色烤漆">輪圈施以霧面鉑金色烤漆(75,800 NTD)</option>
							</select>
						</div>
					</div>
					<hr>
					<div class="form-row">
						<div class="form-group col-md-11">
							<label for="inputState">座椅</label>
							<select id="inputState" class="form-control" name="Infor">
								<option value="4向電動調整跑車座椅">4向電動調整跑車座椅(0 NTD)</option>
								<option value="14向全功能電動調整跑車座椅(前座)，含記憶套件">14向全功能電動調整跑車座椅(前座)，含記憶套件(144,000 NTD)</option>
								<option value="四向調整升級跑車電動椅">四向調整升級跑車電動椅(51,200 NTD)</option>
								<option value="18向全功能電動調整跑車前座座椅，含記憶套件">18向全功能電動調整跑車前座座椅，含記憶套件(230,400 NTD)</option>
							</select>
						</div>
					</div>
					<hr>
					<div class="form-row">
						<div class="form-group col-md-11">
							<label for="inputState">照明系統</label>
							<div class="checkbox">
							   <input type="checkbox" name="Name[]" value="LED 矩陣式頭燈系統含保時捷動態照明升級系統">LED 矩陣式頭燈系統含保時捷動態照明升級系統 (PDLS Plus)(122,000 NTD)</input>
							</div>
							<div class="checkbox">
							   <input type="checkbox" name="Name[]" value="深色LED 矩陣式頭燈系統含保時捷動態照明升級系統">深色LED 矩陣式頭燈系統含保時捷動態照明升級系統 (PDLS Plus)(161,000 NTD)</input>
							</div>
							<div class="checkbox">
							   <input type="checkbox" name="Name[]" value="後擋風玻璃雨刷">後擋風玻璃雨刷(22,000 NTD)</input>
							</div>
							<div class="checkbox">
							   <input type="checkbox" name="Name[]" value="前擋遮陽玻璃">前擋遮陽玻璃(7,200 NTD)</input>
							</div>
							<div class="checkbox">
							   <input type="checkbox" name="Name[]" value="私密玻璃">私密玻璃(34,900 NTD)</input>
							</div>
						</div>
					</div>
					<hr>
					<button class="btn btn-primary" type="submit">訂購車輛</button>
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