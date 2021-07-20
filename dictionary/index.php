<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dictionary</title>
</head>
<body>
    <div class="container">
    <div class="left">
        <form action="#" method="post">
            <input type="text" name="input">
            <button>translate</button>
        </form>
    </div>
    <div class="right">

    
    <?php
    // data
    $words = array("helo"=>"xin chao",
     "able"=>"co nang luc,co tai",
      "about"=>"khoang,ve",
      "act"=>"hanh dong",
      "add"=>"them",
      "i"=>"toi",
      "afraid"=>"so",
      "after"=>"sau",
      "again"=>"lai,nua,lan nua",
      "against"=>"chong lai, phan doi",
      "among"=>"giua",
      "confident"=>"tu tin",
      "and"=>"va",
    
    );

    $word_input = $_POST["input"];
    echo $words[$word_input];
    ?>
    </div>
    </div>
</body>
</html> 