
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW </title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/BMW_logo_%28gray%29.svg/480px-BMW_logo_%28gray%29.svg.png" type="">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=516f2fd4-f526-4961-93d9-526de36f1de2key&lang=en_US" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">
    <div id="content">
        <header>
            <div id="logo">
                <a href="">
                    <img src="https://www.bmw-m.com/etc/clientlibs/digitals2/clientlib/media/img/BMW_White_Logo.svg" alt="">
                    <span>BMW</span>
                </a>
            </div>
            <a href="/en">En</a>&nbsp;
            <a href="/fr">Fr</a>
{{--            <div id="reg_auth" onclick="$('#registration_popup').toggle();">--}}
{{--                <div id="btn">Registration</div>--}}
{{--            </div>--}}
{{--            <div id="registration_popup" class="popup" style="display:none;">--}}
{{--                <div class="popup-content">--}}
{{--                    <form method="post" action="{{route('login')}}">--}}
{{--                    <input id="name" type="text" name="name" placeholder="Username">--}}
{{--                    <input type="password" id="pass" name="password" placeholder="password">--}}
{{--                    <input type="submit" value="Login">--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
        </header>
        <nav>
            <div id="menuShow">
                <label for="toggle">&#9776;</label>
            </div>
            <input type="checkbox" name="" id="toggle">
            <div class="hideMenu">
                <a href="{{route('articles', [
    'lang' => \App::getLocale()
])}}">@lang('menu.articles')</a>
                <a href="{{route('newspost_form', [
    'lang' => \App::getLocale()
])}}">@lang('menu.new_post')</a>
            </div>
{{--            <div id="search">--}}
{{--                <span>search</span>--}}
{{--                <i class="fa fa-search" aria-hidden="true"></i>--}}
{{--            </div>--}}

        </nav>
    </div>

    <div>
        @yield('content')
    </div>


    <footer>
        <div id="site_name">
            <span>BMW M</span>
        </div>
        <div id="clear"></div>
        <div id="footer_menu">
            <a href="">B</a>
            <a href="">M</a>
            <a href="">W</a>
        </div>
        <div id="rights">
            <a href="">All rights reserved &copy; <?=date ('Y')?></a>
        </div>

    </footer>
</div>
</body>
</html>