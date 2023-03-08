@extends('resume.admin.master')
@section('title-name')
Login Page
@endsection
@section('content')
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

<body>
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Login</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email" required="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="d-sm-flex justify-content-between">
                        <div class="form-check col-md-6 text-sm-left text-center">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="forgot col-md-6 text-sm-right text-center">
                            <a href="/Forgot-Password-Page">forgot password?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Login</button>
                </form>
                <p class="paragraph-agileits-w3layouts mt-4">Don't have an account
                    <a href="/Register-Page">Create an account</a>
                </p>
                <h1 class="paragraph-agileits-w3layouts mt-2">
                    <a href="/">Back to Home</a>
                </h1>
            </div>
        </div>
    </div>
@endsection
            
