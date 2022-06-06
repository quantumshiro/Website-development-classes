<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
  <title>Japanese - English quiz</title>
</head>
<body>
  <h1 align="center">英単語クイズ</h1>
  <?php
    $fp = fopen("jeconv.dat", "r");  
    $qnum = $_POST['qnum'];
    if($qnum > "1") {
      for($i="1"; $i<$qnum; $i++) {
        $question = fgets($fp);
	  }
      list($qnum, $word, $correct, $choice1, $choice2, $choice3, $choice4)
        = explode ("|", $question);
      $astring = ($_POST['ans'] == $correct) ? "正解" : "不正解";
      print("<p>前問は $astring でした。</p><hr/>");
    }
	
    if (($question=fgets($fp)) !== false) {
      list($qnum, $word, $correct, $choice1, $choice2, $choice3, $choice4) 
        = explode ("|", $question);
      print("<h4>問題番号 $qnum</h4><h3>$word の意味は？</h3>");
      print("<form method='post' action='./chap1201quiz.php'>");
      print("　<input type='radio' name='ans' value='1'/>$choice1");
      print("　<input type='radio' name='ans' value='2'/>$choice2");
      print("　<input type='radio' name='ans' value='3'/>$choice3");
      print("　<input type='radio' name='ans' value='4'/>$choice4");
      print("<br/><br/>");
      $qnum++;
      print("<button type='submit' name='qnum' value='$qnum'>解答</button>");
      print("</form>");
    } else  {
      print("<h4>英単語クイズ おわり</h4>");
    }
    fclose($fp);
  ?>
</body>
</html>