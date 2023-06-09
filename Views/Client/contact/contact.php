<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://myshoes.vn/image/catalog/logo/logo-myshoes-nho.png" rel="icon">
    <title>Liên Hệ Với Chúng Tôi</title>
    <link rel="stylesheet" href="Public/Icons/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Public/Css/Client/base/reset.css">
    <link rel="stylesheet" type="text/css" href="Public/Css/Client/base/root.css">
    <link rel="stylesheet" href="Public/Css/Client/Effects/hover.css">
    <link rel="stylesheet" href="Views/Client/contact/contact.css">
</head>
<body>
    <div class="site-wrapper">
        <header class="header">
            <div class="header-wrapper">
                <div class="header-navbar">
                    <div class="logo-wrapper">
                        <a href="index.php">
                            <img src="https://myshoes.vn/image/cache/catalog/logo/logo_ms-565x195.png" alt="" class="logo-img">
                        </a>
                    </div>
                    <form class="search-wrapper" action="?redirect=search" method="POST">
                        <input type="text" name="by" placeholder="Tìm kiếm sản phẩm...">
                        <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <div class="classic-wrapper">
                        <div class="accounts">
                            <?php
                                if(!isset($_SESSION['user_email'])) {
                                    echo "
                                    <a href='?controller=login&action=login' class='accounts-link'>
                                        <i class='fa-solid fa-user'></i>
                                        <div class='links-text'>
                                            <span>Tài khoản</span>
                                            <span>Đăng nhập/ Đăng ký</span>
                                        </div>
                                    </a>
                                    <div class='dropdown-menu-accounts'>
                                        <span class='login'><i class='fa-solid fa-arrow-right-to-bracket'></i>Đăng nhập</span>
                                        <span class='logout'><i class='fa-sharp fa-solid fa-arrow-right-from-bracket'></i>Đăng
                                            ký</span>
                                    </div>
                                    ";
                                } else {
                                    echo "
                                    <a href='?controller=login&action=login' class='accounts-link'>
                                        <i class='fa-solid fa-user'></i>
                                        <div class='links-text'>
                                            <span>Tài khoản</span>
                                            <span>Chỉnh sửa / Thoát</span>
                                        </div>
                                    </a>
                                    <div class='dropdown-menu-accounts logined'>
                                        <span class='login'><i class='fa-solid fa-user'></i>Tài khoản của tôi</span>
                                        <span class='logout'><a href='?controller=admin'>&diams; Trang quản trị</a></span>
                                        <span class='logout'><i class='fa-solid fa-cart-shopping'></i>Đơn hàng của tôi</span>
                                        <span class='exit'><i class='fa-solid fa-arrow-right-to-bracket'></i><a href='index.php?controller=login&action=logout'>Thoát</a></span>
                                    </div>
                                    ";
                                }
                            ?>
                        </div>
                        <div class="cart">
                            <a href="?redirect=cart" class="cart-link hvr-icon-grow">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <?php
                                if(isset($_SESSION['cart'])) {
                                    echo '<span class="quantity">!</span>';
                                } else {
                                    echo '<div class="cart-empty">
                                    <span>Không có sản phẩm trong giỏ hàng!</span>
                                </div>';
                                }
                            ?>

                            <!-- <div class="cart-products">
                                <div class="list-products-cart">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="td-img" scope="row">
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                </td>
                                                <td class="td-name hvr-grow">
                                                    <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                    <p>Chọn size nam: 39.5</p>
                                                </td>
                                                <td class="td-quantity">x1</td>
                                                <td class="td-total">2.690.000₫</td>
                                            </tr>
                                            <tr>
                                                <td class="td-img" scope="row">
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                </td>
                                                <td class="td-name hvr-grow">
                                                    <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                    <p>Chọn size nam: 39.5</p>
                                                </td>
                                                <td class="td-quantity">x1</td>
                                                <td class="td-total">2.690.000₫</td>
                                            </tr>
                                            <tr>
                                                <td class="td-img" scope="row">
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                </td>
                                                <td class="td-name hvr-grow">
                                                    <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                    <p>Chọn size nam: 39.5</p>
                                                </td>
                                                <td class="td-quantity">x1</td>
                                                <td class="td-total">2.690.000₫</td>
                                            </tr>
                                            <tr>
                                                <td class="td-img" scope="row">
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                </td>
                                                <td class="td-name hvr-grow">
                                                    <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                    <p>Chọn size nam: 39.5</p>
                                                </td>
                                                <td class="td-quantity">x1</td>
                                                <td class="td-total">2.690.000₫</td>
                                            </tr>
                                            <tr>
                                                <td class="td-img" scope="row">
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                </td>
                                                <td class="td-name hvr-grow">
                                                    <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                    <p>Chọn size nam: 39.5</p>
                                                </td>
                                                <td class="td-quantity">x1</td>
                                                <td class="td-total">2.690.000₫</td>
                                            </tr>
                                            <tr>
                                                <td class="td-img" scope="row">
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                </td>
                                                <td class="td-name hvr-grow">
                                                    <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                    <p>Chọn size nam: 39.5</p>
                                                </td>
                                                <td class="td-quantity">x1</td>
                                                <td class="td-total">2.690.000₫</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart-totals">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td scope="row" style="width: 70%;">Thành tiền</td>
                                                <td>11.150.000₫</td>
                                            </tr>
                                            <tr>
                                                <td scope="row" style="width: 70%;">Tổng cộng</td>
                                                <td>11.150.000₫</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="cart-buttons">
                                        <button type="button" class="btn btn-light"><a>XEM GIỎ HÀNG</a></button>
                                        <button type="button" class="btn btn-danger"><a>THANH TOÁN</a></button>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="menu-wrapper">
                    <div class="menu-default">
                        <ul class="main-menu">
                            <?php
                                include_once('Views/Client/menu/menu.php');
                            ?>
                            <li class="menu-item ">
                                <a href="" class="item-link">
                                    <span class="item-name item-name--supersale"><i class="fa-brands fa-salesforce"></i>SIÊU SALES</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="?redirect=contact" class="item-link">
                                    <span class="item-name"><i class="mail-icon fa-regular fa-envelope"></i>Liên Hệ</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="?redirect=blog" class="item-link">
                                    <span class="item-name"><i class="fa-solid fa-pen-to-square"></i>Blog</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="breadcrumd">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="">Liên hệ</a></li>
            </ul>
        </div>

        <!-- Làm phần thân ở đây -->
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3978598747008!2d105.82896255041706!3d21.016760885936197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab82489cfa89%3A0xf2c65fad8571d0b7!2zMjQ5IFAuIFjDoyDEkMOgbiwgTmFtIMSQ4buTbmcsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1678030776379!5m2!1svi!2s" 
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <br>
        <div class="feedback">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12" style="background: rgb(255, 255, 255);">
                    <div class="in4">
                        <div class="inf">
                            <div class="inf1">
                                <div id="table" class="row" >
                                    <div class="col-lg-2 col-md-6 col-sm-12">
                                        <i class="fa-solid fa-location-dot"style="font-size: 3.5rem; margin-left: 15px;padding-top: 5px;"></i>
                                    </div>
                                    <div class="col-lg-10 col-md-6 col-sm-12">
                                        <b style="font-size: 1.4rem;">MYSHSOES.VN</b><br>
                                        <span style="font-size: 1.3rem;">249 Xã Đàn, Đống Đa, Hà Nộ</span> i
                                    </div>
                                </div>
                            </div>
                            <div class="inf2">
                                <div id="table" class="row">
                                    <div class="col-lg-2 col-md-6 col-sm-12" >
                                        
                                        <i class="fa-solid fa-phone-volume"style="font-size: 3.5rem; margin-left: 15px;padding-top: 5px;"></i>
                                    </div>
                                    <div class="col-lg-10 col-md-6 col-sm-12">
                                        <b style="font-size: 1.4rem;">HOTLINE</b><br>
                                        <span style="font-size: 1.3rem;">SĐT: 0973711868</span> 
                                    </div>
                                </div>
                            </div>
                            <div class="inf3">
                                <div class="row">
                                    <div class="col-lg-2 col-md-6 col-sm-12">
                                        <i class="fa-regular fa-clock" style="font-size: 3.5rem; margin-left: 15px;padding-top: 5px;"></i>
                                    </div>
                                    <div class="col-lg-10 col-md-6 col-sm-12">
                                        <b style="font-size: 1.4rem;">THỜI GIAN LÀM VIỆC</b><br>                                       
                                        <span style="font-size: 1.3rem;">Thời gian làm việc: 9:00 - 21:00</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <b style="font-size: 2.2rem;">MYSHOES.VN SẴN SÀNG LẮNG NGHE BẠN!</b> 
                    <div class="form">
                        <input type="text" name="name" value="" class="form-control"  placeholder="Họ và tên">
                        <input type="text" name="email" value="" class="form-control"  placeholder="Email">
                        <div class="form-group">
                            <textarea name="thongtin" class="form-control" placeholder="Thông tin"
                                rows="8"></textarea>
                        </div>
                        <div id="checkbox">
                            <input type="checkbox" name="check" id="check" >
                            <label for="check">Tôi đã đọc và đồng ý với <a href="" class="csbm"><b>chính sách bảo mật</b></a> </label>
                         </div>
                         <div class="xacnhan">
                            <input type="submit" class="form-control" value="Xác nhận">
                         </div>
                    </div>

                    
                </div>
            </div>
        </div>

        <footer>
            <div class="footer" >
               <div class="footer-wrapper">
                    <div class="row g-0">
                        <div class="col-6">
                            <div class="title-module">
                                <h3 class="title-register">ĐĂNG KÝ NHẬN THÔNG TIN</h3>
                                <p>Đăng ký ngay để được cập nhật sớm nhất những thông tin hữu ích, ữu đãi vô cùng hấp dẫn và những
                                món quà bất ngờ từ Myshoes.vn!</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="newsletter-form">
                                <div class="input-group">
                                    <input type="text" class="form-control newsletter-email" placeholder="Nhập email của bạn ">
                                    <div class="input-group-append d-flex">
                                        <button class="btn btn-danger btn-register" type="button"><i class="fa-solid fa-envelope"></i>Đăng Ký</button>
                                    </div>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Tôi đã đọc và đồng ý với <span>Chính sách bảo mật</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
            <div class="footer" >
                <div class="footer-wrapper">
                     <div class="row g-0 mt-3">
                            <div class="col-5">
                                <div class="block-address">
                                    <h3>MYSHOES.VN - GIÀY CHÍNH HÃNG</h3>
                                    <div class="block-header">
                                        <img src="https://myshoes.vn/image/cache/catalog/logo/logo-myshoes-ok-90x90.png" alt="">
                                        <div class="block-wrapper">
                                            <span>Myshoes.vn được định hướng trở thành hệ thống thương mại điện tử bán giày chính hãng hàng đầu Việt Nam.</span>
                                            <span>Showroom: 249 Xã Đàn, Đống Đa, Hà Nội</span>
                                            <span>Hotline: 0973711868</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2-3">
                                <div class="about-us">
                                    <h3>VỀ CHÚNG TÔI</h3>
                                    <ul>
                                        <li><a style="color:#fff;" href="?redirect=about">Giới thiệu</a></li>
                                        <li><a>Điều khoản sử dụng</a></li>
                                        <li><a>Chính sách bảo mật</a></li>
                                        <li><a>Tin tức myshoes</a></li>
                                        <li><a>Cơ hội việc làm</a></li>
                                        <li><a>Liên hệ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-2-3">
                                <div class="about-us">
                                    <h3>KHÁCH HÀNG</h3>
                                    <ul>
                                        <li><a>Hướng dẫn mua hàng</a></li>
                                        <li><a>Chính sách đổi trả</a></li>
                                        <li><a>Chính sách bảo hành</a></li>
                                        <li><a>Khách hàng thân thiết</a></li>
                                        <li><a>Hướng dẫn chọn size</a></li>
                                        <li><a>Chương trình khuyến mại</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-2-3">
                                <div class="about-us certificate">
                                    <h3>KHÁCH HÀNG</h3>
                                    <div class="certificate-img">
                                        <img src="https://images.dmca.com/Badges/DMCA_logo-grn-btn150w.png?ID=1ed4cd9e-5ee4-4b63-95dc-c70388edd3cb" alt="">
                                        <img src="https://myshoes.vn/image/catalog/logo/logo-bct.png" alt="" width="60%">
                                    </div>
                                </div>
                            </div>
                     </div>
                </div>
            </div>
            <div class="footer" >
                <div class="footer-wrapper">
                    <div class="copyright">Copyright © 2023 Mygroup Tech.,JSC</div>
                </div>
            </div>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>