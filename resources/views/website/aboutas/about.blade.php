@extends('Layouts.WebsiteLayout.Layout')
@section('body')

<!-- Page info section -->
<section class="page-info-section set-bg" data-setbg="img/page-top-bg/1.jpg" >
    <div class="container text-center">
        <h2>About Us</h2>
    </div>
</section>
<!-- Page info section end -->


<!-- about section -->
<section class="about-section spad">
    <div class="container">
        <div class="row about-box">
            <div class="col-md-6 about-img">
                <img src="img/about-1.jpg" alt="">
            </div>
            <div class="col-md-6">
                <div class="about-content">
                    <h2>Welcome to Diva</h2>
                    <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. <br>Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem.</p>
                </div>
            </div>
        </div>
        <div class="row about-box">
            <div class="col-md-6 about-img col-push">
                <img src="img/about-2.jpg" alt="">
            </div>
            <div class="col-md-6 col-pull">
                <div class="about-content">
                    <h2>Inspire</h2>
                    <p>Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus hendrerit, id lobortis leo luctus nec. </p>
                    <a href="#" class="site-btn">Download Brochure</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->
@endsection