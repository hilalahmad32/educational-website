<div>
    <x-slot name="title">Offer</x-slot>
    <!-- hero start -->
    <section class="other__hero">
        <div class="container">
            <h1 class="text-center">
                What We Offer
            </h1>
        </div>
    </section>
    <!-- hero end -->
    <!-- heading start -->
    <section class="study__heading">
        <h1>Our services which we are provide</h1>
    </section>
    <!-- heading end -->
    <!-- offer start -->
    <section class="offer">
        <div class="container">
            <div class="row">
                @forelse ($offers as $offer)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 px-4 my-3">
                        <div class="offer__card">
                            <div class="offer__header">
                                <i class="fa-solid fa-square-poll-vertical"></i>
                            </div>
                            <div class="offer__body">
                                <h1 class="study__title">{{ $offer->title }}</h1>
                                <p class="study__sub__title">
                                    {{ $offer->description }}
                                </p>
                                <button class="study__btn">Read More</button>
                            </div>
                        </div>
                    </div>
                @empty
                    <h2>Record not found</h2>
                @endforelse

            </div>
        </div>
    </section>
    <!-- offer end -->
    <!-- testimonial start -->
    <div class="container">
        <section class="testimonial">
            <p class="testimonial__sub__heading">Testimonial</p>
            <h1 class="testimonial__heading">What our students says about us</h1>
            <div class="testimonial__content">
                <div class="testimonial__carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-2">
                                <div class="textimonial__image">
                                    <img src="images/img1.png" alt="">
                                    <div class="textimonial__arrow">
                                        <i class="fa-solid fa-arrow-left" id="left__testimonial"></i>
                                        <i class="fa-solid fa-arrow-right" id="right__testimonial"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 my-2">
                                <div class="testimonial__contents">
                                    <div class="testimoinial__star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p>
                                        Eloren lqsum is simply dummy text of the printing.Lorem Iqsum has been the
                                        industry’s standard. when an unknown printer took scrambled.
                                    </p>
                                    <div class="testimonial__profile">
                                        <div class="left__testimonial__profile">
                                            <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                alt="">
                                        </div>
                                        <div class="right__testimonial__profile">
                                            <h1 class="profile__heading">Lucas Henry</h1>
                                            <p class="profile__subheading">Web Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>
    <!-- testimonial end -->
    <!-- contact section start -->
    <section class="contact study__contact">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="contact__left__side study__contact_content">
                        <h3>Contact Us</h3>
                        <h1>How can we help?</h1>
                        <p> You can start and finish one of these popular courses in under a day - for free! Check out
                            the list below..
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="contact__right__side study__contact__right">
                        <div class="form">
                            <form action="">
                                <div class="my-3">
                                    <label for="">Name:</label>
                                    <input type="text" class="form__control" name="fullname" placeholder="Full Name"
                                        id="">
                                </div>
                                <div class="my-3">
                                    <label for="">Email:</label>
                                    <input type="email" class="form__control" name="email"
                                        placeholder="Your Email Address" id="">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="my-3">
                                            <label for="">Country:</label>
                                            <select name="" id="" class="form__control">
                                                <option value="">Canda</option>
                                                <option value="">India</option>
                                                <option value="">Pakistan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-3">
                                            <label for="">Intake:</label>
                                            <select name="" id="" class="form__control">
                                                <option value="">Canda</option>
                                                <option value="">India</option>
                                                <option value="">Pakistan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="my-3">
                                            <label for="">Preffered course:</label>
                                            <select name="" id="" class="form__control">
                                                <option value="">Canda</option>
                                                <option value="">India</option>
                                                <option value="">Pakistan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-3">
                                            <label for="">Source of funding:</label>
                                            <select name="" id="" class="form__control">
                                                <option value="">Canda</option>
                                                <option value="">India</option>
                                                <option value="">Pakistan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__btn">
                                    <button>Book Appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->
</div>
