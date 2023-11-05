<?php

if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../controller/hinh/hangHoa/" . $hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='".$hinhpath."' height='80' width='150'>";
} else {
    $hinh = "no photo";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
    <!-- bs5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="card card-info">
        <h1 style="color:red">
          
        </h1>

        <div class="card-header">
            <h3 class="card-title">QUẢN LÝ HÀNG HÓA</h3>

        </div>
        <!-- /.card-header -->
        <!-- form start -->


































        <form action="index.php?page=updateProduct" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã hàng hóa</label>
                    <input type="text" class="form-control" name="ma_hh" id="exampleInputEmail1"
                        placeholder=""  value=<?=$ma_hh?>>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="ten_hh" id="exampleInputEmail1"
                        placeholder="Nhập tên sản phẩm" value=<?=$ten_hh?>>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giá sản phẩm</label>
                    <input type="number" class="form-control" name="don_gia" 
                    id="exampleInputPassword1" placeholder="0" value=<?=$don_gia?>>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giảm giá</label>
                    <input type="text" class="form-control" name="giam_gia" 
                    id="exampleInputPassword1" placeholder="0" value=<?=$giam_gia?>>
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input class="form-control" type="file" name="hinh" placeholder="">
                </div>

                <div class="form-group">
                        <?= $hinh ?>
                </div>

        
                <div class="form-group">
                    <label for="exampleInputPassword1">Sản phâm có đặc biệt hay không</label>
                    <br>
                    <input type="radio" class="" name="dac_biet" id="dac_biet" value="1" <?=$dac_biet?'checked':''?>>
                    <label for="dac_biet">Đặc biệt </label>
                    <br>
                    <input type="radio" class="" name="dac_biet" id="dac_biet_1" value="0" <?=$dac_biet?'checked':''?>checked>
                    <label for="dac_biet_1">Bình thường </label>
                </div>
               
                <!-- end IMG sản phẩm -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Số lượt xem</label>
                    <input type="text" class="form-control" name="so_luot_xem" id="exampleInputPassword1"
                        placeholder="0"  value="<?=$so_luot_xem?>" >
                </div>
               
                <div class="form-group">
                    <label for="exampleInputPassword1">Ngày nhập</label>
                    <input type="date" class="form-control" name="ngay_nhap" 
                    id="exampleInputPassword1" placeholder="0" <?=$ngay_nhap?>>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" name="mo_ta" rows="3" placeholder="Enter ..."  ><?=$mo_ta?></textarea>
                </div>       

                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
            </div>
            <!-- /.card-body -->

            <div class="d-grid">
                <div class="col-3   mb-3 ">
                <input type="hidden" name="ma_hh"
                        value="<?php if (isset($ma_hh) && ($ma_hh > 0))
                            echo $ma_hh; ?>">
                    <input class="btn btn-outline-primary btn-md  " name="updateProduct" value="Cập nhật"
                        type="submit"></input>

                    <input class="btn btn-outline-primary btn-md  " value="Nhập lại" type="reset"></input>

                    <a name="" id="" class="btn btn-outline-primary btn-md" href="index.php/?page=listProduct"
                        role="button">Danh sách</a>

                </div>
            </div>
        </form>

    </div>


    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>