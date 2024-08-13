<!DOCTYPE html>
<html lang="en">

<head>
    <title>Benefits | KONNEXIO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Konnexio is a custom machine builder located in London Ontario. Our specialty is adapto™ which is a modular assembly line construction technology.">
    <link rel="icon" href="Logo/konnexio-icon.ico" type="image/x-icon">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/be_1_styles.css">

    <!-- JS Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
    
    <!-- Header Section -->
    <?php include 'header.php'; ?>

    <!-- Future Ready Section -->
    <section id="be_future-ready" class="py-5">
        <div class="container">
            <h2>Future Ready</h2>
            <p>Addressing the challenge: Evolving Market Demands</p>

            <!-- Accordion for Features -->
            <div class="accordion" id="be_futureReadyFeatures">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="be_featureOneHeading">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#be_featureOne" aria-expanded="true" aria-controls="be_featureOne">
                            Flexible Tooling Mounts
                        </button>
                    </h2>
                    <div id="be_featureOne" class="accordion-collapse collapse show" aria-labelledby="be_featureOneHeading" data-bs-parent="#be_futureReadyFeatures">
                        <div class="accordion-body">
                            Adapto's flexible tooling mounts enable rapid reconfiguration and adjustments...
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="be_featureTwoHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#be_featureTwo" aria-expanded="false" aria-controls="be_featureTwo">
                            Programmable Machine Functions
                        </button>
                    </h2>
                    <div id="be_featureTwo" class="accordion-collapse collapse" aria-labelledby="be_featureTwoHeading" data-bs-parent="#be_futureReadyFeatures">
                        <div class="accordion-body">
                            Our machinery offers fully programmable primary and secondary functions...
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="be_featureThreeHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#be_featureThree" aria-expanded="false" aria-controls="be_featureThree">
                            Modular Cells
                        </button>
                    </h2>
                    <div id="be_featureThree" class="accordion-collapse collapse" aria-labelledby="be_featureThreeHeading" data-bs-parent="#be_futureReadyFeatures">
                        <div class="accordion-body">
                            Each Adapto cell functions as an independent unit...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottleneck Optimization Section -->
    <section id="be_bottleneck-optimization" class="py-5 bg-light">
        <div class="container">
            <h2>Bottleneck Optimization</h2>
            <p>Addressing the challenge: Over-automation and Under-automation</p>

            <!-- Tabbed Interface -->
            <ul class="nav nav-tabs" id="be_bottleneckTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="be_challenge-tab" data-bs-toggle="tab" data-bs-target="#be_challenge" type="button" role="tab" aria-controls="be_challenge" aria-selected="true">Challenge</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="be_solution-tab" data-bs-toggle="tab" data-bs-target="#be_solution" type="button" role="tab" aria-controls="be_solution" aria-selected="false">Solution</button>
                </li>
            </ul>
            <div class="tab-content mt-3" id="be_bottleneckTabContent">
                <div class="tab-pane fade show active" id="be_challenge" role="tabpanel" aria-labelledby="be_challenge-tab">
                    Many automation providers address bottlenecks by implementing large-scale automation...
                </div>
                <div class="tab-pane fade" id="be_solution" role="tabpanel" aria-labelledby="be_solution-tab">
                    Adapto offers a strategic and targeted approach to automation...
                </div>
            </div>
        </div>
    </section>

    <!-- Productivity Boost Section -->
    <section id="be_productivity-boost" class="py-5">
        <div class="container">
            <h2>Productivity Boost</h2>
            <p>Addressing the challenge: Downtime and maintenance costs</p>

            <!-- Modal Trigger for Features -->
            <div class="row">
                <div class="col-md-6">
                    <h3>Pre-Engineered Solutions</h3>
                    <p>Adapto's systems are distinguished by their advanced standardization...</p>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#be_preEngineeredModal">
                        Learn More
                    </button>
                </div>
                <div class="col-md-6">
                    <h3>High-Quality Components</h3>
                    <p>Adapto utilizes pre-tested, high-quality components...</p>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#be_componentsModal">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>

    <!-- JS -->
    <script src="js/script.js"></script>
    <script src="js/id_script.js"></script>
</body>
</html>
