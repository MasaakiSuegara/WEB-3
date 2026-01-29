<!-- ヘッダーPHPを参照する。 -->
<?php require 'includes/header.php'; ?>
    <!-- トップページ部分 -->
    <main>
        <section class="linkBlock">
            <p class="pankuzu">ようこそ、ゲスト様</p>
            <p class="pankuzu">TOP > 商品一覧</p>
        </section>
        <section class="cartBlock">
            <div class="cartSubtotal">
                <p class="cLetter cCenter">現在  商品<span>2点</span></p>
                <p class="cLetter cCenter">ご注文小計:税込<span class="priceSubtotal">￥5000</span></p>
                <p class="cBuyLetter">購入確認へ進む</p>
            </div>
            <div class="cItem1">
                <img class="cItemImg" src="images/pcCcDonut.png" alt="1個目CCドーナツ">
                <div class="pcCart">
                    <p class="cItemName cCenter">CCドーナツ 当店オリジナル（5個入り）</p>
                    <p class="price cPrice cCenter">税込  ￥1,500</p>
                    <div class="cBuyItem cCenter">
                        <p class="cItemNumber ">数量</p>
                        <input type="text" class="buyNumber" name="buyNumber">
                        <p class="cko">個</p>
                    </div>
                    <p class="cCartIn cCenter">再計算</p>
                    <p class="cCartOut cCenter">削除</p>
                </div>
            </div>
            <div class="cItem1">
                <img class="cItemImg" src="images/pcFruitDonut12.png" alt="2個目フルーツドーナツ12個入">
                <div class="pcCart">
                    <p class="cItemName cCenter">フルーツドーナツセット（12個入り）</p>
                    <p class="price cPrice cCenter">税込  ￥3,500</p>
                    <div class="cBuyItem cCenter">
                        <p class="cItemNumber">数量</p>
                        <input type="text" class="buyNumber" name="buyNumber">
                        <p class="cko">個</p>
                    </div>
                    <p class="cCartIn cCenter">再計算</p>
                    <p class="cCartOut cCenter">削除</p>
                </div>
            </div>

            <div class="cartSubtotal">
                <p class="cLetter cCenter">現在  商品<span>2点</span></p>
                <p class="cLetter cCenter">ご注文小計:税込<span class="priceSubtotal">￥5000</span></p>
                <p class="cBuyLetter ">購入確認へ進む</p>
            </div>
            <p class="continueBuy">買い物を続ける</p>
    </main>
    <!-- フッターPHPを参照する。 -->
<?php require 'includes/footer.php'; ?>