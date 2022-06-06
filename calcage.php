<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>はじめてのPHP</title>
</head>
<body>
<p>あなたが生まれた西暦年は
<?php
	$nen = $_GET['nen'];
	if( $_GET['元号'] == "T" ) $ys = 1912;
	if( $_GET['元号'] == "S" ) $ys = 1926;
	if( $_GET['元号'] == "H" ) $ys = 1989;
	$by = $ys + $nen -1;
	echo $by . "年 ですね";
?>
</p>
<p>
<?php
	echo "今年は ";
	$yr = date('Y');
	echo $yr . "年なので、あなたの年齢は ";
	echo $yr - $by - 1;
	echo "歳 または ";
	echo $yr - $by;
	echo "歳 です";
?>
</body>
</html>
