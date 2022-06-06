<?php
if (isset($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'] + 1;
} else {
    $counter = 1;
}

setcookie("counter", $counter, time() + 30);
?>
<html>
<head>
<meta charset="UTF-8">
<title>Cookie テスト</title>
</head>
<body>
	<?php echo $counter . "回目のアクセスです。"; ?>
</body>
</html>