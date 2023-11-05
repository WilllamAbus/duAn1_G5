<div class="col-md-6 offset-md-3">
    <span class="anchor" id="formRegister"></span>
    <hr class="mb-5">

    <!-- form card register -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">ĐĂNG KÍ</h3>
        </div>
        <div class="card-body">
            <form class="form" role="form" autocomplete="off">
                <div class="form-group">
                    <label for="inputName">Tên</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Nhập vào tên ">
                </div>
                <div class="form-group">
                    <label for="inputEmail3">Email</label>
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Nhập vào Email">
                </div>

                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="phone" class="form-control" id="phone" placeholder="Nhập vào số điện thoại">
                </div>
                <div class="form-group">
                    <label for="inputPassword3">Mật khẩu</label>
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Nhập vào mật khẩu">
                </div>
                <div class="form-group">
                    <label for="inputPassword3">Xác nhận mật khẩu</label>
                    <input type="changePassword" class="form-control" id="inputPassword3" placeholder="Nhập lại mật khẩu">
                </div>

                <button type="submit" class="btn btn-success btn-lg float-left btn-block" id="btnLogin">Đăng kí</button>
        </div>
        <span class="ab">Bạn đã có tài khoản ? <a href="index.php?page=login">Đăng nhập</a></span>
        <span class="ab">Cập nhật tài khoản ? <a href="index.php?page=update">Cập nhật</a></span>

        </form>

    </div>
</div>
<!-- /form card register -->

</div>
<style>
    .login {
        margin-left: 30px;
        color: blue !important;
        text-decoration: none;
    }

    .ab {
       float: right !important;
        margin:10px ;
    }


</style>