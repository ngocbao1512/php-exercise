<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>phuong trinh bac 2</title>
</head>
<body>
    <div class="container">
       <form action="#" method="post">
           <p>giải phương trình bậc 2</p>
          <div class="pt"><span id="a">a</span>x^2 + <span id="b">b</span>x + <span id="c">c</span> = 0;</div>
           <label>press a</label>
           <input type="text" name="a" id="avalue" onkeyup="getvaluea()">
           <label>press b</label>
           <input type="text" name="b" id="bvalue" onkeyup="getvalueb()">
           <label>press c</label>
           <input type="text" name="c" id="cvalue" onkeyup="getvaluec()">
           <button>submit</button>

       <?php
       // xu ly form 
       function phuongtrinhbac2() {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
           $result = "";
           $x1 = $x2 = 0;
           if ($a == 0) {
               $x1 = $x2 = -$c/$b;
               $result = " phuong trinh co nghiem kep ".$x1;
           } else {
               // case $a # 0 tinhs delta 
               $delta = $b*$b - 4*$a*$c;
               if ($delta < 0) {
                   $result = " khong co nghiem ";
               } else if ($delta = 0) {
                   $x1 = $x2 = -$b/2*$a;
                   $result = "phuong trinh co nghiem kep ".$x1;
               } else {
                   $x1 = (-$b+sqrt($delta))/2*$a;
                   $x2 = (-$b-sqrt($delta))/2*$a; 
                   $result = "nghiem thu 1 la ".$x1." nghiem thu 2 la ".$x2;
               }
           }

           return $result;
       }

       echo phuongtrinhbac2();

       ?>
       </form>

    </div>

    <script>
        function getvaluea() {
            var x = document.getElementById("avalue").value;
            document.getElementById("a").innerHTML = x;   
        }
        function getvalueb() {
            var x = document.getElementById("bvalue").value;
            document.getElementById("b").innerHTML = x;   
        }
        function getvaluec() {
            var x = document.getElementById("cvalue").value;
            document.getElementById("c").innerHTML = x;   
        }
    </script>   
</body>
</html>