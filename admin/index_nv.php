<!DOCTYPE html>
<html lang="en">

<?php
session_start();
?>

<?php
    include("header.php");
?>


<body>
    <!-- Navbar nhân viên-->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <div class="scroll-sidebar" data-sidebarbg="skin6">
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index_nv.php"
                            aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                class="hide-menu">Dashboard</span></a></li>

                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu"> Chung</span></li>


                    <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                class="hide-menu"> Người Dùng </span></a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="#" class="sidebar-link"><span class="hide-menu"> Nhân
                                        Viên
                                    </span></a>
                            </li>
                            <li class="sidebar-item"><a href="capnhatuser.php" class="sidebar-link"><span
                                        class="hide-menu"> Khách
                                        Hàng
                                    </span></a>
                            </li>

                        </ul>
                    </li>
        
                </ul>
            </nav>
            <!-- ket thuc nav -->
           
        </div>
    </aside>

        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- dieu huong-->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Danh Sách Khách Hàng</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Trang Chủ</a>
                                    </li>
                                    <li class="breadcrumb-item text-muted " aria-current="page">Khách Hàng</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select
                                class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Bang thong ke -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Họ Tên</th>
                                                <th>Email</th>
                                                <th>Địa Chỉ</th>
                                                <th>Giới Tính</th>
                                                <th>Tuổi</th>
                                                <th>Số lần đặt vé</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanvexe";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
                    
                    $sql="SELECT * FROM khachhang ";

                    $result1 = $conn->query($sql);
                  // print_r($result1);
                 
                while( $row = $result1->fetch_assoc() ){
                    $birthday = $row["NAMSINH"]; 
                    $today = date('Y-m-d'); 
                    $diff = date_diff(date_create($birthday), date_create($today)); 
                    // so lan mua;
                    $solanmua= "SELECT COUNT(maphieu)  AS tongve  FROM
                    khachhang ,phieudatve WHERE khachhang.email=phieudatve.email
                    and khachhang.email= '".$row["EMAIL"]."'" ;
                    $result = mysqli_query($conn, $solanmua);
                    $tong=$result->fetch_assoc();
                   
                    
                    echo"
                    <tr>
                        <td>".$row["HOTEN"]."</td>
                        <td>".$row["EMAIL"]."</td>
                        <td>".$row["DIACHI"]."</td>
                        <td>".$row["GIOITINH"]."</td>
                        <td>".$diff->format('%y')."</td>
                        <td>".$tong["tongve"]."</td>
                </tr>
                    ";
                }

                $tongkh= "SELECT COUNT(EMAIL) AS TONGKH FROM khachhang";
                $result = mysqli_query($conn, $tongkh);
                $tong1= $result->fetch_assoc();
                    echo"
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tổng số khách hàng: ".$tong1["TONGKH"]."</th>
                                        ";
?>
                                            </tr>
                                            </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
           
<?php
    include("footer.php");
?>


</body>

</html>