   
 @extends('layout.main')

 @section('container')

    <script src="https://kit.fontawesome.com/b5b2ac5d79.js" crossorigin="anonymous"></script>
    <section class="home">
        <center><img class="img-rounded" src="{!! asset('img/profile.jpg') !!}" /></center>
        <div class="text2"style="font-size: 30px;">
            Profile
        </div>
        <div class="text2"style="font-size: 80px;margin-top:2px;">
            {{ auth()->user()->name}}
        </div>
        <div class="text2"style="font-size: 18px;margin-top:5px;">
            Non-Premium User
        </div>
    </br>
    </br> 
        
        <span class="lingkaran" style="margin-left:550px;margin-top:20px;">
            <i class="fa-solid fa-download fa-2x"style="margin-top: -3px; margin-left:5px;"></i>
            <p class="text">Offline Music</p>
        </span>

        <span class="lingkaran" style="margin-left:50px;margin-top:20px;">
            <i class="fa-solid fa-location-pin fa-2x"style="margin-left: 8px;"></i>
            <p class="text">Chord Guitar</p>
        </span>

        <span class="lingkaran" style="margin-left:40px;margin-top:20px;">
            <i class="fa-solid fa-language fa-2x" style="margin-left: -3px; margin-left:5px;"></i>
            <p class="text">Translate Song</p>
        </span>
                
        </br>
        </br>
        </br>
        <div class="container">
            <div class="card" style="width: 18rem;margin-left:200px;">
                <div class="card-body">
                </br>   
                <span class="card-title" style="margin-top: 20px;">1 Bulan</span>
                </br>
                </br>
                <span class="card-text">Hanya Rp 20k/1bln anda dapat  menikmati fitur premium dari kami. </span>
                </br>
                </br>
                <hr>
                </br>
                    <span class="card-text" style="font-size: 30px;">RP 20.000 </span>
                    <a href="/payment" class="main-btn" style="margin-bottom: 20px;margin-top: 20px;">Subscribe</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;margin-left:590px;margin-top: -351px;">
                <div class="card-body">
                </br> 
                <span class="card-title" style="margin-top: 20px;">3 Bulan</span>
                </br>
                </br>
                <span class="card-text">Hanya Rp 50k/3bln anda dapat  menikmati fitur premium dari kami. </span>
                </br>
                </br>
                <hr>
                </br>
                    <span class="card-text" style="font-size: 30px;">RP 50.000 </span>
                    <a href="/payment" class="main-btn" style="margin-bottom: 20px;margin-top: 20px;">Subscribe</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;margin-left:980px;margin-top: -351px;">
                <div class="card-body">
                </br> 
                <span class="card-title" style="margin-top: 20px;">1 Tahun</span>
                </br>
                </br>
                <span class="card-text">Hanya Rp 180k/1thn anda dapat  menikmati fitur premium dari kami. </span>
                </br>
                </br>
                <hr>
                </br>
                    <span class="card-text" style="font-size: 30px;color: var(--primary color);">RP 180.000 </span>
                    <a href="/payment" class="main-btn" style="margin-bottom: 20px;margin-top: 20px;">Subscribe</a>
                </div>
            </div>
        </div>
    </section>

 @endsection