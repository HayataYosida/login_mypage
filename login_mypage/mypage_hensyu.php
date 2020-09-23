<?php
mb_internal_encoding("utf8");

session_start();

/*if(empty($_POST['rand'])){
    header("Location:login_error.php");
}*/
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="log_out.php">ログアウト</a></div>
        </header>
        <main>
            <form action="mypage_update.php" method="post">
                <div class="form_contents">
                    <h2>会員情報</h2>
                        <p>こんにちは！<?php echo $_SESSION['name'];?>さん</p>
                        <img src="<?php echo $_SESSION['picture']; ?>">
                    <div class="migi">
                        <p>氏名:<input type="text" name="name" size="35"></p>
                        <p>メール:<input type="text" name="mail" size="35"></p>
                    
                        <p>パスワード:<input type="password" class="formbox" size="35" name="password" id="confirm" oninput="ConfirmPassword(this)" pattern="^[a-zA-Z0-9]{6,}$" ></p>
                   
                    </div>
                    <div class="comments">
                        <br>
                        <textarea rows="5" cols="85" name="comments"></textarea>
                    </div>
                    <div class="nakayose"><input type="submit" class="submit_button" size="40" value="この内容に変更する"/></div>
                </div>
            </form>
        </main>
        <footer>
        © 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>