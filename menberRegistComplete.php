<!-- ヘッダーPHPを参照する。 -->
<?php require 'includes/header.php'; ?>
    <!-- トップページ部分 -->
    <main>
      <section class="linkBlock">
            <p class="pankuzu">TOP > 商品一覧</p>
            <p class="pankuzu">ようこそ、ゲスト様</p>
       </section>
        <?php
        $name=$_REQUEST['name'];
        $furigana=$_REQUEST['furigana'];
        $postcode_a=$_REQUEST['postcode_a'];
        $postcode_b=$_REQUEST['postcode_b'];
        $postcode=$postcode_a.'-'.$postcode_b;
        $address=$_REQUEST['address'];
        $mail=$_REQUEST['mail'];
        $password=$_REQUEST['password'];

        //登録するのは名前、フリガナ、郵便番号、住所、メールアドレス、パスワードの6つ
        $pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8','ccStaff','ccDonuts');
        $sql=$pdo->prepare('insert into customers values(null,?,?,?,?,?,?,?)');
        $sql->execute([$name,$furigana,$postcode_a,$postcode_b,$address,$mail,$password]);
        echo        '<section class="inputBlock">';
        echo            '<p class="titleHead">会員登録完了</p>';
        echo            '<div class="loginBlock compBlock">';
        echo                '<p class="loginText compTxt"><span class="userName">',$name,'</span>様、会員登録が完了しました。</p>';
        echo                '<p class="loginText compTxt">ログインページへお進みください。</p>';
        echo            '</div>';
        echo            '<p class="pageLink"><a href="#">クレジットカード登録へすすむ</a></p>';
        echo            '<p class="pageLink"><a href="#">購入確認ページへすすむ</a></p>';
        echo        '</section>';
        ?>
    </main>
    <!-- フッターPHPを参照する。 -->
<?php require 'includes/footer.php'; ?>