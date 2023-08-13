@extends('layouts.template')
@section('content')
    @include('layouts.contact_header')
    <!-- ==================== Start Contact ==================== -->

    <section class="contact-crev section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sec-lg-head mb-80">
                        <h6 class="dot-titl-non mb-10">Get In Touch</h6>
                        <h2 class="fz-50">Let's get in <br> touch with us.</h2>
                        <p class="fz-15 mt-10">If you would like to work with us or just want to get in
                            touch, we’d love to hear from you!</p>
                        <div class="phone fz-30 fw-600 mt-30 underline">
                            <a href="#0">+1 123 456 78 90</a>
                        </div>
                        <ul class="rest social-text d-flex mt-60">
                            <li class="mr-30">
                                <a href="#0">Facebook</a>
                            </li>
                            <li class="mr-30">
                                <a href="#0">Twitter</a>
                            </li>
                            <li class="mr-30">
                                <a href="#0">LinkedIn</a>
                            </li>
                            <li>
                                <a href="#0">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 valign">
                    <div class="full-width">
                        <form id="contact-form" method="post" action="https://ui-themez.smartinnovates.net/items/geekfolio/dark/contact.php">

                            <div class="messages"></div>

                            <div class="controls row">

                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_name" type="text" name="name" placeholder="Name"
                                               required="required">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                               required="required">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-30">
                                        <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                                      required="required"></textarea>
                                    </div>
                                    <div class="mt-30">
                                        <button type="submit" class="butn butn-md butn-bord radius-30">
                                            <span class="text">Let's Talk</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
