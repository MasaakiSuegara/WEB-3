<!-- ヘッダーPHPを参照する。 -->
<?php require 'includes/header.php'; ?>
    <!-- トップページ部分 -->
    <main>
        <section class="linkBlock">
            <p class="pankuzu">TOP > 商品一覧</p>
            <p class="pankuzu">ようこそ、ゲスト様</p>
        </section>
<?php 
// ログイン完了後のメッセージ
// 1月29日はここのログイン情報の作成から始める。
echo    '<section class="inputBlock">';
echo        '<p class="titleHead">ログイン完了</p>';
echo        '<div class="loginBlock compBlock">';
echo            '<p class="loginText compTxt">ログインが完了しました。</p>';
echo            '<p class="loginText compTxt">引き続きお楽しみください。</p>';
echo        '</div>';
echo        '<p class="pageLink"><a href="purchaseCheck.php">購入確認ページへすすむ</a></p>';
echo        '<p class="pageLink"><a href="index.php">TOPページへもどる</a></p>';
echo    '</section>';
?>


    </main>
    <!-- フッターPHPを参照する。 -->
<?php require 'includes/footer.php'; ?>