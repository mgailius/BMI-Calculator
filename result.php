<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BMI</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
    <script defer src="script.js"></script>
</head>

<body>
    <div class="backboard">
        <div class="kmi">
            <h1>BMI</h1>
        </div>
        <div class="result">
            <h2 class="h2">
                <?php
                $ugis = $_GET['ugis'] / 100;
                $svoris = $_GET['svoris'];
                $kmi = $svoris / ($ugis * $ugis);
                echo number_format($kmi, 2, '.', '');
                ?>
            </h2>
            <div class="info">
                <div class="indicator"></div>
                <div class="aboutKmi"></div>
            </div>

            <div class="healthyWeight">
                <?php
                $weightStart = number_format($ugis * $ugis * 18.5, 0, '', '');
                $weightEnd = number_format($ugis * $ugis * 25, 0, '', '');
                echo "Optimal weight: $weightStart - $weightEnd kg";
                ?>
            </div>
            <div class="again"><a href="index.php"></a></div>
        </div>
    </div>
</body>

</html>