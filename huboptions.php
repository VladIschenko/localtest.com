<?php include 'config/localization.php';
echo $_SESSION['language'];
?>
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
    <div class="auth-container">
        <div class="hub-options">
            <h2><?php echo $langArr['hub options']?></h2>
            <form name="auth" method="POST" action="">
                <p><label for="sta ssid"><?php echo $langArr['sta ssid']?></label><input type="text" name="sta ssid" id="sta ssid"></p>
                <p><label for="sta password"><?php echo $langArr['sta password']?></label><input type="password" name="sta password" id="sta password"></p>
                <p><label for="net mask"><?php echo $langArr['net mask']?></label><input type="text" name="net mask" id="net mask"></p>
                <p><input class="default-button" type="submit" name="submit" value="<?php echo $langArr['default']?>"></p>
                <p><input class="save-button" type="submit" name="submit" value="<?php echo $langArr['save']?>"></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>