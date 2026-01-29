<!-- ヘッダーPHPを参照する。 -->
<?php require 'includes/header.php'; ?>
    <!-- トップページ部分 -->
    <main>
        <section class="linkBlock">
            <p class="pankuzu">TOP > 商品一覧</p>
            <p class="pankuzu">ようこそ、ゲスト様</p>
        </section>
        <section class="inputBlock">
            
            <p class="titleHead">入力情報確認</p>
            <div class="registBlock">
                <p class="registText">お名前</p>
                <p class="registCheck">ドーナツ太郎</p>

                <p class="registText">カード番号</p>
                <p class="registCheck">123456789123</p>

                <p class="registText">カード会社</p>
                <p class="registCheck">JCB</p>

                <p class="registText">有効期限</p>
                <!-- figmaファイルになるようにCSSかPHP出力時に調整必要 -->
                <p class="registCheck">4<span>月</span></p>
                <p class="registCheck">25<span>年</span></p>

                <p class="registText">セキュリティコード</p>
                <p class="registCheck">123456</p>

                <p class="registEnter"><a href="#">登録する</a></p>
            </div>
        </section>
    </main>
    <!-- フッターPHPを参照する。 -->
<?php require 'includes/footer.php'; ?>