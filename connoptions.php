<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Connection options</title>
    <link href="style.css" rel="stylesheet">
    <script>
        function convert() {
            var staticIpcheckbox;
            var staticIp;
            staticIpcheckbox = document.getElementById("static-ip-checkbox");
            staticIp = document.getElementById("static-ip");
            if (staticIpcheckbox.checked == true) {
                staticIp.value = 1;
            } else {
                if (staticIpcheckbox.checked == false) {
                    staticIp.value = 0;
                }
            }
            document.getElementById("form").submit();
        }
    </script>
</head>
<body>
<div id="wrapper">
    <header>
        <a href="start.php">Start</a>
        <a href="connoptions.php">Connection options</a>
        <a href="huboptions.php">HUB options</a>
        <a href="parameters.php">Parameters</a>
    </header>
    <div class="auth-container">
        <div class="options">
            <h2>Connection options</h2>
            <form name="form" id="form" method="POST" action="">
                <p><label for="ap ssid">AP SSID</label><input class="default" type="text" name="ap ssid" id="ap-ssid" maxlength="32"></p>
                <span title="Valid only  english letters and numbers"><p><label for="ap password">AP Password</label><input class="default" type="password" name="ap password" id="ap-password" maxlength="20" pattern="^[a-zA-Z0-9.]+$"></p></span>
                <input name="static-ip" id="static-ip" type="hidden">
                <input type="checkbox" name="static-ip-checkbox" id="static-ip-checkbox"><label>Static IP</label>
                <p>IP</p>
                <table class="conn-table">
                    <tr>
                        <td class="connect">
                            <input class="conn default" step="1" type="number" name="ip-part1" id="ip-part1" min="0" max="255">
                            <input class="conn default" step="1" type="number" name="ip-part2" id="ip-part2" min="0" max="255">
                            <input class="conn default" step="1" type="number" name="ip-part3" id="ip-part3" min="0" max="255">
                            <input class="conn default" step="1" type="number" name="ip-part4" id="ip-part4" min="0" max="255">
                        </td>
                    </tr>
                </table>
                <p>Netmask</p>
                <table class="conn-table">
                    <tr>
                        <td class="connect">
                            <input class="conn default" step="1" type="number" name="mask-part1" id="mask-part1" min="0" max="255">
                            <input class="conn default" step="1" type="number" name="mask-part2" id="mask-part2" min="0" max="255">
                            <input class="conn default" step="1" type="number" name="mask-part3" id="mask-part3" min="0" max="255">
                            <input class="conn default" step="1" type="number" name="mask-part4" id="mask-part4" min="0" max="255">
                        </td>
                    </tr>
                </table>
                <span title="Valid only  english letters and numbers"><p><label for="server">server</label><input class="default" type="text" name="server" id="server" maxlength="20" pattern="^[a-zA-Z0-9.]+$"></p></span>
                <p><input class="save-button" type="button" value="Save" onclick="convert()"></p>            </form>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="script.js"></script>