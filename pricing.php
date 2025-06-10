<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing || Rent Agreement Mumbai</title>
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
            style="background-image: url(Images/rent-img82.jpg); height: 400px;">
            <div class="container">
                <div
                    class="banner-inner py-4 rpt-60 text-white d-flex flex-column align-items-center justify-content-center">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Pricing
                        Package</h1>
                    <nav aria-label="breadcrumb d-flex flex-column align-items-center justify-content-center">
                        <ol class="breadcrumb justify-content-center align-itemms-center" data-aos="fade-up"
                            data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Pricing Plan</li>
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
                            <h4>Rent Agreement Mumbai Cost Calculator</h4>
                            <p>Fill in the form to calculate the price for Rent Agreement Registration in Mumbai. Enter
                                the details such as Period of agreement, Rent, the deposit amount, and the number of
                                visits needed.</p>
                            <form name="rentCalculatorForm" class="row contact-form" id="rentCalculatorForm"
                                method="POST">
                                <img class="shape-one" src="assets/images/shapes/star-yellow-shape.png"
                                    alt="Star Shape">
                                <img class="shape-two" src="assets/images/shapes/star-black-shape.png" alt="Star Shape">
                                <div class="row mt-30">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="months">Period of Agreement (months, max 60)</label>
                                            <input type="number" name="months" id="months" class="form-control editable"
                                                value="11" onkeyup="calculate()">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="tsd">Total Stamp Duty (0.25%)</label>
                                            <input type="text" name="tsd" id="tsd" class="form-control" value="500"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="rpm">Rent Per Month</label>
                                            <input type="number" name="rpm" id="rpm" class="form-control editable"
                                                value="15000" onkeyup="calculate()">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="rc">Registration Charges</label>
                                            <input type="number" name="rc" id="rc" class="form-control" value="1000"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="rd">Refundable Deposit</label>
                                            <input type="number" name="rd" id="rd" class="form-control editable"
                                                value="50000" onkeyup="calculate()">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="dhc">DHC Chargesr</label>
                                            <input type="number" name="dhc" id="dhc" class="form-control" value="300"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="nv">Number of Biometric Visits</label>
                                            <input type="number" name="nv" id="nv" class="form-control editable"
                                                value="1" onkeyup="calculate()">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="asp">Professional Fees</label>
                                            <input type="number" name="asp" id="asp" class="form-control" value="1000"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="vc">Biometric Visit Charges</label>
                                            <input type="number" name="vc" id="vc" class="form-control" value="300"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Hidden Input Fields for Discount and Total Charges -->
                            <input type="hidden" id="disInput" value="300">
                            <input type="hidden" id="tcpInput" value="2800">

                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="p-3 bg-light rounded d-flex align-items-center justify-content-between">
                                        <h6>Discount</h6>
                                        <p id="dis" class="mb-0 fw-bold">₹300</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="p-3 bg-light rounded d-flex align-items-center justify-content-between">
                                        <h6>Total Charges to be Paid (INR)</h6>
                                        <p id="tcp" class="mb-0 fw-bold">NAN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Page End -->

        <section class="pricing-area py-50 rpt-95 rpb-70 rel z-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-11">
                        <div class="section-title text-center mb-55 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <h2>Explore Our Pricing Package and choose your plan</h2>
                            <p>We Provide Best Pricing package to grow your lead capture development</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6 col-sm-10">
                        <div class="pricing-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="circle"><img src="assets/images/shapes/price-circle.png" alt="Shape"></div>
                            <div class="price"><span class="prev">$</span>19<span class="next">/month</span></div>
                            <div class="text">Smart Pricing for good services</div>
                            <h4 class="title">Regular Plan</h4>
                            <ul class="list">
                                <li>Email marketing</li>
                                <li>Unlimited chat history</li>
                                <li>Unlimited landing pages</li>
                                <li>Automation templates</li>
                                <li>Great Customer Support</li>
                                <li>Unlimited lead funnels</li>
                            </ul>
                            <a href="#" class="theme-btn">Choose Package <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-10">
                        <div class="pricing-item bgc-primary text-white aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <div class="circle"><img src="assets/images/shapes/price-circle.png" alt="Shape"></div>
                            <div class="price"><span class="prev">$</span>39<span class="next">/month</span></div>
                            <div class="text">Smart Pricing for good services</div>
                            <h4 class="title">Standard Plan</h4>
                            <ul class="list">
                                <li>Email marketing</li>
                                <li>Unlimited chat history</li>
                                <li>Unlimited landing pages</li>
                                <li>Automation templates</li>
                                <li>Great Customer Support</li>
                                <li>Unlimited lead funnels</li>
                            </ul>
                            <a href="#" class="theme-btn">Choose Package <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-10">
                        <div class="pricing-item text-white bgc-navyblue aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <div class="circle"><img src="assets/images/shapes/price-circle.png" alt="Shape"></div>
                            <div class="price"><span class="prev">$</span>93<span class="next">/month</span></div>
                            <div class="text">Smart Pricing for good services</div>
                            <h4 class="title">Premium Plan</h4>
                            <ul class="list">
                                <li>Email marketing</li>
                                <li>Unlimited chat history</li>
                                <li>Unlimited landing pages</li>
                                <li>Automation templates</li>
                                <li>Great Customer Support</li>
                                <li>Unlimited lead funnels</li>
                            </ul>
                            <a href="#" class="theme-btn style-two">Choose Package <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            require "includes/testimonials.php";
            require "includes/faq.php";
        ?>

        <?php
        require "includes/footer.php";
        ?>
    </div>
    <?php
    require "includes/scripts.php";
    ?>
    <script defer type="text/javascript">
    // Utility function to get element by ID
    function _(e) {
        return document.getElementById(e);
    }

    // Utility function to parse integer values from input
    function a$(v) {
        return parseInt(v) || 0;
    }

    // Main calculation function
    function calculate() {
        // Raw input values for validation
        var monthsRaw = _("months").value;
        var rpmRaw = _("rpm").value;
        var rdRaw = _("rd").value;

        // Parsed integer values
        var months = a$(monthsRaw);
        var rpm = a$(rpmRaw);
        var rd = a$(rdRaw);
        var rc = a$(_("rc").value);
        var dhc = a$(_("dhc").value);
        var asp = a$(_("asp").value);
        var nv = a$(_("nv").value);
        var dis = a$(_("disInput").value);
        var vc = 300 * nv;

        // Handle empty key fields
        if (monthsRaw === "" || rpmRaw === "" || rdRaw === "") {
            _("tsd").value = "NaN"; // Show NaN in the TSD input field
            // _("vc").value = "";                   // Clear visit charges
            _("dis").innerText = "₹" + dis; // Keep discount unchanged
            _("tcp").innerText = "NaN"; // Show NaN without ₹
            _("tcpInput").value = ""; // Clear hidden TCP field
            return;
        }

        // Calculate Stamp Duty (0.25%)
        var tsd = Math.round((((months * rpm) + ((rd * months) / 12) * 0.1) * 0.25) / 100) / 100;
        tsd = Math.ceil(tsd) * 100;
        _('tsd').value = tsd;

        // Set Visit Charges
        _("vc").value = vc;

        // Calculate total and discount
        var totalCharges = tsd + rc + dhc + asp + vc;
        var totalAfterDiscount = totalCharges - dis;

        // Update fields
        _("disInput").value = dis;
        _("tcpInput").value = totalAfterDiscount;
        _("dis").innerText = "₹" + dis;
        _("tcp").innerText = "₹" + totalAfterDiscount;
    }

    // Run calculation on page load
    window.addEventListener("DOMContentLoaded", calculate);
    </script>
</body>

</html>