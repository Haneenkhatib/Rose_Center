<!DOCTYPE html>
<html>
<head>
    <title>Rose Center</title>
    @includeIf('Layouts.WebsiteLayout.header.header_meta')
    @yield('style')
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