<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us || Online Rental Agreement</title>
    <?php
    require "includes/head.php";
    ?>
</head>

<body>
    <div class="page-wrapper">
        <?php
        require "includes/header.php";
        ?>
        <!-- Page Banner Start -->
        <section
            class="page-banner-area overlay py-150 rpy-120 rel z-1 bgs-cover text-center d-flex flex-column align-items-center justify-content-center"
            style="background-image: url(Images/rent-img84.jpg); height: 400px;">
            <div class="container">
                <div
                    class="banner-inner py-4 rpt-60 text-white d-flex flex-column align-items-center justify-content-center">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Contact Us
                    </h1>
                    <nav aria-label="breadcrumb d-flex flex-column align-items-center justify-content-center">
                        <ol class="breadcrumb justify-content-center align-itemms-center" data-aos="fade-up"
                            data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- Contact Page Start -->
        <section class="contact-page py-4 rpy-100">
            <div class="container py-2">
                <div class="row gap-100 align-items-center">
                    <div class="col-lg-5">
                        <div class="contact-info-part">
                            <div class="section-title mb-50" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <h2>Get in Touch With Us</h2>
                                <p>Looking for a hassle-free and legally compliant rent agreement? We're here to help!
                                    Reach out today to create a customized agreement tailored to your needs. We offer
                                    fast, secure, and fully digital signing options for both landlords and tenants. Let
                                    us take the complexity out of your rental process.</p>
                            </div>
                            <div class="contact-info-item style-two" data-aos="fade-up" data-aos-delay="50"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Location</span>
                                    <span class="text">211, Paras Chambers,<br>
                                        Above BOI, Near Laxminarayan Theatre,<br>
                                        Pune</span>
                                </div>
                            </div>
                            <div class="contact-info-item style-two" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="icon">
                                    <i class="far fa-envelope-open-text"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Email Address</span>
                                    <span class="text">
                                        <a href="mailto:support@gmail.com">support@gmail.com</a>
                                    </span>
                                </div>
                            </div>
                            <div class="contact-info-item style-two" data-aos="fade-up" data-aos-delay="150"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="icon">
                                    <i class="fal fa-phone-volume"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Make A Call</span>
                                    <span class="text">
                                        <a href="calto:8408009007">8408009007</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form br-10 bgc-lighter rmt-60" name="contact-form" data-aos="fade-left"
                            data-aos-duration="1500" data-aos-offset="50">
                            <form id="contactForm" class="contactForm" name="contactForm"
                                action="assets/php/form-process.php" method="post">
                                <img class="shape-one" src="assets/images/shapes/star-yellow-shape.png"
                                    alt="Star Shape">
                                <img class="shape-two" src="assets/images/shapes/star-black-shape.png" alt="Star Shape">
                                <h5>Send Us Message</h5>
                                <div class="row mt-30">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="name" name="name" class="form-control" value=""
                                                placeholder="Full Name" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Contact Number</label>
                                            <input type="text" id="name" name="name" class="form-control" value=""
                                                placeholder="Contact Number" required
                                                data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email ID</label>
                                            <input type="email" id="email" name="email" class="form-control" value=""
                                                placeholder="Email ID" required data-error="Please enter your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" id="subject" name="subject" class="form-control" value=""
                                                placeholder="Subject" required data-error="Please enter your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea name="message" id="message" class="form-control" rows="4"
                                                placeholder="Write Message" required data-error="Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn">Submit <i
                                                    class="far fa-arrow-right"></i></button>
                                            <div id="msgSubmit" class="hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Page End -->


        <!-- Location Map Area Start -->
        <div class="contact-page-map">
            <div class="our-location">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30269.21975725142!2d73.8644695!3d18.4993946!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c0108d04fee9%3A0xf3d17f691e155bef!2sBank%20of%20India!5e0!3m2!1sen!2sin!4v1747976565377!5m2!1sen!2sin"
                    style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- Location Map Area End -->

        <div class="mt-5">
            <?php
            require "includes/testimonials.php";
            require "includes/faq.php";
            require "includes/footer.php";
            ?>
        </div>
    </div>

    <?php
    require "includes/scripts.php";
    ?>

</body>

</html>