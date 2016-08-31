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
    <div id="content">
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
        <div class="options">
            <h2><?php echo $langArr['authorization']?></h2>
            <form name="auth" method="POST" action="">
                <table class="table">
                    <tr>
                        <th>dat_№</th>
                        <th>device_id</th>
                        <th>status</th>
                        <th>value</th>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <th>dat_№</th>
                        <th>device_id</th>
                        <th>status</th>
                        <th>value</th>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <th>dat_№</th>
                        <th>device_id</th>
                        <th>status</th>
                        <th>value</th>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <th>dat_№</th>
                        <th>device_id</th>
                        <th>status</th>
                        <th>value</th>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <th>dat_№</th>
                        <th>device_id</th>
                        <th>status</th>
                        <th>value</th>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>dat_</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <p><input class="save-button" type="submit" name="submit" value="<?php echo $langArr['save']?>"></p>
            </form>
        </div>
    </div>
        <div class="clear_float"></div>
</div>
</div>
<div style="clear:both;"></div>
</body>
</html>