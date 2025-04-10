<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vellore Institute of Technology</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/collegeicon.jpeg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <style>
        .iti {
            width: 100% !important;
        }


        .landingform ::placeholder {
            font-size: 15px;
        }

        .landingform {
            font-size: 20px;
        }

        .landingform small {
            font-size: 12px;
        }

        .landingform {
            margin-top: 250px !important;
            margin-right: 100px !important;
        }



        .mobile {
            display: none;
        }

        .coursedropdown .courses {
            width: 100% !important;
        }

        .coursedropdown select {
            height: 40px;
            padding: 10px;
        }

        .approvedby {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            background-color: #004C93;
            height: 200px;
            padding-top: 20px;
        }

        .approvedby p {
            font-size: 20px;
        }

        .landingform .form-container {
            background: white;
            border-radius: 20px;
            backdrop-filter: blur(12px);
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 76, 147, 0.3);
            text-align: center;
            color: black;
        }

        .landingform .form-title {
            font-size: 24px;
            font-weight: bold;
            color: #004C93;
        }

        .landingform .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .landingform .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #595959;
        }

        .landingform input,
        select {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.3);
            color: black;
            transition: all 0.3s;
        }

        .landingform .submit-btn {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 50px;
            border: none;
            background: linear-gradient(135deg, #004C93, #004C93);
            color: white;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 8px 20px #004C93;
        }

        .landingform .submit-btn:hover {
            background: white;
            color: #004C93;
            box-shadow: 0 4px 30px #004C93;
            transform: translateY(-3px);
        }

        .mobileform {
            display: none;
        }

        .exploree .course {
            height: 350px;
        }

        .exploree .course-card h6 {
            font-size: 20px;
        }

        @media only screen and (max-width: 900px) {
            .landingform {
                display: none;
            }

            .sliders .silde .mobile {
                display: block;
                /* width: 20px !important; */

                padding-bottom: 15px;
                border-radius: 10px;
                margin-top: 400px;
                margin-right: 30px;
            }

            .mobileform {
                display: block;
            }

            .mobileform label {
                font-size: 12px;
            }

            .mobileform input {
                height: 25px;
            }

            .mobileform .select {
                height: 30px;
            }

            .mobileform .form-container input::placeholder {
                font-size: 12px !important;
            }

            .mobile label {
                font-size: 10px;
            }

            .single-slider {

                height: 900px !important;
            }

            .coursename {
                font-size: 15px;
            }

            .knowmore {
                font-size: 11px;
                margin-top: 22px;
                padding-right: 5px;
            }
        }
    </style>

    <div class=" bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">

            <a href="./" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <img src="img/collegelogo.png" alt="" width="200px" height="60px">

            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                style="margin-left:80%; margin-top: -70px;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="./" class="nav-item nav-link active">Home</a>
                    <a href="./about" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">MCA</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="./MCAartificialintelligence" class="dropdown-item">Artificial Intelligence (AI)</a>
                            <a href="./MCAmachinelearning" class="dropdown-item">Machine Learning (ML)​</a>
                            <a href="./MCACybersecurity" class="dropdown-item">Cybersecurity</a>
                            <a href="./MCABigDataAnalytics" class="dropdown-item">Big Data Analytics</a>
                            <a href="./MCAMobileapplicationdevelopment" class="dropdown-item">Mobile Application
                                Development</a>
                            <a href="./MCABlockchaintechnologies" class="dropdown-item">Blockchain Technologies</a>
                            <a href="./MCASoftwarequalityassuranceandreliability" class="dropdown-item">Software quality
                                assurance and reliability</a>
                            <a href="./MCAVirtualandAugmentedReality" class="dropdown-item">Virtual and Augmented
                                Reality</a>
                            <a href="./MCAComputerarchitecture" class="dropdown-item">Computer architecture</a>
                            <a href="./MCACyberforensics" class="dropdown-item">Cyber forensics</a>
                            <a href="./MCADataminingtechiquesformca" class="dropdown-item">Data mining techiques</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">MBA</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="./MBADigitalmarketing" class="dropdown-item">Digital Marketing</a>
                            <a href="./MBAReatailManagement" class="dropdown-item">Retail Management</a>
                            <a href="./MBALogisticsandsupplychainmangement" class="dropdown-item">Logistics and Supply
                                Chain Management</a>
                            <a href="./MBAMarketinganalytics" class="dropdown-item">Marketing Analytics​</a>
                            <a href="./MBABusinessanalytics" class="dropdown-item">Business Analytics</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">M.Sc.</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="./MSCDatascience" class="dropdown-item">Data Science</a>
                        </div>
                    </div>

                    <a href="./contact/" class="nav-item nav-link">Contact</a>
                </div>

            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 sliders">
            <div class="owl-carousel header-carousel position-relative">

                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/vit1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(43, 57, 64, .5);">
                        <div class="container silde">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4 header1"><span
                                            style="color:#00ccff; font-size: 90px;">Online </span>VIT: Innovate,
                                        Research, Excel</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                        Online VIT Empowers you with Advanced Research Opportunities and Global
                                        Collaborations—all Accessible from Anywhere. Shape the Future with Cutting-edge
                                        Learning.
                                    </p>
                                    <a href="./explore/"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft exp">Explore
                                        Online
                                        Research</a>
                                    <a href="./contact"
                                        class="btn btn-secondary py-md-3 px-md-5 animated slideInRight join">Join
                                        Global Networks</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/vit1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4 header1">Transform Your
                                        Future
                                        with <span style="color:#00ccff; font-size: 80px;"> Online VIT</span></h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                        <span>Online </span> VIT Offers a Dynamic and Interactive Learning Experience
                                        with Globally
                                        Recognized Courses, Expert Faculty, and Unmatched Career Support. Learn anytime,
                                        anywhere!
                                    </p>
                                    <a href="./explore/"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft exp">Discover
                                        Online Courses</a>
                                    <a href="./contact/"
                                        class="btn btn-secondary py-md-3 px-md-5 animated slideInRight join">Career
                                        Opportunities</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12 landingform"
                style="position: absolute; top: 0; z-index: 10; right: 0;">
                <div class="content mt-4">
                    <div class="form-container p-4 shadow-lg rounded" style="max-width: 480px; margin-left: 30px;">
                        <h4 class="text-center mb-4 form-title">🎓 Enroll Now</h4>

                        <div class="form-group mb-3">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name"
                                required>
                            <small id="name-error" class="error-message" style="color: red"></small>
                        </div>

                        <div class="row">
                            <div class="col-6 form-group mb-3">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="0123456789"
                                    required>
                                <small id="phone-error" class="error-message" style="color: red"></small>
                            </div>
                            <div class="col-6 form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Enter Your Email" required>
                                <small id="email-error" class="error-message" style="color: red"></small>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="courses">Select Course</label>
                            <select id="courses" name="course" class="form-control select" required>
                                <option selected disabled>Choose Course</option>
                                <option value="mca">MCA</option>
                                <option value="ai">MCA - Artificial Intelligence</option>
                                <option value="ml">MCA - Machine Learning</option>
                                <option value="cybersecurity">MCA - Cybersecurity</option>
                                <option value="bigdata">MCA - Big Data Analytics</option>
                                <option value="mobileapp">MCA - Mobile Application Development</option>
                                <option value="blockchain">MCA - Blockchain Technologies</option>
                                <option value="software">MCA - Software quality assurance and reliability</option>
                                <option value="virtual">MCA - Virtual and Augmented Reality</option>
                                <option value="computer">MCA - Computer architecture</option>
                                <option value="cyberforensics">MCA - Cyber forensics</option>
                                <option value="datamining">MCA - Data mining techiques</option>
                                <option value="mba">MBA</option>
                                <option value="digital">MBA - Digital Marketing</option>
                                <option value="retail">MBA - Retail Management</option>
                                <option value="logistics">MBA - Logistics and Supply Chain Management</option>
                                <option value="marketing">MBA - Marketing Analytics</option>
                                <option value="business">MBA - Business Analytics</option>
                                <option value="msc">MSC</option>
                                <option value="datascience">MSC - DataScience</option>

                            </select>
                            <small id="course-error" class="error-message" style="color: red"></small>
                        </div>

                        <div class="text-center">
                            <button type="button" class="submit-btn" onclick="validateForm()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- mobileform-start -->

        <div class="col-lg-4 col-md-12 col-12 mobileform" style="background-color:#004C93;">
            <div class="content pt-5 pb-5">
                <div class="form-container p-4 card" style="max-width: 480px; margin-left: 30px; border-radius:10px;">
                    <h4 class="text-center mb-4 form-title">🎓 Enroll Now</h4>

                    <div class="form-group mb-3">
                        <label for="name">Full Name</label>
                        <input type="text" id="names" name="name" class="form-control" placeholder="Enter Your Name"
                            required>
                        <small id="name-errors" class="error-message" style="color: red; font-size: 10px;"></small>
                    </div>

                    <div class="form-group mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phones" name="phone" class="form-control" placeholder="0123456789"
                            required>
                        <small id="phone-errors" class="error-message" style="color: red;font-size: 10px;"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" id="emails" name="email" class="form-control" placeholder="Enter Your Email"
                            required>
                        <small id="email-errors" class="error-message" style="color: red;font-size: 10px;"></small>
                    </div>

                    <div class="form-group mb-3">
                        <label for="coursess">Select Course</label>
                        <select id="coursess" name="course" class="form-control select" required>
                            <option selected>Choose Course</option>
                            <option value="mca">MCA</option>
                            <option value="ai">MCA - Artificial Intelligence</option>
                            <option value="ml">MCA - Machine Learning</option>
                            <option value="cybersecurity">MCA - Cybersecurity</option>
                            <option value="bigdata">MCA - Big Data Analytics</option>
                            <option value="mobileapp">MCA - Mobile Application Development</option>
                            <option value="blockchain">MCA - Blockchain Technologies</option>
                            <option value="software">MCA - Software quality assurance and reliability</option>
                            <option value="virtual">MCA - Virtual and Augmented Reality</option>
                            <option value="computer">MCA - Computer architecture</option>
                            <option value="cyberforensics">MCA - Cyber forensics</option>
                            <option value="datamining">MCA - Data mining techiques</option>
                            <option value="mba">MBA</option>
                            <option value="digital">MBA - Digital Marketing</option>
                            <option value="retail">MBA - Retail Management</option>
                            <option value="logistics">MBA - Logistics and Supply Chain Management</option>
                            <option value="marketing">MBA - Marketing Analytics</option>
                            <option value="business">MBA - Business Analytics</option>
                            <option value="msc">MSC</option>
                            <option value="datascience">MSC - DataScience</option>

                        </select>
                        <small id="course-errors" class="error-message" style="color: red;font-size: 10px;"></small>
                    </div>

                    <div class="text-center">
                        <button type="button" class="submit-btn" onclick="formValidate()"
                            style="background-Color:#004C93; color: #ffff; border:none; border-radius:5px; padding:5px 10px 5px 10px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- mobileform-end -->

        <!-- Carousel End -->
        <h2 class="text-center mt-5 mb-5 approvel">Online VIT Approved By</h2>
        <div class="approvedby">
            <div class="approved">
                <img src="img/ugc.png" alt="ugc image" width="130px" height="120px">
                <p class="text-center pt-2" style="color: #ffff;">UGC</p>
            </div>
            <div class="approved">
                <img src="img/naac.png" alt="naac image" width="130px" height="120px">
                <p class="text-center pt-2" style="color: #ffff;">NAAC A++</p>
            </div>
            <div class="approved">
                <img src="img/aicte.jpeg" alt="aicte" height="130px" width="120px">
                <p class="text-center pt-2" style="color: #ffff;">AICTE</p>
            </div>
        </div>

        <!-- Category Start -->
        <div class="container-xxl py-5 exploree">
            <div class="container" style="padding-top:50px;">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s"
                    style="color:black; font-weight: bold; padding-bottom: 10px;">Explore Our <span
                        style="color: #004C93;">Online VIT </span> Courses
                </h1>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="course-card rounded p-4 shadow text-center course" style="position:relative">
                            <p style="font-size:80px;"> 🎓 </p>
                            <h5 class="mb-3">Master of Computer Applications (MCA)</h5>
                            <h6 class="mb-2 mt-3" style="color: #004C93;">Duration: <strong>2 Years</strong> | Courses:
                                <strong>11</strong>
                            </h6>
                            <a href="./mca/" class="btn btn-primary mt-3">View More</a>
                        </div>
                        <button
                            style="position:absolute; top: 0; left: 0; margin-left: 18px; background-color: #004C93; border: none; color: #fff; padding: 5px; border-radius: 5px; margin-top: 5px;"><i
                                class="fa-solid fa-star" style="padding-right: 5px;"></i>4.5</button>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="course-card rounded p-4 shadow text-center course" style="position:relative">
                            <p style="font-size:80px;"> 🎓 </p>
                            <h5 class="mb-3">Master of Business Administration (MBA)</h5>
                            <h6 class="mb-2 mt-3" style="color: #004C93;">Duration: <strong>2 Years</strong> | Courses:
                                <strong>5</strong>
                            </h6>
                            <a href="./mba/" class="btn btn-primary mt-3">View More</a>
                        </div>
                        <button
                            style="position:absolute; top: 0; left: 0; margin-left: 18px; background-color: #004C93; border: none; color: #fff; padding: 5px; border-radius: 5px; margin-top: 5px;"><i
                                class="fa-solid fa-star" style="padding-right: 5px;"></i>4.5</button>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="course-card rounded p-4 shadow text-center course" style="position:relative">
                            <p style="font-size:80px;"> 🎓 </p>
                            <h5 class="mb-3">Master of Data Science <br> (M.Sc.)</h5>
                            <h6 class="mb-2 mt-3" style="color: #004C93;">Duration: <strong>2 Years</strong> | Courses:
                                <strong>1</strong>
                            </h6>
                            <a href="./msc/" class="btn btn-primary mt-3">View More</a>
                        </div>
                        <button
                            style="position:absolute; top: 0; left: 0; margin-left: 18px; background-color: #004C93; border: none; color: #fff; padding: 5px; border-radius: 5px; margin-top: 5px;"><i
                                class="fa-solid fa-star" style="padding-right: 5px;"></i>4.5</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Category End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h2 class="text-center pb-5">About Online VIT Education</h2>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="img/vit2.webp" alt="VIT Image">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="img/vit4.jpeg" alt="VIT image"
                                    style="width: 85%; margin-top: 15%; height: 100%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="img/vit3.jpeg" alt="VIT Image" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="img/vit1.jpg" alt="VIT Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Empowering Learning with <span style="color:#004C93 ;">Online VIT</span></h1>
                        <p class="mb-4">Online VIT brings world-class education to your fingertips. Whether you're
                            looking to upskill, change careers, or gain new knowledge, our flexible online programs
                            provide high-quality learning experiences that fit your schedule.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Interactive and engaging online courses</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Expert faculty and industry-relevant curriculum
                        </p>
                        <p><i class="fa fa-check text-primary me-3"></i>Flexible learning anytime, anywhere</p>
                        <a class="btn btn-primary py-3 px-5 mt-3 aboutexplore" href="./about/">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Jobs Start -->
        <div class="container-xxl py-5" style="position: relative;">
            <div class="container applycontent" id="applycontent">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Online VIT Courses</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                                href="#tab-1">
                                <h6 class="mt-n1 mb-0">All</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                                href="#tab-2">
                                <h6 class="mt-n1 mb-0">UG Courses</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                                href="#tab-3">
                                <h6 class="mt-n1 mb-0">PG Courses</h6>
                            </a>
                        </li>
                    </ul> -->
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/collegeicon.jpeg"
                                            alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">MCA</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-solid fa-graduation-cap text-primary me-2"></i>11
                                                Courses</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-solid fa-square-check text-primary me-2"></i>Eligibility:
                                                50% in Graduation</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>INR 1,40,000</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary applybtn" class="btn btn-primary "
                                                data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/collegeicon.jpeg"
                                            alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">MBA</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-solid fa-graduation-cap text-primary me-2"></i>5
                                                Courses</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-solid fa-square-check text-primary me-2"></i>Eligibility:
                                                50% in Graduation</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>INR 1,60,000</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary applybtn" class="btn btn-primary"
                                                data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/collegeicon.jpeg"
                                            alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">M.Sc.</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-solid fa-graduation-cap text-primary me-2"></i>1 Course</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-solid fa-square-check text-primary me-2"></i>Eligibility:
                                                50% in Graduation</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>INR 1,50,000</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary applybtn" class="btn btn-primary"
                                                data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">🎓 Enroll Now</h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color:red;">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-4">
                            <form>

                                <div class="form-group">
                                    <label for="namee" class="font-weight-bold">Full Name</label>
                                    <input type="text" id="namee" name="name" class="form-control rounded-pill px-3"
                                        placeholder="Enter Your Name" required>
                                    <small id="name-errorr" class="error-message" style="color: red"></small>
                                </div>


                                <div class="form-group">
                                    <label for="phonee" class="font-weight-bold">Phone Number</label>
                                    <input type="tel" id="phonee" name="phone" class="form-control rounded-pill px-3"
                                        placeholder="0123456789" required>
                                    <small id="phone-errorr" class="error-message" style="color: red"></small>
                                </div>


                                <div class="form-group">
                                    <label for="emaill" class="font-weight-bold">Email</label>
                                    <input type="email" id="emaill" name="email" class="form-control rounded-pill px-3"
                                        placeholder="Enter Your Email" required>
                                    <small id="email-errorr" class="error-message" style="color: red"></small>
                                </div>


                                <div class="form-group">
                                    <label for="coursess" class="font-weight-bold">Select Course</label>
                                    <select id="coursess" name="course" class="form-control rounded-pill px-3" required>
                                        <option selected disabled>Select Course</option>
                                        <option value="mca">MCA</option>
                                        <option value="ai">MCA - Artificial Intelligence</option>
                                        <option value="ml">MCA - Machine Learning</option>
                                        <option value="cybersecurity">MCA - Cybersecurity</option>
                                        <option value="bigdata">MCA - Big Data Analytics</option>
                                        <option value="mobileapp">MCA - Mobile Application Development</option>
                                        <option value="blockchain">MCA - Blockchain Technologies</option>
                                        <option value="software">MCA - Software quality assurance and reliability
                                        </option>
                                        <option value="virtual">MCA - Virtual and Augmented Reality</option>
                                        <option value="computer">MCA - Computer architecture</option>
                                        <option value="cyberforensics">MCA - Cyber forensics</option>
                                        <option value="datamining">MCA - Data mining techiques</option>
                                        <option value="mba">MBA</option>
                                        <option value="digital">MBA - Digital Marketing</option>
                                        <option value="retail">MBA - Retail Management</option>
                                        <option value="logistics">MBA - Logistics and Supply Chain Management</option>
                                        <option value="marketing">MBA - Marketing Analytics</option>
                                        <option value="business">MBA - Business Analytics</option>
                                        <option value="msc">MSC</option>
                                        <option value="datascience">MSC - DataScience</option>

                                    </select>
                                    <small id="course-errorr" class="error-message" style="color: red"></small>
                                </div>


                                <div class="modal-footer border-0 d-flex justify-content-between">
                                    <button type="button" class="btn btn-danger rounded-pill px-4"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" onclick="LandingValidationForm()"
                                        class="btn btn-primary rounded-pill px-4">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <h1 class="text-center mb-5">Why Choose VIT?</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-check-circle fa-2x text-primary mb-3"></i>
                        <p>VIT is consistently ranked among India's top universities, offering a world-class curriculum
                            designed to meet industry demands.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/trophy.avif"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Top Rankings</h5>
                                <small>Recognized Globally</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-briefcase fa-2x text-primary mb-3"></i>
                        <p>VIT boasts an exceptional placement record, with top recruiters from around the world hiring
                            our graduates.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/student.avif"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Outstanding Placements</h5>
                                <small>High-Paying Jobs</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-flask fa-2x text-primary mb-3"></i>
                        <p>Cutting-edge research facilities at VIT allow students to innovate and contribute to
                            groundbreaking discoveries.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/research.avif"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Research & Innovation</h5>
                                <small>State-of-the-Art Labs</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-globe fa-2x text-primary mb-3"></i>
                        <p>With global collaborations and exchange programs, VIT provides international exposure to
                            students.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/global.avif"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Global Collaborations</h5>
                                <small>International Programs</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6">
                        <p> Online VIT Offers World-Class, Flexible, and Industry-Accredited Programs Designed to Foster
                            Innovation, Research, and Career Growth.</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="./mba">MBA</a>
                        <a class="btn btn-link text-white-50" href="./mca">MCA</a>
                        <a class="btn btn-link text-white-50" href="./msc">M.Sc.</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">onlinevit.com</a>, All Right Reserved.
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>