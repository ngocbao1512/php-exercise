<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Display customer</title>
</head>
<body>
    <?php
    $customer = [
        // name sex yearofbirth hometown
        array(bao,nam,2001,nghean),
        array(nam,nam,2001,nghean),
        array(hung,nam,2001,ninhbinh),
        array(anh,nu,2004,nghean),
        array(hieu,nam,2001,thanhhoa),
        array(tinh,nam,2002,nghean),
        array(nga,nu,2001,nghean),
        array(hang,nu,2006,hanoi),
        array(son,nam,2001,nghean),
    ];
    echo "<table>";
    // open the table 
    echo "<tr>";
    echo "<td>name</td>";
    echo "<td>gender</td>";
    echo "<td>yearOfbirth</td>";
    echo "<td>homeTown</td>";
    echo "</tr>";
    // use loop to print out row customer on screen
    for($i=0;$i<count($customer);$i++) {
        echo "<tr>";
        echo "<td>".$customer[$i][0]."</td>";
        echo "<td>".$customer[$i][1]."</td>";
        echo "<td>".$customer[$i][2]."</td>";
        echo "<td>".$customer[$i][3]."</td>";
        echo "</tr>";
    } 

    // close the table
    echo "</table>";
    ?>
</body>
</html>