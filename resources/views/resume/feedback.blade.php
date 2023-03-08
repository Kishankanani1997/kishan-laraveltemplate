@extends('resume.master')
@section('title-name')
Feedback page
@endsection
@section('Content')
    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-sm-5 pt-4">Feedback Page</h4>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Feedback Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- contact -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-lg-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small">Get In Touch</h5>
                <h3 class="title-style">Give Your Valuable Feedback</h3>
            </div>
            <div class="row contact-block">
                <div class="col-md-8 contact-right mt-md-0 mt-5 ps-lg-0 mx-auto">
                <!--here we write code for validation of message-->

                @if($errors->any())
                    <div class='alert alert-danger'>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
 <!--here we pass flash data message-->

 @if(Session('success'))
    <div class="alert alert-success">
        <span class="text-dark">{{ session('success')}}</span>
    </div>
 @endif
  
 <!-- Create Post Form -->


                    <form method="post">
                        @csrf
                            <input type="text" name="Name" placeholder="*Your Name*"
                                class="contact-input">
                            <input type="email" name="Email" placeholder="*Your Email*"
                                class="contact-input">
                            <input type="text" name="Number"  placeholder="*Your Number*"
                                class="contact-input">
                            <input type="text" name="Subject" placeholder="*Your subject*"
                                class="contact-input">
                            <textarea name="Message" placeholder="*Type your message here*"></textarea>                        
                            <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section
    <!-- //contact -->
    @endsection

   