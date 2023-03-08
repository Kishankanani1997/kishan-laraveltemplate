@extends('resume.admin.master')
@section('title-name')
Register Page
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


    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Register</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Enter username" required="">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email" required="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="form-check text-center">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Agree the terms and policy</label>
                    </div>
                    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Submit</button>
                </form>
                <p class="paragraph-agileits-w3layouts mt-4">Already have account?
                    <a href="/Login-Page">Login</a>
                </p>
                <h1 class="paragraph-agileits-w3layouts mt-2">
                    <a href="/">Back to Home</a>
                </h1>
            </div>
        </div>
    </div>
@endsection