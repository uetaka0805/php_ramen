<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>入力フォーム</title>
    <link rel="stylesheet" type="text/css" href="php_ramen.css" />
  </head>
  
  <body>
  <h1>ラーメン店アンケート</h1>
  <h3>※は必須項目です</h3>
  <form action="recieve.php" method="post">
  	<p>
  		<label for ="your_name">氏名※：</label>
  		<input type="text" name="your_name" id="your_name" size="35" maxlength="255"/>
  	</p>
  	
  	<p class="checkbox-group">性別：
  		<input type="radio" name="gender" id="gender_male" value="男性">
  		<label for="gender_male">男性</label>
  		<input type="radio" name="gender" id="gender_female" value="女性">
  		<label for="gender_female">女性</label>
  		<input type="radio" name="gender" id="gender_non" value="無回答">
  		<label for="gender_non">無回答</label>
  	</p>
  	
  	<p>
  		<form action="process_form.php" method="post">
    	<label for="zip_first">郵便番号：</label>
    	<input type="text" name="zip_first" id="zip_first" pattern="\d{3}" title="3桁の数字を入力してください" required>
    	-
    	<input type="text" name="zip_second" id="zip_second" pattern="\d{4}" title="4桁の数字を入力してください" required>
		</form>
  	</p>
  		<label for="e_mail">メールアドレス※：</label>
    	<input type="text" name="e_mail" id="e_mail" pattern="\d{3}" placeholder="半角で入力してください" required>
  	<p>
  		
  	</p>
  	<p>年齢：
  		<select name = "age">
  		<?php
  		 for($i = 5; $i <= 80; $i++){
  		 	echo '<option value ="',$i,'">',$i,'</option>';
  		 }
  		 ?>
  		</select>歳
  	</p>
  	
  	<p>
  		<form action="process_form.php" method="post">
    		<label for="favorite_ramen">一番好きなラーメン：</label>
    		<select name="favorite_ramen" id="favorite_ramen">
        	<option value="shoyu">醤油ラーメン</option>
        	<option value="shio">塩ラーメン</option>
        	<option value="tonkotsu">とんこつラーメン</option>
        	<option value="miso">味噌ラーメン</option>
    		</select>
		</form>
  	</p>
  	
  	<p class="checkbox-group">お好きなトッピング（複数選択可）:
  		<input type = "checkbox" name = "topping[]" id = "menma" value = "メンマ">
  		<label for = "メンマ">メンマ</label>
  		<input type = "checkbox" name = "topping[]" id = "pork" value = "チャーシュー">
  		<label for = "チャーシュー">旅行</label>
  		<input type = "checkbox" name = "topping[]" id = "seaweed" value = "焼きのり">
  		<label for = "pet">焼きのり</label>
  		<input type = "checkbox" name = "topping[]" id = "egg" value = "煮卵">
  		<label for = "pet">煮卵</label>
  		<input type = "checkbox" name = "topping[]" id = "green_onion" value = "ネギ">
  		<label for = "pet">ネギ</label>
  	</p>
  	
  	<p>ご意見・ご感想：
  		<form action="process_feedback.php" method="post">
    	<label for="user_feedback"></label>
    	<textarea name="user_feedback" id="user_feedback" rows="4" cols="50" placeholder="こちらにご意見やご感想をお書きください"></textarea>
		</form>
  	</p>
  	
  	<p>
  		<input type="submit" a href="process_form.php" value="送信">
  		<input type="reset" value="取消">
  	</p>
  </form>
  </body>
</html>
