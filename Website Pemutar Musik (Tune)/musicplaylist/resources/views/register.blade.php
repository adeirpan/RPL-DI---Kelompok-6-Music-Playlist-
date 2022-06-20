<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}"/>
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"/>
    </head>
    <body style="background-color: #15191E;">
        <section class="vh-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 px-0 d-none d-sm-block">
                        <img
                            src="{!! asset('img/bg1.jpeg') !!}"
                            alt="Login image"
                            class="w-100 vh-100"
                            style="object-fit: cover; object-position: right"/>
                    </div>
                    <div class="col-sm-6 text-black">
                        <div class="d-flex d-flex justify-content-start px-5 pt-2 ms-xl-4">
                            <h3 class="fw-normal" style="letter-spacing: 1px; color:white">REGISTER</h3>
                        </div>
                        <div class="logo d-flex justify-content-center"><img src="{!! asset('./img/logo.png') !!}" alt="" style="width: 150px; height: 120px;  "/></div>
                        <div class="d-flex justify-content-center align-items-center h-custom-2 px-5 ms-xl-4 pt-xl-0 mt-xl-n5">
                            <form style="width: 23rem" method="POST" action="/register">
                                @csrf
                                <div class="form-outline">
                                    <label class="form-label" for="name" >Your Name</label>
                                    <input type="text" id="name" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror"/>
                                </div>

                                <div class="form-outline">
                                    <label class="form-label @error('email') is-invalid @enderror" for="email" >Your Email</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-lg"/>
                                </div>

                                <div class="form-outline">
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                    <input type="password" name="password" id="password" for= "password" class="form-control form-control-lg @error('password') is-invalid @enderror"/>
                                </div>

                                <div class="form-outline">
                                    <label class="form-label" for="form3Example4cg">Jenis Kelamin</label>
                                    <input type="" name="jenisKelamin" id="jenisKelamin" for= "jenisKelamin" class="form-control form-control-lg @error('jenisKelamin') is-invalid @enderror"/>
                                </div>
                                </br>
                                <input hidden type="text" id="premiumStatus" name="premiumStatus" value=0>
                                <input hidden type="text" id="role" name="role" value="guest">

                                <div class="d-flex justify-content-start mt-2">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                                </br>
                                <p class="text-center text-muted">
                                    Have already an account?
                                    <a href="/login" class="link-info">
                                        <u>Login here</u>
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
