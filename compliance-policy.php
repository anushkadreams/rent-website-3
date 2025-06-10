<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compliance Policy || Online Rental Agreement</title>
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
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Compliance
                        Policy</h1>
                    <nav aria-label="breadcrumb d-flex flex-column align-items-center justify-content-center">
                        <ol class="breadcrumb justify-content-center align-itemms-center" data-aos="fade-up"
                            data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Compliance Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

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
</body>

</html>