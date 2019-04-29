<!DOCTYPE HTML>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Lap trình - @yield('title') </title>
    <link href="{{asset("public/css/style.css")}}" type="text/css" rel="stylesheet" />
</head>

<body>

<header>
    <nav>
        <ul>
            <li>Your menu</li>
        </ul>
    </nav>
</header>

@include('views.marquee',['mar_content'=>'Laravel 5.4 wellcome to'])
{{-- <div id="header">
@section('sidebar')
      this is a master blader
  @show

</div>--}}
<div id="content">

    @yield('content')
    @yield('footer')

</div>
<div id="footer"></div>
<section>

    <article>
        <header>
            <h2>Article title</h2>
            <p>Posted on <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
        </header>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </article>

    <article>
        <header>
            <h2>Article title</h2>
            <p>Posted on <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
        </header>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </article>

</section>

<aside>
    <h2>About section</h2>
    <p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
</aside>

<footer>
    <p>Copyright 2009 Your name</p>
</footer>

</body>

</html>