@extends('layouts.app')
@section('content')
@section('title')
    Aboute me pages
@endsection
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">About me</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Me</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <section class="about about__style__two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about__image">
                        <img src="assets/img/images/about_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">
                            <span class="sub-title">01 - About me</span>
                            <h2 class="title">I have transform your ideas into remarkable digital products</h2>
                        </div>
                        <div class="about__exp">
                            <div class="about__exp__icon">
                                <img src="assets/img/icons/about_icon.png" alt="">
                            </div>
                            <div class="about__exp__content">
                                <p><span>20+ Years Experience</span> In this game, Means <br> Product Designing</p>
                            </div>
                        </div>
                        <p class="desc">I love to work in User Experience & User Interface designing. Because I love
                            to solve the design problem and find easy and better solutions to solve it. I always try my
                            best to make good user interface with the best user experience. I have been working as a UX
                            Designer</p>
                        <a href="about.html" class="btn">Download my resume</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about__info__wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="about-tab" data-bs-toggle="tab"
                                    data-bs-target="#about" type="button" role="tab" aria-controls="about"
                                    aria-selected="true">About</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills"
                                    type="button" role="tab" aria-controls="skills"
                                    aria-selected="false">Skills</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                    data-bs-target="#education" type="button" role="tab" aria-controls="education"
                                    aria-selected="false">education</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="about" role="tabpanel"
                                aria-labelledby="about-tab">
                                <p class="desc">There are many variations of passages of Lorem Ipsum available, but
                                    the majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable. If you are going to use
                                    a passage of lorem ipsum, you need to be sure there isn't anything embarrassing
                                    hidden in the middle of text. All the lorem ipsum generators on the Internet tend to
                                    repeat predefined chunks as necessary, making this the first true generator on the
                                    internet. It uses a dictionary of over 200 Latin words, combined with a handful of
                                    model sentence structures, to generate Lorem Ipsum which looks reasonable. The
                                    generated lorem ipsum is therefore always free from repetition, injected humour, or
                                    non-characteristic words etc.</p>
                                <ul class="about__exp__list">
                                    <li>
                                        <h5 class="title">User experience design - (Product Design)</h5>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which dont look even slightly believable. If you are going
                                            to unseery.</p>
                                    </li>
                                    <li>
                                        <h5 class="title">Web and user interface design - Development</h5>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which dont look even slightly believable. If you are going
                                            to use a passage of lorem ipsum.</p>
                                    </li>
                                    <li>
                                        <h5 class="title">Interaction design - Animation</h5>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which dont look even slightly believable.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                <div class="about__skill__wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">HTML</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">70%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Brain Storming</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 90%;"
                                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">90%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">CSS</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">50%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">JavaScript</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 65%;"
                                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">65%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">PHP</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%;"
                                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">80%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Laravel</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 45%;"
                                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">45%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">User Research</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 55%;"
                                                        aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">55%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                <div class="about__award__wrap">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="assets/img/images/awards_01.png" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">Best ux designer award in 2002</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum
                                                        available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="assets/img/images/awards_02.png" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">BBA final examination 2001</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum
                                                        available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="assets/img/images/awards_03.png" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">User research award 2020</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum
                                                        available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="assets/img/images/awards_04.png" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">Dsigning award 2021</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum
                                                        available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour,</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="education" role="tabpanel"
                                aria-labelledby="education-tab">
                                <div class="about__education__wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">DPR Engineering Dhaka University</h3>
                                                <span class="date">2004 – 2016</span>
                                                <p>There are many variations of passages of Lorem Ipsum available,
                                                    but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour,There are many variations of passages of Lorem Ipsum
                                                    available, but the majority have suffered
                                                    alteration in some form, by injected humour.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">Product Designer at google</h3>
                                                <span class="date">2021 – Present</span>
                                                <p>There are many variations of passages of Lorem Ipsum available,
                                                    but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour,There are many variations of passages of Lorem Ipsum
                                                    available.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">Computer Science - england</h3>
                                                <span class="date">2008 – 2012</span>
                                                <p>There are many variations of passages of Lorem Ipsum available,
                                                    but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour,There are many variations of passages of Lorem Ipsum
                                                    available.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">Pro product design with udemey</h3>
                                                <span class="date">2016 - 2020</span>
                                                <p>There are many variations of passages of Lorem Ipsum available,
                                                    but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour,There are many variations of passages of Lorem Ipsum
                                                    available, but the majority have suffered
                                                    alteration in some form, by injected humour.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->


    <!-- services-area-end -->





</main>
@endsection
