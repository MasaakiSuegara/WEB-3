<!-- ヘッダーPHPを参照する。 -->
<?php require 'includes/header.php'; ?>
    <!-- トップページ部分 -->
    <main>
        <section class="linkBlock">
            <p class="pankuzu">TOP > 商品一覧</p>
            <p class="pankuzu">ようこそ、ゲスト様</p>
        </section>
        <?php
        // 入力画面から受け取った情報をいったん変数にする。
        $name=$_REQUEST['name'];
        $furigana=$_REQUEST['furigana'];
        $postcode=$_REQUEST['fPostcode'].'-'.$_REQUEST['lPostcode'];
        $address=$_REQUEST['address'];
        $mail=$_REQUEST['mail'];
        $mailCheck=$_REQUEST['mailCheck'];
        $password=$_REQUEST['password'];
        $passwordCheck=$_REQUEST['passwordCheck'];
        // 正規表現を用いたエラーチェックエラーの場合はエラー内容を表示する。
        //余裕があればほかの項目のチェックも作る。
        if (preg_match('/^[a-zA-Z0-9]{1,}@[a-zA-Z0-9]{1,}$/',$mail)&& $mail == $mailCheck){
            echo '<p class="registError">メールアドレスは問題ありません。</p>';
        }   else { 
                echo '<p class="registError">メールアドレスもしくは確認用メールアドレスが間違っています。もう一度やり直してください</p>';
        }
        if (preg_match('/^[0-9]{3}-[0-9]{4}$/',$postcode)){
            echo '<p class="registError">郵便番号は問題ありません。</p>';
        }   else { 
                echo '<p class="registError">郵便番号が間違っています。もう一度やり直してください</p>';
        }
        if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8,20}$/',$password) && $password == $passwordCheck){
                    echo '<p class="registError">パスワードは問題ありません。</p>';
        }   else {
                echo '<p class="registError">パスワード又は確認用パスワードが間違っています。もう一度やり直してください</p>';
        }

    //すべて入力されているときに登録ボタンを出すようにする。
        if($name!=''&&$furigana!=''&&$postcode!='-'&&$address!=''&&$mail!=''&&$mailCheck!=''&&$password!=''&&$passwordCheck!=''){
        echo    '<section class="inputBlock">';
        echo        '<p class="titleHead">入力確認</p>';
        echo        '<form action="menberRegistComplete.php" method="post" class="registBlock" id="menberRegist">';
        echo            '<p class="registText">お名前</p>';
        echo            '<input type="text" name="name" class="registCheck" readonly value=',$name ,'>';
        echo            '<p class="registText">お名前(フリガナ)</p>';
        echo            '<input type="text" name="furigana" class="registCheck" readonly value=',$furigana ,'>';
        echo            '<p class="registText">郵便番号</p>';
        echo            '<input type="text" name="postcode" class="registCheck" readonly value=',$postcode ,'>';
        echo            '<p class="registText">住所</p>';
        echo            '<input type="text" name="address" class="registCheck" readonly value=',$address ,'>';
        echo            '<p class="registText">メールアドレス</p>';
        echo            '<input type="text" name="mail" class="registCheck" readonly value=',$mail ,'>';
        echo            '<p class="registText">メールアドレス(確認用)</p>';
        echo            '<input type="text" name="mailCheck" class="registCheck" readonly value=',$mailCheck ,'>';
        echo            '<p class="registText">パスワード</p>';
        echo            '<input type="password" name="password" class="registCheck" readonly value=',$password ,'>';
        echo            '<p class="registText">パスワード確認用</p>';
        echo            '<input type="password" name="passwordCheck" class="registCheck" readonly value=',$passwordCheck ,'>';
        echo            '<input type="submit" value="登録する" class="registEnter" id="enterRegist">';
        // 入力戻るボタンJAVASCRIPTで内容をactonを変えるよう指示する必要があるのでいったん保留。
        // echo            '<input type="submit" value="入力画面に戻る" class="returnPress" id="returnRegist">';
        echo        '</form>';
        echo    '</section>';
        }   else {
                echo '<p class="registError">入力エラー又は空欄があります。もう一度やり直してください</p>';
                echo '<p class="returnPress"><a href="menberRegist.php">入力画面に戻る。</a></p>';
        }
?>
    </main>
    <!-- フッターPHPを参照する。 -->
<?php require 'includes/footer.php'; ?>