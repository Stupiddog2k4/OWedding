<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,800;1,300;1,400;1,700&family=Sigmar+One&display=swap"
            rel="stylesheet"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="{{asset('profile/reset.css')}}" />
        <link rel="stylesheet" href="{{asset('profile/style.css')}}" />
    </head>
    <body>
        <div class="header">
            <div class="header_logo">
                <a href="{{route('users.index')}}">
                    <img
                        class="logo-white"
                        width="229"
                        height="93"
                        src="{{asset('image/Picture2.png')}}"
                    />
                </a>
            </div>
            <nav class="header_nav">
                <ul class="header_ul">
                    <li class="header_menuitem">
                        <a href="#">Xem hướng dẫn</a>
                    </li>
                    <li class="header_menuitem">
                        <a href="#">Công cụ lập kế hoạch</a>
                    </li>
                    <li class="header_menuitem">
                        <a href="#">Cặp đôi đã tạo</a>
                    </li>
                    <li class="header_menuitem">
                        <a href="#">Điểm nổi bật</a>
                    </li>
                    <li class="header_menuitem"><a href="#">Bảng giá</a></li>
                </ul>
            </nav>
            <button class="Button">Đăng Xuất</button>
        </div>
        <div class="profile">
            <div class="profile-content">
                <?php
                    $user = session('user');

                ?>
                
                    <div class="profile_imgchange">
                        <div class="profile_imgchange-img">
                            <img
                                src="{{asset('storage/'. $image)}}" 
                                alt=""
                                class="profile_imgchange-img-avatar"
                            />
                        </div>
                    </div>
                    
                    
                <!-- <div class="tinasfnaskfmsaca">
                    <address>sadasd
                        <datagrid>sadsa</datagrid>
                    </address>
                </div> -->
                <div class="profile-content_changepass"></div>
            </div>
        </div>
    </body>
</html>
