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
                            <h3 class="heading">Automate Property Management</h3>
                            <p>Easily scale and manage more properties by automating repetitive tasks.
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
                            <p>Quickly generate tenant, property and landlord statements with the click of a button.
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
                    <h2>Manage rentals seamlessly</h2>
                    <p>A modern property management system that helps landlords and tenants communicate
                        and resolve issues effectively. With features such as a real-time messaging system, automated
                        rent collection reminders, and a comprehensive
                        maintenance reporting mechanism, Property MS is the perfect solution for improving the
                        landlord-tenant relationship and optimizing property management</p>
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section">
                        <div class="pl-md-5">
                            <h2 class="mb-2">We offer...</h2>
                        </div>
                    </div>
                    <div class="pl-md-5">
                        <p>Property MS is mainly meant for making Rental Property Management for Landlords as seamless
                            as possible. To do this, we go to the extent of allowing tenants to view available
                            properties so they can know if we fit their needs. Not
                            finding what you want? Head on to contact us and see our endless scope of accomodations we
                            have just for you by clicking <a href="/contact" style="text-decoration: underline;">here!</a>
                            We also offer Bed & Breakfast (Air BnBs).
                            Our BnBs come featured with the following features:
                        </p>
                        <div class="row">
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span><i class="fa fa-user-secret"></i></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Security Cameras</h3>
                                    <p>We have biometrics and well equiped security cameras that can see well in the
                                        dark to help ensure you dont get intruders mascarading their way into your
                                        property.
                                    </p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span><i class="fa fa-user"></i></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Air Conditioning</h3>
                                    <p>Great airr flow in our premises with adequate ventilation ensuring conditions
                                        like asthma patients are taken care of
                                    </p>
                                </div>
                            </div>

                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-workout"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Fully Furnished</h3>
                                    <p>Our BnBs come fully furnished and equiped with features that make it 100%
                                        self-contained.
                                    </p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span><i class="fa fa-wifi"></i></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Free Wifi</h3>
                                    <p>In the fast-paced evolving world, our premises come equiped with fast, free
                                        internet connection.
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