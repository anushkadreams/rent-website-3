<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Agreement || Online Rental Agreement</title>
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
            style="background-image: url(Images/rent-img90.jpg); height: 400px;">
            <div class="container">
                <div
                    class="banner-inner py-4 rpt-60 text-white d-flex flex-column align-items-center justify-content-center">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Create
                        Agreement</h1>
                    <nav aria-label="breadcrumb d-flex flex-column align-items-center justify-content-center">
                        <ol class="breadcrumb justify-content-center align-itemms-center" data-aos="fade-up"
                            data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Create Agreement</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- create agreement section Start -->
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
                                <h5>Rent Details</h5>
                                <div class="row mt-30">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Months</label>
                                            <input type="number" id="months" name="months" class="form-control" value=""
                                                placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Rent Amount</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Deposit</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Agreement From Date</label>
                                            <input type="date" id="email" name="email" class="form-control" value=""
                                                placeholder="Email ID" required data-error="Please enter your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Square Feet</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Survey Number</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Address</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <h5>Owner Details</h5>
                                <div class="row mt-30">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Profession</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Age</label>
                                            <input type="number" id="months" name="months" class="form-control" value=""
                                                placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">PAN</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Address</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input type="email" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Contact No</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <h5>Tenant Details</h5>
                                <div class="row mt-30">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Profession</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Age</label>
                                            <input type="number" id="months" name="months" class="form-control" value=""
                                                placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">PAN</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Address</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input type="email" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Contact No</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <h5>Witness 1 Details</h5>
                                <div class="row mt-30">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Age</label>
                                            <input type="number" id="months" name="months" class="form-control" value=""
                                                placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Address</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <h5>Witness 2 Details</h5>
                                <div class="row mt-30">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Age</label>
                                            <input type="number" id="months" name="months" class="form-control" value=""
                                                placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Address</label>
                                            <input type="text" id="rent-amount" name="rent-amount" class="form-control"
                                                value="" placeholder="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="theme-btn">Submit <i
                                                class="far fa-arrow-right"></i></button>
                                        <div id="msgSubmit" class="hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- create agreement section End -->


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