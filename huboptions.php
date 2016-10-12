<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HUB options</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <header>
        <a href="start.php">Start</a>
        <a href="connoptions.php">Connection options</a>
        <a href="huboptions.php">HUB options</a>
        <a href="parameters.php">Parameters</a>
    </header>
    <div class="form-container">
        <div class="options">
            <h2>HUB options</h2>
            <form name="auth" method="POST" action="">
                <p><label for="sta ssid">STA SSID</label><input class="default" type="text" name="sta-ssid" id="sta-ssid" maxlength="40"></p>
                <span title="Valid only english letters and numbers"><p><label for="sta password">STA Password</label><input class="default" type="password" name="sta password" id="sta-password" minlength="8" maxlength="20" pattern="^[a-zA-Z0-9.]+$"></p></span>
                <span title="Valid only english letters and numbers"><p><label for="repeat-sta-password">Repeat STA Password</label><input class="default" type="password" name="repeat-sta-password" id="repeat-sta-password" maxlength="20" pattern="^[a-zA-Z0-9.]+$"></p></span>
                <p><input class="default-button" type="submit" name="submit" value="Default"></p>
                <p><input class="save-button" type="submit" name="submit" value="Save"></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="script.js"></script>
