@extends('resume.admin.master')
@section('title-name')
Chart Page
@endsection
@section('content')

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Charts</h2>
            <!--// main-heading -->

            <!-- Circle Bar chart -->
            <div class="outer-w3-agile mt-3">

                <h4 class="tittle-w3-agileits mb-4">Circle Bar Chart</h4>
                <div class="c-bars d-lg-flex justify-content-around">
                <div class="circle-1-w3">
                <svg class="circular-bars" x="0px" y="0px" xml:space="preserve">

                    <g id="circleBarCharts">

                        <!-- Web Circle Bar Chart -->
                        <g id="circleBar-web-group">
                            <text id="circleBar-web-text" opacity="0" x="200" y="143">WEB</text>
                            <g id="circleBar-web-chart" transform="translate(215,150)"></g>
                            <clippath id="circleBar-web-clipPath">
                                <rect id="circleBar-web-clipLabels" x="205" y="215" width="180" height="0"></rect>
                            </clippath>
                            <g id="circleBar-web-legend" clip-path="url(#circleBar-web-clipPath)">
                                <text id="circleBar-web-values" transform="translate(222,225)"></text>
                                <text id="circleBar-web-labels" transform="translate(277,225)"></text>
                            </g>
                        </g>
                        <!-- END: Web Circle Bar Chart -->

                    </g>

                </svg>
                    
                </div>
                <div class="circle-2-w3">
                    <svg class="circular-bars" x="0px" y="0px" xml:space="preserve">

                    <g id="circleBarCharts">

                        <!-- Mobile Circle Bar Chart -->
                        <g id="circleBar-mobile-group">
                            <text id="circleBar-mobile-text" opacity="0" x="187" y="155">MOBILE</text>
                            <g id="circleBar-mobile-chart" transform="translate(215,150)"></g>
                            <clippath id="circleBar-mobile-clipPath">
                                <rect id="circleBar-mobile-clipLabels" x="205" y="215" width="150" height="0"></rect>
                            </clippath>
                            <g id="circleBar-mobile-legend" clip-path="url(#circleBar-mobile-clipPath)">
                                <text id="circleBar-mobile-values" transform="translate(222,225)"></text>
                                <text id="circleBar-mobile-labels" transform="translate(277,225)"></text>
                            </g>
                        </g>
                        <!-- END: Mobile Circle Bar Chart -->
                    </g>

                </svg>
                    
            
            </div>
            </div>
            </div>
            <!--// Circle Bar chart -->

            <!-- Simple-chart -->
            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Quadratic Curve</h4>
                <canvas class="chart1"></canvas>
            </div>
            <!--// Simple-chart -->

            <!-- Dual-section-chart -->
            <div class="container-fluid">
                <div class="row d-xl-flex justify-content-between">
                    <!-- percentage-circles -->
                    <div class="outer-w3-agile mt-3 text-center col-xl-7">
                        <h4 class="tittle-w3-agileits mb-4">Circle Charts</h4>
                        <ul class="percentg-circles-w3ls d-sm-flex justify-content-around">
                            <li>
                            <div class="chart circle-one">
                                <div class="figure">
                                  <div class="pie"></div>
                                </div>
                                <div class="data-table">
                                  <span class="percent">36%</span>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="chart circle-one">
                                <div class="figure">
                                  <div class="pie"></div>
                                </div>
                                <div class="data-table">
                                  <span class="percent">26%</span>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="chart circle-one">
                                <div class="figure">
                                  <div class="pie"></div>
                                </div>
                                <div class="data-table">
                                  <span class="percent">36%</span>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="chart circle-one">
                                <div class="figure">
                                  <div class="pie"></div>
                                </div>
                                <div class="data-table">
                                  <span class="percent">5%</span>
                                </div>
                            </div>
                            </li>
                          </ul>
                    </div>
                    <!--// percentage-circles -->
                    <div class="outer-w3-agile mt-3 text-center col-xl-4 ml-xl-3">
                        <h4 class="tittle-w3-agileits mb-4">Gauge Meter</h4>
                        <div class="w3_agile_gauge_meter">
                            <div class="js-gauge js-gauge--1 gauge"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Dual-section-chart -->
@endsection