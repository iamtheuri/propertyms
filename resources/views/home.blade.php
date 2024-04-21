<!DOCTYPE html>
<html lang="en">

@include('partials.header')
@include('partials.navbar')

<body>

    <div class="hero-wrap js-fullheight" style="background-image: url('{{asset('image/bg.webp')}}')" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <h1 class="mb-4">Simplify Property Management with PropertyMS</h1>
                    <p><a href="/contact" class="btn btn-white">Contact us</a></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block services-wrap text-center">
                        <div class="img" style="background-image: url('{{asset('image/home-1.webp')}}')"></div>
                        <div class="media-body py-4 px-3">
                            <h3 class="heading">Simplify Property Management</h3>
                            <p>Easily manage more properties seamlessly.
                            </p>
                            <p><a href="#" class="btn btn-primary">Contact Us</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block services-wrap text-center">
                        <div class="img" style="background-image: url('{{asset('image/home-2.webp')}}')"></div>
                        <div class="media-body py-4 px-3">
                            <h3 class="heading">Reports and Statements</h3>
                            <p>Quickly generate property and tenant invoices with the click of a button.
                            </p>
                            <p><a href="#" class="btn btn-primary">Contact Us</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block services-wrap text-center">
                        <div class="img" style="background-image: url('{{asset('image/home-3.webp')}}')"></div>
                        <div class="media-body py-4 px-3">
                            <h3 class="heading">Effortless Communication</h3>
                            <p>Save time travelling from one apartment to another by communicating to tenants from
                                anywhere in our app via SMS.
                            </p>
                            <p><a href="#" class="btn btn-primary">Contact Us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Tenants Section</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url('{{asset('image/room-1.webp')}}')"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <h3 class="mb-3"><a href="#">5 Bedroom</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Max:</span> 6 Persons</li>
                                    <li><span>Size:</span> Very Large</li>
                                    <li><span>Price Range:</span> Ksh. 50,000</li>
                                    <li><span>Bed:</span> 5</li>
                                    <li><span>State:</span> Fully Furnished</li>
                                </ul>
                                <p class="pt-1"><a href="/contact" class="btn-custom px-3 py-2">Contact
                                        Us</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url('{{asset('image/room-2.webp')}}')"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <h3 class="mb-3"><a href="#">3 Bedroom</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Max:</span> 4 Persons</li>
                                    <li><span>Size:</span> Large</li>
                                    <li><span>Price Range:</span> Ksh. 30,000</li>
                                    <li><span>Bed:</span> 3</li>
                                    <li><span>State:</span> Fully Furnished</li>
                                </ul>
                                <p class="pt-1"><a href="#" class="btn-custom px-3 py-2">Contact Us</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img order-md-last" style="background-image: url('{{asset('image/room-3.webp')}}')"></a>
                        <div class="half right-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <h3 class="mb-3"><a href="#">2 Bedroom</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Max:</span> 3 Persons</li>
                                    <li><span>Size:</span> Medium</li>
                                    <li><span>Price Range:</span> Ksh. 20,000</li>
                                    <li><span>Bed:</span> 3</li>
                                    <li><span>State:</span> Furnished</li>
                                </ul>
                                <p class="pt-1"><a href="#" class="btn-custom px-3 py-2">Contact Us</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img order-md-last" style="background-image: url('{{asset('image/room-4.webp')}}')"></a>
                        <div class="half right-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <h3 class="mb-3"><a href="#">Bedsitters</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Max:</span> 1 Persons</li>
                                    <li><span>Size:</span> Medium</li>
                                    <li><span>Price Range:</span> Ksh. 20,000</li>
                                    <li><span>Bed:</span> 3</li>
                                    <li><span>State:</span> Furnished</li>
                                </ul>
                                <p class="pt-1"><a href="#" class="btn-custom px-3 py-2">Contact Us</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 wrap-about">
                    <div class="img img-2 mb-4" style="background-image: url('{{asset('image/home-8.webp')}}')">
                    </div>
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section">
                        <div class="pl-md-5">
                            <h2>Landlords...</h2>
                        </div>
                    </div>
                    <div class="pl-md-5">
                        <p>Through property MS, you and your tenants can communicate
                            and resolve issues effectively. With features such as a real-time messaging system, SMS rent collection reminders, reports, and a comprehensive
                            maintenance reporting mechanism, Property MS is the perfect solution for for your needs!
                        </p>
                        <div class="row">
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span><i class="fa fa-user-secret"></i></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Data Security</h3>
                                    <p>Your data and that of your clients is safe and secure with us. No one apart from you can access your data, your dashboard or even contact your clients.
                                    </p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span><i class="fa fa-user"></i></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Include everyone</h3>
                                    <p>With their own customized dashboard, get clients to feel included in how things go in their apartment
                                    </p>
                                </div>
                            </div>

                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-workout"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Reports</h3>
                                    <p>Manage property you own, view details, create new, remove unwanted tenants all at ease.
                                    </p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span><i class="fa fa-wifi"></i></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Real-Time Messaging</h3>
                                    <p>Send reminders to your clients from the comfort of our system, wherever you are and receive maintence updates from clients easily.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
    @include('partials.scripts')


</body>

</html>