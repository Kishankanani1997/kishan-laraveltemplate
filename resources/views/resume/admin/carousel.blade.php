@extends('resume.admin.master')
@section('title-name')
Carousel Page
@endsection
@section('content')
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Carousels</h2>
            <!--// main-heading -->

            <!-- Carousel content -->
            <section class="carousels-section">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Carousel-1 -->
                        <div class="outer-w3-agile col-lg mt-3 mr-lg-3">
                            <h4 class="tittle-w3-agileits mb-4">Basic Carousel</h4>
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{('admin/images/ban1.jpg')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{('admin/images/ban2.jpg')}}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{('admin/images/ban3.jpg')}}" alt="Third slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Carousel-1 -->
                        <!-- Carousel-2 -->
                        <div class="outer-w3-agile col-lg mt-3">
                            <h4 class="tittle-w3-agileits mb-4">Carousel with Controls</h4>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{('admin/images/ban4.jpg')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{('admin/images/ban5.jpg')}}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{('admin/images/ban6.jpg')}}" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!--// Carousel-2 -->
                    </div>
                </div>
                <!-- Carousel-3 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Carousel with Indicators</h4>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{('admin/images/ban1.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{('admin/images/ban2.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{('admin/images/ban3.jpg')}}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!--// Carousel-3 -->
                <!-- Carousel-4 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Carousel with Captions</h4>
                    <div id="carouselExampleIndicators1" class="carousel slide text-carousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{('admin/images/ban4.jpg')}}" alt="First Image">
                                <div class="carousel-caption">
                                    <h5>Heading 1</h5>
                                    <p class="paragraph-agileits-w3layouts text-white">Description goes here</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{('admin/images/ban5.jpg')}}" alt="Second Image">
                                <div class="carousel-caption">
                                    <h5>Heading 2</h5>
                                    <p class="paragraph-agileits-w3layouts text-white">Description goes here</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{('admin/images/ban6.jpg')}}" alt="Third Image">
                                <div class="carousel-caption">
                                    <h5>Heading 3</h5>
                                    <p class="paragraph-agileits-w3layouts text-white">Description goes here</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!--// Carousel-4 -->

            </section>
@endsection

           