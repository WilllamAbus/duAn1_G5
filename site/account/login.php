<div class="col-md-6 offset-md-3">
    <span class="anchor" id="formLogin"></span>

    <!-- form card login with validation feedback -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">ĐĂNG NHẬP</h3>
        </div>
        <div class="card-body">
            <form class="form" role="form" autocomplete="off" id="loginForm" novalidate="" method="POST">
                <div class="form-group">
                    <label  for="uname1">Tên đăng nhập</label >
                    <input type="text" class="form-control" name="uname1" id="uname1"placeholder="Nhập vào tên đăng nhập" >
                </div>
                <div class="form-group">
                    <label for="inputEmail3">Email</label>
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Nhập vào Email" >
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" class="form-control" id="pwd1"  autocomplete="new-password" placeholder="Nhập vào mật khẩu">
                </div>
                <button  type="submit" class="btn btn-success btn-lg float-left btn-block" id="btnLogin">Đăng nhập</button>

                <div class="form-group">
               
                </div>
                <span>Bạn chưa có tài khoản ? <a href="index.php?page=signup">Đăng kí</a></span>
                <span class="changePass"> <a href="index.php?page=forgot">Quên mật khẩu</a></span>
            </form>
        </div>
        <!--/card-body-->
    </div>
    <!-- /form card login -->

</div>
<style>

.changePass{
    float: right;
}

</style>