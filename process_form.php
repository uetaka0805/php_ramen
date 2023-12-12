<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" type="text/css" href="php_ramen.css" />
</head>
<body>
<form>
<div class="confirmation">
    <h1>入力内容確認</h1>

    <p><strong>氏名：</strong> <?php echo htmlspecialchars($_POST['your_name'], ENT_QUOTES); ?></p>

    <p><strong>性別：</strong> <?php echo htmlspecialchars($_POST['gender'], ENT_QUOTES); ?></p>

    <p><strong>郵便番号：</strong> <?php echo htmlspecialchars($_POST['zip_first'], ENT_QUOTES); ?> - <?php echo htmlspecialchars($_POST['zip_second'], ENT_QUOTES); ?></p>

    <p><strong>メールアドレス：</strong> <?php echo htmlspecialchars($_POST['e_mail'], ENT_QUOTES); ?></p>

    <p><strong>年齢：</strong> <?php echo htmlspecialchars($_POST['age'], ENT_QUOTES); ?> 歳</p>

    <p><strong>一番好きなラーメン：</strong> <?php echo htmlspecialchars($_POST['favorite_ramen'], ENT_QUOTES); ?></p>

    <p><strong>お好きなトッピング：</strong>
        <?php
        if (isset($_POST['topping']) && is_array($_POST['topping'])) {
            echo implode(", ", array_map('htmlspecialchars', $_POST['topping']));
        }
        ?>
    </p>

    <p><strong>ご意見・ご感想：</strong> <?php echo htmlspecialchars($_POST['user_feedback'], ENT_QUOTES); ?></p>

    <p><a href="php_ramen.php">戻る</a></p>
</div>
</form>
</body>
</html>
