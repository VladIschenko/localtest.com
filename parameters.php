<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Parameters</title>
    <link href="style.css" rel="stylesheet">
    <script>
        function scan(){
            var fileref = document.createElement("script");
            fileref.type = "text/javascript";
            fileref.src = "script.js";
            document.getElementsByTagName("head")[0].appendChild(fileref);

            fileref.onload = function () {
                var container = document.getElementById("new-Thermometer");
                var content = container.innerHTML;
                container.innerHTML = data[11];
            }
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
    <div class="content">
        <p><h2>Actions</h2></p>
    <div class="addpanel">
        <h4>Add Thermometer</h4>
        <table class="table norightbottomborder params">
        <thead>
        <tr>
            <th class="add"></th>
            <th class="add">New_Thermometer</th>
            <th class="add">Position</th>
            <th class="add"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="javascript: scan()" class="add-button" name="scan">Scan</a></td>
            <td><div class="inf" id="new-Thermometer"></div></td>
            <td><input class="zero-cor" step="1" type="number" name="position" id="position" min="0" max="35"></td>
            <td><input class="add-button" type="submit" value="Add" name="add"></td>
        </tr>
        </tbody>
    </table>
    </div>
    <div class="deletepanel">
        <h4>Delete Thermometer</h4>
        <table class="table norightbottomborder params">
            <thead>
            <tr>
                <th class="delete">Position</th>
                <th class="delete"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input class="zero-cor" step="1" type="number" name="position" id="position" min="0" max="35"></td>
                <td><a href="javascript: scan()" class="add-button" name="delete">Delete</a></td>
            </tr>
            </tbody>
        </table>
    </div>
    </div>
    <form name="parameters" method="POST" action="">
        <div class="content">
            <p><h2>Parameters</h2></p>
        <div class="left">
            <table class="table norightbottomborder">
                <tr>
                    <th>#</th>
                    <th>Status</th>
                    <th>Zero_correction</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><div class="inf" id="device-id11"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points1" id="points1"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><div class="inf" id="device-id12"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points2" id="points2"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><div class="inf" id="device-id13"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points3" id="points3"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><div class="inf" id="device-id14"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points4" id="points4"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><div class="inf" id="device-id15"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points5" id="points5"  min="-4.0" max="4.0"></td>
                </tr>
            </table>
        </div>
        <div class="left2">
            <table class="table norightbottomborder">
                <tr>
                    <th>#</th>
                    <th>Status</th>
                    <th>Zero_correction</th>
                </tr>
                <tr>
                    <td>6</td>
                    <td><div class="inf" id="device-id21"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points6" id="points6"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><div class="inf" id="device-id22"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points7" id="points7"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><div class="inf" id="device-id23"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points8" id="points8"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><div class="inf" id="device-id24"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points8" id="points9"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><div class="inf" id="device-id25"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points10" id="points10"  min="-4.0" max="4.0"></td>
                </tr>
            </table>
        </div>

        <div class="left">
            <table class="table norightbottomborder">
                <tr>
                    <th>#</th>
                    <th>Status</th>
                    <th>Zero_correction</th>
                </tr>
                <tr>
                    <td>11</td>
                    <td><div class="inf" id="device-id31"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points11" id="points11"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td><div class="inf" id="device-id32"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points12" id="points12"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td><div class="inf" id="device-id33"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points13" id="points13"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td><div class="inf" id="device-id34"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points14" id="points14"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td><div class="inf" id="device-id35"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points15" id="points15"  min="-4.0" max="4.0"></td>
                </tr>
            </table>
        </div>
        <div class="left2">
            <table class="table norightbottomborder">
                <tr>
                    <th>#</th>
                    <th>Status</th>
                    <th>Zero_correction</th>
                </tr>
                <tr>
                    <td>16</td>
                    <td><div class="inf" id="device-id41"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points16" id="points16"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td><div class="inf" id="device-id42"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points17" id="points17"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td><div class="inf" id="device-id43"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points18" id="points18"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td><div class="inf" id="device-id44"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points19" id="points19"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td><div class="inf" id="device-id45"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points20" id="points20"  min="-4.0" max="4.0"></td>
                </tr>
            </table>
        </div>

        <div class="left">
            <table class="table norightbottomborder">
                <tr>
                    <th>#</th>
                    <th>Status</th>
                    <th>Zero_correction</th>
                </tr>
                <tr>
                    <td>21</td>
                    <td><div class="inf" id="device-id51"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points21" id="points21"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>22</td>
                    <td><div class="inf" id="device-id52"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points22" id="points22"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>23</td>
                    <td><div class="inf" id="device-id53"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points23" id="points23"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>24</td>
                    <td><div class="inf" id="device-id54"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points24" id="points24"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>25</td>
                    <td><div class="inf" id="device-id55"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points25" id="points25"  min="-4.0" max="4.0"></td>
                </tr>
            </table>
        </div>
        <div class="left2">
            <table class="table norightbottomborder">
                <tr>
                    <th>#</th>
                    <th>Status</th>
                    <th>Zero_correction</th>
                </tr>
                <tr>
                    <td>26</td>
                    <td><div class="inf" id="device-id61"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points26" id="points"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>27</td>
                    <td><div class="inf" id="device-id62"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points" id="points62"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>28</td>
                    <td><div class="inf" id="device-id63"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points" id="points63"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>29</td>
                    <td><div class="inf" id="device-id64"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points" id="points64"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>30</td>
                    <td><div class="inf" id="device-id65"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points65" id="points65" min="-4.0" max="4.0"></td>
                </tr>
            </table>
        </div>

        <div class="center2">
            <table class="table norightbottomborder">
                <tr>
                    <th>#</th>
                    <th>Status</th>
                    <th>Zero_correction</th>
                </tr>
                <tr>
                    <td>31</td>
                    <td><div class="inf" id="device-id71"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points61" id="points71"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>32</td>
                    <td><div class="inf" id="device-id72"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points62" id="points72"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>33</td>
                    <td><div class="inf" id="device-id73"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points63" id="points73"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>34</td>
                    <td><div class="inf" id="device-id74"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points64" id="points74"  min="-4.0" max="4.0"></td>
                </tr>
                <tr>
                    <td>35</td>
                    <td><div class="inf" id="device-id75"></div></td>
                    <td><input class="zero-cor" step="0.1" type="number" name="points65" id="points75" min="-4.0" max="4.0"></td>
                </tr>
            </table>
            <p><input class="save-button" type="submit" name="submit" value="Save"></p>
        </div>
    </div>
    </form>
</body>
</html>
<script type="text/javascript" src="script.js"></script>