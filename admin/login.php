<!DOCTYPE html>
<html dir="ltr">

<?php
    include("header.php");
?>

<head>
    <title>Đăng Nhập</title>
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative">
            <div class="auth-box row">
                <div class="col-lg-5 col-md-5 modal-bg-img" style="background-image: url(assets/images/login2.jpg);">
                </div>
                <div class="col-lg-7 col-md-7 bg-white">
                    <div class="p-3">
                        <h2 class="mt-3 text-center">Đăng nhập</h2> <hr>

                        <form class="mt-4" action='log.php' method='POST'>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="uname">Email:</label>
                                        <input class="form-control" id="uname" type="text"
                                            placeholder="Nhập địa chỉ email" name='name'>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">Mật khẩu:</label>
                                        <input class="form-control" id="pwd" type="password"
                                            placeholder="Nhập mật khẩu" name='psw'>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center"> 
                                    <button type="submit" name='sb' class="btn btn-primary">Đăng nhập</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>