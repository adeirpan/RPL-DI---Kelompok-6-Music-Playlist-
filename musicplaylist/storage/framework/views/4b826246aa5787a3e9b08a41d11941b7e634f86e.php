<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css'); ?>" />
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"/>
    </head>
    <body>
        <section class="vh-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-black">
                        <div class="px-5 ms-xl-4">
                            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085"></i>
                            <div class="logo"><img src="<?php echo asset('./img/logo.png'); ?>" alt="" style="width: 150px; height: 120px;  "/></div>
                        </div>

                        <?php if(session()->has('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(session('success')); ?>

                                ,<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            </div>
                        <?php endif; ?>

                        <?php if(session()->has('loginError')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo e(session('loginError')); ?>

                                ,<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            </div>
                        <?php endif; ?>

                        <div
                            class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                            <form style="width: 23rem" action="/login" method="post">
                                <?php echo csrf_field(); ?>
                                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">Log in</h3>
                                <div class="form-outline mb-4">
                                    <label class="form-label" autofocus required>Email address</label>
                                    <input type="email" id="email" name="email" for="email" class="form-control form-control-lg"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" autofocus required >Password</label>
                                    <input
                                        type="password"
                                        id="password"
                                        name="password"
                                        for = "password"
                                        class="form-control form-control-lg"/>
                                </div>

                                <div class="pt-1 mb-4">
                                    <button  type="submit" class="btn btn-primary">Login</button>
                                </div>

                                <p class="small text-muted">
                                    Don't have an account?
                                    <a href="/register" class="link-info">
                                        <u>Register Now!!</u>
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6 px-0 d-none d-sm-block">
                        <img
                            src="<?php echo asset('img/bg1.jpeg'); ?>"
                            alt="Login image"
                            class="w-100 vh-100"
                            style="object-fit: cover; object-position: right"/>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
<?php /**PATH E:\Rezki\laravel\TUBESRPL\musicplaylist\resources\views/login.blade.php ENDPATH**/ ?>