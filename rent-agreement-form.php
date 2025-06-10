<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Agreement Form || Online Rental Agreement</title>
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
            style="background-image: url(assets/images/backgrounds/banner.jpg); height: 400px;">
            <div class="container">
                <div
                    class="banner-inner py-4 rpt-60 text-white d-flex flex-column align-items-center justify-content-center">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Rent
                        Agreement Form</h1>
                    <nav aria-label="breadcrumb d-flex flex-column align-items-center justify-content-center">
                        <ol class="breadcrumb justify-content-center align-itemms-center" data-aos="fade-up"
                            data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Rent Agreement Form</li>
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
                    <div class="col-lg-12">
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
                                                placeholder="Enter Your Email ID" required
                                                data-error="Please enter your Email">
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


        <div class="mt-5">
            <?php
            require "includes/footer.php";
            ?>
        </div>
    </div>

    <?php
    require "includes/scripts.php";
    ?>

</body>

</html>