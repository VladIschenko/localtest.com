<html>
<head>
    <meta charset="utf-8">
    <title>Authorization</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
    <div class="form-container">
        <div class="center">
            <h2>Authorization</h2>
            <form name="auth" method="POST" action="">
                <span title="Valid only english letters and numbers"><p><p>Login</p><input class="default" type="text" name="login" id="login" maxlength="20" pattern="^[a-zA-Z0-9.]+$"></p></span>
                    <span title="Valid only english letters and numbers"><p><p>Password</p><input class="default" type="password" name="password" id="password" maxlength="20" pattern="^[a-zA-Z0-9.]+$"></p></span>
                <p><input class="save-button" type="submit" name="submit" value="Enter"></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="script.js"></script>
