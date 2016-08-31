<?php include 'config/localization.php'?>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="styles/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <header>
        <a href="connoptions.php"><?php echo $langArr['connection options']?></a>
        <a href="huboptions.php"><?php echo $langArr['hub options']?></a>
        <a href="parameters.php"><?php echo $langArr['parameters']?></a>
        <form method="POST" action="">
            <input class="lang-button" type="submit" name="en" value="EN" />
            <input class="lang-button" type="submit" name="ru" value="RU" />
        </form>
<!--        <button class="lang-button" name="ru" type="submit">RU</button>-->
<!--        <button class="lang-button" name="en" type="submit">EN</button>-->

    </header>
    <div class="form-container">
        <div class="auth">
            <h2><?php echo $langArr['authorization']?></h2>
            <form name="auth" method="POST" action="">
                <p><label for="login"><?php echo $langArr['login']?></label><input type="text" name="login" id="login"></p>
                <p><label for="password"><?php echo $langArr['password']?></label><input type="password" name="password" id="password"></p>
                <p><input class="save-button" type="submit" name="submit" value="<?php echo $langArr['enter']?>"></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>

