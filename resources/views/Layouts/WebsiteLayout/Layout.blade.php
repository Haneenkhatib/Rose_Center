<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/94db484ed9.js"></script>
    <title>Rose Center</title>
    @includeIf('Layouts.WebsiteLayout.header.header_meta')
    @section('style')
        <style>
            .footer-section{
                background-color: black;
                padding-top:40px;
            }
            .col-lg-7 {
                padding-bottom: 25px;
            }

        </style>
    @show

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
@includeIf('Layouts.WebsiteLayout.header.header')
<!-- intro section -->
<section class="body-section" data-setbg="{{asset('websiteControl/img/intro-bg.jpg')}}">
    @yield('body')
</section>

@includeIf('Layouts.WebsiteLayout.Footer.Footer_meta')
@includeIf('Layouts.WebsiteLayout.Footer.Footer')
@yield('script')

</body>
</html>