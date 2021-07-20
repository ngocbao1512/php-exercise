<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>May Tinh Demo</title>
</head>
<body>
    <div class="container">
        <form action="#" method="post">
            <label">nhap a : </label>
            <input type="text" name="a">
            <label">phep tinh</label>
            <input type="text" name="calculate">
            <label">nhap b : </label>
            <input type="text" name="b">
            
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
        <div class="result">
            <?php
            $a = $_POST["a"];
            $b = $_POST["b"];
            $calcu = $_POST["calculate"];
            $result = 0;
            switch ($calcu) {
                case "+" : {
                    $result = $a + $b;
                    break;
                }
                case "-" : {
                    $result = $a - $b;
                    break;
                }
                case "*" : {
                    $result = $a * $b;
                    break;
                }
                case "/" : {
                    $result = $a / $b;
                    break;
                }
                case "%" : {
                    $result = $a % $b;
                    break;
                }
                default : {
                    $result = "input fail ";
                    break;
                }
            }

            echo $a." ".$calcu." ".$b." = ".$result;
            ?>
        </div>
    </div>
</body>
</html>