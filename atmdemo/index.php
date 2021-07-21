<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>ATM demo</title>
</head>
<body>
    
    <div class="container">
      
      <div class="row align-items-start">
          
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAm3nofxSF-qp_-ubpgT_UWZPsAmjg1xsiz5p_dSUHMokUGZ-r042QBMl9ERLM_bHcz-k&usqp=CAU">
          </div>
          
          <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
              <p>ATM demo</p>
              <p>nhập vào số tiền quý khách muốn rút </p>
              <?php
                  if(isset($_POST["moneyinput"])) {
                      $money = $_POST["moneyinput"];
                      $flag = $money;
                  }
                  ?>
              <form action="#" method="post">
                  <input type="text" name="moneyinput" value="<?php echo number_format($money);?>">
                  <button>Rút tiền </button>
              </form>
          </div>
          
          
      </div>
      <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <p>Mệnh giá </p>
          </div>
          
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <p>Số Lượng </p>
          </div>
  
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
           <p>Thanh Tien</p>
          </div>
      </div>
      <?php
      // $money
      define("one",1000);
      define("two",2000);
      define("five",5000);
      define("one_0",10000);
      define("two_0",20000);
      define("five_0",50000);
      define("one_00",100000);
      define("two_00",200000);
      define("five_00",500000);

      // bien luu so luong to tien 
      $five00 = $two00 = $one00 = $five0 = $two0 = $one0 = $five = $two = $one = 0;

      if(is_numeric($money) && $money > one) {
        while($money >= five_00) {
              $five00++;
              $money =  $money - five_00;
        }
        while($money >= two_00) {
            $two00++;
            $money =  $money - two_00;
        }
        while($money >= one_00) {
            $one00++;
            $money =  $money - one_00;
        }
        while($money >= five_0) {
            $five0++;
            $money =  $money - five_0;
        }
        while($money >= two_0) {
            $two0++;
            $money =  $money - two_0;
        }
        while($money >= one_0) {
            $one0++;
            $money =  $money - one_0;
        }
        while($money >= five) {
            $five++;
            $money =  $money - five;
        }
        while($money >= two) {
            $two++;
            $money =  $money - two;
        }
        while($money >= one) {
            $one++;
            $money =  $money - one;
        }
      }
      ?>

      <?php
        if ($five00 > 0) {
            echo '      <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p>'.number_format(five_00).'</p>
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <p>'.$five00.'</p>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
             <p>'.number_format(five_00*$five00).'</p>
            </div>
        </div>';
        }

        if ($two00 > 0) {
            echo '      <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p>'.number_format(two_00).'</p>
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <p>'.$two00.'</p>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
             <p>'.number_format(two_00*$two00).'</p>
            </div>
        </div>';
        }

        if ($one00 > 0) {
            echo '      <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p>'.number_format(one_00).'</p>
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <p>'.$one00.'</p>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
             <p>'.number_format(one_00*$one00).'</p>
            </div>
        </div>';
        }

        if ($five0 > 0) {
            echo '      <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p>'.number_format(five_0).'</p>
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <p>'.$five0.'</p>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
             <p>'.number_format(five_00*$five0).'</p>
            </div>
        </div>';
        }

        if ($two0 > 0) {
            echo '      <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p>'.number_format(two_0).'</p>
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <p>'.$two0.'</p>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
             <p>'.number_format(two_0*$two0).'</p>
            </div>
        </div>';
        }

        if ($one0 > 0) {
            echo '      <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p>'.number_format(one_0).'</p>
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <p>'.$one0.'</p>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
             <p>'.number_format(one_0*$one0).'</p>
            </div>
        </div>';
        }

        if ($five > 0) {
            echo '      <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p>'.number_format(five).'</p>
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <p>'.$five.'</p>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
             <p>'.number_format(five*$five).'</p>
            </div>
        </div>';
        }

        if ($two > 0) {
            echo '      <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p>'.number_format(two).'</p>
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <p>'.$two.'</p>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
             <p>'.number_format(two*$two).'</p>
            </div>
        </div>';
        }

        if ($one > 0) {
            echo '      <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p>'.number_format(one).'</p>
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <p>'.$one.'</p>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
             <p>'.number_format(one*$one).'</p>
            </div>
        </div>';
        }

      ?>          
      <div class="row">
          
          <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
              
          </div>
          
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 align-self-end">
              Tong Tien : <?php  echo number_format($_POST["moneyinput"]); ?>
          </div>
          
      </div>
        
    </div>
    
</body>
</html>