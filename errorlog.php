<p>　条件：
		<?php
		if($_POST['性別'] == "Male") echo "男性席　"; else echo "女性席　";
		if($_POST['喫煙'] == "No") echo "禁煙席　";
		if($_POST['窓際'] == "Yes") echo "窓際席"; 
		echo "　", $_POST['人数'], "名様<br/><br/>";

		$price = $_POST['人数']*3000 + (($_POST['窓際']=="Yes")?5000:0);
		echo "　合計金額：　", $price, "円　（税込 ", $price * 1.10, " 円）";
		?>
	</p>
