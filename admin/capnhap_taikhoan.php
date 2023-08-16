<!DOCTYPE html>
<html lang="en">

<?php
    include("header.php");
?>

<head>
    <title>Cập Nhật Nhân Viên</title>
</head>

<?php
    include("navbar.php");
?>

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Cập nhật</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index_admin.php" class="text-muted">Trang Chủ</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Cập nhập tài khoản</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                        <option selected>Aug 19</option>
                        <option value="1">Sep 19</option>
                        <option value="2">Oct 19</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Container  -->
    <div class="container-fluid">
        <div class="row frame">
            <div class="col">
                <h2>Thêm tài khoản</h2> <hr>
                <form method="POST" action="them_taikhoan.php">
                    <label for="ID">Email:</label>
                    <input type="text" id="ID" name="email" required>

                    <label for="ho_ten">Họ và tên:</label>
                    <input type="text" id="ho_ten" name="ho_ten" required>

                    <label for="so_dien_thoai">Số điện thoại:</label>
                    <input type="text" id="so_dien_thoai" name="so_dien_thoai" required>

                    <label for="dia_chi">Địa chỉ:</label>
                    <input type="text" id="dia_chi" name="dia_chi" required>

                    <label for="ngay_sinh">Ngày sinh:</label>
                    <input type="date" id="ngaysinh" name="ngaysinh" required>

                    <label for="can_cuoc">Căn cước công dân:</label>
                    <input type="text" id="can_cuoc" name="can_cuoc" required>

                    <label for="sotaikhoan">Số tài khoản ngân hàng:</label>
                    <input type="text" id="sotaikhoan" name="sotaikhoan" required>

                    <label for="can_cuoc">Tên ngân hàng: <select class="form-select" aria-label="Default select example" name="manganhang">
                            <option selected>Mã ngân hàng</option>
                            <option value="VCB">Vietcombank</option>
                            <option value="AGB">Agribank</option>
                            <option value="TCB">Techcombank</option>
                        </select></label>
                        
                    
                    <div class="row">
                        <div class="col-6">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" id="password" name="pwd" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="can_cuoc">Giới tính:</label>
                            <div class="form-check" name="gioitinh">
                                <input class="form-check-input" type="radio" name="gioitinh" value="Nam"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Nam
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gioitinh" value="Nữ"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Nữ
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="can_cuoc">Phân Quyền:</label>
                            <select class="form-select" aria-label="Default select example" name="phanquyen">
                                <option selected>Phân Quyền</option>
                                <option value="1">Admin</option>
                                <option value="2">Nhân Viên</option>
                                <option value="3">Khách Hàng</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Thêm người dùng</button>
                </form>
            </div>
            <!-- ============================================================== -->

        </div>
    </div>
  
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->

<?php 
    include("footer.php");
?>

</body>

</html>