<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Đăng ký</title>
    <link rel="icon" href="<?php echo BASE_URL ?>/public/img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/login.css">

</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper logoImgs">
                    <div class="brand">
                        <a href = "<?php echo BASE_URL ?>/home">
                        <img src="<?php echo BASE_URL ?>/public/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="card fat">
                        <div class="card-body cardInfo">
                            <h4 class="card-title">Đăng ký</h4>
                            <form method="POST" class="my-login-validation" novalidate="">
                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control inputclass" name="email" required placeholder="Nhập E-mail của bạn">
                                    <div class="invalid-feedback">
                                        Vui lòng nhập đúng định dạng gmail
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Họ và tên</label>
                                    <input id="name" type="text" class="form-control inputclass" name="name" required autofocus placeholder="Nhập họ và tên của bạn">
                                    <div class="invalid-feedback">
                                        Vui lòng nhập tên của bạn
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input id="password" type="password" class="form-control inputclass" name="password" required data-eye placeholder="Nhập mật khẩu">
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control inputclass"  name= "repassword" placeholder="Nhập lại mật khẩu" id="confirm_password" required data-eye="">
                                    <div class="field">
                                        <span id="message"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
                                        <label for="agree" class="custom-control-label">Tôi đồng ý với <a href="#">Điều khoản dịch vụ</a> và <a href="#">Chính sách bảo mật</a></label>
                                        <div class="invalid-feedback">
                                            Bạn phải đồng ý với chính sách và điều khoản ở trên
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" id="submit-pass" name ="submit" class="btn btnRegister btn-block">
										Đăng ký
									</button>
                                </div>
                                <div class="mt-4 text-center">
                                    Bạn đã có tài khoản? <a href="<?php echo BASE_URL ?>/login" class="Loginnowa">Đăng nhập ngay</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer-login">
                        Copyright &copy; 2021 &mdash; BookStylist
                    </div>
                </div>
            </div>
        </div>

    </section>
<input id='base' type='hidden' value='<?php echo BASE_URL ?>'/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL ?>/public/js/mylogin.js"></script>
</body>

</html>