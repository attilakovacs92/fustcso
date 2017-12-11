<!-- Contact Container Start -->
<div class="container">
    <!-- Section Title Row Start -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="section-title">
                <h3>{{ trans('contact.title') }}</h3>
                <i class="fa fa-home" aria-hidden="true"></i> 2750 Nagykoros, Rákóczi 2. tanya | 
                <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+3653706272">+3653/706-272 </a> | 
                <i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:+36303037097">+3630/303-7097</a> |
                <i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:+36307579476">+3630/757-9476</a>
                <br>
                <span>{{ trans('contact.gps') }} 47.069063, 19.782284<span>
            </div>
        </div>
    </div> <!-- End of Section Title Row -->
    <!-- Contact Group Row Start -->
    <div class="row">
        <!-- Contact Group Start -->
        <div class="contact-group">
            <!-- Contact Widgets Column Start -->
            <div class="col-md-8 col-md-offset-2">
                <!-- Contact Form Start -->
                <div class="form">
                    <!-- Start Contact Form -->
                    <div class="contact-form">
                        <form action="{{ route('mail.contact') }}" method="post">
                            {{ csrf_field() }}
                            <ul>
                                <li>
                                    <input name="name" type="text" placeholder="{{ trans('contact.name') }}">
                                </li>
                                <li>
                                    <input name="email" type="email" placeholder="{{ trans('contact.email') }}">
                                </li>
                                <li>
                                    <input name="phone" type="phone" placeholder="{{ trans('contact.phone') }}">
                                </li>
                                <li>
                                    <textarea name="message" cols="20" rows="5" placeholder="{{ trans('contact.message') }}"></textarea>
                                </li>
                                <li>
                                    <input type="submit" value="{{ trans('contact.button') }}">
                                </li>
                            </ul>
                        </form>
                    </div> <!-- End of Contact Form -->
                </div> <!-- End of Contact Form -->
            </div> <!-- End of Contact Widgets Column -->
        </div> <!-- End of Contact Group -->
    </div> <!-- End of Contact Group Row -->
</div> <!-- End of Contact Container -->

