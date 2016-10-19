<!doctype html>
<html>
<head>
    <title>Learning Javascript</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html"; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        #box {
            width: 200px;
            height: 200px;
            background-color: red;
        }

    </style>
</head>
<body>
    <div id="box"></div>
    <script type="text/javascript">
        document.getElementById("box").onclick = function() {
            this.style.display = "none";
        }
        setTimeout(function() {
            alert("Your time has run out");
            document.getElementById("box").style.display = "block";
        }3000);

    </script>
</body>
</html>