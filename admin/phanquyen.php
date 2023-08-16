<!DOCTYPE html>
<html lang="en">

<?php
    include("header.php");
?>

<head>
    <title>Phân quyền</title>
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
                            <li class="breadcrumb-item text-muted active" aria-current="page">Phân quyền</li>
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
            <h2>Cập nhật quyền</h2><hr>
            <form method="POST" action="capnhat_phanquyen.php">
                <label for="ID">Email:</label>
                <input type="text" id="ID" name="IDD" required>
                <label for="can_cuoc">Phân Quyền: <select class="form-select" aria-label="Default select example" name="phanquyen">
                    <option selected>Phân Quyền</option>
                    <option value="1">Admin</option>
                    <option value="2">Nhân Viên</option>
                    <option value="3">Khách Hàng</option>
                </select></label>
                
                <br>
                <button type="submit" class="btn btn-primary">Lưu</button>

            </form>

        </div>
    </div>
    </div>
</div>

<?php 
    include("footer.php");
?>

</body>

</html>