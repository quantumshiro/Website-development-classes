<?php
    echo $_POST['name'], " 様、座席がご用意できました。<br>";
    if ($_POST['gender'] == "Male") echo "男性席 "; else echo "女性席 ";
    if ($_POST['smoking'] == "No") echo "禁煙席 ";
    if ($_POST['window'] == "Yes") echo "窓際席 ";
    echo " ", $_POST['num'], " 名様<br><br>";
    $price = $_POST['num']*3000 + (($_POST['window'] == "Yes") ? 5000 : 0);
    echo " 合計金額：", $price, "円 (税込", $price * 1.10, "円)<br>";
?>