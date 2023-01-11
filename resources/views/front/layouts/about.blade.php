<!-- ======= About Section ======= -->
<section id="about" class="about mt-5">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>About Us</h2>
            <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-7 position-relative about-img"
                 {{--                     main imge--}}
                 style="background-image: url({{ asset("images/about/$abouts->main_image") }}) ;" data-aos="fade-up"
                 data-aos-delay="150">
                <div class="call-us position-absolute">
                    <h4>Book a Table</h4>
                    {{--                        phone--}}
                    <p>{{$abouts->phone}}</p>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                <div class="content ps-0 ps-lg-5">
                    {{--                        title--}}
                    <p class="fst-italic">
                        {{$abouts->title}}
                    </p>
                    {{--                        des--}}
                    <ul>
                        <li><i class="bi bi-check2-all"></i>
                            {{$abouts->decryption}}
                        </li>
                    </ul>
                    {{--                        footer--}}
                    <p>
                        {{$abouts->footer}}
                    </p>

                    <div class="position-relative mt-4">
                        {{--                             other images--}}
                        <img src="{{asset("images/about/$abouts->other_image")}}" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-box">
                    <h3>Why Choose Yummy?</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus
                        optio ad corporis.
                    </p>
                    <div class="text-center">
                        <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
            </div><!-- End Why Box -->

            <div class="col-lg-8 d-flex align-items-center">
                <div class="row gy-4">

                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-clipboard-data"></i>
                            <h4>Corporis voluptates officia eiusmod</h4>
                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                aliquip</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-gem"></i>
                            <h4>Ullamco laboris ladore pan</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-inboxes"></i>
                            <h4>Labore consequatur incidid dolore</h4>
                            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                        </div>
                    </div><!-- End Icon Box -->

                </div>
            </div>

        </div>

    </div>
</section><!-- End Why Us Section -->

<!-- ======= Stats Counter Section ======= -->
<section id="stats-counter" class="stats-counter">
    <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                              class="purecounter"></span>
                    <p>Clients</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                              class="purecounter"></span>
                    <p>Projects</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                              class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                              class="purecounter"></span>
                    <p>Workers</p>
                </div>
            </div><!-- End Stats Item -->

        </div>

    </div>
</section><!-- End Stats Counter Section -->