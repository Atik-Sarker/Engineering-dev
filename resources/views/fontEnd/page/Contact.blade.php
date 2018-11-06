@extends('fontEnd.layouts.master')

@section('content')

<section id="contact_section" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title padding0">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <form action="" method="get" accept-charset="utf-8" id="form" class="cmn_form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s">
                            <label>YOUR NAME</label>
                            <input type="text" name="name" placeholder="YOUR NAME">
                            <label>YOUR E-MAIL</label>
                            <input type="email" name="phone" placeholder="YOUR EMAIL">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0s">

                            <label>YOUR MOBILE</label>
                            <input type="text" name="name" placeholder="YOUR MOBILE">
                            <label>FOR INQUIRY</label>
                            <input type="text" name="email" placeholder="FOR INQUIRY">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
                            <textarea name="message" placeholder="MESSAGE"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center  wow zoomIn" data-wow-duration="2s" data-wow-delay="0s">
                            <button type="submit" class="about-company-btn"> Submit </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-----------------------Contact-section end---------------------->
<section id="contact-area" class="section-padding contact-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contact-text">
                    <div class="section-title padding0">
                        <h2>Mailing Address</h2>
                        <p class="company-title">Riant Engineering Ltd</p>
                    </div>
                    <ul class="contact-link">
                        <li class="item">
                            <div class="icon-box">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <strong>Address</strong>
                            <p>House 3(2nd Floor), Road 13/A, Sector 11 Uttara, Dhaka.</p>
                        </li>
                        <li class="item">
                            <div class="icon-box">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <strong>Phone</strong>
                            <p>+88 02 8991153 & +8801672455986</p>
                        </li>
                        <li class="item">
                            <div class="icon-box">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </div>
                            <strong>Email</strong>
                            <p>info@riantengineersltd.com </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!--col end-->
            <div class="col-sm-6">
                <div class="mailing-image">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116792.66199254133!2d90.31250648839242!3d23.82675201132764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41246d443d7%3A0xe58f95ba880cbc2d!2sRiant+Engineers+Ltd.!5e0!3m2!1sen!2sbd!4v1540967407691" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <!--col end-->

        </div>
        <!--row end-->
    </div>
    <!--container end-->
    <!--container end-->
</section>


@endsection