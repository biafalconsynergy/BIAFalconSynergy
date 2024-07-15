<!DOCTYPE html>
<html lang="en">

<head>
    <title>KONNEXIO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/konnexio-icon.png" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/ad_style.css">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" defer></script>
    <script src="js/ad_scripts.js" defer></script>
</head>

<body>
    <?php include 'header.php'; ?>

    <main>
        <!-- Adapto Intro Section -->
        <section class="adapto_intro" id="ad_intro">
            <div class="heroText">
                <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                    adapto™
                </h1>
                <h2 class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                    Modular Automation for a Dynamic Future 
                </h2>
            </div>

            <div class="videoWrapper">
                <img src="images/adapto.gif" alt="Adapto Intro GIF" class="custom-video">
            </div>
            
            <div class="overlay"></div>
        </section>

        <!-- Adapto Text Section -->
        <section class="section-padding pb-0 adapto_text" id="about">
            <div class="container mb-5 pb-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <h1 class="mb-3" data-aos="fade-up">Let us create...</h1>
                        <h3 class="me-4" data-aos="fade-up" data-aos-delay="300">
                            Adapto® Smart Cell Technology by KONNEXIO is a customizable <strong>Lego-like</strong> automation system with modular smart cells. It allows quick adaptation to new processes and requirements, offering exceptional quality, efficiency, and flexibility for evolving customer needs.
                        </h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Adapto Key Features Section -->
        <div class="bg_full" id="adapto_keyfeatures">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 margin_bott">
                                <div class="services_box">
                                    <figure><img src="images/01.png" alt="#"/></figure>
                                    <h3>Modular Assembly</h3>
                                    <p>Smart Cells can function alone or be integrated into larger systems</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 margin_bott">
                                <div class="services_box">
                                    <figure><img src="images/adapto_02.png" alt="#"/></figure>
                                    <h3>Adaptive Processes</h3>
                                    <p>Easily add vision systems, feeders, and robots as needed.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="services_box">
                                    <figure><img src="images/adapto_03.png" alt="#"/></figure>
                                    <h3>Swift Modifications</h3>
                                    <p>Quickly adapt to changes, ensuring faster time-to-market.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>
