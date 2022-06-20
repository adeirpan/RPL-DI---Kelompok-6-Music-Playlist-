<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!----======== BOTSTRAP CSS ======== -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"/>

</head>
<body style="background-color: #15191E;">
    <div class="d-flex d-flex justify-content-center px-5 pt-2 pt-xl-0 mt-2 ms-xl-4">
        <h3 class="fw-normal pt-2" style="letter-spacing: 1px; color:white">PEMBAYARAN</h3>
    </div>
    <div class="d-flex justify-content-center align-items-center h-custom-2 px-5 ms-xl-4 pt-xl-0 mt-xl-n5">
        <form style="width: 30rem" method="POST" action="/register">
            @csrf
            <div class="form-outline">
                <label class="form-label" for="name" >Username</label>
                <input type="text" id="name" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror"/>
            </div>

            <div class="form-outline">
                <label class="form-label @error('email') is-invalid @enderror" for="email" >Email</label>
                <input type="email" name="email" id="email" class="form-control form-control-lg"/>
            </div>

            <div class="form-outline">
                <label for="paket-select">Pilih Langganan:</label>
                <select name="pakets" id="paket-select">
                    <option value="1bln">Paket 1 Bulan</option>
                    <option value="3bln">Paket 3 Bulan</option>
                    <option value="1thn">Paket 1 tahun</option>
                </select>
            </div>

            <div class="form-outline">
                <label class="form-label" for="form3Example4cg">Bukti Pembayaran</label>
                <input type="file" name="myImage" accept="image/*"/>
            </div>

            <input hidden type="text" id="premiumStatus" name="premiumStatus" value=0>
            <input hidden type="text" id="role" name="role" value="guest">

            <div class="d-flex justify-content-start mt-2">
                <button type="submit" class="main-btn" style="margin-right: 20px">Submit</button>
                <button type="submit" class="secondary-btn"><a href="/premiumPlan">Batal</a></button>
            </div>

        </form>
    </div>
</body>
</html>