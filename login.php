<!-- ヘッダーPHPを参照する。 -->
<?php require 'includes/header.php'; ?>
    <!-- トップページ部分 -->
    <main>
        <section class="linkBlock">
            <p class="pankuzu">TOP > 商品一覧</p>
            <p class="pankuzu">ようこそ、ゲスト様</p>
        </section>
        <section class="inputBlock">
            
            <p class="titleHead">ログイン</p>
            <form action="loginComplete.php" class="loginBlock">
                <p class="loginText">メールアドレス</p>
                <input type="text" name="loginAdress" class="loginInput">
                <p class="loginText">パスワード</p>
                <input type="password" name="password" class="loginInput">
                <input type="submit" value="ログインする" class="loginEnter">
            </form>
            <p class="pageLink"><a href="menberRegist.php">会員登録はこちら</a></p>
        </section>



    </main>
    <!-- フッターPHPを参照する。 -->
<?php require 'includes/footer.php'; ?>