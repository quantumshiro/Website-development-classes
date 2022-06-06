<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>はじめてのPHP</title>
</head>
<body>
<p>あなたが生まれた西暦年は
<?php
	$year = $_GET['year'];
	$month = $_GET['month'];
	$day = $_GET['day'];

	if ( $_GET['元号'] == "M") $ys = 1868;
	if( $_GET['元号'] == "T" ) $ys = 1912;
	if( $_GET['元号'] == "S" ) $ys = 1926;
	if( $_GET['元号'] == "H" ) $ys = 1989;
	if( $_GET['元号'] == "R" ) $ys = 2019;
	// 2019 + 2022 - 1
	$by = $ys + $year - 1;
	echo $by . "年 ですね";
?>
</p>
<p>
<?php
	echo "今年は ";
	$now_year = date('Y');
	$now_month = date('m');
	$now_date = date('d');

	echo $now_year . "年なので、あなたの年齢は ";
	if ( $now_month >  $month) {
		echo $now_year - $by - 1;
	} else if ( $now_month == $month ) {
		if ( $now_date >= $day ) {
			echo $now_year - $by;
		} else {
			echo $now_year - $by - 1;
		}
	} else {
		echo $now_year - $by;
	}
	echo "歳 です";
?>
</body>
</html>
