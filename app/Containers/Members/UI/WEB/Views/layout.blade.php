<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Document</title>
</head>
<body>
<div class="multilevel-offcanvas off-canvas position-right" id="offCanvasRight" data-off-canvas>



    <ul class="vertical menu">
        <li><a href='{!! route('web_members_index') !!}'>Members</a></li>
        <li><a href='{!! route('web_board_index') !!}'>Board</a></li>
        <li><a href='{!! route('web_committee_index') !!}'>Committee</a></li>
        <li><a href='{!! route('web_boardmembers_index') !!}'>Board Members</a></li>
    </ul>
    <ul class="menu simple social-links">
        <li><a href="#"target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-github-square" aria-hidden="true"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
    </ul>
</div>

<div class="off-canvas-content" data-off-canvas-content>
    <div class="nav-bar">
        <div class="nav-bar-left">
            <a class="nav-bar-logo"><img class="logo" src="https://placehold.it/150x30"></a>
        </div>
        <div class="nav-bar-right">
            <ul class="menu">
                <li class="hide-for-small-only"><a href="#">TOUR</a></li>
                <li class="hide-for-small-only"><a href="#">LOGIN</a></li>
                <li>
                <li>
                    <button class="offcanvas-trigger" type="button" data-open="offCanvasRight">
                        <span class="offcanvas-trigger-text hide-for-small-only">Menu</span>
                        <div class="hamburger">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </button>
                </li>
            </ul>
        </div>
    </div>


    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>

<script src= {{ asset("/js/app.js") }}></script>
<script>
   $(document).foundation();
</script>
</html>