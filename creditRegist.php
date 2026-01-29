<!-- ヘッダーPHPを参照する。 -->
<?php require 'includes/header.php'; ?>
    <!-- トップページ部分 -->
    <main>
        <section class="linkBlock">
            <p class="pankuzu">TOP > 商品一覧</p>
            <p class="pankuzu">ようこそ、ゲスト様</p>
        </section>
        <section class="inputBlock">
            
            <p class="titleHead">カード情報登録</p>
            <div class="registBlock">
                <p class="registText">お名前<span class="deficit">(必須)</span></p>
                <input type="text" name="name" class="registInput">

                <p class="registText">カード番号<span class="deficit">(必須)</span></p>
                <input type="number" name="creditNumber" class="registInput">

                <p class="registText">カード会社<span class="deficit">(必須)</span></p>
                <div class="creditRadio">
                    <label class="cRadio"><input type="radio" name="creditCompany" value="JCB" checked="checked">JCB</label>
                    <label class="cRadio"><input type="radio" name="creditCompany" value="VISA">VISA</label>
                    <label class="cRadio"><input type="radio" name="creditCompany" value="Mastercard">Mastercard</label>
                </div>

                <p class="registText">有効期間<span class="deficit">(必須)</span></p>
                <div class="vpBlock">
                    <label><input type="number" name="vpMonth" class="vpInput vpMonth">月</label>
                    <label><input type="number" name="vpYear" class="vpInput vpYear">年</label>
                </div>
                <p class="registText">セキュリティコード<span class="deficit">(必須)</span></p>
                <input type="number" name="securityCode" class="registInput">


                <p class="registEnter"><a href="#">入力確認する。</a></p>
            </div>
        </section>
    </main>
    <!-- フッターPHPを参照する。 -->
<?php require 'includes/footer.php'; ?>