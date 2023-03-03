<!DOCTYPE html>
<html lang="en">
    <head>
        <met#aeb3b8et="utf-8">
        <title>Muhammad Saqib Abbasi</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <style>
            
            #myDiv{
                
                height:65px;
            }
            #myP{
                padding:20px;
                margin:20px 0px 0px 0px;
            }
        </style>
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 sticky-lg-top vh-100">
                    <div class="d-flex flex-column h-100 text-center overflow-auto shadow">
                        <img class="w-100 img-fluid mb-4" src="img/profile.jpg" alt="Image">
                        <h1 class="text-primary mt-2">Muhammad Saqib Abbasi</h1>
                        <div class="mb-4" style="height: 22px;">
                            <h4 class="typed-text-output d-inline-block text-light"></h4>
                            <div class="typed-text d-none"> Front End Developer, Back End Developer</div>
                        </div>
                        <div class="d-flex justify-content-center mt-auto mb-3">
                            <a class="btn btn-secondary btn-square mx-1" target="_blank" href="https://github.com/M-Saqib-Abbasi"><i class="fab fa-github"></i></a>
                            <a class="btn btn-secondary btn-square mx-1" target="_blank" href="https://www.linkedin.com/in/ms-abbasi"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-secondary btn-square mx-1" target="_blank" href="https://www.fiverr.com/msaqibabbbasi"><i class="fab fa-fonticons-fi"></i></a>
                            <a class="btn btn-secondary btn-square mx-1"  target="_blank" href="https://www.facebook.com/M03042595855"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="d-flex align-items-end justify-content-between border-top">
                            <a href="" class="btn w-50 border-end">Download CV</a>
                            <a href="#contact" class="btn w-50 btn-scroll">Contact Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                     <div class="col-12" id="myDiv">
                                      <?php 
                                    if(isset($_GET["err"])){
                                        if($_GET["err"]==1){
                                    $msg = "Email Sending Fail";   
                                    $class = "alert alert-danger";
                                        }
                                        else{
                                        $msg = "Email Send Succenfully";    
                                        $class = "alert alert-success";   
                                        }
                                    
                                    }
                                    
                                    ?>
                                    <p align="center" id="myP" class="<?php echo $class?>">
                                        <?php 
                                        if(isset($msg)){
                                            echo $msg;
                                        }
                                        ?>
                                    </p>
                                    </div>
                    <!-- About Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">About Me</h1>
                        <p>Dot NET developer with over 02 years of programming experience. Solid skills in application development and system configuration. Well known for friendly customer service.</p>
                        <p>Experience working with teams to create impactful, cutting-edge websites that engage customers and drive business outcomes. Familiarity with design standards and user preferences.</p>
                        <div class="row mb-4">
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Name:</span> Muhammad Saqib Abbasi
                            </div>
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Birthday:</span> 26 November 1996
                            </div>
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Degree:</span> Software Engineer
                            </div>
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Experience:</span> 2 Years
                            </div>
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Phone:</span> +92 304 2595855
                            </div>
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Email:</span> mohammadsaqibabbasi@gmail.com
                            </div>
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Address:</span> Hyderabad Sindh, Pakistan.
                            </div>
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Freelance:</span> Available
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">02</h1>
                                    <div class="ps-3">
                                        <p class="mb-0">Years of</p>
                                        <h5 class="mb-0">Experience</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">10</h1>
                                    <div class="ps-3">
                                        <p class="mb-0">Happy</p>
                                        <h5 class="mb-0">Clients</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">30</h1>
                                    <div class="ps-3">
                                        <p class="mb-0">Complete</p>
                                        <h5 class="mb-0">Projects</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- About End -->

                    <!-- Skills Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Skills</h1>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">HTML</p>
                                        <p class="mb-2">95%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">CSS</p>
                                        <p class="mb-2">85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">PHP</p>
                                        <p class="mb-2">70%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Selenium</p>
                                        <p class="mb-2">80%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Javascript</p>
                                        <p class="mb-2">90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">C#</p>
                                        <p class="mb-2">95%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Asp .Net</p>
                                        <p class="mb-2">85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Python</p>
                                        <p class="mb-2">60%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Skills End -->

                    <!-- Expericence Start -->
                    <section class="py-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Expericence</h1>
                        <div class="border-start border-2 border-light pt-2 ps-5">
                            <div class="position-relative mb-4">
                                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                <h5 class="mb-1">Front End Developer</h5>
                                <p class="mb-2">Basecamp Data Solution | <small>2022 - Continue</small></p>
                                <p><ul><li> using HTML, CSS, C#, ASP .Net WebForms, and JavaScript to develop functionality for mobile and desktop platforms.</li>
                                    <li>Work with customer service, sales and design teams in a time-pressed environment.</li></ul></p>
                            </div>
                            <div class="position-relative mb-4">
                                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                <h5 class="mb-1">Erp Developer Zoho</h5>
                                <p class="mb-2">Basecamp Data Solution (ERPHUB) | <small>2022</small></p>
                                <p><ul><li>Work with customers to understand their needs and provide excellent service.</li></ul></p>
                            </div>
                            <div class="position-relative mb-4">
                                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                <h5 class="mb-1">SQA Engineer</h5>
                                <p class="mb-2">Basecamp Data Solution | <small>2021 - 2022</small></p>
                                <p><ul><li>Develop and execute QA test cases, scripts, and procedures for automated software maintenance.</li>
                                    <li>Resolved technical issues and anticipated troubleshooting complications during software testing.</li></ul></p>
                                
                            </div>
                            <div class="position-relative mb-4">
                                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                <h5 class="mb-1">IT Manager</h5>
                                <p class="mb-2">Abbasi Hajj & Umrah Company (Private) Ltd. | <small>2016 - 2021</small></p>
                                <p><ul><li>Provided network support services for devices such as hubs, bridges, routers and other hardware.</li>
                                    <li>Initiated and managed network test facilities to verify network hardness and resilience.</li></ul></p>
                            </div>
                        </div>
                    </section>
                    <!-- Expericence End -->
                    <!--Education Start-->
                    <section class="py-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Education</h1>
                        <div class="border-start border-2 border-light pt-2 ps-5">
                            <div class="position-relative mb-4">
                                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                <h5 class="mb-1">Software Engineering</h5>
                                <p class="mb-2">ISRA University Hyderabad | <small>2015 - 2019</small></p>
                                <!-- <p><ul><li> using HTML, CSS, C#, ASP .Net WebForms, and JavaScript to develop functionality for mobile and desktop platforms.</li>
                                    <li>Work with customer service, sales and design teams in a time-pressed environment.</li></ul></p> -->
                            </div>
                            <div class="position-relative mb-4">
                                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                <h5 class="mb-1">Diploma in Computer Operator</h5>
                                <p class="mb-2">Sindh Technical Education and Vocational Training | <small>2014 - 2015</small></p>
                                <!-- <p><ul><li>Work with customers to understand their needs and provide excellent service.</li></ul></p> -->
                            </div>
                            <div class="position-relative mb-4">
                                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                <h5 class="mb-1">Advance Certification in Information Technology</h5>
                                <p class="mb-2">Faith College of Information Technology | <small>2012</small></p>
                                <!-- <p><ul><li>Develop and execute QA test cases, scripts, and procedures for automated software maintenance.</li>
                                    <li>Resolved technical issues and anticipated troubleshooting complications during software testing.</li></ul></p> -->
                                
                            </div>
                            <div class="position-relative mb-4">
                                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                <h5 class="mb-1">Diploma in English Language</h5>
                                <p class="mb-2">Unique Institue of English Language | <small>2011</small></p>
                                <!-- <p><ul><li>Provided network support services for devices such as hubs, bridges, routers and other hardware.</li>
                                    <li>Initiated and managed network test facilities to verify network hardness and resilience.</li></ul></p> -->
                            </div>
                        </div>
                    </section>
                    <!--Education End-->
                    <!--Online Certification Start-->
                    <section class="py-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Certification</h1>
                        <div class="row g-4">
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <!-- https://www.hackerrank.com/certificates/59586a6594e6 -->
                                    <i class="flex-shrink-0 display-5 text-primary mb-0 fab fa-hackerrank"></i>
                                    <a target="_blank" href="https://www.hackerrank.com/certificates/59586a6594e6">
                                        <div class="ps-3 text-white">
                                        <p class="mb-0">MS-SQL</p>
                                        <h5 class="mb-0">Basic</h5>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <i class="flex-shrink-0 display-5 text-primary mb-0 fab fa-hackerrank"></i>
                                    <!-- <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">10</h1> -->
                                    <!-- https://www.hackerrank.com/certificates/1412707faf6e -->
                                    <a target="_blank" href="https://www.hackerrank.com/certificates/1412707faf6e">
                                    <div class="ps-3 text-white">
                                        <p class="mb-0 ">MS-SQL</p>
                                        <h5 class="mb-0 ">Intermediate</h5>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <!-- <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">30</h1> -->
                                    <!-- https://www.freecodecamp.org/certification/fcc1c19f38f-1916-4fdf-94b9-0e60b9a48c83/responsive-web-design -->
                                    <i class="flex-shrink-0 display-5 text-primary mb-0 fab fa-free-code-camp"></i>
                                    <a target="_blank" href="https://www.freecodecamp.org/certification/fcc1c19f38f-1916-4fdf-94b9-0e60b9a48c83/responsive-web-design">
                                    <div class="ps-3 text-white">
                                        <p class="mb-0">Responsive Web Design</p>
                                        <h5 class="mb-0">Intermediate</h5>
                                    </div>
                                </a>
                                </div>
                            </div>
                        </div>
                        </section>
                    <!--Online Certification End-->
                    <!-- Subscribe Start -->
                    <section class="wow fadeInUp" style="display:none" data-wow-delay="0.1s">
                        <div class="bg-secondary text-center p-5">
                            <h1 class="text-white font-weight-bold">Subscribe My Newsletter</h1>
                            <p class="text-white">Subscribe and get my latest article in your inbox</p>
                            <div class="position-relative w-100">
                                <input class="form-control bg-dark border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                                <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                            </div>
                        </div>
                    </section>
                    <!-- Subscribe End -->

                    <!-- Services Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Services</h1>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="service-item">
                                    <i class="fa fa-2x fa-laptop-code mx-auto mb-4"></i>
                                    <h5 class="mb-2">Web Design & Development</h5>
                                    <p class="mb-0">Proficient in Conceptualizing creative ideas with clients. Also capable to design user friendly and responsive web design.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-item">
                                    <i class="fab fa-2x fas fa-desktop mx-auto mb-4"></i>
                                    <h5 class="mb-2">Desktop Apps Development</h5>
                                    <p class="mb-0">Capable in building desktop software for Mac, Windows, and Linux or upgrading existing desktop apps with new functionality.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-item">
                                    <i class="fa fa-2x fas fa-palette mx-auto mb-4"></i>
                                    <h5 class="mb-2">Graphics Desgin</h5>
                                    <p class="mb-0">I'm a creative person driven by my passion for design. I'm proficient with graphic tools and have an artistic approach towards everything I create. I'm also a team player and know how to improve myself when given feedback.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-item">
                                    <i class="fa fa-2x fas fa-database mx-auto mb-4"></i>
                                    <h5 class="mb-2">Database Manager</h5>
                                    <p class="mb-0">Capable for developing and maintaining an organizations' systems that store and organize data for companies. By implementing several security programs, they ensure the safety of stored data.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Services End -->

                    <!-- Portfolio Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Portfolio</h1>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 text-center mb-2">
                                        <ul class="list-inline mb-4" id="portfolio-flters">
                                            <li class="btn btn-secondary active"  data-filter="*"><i class="fa fa-star me-2"></i>All</li>
                                            <li class="btn btn-secondary" data-filter=".first"><i class="fa fa-laptop-code me-2"></i>Design</li>
                                            <li class="btn btn-secondary" data-filter=".second"><i class="fa fa-mobile-alt me-2"></i>Development</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row portfolio-container">
                                    <div class="col-md-6 mb-4 portfolio-item first">
                                        <div class="position-relative overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                                    <i class="bi bi-plus text-light"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 portfolio-item second">
                                        <div class="position-relative overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                                    <i class="bi bi-plus text-light"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 portfolio-item first">
                                        <div class="position-relative overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                                    <i class="bi bi-plus text-light"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 portfolio-item second">
                                        <div class="position-relative overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                                    <i class="bi bi-plus text-light"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Portfolio End -->

                    <!-- Testimonial Start -->
                    <section class="py-5 border-bottom wow fadeInUp" style="Display:none" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Testimonial</h1>
                        <div class="owl-carousel testimonial-carousel">
                            <div class="text-left">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <p class="fs-4 mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <p class="text-primary fs-5 mb-1">Client Name</p>
                                        <i>Profession</i>
                                    </div>
                                </div>
                            </div>
                            <div class="text-left">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <p class="fs-4 mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <p class="text-primary fs-5 mb-1">Client Name</p>
                                        <i>Profession</i>
                                    </div>
                                </div>
                            </div>
                            <div class="text-left">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <p class="fs-4 mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <p class="text-primary fs-5 mb-1">Client Name</p>
                                        <i>Profession</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Testimonial End -->

                    <!-- Contact Start -->
                    <section class="py-5 wow fadeInUp" data-wow-delay="0.1s" id="contact">
                        <h1 class="title pb-3 mb-5">Contact Me</h1>
						
                        <form  action ="send_mail.php" method="post" >
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-secondary" id="name" name="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0 bg-secondary" id="email" placeholder="Your Email" name="email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-secondary" id="subject" placeholder="Subject" name="subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 bg-secondary" placeholder="Leave a message here" id="message" style="height: 200px" name="message"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3 btnfade" type="submit" onSubmit="javas()"  name="submit">Send Message</button>
                                    
                                </div>
                                
                                
                            </div>
                        </form>
                      
                    </section>
                 
                   
                    <!-- Contact End -->

                    <!-- Footer Start -->
                    <section class="wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-secondary text-light text-center p-5">
                            <div class="d-flex justify-content-center mb-4">
                                <a class="btn btn-dark btn-square mx-1" target="_blank" href="https://github.com/M-Saqib-Abbasi"><i class="fab fa-github"></i></a>
                                <a class="btn btn-dark btn-square mx-1" target="_blank" href="https://www.linkedin.com/in/ms-abbasi"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-dark btn-square mx-1" target="_blank" href="https://www.fiverr.com/msaqibabbbasi"><i class="fab fa-fonticons-fi"></i></a>
                                <a class="btn btn-dark btn-square mx-1" target="_blank" href="https://www.facebook.com/M03042595855"><i class="fab fa-facebook-f"></i></a>

                            
                            </div>
                            <!-- <div class="d-flex justify-content-center mb-3" >
                                <a class="text-light px-3 border-end" href="#">Privacy</a>
                                <a class="text-light px-3 border-end" href="#">Terms</a>
                                <a class="text-light px-3 border-end" href="#">FAQs</a>
                                <a class="text-light px-3" href="#">Help</a>
                            </div> -->
							
                            
							
                        </div>
                    </section>
                    <!-- Footer End -->
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function(){
  
    
    $("#myP").fadeOut(6000);
  
});
        </script>
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
