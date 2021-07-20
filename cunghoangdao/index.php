<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cung Hoang Dao</title>
</head>
<body>
    
    <div class="container">
        <p>Bạn Thuộc Chòm Sào Nào </p>
        <form action="#" method="post">
            <label>Ngay Sinh</label>
            <input type="text" name="ngaysinh">
            <label>Thang Sinh</label>
            <input type="text" name="thangsinh">
            <button>xem ket qua</button>
        </form>
        <?php
        // result
        $cunghoangdao = array("bachduong"=>"https://gomsuhcm.com/wp-content/uploads/2020/08/bach_duong1_kwbf.jpg",
         "kimnguu"=>"https://lh3.googleusercontent.com/proxy/zWTl5SXtzbDaANGaliycudPSZxIo6bcf16f0XwdHykKhDtQpZgsFoUk2NaobrWI17V_7izjKZslU9jnQIv3FhSMGd12HRX1I912xL2Sz",
          "SongTu"=>"https://pic.tuvingaynay.com/cungsongtu.jpg",
          "cugiai"=>"https://top10tphcm.com/wp-content/uploads/2018/12/cung-hoang-dao-cu-giai-696x546.jpg",
          "SuTu"=>"https://thietbigiadinh.org/wp-content/uploads/2020/10/cung-su-tu.jpg",
          "SuNu"=>" https://namkylan.com/wp-content/uploads/2021/04/Gioi-thieu-chung-ve-cung-Xu-Nu.jpg",
          "ThienBinh"=>"data:image/jpeg;base64,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",
          "HoCap"=>"https://thietbigiadinh.org/wp-content/uploads/2020/10/cung-bo-cap.jpg",
          "NhanMa"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVuZjLnGtrRiWtBh-w0cHhvthz0vgQbF5X9HwDI2UpOf_sG3B3BdZUGVPxfaDr0FnH_mg&usqp=CAU",
          "MaKet"=>"https://tuoitrechinhphuc.com/wp-content/uploads/2020/12/ma-ket-cung-hoang-dao-day-tham-vong-va-quy-tac-4-696x491-1.jpg",
          "BaoBinh"=>"https://elight.edu.vn/wp-content/uploads/2019/11/Tu%CC%9B%CC%80-vu%CC%9B%CC%A3ng-tie%CC%82%CC%81ng-Anh-cung-Ba%CC%89o-Bi%CC%80nh-1200x900.jpg",
          "SongNgu"=>"https://caycanhonline.vn/wp-content/uploads/2019/08/song-ngu.jpg"
        
        );
        $ngaysinh = $_POST["ngaysinh"];
        $thangsinh = $_POST["thangsinh"];
        switch ($thangsinh) {
            case 1 : {
                if ($ngaysinh>19) {
                    // bao binh 
                    echo "<img src='$cunghoangdao[BaoBinh]'>"." Bao Binh(20/1-18/2)";
                    
                } else {
                    // ma ket 
                    echo "<img src='$cunghoangdao[MaKet]'>"." Ma Ket(22/12-19/1)";
                }

                break;
            }
            case 2 : {
                if ($ngaysinh>19) {
                    // song ngu
                    echo "<img src='$cunghoangdao[SongNgu]'>"." Song Ngu(20/2-20/3)";
                    
                } else {
                    // Bao  binh
                    echo "<img src='$cunghoangdao[BaoBinh]'>"." Bao Binh(20/1-18/2)";
                }

                break;
            }
            case 3 : {
                if ($ngaysinh>20) {
                    // bach duong 
                    echo "<img src='$cunghoangdao[BachDuong]'>"." Bach Duong(21/3-20/4)";
                    
                } else {
                    // song ngu
                    echo "<img src='$cunghoangdao[SongNgu]'>"." Song Ngu(20/2-20/3)";
                }

                break;
            }
            case 4 : {
                if ($ngaysinh>20) {
                    // kim nguu
                    echo "<img src='$cunghoangdao[KimNguu]'>"." Kim Nguu(21/4-21/5)";
                    
                } else {
                    // Bach Duong
                    echo "<img src='$cunghoangdao[BachDuong]'>"." Bach Duong(21/3-20/4)";
                }

                break;
            }
            case 5 : {
                if ($ngaysinh>21) {
                    // song tu 
                    echo "<img src='$cunghoangdao[SongTu]'>"." Song Tu(20/1-18/2)";
                    
                } else {
                    // kim nguu
                    echo "<img src='$cunghoangdao[KimNguu]'>"." Kim Nguu(20/1-18/2)";
                }

                break;
            }
            case 6 : {
                if ($ngaysinh>21) {
                    // bao binh 
                    echo "<img src='$cunghoangdao[CuGiai]'>"." Cu Giai(20/1-18/2)";
                    
                } else {
                    // ma ket 
                    echo "<img src='$cunghoangdao[SongTu]'>"." Song Tu(20/1-18/2)";
                }

                break;
            }
            case 7 : {
                if ($ngaysinh>22) {
                    // bao binh 
                    echo "<img src='$cunghoangdao[SuTu]'>"." Su Tu(20/1-18/2)";
                    
                } else {
                    // ma ket 
                    echo "<img src='$cunghoangdao[CuGiai]'>"."  Cu Giai(20/1-18/2)";
                }

                break;
            }
            case 8 : {
                if ($ngaysinh>22) {
                    // bao binh 
                    echo "<img src='$cunghoangdao[XuNu]'>"." Xu Nu(20/1-18/2)";
                    
                } else {
                    // ma ket 
                    echo "<img src='$cunghoangdao[SuTu]'>"." Su Tu(20/1-18/2)";
                }

                break;
            }
            case 9 : {
                if ($ngaysinh>23) {
                    // bao binh 
                    echo "<img src='$cunghoangdao[ThienBinh]'>"." ThienBinh(20/1-18/2)";
                    
                } else {
                    // ma ket 
                    echo "<img src='$cunghoangdao[XuNu]'>"." XuNu(20/1-18/2)";
                }

                break;
            }
            case 10 : {
                if ($ngaysinh>23) {
                    // bao binh 
                    echo "<img src='$cunghoangdao[ThanNong]'>"." Than Nong(20/1-18/2)";
                    
                } else {
                    // ma ket 
                    echo "<img src='$cunghoangdao[ThienBinh]'>"." Thien Binh(20/1-18/2)";
                }

                break;
            }
            case 11 : {
                if ($ngaysinh>22) {
                    // bao binh 
                    echo "<img src='$cunghoangdao[NhanMa]'>"." Nhan Ma(20/1-18/2)";
                    
                } else {
                    // ma ket 
                    echo "<img src='$cunghoangdao[ThanNong]'>"." ThanNong(20/1-18/2)";
                }

                break;
            }
            case 12 : {
                if ($ngaysinh>21) {
                    // bao binh 
                    echo "<img src='$cunghoangdao[MaKet]'>"." Ma Ket(20/1-18/2)";
                    
                } else {
                    // ma ket 
                    echo "<img src='$cunghoangdao[NhanMa]'>"." Nhan Ma(20/1-18/2)";
                }

                break;
            }
        }
        ?>
    </div>
</body>
</html>