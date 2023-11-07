<?php
// Kết nối CSDL 
$dsn = 'mysql:host=localhost;dbname=bookstore_g5';
$username = 'huytv_pc07617';
$password = '192383T&';

try {
  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Kết nối thất bại: ' . $e->getMessage();
}

// Xử lý khi submit form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Lấy dữ liệu từ form
  $ten_nd = $_POST['ten_nd'];
  $email = $_POST['email'];
  $sdt = $_POST['sdt'];
  $mat_khau = $_POST['mat_khau'];

  // Kiểm tra dữ liệu
  if (empty($ten_nd) || empty($email) || empty($mat_khau) || empty($sdt)) {
    $error = 'Vui lòng nhập đầy đủ thông tin';
  } else {



    // Câu lệnh INSERT
    $sql = "INSERT INTO nguoi_dung(ten_nd, email, sdt, mat_khau) 
            VALUES (:ten_nd, :email, :sdt, :mat_khau)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':ten_nd', $ten_nd);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':sdt', $sdt);
    $stmt->bindParam(':mat_khau', $mat_khau);

    // Thực thi câu lệnh
    if ($stmt->execute()) {
      
          echo "<script>window.location.href='index.php?page=login'</script>";           
    } else {
      $error = 'Có lỗi xảy ra';
    }
  }
}

?>



  <div class="col-md-6 offset-md-3">
    <span class="anchor" id="formRegister"></span>
    <!-- form card register -->
    <div class="card card-outline-secondary">
      <div class="card-header">
        <h3 class="mb-0">ĐĂNG KÍ</h3>
      </div>
      <div class="card-body">
        <form m action='' method='post' class="form" role="form" autocomplete="off">
          <div class="form-group">
            <label for="inputName">Tên</label>
            <input type="text" class="form-control" id="inputName" placeholder="Nhập vào tên" name="ten_nd">
          </div>

          <div class="form-group">
            <label for="inputEmail3">Email</label>
            <input type="email" class="form-control" id="inputEmail3" placeholder="Nhập vào Email" name="email">
          </div>

          <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input type="text" class="form-control" id="phone" placeholder="Nhập vào số điện thoại" name="sdt">
          </div>  

          <div class="form-group">       
            <label for="inputPassword3">Mật khẩu</label>
            <input type="password" class="form-control" id="inputPassword3" placeholder="Nhập vào mật khẩu" name="mat_khau">
          </div>

          <div class="form-group">
            <label for="inputPassword3">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" id="inputPassword3" placeholder="Nhập lại mật khẩu" name="xac_nhan_mat_khau">
          </div>

          <button type="submit" class="btn btn-success btn-lg float-left btn-block" id="btnLogin" name="signup">Đăng ký</button>
   
      </div>
      <span class="ab">Bạn đã có tài khoản ? <a href="index.php?page=login">Đăng nhập</a></span>
      <span class="ab">Cập nhật tài khoản ? <a href="index.php?page=update">Cập nhật</a></span>
      </form>
      </div>
    </div>






<style>
  .login {
    /* margin-left: 30px; */
    color: blue !important;
    text-decoration: none;
  }

  .ab {
    float: right !important;
    margin: 10px;
  }
</style>