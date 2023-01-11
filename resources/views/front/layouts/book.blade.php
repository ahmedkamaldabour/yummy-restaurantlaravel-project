<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Book A Table</h2>
            <p>Book <span>Your Stay</span> With Us</p>
        </div>

        <div class="row g-0">

            <div class="col-lg-4 reservation-img"
                 style="background-image: url( {{asset('front')}}/assets/img/reservation.jpg);" data-aos="zoom-out"
                 data-aos-delay="200"></div>

            <div class="col-lg-8 d-flex align-items-center reservation-form-bg">

                <form action="{{route('book.store')}}" method="post" role="form" class="php-email-form"
                      data-aos="fade-up" data-aos-delay="100">
                    @csrf
                    @include('message')
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                   value="{{old('name')}}" data-rule="minlen:4"
                                   data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="email" class="form-control" name="email" id="email"
                                   value="{{old('email')}}" placeholder="Your Email" data-rule="email"
                                   data-msg="Please enter a valid email">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                                   value="{{old('phone')}}"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="date" class="form-control" name="date" id="date" placeholder="Date"
                                   value="{{old('date')}}"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars">

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="time" class="form-control" name="time" id="time" placeholder="Time"
                                   value="{{old('time')}}">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="number" class="form-control" name="number_of_people" id="number_of_people"
                                   placeholder="# of people" data-rule="minlen:1"
                                   data-msg="Please enter at least 1 chars" value="{{old('number_of_people')}}">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5"
                                      placeholder="Message">{{old('message')}}</textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your booking request was sent. We will call back or send an Email
                            to confirm your reservation. Thank you!
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Book a Table</button>
                    </div>
                </form>
            </div><!-- End Reservation Form -->

        </div>

    </div>
</section>