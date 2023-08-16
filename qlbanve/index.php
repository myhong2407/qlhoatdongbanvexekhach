<!DOCTYPE html>
<html lang="EN">


<?php
        include("header.php");
?>
<body>
            <!-- Booking Tickets -->
            <div class="booking">
            <!-- Form đặt vé -->
        <form action="datve.php" method="post" class="container border rounded shadow mt-5 mb-5">
            <!-- Cái khung, bo gốc -->
            <div class="border1 mb-5 ml-5 mt-5 shadow-lg p-5">
                <!-- Nhớ xóa border -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col m-1 p-3 text-muted text-center font-weight-bold">
                                <h5 class="card-title text-center font-weight-bold text-muted">Điểm đi</h5>
                                <select class="form-select1 text-muted text-center" style="border: none" id="diemdi" name = "diemdi">';
                                    <option selected text-muted>Chọn địa điểm</option>
                                    <option></option>';
                                </select>
        
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col border-left m-1 p-3 text-center font-weight-bold text-muted">
                                <h5 class="card-title text-center font-weight-bold text-muted">Điểm đến</h5>
                                <select class="form-select1 text-muted text-center" style="border: none" id="diemden" name = "diemden">';
                                    <option selected text-muted>Chọn địa điểm</option>';
                               
                                    <option></option>';
                              
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col border-left text-center m-1 p-3">
                                <h5 class="card-title text-center font-weight-bold text-muted">Ngày đi</h5>
                                    <input type='date' id='ngaydi' name='ngaydi' min='$currentDate' required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col border-left text-center m-1 p-3">
                                <h5 class="card-title text-center font-weight-bold text-muted">Ngày về</h5>
                                    <input type='date' id='ngayve' name='ngayve' min='$currentDate'>
                            </div>
                        </div>
                    </div>
                    <button class="snip1339 " style="float: right;" id="find-flight" type="submit" name="action"
                        value="timChuyenXe">Tìm chuyến xe</button>
                </div>
        
            </div>  
        </form>  
        </div>
      

    <?php
        include("footer.php");
    ?>

</body>
</html>