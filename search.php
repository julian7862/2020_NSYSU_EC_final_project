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
			<div class="col-md-5 box_reservation" style="padding-left: 40px;padding-top: 30px;">
				<h4>查詢預約試乘紀錄</h4>
				<hr>
		   		<form action="record_res.php" method="GET" id="ResearchForm">請輸入你的姓名
		    	<input type="Text" name="Name" id="Name" class="form-control">
		    	<hr>
		    	<input class="btn btn-primary" type="Submit" value="查詢">
		    	</form>
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