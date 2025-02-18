<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Đăng nhập</title>
    <link rel="icon" href="<?php echo BASE_URL ?>/public/img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/login.css">
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100 ">
                <div class="card-wrapper">
                    <div class="brand">
                    <a href="<?php echo BASE_URL ?>/home">
                        <img  src="<?php echo BASE_URL ?>/public/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="card fat cardInfo">
                        <div class="card-body">
                            <h4 class="card-title">Đăng nhập</h4>
                            <?php
                                if(isset($_GET['kq'])&&$_GET['kq']=='done'){
                                    echo "<b style='color: green; font-size: 14px;'>Đăng kí thành công</b>";
                                }
                            ?>
                            <form method="POST" class="my-login-validation" novalidate="" action="">
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input id="text" type="text" class="form-control inputclass" name="email" value=""  autofocus placeholder="Nhập E-mails">
                                    <!-- <div class="invalid-feedback">
                                        Vui lòng nhập đúng định dạng email
                                    </div> -->
                                </div>

                                <div class="form-group">
                                    <label for="password">Mật khẩu							
									</label>
                                    <input id="password" type="password" class="form-control inputclass" name="password" required data-eye placeholder="Nhập mật khẩu">
                                    <div class="invalid-feedback">
                                        Vui lòng nhập mật khẩu
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                                        <label for="remember" class="custom-control-label">Ghi nhớ đăng nhập</label>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btnlogin btn-block" name="submit">
										Đăng nhập
									</button>
                                    <div class="row mt-3">
                                        <div class="col-8 mb-3">
                                            <a href=""><img src="<?php echo BASE_URL ?>/public/img/Fblogo.png" alt="" class="imgfb">Đăng nhập bằng Facebook</a>
                                        </div>
                                        <div class="col-8">
                                            <a href=""><img src="<?php echo BASE_URL ?>/public/img/g+logo.png" alt="" class="imggg">Đăng nhập bằng Google</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    Bạn chưa có tài khoản? <a href="<?php echo BASE_URL?>/register" class="registerA">Đăng ký ngay</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer-login">
                        Copyright &copy; 2021 &mdash; BookSDT
                    </div>
                </div>
            </div>
        </div>
        <input id='base' type='hidden' value='<?php echo BASE_URL ?>'/>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL ?>/public/js/mylogin.js"></script>
</body>

</html>