<!-- ヘッダーPHPを参照する。 -->
<?php require 'includes/header.php'; ?>
    <!-- トップページ部分 -->
    <main>
        <section class="linkBlock">
            <p class="pankuzu">TOP > 商品一覧</p>
            <p class="pankuzu">ようこそ、ゲスト様</p>
        </section>
        <!-- このページは通常の入力フォームとして作成 -->
        <section class="inputBlock">
            <p class="titleHead">会員登録</p>
            <form action="menberRegistCheck.php" method="post" class="registBlock">
                <p class="registText">お名前<span class="deficit">(必須)</span></p>
                <input type="text" name="name" class="registInput">
                <p class="registText">お名前(フリガナ)<span class="deficit">(必須)</span></p>
                <input type="text" name="furigana" class="registInput">
                <p class="registText">郵便番号(左3桁、右4桁)<span class="deficit">(必須)</span></p>
                <div class="postBlock">
                    <input type="text" name="postcode_a" class="postInput_a">
                    <input type="text" name="postcode_b" class="postInput_b">
                </div>
                <p class="registText">住所<span class="deficit">(必須)</span></p>
                <input type="text" name="address" class="registInput">
                <p class="registText">メールアドレス(~@~)<span class="deficit">(必須)</span></p>
                <input type="text" name="mail" class="registInput">
                <p class="registText">メールアドレス(~@~)(確認用)<span class="deficit">(必須)</span></p>
                <input type="text" name="mailCheck" class="registInput">
                <p class="registText">パスワード<span class="deficit">(必須)</span></p>
                <p class="cation"><span class="deficit">半角英数字8文字以上20文字以内で入力してください。※記号の使用はできません</span></p>
                <input type="password" name="password" class="registInput">
                <p class="registText">パスワード確認用<span class="deficit">(必須)</span></p>
                <input type="password" name="passwordCheck" class="registInput">
                <input type="submit" value="入力確認する。" class="registEnter">
            </form>
        </section>
    </main>

    <!-- フッターPHPを参照する。 -->
<?php require 'includes/footer.php'; ?>