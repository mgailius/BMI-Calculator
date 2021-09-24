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
</head>

<body>
    <div class="backboard">
        <div class="kmi">
            <h1>BMI</h1>
        </div>
        <div class="calculator">
            <form action="result.php" method="get">
                <label>
                    Height (cm)<br>
                    <input required autocomplete="off" name="ugis" type="number">
                </label>
                <label>
                    Weight (kg)<br>
                    <input required autocomplete="off" name="svoris" type="number">
                </label>
                <button type="submit">Calculate</button>
            </form>
        </div>
    </div>
</body>

</html>