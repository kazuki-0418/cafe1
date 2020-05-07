<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
<title>サイト</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

	<header>
		<div class="reserve">
<span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
		<a href="reservation.php">ご予約の方はこちら
		</a>
		</div>

	    <ul class="table-ul">
	      <li><a href="menu.php">メニュー</a></li>
				<li><a href="photo.php">写真</a></li>
				<li><a href="#">最新情報</a></li>
	      <li><a href="#map">アクセス</a></li>
				<li><a href="#Contact">お問い合わせ</a></li>
	    </ul>
	</header>
	</body>
	<access id="map">
<div class="map">
<h1 class="content-heading">
	アクセス
</h1>

<ul>
<li>〒540-0002 大阪府大阪市中央区大阪城１−１</li>
<li>06-6941-3044</li>
<li>無定休</li>
<br>

<li>営業時間</li>
<li>10:00～19:00</li>
</ul>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d105003.35086105084!2d135.4316305!3d34.670996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e0cd5c283afd%3A0xf01d07d5ca11e41!2z5aSn6Ziq5Z-O!5e0!3m2!1sja!2sjp!4v1588115138734!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</access>
<form id="Contact">
	<h1 class="content-heading">
お問い合わせ
</h1>
<div class="item">

<label class="label">お名前</label><br>
<input class="inputs" type="text" name="yourname">
</div>

<div class="item">
	<label class="label">性別</label>
<input id="male" type="radio" name="sex" value="male"><label for="male">男性</label>
<input id="female" type="radio" name="sex" value="female"><label for="female">女性</label>
</div>

<div class="item">
	<label class="label">メールアドレス</label><br>
	<input class="inputs" type="email" name="mail">
</div>

<div class="item">
	<label class="label">内容</label>
	<br>
<textarea id="comment" name="comment" placeholder="ここには自由にコメントを記入してください"></textarea>
</div>

<input type="submit" value="送信する" class="btn" style="cursor:pointer">
</form>



</html>

<?php

?>
