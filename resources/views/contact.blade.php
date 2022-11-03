@extends('layouts/mainlayout')
@section('title', 'Contact')

@section('content')
    <div class="container my-5">
        <section class="mb-4">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Us</h2>
            <p class="text-center w-responsive mx-auto mb-5">Contact us through this form below or our contact information.
            </p>
            <div class="row">
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-3">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Message</label>
                                </div>

                            </div>
                        </div>
                    </form>

                    <div class="text-center text-md-left mb-5">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                    </div>
                    <div class="status"></div>
                </div>
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Surabaya, Indonesia</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+62 **** **** ****</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>wood_company@gmail.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection
