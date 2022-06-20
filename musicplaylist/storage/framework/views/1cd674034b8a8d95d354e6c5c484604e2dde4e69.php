<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css'); ?>"/>
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

                        <div
                            class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-4 pt-5 pt-xl-0 mt-xl-n5">
                            <form style="width: 23rem" method="POST" action="/register">
                                <?php echo csrf_field(); ?>
                                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">Register</h3>
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="name" >Your Name</label>
                                    <input type="text" id="name" name="name" class="form-control form-control-lg <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"/>
                                </div>

                                <div class="form-outline mb-3">
                                    <label class="form-label <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" for="email" >Your Email</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-lg"/>
                                </div>

                                <div class="form-outline mb-3">
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                    <input type="password" name="password" id="password" for= "password" class="form-control form-control-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"/>
                                </div>

                                <div class="d-flex justify-content-center mb-2">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>

                                <p class="text-center text-muted">
                                    Have already an account?
                                    <a href="/login" class="link-info">
                                        <u>Login here</u>
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
<?php /**PATH E:\Rezki\laravel\TUBESRPL\musicplaylist\resources\views/register.blade.php ENDPATH**/ ?>