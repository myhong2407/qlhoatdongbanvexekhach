<!DOCTYPE html>
<html lang="en">

<body>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-item">
                    <h4>Kết nối với chúng tôi</h4>
                    <ul class="social-icons">
                        <h3 style=" color: #EB455F; font-size: 40px; font-weight: 700;">1900 2082</h3>
                        <li><a rel="nofollow" href="#" target="_blank"><i
                                    class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <p>
                        Địa chỉ: Q.Ninh Kiều, TP.Cần Thơ
                        <br> Email: bookingtickets@gmail.com
                    </p>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Hướng dẫn</h4>
                    <ul class="menu-list">
                        <li><a href="#">Hướng dẫn đặt vé trên Web</a></li>
                        <li><a href="#">Hướng dẫn đặt vé trên App</a></li>
                        <li><a href="#">Hỏi Đáp</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Đi đến trang</h4>
                    <ul class="menu-list">
                        <li><a href="#">Trang Chủ</a></li>
                        <li><a href="#">Lịch trình</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                        <li><a href="#">Đăng Ký</a></li>
                        <li><a href="#">Đăng nhập</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Khác</h4>
                    <ul class="menu-list">
                        <li><a href="#">Trở thành nhà cung cấp</a></li>
                        <li><a href="#">Cộng tác với chúng tôi</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                        <li><a href="#">Liên Kết Hữu Dụng</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script>
        const indicator = document.querySelector('.nav-indicator');
        const items = document.querySelectorAll('.nav-item');

        function handleIndicator(el) {
        items.forEach(item => {
            item.classList.remove('is-active');
            item.removeAttribute('style');
        });
        
        indicator.style.width = `${el.offsetWidth}px`;
        indicator.style.left = `${el.offsetLeft}px`;
        indicator.style.backgroundColor = el.getAttribute('active-color');

        el.classList.add('is-active');
        el.style.color = el.getAttribute('active-color');
        }


        items.forEach((item, index) => {
        item.addEventListener('click', (e) => { handleIndicator(e.target)});
        item.classList.contains('is-active') && handleIndicator(item);
        });
    </script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>