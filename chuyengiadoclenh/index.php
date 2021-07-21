<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>bảo thổi nến</title>
</head>
<body>
    <div class="container">
        <!-- nhap so von hien co, nhap  ma chung khoan muon mua, chi so eps(chi so thu nhap tren moi co phieu) : tinh so co phieu mua duoc, tinhs chi so P/E  tu P/E suy ra ket luaan neen mua hay khong  -->
        <div class="main">
          <form action="#" method="post">
            <label>Tổng Số Vốn Đầu Tư </label>
            <input type="text" name="moneyinvesment">
            <label>Tên Cổ Phiếu muốn mua vào</label>
            <input type="text" name="namestock">
            <button>Tinh Toan</button>
          </form>
          <div class="result">
              <?php
                 $stocks = array (
                     // man chung khoan, ten cty , gia san , chhi so eps
                     array("BCC","tổng công ty xi măng bỉm sơn ",11,4),
                     array("TCC","ngân hàng ngoại  thương techcombank ",49,14),
                     array("MBB","ngân hàng quan doi(military bank) ",36,8),
                     array("ABC","ngân hàng ACOMBANK ",26,5),
                     array("VCB","ngân hàng so vietcombank",112,8),
                     array("VNM","tổng công ty sua vinamilk ",89,20),
                     array("AAA","tong cong ty nhua an phat xanh ",10.3,3),
                     array("AAM","tổng công ty thuy san mekong ",11,4)
                 );

                 $totalmoney = $_POST["moneyinvesment"];
                 $namestock = $_POST["namestock"];
                 $result="";
                 for($i=0;$i<count($stocks);$i++) {
                     if ($namestock == $stocks[$i][0]) {
                        
                         $result1="";
                         $PE = $stocks[$i][2]/$stocks[$i][3];
                         $result1 = $namestock."  : ".$stocks[$i][1]."<br> gia co phieu : ".$stock[$i][2]."<br> chi so EPS : ".$stocks[$i][3]
                         ."<br> tong so co phieu mua vao duoc : ".$totalmoney/$stocks[$i][2]."<br> chi so P/E ".$PE;
                         if($PE > 5) {
                             $result = $result1." nen mua het ".$totalmoney/$stocks[$i][2]." co phieu ";
                         } else {
                             $result = $result1." chi so $PE thap chi nen mua vao mot nua";
                         }
                     } 
                 }
                 echo $result;
              ?>
          </div>
        </div>
    </div>
</body>
</html>