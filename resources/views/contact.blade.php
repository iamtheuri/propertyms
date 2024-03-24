<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>

    @include('partials.navbar')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch</h3>

                                    <!-- Contact Form -->

                                    <form method="POST" action="/contact-form">
                                        @csrf
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Enter Username" value="{{old('name')}}">
                                                @error('name')
                                                <p style="color: brown;">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Enter your Email" value="{{old('email')}}">
                                                @error('email')
                                                <p style="color: brown;">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input class="form-control" name="phone" placeholder="Phone Number" title="Minimum 10 eg. 0712345678" value="{{old('phone')}}">
                                                @error('phone')
                                                <p style="color: brown;">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input class="form-control" name="message" placeholder="Message" value="{{old('message')}}">
                                                @error('message')
                                                <p style="color: brown;">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="SUBMIT" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>

                                    @if (session('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                    <h3>TALK TO US</h3>
                                    <p class="mb-4">Want to find us directly?</p>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Address:</span>
                                                <a href="#maps">MultiMedia University of Kenya</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Phone:</span> <a href="tel:+ 2547 9895 9256">+ 2547 9895 9256</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a href="mailto:theuridavid56@gmail.com">theuridavid56@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Website:</span> <a href="https://iamtheuri.netlify.app" target="_blank">iamtheuri</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="map" id="maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.657311788905!2d36.76590507448358!3d-1.3822586357375142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f059ba53cc253%3A0x84f65413371bebb!2sMulti%20Media%20University!5e0!3m2!1sen!2ske!4v1709228604865!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('partials.footer')
    @include('partials.scripts')


</body>

</html>