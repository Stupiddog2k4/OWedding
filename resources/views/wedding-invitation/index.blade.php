<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,800;1,300;1,400;1,700&family=Sigmar+One&display=swap"
            rel="stylesheet"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Ephesis&family=Mea+Culpa&family=Rajdhani:wght@300;400;500;600;700&family=Smooch+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <link rel="stylesheet" href="{{asset('card/reset.css')}}" />
        <link rel="stylesheet" href="{{asset('card/style.css')}}" />
    </head>
    <body>
        <div class="cardcontainer">
            <div class="card">
                <img src="{{asset('image/cardbg6.jpg')}}" alt="" />
                <div class="card-content">
                    <div class="invitation">Invitation</div>
                    <div class="savethedate">Save The Date</div>
                    <div class="couplename">
                        <span class="husband">{{$groom->full_name}}</span> <span>&</span> <span class="Wife">{{$bride->full_name}}</span>
                    </div>
                    <div class="invite">Trân trọng kính mời</div>
                    <div class="invitename">{{$guest->name}}</div>
                    <div class="des">
                        Đến dự buổi tiệc chung vui cùng gia đình chúng tôi tại
                    </div>
                    <div class="address">
                        {{$event->address}}
                    </div>
                    <div class="time">Vào lúc <span>{{$event->time}}</span></div>
                    <div class="day">
                        {{-- Thứ <span>6</span>, Ngày <span>10/02/2023</span> --}}
                        {{$event->date}}
                    </div>
                    <div class="end">
                        Sự hiện diện của quý khách là niềm vinh hạnh của chúng
                        tôi!
                    </div>
                </div>
            </div>
            <style class="hover"></style>
        </div>
        <div class="buttonwrap">
            <button>Xác nhận tham dự</button>
            <a href="{{ route('userwebs.index', $user) }}" >Thông tin cưới</a>
        </div>
        <script src="{{asset('card/js.js')}}"></script>
    </body>
</html>
