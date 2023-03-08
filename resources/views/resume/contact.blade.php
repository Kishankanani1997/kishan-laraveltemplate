@extends('resume.master')
@section('title-name')
Contact-Us page
@endsection
@section('Content')
    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-sm-5 pt-4">Contact Us</h4>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Contact Us</li>
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
                <h3 class="title-style">Contact Me</h3>
            </div>
            <div class="row contact-block">
                <div class="col-md-6 contact-left pe-lg-5">
                    <h3 class="mb-sm-4 mb-3">Contact Info</h3>
                    <p class="cont-para mb-sm-5 mb-4">I enjoy discussing new projects and design challenges. Please
                        share as
                        much info, as possible so
                        we can get the most out of our first catch-up.</p>
                    <div class="cont-details">
                        <p><i class="fas fa-map-marker-alt"></i>University Road, Rajkot.</p>
                        <p><i class="fas fa-phone-alt"></i><a href="Mob:+91 90901 90901">+91 90901 90901</a></p>
                        <p><i class="fas fa-envelope-open-text"></i><a href="mailto:example@mail.com"
                                class="mail">info@kishan.com</a></p>
                    </div>
                    <h4 class="mb-3 mt-5">Follow Me</h4>
                    <ul class="social-icons-contact">
                        <li>
                            <a href="#twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#linkedinin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#github">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 contact-right mt-md-0 mt-5 ps-lg-0">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                        <div class="input-grids">
                            <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*"
                                class="contact-input" required="" />
                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*"
                                class="contact-input" required="" />
                            <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*"
                                class="contact-input" required="" />
                            <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="Website URL*"
                                class="contact-input" required="" />
                        </div>
                        <div class="form-input">
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*"
                                required=""></textarea>
                        </div>
                        <button class="btn btn-style">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- map -->
    <div class="map-iframe">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.79650098482!2d70.77343626134258!3d22.28569720492988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca248c77c099%3A0xdf5ac10af64ac8ee!2sTOPS%20Technologies!5e0!3m2!1sen!2sin!4v1675858929381!5m2!1sen!2sin" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- //contact -->
    @endsection

   