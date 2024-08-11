<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us | KONNEXIO</title>
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
        <link rel="stylesheet" href="css/ct_styles.css">
    
        <!-- JS Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script src="js/ct_scripts.js"></script>
    </head>

    <body>
        <!-- Header Section -->
        <?php include 'header.php'; ?>
    
        <?php if (isset($_SESSION['message'])) { ?>
          <div id="sessionMessage" style="display:none;">
              <?php echo $_SESSION['message']; ?>
          </div>
          <?php
          unset($_SESSION['message']);
        } ?>
    
        <section class="ftco-section">
          <div class="ct-container">
            <div class="row justify-content-center">
              <div class="col-md-6 text-center mb-3">
                <h2 class="heading-section">Contact Us</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="wrapper">
                  <div class="row no-gutters">
                    <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                      <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-5">Let's get in touch!</h3>
                        <div id="form-message-warning" class="mb-4"></div> 
                        <div id="form-message-success" class="mb-4">
                          Your message was sent, thank you!
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="formSales-tab" data-toggle="tab" href="#formSales" role="tab" aria-controls="formSales" aria-selected="true">Inquiry</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="formSupport-tab" data-toggle="tab" href="#formSupport" role="tab" aria-controls="formSupport" aria-selected="false">Support</a>
                          </li>
                        </ul>
                        <div class="tab-content pt-3" id="myTabContent">
                          <div class="tab-pane fade show active" id="formSales" role="tabpanel" aria-labelledby="formSales-tab">
                            <script>
                              hbspt.forms.create({
                                region: "na1",
                                portalId: "46894280",
                                formId: "d80fe2aa-a395-4dda-9872-ad53bfe89a54"
                              });
                            </script>

                          </div>
                          <div class="tab-pane fade" id="formSupport" role="tabpanel" aria-labelledby="formSupport-tab">
                            <form action="email.php" method="POST" id="supportForm" name="supportForm" class="contactForm">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="label" for="emailSupport">Email</label>
                                    <input type="email" class="form-control" name="emailSupport" id="emailSupport" placeholder="email@email.com">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="label" for="firstNameSupport">First Name</label>
                                    <input type="text" class="form-control" name="firstNameSupport" id="firstNameSupport" placeholder="First Name">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="label" for="lastNameSupport">Last Name</label>
                                    <input type="text" class="form-control" name="lastNameSupport" id="lastNameSupport" placeholder="Last Name">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="label" for="subjectSupport">Subject</label>
                                    <input type="text" class="form-control" name="subjectSupport" id="subjectSupport" placeholder="Subject">
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label class="label" for="projectNumberSupport">Project Number</label>
                                    <input type="text" class="form-control" name="projectNumberSupport" id="projectNumberSupport" placeholder="00XX">
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label class="label" for="machineNumberSupport">Machine Number</label>
                                    <input type="text" class="form-control" name="machineNumberSupport" id="machineNumberSupport" placeholder="00XX">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="label" for="companyNameSupport">Company Name</label>
                                    <input type="text" class="form-control" name="companyNameSupport" id="companyNameSupport" placeholder="Company Name">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="label" for="#">Message</label>
                                    <textarea name="messageSupport" class="form-control message-box" id="messageSupport" cols="30" rows="4" placeholder="What can we do to support your business?"></textarea>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-custom">
                                    <div class="submitting"></div>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                      <div class="info-wrap bg-custom w-100 p-md-5 p-4">
                        <img src="Images/konnexio-office.jpg" alt="Konnexio Office" class="rounded img-fluid mb-5">
                        <div class="dbox w-100 d-flex align-items-center">
                          <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                          </div>
                          <div class="text pl-3">
                            <p><span>Address:</span><br> 70 Pacific Ct #14<br>London, ON N5V 3R5</p>
                          </div>
                        </div>
                        <div class="dbox w-100 d-flex align-items-center">
                          <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                          </div>
                          <div class="text pl-3">
                            <p><span>Phone:</span> <a href="tel://5194578836" aria-label="Call Us for more information">+1 (519) 457-8836</a></p>
                          </div>
                        </div>
                        <div class="dbox w-100 d-flex align-items-center">
                          <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                          </div>
                          <div class="text pl-3">
                            <p><span>Email:</span> <a href="mailto:info@konnexio.com" aria-label="Email Us for more information">info@konnexio.com</a></p>
                          </div>
                        </div>
                        <div class="dbox w-100 d-flex align-items-center">
                          <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-globe"></span>
                          </div>
                          <div class="text pl-3">
                            <p><span>Website:</span> <a href="https://www.konnexio.com/" aria-label="Visit Us at Konnexio.com">www.konnexio.com</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ct-container pt-5 mb-5">
            <div class="row justify-content-center">
              <div class="col-md-6 text-center mt-5 mb-3">
                <h2 class="heading-section">Our Office Location</h2>
              </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2917.5109869850908!2d-81.17708012437848!3d43.009630593817604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882eed3828696603%3A0x8995d1593b38c989!2sKonnexio%20Inc.!5e0!3m2!1sen!2sca!4v1721086683724!5m2!1sen!2sca" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        </section>    
        
        <!-- Footer Section -->
        <?php include 'footer.php'; ?>
    
        <!-- <script src="js/ct_jquery.min.js"></script>
        <script src="js/ct_popper.js"></script>
        <script src="js/ct_bootstrap.min.js"></script>
        <script src="js/ct_jquery.validate.min.js"></script>
        <script src="js/ct_form_sales.js"></script>
        <script src="js/ct_form_support.js"></script> -->

        <script>
        document.addEventListener("DOMContentLoaded", function() {
        // Check if the URL contains the hash for formSupport
        if (window.location.hash === '#formSupport') {
          document.querySelector('#formSupport-tab').click();}
        });
        </script>   
    </body>
</html>