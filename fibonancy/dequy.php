<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fibonancy</title>
</head>
<body>
    ssssss
    <form action="#" method="post">
        <label>nhap so muon tim</label>
        <input type="text" name="input">
        <button>search</button>
        <p>Result</p>
        <?php
            $input = $_POST["input"];
            function fibonanci($input) {
                if($input == 1 || $input == 2) {
                    return 1;
                } else {
                    return fibonanci($input-1) + fibonanci($input-2);
                }
            }
 
            echo fibonanci($input);
        

        ?>
    </form>
</body>
</html>