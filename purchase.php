<?php
   
    include("connMysql.php");
    if (!@mysqli_select_db($db_link, "porsche_infor")) die("資料庫選擇失敗！");
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $Car_name = $_POST['Car_name'];
        $Color = $_POST['Color'];
        $Wheel_name = $_POST['Wheel_name'];
        $Content = $_POST['Content'];
        $Infor = $_POST['Infor'];
        $Name = $_POST['Name'];
    }

    $result = mysqli_query($db_link, "SELECT Price FROM car WHERE Car_name='$Car_name'");
    $Price = $result->fetch_row()[0];

    $result1 = mysqli_query($db_link, "SELECT Color_price FROM color WHERE Color='$Color'");
    $Color_price = $result1->fetch_row()[0];

    $result2 = mysqli_query($db_link, "SELECT Wheel_price FROM wheel WHERE Wheel_name='$Wheel_name'");
    $Wheel_price = $result2->fetch_row()[0];

    $result3 = mysqli_query($db_link, "SELECT Fitting_price FROM wheel_fitting WHERE Content='$Content'");
    $Fitting_price = $result3->fetch_row()[0];

    $result4 = mysqli_query($db_link, "SELECT Seat_price FROM seat WHERE Infor='$Infor'");
    $Seat_price = $result4->fetch_row()[0];

    $sql = "SELECT Name,Else_price FROM else_fitting WHERE ";
    foreach ($Name as $value) {
        $sql .= "Name='".$value."' OR ";
    }
    $sql = rtrim($sql, " OR ");
    $result5 = mysqli_query($db_link, $sql);
    $Else_price = $result5->fetch_all(MYSQLI_ASSOC);

    $Total=$Price+$Color_price+$Wheel_price+$Fitting_price+$Seat_price;
?>
<!DOCTYPE html>
<html>
<head>
	<title>確認購買頁面</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Porsche.css">
</head>
<body>
	<script src="nav.js"></script>
	<div w3-include-html="nav.html"></div>
    <form method="post" action="./store_record.php">

    <div class="container">
        <div class="row">
            <div class="col-md-5 box_reservation" style="padding-left: 40px;padding-top: 30px;">
                <h4>確認購買資訊</h4>
                <hr>       
        <table border="2" cellpadding="8" style="margin-left: auto;margin-right: auto;">
            <tr>
                <td>品項</td><td>名稱</td><td>價錢</td>
            </tr>
            <tr>
                <td>車款</td><td><?php echo $Car_name ?></td><td>$<?php echo $Price ?></td>
            </tr>
            <tr>
                <td>車色</td><td><?php echo $Color ?></td><td>$<?php echo $Color_price ?></td>
            </tr>
            <tr>
                <td>輪圈</td><td><?php echo $Wheel_name ?></td><td>$<?php echo $Wheel_price ?></td>
            </tr>
            <tr>
                <td>輪圈配件</td><td><?php echo $Content ?></td><td>$<?php echo $Fitting_price ?></td>
            </tr>
            <tr>
                <td>座椅</td><td><?php echo $Infor ?></td><td>$<?php echo $Seat_price ?></td>
            </tr>
            <tr>
                <td>照明系統</td>
                <td>
                    <?php
                        foreach ($Else_price as $name_price) {
                            foreach ($name_price as $field => $value) {
                                if ($field == "Name") echo "$value <br>";
                            }
                        }
                    ?>
                </td>
                <td>
                    <?php
                        foreach ($Else_price as $name_price) {
                            foreach ($name_price as $field => $value) {
                                if ($field == "Else_price"){
                                    echo "\$$value <br>";
                                    $Total+=$value;
                                } 
                            }
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>總金額</td>
                <td></td>
                <td>$<?php echo $Total ?></td>
            </tr>  
        </table>
        <hr>
        <div style="text-align: center">
        <input class="btn btn-primary" type="submit" name="button" id="AddButton" value="確認購買">　　　
        <input class="btn btn-primary" type="button" name="cancel" id="cancel"   value="重新填寫" onclick="back()">
        </div>
        <input type="hidden" name="Car_name" value="<?php echo $Car_name ?>">
        <input type="hidden" name="Color" value="<?php echo $Color ?>">
        <input type="hidden" name="Wheel" value="<?php echo $Wheel_name ?>">
        <input type="hidden" name="Wheel_fitting" value="<?php echo $Content ?>">
        <input type="hidden" name="Seat" value="<?php echo $Infor ?>">
        <?php 
            foreach ($Else_price as $name_price) {
                foreach ($name_price as $field => $value) {
                    if ($field == "Name") echo '<input type="hidden" name="Else_fitting[]" value="'.$value.'">';
                }
            }
        ?>
        <input type="hidden" name="Price" value="<?php echo $Total ?>">
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

<script type="text/javascript">
     function back(){         
         location.href="purchase_car.php?";
    }   
</script> 