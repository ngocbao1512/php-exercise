<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>in tam giac</title>
</head>
<body>
    <div class="container">
        <div class="p1">
            <p>tam giac vuong</p>
            <!-- 
                *
                **
                ***
                ****
             -->
             <?php
             $k=0;
             for ($i=0;$i<10;$i++) {  
                 for ($j=1;$j<$k;$j++) {
                     echo "*";
                 }
                 echo "<br>";
                 $k=$k+1;
             }
             ?>
        </div>

        <div class="p1">
            <p>tam giac can</p>
            <!-- 
                 *          1 3 5 7 : buowcs nhayr 2 them phai 1 them trai 1  
                ***         6 4 2 0 space 
               *****
              *******
             -->
             <?php
             $k = 0;
             $space = 10;

             for ($i=0;$i<10;$i++) {  
                for($z=0;$z<$space;$z++) {
                    echo "&nbsp&nbsp";
                }
                 for ($j=1;$j<$k;$j++) {
                     echo "*";
                 }
                 echo "<br>";
                 $k=$k+2;
                 $space--;
             }
             ?>
        </div>

        <div class="p1">
            <p>tam giac can nguoc</p>
            <!-- 
                      *******      1 3 5 7 : buowcs nhayr 2 them phai 1 them trai 1  
                       *****    6 4 2 0 space 
                        ***
                         *
             -->
             <?php
             $k = 10;
             $space = 0;

             for ($i=10;$i>0;$i--) {  
                for($z=0;$z<$space;$z++) {
                    echo "&nbsp&nbsp";
                }
                 for ($j=$k;$j>1;$j--) {
                     echo "*";
                 }
                 echo "<br>";
                 $k=$k-2;
                 $space++;
             }
             ?>
        </div>
    </div>
</body>
</html>