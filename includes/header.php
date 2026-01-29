<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common/reset.css">
    <!-- ブートストラップのＣＤＮ。reboot.css含む。使わないなら最後削除 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="styles/style.css">
    <!-- 以下３行分がgooglefontのリンク -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <title>トップページ(ページごとに変える)</title>
</head>
<body>
    <!-- ヘッダーは作成後分解-->
    <header class="headerBlock">
        <div class="headerRow">
            <nav class="gMenu">
                <input class="menu-btn" type="checkbox" id="menu-btn">
                <label class="menu-icon" for="menu-btn">
                    <span class="navicon"></span>
                </label>
                <ul class="menu">
                    <li><a href="#">TOP</a></li>
                    <li><a href="#">商品一覧</a></li>
                    <li><a href="#">よくある質問</a></li>
                    <li><a href="#">お問い合わせ</a></li>
                    <li><a href="#">当サイトのポリシー</a></li>
                </ul>
            </nav>
            <img class="hLogo" src="images/spLogo.svg" alt="ロゴ">
            <img class="hLogin" src="images/spLogin.svg" alt="ログインアイコン">
            <img class="hCart" src="images/spCart.svg" alt="カートアイコン">
        </div>
        <div class="searchBlock">
            <button type="submit" class="searchBtn">
                <img src="images/spSeachIcon.svg" alt="検索">
            </button>
            <input class="searchBox" type="text" name="search" placeholder="キーワードを入力">
        </div>
    </header>



